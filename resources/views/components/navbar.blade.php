<header x-data="{ open: false, scrolled: false }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
        class="fixed top-0 left-0 right-0 z-50 px-3 sm:px-6 pt-3 sm:pt-4 transition-all duration-300">
    
    <!-- Floating Capsule Island Navbar (BrewLab Signature Aesthetic) -->
    <div class="max-w-6xl mx-auto nav-capsule rounded-full px-4 sm:px-6 py-2.5 sm:py-3 flex items-center justify-between transition-all duration-300"
         :class="scrolled ? 'shadow-[0_16px_40px_rgba(0,0,0,0.6)] py-2 sm:py-2.5 bg-[#3c201a]/95' : ''">
        
        <!-- Brand Wordmark with Motion Graphic Bean & Script Accent -->
        <a href="{{ route('home') }}" class="flex items-center gap-2 sm:gap-3 group shrink-0">
            <span class="w-8 h-8 rounded-full bg-[#febd02] text-[#482820] flex items-center justify-center font-bold shadow-md group-hover:scale-110 group-hover:rotate-12 transition-transform duration-300">
                <i data-lucide="coffee" class="w-4 h-4"></i>
            </span>
            <div class="flex items-baseline gap-1.5">
                <span class="text-xl sm:text-2xl font-display tracking-wider text-white uppercase group-hover:text-[#febd02] transition-colors leading-none">
                    KALA SANGRAI
                </span>
                <span class="font-script text-lg text-[#febd02] hidden sm:inline -rotate-6">Roastery</span>
            </div>
        </a>

        <!-- Desktop Navigation Pill Tabs -->
        <nav class="hidden lg:flex items-center gap-1.5 text-xs tracking-wider uppercase font-mono font-medium">
            <a href="{{ route('home') }}" 
               class="px-3 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('home') ? 'bg-[#febd02] text-[#482820] font-bold shadow-sm' : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                Beranda
            </a>
            <a href="{{ route('menu') }}" 
               class="px-3 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('menu') ? 'bg-[#febd02] text-[#482820] font-bold shadow-sm' : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                Menu Kedai
            </a>
            <a href="{{ route('beans') }}" 
               class="px-3 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('beans*') ? 'bg-[#febd02] text-[#482820] font-bold shadow-sm' : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                Biji Kopi
            </a>
            <a href="{{ route('about') }}" 
               class="px-3 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('about') ? 'bg-[#febd02] text-[#482820] font-bold shadow-sm' : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                Tentang
            </a>
            <a href="{{ route('atmosphere') }}" 
               class="px-3 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('atmosphere') ? 'bg-[#febd02] text-[#482820] font-bold shadow-sm' : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                Ruang & Bar
            </a>
            <a href="{{ route('wholesale') }}" 
               class="px-3 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('wholesale*') ? 'bg-[#febd02] text-[#482820] font-bold shadow-sm' : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                Wholesale
            </a>
            <a href="{{ route('contact') }}" 
               class="px-3 py-1.5 rounded-full transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-[#febd02] text-[#482820] font-bold shadow-sm' : 'text-white/80 hover:text-white hover:bg-white/10' }}">
                Kontak
            </a>
        </nav>

        <!-- Right Action: BrewLab Split-Pill CTA -->
        <div class="hidden sm:flex items-center shrink-0">
            <a href="{{ route('wholesale') }}" class="btn-brewlab btn-brewlab-yellow text-xs">
                <span class="btn-brewlab-pill !py-2 !px-4 !text-xs font-mono font-bold tracking-wider">Wholesale B2B</span>
                <span class="btn-brewlab-circle !w-7 !h-7">
                    <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                </span>
            </a>
        </div>

        <!-- Mobile Toggle & Quick Link -->
        <div class="flex items-center lg:hidden gap-2">
            <a href="{{ route('beans') }}" 
               class="bg-[#febd02] text-[#482820] text-[11px] font-mono font-bold uppercase tracking-wider px-3 py-1 rounded-full sm:hidden">
                Biji Kopi
            </a>
            <button @click="open = !open" 
                    type="button" 
                    class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:text-[#febd02] hover:bg-white/20 transition-all focus:outline-none min-h-[40px]"
                    aria-label="Toggle navigation">
                <i data-lucide="menu" x-show="!open" class="w-5 h-5"></i>
                <i data-lucide="x" x-show="open" class="w-5 h-5" style="display: none;"></i>
            </button>
        </div>

    </div>

    <!-- Mobile Drawer Floating Card -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
         @click.away="open = false"
         class="lg:hidden max-w-6xl mx-auto mt-2 bg-[#351c16]/95 backdrop-blur-2xl border border-white/15 rounded-[32px] p-6 space-y-4 shadow-2xl"
         style="display: none;">
        
        <nav class="flex flex-col space-y-1.5 text-xs font-mono tracking-wider uppercase font-semibold">
            <a href="{{ route('home') }}" @click="open = false" 
               class="px-4 py-3 min-h-[44px] flex items-center rounded-2xl transition-all {{ request()->routeIs('home') ? 'bg-[#febd02] text-[#482820] font-bold' : 'text-white/80 hover:bg-white/10' }}">
                Beranda
            </a>
            <a href="{{ route('menu') }}" @click="open = false" 
               class="px-4 py-3 min-h-[44px] flex items-center rounded-2xl transition-all {{ request()->routeIs('menu') ? 'bg-[#febd02] text-[#482820] font-bold' : 'text-white/80 hover:bg-white/10' }}">
                Menu Kedai
            </a>
            <a href="{{ route('beans') }}" @click="open = false" 
               class="px-4 py-3 min-h-[44px] flex items-center rounded-2xl transition-all {{ request()->routeIs('beans*') ? 'bg-[#febd02] text-[#482820] font-bold' : 'text-white/80 hover:bg-white/10' }}">
                Katalog Biji Kopi
            </a>
            <a href="{{ route('about') }}" @click="open = false" 
               class="px-4 py-3 min-h-[44px] flex items-center rounded-2xl transition-all {{ request()->routeIs('about') ? 'bg-[#febd02] text-[#482820] font-bold' : 'text-white/80 hover:bg-white/10' }}">
                Tentang Roastery
            </a>
            <a href="{{ route('atmosphere') }}" @click="open = false" 
               class="px-4 py-3 min-h-[44px] flex items-center rounded-2xl transition-all {{ request()->routeIs('atmosphere') ? 'bg-[#febd02] text-[#482820] font-bold' : 'text-white/80 hover:bg-white/10' }}">
                Ruang & Bar
            </a>
            <a href="{{ route('wholesale') }}" @click="open = false" 
               class="px-4 py-3 min-h-[44px] flex items-center rounded-2xl transition-all {{ request()->routeIs('wholesale*') ? 'bg-[#febd02] text-[#482820] font-bold' : 'text-white/80 hover:bg-white/10' }}">
                Wholesale B2B
            </a>
            <a href="{{ route('contact') }}" @click="open = false" 
               class="px-4 py-3 min-h-[44px] flex items-center rounded-2xl transition-all {{ request()->routeIs('contact') ? 'bg-[#febd02] text-[#482820] font-bold' : 'text-white/80 hover:bg-white/10' }}">
                Lokasi & Kontak
            </a>
        </nav>
        
        <div class="pt-3 border-t border-white/10">
            <a href="{{ route('wholesale') }}" 
               class="btn-brewlab btn-brewlab-yellow w-full text-xs">
                <span class="btn-brewlab-pill w-full !text-xs font-mono font-bold tracking-wider">Konsultasi Wholesale</span>
                <span class="btn-brewlab-circle !w-8 !h-8">
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </span>
            </a>
        </div>
    </div>

</header>
