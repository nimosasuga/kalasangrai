<?php

namespace App\Http\Controllers;

use App\Models\CoffeeBean;
use App\Models\ContactMessage;
use App\Models\MenuItem;
use App\Models\WholesaleInquiry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CoffeeShopController extends Controller
{
    /**
     * Homepage
     */
    public function home()
    {
        $featuredBeans = CoffeeBean::where('is_featured', true)->get();
        $recommendedItems = MenuItem::where('is_recommended', true)->take(6)->get();
        $allBeans = CoffeeBean::all();

        return view('pages.home', compact('featuredBeans', 'recommendedItems', 'allBeans'));
    }

    /**
     * In-house menu page
     */
    public function menu(Request $request)
    {
        $category = $request->query('category', 'all');

        $query = MenuItem::orderBy('sort_order', 'asc');

        if ($category !== 'all' && in_array($category, ['espresso_bar', 'manual_brew', 'signature_cold', 'tea_botanical', 'artisan_pastry'])) {
            $query->where('category', $category);
        }

        $items = $query->get();

        $categories = [
            'all' => 'Semua Sajian',
            'espresso_bar' => 'Espresso & Susu',
            'manual_brew' => 'Seduh Manual (Slow Bar)',
            'signature_cold' => 'Racikan Dingin & Signature',
            'tea_botanical' => 'Teh & Botani',
            'artisan_pastry' => 'Pastry Panggang',
        ];

        return view('pages.menu', compact('items', 'category', 'categories'));
    }

    /**
     * Coffee beans retail catalog
     */
    public function beans(Request $request)
    {
        $filter = $request->query('filter', 'all');

        $query = CoffeeBean::query();

        if ($filter === 'filter') {
            $query->where('roast_profile', 'like', '%Filter%');
        } elseif ($filter === 'espresso') {
            $query->where('roast_profile', 'like', '%Espresso%');
        } elseif ($filter === 'natural') {
            $query->where('process', 'like', '%Natural%');
        } elseif ($filter === 'washed') {
            $query->where('process', 'like', '%Washed%');
        }

        $beans = $query->get();

        return view('pages.beans', compact('beans', 'filter'));
    }

    /**
     * Coffee bean detail
     */
    public function beanDetail(string $slug)
    {
        $bean = CoffeeBean::where('slug', $slug)->firstOrFail();
        $relatedBeans = CoffeeBean::where('id', '!=', $bean->id)->take(3)->get();

        $whatsappPhone = config('site.whatsapp');
        $orderMessage = "Halo Kala Sangrai, saya ingin memesan Biji Kopi {$bean->name} kemasan 200g/1kg.";
        $whatsappOrderUrl = "https://wa.me/{$whatsappPhone}?text=" . urlencode($orderMessage);

        return view('pages.bean-detail', compact('bean', 'relatedBeans', 'whatsappOrderUrl'));
    }

    /**
     * About roastery & philosophy
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Space & ambiance
     */
    public function atmosphere()
    {
        return view('pages.atmosphere');
    }

    /**
     * Wholesale & B2B partnership
     */
    public function wholesale()
    {
        return view('pages.wholesale');
    }

    /**
     * Submit wholesale inquiry
     */
    public function submitWholesale(Request $request)
    {
        // Anti-bot honeypot check
        if ($request->filled('roastery_check_hp')) {
            return back()->with('error', 'Permintaan terindikasi bot.');
        }

        $validated = $request->validate([
            'company_name' => 'required|string|max:150',
            'contact_name' => 'required|string|max:100',
            'phone' => 'required|string|max:30',
            'email' => 'required|email|max:120',
            'business_type' => 'required|string|max:80',
            'monthly_volume' => 'required|string|max:50',
            'preferred_blend' => 'nullable|string|max:150',
            'needs_equipment_consultation' => 'nullable|boolean',
            'notes' => 'nullable|string|max:1000',
        ]);

        $validated['needs_equipment_consultation'] = $request->has('needs_equipment_consultation');
        $validated['ip_address'] = $request->ip();

        $inquiry = WholesaleInquiry::create($validated);

        // Pre-filled WhatsApp link for direct B2B follow-up
        $waPhone = config('site.whatsapp');
        $waText = "Halo Tim Wholesale Kala Sangrai, saya {$inquiry->contact_name} dari {$inquiry->company_name}. Kami telah mengirim formulir inquiry wholesale untuk estimasi volume {$inquiry->monthly_volume}. Mohon info penawaran & sampel biji kopi.";
        $waUrl = "https://wa.me/{$waPhone}?text=" . urlencode($waText);

        return redirect()->route('wholesale.success', ['id' => $inquiry->id])->with('whatsapp_url', $waUrl);
    }

    /**
     * Wholesale success page
     */
    public function wholesaleSuccess($id)
    {
        $inquiry = WholesaleInquiry::findOrFail($id);
        $waPhone = config('site.whatsapp');
        $waText = "Halo Tim Wholesale Kala Sangrai, saya {$inquiry->contact_name} dari {$inquiry->company_name}. Kami telah mengirim formulir inquiry wholesale #{$inquiry->id} ({$inquiry->monthly_volume}). Mohon jadwal cupping & sampel roastery.";
        $whatsappUrl = "https://wa.me/{$waPhone}?text=" . urlencode($waText);

        return view('pages.wholesale-success', compact('inquiry', 'whatsappUrl'));
    }

    /**
     * Contact page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Submit contact message
     */
    public function submitContact(Request $request)
    {
        // Anti-bot honeypot check
        if ($request->filled('roastery_check_hp')) {
            return back()->with('error', 'Permintaan terindikasi bot.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'nullable|string|max:30',
            'email' => 'required|email|max:120',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:1000',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Pesan Anda telah kami terima. Barista / Tim Roastery kami akan segera merespons.');
    }

    /**
     * Dynamic sitemap.xml
     */
    public function sitemap(): Response
    {
        $beans = CoffeeBean::select('slug', 'updated_at')->get();
        $xml = view('pages.sitemap', compact('beans'))->render();

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }

    /**
     * Dynamic robots.txt
     */
    public function robots(): Response
    {
        $sitemapUrl = url('/sitemap.xml');
        $content = "User-agent: *\nAllow: /\n\nSitemap: {$sitemapUrl}\n";

        return response($content, 200, ['Content-Type' => 'text/plain']);
    }
}
