<?php

namespace Tests\Feature;

use App\Models\CoffeeBean;
use App\Models\ContactMessage;
use App\Models\MenuItem;
use App\Models\WholesaleInquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CoffeeShopTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\CoffeeShopSeeder::class);
    }

    /**
     * Test 1: Homepage loads successfully with featured beans & recommended items
     */
    public function test_homepage_is_accessible_and_renders_beans(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Kala Sangrai');
        $response->assertSee('Sangrai presisi, seduh murni');
        $response->assertSee('Aceh Gayo Pantan Musara');
        $response->assertSee('Giesen');
    }

    /**
     * Test 2: In-house menu page loads and can filter by category
     */
    public function test_menu_page_is_accessible_and_filterable(): void
    {
        $response = $this->get('/menu');
        $response->assertStatus(200);
        $response->assertSee('Buku Menu Bar & Dapur', false);
        $response->assertSee('Espresso Double Shot');

        // Test category filter
        $responseFiltered = $this->get('/menu?category=manual_brew');
        $responseFiltered->assertStatus(200);
        $responseFiltered->assertSee('V60 Single Origin Hand Drip');
    }

    /**
     * Test 3: Coffee beans retail catalog loads and can filter
     */
    public function test_coffee_beans_catalog_is_accessible(): void
    {
        $response = $this->get('/biji-kopi');
        $response->assertStatus(200);
        $response->assertSee('Biji kopi nusantara pilihan sangrai segar');
        $response->assertSee('Aceh Gayo Pantan Musara');
        $response->assertSee('Toraja Sapan Buntu Pepasan');

        // Filter test
        $responseWashed = $this->get('/biji-kopi?filter=washed');
        $responseWashed->assertStatus(200);
        $responseWashed->assertSee('Toraja Sapan');
    }

    /**
     * Test 4: Coffee bean detail page renders properly
     */
    public function test_coffee_bean_detail_page_loads(): void
    {
        $bean = CoffeeBean::first();
        $response = $this->get('/biji-kopi/' . $bean->slug);

        $response->assertStatus(200);
        $response->assertSee($bean->name);
        $response->assertSee($bean->origin);
        $response->assertSee('Ketinggian Tanam');
        $response->assertSee('Catatan Rasa Terdeteksi');
        $response->assertSee('Pesan Langsung via WhatsApp');
    }

    /**
     * Test 5: About page loads successfully
     */
    public function test_about_page_is_accessible(): void
    {
        $response = $this->get('/tentang');

        $response->assertStatus(200);
        $response->assertSee('Tentang Roastery & Filosofi Sangrai');
        $response->assertSee('Giesen W6A Roaster');
        $response->assertSee('Filtrasi Mineral 140 PPM');
    }

    /**
     * Test 6: Space & atmosphere page loads
     */
    public function test_atmosphere_page_is_accessible(): void
    {
        $response = $this->get('/ruang-suasana');

        $response->assertStatus(200);
        $response->assertSee('Ruang & Suasana', false);
        $response->assertSee('Slow Bar & Meja Seduh Rendah', false);
        $response->assertSee('Fasilitas Pengunjung');
    }

    /**
     * Test 7: Wholesale page loads successfully
     */
    public function test_wholesale_page_is_accessible(): void
    {
        $response = $this->get('/wholesale');

        $response->assertStatus(200);
        $response->assertSee('Wholesale B2B');
        $response->assertSee('Pasokan roasted beans konsisten untuk bisnis Anda');
        $response->assertSee('Mulai 5 kg per Pesanan');
    }

    /**
     * Test 8: Wholesale inquiry submission succeeds and stores data
     */
    public function test_wholesale_inquiry_submission_stores_data(): void
    {
        $payload = [
            'company_name' => 'Kopi Sejahtera Melawai',
            'contact_name' => 'Aditya Nugroho',
            'phone' => '081298765432',
            'email' => 'aditya@kopisejahtera.id',
            'business_type' => 'Coffee Shop / Cafe',
            'monthly_volume' => '16 - 30 kg / bulan',
            'preferred_blend' => 'Blend untuk Es Kopi Susu',
            'needs_equipment_consultation' => 1,
            'notes' => 'Membutuhkan sampel biji kopi untuk uji seduh minggu ini.',
        ];

        $response = $this->post('/wholesale', $payload);

        $this->assertDatabaseHas('wholesale_inquiries', [
            'company_name' => 'Kopi Sejahtera Melawai',
            'contact_name' => 'Aditya Nugroho',
            'monthly_volume' => '16 - 30 kg / bulan',
        ]);

        $inquiry = WholesaleInquiry::where('company_name', 'Kopi Sejahtera Melawai')->first();
        $response->assertRedirect(route('wholesale.success', ['id' => $inquiry->id]));
    }

    /**
     * Test 9: Wholesale honeypot spam protection works
     */
    public function test_wholesale_honeypot_blocks_bot_submissions(): void
    {
        $payload = [
            'company_name' => 'Bot Company',
            'contact_name' => 'Spam Bot',
            'phone' => '08999999999',
            'email' => 'spambot@example.com',
            'business_type' => 'Other',
            'monthly_volume' => '> 60 kg / bulan',
            'roastery_check_hp' => 'I am a spam bot',
        ];

        $response = $this->post('/wholesale', $payload);

        $this->assertDatabaseMissing('wholesale_inquiries', [
            'company_name' => 'Bot Company',
        ]);
        $response->assertSessionHas('error');
    }

    /**
     * Test 10: Contact message submission succeeds
     */
    public function test_contact_submission_stores_message(): void
    {
        $payload = [
            'name' => 'Rina Wijayanti',
            'phone' => '081311223344',
            'email' => 'rina@example.com',
            'subject' => 'Reservasi Meja Komunal untuk Komunitas Buku',
            'message' => 'Halo Kala Sangrai, kami ingin berkumpul 8 orang hari Sabtu jam 10 pagi.',
        ];

        $response = $this->post('/kontak', $payload);

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Rina Wijayanti',
            'email' => 'rina@example.com',
        ]);
        $response->assertSessionHas('success');
    }

    /**
     * Test 11: Contact honeypot spam protection works
     */
    public function test_contact_honeypot_blocks_bot_submissions(): void
    {
        $payload = [
            'name' => 'Spam Bot',
            'email' => 'bot@spam.com',
            'message' => 'Buy cheap links now',
            'roastery_check_hp' => 'spambot filling hidden input',
        ];

        $response = $this->post('/kontak', $payload);

        $this->assertDatabaseMissing('contact_messages', [
            'email' => 'bot@spam.com',
        ]);
        $response->assertSessionHas('error');
    }

    /**
     * Test 12: Technical SEO sitemap.xml and robots.txt are valid
     */
    public function test_technical_seo_endpoints_are_valid(): void
    {
        $sitemapResponse = $this->get('/sitemap.xml');
        $sitemapResponse->assertStatus(200);
        $sitemapResponse->assertHeader('Content-Type', 'application/xml');
        $sitemapResponse->assertSee('<urlset', false);
        $sitemapResponse->assertSee('aceh-gayo-pantan-musara');

        $robotsResponse = $this->get('/robots.txt');
        $robotsResponse->assertStatus(200);
        $robotsResponse->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $robotsResponse->assertSee('User-agent: *');
        $robotsResponse->assertSee('sitemap.xml');
    }
}
