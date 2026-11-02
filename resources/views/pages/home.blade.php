<x-layouts.app>
    <x-slot:title>Micro-Roastery Artisan & Bar Seduh Kopi Nusantara</x-slot:title>
    <x-slot:description>{{ config('site.description') }}</x-slot:description>

    <!-- SECTION 1: HERO SECTION — BREWLAB DEEP ESPRESSO WITH 3D ROASTERY STAGE & FLOATING BEANS -->
    <section class="relative min-h-[92vh] flex items-center bg-[#482820] text-[#F8F5F1] overflow-hidden pt-28 pb-16 lg:py-32"
             x-data="{
                activeOrigin: 0,
                origins: [
                    {
                        name: 'Aceh Gayo Pantan Musara',
                        process: 'Anaerobic Natural',
                        altitude: '1.550 - 1.700 mdpl',
                        roast: 'Light (Filter)',
                        notes: 'Bergamot, Blackcurrant, Jasmine, Gula Palem',
                        image: 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=1000&q=80',
                        accent: 'Pantan Musara, Aceh Tengah',
                        slug: 'aceh-gayo-pantan-musara'
                    },
                    {
                        name: 'Toraja Sapan Buntu Pepasan',
                        process: 'Fully Washed',
                        altitude: '1.700 - 1.950 mdpl',
                        roast: 'Medium-Light (Espresso & Filter)',
                        notes: 'Apel Merah, Karamel Pecan, Jeruk Nipis, Kakao Halus',
                        image: 'https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=1000&q=80',
                        accent: 'Buntu Pepasan, Toraja Utara',
                        slug: 'toraja-sapan-buntu-pepasan'
                    },
                    {
                        name: 'Kerinci Gunung Tujuh Honey',
                        process: 'Yellow Honey',
                        altitude: '1.450 - 1.650 mdpl',
                        roast: 'Light-Medium (Filter)',
                        notes: 'Jeruk Keprok, Madu Hutan, Peach, Teh Hitam',
                        image: 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1000&q=80',
                        accent: 'Kayu Aro, Jambi',
                        slug: 'kerinci-gunung-tujuh-honey'
                    }
                ]
             }">

        <!-- Subtle Ambient Aroma Dust Particles Canvas -->
        <canvas id="hero-particle-canvas" class="absolute inset-0 pointer-events-none z-0 opacity-25"></canvas>

        <!-- Floating Motion Graphic 3D Bean Elements -->
        <div class="absolute top-24 right-12 w-20 h-20 pointer-events-none opacity-20 hidden lg:block animate-float-slow z-0">
            <svg viewBox="0 0 64 64" fill="none" class="w-full h-full text-[#FEBD02]">
                <ellipse cx="32" cy="32" rx="20" ry="26" transform="rotate(-25 32 32)" fill="currentColor" fill-opacity="0.25" stroke="currentColor" stroke-width="2"/>
                <path d="M23 14 C27 24 37 40 41 50" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="absolute bottom-28 left-8 w-16 h-16 pointer-events-none opacity-20 hidden lg:block animate-float-reverse z-0">
            <svg viewBox="0 0 64 64" fill="none" class="w-full h-full text-[#FEBD02]">
                <ellipse cx="32" cy="32" rx="18" ry="24" transform="rotate(35 32 32)" fill="currentColor" fill-opacity="0.25" stroke="currentColor" stroke-width="2"/>
                <path d="M40 16 C35 26 29 38 24 48" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column (6 Cols): BrewLab Bold Headline & Editorial Narrative -->
                <div class="lg:col-span-6 space-y-6 sm:space-y-8" data-reveal="fade-up">
                    
                    <!-- Eyebrow with Script Accent -->
                    <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                        <span class="inline-flex items-center gap-1.5 sm:gap-2 px-3 sm:px-3.5 py-1 sm:py-1.5 rounded-full bg-white/10 text-[11px] sm:text-xs font-mono tracking-wider sm:tracking-widest text-[#FEBD02] border border-white/15">
                            <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-[#FEBD02] animate-pulse"></span>
                            Artisan Micro-Roastery & Slow Bar
                        </span>
                        <span class="font-script text-xl sm:text-2xl text-[#FEBD02] rotate-[-5deg]">
                            Freshly Roasted Daily
                        </span>
                    </div>

                    <!-- Main Headline: Bebas Neue Oversized Grotesque Typography (Mobile Responsive) -->
                    <h1 class="font-display text-4xl sm:text-6xl lg:text-7xl uppercase tracking-wider text-[#FFFFFF] leading-[0.98] sm:leading-[0.95] break-words">
                        Sangrai presisi, seduh murni, ruang berdialog.
                    </h1>

                    <!-- Grounded sensory narrative -->
                    <p class="text-xs sm:text-base text-[#D8C8B8] leading-relaxed max-w-xl font-sans font-normal">
                        Kala Sangrai mengkurasi biji kopi pilihan dari perkebunan dataran tinggi nusantara. Disangrai segar dalam batch kecil dengan profil panas terukur, diekstraksi cermat di meja bar, dan disajikan untuk mereka yang menghargai kejujuran rasa.
                    </p>

                    <!-- Metric Strip (3-Col Containers with Responsive Padding) -->
                    <div class="grid grid-cols-3 gap-2 sm:gap-4 pt-1 sm:pt-2 pb-1 sm:pb-2">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-2.5 sm:p-4 text-center sm:text-left shadow-sm">
                            <span class="block font-display text-2xl sm:text-4xl text-[#FEBD02] leading-none">100%</span>
                            <span class="text-[9px] sm:text-[10px] text-[#D8C8B8] uppercase tracking-wider block mt-1 font-mono leading-tight">Biji Nusantara</span>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-2.5 sm:p-4 text-center sm:text-left shadow-sm">
                            <span class="block font-display text-2xl sm:text-4xl text-[#FFFFFF] leading-none">Giesen</span>
                            <span class="text-[9px] sm:text-[10px] text-[#D8C8B8] uppercase tracking-wider block mt-1 font-mono leading-tight">Mesin Sangrai Drum</span>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-2.5 sm:p-4 text-center sm:text-left shadow-sm">
                            <span class="block font-display text-2xl sm:text-4xl text-[#FEBD02] leading-none">07:00</span>
                            <span class="text-[9px] sm:text-[10px] text-[#D8C8B8] uppercase tracking-wider block mt-1 font-mono leading-tight">Buka Setiap Hari</span>
                        </div>
                    </div>

                    <!-- Signature BrewLab Action Buttons (Split-Pill + Circle Arrow, Responsive Wrap) -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4 pt-2 sm:pt-4">
                        <a href="{{ route('beans') }}" 
                           data-magnetic
                           class="btn-brewlab btn-brewlab-yellow justify-between sm:justify-start">
                            <span class="btn-brewlab-pill flex-1 sm:flex-initial text-center">Jelajahi Biji Kopi Sangrai</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </span>
                        </a>

                        <a href="{{ route('menu') }}" 
                           data-magnetic
                           class="btn-brewlab btn-brewlab-white justify-between sm:justify-start">
                            <span class="btn-brewlab-pill flex-1 sm:flex-initial text-center">Daftar Menu Kedai</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="coffee" class="w-4 h-4"></i>
                            </span>
                        </a>
                    </div>

                </div>

                <!-- Right Column (6 Cols): Interactive 3D Roastery Brew Bar Stage -->
                <div class="lg:col-span-6 relative mt-6 lg:mt-0" id="hero-3d-stage-wrapper">
                    
                    <!-- 3D Interactive Stage Component with 1400px Perspective -->
                    <div class="relative w-full aspect-[4/5] sm:aspect-square max-w-lg mx-auto flex items-center justify-center p-2 sm:p-4"
                         style="perspective: 1400px;">
                        
                        <!-- Motion Graphic Rotating Circular Stamp Badge -->
                        <div class="absolute -top-3 -right-3 sm:-top-5 sm:-right-5 w-20 h-20 sm:w-28 sm:h-28 z-40 pointer-events-none drop-shadow-2xl animate-spin-slow">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-[#FEBD02]">
                                <defs>
                                    <path id="stampCircle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="transparent" />
                                </defs>
                                <circle cx="50" cy="50" r="48" fill="#482820" stroke="#FEBD02" stroke-width="2" />
                                <circle cx="50" cy="50" r="38" fill="none" stroke="#FEBD02" stroke-width="1" stroke-dasharray="2,3" />
                                <text font-size="8.5" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" fill="#FEBD02" letter-spacing="1.8">
                                    <textPath href="#stampCircle">
                                        ★ 100% ARABICA SPECIALTY ★ FRESH ROAST ★
                                    </textPath>
                                </text>
                                <circle cx="50" cy="50" r="15" fill="#FEBD02" />
                                <path d="M47 45 C44 48 44 52 47 55 C50 58 55 58 58 55 C61 52 61 48 58 45 C55 42 50 42 47 45 Z M48 46 C51 49 52 51 57 54" stroke="#482820" stroke-width="1.8" fill="none" stroke-linecap="round" />
                            </svg>
                        </div>

                        <!-- Main 3D Card Stage with Lerp Mouse Physics & Ambient Mobile Float -->
                        <div id="hero-dish-stage" 
                             class="relative w-full h-full bg-[#341b15] border border-white/15 rounded-[36px] sm:rounded-[40px] p-5 sm:p-8 flex flex-col justify-between overflow-hidden shadow-2xl transition-transform duration-100 ease-out"
                             style="transform-style: preserve-3d; transform: rotateX(0deg) rotateY(0deg);">
                            
                            <!-- Dynamic Specular Spotlight Glare -->
                            <div class="tilt-glare absolute inset-0 pointer-events-none opacity-0 transition-opacity duration-300 z-30"
                                 style="background: radial-gradient(circle at 50% 50%, rgba(254, 189, 2, 0.25) 0%, rgba(255, 255, 255, 0.1) 40%, transparent 75%);">
                            </div>

                            <!-- Decorative Animated Extraction Ring in Z-Back -->
                            <div class="absolute -top-12 -right-12 w-64 h-64 border border-[#FEBD02]/20 rounded-full pointer-events-none z-0 animate-[spin_60s_linear_infinite]"
                                 style="transform: translateZ(-25px);">
                                <div class="absolute inset-4 border border-dashed border-[#FEBD02]/15 rounded-full"></div>
                            </div>

                            <!-- Top Bar inside 3D Card (Z: 40px) -->
                            <div class="relative z-20 flex items-center justify-between border-b border-white/10 pb-3"
                                 data-stage-depth="40"
                                 style="transform: translateZ(40px);">
                                <div class="flex items-center gap-2">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#FEBD02]"></span>
                                    <span class="text-xs uppercase tracking-widest text-[#FEBD02] font-mono font-semibold"
                                          x-text="origins[activeOrigin].accent">
                                        Pantan Musara, Aceh Tengah
                                    </span>
                                </div>
                                <span class="text-xs font-mono text-[#D8C8B8]" x-text="origins[activeOrigin].altitude">
                                    1.550 - 1.700 mdpl
                                </span>
                            </div>

                            <!-- Center Artwork / Coffee Visual Stage (Z: 60px) with Photo Framing -->
                            <div class="relative z-10 my-auto flex items-center justify-center py-3 sm:py-4"
                                 data-stage-depth="60"
                                 style="transform: translateZ(60px);">
                                <div class="relative w-56 h-56 sm:w-72 sm:h-72 flex items-center justify-center brew-photo-frame">
                                    
                                    <!-- Soft Glow & Shadow for Visual Depth -->
                                    <div class="absolute -bottom-4 w-4/5 h-8 bg-black/40 rounded-full blur-xl pointer-events-none"></div>

                                    <!-- Coffee Roast Image Display with Smooth Transitions -->
                                    <template x-for="(origin, idx) in origins" :key="idx">
                                        <img :src="origin.image" 
                                             :alt="origin.name"
                                             x-show="activeOrigin === idx"
                                             x-transition:enter="transition ease-out duration-500"
                                             x-transition:enter-start="opacity-0 scale-95"
                                             x-transition:enter-end="opacity-100 scale-100"
                                             x-transition:leave="transition ease-in duration-300"
                                             x-transition:leave-start="opacity-100 scale-100"
                                             x-transition:leave-end="opacity-0 scale-105"
                                             class="absolute inset-0 w-full h-full object-cover rounded-[24px] sm:rounded-[28px] border border-white/15 shadow-inner">
                                    </template>

                                    <!-- Fallback for No-JS -->
                                    <noscript>
                                        <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=1000&q=80" 
                                             alt="Aceh Gayo Pantan Musara"
                                             class="w-full h-full object-cover rounded-[28px] border border-white/10">
                                    </noscript>

                                </div>
                            </div>

                            <!-- Bottom Floating Spec Card (Z: 85px) -->
                            <div class="relative z-20 bg-[#482820]/95 border border-white/15 rounded-2xl p-3.5 sm:p-4 space-y-1.5 backdrop-blur-md shadow-lg"
                                 data-stage-depth="85"
                                 style="transform: translateZ(85px);">
                                <div class="flex flex-wrap items-start justify-between gap-1.5">
                                    <h3 class="font-display text-lg sm:text-xl uppercase tracking-wider text-[#FFFFFF] leading-tight" x-text="origins[activeOrigin].name">
                                        Aceh Gayo Pantan Musara
                                    </h3>
                                    <span class="text-[9px] sm:text-[10px] uppercase font-mono tracking-wider bg-[#FEBD02] text-[#482820] font-bold px-2 py-0.5 rounded-md shrink-0"
                                          x-text="origins[activeOrigin].process">
                                        Anaerobic Natural
                                    </span>
                                </div>
                                <div class="text-[11px] sm:text-xs text-[#D8C8B8] flex items-center gap-1.5 font-sans">
                                    <span class="text-[#FEBD02] font-mono text-[10px] sm:text-[11px] uppercase shrink-0 font-bold">Rasa:</span>
                                    <span class="text-[#F8F5F1] font-medium truncate" x-text="origins[activeOrigin].notes">Bergamot, Blackcurrant, Jasmine, Gula Palem</span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Clean Origin Switcher Tabs -->
                    <div class="mt-4 sm:mt-6 flex flex-wrap items-center justify-center gap-2 sm:gap-4 border-t border-white/10 pt-4 text-xs tracking-wider uppercase font-medium font-mono">
                        <span class="text-[#D8C8B8] text-[11px] tracking-widest hidden sm:inline">Pilih Origin:</span>
                        <template x-for="(origin, idx) in origins" :key="idx">
                            <button @click="activeOrigin = idx"
                                    type="button"
                                    :class="activeOrigin === idx ? 'bg-[#FEBD02] text-[#482820] font-bold px-3 py-1 rounded-full shadow-sm' : 'text-[#D8C8B8] hover:text-[#FFFFFF] bg-white/5 px-3 py-1 rounded-full border border-transparent'"
                                    class="transition-all cursor-pointer text-xs">
                                <span x-text="origin.name.split(' ')[0] + ' ' + origin.name.split(' ')[1]"></span>
                            </button>
                        </template>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- MOTION GRAPHIC RIBBON: INFINITE HORIZONTAL MARQUEE TICKER -->
    <div class="relative w-full overflow-hidden bg-[#FEBD02] text-[#482820] py-3.5 border-y border-[#482820]/15 select-none shadow-lg z-20">
        <div class="flex overflow-hidden whitespace-nowrap">
            <div class="flex shrink-0 animate-marquee items-center gap-8 text-base sm:text-lg font-display tracking-widest uppercase">
                <span>★ 100% ARABICA SPECIALTY NUSANTARA</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>MESIN SANGRAI DRUM GIESEN W6A</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>CUPPING SCORE > 84 POIN</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>FRESH ROASTED WEEKLY</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>SLOW BAR MANUAL DRIP V60</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>DIRECT TRADE 5 KEPULAUAN</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
            </div>
            <div class="flex shrink-0 animate-marquee items-center gap-8 text-base sm:text-lg font-display tracking-widest uppercase" aria-hidden="true">
                <span>★ 100% ARABICA SPECIALTY NUSANTARA</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>MESIN SANGRAI DRUM GIESEN W6A</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>CUPPING SCORE > 84 POIN</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>FRESH ROASTED WEEKLY</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>SLOW BAR MANUAL DRIP V60</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
                <span>DIRECT TRADE 5 KEPULAUAN</span>
                <span class="w-2 h-2 rounded-full bg-[#482820]"></span>
            </div>
        </div>
    </div>

    <!-- CREMA WAVE TRANSITION: From Espresso Hero into Light Section -->
    <div class="w-full overflow-hidden leading-none bg-[#482820]">
        <svg viewBox="0 0 1440 134" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-12 sm:h-20 lg:h-28 text-[#FFFFFF] preserve-3d block" preserveAspectRatio="none">
            <path d="M0,64 C320,130 640,0 960,64 C1200,112 1360,40 1440,24 L1440,134 L0,134 Z" fill="currentColor"></path>
        </svg>
    </div>

    <!-- SECTION 2: QUICK CATEGORY CARDS WITH RICH EDITORIAL VISUALS & 3D MOTION -->
    <section class="py-20 lg:py-28 bg-[#FFFFFF] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-2xl mx-auto mb-10 space-y-3">
                <span class="font-script text-3xl text-[#482820] inline-block -rotate-3">
                    Pengalaman Ngopi
                </span>
                <h2 class="font-display text-4xl sm:text-5xl uppercase tracking-wider text-[#482820]">
                    Pilih Pengalaman Bar & Seduh
                </h2>
                <p class="text-sm text-[#78716c] font-sans">
                    Jelajahi beragam kurasi biji sangrai segar dan racikan spesial kami di kedai.
                </p>
            </div>

            <!-- Interactive Live Bar Experience Banner (Motion Graphics & Roastery Calibration) -->
            <div class="mb-12 bg-[#482820] rounded-[32px] sm:rounded-[36px] p-5 sm:p-8 text-[#F8F5F1] relative overflow-hidden border border-[#482820]/15 shadow-xl">
                <!-- Ambient Glow & Motion Highlights -->
                <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-[#FEBD02]/10 blur-3xl pointer-events-none"></div>
                <div class="absolute -left-10 -bottom-10 w-60 h-60 rounded-full bg-[#FEBD02]/5 blur-2xl pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                    <div class="flex items-start sm:items-center gap-3.5 sm:gap-5">
                        <!-- Animated Brewing Steam Cup Motion Graphic -->
                        <div class="w-14 h-14 sm:w-20 sm:h-20 rounded-2xl bg-white/10 border border-white/15 flex items-center justify-center flex-shrink-0 relative mt-1 sm:mt-0">
                            <!-- Animated Steam Lines -->
                            <div class="absolute -top-3 flex gap-1 justify-center">
                                <span class="w-1 h-3 rounded-full bg-[#FEBD02] animate-bounce" style="animation-delay: 0.1s;"></span>
                                <span class="w-1 h-4 rounded-full bg-[#FEBD02] animate-bounce" style="animation-delay: 0.3s;"></span>
                                <span class="w-1 h-2.5 rounded-full bg-[#FEBD02] animate-bounce" style="animation-delay: 0.2s;"></span>
                            </div>
                            <i data-lucide="coffee" class="w-7 h-7 sm:w-10 sm:h-10 text-[#FEBD02]"></i>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="w-2 h-2 sm:w-2.5 sm:h-2.5 rounded-full bg-emerald-400 animate-ping"></span>
                                <span class="text-[10px] sm:text-[11px] font-mono uppercase tracking-widest text-[#FEBD02] font-bold">Barista Seduh Beroperasi</span>
                            </div>
                            <h3 class="font-display text-xl sm:text-3xl uppercase tracking-wider text-white leading-tight">
                                Ritual Ekstraksi Presisi Meja Bar
                            </h3>
                            <p class="text-xs sm:text-sm text-[#D8C8B8] max-w-xl font-sans mt-1 leading-relaxed">
                                Dari gilingan micrometric Mahlkönig EK43 hingga tuangan kalibrasi gooseneck kettle. Nikmati aroma segar biji yang baru digiling di depan Anda.
                            </p>
                        </div>
                    </div>

                    <!-- 3 Bar Calibration Tags (Mobile Safe Grid) -->
                    <div class="grid grid-cols-3 sm:flex items-center gap-2 sm:gap-3 w-full lg:w-auto pt-2 lg:pt-0 border-t lg:border-t-0 border-white/10">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-2 sm:px-4 sm:py-2.5 text-center flex-1 sm:flex-initial">
                            <span class="block font-mono text-xs sm:text-sm text-[#FEBD02] font-bold">92.5°C</span>
                            <span class="text-[9px] sm:text-[10px] text-[#D8C8B8] uppercase tracking-wider block">Suhu Air</span>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-2 sm:px-4 sm:py-2.5 text-center flex-1 sm:flex-initial">
                            <span class="block font-mono text-xs sm:text-sm text-[#FEBD02] font-bold">140 PPM</span>
                            <span class="text-[9px] sm:text-[10px] text-[#D8C8B8] uppercase tracking-wider block">Mineral TDS</span>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-2 sm:px-4 sm:py-2.5 text-center flex-1 sm:flex-initial">
                            <span class="block font-mono text-xs sm:text-sm text-[#FEBD02] font-bold">1:15</span>
                            <span class="text-[9px] sm:text-[10px] text-[#D8C8B8] uppercase tracking-wider block">Ratio Seduh</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5 Rich Visual Cards Grid (BrewLab Style with Photography & Motion Hover) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                
                <!-- Category 1: Single Origin Beans -->
                <a href="{{ route('beans') }}" 
                   class="group bg-[#F8F5F1] hover:bg-[#482820] border border-[#482820]/10 hover:border-[#482820] rounded-[36px] overflow-hidden transition-all duration-500 hover:shadow-2xl flex flex-col justify-between"
                   data-tilt-3d>
                    
                    <!-- Media Frame -->
                    <div class="relative aspect-[4/3] overflow-hidden rounded-[26px] m-3 bg-[#482820] brew-photo-frame">
                        <img src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=800&q=80" 
                             alt="Single Origin Roasted Coffee Beans"
                             class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-[#482820]/90 group-hover:bg-[#FEBD02] text-[#FEBD02] group-hover:text-[#482820] px-3 py-1 rounded-full text-[10px] font-mono font-bold uppercase tracking-wider backdrop-blur-md transition-colors shadow-sm">
                            Biji Sangrai 200g
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-5 pt-1 flex flex-col justify-between flex-grow space-y-3">
                        <div>
                            <h3 class="font-display text-2xl uppercase tracking-wide text-[#482820] group-hover:text-[#FFFFFF] transition-colors leading-tight">
                                Single Origin Beans
                            </h3>
                            <p class="text-xs text-[#78716c] group-hover:text-[#D8C8B8] leading-relaxed transition-colors font-sans mt-1.5 line-clamp-2">
                                Kurasi 6 origin dataran tinggi nusantara segar dari sangrai drum Giesen.
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-[#482820]/10 group-hover:border-white/15 flex items-center justify-between transition-colors">
                            <span class="text-[11px] font-mono uppercase tracking-wider text-[#482820] group-hover:text-[#FEBD02] font-bold transition-colors">
                                Katalog Biji
                            </span>
                            <span class="w-9 h-9 rounded-full bg-white group-hover:bg-[#FEBD02] text-[#482820] flex items-center justify-center group-hover:scale-110 group-hover:rotate-45 transition-all shadow-sm">
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </span>
                        </div>
                    </div>

                </a>

                <!-- Category 2: Espresso Bar -->
                <a href="{{ route('menu', ['category' => 'espresso_bar']) }}" 
                   class="group bg-[#F8F5F1] hover:bg-[#482820] border border-[#482820]/10 hover:border-[#482820] rounded-[36px] overflow-hidden transition-all duration-500 hover:shadow-2xl flex flex-col justify-between"
                   data-tilt-3d>
                    
                    <!-- Media Frame -->
                    <div class="relative aspect-[4/3] overflow-hidden rounded-[26px] m-3 bg-[#482820] brew-photo-frame">
                        <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=800&q=80" 
                             alt="Espresso Bar & Latte Art"
                             class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-[#482820]/90 group-hover:bg-[#FEBD02] text-[#FEBD02] group-hover:text-[#482820] px-3 py-1 rounded-full text-[10px] font-mono font-bold uppercase tracking-wider backdrop-blur-md transition-colors shadow-sm">
                            Espresso Bar
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-5 pt-1 flex flex-col justify-between flex-grow space-y-3">
                        <div>
                            <h3 class="font-display text-2xl uppercase tracking-wide text-[#482820] group-hover:text-[#FFFFFF] transition-colors leading-tight">
                                Espresso & Susu
                            </h3>
                            <p class="text-xs text-[#78716c] group-hover:text-[#D8C8B8] leading-relaxed transition-colors font-sans mt-1.5 line-clamp-2">
                                Double shot pekat dipadukan susu segar pasteurisasi tanpa sirup buatan.
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-[#482820]/10 group-hover:border-white/15 flex items-center justify-between transition-colors">
                            <span class="text-[11px] font-mono uppercase tracking-wider text-[#482820] group-hover:text-[#FEBD02] font-bold transition-colors">
                                Sajian Bar
                            </span>
                            <span class="w-9 h-9 rounded-full bg-white group-hover:bg-[#FEBD02] text-[#482820] flex items-center justify-center group-hover:scale-110 group-hover:rotate-45 transition-all shadow-sm">
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </span>
                        </div>
                    </div>

                </a>

                <!-- Category 3: Manual Brew -->
                <a href="{{ route('menu', ['category' => 'manual_brew']) }}" 
                   class="group bg-[#F8F5F1] hover:bg-[#482820] border border-[#482820]/10 hover:border-[#482820] rounded-[36px] overflow-hidden transition-all duration-500 hover:shadow-2xl flex flex-col justify-between"
                   data-tilt-3d>
                    
                    <!-- Media Frame -->
                    <div class="relative aspect-[4/3] overflow-hidden rounded-[26px] m-3 bg-[#482820] brew-photo-frame">
                        <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=800&q=80" 
                             alt="Slow Bar V60 Manual Pour Over"
                             class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-[#482820]/90 group-hover:bg-[#FEBD02] text-[#FEBD02] group-hover:text-[#482820] px-3 py-1 rounded-full text-[10px] font-mono font-bold uppercase tracking-wider backdrop-blur-md transition-colors shadow-sm">
                            Slow Bar V60
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-5 pt-1 flex flex-col justify-between flex-grow space-y-3">
                        <div>
                            <h3 class="font-display text-2xl uppercase tracking-wide text-[#482820] group-hover:text-[#FFFFFF] transition-colors leading-tight">
                                Manual Pour-Over
                            </h3>
                            <p class="text-xs text-[#78716c] group-hover:text-[#D8C8B8] leading-relaxed transition-colors font-sans mt-1.5 line-clamp-2">
                                Seduhan jernih suhu terukur menonjolkan kekhasan terroir biji kopi.
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-[#482820]/10 group-hover:border-white/15 flex items-center justify-between transition-colors">
                            <span class="text-[11px] font-mono uppercase tracking-wider text-[#482820] group-hover:text-[#FEBD02] font-bold transition-colors">
                                Pilihan Seduh
                            </span>
                            <span class="w-9 h-9 rounded-full bg-white group-hover:bg-[#FEBD02] text-[#482820] flex items-center justify-center group-hover:scale-110 group-hover:rotate-45 transition-all shadow-sm">
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </span>
                        </div>
                    </div>

                </a>

                <!-- Category 4: Signature Cold -->
                <a href="{{ route('menu', ['category' => 'signature_cold']) }}" 
                   class="group bg-[#F8F5F1] hover:bg-[#482820] border border-[#482820]/10 hover:border-[#482820] rounded-[36px] overflow-hidden transition-all duration-500 hover:shadow-2xl flex flex-col justify-between"
                   data-tilt-3d>
                    
                    <!-- Media Frame -->
                    <div class="relative aspect-[4/3] overflow-hidden rounded-[26px] m-3 bg-[#482820] brew-photo-frame">
                        <img src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&fit=crop&w=800&q=80" 
                             alt="Signature Cold Brew & Mocktails"
                             class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-[#482820]/90 group-hover:bg-[#FEBD02] text-[#FEBD02] group-hover:text-[#482820] px-3 py-1 rounded-full text-[10px] font-mono font-bold uppercase tracking-wider backdrop-blur-md transition-colors shadow-sm">
                            Cold Craft
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-5 pt-1 flex flex-col justify-between flex-grow space-y-3">
                        <div>
                            <h3 class="font-display text-2xl uppercase tracking-wide text-[#482820] group-hover:text-[#FFFFFF] transition-colors leading-tight">
                                Signature Mocktail
                            </h3>
                            <p class="text-xs text-[#78716c] group-hover:text-[#D8C8B8] leading-relaxed transition-colors font-sans mt-1.5 line-clamp-2">
                                Ekstraksi dingin 12 jam dipadukan sari buah alami & rempah botani.
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-[#482820]/10 group-hover:border-white/15 flex items-center justify-between transition-colors">
                            <span class="text-[11px] font-mono uppercase tracking-wider text-[#482820] group-hover:text-[#FEBD02] font-bold transition-colors">
                                Racikan Dingin
                            </span>
                            <span class="w-9 h-9 rounded-full bg-white group-hover:bg-[#FEBD02] text-[#482820] flex items-center justify-center group-hover:scale-110 group-hover:rotate-45 transition-all shadow-sm">
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </span>
                        </div>
                    </div>

                </a>

                <!-- Category 5: Artisan Pastry -->
                <a href="{{ route('menu', ['category' => 'artisan_pastry']) }}" 
                   class="group bg-[#F8F5F1] hover:bg-[#482820] border border-[#482820]/10 hover:border-[#482820] rounded-[36px] overflow-hidden transition-all duration-500 hover:shadow-2xl flex flex-col justify-between sm:col-span-2 lg:col-span-1"
                   data-tilt-3d>
                    
                    <!-- Media Frame -->
                    <div class="relative aspect-[4/3] overflow-hidden rounded-[26px] m-3 bg-[#482820] brew-photo-frame">
                        <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=800&q=80" 
                             alt="Freshly Baked Artisan Pastry"
                             class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-[#482820]/90 group-hover:bg-[#FEBD02] text-[#FEBD02] group-hover:text-[#482820] px-3 py-1 rounded-full text-[10px] font-mono font-bold uppercase tracking-wider backdrop-blur-md transition-colors shadow-sm">
                            Baked Daily
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-5 pt-1 flex flex-col justify-between flex-grow space-y-3">
                        <div>
                            <h3 class="font-display text-2xl uppercase tracking-wide text-[#482820] group-hover:text-[#FFFFFF] transition-colors leading-tight">
                                Pastry Panggang
                            </h3>
                            <p class="text-xs text-[#78716c] group-hover:text-[#D8C8B8] leading-relaxed transition-colors font-sans mt-1.5 line-clamp-2">
                                Butter croissant renyah & kudapan artisan pendamping kopi.
                            </p>
                        </div>
                        
                        <div class="pt-3 border-t border-[#482820]/10 group-hover:border-white/15 flex items-center justify-between transition-colors">
                            <span class="text-[11px] font-mono uppercase tracking-wider text-[#482820] group-hover:text-[#FEBD02] font-bold transition-colors">
                                Teman Ngopi
                            </span>
                            <span class="w-9 h-9 rounded-full bg-white group-hover:bg-[#FEBD02] text-[#482820] flex items-center justify-center group-hover:scale-110 group-hover:rotate-45 transition-all shadow-sm">
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </span>
                        </div>
                    </div>

                </a>

            </div>

        </div>
    </section>

    <!-- CREMA WAVE TRANSITION: Into Espresso Beans Section -->
    <div class="w-full overflow-hidden leading-none bg-[#FFFFFF]">
        <svg viewBox="0 0 1440 134" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-12 sm:h-20 lg:h-28 text-[#482820] preserve-3d block" preserveAspectRatio="none">
            <path d="M0,64 C320,130 640,0 960,64 C1200,112 1360,40 1440,24 L1440,134 L0,134 Z" fill="currentColor"></path>
        </svg>
    </div>

    <!-- SECTION 3: KATALOG BIJI KOPI (BREWLAB ESPRESSO 48PX CARDS & PHOTO FRAMING) -->
    <section class="py-20 lg:py-28 bg-[#482820] text-[#F8F5F1]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 sm:mb-16 pb-6 border-b border-white/10 gap-6"
                 data-reveal="fade-up">
                <div class="space-y-2">
                    <span class="font-script text-2xl sm:text-3xl text-[#FEBD02] block -rotate-2">
                        Kurasi Biji Sangrai Segar
                    </span>
                    <h2 class="font-display text-3xl sm:text-5xl uppercase tracking-wider text-[#FFFFFF] leading-tight">
                        Koleksi Single Origin & Signature Blend
                    </h2>
                </div>
                <a href="{{ route('beans') }}" 
                   data-magnetic
                   class="btn-brewlab btn-brewlab-yellow self-start md:self-auto">
                    <span class="btn-brewlab-pill">Semua Biji ({{ $allBeans->count() }})</span>
                    <span class="btn-brewlab-circle">
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </span>
                </a>
            </div>

            <!-- Beans Grid (3-Col 48px Cards with BrewLab Photo Framing) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8" data-reveal="stagger">
                @foreach($featuredBeans as $bean)
                <div class="bg-[#341b15] border border-white/10 hover:border-[#FEBD02]/60 rounded-[36px] sm:rounded-[48px] p-5 sm:p-8 flex flex-col justify-between transition-all duration-300 hover:shadow-2xl group"
                     data-tilt-3d>
                    
                    <div>
                        <!-- Top Bag Visual / Origin Image with Photo Framing -->
                        <div class="relative aspect-[16/11] bg-[#482820] rounded-[26px] sm:rounded-[36px] overflow-hidden mb-5 sm:mb-6 border border-white/10 brew-photo-frame">
                            <img src="{{ $bean->display_image }}" 
                                 alt="{{ $bean->name }}"
                                 class="w-full h-full object-cover">
                            
                            <!-- Badges -->
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 bg-[#482820]/90 backdrop-blur-md border border-white/20 px-2.5 sm:px-3 py-0.5 sm:py-1 rounded-full text-[9px] sm:text-[10px] font-mono uppercase tracking-widest text-[#FEBD02] font-semibold">
                                {{ $bean->roast_profile }}
                            </div>
                            <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 text-[10px] sm:text-[11px] font-mono text-[#F8F5F1] bg-[#482820]/80 backdrop-blur-md px-2.5 sm:px-3 py-0.5 sm:py-1 rounded-full border border-white/10">
                                {{ $bean->altitude }}
                            </div>
                        </div>

                        <!-- Card Body -->
                        <span class="text-xs font-mono uppercase tracking-wider text-[#FEBD02] block mb-1.5 font-semibold">
                            {{ $bean->origin }}
                        </span>
                        
                        <h3 class="font-display text-xl sm:text-2xl uppercase tracking-wider text-[#FFFFFF] leading-snug mb-2 sm:mb-3">
                            <a href="{{ route('beans.detail', $bean->slug) }}" class="hover:text-[#FEBD02] transition-colors">
                                {{ $bean->name }}
                            </a>
                        </h3>

                        <!-- Tasting Notes Strip -->
                        <div class="py-2 px-3 sm:py-2.5 sm:px-3.5 bg-white/5 rounded-2xl border border-white/10 mb-3 sm:mb-4 text-xs">
                            <span class="text-[#FEBD02] font-mono text-[9px] sm:text-[10px] uppercase block mb-0.5 sm:mb-1">Catatan Rasa:</span>
                            <p class="text-[#F8F5F1] font-sans font-medium line-clamp-1">
                                {{ $bean->tasting_notes }}
                            </p>
                        </div>

                        <!-- Description -->
                        <p class="text-xs text-[#D8C8B8] leading-relaxed line-clamp-3 mb-5 sm:mb-6 font-sans">
                            {{ $bean->description }}
                        </p>
                    </div>

                    <!-- Card Footer: Locked mt-auto pt-4 border-t -->
                    <div class="pt-4 border-t border-white/10 flex items-center justify-between gap-2">
                        <div>
                            <span class="text-[9px] sm:text-[10px] font-mono text-[#D8C8B8] uppercase block">Kemasan 200g</span>
                            <span class="font-display text-xl sm:text-2xl text-[#FEBD02] leading-none">{{ $bean->formatted_price_200g }}</span>
                        </div>
                        <a href="{{ route('beans.detail', $bean->slug) }}" 
                           class="btn-brewlab btn-brewlab-white text-[11px]">
                            <span class="btn-brewlab-pill !py-2 !px-3.5 !text-xs font-mono font-bold tracking-wider">Detail Profil</span>
                            <span class="btn-brewlab-circle !w-8 !h-8 sm:!w-9 sm:!h-9">
                                <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                            </span>
                        </a>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- CREMA WAVE TRANSITION: Into Mustard Yellow Craftsmanship Section -->
    <div class="w-full overflow-hidden leading-none bg-[#482820]">
        <svg viewBox="0 0 1440 134" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-12 sm:h-20 lg:h-28 text-[#FEBD02] preserve-3d block" preserveAspectRatio="none">
            <path d="M0,64 C320,130 640,0 960,64 C1200,112 1360,40 1440,24 L1440,134 L0,134 Z" fill="currentColor"></path>
        </svg>
    </div>

    <!-- SECTION 4: CRAFTSMANSHIP & ROASTING PILLARS WITH LIVE ROAST CURVE MOTION GRAPHIC -->
    <section class="py-20 lg:py-28 bg-[#FEBD02] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-12 sm:mb-16 space-y-3 sm:space-y-4" data-reveal="fade-up">
                <span class="font-script text-2xl sm:text-4xl text-[#482820] block -rotate-2">
                    Disiplin & Presisi
                </span>
                <h2 class="font-display text-3xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#482820] leading-tight sm:leading-[0.95]">
                    Menemukan titik manis dari setiap biji kopi nusantara.
                </h2>
                <p class="text-xs sm:text-base text-[#482820]/80 leading-relaxed font-sans max-w-2xl">
                    Kami meyakini bahwa biji kopi yang baik tidak perlu dimanipulasi dengan profil sangrai yang berlebihan. Menggunakan mesin sangrai drum Giesen W6A, setiap batch dipantau kurva suhu dan laju perkembangannya (*Rate of Rise*) untuk menonjolkan kekhasan tanah asal (*terroir*).
                </p>
            </div>

            <!-- 3 High Contrast White / Dark Rounded Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8" data-reveal="stagger">
                
                <!-- Pillar 1 -->
                <div class="bg-[#482820] text-[#F8F5F1] p-6 sm:p-8 rounded-[32px] sm:rounded-[36px] flex flex-col justify-between shadow-xl transition-all duration-300 hover:scale-[1.02]">
                    <div class="space-y-3 sm:space-y-4">
                        <span class="font-display text-2xl sm:text-3xl text-[#FEBD02] block">01 / KURASI ASAL</span>
                        <h3 class="font-display text-xl sm:text-2xl uppercase tracking-wide text-[#FFFFFF] leading-snug">Jejak Petani & Koperasi</h3>
                        <p class="text-xs sm:text-sm text-[#D8C8B8] leading-relaxed font-sans">
                            Biji kopi didatangkan langsung dari petani mitra di Gayo, Toraja, Kerinci, Flores, dan Bali tanpa perantara spekulatif.
                        </p>
                    </div>
                    <div class="pt-5 sm:pt-6 mt-5 sm:mt-6 border-t border-white/10 text-xs text-[#FEBD02] font-mono uppercase tracking-wider">
                        100% Direct Origin
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="bg-[#FFFFFF] text-[#482820] p-6 sm:p-8 rounded-[32px] sm:rounded-[36px] flex flex-col justify-between shadow-xl transition-all duration-300 hover:scale-[1.02]">
                    <div class="space-y-3 sm:space-y-4">
                        <span class="font-display text-2xl sm:text-3xl text-[#482820] block">02 / BATCH KECIL</span>
                        <h3 class="font-display text-xl sm:text-2xl uppercase tracking-wide text-[#482820] leading-snug">Kontrol Panas Konvektif</h3>
                        <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                            Kapasitas 6kg per sangrai menjamin sirkulasi udara panas merata, meminimalkan cacat gosong, dan menjaga kejernihan asam buah.
                        </p>
                    </div>
                    <div class="pt-5 sm:pt-6 mt-5 sm:mt-6 border-t border-[#482820]/10 text-xs text-[#482820] font-mono uppercase tracking-wider font-semibold">
                        Giesen W6A Precision
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="bg-[#482820] text-[#F8F5F1] p-6 sm:p-8 rounded-[32px] sm:rounded-[36px] flex flex-col justify-between shadow-xl transition-all duration-300 hover:scale-[1.02]">
                    <div class="space-y-3 sm:space-y-4">
                        <span class="font-display text-2xl sm:text-3xl text-[#FEBD02] block">03 / KALIBRASI HARIAN</span>
                        <h3 class="font-display text-xl sm:text-2xl uppercase tracking-wide text-[#FFFFFF] leading-snug">Cupping & Bar Dial-in</h3>
                        <p class="text-xs sm:text-sm text-[#D8C8B8] leading-relaxed font-sans">
                            Setiap pagi sebelum bar dibuka, barista kami mencicipi dan mengkalibrasi rasio serta ukuran gilingan sesuai kelembapan udara.
                        </p>
                    </div>
                    <div class="pt-5 sm:pt-6 mt-5 sm:mt-6 border-t border-white/10 text-xs text-[#FEBD02] font-mono uppercase tracking-wider">
                        SCA Protocol > 84 Pts
                    </div>
                </div>

            </div>

            <!-- MOTION GRAPHIC: ROASTING TELEMETRY & TEMPERATURE CURVE -->
            <div class="bg-[#482820] text-[#F8F5F1] rounded-[32px] sm:rounded-[36px] p-5 sm:p-8 mt-10 sm:mt-12 border border-white/15 shadow-2xl" data-reveal="fade-up">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 pb-5 sm:pb-6 border-b border-white/10">
                    <div>
                        <span class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-[#FEBD02] font-bold block mb-1">
                            Telemetry Sangrai Real-Time
                        </span>
                        <h3 class="font-display text-xl sm:text-3xl uppercase tracking-wider text-white">
                            Kurva Sangrai Giesen W6A & Profil Ekstraksi
                        </h3>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center gap-2 bg-[#FEBD02]/20 border border-[#FEBD02]/40 text-[#FEBD02] px-3.5 py-1 rounded-full text-xs font-mono font-bold">
                            <span class="w-2 h-2 rounded-full bg-[#FEBD02] animate-ping"></span>
                            Rate of Rise: 11.8°C / min
                        </span>
                    </div>
                </div>

                <!-- Motion Graphic SVG Roast Curve Visualization -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-center pt-6">
                    <div class="lg:col-span-8 relative aspect-[16/9] sm:aspect-[24/9] w-full bg-[#351c16] rounded-[24px] p-3 sm:p-4 border border-white/10 overflow-hidden flex items-center">
                        <svg viewBox="0 0 600 200" class="w-full h-full preserve-3d" fill="none">
                            <!-- Grid Lines -->
                            <line x1="0" y1="50" x2="600" y2="50" stroke="rgba(255,255,255,0.06)" stroke-dasharray="4,4"/>
                            <line x1="0" y1="100" x2="600" y2="100" stroke="rgba(255,255,255,0.06)" stroke-dasharray="4,4"/>
                            <line x1="0" y1="150" x2="600" y2="150" stroke="rgba(255,255,255,0.06)" stroke-dasharray="4,4"/>
                            
                            <!-- Curve Path -->
                            <path d="M 20,40 Q 80,170 160,140 T 320,80 T 480,45 T 580,30" stroke="#FEBD02" stroke-width="3" stroke-linecap="round" fill="none"/>
                            <!-- Area Gradient Fill -->
                            <path d="M 20,40 Q 80,170 160,140 T 320,80 T 480,45 T 580,30 L 580,190 L 20,190 Z" fill="url(#curveGradient)" opacity="0.18"/>
                            
                            <!-- Key Markers -->
                            <circle cx="80" cy="170" r="5" fill="#FFFFFF" stroke="#FEBD02" stroke-width="2"/>
                            <text x="85" y="165" fill="#D8C8B8" font-size="10" font-family="'Plus Jakarta Sans', sans-serif">Turning Point 92°C</text>
                            
                            <circle cx="320" cy="80" r="5" fill="#FFFFFF" stroke="#FEBD02" stroke-width="2"/>
                            <text x="325" y="75" fill="#D8C8B8" font-size="10" font-family="'Plus Jakarta Sans', sans-serif">Yellowing 165°C</text>

                            <circle cx="480" cy="45" r="5" fill="#FEBD02" stroke="#FFFFFF" stroke-width="2"/>
                            <text x="485" y="40" fill="#FEBD02" font-weight="bold" font-size="11" font-family="'Plus Jakarta Sans', sans-serif">First Crack 198°C</text>
                            
                            <defs>
                                <linearGradient id="curveGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FEBD02"/>
                                    <stop offset="100%" stop-color="transparent"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="lg:col-span-4 grid grid-cols-2 gap-3 text-xs font-mono">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-3.5">
                            <span class="text-[10px] text-[#D8C8B8] uppercase block">Waktu Sangrai</span>
                            <span class="text-white font-bold text-base block mt-0.5">10:45 min</span>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-3.5">
                            <span class="text-[10px] text-[#D8C8B8] uppercase block">DTR (Development)</span>
                            <span class="text-[#FEBD02] font-bold text-base block mt-0.5">18.5%</span>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-3.5">
                            <span class="text-[10px] text-[#D8C8B8] uppercase block">Suhu Akhir</span>
                            <span class="text-white font-bold text-base block mt-0.5">206.5°C</span>
                        </div>
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-3.5">
                            <span class="text-[10px] text-[#D8C8B8] uppercase block">Agtron Nilai</span>
                            <span class="text-[#FEBD02] font-bold text-base block mt-0.5">65 / Light-Med</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Manifesto Link -->
            <div class="mt-12 text-center">
                <a href="{{ route('about') }}" 
                   data-magnetic
                   class="btn-brewlab btn-brewlab-dark">
                    <span class="btn-brewlab-pill">Kisah Lengkap Roastery & Kurasi Petani</span>
                    <span class="btn-brewlab-circle">
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </span>
                </a>
            </div>

        </div>
    </section>

    <!-- CREMA WAVE TRANSITION: Into Oat Milk In-House Menu Section -->
    <div class="w-full overflow-hidden leading-none bg-[#FEBD02]">
        <svg viewBox="0 0 1440 134" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-12 sm:h-20 lg:h-28 text-[#F8F5F1] preserve-3d block" preserveAspectRatio="none">
            <path d="M0,64 C320,130 640,0 960,64 C1200,112 1360,40 1440,24 L1440,134 L0,134 Z" fill="currentColor"></path>
        </svg>
    </div>

    <!-- SECTION 5: MENU REKOMENDASI DI BAR (OAT MILK BACKGROUND) -->
    <section class="py-20 lg:py-28 bg-[#F8F5F1] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left Title Column (4 Cols) -->
                <div class="lg:col-span-4 space-y-4 sm:space-y-6" data-reveal="fade-up">
                    <span class="font-script text-2xl sm:text-3xl text-[#482820] block -rotate-3">
                        Sajian Di Meja Bar
                    </span>
                    <h2 class="font-display text-3xl sm:text-5xl uppercase tracking-wider text-[#482820] leading-tight sm:leading-[0.95]">
                        Disajikan segar di meja bar kami.
                    </h2>
                    <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                        Mulai dari espresso pekat berbalut susu sutra, seduhan manual pour-over berkejernihan tinggi, hingga racikan cold drip fermentasi dingin 12 jam.
                    </p>
                    <div class="pt-2 sm:pt-4">
                        <a href="{{ route('menu') }}" 
                           data-magnetic
                           class="btn-brewlab btn-brewlab-dark">
                            <span class="btn-brewlab-pill">Buku Menu Lengkap</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="book-open" class="w-4 h-4"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Right Menu Items Column (8 Cols): 2-Col Locked List -->
                <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6" data-reveal="stagger">
                    @foreach($recommendedItems as $item)
                    <div class="bg-white border border-[#482820]/10 rounded-[28px] sm:rounded-[32px] p-5 sm:p-6 flex flex-col justify-between shadow-sm hover:shadow-md transition-all duration-300"
                         data-tilt-3d>
                        <div>
                            <div class="flex items-start justify-between gap-3 mb-2">
                                <h3 class="font-display text-lg sm:text-xl uppercase tracking-wide text-[#482820]">
                                    {{ $item->name }}
                                </h3>
                                <span class="font-display text-lg sm:text-xl text-[#482820] shrink-0 font-bold">
                                    {{ $item->formatted_price }}
                                </span>
                            </div>
                            <span class="text-[9px] sm:text-[10px] font-mono uppercase tracking-wider bg-[#F8F5F1] text-[#482820] px-2.5 py-0.5 sm:py-1 rounded-full inline-block mb-2 sm:mb-3 font-semibold">
                                {{ $item->category_label }} • {{ $item->serving_temperature }}
                            </span>
                            <p class="text-xs text-[#78716c] leading-relaxed line-clamp-2 font-sans">
                                {{ $item->description }}
                            </p>
                        </div>
                        @if($item->tasting_notes)
                        <div class="mt-3 sm:mt-4 pt-2.5 sm:pt-3 border-t border-[#482820]/10 text-xs text-[#78716c]">
                            <span class="text-[#482820] font-mono text-[9px] sm:text-[10px] uppercase font-bold">Catatan:</span> {{ $item->tasting_notes }}
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </section>

    <!-- SECTION 6: RUANG, SUASANA & JAM OPERASIONAL WITH ROTATING STAMP PHOTO -->
    <section class="py-20 lg:py-28 bg-[#FFFFFF] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
                
                <!-- Atmosphere Photography Stack with Rotating Stamp Badge & Framing (6 Cols) -->
                <div class="lg:col-span-6 relative" data-reveal="fade-up">
                    <div class="relative aspect-[4/3] rounded-[36px] sm:rounded-[48px] overflow-hidden shadow-2xl border border-[#482820]/10 brew-photo-frame"
                         data-tilt-3d>
                        <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=1200&q=80" 
                             alt="Suasana Ruang Bar Kala Sangrai"
                             class="w-full h-full object-cover">
                        <div class="absolute bottom-4 sm:bottom-6 left-4 sm:left-6 bg-[#482820]/90 backdrop-blur-md border border-white/20 px-3.5 sm:px-5 py-1.5 sm:py-2.5 rounded-full text-[11px] sm:text-xs font-mono text-[#F8F5F1]">
                            Kebayoran Baru • Jakarta Selatan
                        </div>

                        <!-- Motion Graphic Rotating Circular Stamp Badge on Photo -->
                        <div class="absolute -top-3 -right-3 w-20 h-20 sm:w-28 sm:h-28 pointer-events-none drop-shadow-2xl animate-spin-slow z-20">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-[#FEBD02]">
                                <defs>
                                    <path id="spaceStampCircle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="transparent" />
                                </defs>
                                <circle cx="50" cy="50" r="48" fill="#482820" stroke="#FEBD02" stroke-width="2" />
                                <circle cx="50" cy="50" r="38" fill="none" stroke="#FEBD02" stroke-width="1" stroke-dasharray="2,3" />
                                <text font-size="8.5" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" fill="#FEBD02" letter-spacing="1.8">
                                    <textPath href="#spaceStampCircle">
                                        ★ SLOW BAR & ROASTERY LAB ★ JAKARTA ★
                                    </textPath>
                                </text>
                                <circle cx="50" cy="50" r="14" fill="#FEBD02" />
                                <circle cx="50" cy="50" r="6" fill="#482820" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Space Details & Hours (6 Cols) -->
                <div class="lg:col-span-6 space-y-6 sm:space-y-8" data-reveal="fade-up">
                    
                    <div class="space-y-3 sm:space-y-4">
                        <span class="font-script text-2xl sm:text-3xl text-[#482820] block -rotate-2">
                            Ruang Berdialog
                        </span>
                        <h2 class="font-display text-3xl sm:text-5xl uppercase tracking-wider text-[#482820] leading-tight sm:leading-[0.95]">
                            Kenyamanan fokus kerja dan perjumpaan santai.
                        </h2>
                        <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                            Dirancang dengan sentuhan kayu jati alami, beton ekspos bersih, dan pencahayaan hangat yang menenangkan. Kami menyediakan colokan listrik di setiap meja, koneksi internet berkecepatan tinggi, dan area slow bar khusus untuk berdialog dengan barista mengenai profil biji kopi.
                        </p>
                    </div>

                    <!-- Detail Cards with Rounded Corners -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 pt-1 sm:pt-2">
                        <div class="bg-[#F8F5F1] p-4 sm:p-5 rounded-[24px] sm:rounded-[28px] border border-[#482820]/10 space-y-1">
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#482820] font-bold block">Jam Operasional</span>
                            <p class="text-xs text-[#482820] font-medium font-sans">Senin — Jumat: 07:00 – 22:00 WIB</p>
                            <p class="text-xs text-[#482820] font-medium font-sans">Sabtu — Minggu: 07:00 – 23:00 WIB</p>
                        </div>
                        <div class="bg-[#F8F5F1] p-4 sm:p-5 rounded-[24px] sm:rounded-[28px] border border-[#482820]/10 space-y-1">
                            <span class="text-[10px] font-mono uppercase tracking-wider text-[#482820] font-bold block">Alamat Kedai</span>
                            <p class="text-xs text-[#482820] font-medium font-sans">{{ config('site.address') }}</p>
                            <a href="{{ config('site.maps_url') }}" target="_blank" rel="noopener noreferrer" 
                               class="text-[11px] text-[#482820] font-bold hover:underline block pt-1 font-mono">
                                Buka di Google Maps →
                            </a>
                        </div>
                    </div>

                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="{{ route('atmosphere') }}" 
                           data-magnetic
                           class="btn-brewlab btn-brewlab-dark justify-between sm:justify-start">
                            <span class="btn-brewlab-pill flex-1 sm:flex-initial text-center">Galeri Suasana Ruang</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="image" class="w-4 h-4"></i>
                            </span>
                        </a>
                        <a href="{{ route('contact') }}" 
                           class="text-xs uppercase tracking-widest text-[#482820] hover:text-[#FEBD02] transition-colors flex items-center justify-center sm:justify-start gap-2 py-2 font-mono font-bold">
                            Petunjuk Arah & Kontak Lengkap →
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- SECTION 7: KEMITRAAN WHOLESALE & PASOKAN B2B BANNER (BREWLAB MUSTARD YELLOW BANNER) -->
    <section class="py-12 sm:py-16 bg-[#F8F5F1]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-[#FEBD02] text-[#482820] p-6 sm:p-12 lg:p-16 rounded-[36px] sm:rounded-[48px] shadow-2xl relative overflow-hidden"
                 data-reveal="fade-up">
                
                <div class="max-w-3xl space-y-4 sm:space-y-6 relative z-10">
                    <span class="font-script text-2xl sm:text-4xl text-[#482820] block -rotate-2">
                        Kemitraan Kedai & Bisnis
                    </span>
                    <h2 class="font-display text-3xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#482820] leading-tight sm:leading-[0.95]">
                        Pasokan biji kopi berkualitas konsisten untuk kafe & bisnis Anda.
                    </h2>
                    <p class="text-xs sm:text-base text-[#482820]/80 leading-relaxed font-sans">
                        Kami menyediakan pasokan roasted beans partai besar (mulai 5 kg), peracikan signature house blend khusus untuk brand Anda, kalibrasi mesin espresso, hingga pelatihan barista dasar.
                    </p>
                    <div class="pt-2 sm:pt-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="{{ route('wholesale') }}" 
                           data-magnetic
                           class="btn-brewlab btn-brewlab-dark justify-between sm:justify-start">
                            <span class="btn-brewlab-pill flex-1 sm:flex-initial text-center">Konsultasi & Ajukan Sampel Wholesale</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </a>
                        <span class="text-xs text-[#482820] font-mono font-bold text-center sm:text-left">
                            Pengiriman rutin mingguan se-Indonesia
                        </span>
                    </div>
                </div>

                <!-- Giant Background Bean Silhouette Watermark -->
                <div class="absolute -right-16 -bottom-16 w-96 h-96 opacity-10 pointer-events-none text-[#482820]">
                    <i data-lucide="coffee" class="w-full h-full"></i>
                </div>

            </div>
        </div>
    </section>

</x-layouts.app>
