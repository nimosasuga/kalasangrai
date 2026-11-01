<x-layouts.app>
    <x-slot:title>Katalog Biji Kopi Sangrai (Roasted Beans)</x-slot:title>
    <x-slot:description>Koleksi biji kopi nusantara sangrai segar: Aceh Gayo, Toraja Sapan, Kerinci Honey, Bali Kintamani, Flores Bajawa, dan House Blend.</x-slot:description>

    <!-- Page Header (BrewLab Deep Espresso Header with Roast Spectrum & Cupping Wheel) -->
    <section class="bg-[#482820] text-[#F8F5F1] pt-14 pb-16 relative overflow-hidden"
             x-data="{
                showGrindGuide: false,
                activeGrind: 'v60',
                grinds: {
                    whole: { name: 'Biji Utuh (Whole Bean)', size: 'Optimal', desc: 'Simpan di wadah kedap udara untuk digiling segar sebelum seduh.' },
                    v60: { name: 'Medium-Fine (V60 / Kalita)', size: '600 - 800 µm', desc: 'Ukuran garam meja halus untuk ekstraksi jernih beraroma bunga dan buah.' },
                    espresso: { name: 'Fine (Espresso / Moka)', size: '200 - 350 µm', desc: 'Tepung halus berpasir mikro untuk menghasilkan crema padat di bawah tekanan 9 bar.' },
                    coldbrew: { name: 'Coarse (French Press / Cold Drip)', size: '1000 - 1200 µm', desc: 'Garam laut kasar untuk perendaman dingin 12 jam tanpa rasa pahit berlebih.' }
                }
             }">
        
        <!-- Ambient Roast Bronze Glow -->
        <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-[#FEBD02]/10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                
                <div class="max-w-3xl space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-mono tracking-widest text-[#FEBD02] border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-[#FEBD02] animate-pulse"></span>
                            Kurasi Roastery
                        </span>
                        <span class="font-script text-2xl text-[#FEBD02] rotate-[-4deg] hidden sm:inline">
                            Direct Origin
                        </span>
                    </div>
                    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#FFFFFF] leading-[0.95]">
                        Biji kopi nusantara pilihan sangrai segar.
                    </h1>
                    <p class="text-sm text-[#D8C8B8] leading-relaxed font-sans max-w-2xl">
                        Setiap kantong biji kopi dilengkapi tanggal sangrai (*roast date*), informasi proses pasca-panen, ketinggian tanam, dan panduan rasio seduh. Tersedia dalam kemasan 200 gram dan 1 kilogram.
                    </p>
                </div>

                <!-- Roastery Cupping & Grind Visualizer Action Box -->
                <div class="bg-white/5 border border-white/10 rounded-[32px] p-6 backdrop-blur-md max-w-sm w-full space-y-3" data-tilt-3d>
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono text-[#FEBD02] uppercase tracking-widest font-bold">Panduan Partikel Seduh</span>
                        <span class="text-[10px] font-mono text-emerald-400 bg-emerald-950/60 px-2 py-0.5 rounded-full border border-emerald-500/20">Free Grinding</span>
                    </div>
                    <h3 class="font-display text-xl uppercase tracking-wider text-white">Kalibrasi Gilingan Mahlkönig EK43</h3>
                    <p class="text-xs text-[#D8C8B8] font-sans">
                        Pesan biji utuh atau kami gilingkan gratis sesuai alat seduh favorit Anda di rumah.
                    </p>
                    <button type="button" 
                            @click="showGrindGuide = true"
                            class="w-full py-2.5 px-4 rounded-full bg-[#FEBD02] hover:bg-white text-[#482820] font-mono text-xs uppercase tracking-wider font-bold transition-all flex items-center justify-center gap-2">
                        <i data-lucide="gauge" class="w-4 h-4"></i>
                        <span>Lihat Panduan Gilingan</span>
                    </button>
                </div>

            </div>

            <!-- Filter Tabs: BrewLab Pill Style with Live Category Badges -->
            <div class="mt-10 flex flex-wrap items-center gap-2.5 pt-4 border-t border-white/10 text-xs tracking-wider uppercase font-medium font-mono">
                <a href="{{ route('beans') }}" 
                   class="px-4 py-2 rounded-full transition-all {{ $filter === 'all' ? 'bg-[#FEBD02] text-[#482820] font-bold shadow-md' : 'bg-white/10 text-[#D8C8B8] hover:text-white hover:bg-white/15' }}">
                    Semua Biji Kopi
                </a>
                <a href="{{ route('beans', ['filter' => 'filter']) }}" 
                   class="px-4 py-2 rounded-full transition-all {{ $filter === 'filter' ? 'bg-[#FEBD02] text-[#482820] font-bold shadow-md' : 'bg-white/10 text-[#D8C8B8] hover:text-white hover:bg-white/15' }}">
                    Profil Filter (Manual Brew)
                </a>
                <a href="{{ route('beans', ['filter' => 'espresso']) }}" 
                   class="px-4 py-2 rounded-full transition-all {{ $filter === 'espresso' ? 'bg-[#FEBD02] text-[#482820] font-bold shadow-md' : 'bg-white/10 text-[#D8C8B8] hover:text-white hover:bg-white/15' }}">
                    Profil Espresso & Susu
                </a>
                <a href="{{ route('beans', ['filter' => 'natural']) }}" 
                   class="px-4 py-2 rounded-full transition-all {{ $filter === 'natural' ? 'bg-[#FEBD02] text-[#482820] font-bold shadow-md' : 'bg-white/10 text-[#D8C8B8] hover:text-white hover:bg-white/15' }}">
                    Proses Natural / Anaerobik
                </a>
                <a href="{{ route('beans', ['filter' => 'washed']) }}" 
                   class="px-4 py-2 rounded-full transition-all {{ $filter === 'washed' ? 'bg-[#FEBD02] text-[#482820] font-bold shadow-md' : 'bg-white/10 text-[#D8C8B8] hover:text-white hover:bg-white/15' }}">
                    Proses Washed / Bersih
                </a>
            </div>

            <!-- Interactive Grind Visualizer Modal -->
            <div x-show="showGrindGuide" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @keydown.escape.window="showGrindGuide = false"
                 class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-[#482820]/85 backdrop-blur-md"
                 style="display: none;">
                
                <div @click.away="showGrindGuide = false" 
                     class="max-w-lg w-full bg-white rounded-[36px] p-6 sm:p-8 space-y-6 relative shadow-2xl border border-[#482820]/10 text-[#482820]">
                    
                    <div class="flex items-start justify-between border-b border-[#482820]/10 pb-4">
                        <div>
                            <span class="text-[10px] font-mono text-[#FEBD02] uppercase tracking-wider font-bold bg-[#482820] px-2.5 py-0.5 rounded-full">Katalog Partikel Seduh</span>
                            <h3 class="font-display text-2xl uppercase tracking-wider text-[#482820] mt-1.5">Panduan Tingkat Gilingan</h3>
                        </div>
                        <button @click="showGrindGuide = false" 
                                type="button"
                                class="text-[#78716c] hover:text-[#482820] p-1.5 rounded-full hover:bg-stone-100">
                            ✕
                        </button>
                    </div>

                    <!-- Grind Selector Tabs -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-xs font-mono">
                        <button type="button" 
                                @click="activeGrind = 'whole'"
                                :class="activeGrind === 'whole' ? 'bg-[#482820] text-white' : 'bg-[#F8F5F1] text-[#482820]'"
                                class="p-2.5 rounded-2xl border border-[#482820]/10 font-bold transition-all text-center">
                            Biji Utuh
                        </button>
                        <button type="button" 
                                @click="activeGrind = 'espresso'"
                                :class="activeGrind === 'espresso' ? 'bg-[#482820] text-white' : 'bg-[#F8F5F1] text-[#482820]'"
                                class="p-2.5 rounded-2xl border border-[#482820]/10 font-bold transition-all text-center">
                            Espresso
                        </button>
                        <button type="button" 
                                @click="activeGrind = 'v60'"
                                :class="activeGrind === 'v60' ? 'bg-[#482820] text-white' : 'bg-[#F8F5F1] text-[#482820]'"
                                class="p-2.5 rounded-2xl border border-[#482820]/10 font-bold transition-all text-center">
                            Filter V60
                        </button>
                        <button type="button" 
                                @click="activeGrind = 'coldbrew'"
                                :class="activeGrind === 'coldbrew' ? 'bg-[#482820] text-white' : 'bg-[#F8F5F1] text-[#482820]'"
                                class="p-2.5 rounded-2xl border border-[#482820]/10 font-bold transition-all text-center">
                            Cold Brew
                        </button>
                    </div>

                    <!-- Dynamic Grind Detail Card -->
                    <div class="bg-[#F8F5F1] p-5 rounded-3xl border border-[#482820]/10 space-y-2">
                        <div class="flex items-center justify-between">
                            <h4 class="font-display text-xl uppercase tracking-wider text-[#482820]" x-text="grinds[activeGrind].name"></h4>
                            <span class="text-xs font-mono font-bold text-[#FEBD02] bg-[#482820] px-2.5 py-0.5 rounded-full" x-text="grinds[activeGrind].size"></span>
                        </div>
                        <p class="text-xs text-[#78716c] font-sans leading-relaxed" x-text="grinds[activeGrind].desc"></p>
                    </div>

                    <button type="button" 
                            @click="showGrindGuide = false"
                            class="w-full py-3 rounded-full bg-[#482820] text-white font-mono text-xs uppercase tracking-wider font-bold">
                        Tutup & Lanjutkan Memilih Biji
                    </button>

                </div>
            </div>

        </div>
    </section>

    <!-- Crema Wave Divider -->
    <div class="w-full overflow-hidden leading-none bg-[#482820]">
        <svg viewBox="0 0 1440 134" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-10 sm:h-16 text-[#F8F5F1] preserve-3d block" preserveAspectRatio="none">
            <path d="M0,64 C320,130 640,0 960,64 C1200,112 1360,40 1440,24 L1440,134 L0,134 Z" fill="currentColor"></path>
        </svg>
    </div>

    <!-- Beans Grid -->
    <section class="py-16 sm:py-20 bg-[#F8F5F1] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-reveal="stagger">
                @forelse($beans as $bean)
                <div class="bg-white border border-[#482820]/10 rounded-[40px] p-6 sm:p-7 flex flex-col justify-between hover:border-[#FEBD02] transition-all duration-300 shadow-sm hover:shadow-2xl group"
                     data-tilt-3d>
                    
                    <div>
                        <!-- Top Bag Visual / Origin Image with Photo Framing -->
                        <div class="relative aspect-[16/11] bg-[#482820] rounded-[28px] overflow-hidden mb-6 border border-[#482820]/10 brew-photo-frame">
                            <img src="{{ $bean->display_image }}" 
                                 alt="{{ $bean->name }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            
                            <div class="absolute top-3 left-3 bg-[#482820]/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-mono uppercase tracking-widest text-[#FEBD02] font-semibold border border-white/20">
                                {{ $bean->roast_profile }}
                            </div>
                            <div class="absolute bottom-3 left-3 text-[11px] font-mono text-[#F8F5F1] bg-[#482820]/80 backdrop-blur-md px-3 py-1 rounded-full border border-white/10">
                                {{ $bean->altitude }}
                            </div>
                        </div>

                        <!-- Card Body -->
                        <span class="text-xs font-mono uppercase tracking-wider text-[#482820] block mb-1 font-bold">
                            {{ $bean->origin }} • {{ $bean->process }}
                        </span>

                        <!-- Title: Locked h-14 -->
                        <div class="h-14 line-clamp-2 leading-snug flex items-start mb-2">
                            <h2 class="font-display text-2xl uppercase tracking-wider text-[#482820]">
                                <a href="{{ route('beans.detail', $bean->slug) }}" class="hover:text-[#FEBD02] transition-colors">
                                    {{ $bean->name }}
                                </a>
                            </h2>
                        </div>

                        <!-- Tasting Notes Strip -->
                        <div class="py-2.5 bg-[#F8F5F1] px-3.5 rounded-2xl border-l-4 border-[#FEBD02] text-xs mb-3 group-hover:bg-[#FEBD02]/10 transition-colors">
                            <span class="text-[10px] font-mono uppercase text-[#78716c] block font-bold mb-0.5">Catatan Rasa:</span>
                            <p class="text-[#482820] font-sans font-medium line-clamp-1">
                                {{ $bean->tasting_notes }}
                            </p>
                        </div>

                        <!-- Description: Locked h-[4.25rem] -->
                        <p class="text-xs text-[#78716c] leading-relaxed h-[4.25rem] line-clamp-3 overflow-hidden font-sans">
                            {{ $bean->description }}
                        </p>
                    </div>

                    <!-- Card Footer -->
                    <div class="mt-auto pt-5 border-t border-[#482820]/10 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] font-mono text-[#78716c] uppercase block">200g / 1kg</span>
                            <span class="font-display text-2xl text-[#482820] leading-none">{{ $bean->formatted_price_200g }}</span>
                        </div>
                        <a href="{{ route('beans.detail', $bean->slug) }}" 
                           class="btn-brewlab btn-brewlab-dark text-xs">
                            <span class="btn-brewlab-pill">Profil & Seduh</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                            </span>
                        </a>
                    </div>

                </div>
                @empty
                <div class="col-span-3 py-16 text-center text-[#78716c]">
                    <p class="text-base font-sans">Tidak ada biji kopi dengan filter yang dipilih.</p>
                </div>
                @endforelse
            </div>

            <!-- Custom Grind Notice -->
            <div class="mt-16 bg-white border border-[#482820]/10 rounded-[32px] p-6 sm:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm">
                <div class="space-y-1">
                    <span class="text-xs font-mono uppercase tracking-widest text-[#482820] font-bold">Pilihan Tingkat Gilingan</span>
                    <p class="text-xs text-[#78716c] font-sans">
                        Anda dapat memesan dalam bentuk biji utuh (*whole bean*) atau digiling gratis sesuai metode seduh: Halus (Espresso/Moka Pot), Sedang (V60/Aeropress), atau Kasar (French Press/Cold Brew).
                    </p>
                </div>
                <a href="{{ route('wholesale') }}" 
                   class="btn-brewlab btn-brewlab-yellow shrink-0">
                    <span class="btn-brewlab-pill">Kebutuhan Wholesale (Mulai 5kg)</span>
                    <span class="btn-brewlab-circle">
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </span>
                </a>
            </div>

        </div>
    </section>

</x-layouts.app>
