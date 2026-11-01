<?php

return [
    'name' => env('SITE_NAME', 'Kala Sangrai Coffee Roasters'),
    'tagline' => env('SITE_TAGLINE', 'Micro-Roastery Artisan & Bar Seduh Kopi Nusantara'),
    'description' => env('SITE_DESCRIPTION', 'Micro-roastery artisan dan espresso bar di Jakarta Selatan. Menyajikan kurasi biji kopi nusantara sangrai segar, manual brew berpresisi, dan pasokan biji kopi wholesale.'),
    'phone' => env('SITE_PHONE', '+62 813-9876-5432'),
    'whatsapp' => env('SITE_WHATSAPP', '6281398765432'),
    'whatsapp_message' => env('SITE_WHATSAPP_MESSAGE', 'Halo Kala Sangrai, saya ingin berkunjung / tanya biji kopi / kemitraan wholesale.'),
    'email' => env('SITE_EMAIL', 'halo@kalasangrai.id'),
    'wholesale_email' => env('SITE_WHOLESALE_EMAIL', 'wholesale@kalasangrai.id'),
    'address' => env('SITE_ADDRESS', 'Jl. Wijaya I No. 42, Kebayoran Baru'),
    'city' => env('SITE_CITY', 'Jakarta Selatan'),
    'province' => env('SITE_PROVINCE', 'DKI Jakarta'),
    'postal_code' => env('SITE_POSTAL_CODE', '12160'),
    'maps_url' => env('SITE_MAPS_URL', 'https://maps.google.com/?q=Kala+Sangrai+Coffee+Roasters+Kebayoran+Baru'),
    'opening_hours' => [
        'weekday' => env('SITE_OPENING_HOURS_WEEKDAY', 'Senin - Jumat: 07:00 - 22:00 WIB'),
        'weekend' => env('SITE_OPENING_HOURS_WEEKEND', 'Sabtu - Minggu: 07:00 - 23:00 WIB'),
    ],
    'price_range' => env('SITE_PRICE_RANGE', 'Rp 28.000 - Rp 140.000'),
    'roaster_machine' => env('SITE_ROASTER_MACHINE', 'Giesen W6A Drum Roaster'),
    'curation_origin' => env('SITE_CURATION_ORIGIN', 'Gayo, Kerinci, Toraja, Flores, Bali'),
    'social' => [
        'instagram' => 'https://instagram.com/kalasangrai.roastery',
        'tiktok' => 'https://tiktok.com/@kalasangrai.roastery',
        'youtube' => 'https://youtube.com/@kalasangraicoffee',
    ],
];
