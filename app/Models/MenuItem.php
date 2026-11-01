<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'tasting_notes',
        'serving_temperature',
        'price',
        'is_recommended',
        'is_seasonal',
        'sort_order',
        'image_url',
    ];

    protected $casts = [
        'price' => 'integer',
        'is_recommended' => 'boolean',
        'is_seasonal' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    public function getCategoryLabelAttribute(): string
    {
        return match ($this->category) {
            'espresso_bar' => 'Espresso & Susu',
            'manual_brew' => 'Seduh Manual (Slow Bar)',
            'signature_cold' => 'Racikan Dingin & Cold Brew',
            'tea_botanical' => 'Teh Artisanal & Botani',
            'artisan_pastry' => 'Pastry & Kudapan Panggang',
            default => ucfirst(str_replace('_', ' ', $this->category)),
        };
    }

    public function getDisplayImageAttribute(): string
    {
        if ($this->image_url && str_starts_with($this->image_url, 'http')) {
            return $this->image_url;
        }
        if ($this->image_url && file_exists(public_path($this->image_url))) {
            return asset($this->image_url);
        }

        $fallbacks = [
            'espresso-double-shot' => 'https://images.unsplash.com/photo-1510591509098-f4fdc6d0ff04?auto=format&fit=crop&w=800&q=80',
            'americano-long-black' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=800&q=80',
            'piccolo-latte-4oz' => 'https://images.unsplash.com/photo-1577968897966-3d4325b36b61?auto=format&fit=crop&w=800&q=80',
            'flat-white-6oz' => 'https://images.unsplash.com/photo-1534778101976-62847782c213?auto=format&fit=crop&w=800&q=80',
            'caffe-latte-8oz' => 'https://images.unsplash.com/photo-1561047029-3000c68339ca?auto=format&fit=crop&w=800&q=80',
            'cortado-wijaya' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80',
            'v60-single-origin-hand-drip' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=800&q=80',
            'aeropress-inverted-brew' => 'https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=800&q=80',
            'kalita-wave-155-precision' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=800&q=80',
            'cold-drip-senja-12-hour' => 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&fit=crop&w=800&q=80',
            'es-kopi-susu-sangrai-asli' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=800&q=80',
            'cascara-fizz-tonic' => 'https://images.unsplash.com/photo-1556881286-fc6915169721?auto=format&fit=crop&w=800&q=80',
            'hojicha-latte-panggang' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?auto=format&fit=crop&w=800&q=80',
            'pure-tabanan-dark-cocoa-70' => 'https://images.unsplash.com/photo-1542990253-0d0f5be5f0ed?auto=format&fit=crop&w=800&q=80',
            'artisan-butter-croissant' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=800&q=80',
            'pain-au-chocolat' => 'https://images.unsplash.com/photo-1530610476181-d83430b64dcd?auto=format&fit=crop&w=800&q=80',
            'smoked-beef-gruyere-danish' => 'https://images.unsplash.com/photo-1621236378699-8597faf6a176?auto=format&fit=crop&w=800&q=80',
            'truffle-fries-parmesan' => 'https://images.unsplash.com/photo-1573080496219-bb080dd4f877?auto=format&fit=crop&w=800&q=80',
        ];

        return $fallbacks[$this->slug] ?? 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=800&q=80';
    }
}
