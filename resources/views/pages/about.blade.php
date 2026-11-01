<x-layouts.app>
    <x-slot:title>Tentang Roastery & Filosofi Sangrai</x-slot:title>
    <x-slot:description>Kisah perjalanan Kala Sangrai Coffee Roasters: dedikasi pada kurasi biji kopi nusantara, presisi mesin sangrai drum, dan kalibrasi air seduh.</x-slot:description>

    <!-- Page Header (BrewLab Deep Espresso Header) -->
    <section class="bg-[#482820] text-[#F8F5F1] pt-14 pb-16 relative overflow-hidden">
        <!-- Ambient Glow -->
        <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-[#FEBD02]/10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl space-y-4">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-mono tracking-widest text-[#FEBD02] border border-white/10">
                        <span class="w-2 h-2 rounded-full bg-[#FEBD02] animate-pulse"></span>
                        Kisah & Filosofi
                    </span>
                    <span class="font-script text-2xl text-[#FEBD02] rotate-[-4deg] hidden sm:inline">
                        Terroir & Heritage
                    </span>
                </div>
                <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#FFFFFF] leading-[0.95]">
                    Tentang Roastery & Filosofi Sangrai
                </h1>
                <p class="text-sm text-[#D8C8B8] leading-relaxed font-sans">
                    Setiap cangkir kopi berawal dari lereng gunung berkabut, tangan para pemetik buah ceri merah, dan proses jemur yang panjang. Tugas kami di meja sangrai adalah menjaga agar keaslian karakter itu tidak hilang terbakar api.
                </p>
            </div>
        </div>
    </section>

    <!-- Crema Wave Divider -->
    <div class="w-full overflow-hidden leading-none bg-[#482820]">
        <svg viewBox="0 0 1440 134" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-10 sm:h-16 text-[#F8F5F1] preserve-3d block" preserveAspectRatio="none">
            <path d="M0,64 C320,130 640,0 960,64 C1200,112 1360,40 1440,24 L1440,134 L0,134 Z" fill="currentColor"></path>
        </svg>
    </div>

    <!-- Narrative Section: Direct Farm Partnerships -->
    <section class="py-16 sm:py-20 bg-[#F8F5F1] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <div class="lg:col-span-6 space-y-6" data-reveal="fade-up">
                    <span class="font-script text-3xl text-[#482820] block -rotate-2">
                        Origin Traceability
                    </span>
                    <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl uppercase tracking-wider text-[#482820] leading-[0.95]">
                        Hubungan langsung dengan koperasi tani di lima kepulauan.
                    </h2>
                    <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                        Kami menjalin kemitraan erat dengan kelompok tani di Pantan Musara (Aceh), Buntu Pepasan (Toraja Utara), Gunung Tujuh (Kerinci), Desa Ulian (Kintamani Bali), dan Lembah Bajawa (Flores).
                    </p>
                    <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                        Kami membeli biji kopi berkategori specialty dengan harga wajar di atas rata-rata pasar komoditas. Pendekatan ini memungkinkan petani merawat tanaman kopi secara berkelanjutan, melakukan petik merah 100%, serta berinvestasi pada raised drying beds yang bersih higienis.
                    </p>
                </div>

                <div class="lg:col-span-6 relative" data-tilt-3d>
                    <div class="aspect-[4/3] rounded-[40px] overflow-hidden shadow-2xl border border-[#482820]/10 relative brew-photo-frame">
                        <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=1200&q=80" 
                             alt="Petik Biji Kopi Nusantara"
                             class="w-full h-full object-cover">
                        <div class="absolute bottom-6 left-6 bg-[#482820]/90 backdrop-blur-md px-4 py-2 rounded-full text-xs font-mono text-[#FEBD02] font-semibold border border-white/20">
                            Kemitraan Langsung • 100% Panen Petik Merah
                        </div>
                    </div>

                    <!-- Motion Graphic Rotating Circular Stamp Badge -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 sm:w-28 sm:h-28 pointer-events-none drop-shadow-xl animate-spin-slow z-20">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-[#FEBD02]">
                            <defs>
                                <path id="aboutStampCircle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="transparent" />
                            </defs>
                            <circle cx="50" cy="50" r="48" fill="#482820" stroke="#FEBD02" stroke-width="2" />
                            <circle cx="50" cy="50" r="38" fill="none" stroke="#FEBD02" stroke-width="1" stroke-dasharray="2,3" />
                            <text font-size="8" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" fill="#FEBD02" letter-spacing="1.6">
                                <textPath href="#aboutStampCircle">
                                    ★ DIRECT TRADE ★ 100% PETIK MERAH ★
                                </textPath>
                            </text>
                            <circle cx="50" cy="50" r="14" fill="#FEBD02" />
                            <circle cx="50" cy="50" r="6" fill="#482820" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Engineering Section: The Machinery & Water Science with Interactive Roasting Drum Motion -->
    <section class="py-16 sm:py-20 bg-[#FEBD02] text-[#482820]"
             x-data="{
                drumSpeed: 'normal',
                get speedClass() {
                    if (this.drumSpeed === 'fast') return 'animate-spin';
                    if (this.drumSpeed === 'slow') return 'animate-spin-slow';
                    return 'animate-spin-slow';
                }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-16 pb-6 border-b border-[#482820]/15" data-reveal="fade-up">
                <div class="max-w-3xl space-y-3">
                    <span class="font-script text-3xl sm:text-4xl text-[#482820] block -rotate-2">
                        Presisi Teknis
                    </span>
                    <h2 class="font-display text-4xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#482820] leading-[0.95]">
                        Mesin sangrai drum dan kimia air seduh.
                    </h2>
                    <p class="text-sm sm:text-base text-[#482820]/80 font-sans">
                        Di Kala Sangrai, rasa nikmat bukan kebetulan semata, melainkan hasil perhitungan parameter fisika dan kimia ekstraksi yang konsisten.
                    </p>
                </div>

                <!-- Interactive Drum Speed Toggle Simulator -->
                <div class="bg-[#482820] p-4 rounded-3xl text-white space-y-2 max-w-xs w-full shadow-lg">
                    <div class="flex items-center justify-between text-[11px] font-mono">
                        <span class="text-[#FEBD02] font-bold">Simulasi Putaran Drum:</span>
                        <span class="uppercase text-[10px] bg-white/10 px-2 py-0.5 rounded-full" x-text="drumSpeed"></span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-xs font-mono">
                        <button type="button" 
                                @click="drumSpeed = 'normal'"
                                :class="drumSpeed === 'normal' ? 'bg-[#FEBD02] text-[#482820]' : 'bg-white/10 text-white'"
                                class="py-1.5 px-3 rounded-full font-bold transition-all">
                            Normal (52 RPM)
                        </button>
                        <button type="button" 
                                @click="drumSpeed = 'fast'"
                                :class="drumSpeed === 'fast' ? 'bg-[#FEBD02] text-[#482820]' : 'bg-white/10 text-white'"
                                class="py-1.5 px-3 rounded-full font-bold transition-all">
                            Fast (68 RPM)
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8" data-reveal="stagger">
                
                <!-- Card 1: Giesen W6A with Animated Mechanical Drum SVG -->
                <div class="bg-[#482820] text-[#F8F5F1] p-8 rounded-[36px] space-y-5 flex flex-col justify-between shadow-xl relative overflow-hidden group">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="font-display text-2xl text-[#FEBD02] block">01 / PERALATAN SANGRAI</span>
                            <!-- Rotating Mechanical Drum Graphic -->
                            <div class="w-10 h-10 rounded-full border-2 border-dashed border-[#FEBD02] flex items-center justify-center animate-spin-slow">
                                <i data-lucide="rotate-cw" class="w-5 h-5 text-[#FEBD02]"></i>
                            </div>
                        </div>
                        <h3 class="font-display text-2xl uppercase tracking-wider text-[#FFFFFF]">Giesen W6A Roaster</h3>
                        <p class="text-xs sm:text-sm text-[#D8C8B8] leading-relaxed font-sans">
                            Mesin sangrai drum ganda buatan Belanda dengan kontrol aliran udara dan kecepatan drum independen. Memastikan transfer panas konveksi merata hingga ke inti biji kopi tanpa menyengat permukaan kulit luar.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-white/10 text-xs font-mono text-[#FEBD02] flex justify-between">
                        <span>Kapasitas 6kg/batch</span>
                        <span>Artisanal Drum</span>
                    </div>
                </div>

                <!-- Card 2: Water Chemistry with 140 PPM Dial -->
                <div class="bg-[#FFFFFF] text-[#482820] p-8 rounded-[36px] space-y-5 flex flex-col justify-between shadow-xl">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="font-display text-2xl text-[#482820] block">02 / STANDAR AIR</span>
                            <!-- Water Drop Mineral Icon -->
                            <div class="w-10 h-10 rounded-full bg-[#FEBD02]/20 flex items-center justify-center">
                                <i data-lucide="droplet" class="w-5 h-5 text-[#482820]"></i>
                            </div>
                        </div>
                        <h3 class="font-display text-2xl uppercase tracking-wider text-[#482820]">Filtrasi Mineral 140 PPM</h3>
                        <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                            Air seduh diproses melalui Reverse Osmosis dan diremineralisasi khusus dengan magnesium dan kalsium pada rasio seimbang untuk mengikat senyawa aromatik kopi secara optimal.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[#482820]/10 text-xs font-mono text-[#482820] font-bold flex justify-between">
                        <span>SCA Target: 125-175 PPM</span>
                        <span>Aktual: 140 PPM</span>
                    </div>
                </div>

                <!-- Card 3: Calibration with Extraction Yield -->
                <div class="bg-[#482820] text-[#F8F5F1] p-8 rounded-[36px] space-y-5 flex flex-col justify-between shadow-xl">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="font-display text-2xl text-[#FEBD02] block">03 / PENGAWASAN MUTU</span>
                            <!-- Gauge Icon -->
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                                <i data-lucide="gauge" class="w-5 h-5 text-[#FEBD02]"></i>
                            </div>
                        </div>
                        <h3 class="font-display text-2xl uppercase tracking-wider text-[#FFFFFF]">Refraktometer & Cupping</h3>
                        <p class="text-xs sm:text-sm text-[#D8C8B8] leading-relaxed font-sans">
                            Kami mengukur TDS (Total Dissolved Solids) dan Extraction Yield untuk setiap profil espresso baru, memastikan rentang ekstraksi ideal 19% - 21% terpenuhi setiap hari.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-white/10 text-xs font-mono text-[#FEBD02] flex justify-between">
                        <span>Rentang Ekstraksi: 19% - 21%</span>
                        <span>Optical Refractometer</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Team & Community Space (Pure White Background) -->
    <section class="py-16 sm:py-20 bg-[#FFFFFF] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6" data-tilt-3d>
                    <div class="aspect-[4/3] rounded-[40px] overflow-hidden shadow-2xl border border-[#482820]/10 brew-photo-frame">
                        <img src="https://images.unsplash.com/photo-1507133750040-4a8f57021571?auto=format&fit=crop&w=1200&q=80" 
                             alt="Barista Slow Bar Kala Sangrai"
                             class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="lg:col-span-6 space-y-6">
                    <span class="font-script text-3xl text-[#482820] block -rotate-2">
                        Kolektif & Interaksi
                    </span>
                    <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl uppercase tracking-wider text-[#482820] leading-[0.95]">
                        Di balik meja seduh Kala Sangrai.
                    </h2>
                    <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                        Barista kami bukan sekadar peracik minuman cepat saji. Kami terlatih memahami asal-usul tanah, proses fermentasi, varietas tanaman, serta mampu mendampingi Anda menemukan metode seduh yang paling selaras dengan selera pribadi.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('atmosphere') }}" 
                           data-magnetic
                           class="btn-brewlab btn-brewlab-dark">
                            <span class="btn-brewlab-pill">Eksplorasi Ruang & Bar Kedai</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layouts.app>
