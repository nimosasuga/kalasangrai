<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#482820">

    <!-- Progressive Enhancement: Early Capability & WebGL Detection -->
    <script>
        document.documentElement.classList.add('js');
        (function() {
            try {
                var canvas = document.createElement('canvas');
                var hasWebGL = Boolean(window.WebGLRenderingContext && (canvas.getContext('webgl') || canvas.getContext('experimental-webgl')));
                if (hasWebGL) {
                    document.documentElement.classList.add('webgl');
                } else {
                    document.documentElement.classList.add('no-webgl');
                }
            } catch (e) {
                document.documentElement.classList.add('no-webgl');
            }
            if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                document.documentElement.classList.add('reduced-motion');
            }
        })();
    </script>
    <noscript>
        <style>
            .no-js-hidden { display: none !important; }
            .no-js-visible { display: block !important; }
            [x-cloak] { display: block !important; }
            .stage-3d-card { transform: none !important; }
            #hero-particle-canvas { display: none !important; }
        </style>
    </noscript>

    <!-- Google Fonts: BrewLab Typography DNA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Smooch&display=swap" rel="stylesheet">

    <!-- SEO & Metadata -->
    <x-seo-meta :title="$title ?? null" :description="$description ?? null" :image="$ogImage ?? null" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col bg-[#482820] text-white antialiased selection:bg-[#febd02] selection:text-[#482820]">
    
    <!-- Navbar -->
    <x-navbar />

    <!-- Flash Messages (BrewLab Pill Alert) -->
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" 
             class="fixed top-24 right-4 z-50 max-w-md bg-[#f8f5f1] border-2 border-[#febd02] text-[#482820] px-6 py-4 rounded-[32px] shadow-2xl flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-[#febd02] flex items-center justify-center shrink-0">
                <i data-lucide="check" class="w-4 h-4 text-[#482820]"></i>
            </div>
            <div class="text-xs font-semibold leading-relaxed">
                {{ session('success') }}
            </div>
            <button @click="show = false" class="text-stone-400 hover:text-[#482820] ml-auto text-xs font-bold p-1">
                ✕
            </button>
        </div>
    @endif

    @if(session('error'))
        <div x-data="{ show: true }" x-show="show" 
             class="fixed top-24 right-4 z-50 max-w-md bg-[#f8f5f1] border-2 border-red-500 text-red-900 px-6 py-4 rounded-[32px] shadow-2xl flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-red-500 flex items-center justify-center shrink-0">
                <i data-lucide="alert-circle" class="w-4 h-4 text-white"></i>
            </div>
            <div class="text-xs font-semibold leading-relaxed">
                {{ session('error') }}
            </div>
            <button @click="show = false" class="text-stone-400 hover:text-black ml-auto text-xs font-bold p-1">
                ✕
            </button>
        </div>
    @endif

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Floating WhatsApp -->
    <x-floating-whatsapp />

    @stack('scripts')
</body>
</html>
