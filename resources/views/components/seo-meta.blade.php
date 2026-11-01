@props([
    'title' => null,
    'description' => null,
    'image' => null,
    'type' => 'website'
])

@php
    $siteName = config('site.name', 'Kala Sangrai Coffee Roasters');
    $pageTitle = $title ? "{$title} | {$siteName}" : "{$siteName} - " . config('site.tagline');
    $pageDesc = $description ?? config('site.description');
    $pageUrl = url()->current();
    $ogImage = $image ?? 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1200&h=630&q=80';
@endphp

<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDesc }}">
<link rel="canonical" href="{{ $pageUrl }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $pageUrl }}">
<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:description" content="{{ $pageDesc }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:locale" content="id_ID">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $pageUrl }}">
<meta name="twitter:title" content="{{ $pageTitle }}">
<meta name="twitter:description" content="{{ $pageDesc }}">
<meta name="twitter:image" content="{{ $ogImage }}">

<!-- Schema.org JSON-LD for CafeOrCoffeeShop -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "CafeOrCoffeeShop",
  "name": "{{ config('site.name') }}",
  "image": "{{ $ogImage }}",
  "description": "{{ $pageDesc }}",
  "url": "{{ url('/') }}",
  "telephone": "{{ config('site.phone') }}",
  "priceRange": "{{ config('site.price_range') }}",
  "servesCuisine": "Specialty Coffee, Single Origin, Artisanal Pastry",
  "address": {
    "@@type": "PostalAddress",
    "streetAddress": "{{ config('site.address') }}",
    "addressLocality": "{{ config('site.city') }}",
    "addressRegion": "{{ config('site.province') }}",
    "postalCode": "{{ config('site.postal_code') }}",
    "addressCountry": "ID"
  },
  "openingHoursSpecification": [
    {
      "@@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "07:00",
      "closes": "22:00"
    },
    {
      "@@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Saturday", "Sunday"],
      "opens": "07:00",
      "closes": "23:00"
    }
  ]
}
</script>
