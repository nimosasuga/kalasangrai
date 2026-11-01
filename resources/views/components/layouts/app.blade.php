<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0f0d0b">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- SEO & Metadata -->
    <x-seo-meta :title="$title ?? null" :description="$description ?? null" :image="$ogImage ?? null" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col bg-[#0f0d0b] text-[#f4f1ea] antialiased selection:bg-[#c5a059] selection:text-[#0f0d0b]">
    
    <!-- Navbar -->
    <x-navbar />

    <!-- Flash Messages (Editorial Sharp Alert) -->
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" 
             class="fixed top-24 right-4 z-50 max-w-md bg-[#15120f] border border-[#c5a059] text-[#f4f1ea] px-5 py-4 rounded-none shadow-2xl flex items-start gap-3">
            <i data-lucide="check" class="w-4 h-4 text-[#c5a059] shrink-0 mt-0.5"></i>
            <div class="text-xs font-medium leading-relaxed">
                {{ session('success') }}
            </div>
            <button @click="show = false" class="text-stone-400 hover:text-white ml-auto text-xs">
                ✕
            </button>
        </div>
    @endif

    @if(session('error'))
        <div x-data="{ show: true }" x-show="show" 
             class="fixed top-24 right-4 z-50 max-w-md bg-[#15120f] border border-red-500 text-red-200 px-5 py-4 rounded-none shadow-2xl flex items-start gap-3">
            <i data-lucide="alert-circle" class="w-4 h-4 text-red-400 shrink-0 mt-0.5"></i>
            <div class="text-xs font-medium leading-relaxed">
                {{ session('error') }}
            </div>
            <button @click="show = false" class="text-red-400 hover:text-white ml-auto text-xs">
                ✕
            </button>
        </div>
    @endif

    <!-- Main Content -->
    <main class="flex-grow pt-16">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Floating WhatsApp -->
    <x-floating-whatsapp />

    @stack('scripts')
</body>
</html>
