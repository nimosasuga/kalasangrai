<x-layouts.app>
    <x-slot:title>Daftar Menu Bar & Slow Bar</x-slot:title>
    <x-slot:description>Pilihan menu kopi espresso bar, seduh manual pour-over, racikan dingin cold drip, teh artisanal, serta pastry panggang segar.</x-slot:description>

    <!-- Page Header (BrewLab Deep Espresso Header with Barista Extraction Suite Animation) -->
    <section class="bg-[#482820] text-[#F8F5F1] pt-14 pb-16 relative overflow-hidden">
        <!-- Ambient Warm Bokeh -->
        <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-[#FEBD02]/10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                
                <div class="max-w-3xl space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-mono tracking-widest text-[#FEBD02] border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-[#FEBD02] animate-pulse"></span>
                            Buku Menu Bar & Dapur
                        </span>
                        <span class="font-script text-2xl text-[#FEBD02] rotate-[-4deg] hidden sm:inline">
                            Fresh Daily
                        </span>
                    </div>
                    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#FFFFFF] leading-[0.95]">
                        Racikan kopi terkalibrasi dan kudapan panggang.
                    </h1>
                    <p class="text-sm text-[#D8C8B8] leading-relaxed font-sans max-w-2xl">
                        Setiap cangkir diracik menggunakan air berfiltrasi mineral seimbang (140 PPM), biji kopi sangrai segar berumur optimal, dan susu segar pasteurisasi tanpa perasa buatan.
                    </p>
                </div>

                <!-- Barista Steam & Calibration Motion Card (Distinct Menu Page Effect) -->
                <div class="bg-white/5 border border-white/10 rounded-[32px] p-6 lg:p-7 backdrop-blur-md max-w-sm w-full space-y-4 relative overflow-hidden" data-tilt-3d>
                    <div class="flex items-center gap-4">
                        <!-- Animated Coffee Cup with Steam Graphic -->
                        <div class="w-14 h-14 rounded-2xl bg-[#FEBD02] text-[#482820] flex items-center justify-center relative flex-shrink-0 shadow-lg">
                            <div class="absolute -top-3 flex gap-1 justify-center">
                                <span class="w-1 h-3 rounded-full bg-[#FEBD02] animate-bounce" style="animation-delay: 0.1s;"></span>
                                <span class="w-1 h-4 rounded-full bg-[#FEBD02] animate-bounce" style="animation-delay: 0.3s;"></span>
                                <span class="w-1 h-2.5 rounded-full bg-[#FEBD02] animate-bounce" style="animation-delay: 0.2s;"></span>
                            </div>
                            <i data-lucide="coffee" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <span class="text-[10px] font-mono text-[#FEBD02] uppercase tracking-widest block font-bold">Standard Barista</span>
                            <h3 class="font-display text-xl uppercase tracking-wider text-white">Kalibrasi Harian</h3>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2 pt-2 border-t border-white/10 text-xs font-mono">
                        <div class="bg-white/5 rounded-xl p-2 text-center">
                            <span class="text-[10px] text-[#D8C8B8] block">Suhu Ekstraksi</span>
                            <span class="text-sm font-bold text-[#FEBD02]">92.5°C</span>
                        </div>
                        <div class="bg-white/5 rounded-xl p-2 text-center">
                            <span class="text-[10px] text-[#D8C8B8] block">Tekanan Pompa</span>
                            <span class="text-sm font-bold text-white">9.0 BAR</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Category Filter Tabs: BrewLab Pill Style -->
            <div class="mt-10 flex flex-wrap items-center gap-2.5 pt-4 border-t border-white/10 text-xs tracking-wider uppercase font-medium font-mono">
                @foreach($categories as $catKey => $catLabel)
                    <a href="{{ route('menu', ['category' => $catKey]) }}"
                       class="px-4 py-2 rounded-full transition-all {{ $category === $catKey ? 'bg-[#FEBD02] text-[#482820] font-bold shadow-md' : 'bg-white/10 text-[#D8C8B8] hover:text-white hover:bg-white/15' }}">
                        {{ $catLabel }}
                    </a>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Crema Wave Divider -->
    <div class="w-full overflow-hidden leading-none bg-[#482820]">
        <svg viewBox="0 0 1440 134" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-10 sm:h-16 text-[#F8F5F1] preserve-3d block" preserveAspectRatio="none">
            <path d="M0,64 C320,130 640,0 960,64 C1200,112 1360,40 1440,24 L1440,134 L0,134 Z" fill="currentColor"></path>
        </svg>
    </div>

    <!-- Menu Grid Section with Alpine Temperature & Keyword Live Filter -->
    <section class="py-16 sm:py-20 bg-[#F8F5F1] text-[#482820]"
             x-data="{
                tempFilter: 'all',
                search: '',
                activeCustom: null,
                oatMilk: false,
                extraShot: false,
                get customPrice() {
                    if (!this.activeCustom) return 0;
                    let p = this.activeCustom.price;
                    if (this.oatMilk) p += 8000;
                    if (this.extraShot) p += 10000;
                    return p;
                },
                get customWaUrl() {
                    if (!this.activeCustom) return '#';
                    let base = '{{ preg_replace('/[^0-9]/', '', config('site.whatsapp')) }}';
                    let opts = [];
                    if (this.oatMilk) opts.push('Ganti Susu Oat (+8rb)');
                    if (this.extraShot) opts.push('Ekstra Espresso Shot (+10rb)');
                    let optStr = opts.length ? ' dengan opsi: ' + opts.join(', ') : '';
                    let msg = encodeURIComponent('Halo Kala Sangrai, saya ingin memesan menu ' + this.activeCustom.name + optStr + ' (Total: Rp ' + this.customPrice.toLocaleString('id-ID') + '). Mohon info.');
                    return 'https://wa.me/' + base + '?text=' + msg;
                }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Interactive Secondary Filter Toolbar (Temperature + Search) -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10 pb-6 border-b border-[#482820]/10">
                <!-- Temperature Buttons -->
                <div class="flex flex-wrap items-center gap-2 text-xs font-mono">
                    <span class="text-[10px] text-[#78716c] uppercase font-bold mr-1">Suhu Saji:</span>
                    <button type="button" 
                            @click="tempFilter = 'all'"
                            :class="tempFilter === 'all' ? 'bg-[#482820] text-white' : 'bg-white text-[#482820] hover:bg-[#482820]/5'"
                            class="px-3.5 py-1.5 rounded-full border border-[#482820]/15 transition-all font-semibold shadow-xs">
                        Semua
                    </button>
                    <button type="button" 
                            @click="tempFilter = 'Hot'"
                            :class="tempFilter === 'Hot' ? 'bg-[#482820] text-white' : 'bg-white text-[#482820] hover:bg-[#482820]/5'"
                            class="px-3.5 py-1.5 rounded-full border border-[#482820]/15 transition-all font-semibold shadow-xs">
                        Hot ♨️
                    </button>
                    <button type="button" 
                            @click="tempFilter = 'Iced'"
                            :class="tempFilter === 'Iced' ? 'bg-[#482820] text-white' : 'bg-white text-[#482820] hover:bg-[#482820]/5'"
                            class="px-3.5 py-1.5 rounded-full border border-[#482820]/15 transition-all font-semibold shadow-xs">
                        Iced / Cold ❄️
                    </button>
                    <button type="button" 
                            @click="tempFilter = 'Warm'"
                            :class="tempFilter === 'Warm' ? 'bg-[#482820] text-white' : 'bg-white text-[#482820] hover:bg-[#482820]/5'"
                            class="px-3.5 py-1.5 rounded-full border border-[#482820]/15 transition-all font-semibold shadow-xs">
                        Pastry Hangat 🥐
                    </button>
                </div>

                <!-- Instant Search Input -->
                <div class="relative max-w-xs w-full">
                    <input type="text" 
                           x-model="search"
                           placeholder="Cari nama sajian / rasa..."
                           class="w-full bg-white border border-[#482820]/15 rounded-full px-4 py-2 pl-9 text-xs text-[#482820] placeholder-[#78716c] focus:outline-none focus:border-[#FEBD02] shadow-xs">
                    <i data-lucide="search" class="w-3.5 h-3.5 text-[#78716c] absolute left-3 top-2.5"></i>
                </div>
            </div>

            <!-- Menu Grid with Product Photography (BrewLab Style) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($items as $item)
                <div class="bg-white border border-[#482820]/10 p-6 sm:p-7 flex flex-col justify-between rounded-[40px] hover:border-[#FEBD02] transition-all duration-300 shadow-sm hover:shadow-2xl group"
                     x-show="(tempFilter === 'all' || '{{ $item->serving_temperature }}'.includes(tempFilter)) && ('{{ strtolower($item->name) }}'.includes(search.toLowerCase()) || '{{ strtolower($item->tasting_notes) }}'.includes(search.toLowerCase()))"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     data-tilt-3d>
                    
                    <div>
                        <!-- Product Photography Frame (Rich Visual Media) -->
                        <div class="relative aspect-[16/11] bg-[#482820] rounded-[28px] overflow-hidden mb-5 border border-[#482820]/10 brew-photo-frame">
                            <img src="{{ $item->display_image }}" 
                                 alt="{{ $item->name }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            
                            <!-- Category Badge on Photo -->
                            <div class="absolute top-3.5 left-3.5 bg-[#482820]/90 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-mono uppercase tracking-widest text-[#FEBD02] font-semibold border border-white/20">
                                {{ $item->category_label }}
                            </div>

                            <!-- Serving Temperature Pill -->
                            <div class="absolute bottom-3.5 right-3.5 text-[10px] font-mono text-[#F8F5F1] bg-[#482820]/85 backdrop-blur-md px-2.5 py-1 rounded-full border border-white/10 flex items-center gap-1.5">
                                @if(str_contains(strtolower($item->serving_temperature), 'hot'))
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                                @elseif(str_contains(strtolower($item->serving_temperature), 'cold') || str_contains(strtolower($item->serving_temperature), 'iced'))
                                    <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                                @else
                                    <span class="w-1.5 h-1.5 rounded-full bg-stone-300"></span>
                                @endif
                                {{ $item->serving_temperature }}
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="h-14 line-clamp-2 leading-snug flex items-start mb-2">
                            <h2 class="font-display text-2xl uppercase tracking-wider text-[#482820] group-hover:text-[#482820]">
                                {{ $item->name }}
                            </h2>
                        </div>

                        <!-- Tasting Notes Strip with Hover Expansion -->
                        @if($item->tasting_notes)
                        <div class="py-2.5 bg-[#F8F5F1] px-3.5 rounded-2xl border-l-4 border-[#FEBD02] text-xs mb-3 transition-colors group-hover:bg-[#FEBD02]/10">
                            <span class="text-[10px] font-mono uppercase text-[#78716c] block font-bold mb-0.5">Karakter Rasa:</span>
                            <p class="text-[#482820] font-sans font-medium line-clamp-1">
                                {{ $item->tasting_notes }}
                            </p>
                        </div>
                        @else
                        <div class="py-2.5 bg-[#F8F5F1] px-3.5 rounded-2xl border-l-4 border-[#482820]/20 text-xs mb-3">
                            <span class="text-[10px] font-mono uppercase text-[#78716c] block font-bold mb-0.5">Penyajian:</span>
                            <p class="text-[#78716c] font-sans font-medium line-clamp-1">
                                Dipanggang / Disajikan Segar
                            </p>
                        </div>
                        @endif

                        <!-- Description -->
                        <p class="text-xs text-[#78716c] leading-relaxed h-[4.25rem] line-clamp-3 overflow-hidden font-sans mb-4">
                            {{ $item->description }}
                        </p>
                    </div>

                    <!-- Footer Action -->
                    <div class="mt-auto pt-5 border-t border-[#482820]/10 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] font-mono text-[#78716c] uppercase block">Harga Saji</span>
                            <span class="font-display text-2xl text-[#482820] leading-none">{{ $item->formatted_price }}</span>
                        </div>
                        <button type="button"
                                @click="activeCustom = { name: '{{ addslashes($item->name) }}', price: {{ $item->price }}, category: '{{ $item->category }}', image: '{{ $item->display_image }}' }; oatMilk = false; extraShot = false"
                                class="btn-brewlab btn-brewlab-dark text-xs">
                            <span class="btn-brewlab-pill">Pesan / Racik</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="sliders-horizontal" class="w-3.5 h-3.5"></i>
                            </span>
                        </button>
                    </div>

                </div>
                @empty
                <div class="col-span-3 py-16 text-center text-[#78716c]">
                    <p class="text-base font-sans">Tidak ada sajian dalam kategori ini.</p>
                </div>
                @endforelse
            </div>

            <!-- Bottom Information Box -->
            <div class="mt-16 bg-white border border-[#482820]/10 rounded-[32px] p-6 sm:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 shadow-sm">
                <div class="space-y-1">
                    <span class="text-xs font-mono uppercase tracking-widest text-[#482820] font-bold">Opsi Khusus & Alergi</span>
                    <p class="text-xs text-[#78716c] font-sans">
                        Tersedia opsi penggantian Oat Milk (+Rp 8.000) dan ekstra espresso shot (+Rp 10.000). Sampaikan preferensi suhu atau kebiasaan minum Anda kepada barista.
                    </p>
                </div>
                <a href="{{ route('beans') }}" 
                   class="btn-brewlab btn-brewlab-yellow shrink-0">
                    <span class="btn-brewlab-pill">Beli Biji Kopi Untuk Di Rumah</span>
                    <span class="btn-brewlab-circle">
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </span>
                </a>
            </div>

            <!-- Customization & Instant WhatsApp Order Modal -->
            <div x-show="activeCustom" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @keydown.escape.window="activeCustom = null"
                 class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-[#482820]/80 backdrop-blur-sm"
                 style="display: none;">
                
                <div @click.away="activeCustom = null" 
                     class="max-w-md w-full bg-white rounded-[36px] p-6 sm:p-8 space-y-6 relative shadow-2xl border border-[#482820]/10">
                    
                    <div class="flex items-start justify-between border-b border-[#482820]/10 pb-4">
                        <div class="flex items-center gap-3">
                            <img :src="activeCustom?.image" class="w-14 h-14 rounded-2xl object-cover border border-[#482820]/10">
                            <div>
                                <span class="text-[10px] font-mono text-[#FEBD02] uppercase tracking-wider font-bold bg-[#482820] px-2.5 py-0.5 rounded-full">Kustomisasi Pesanan</span>
                                <h3 class="font-display text-2xl uppercase tracking-wider text-[#482820] mt-1" x-text="activeCustom?.name"></h3>
                            </div>
                        </div>
                        <button @click="activeCustom = null" 
                                type="button"
                                class="text-[#78716c] hover:text-[#482820] p-1.5 rounded-full hover:bg-stone-100">
                            ✕
                        </button>
                    </div>

                    <!-- Custom Add-ons Checkboxes -->
                    <div class="space-y-3 font-mono text-xs">
                        <label class="flex items-center justify-between p-3.5 rounded-2xl border border-[#482820]/10 bg-[#F8F5F1] cursor-pointer hover:border-[#FEBD02] transition-colors">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" x-model="oatMilk" class="rounded text-[#482820] focus:ring-0">
                                <span>Ganti Susu Nabati (Oat Milk)</span>
                            </div>
                            <span class="font-bold text-[#482820]">+Rp 8.000</span>
                        </label>
                        <label class="flex items-center justify-between p-3.5 rounded-2xl border border-[#482820]/10 bg-[#F8F5F1] cursor-pointer hover:border-[#FEBD02] transition-colors">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" x-model="extraShot" class="rounded text-[#482820] focus:ring-0">
                                <span>Ekstra Espresso Shot Ganda</span>
                            </div>
                            <span class="font-bold text-[#482820]">+Rp 10.000</span>
                        </label>
                    </div>

                    <!-- Price & Checkout Button -->
                    <div class="pt-2 border-t border-[#482820]/10 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] font-mono text-[#78716c] uppercase block">Total Estimasi</span>
                            <span class="font-display text-2xl text-[#482820]" x-text="'Rp ' + customPrice.toLocaleString('id-ID')"></span>
                        </div>
                        <a :href="customWaUrl" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="btn-brewlab btn-brewlab-yellow text-xs">
                            <span class="btn-brewlab-pill">Kirim ke Barista</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                            </span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

</x-layouts.app>
