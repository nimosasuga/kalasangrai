<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeBean extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'origin',
        'altitude',
        'varietal',
        'process',
        'roast_profile',
        'acidity_level',
        'body_level',
        'sweetness_level',
        'tasting_notes',
        'price_200g',
        'price_1kg',
        'description',
        'brewing_recommendation',
        'is_featured',
        'is_in_stock',
        'image_url',
    ];

    protected $casts = [
        'acidity_level' => 'integer',
        'body_level' => 'integer',
        'sweetness_level' => 'integer',
        'price_200g' => 'integer',
        'price_1kg' => 'integer',
        'is_featured' => 'boolean',
        'is_in_stock' => 'boolean',
    ];

    public function getFormattedPrice200gAttribute(): string
    {
        return 'Rp ' . number_format($this->price_200g, 0, ',', '.');
    }

    public function getFormattedPrice1kgAttribute(): string
    {
        return 'Rp ' . number_format($this->price_1kg, 0, ',', '.');
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
            'aceh-gayo-pantan-musara' => 'https://images.unsplash.com/photo-1587734195503-904fca47e0e9?auto=format&fit=crop&w=1000&q=80',
            'toraja-sapan-buntu-pepasan' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=1000&q=80',
            'kerinci-gunung-tujuh-honey' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1000&q=80',
            'bali-kintamani-ulian-natural' => 'https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=1000&q=80',
            'flores-bajawa-camellia' => 'https://images.unsplash.com/photo-1509785307050-d4066910ec1e?auto=format&fit=crop&w=1000&q=80',
            'senja-wijaya-house-blend' => 'https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=1000&q=80',
        ];
        return $fallbacks[$this->slug] ?? 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=1000&q=80';
    }

    public function getTastingNotesListAttribute(): array
    {
        return array_map('trim', explode(',', $this->tasting_notes));
    }
}
