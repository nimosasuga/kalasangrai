<x-layouts.app>
    <x-slot:title>{{ $bean->name }} — Profil Sangrai & Biji Kopi</x-slot:title>
    <x-slot:description>{{ $bean->description }}</x-slot:description>

    <!-- Breadcrumb & Back Link -->
    <section class="bg-[#482820] text-[#D8C8B8] py-4 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 text-xs font-mono">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>/</span>
                <a href="{{ route('beans') }}" class="hover:text-white transition-colors">Biji Kopi</a>
                <span>/</span>
                <span class="text-[#FEBD02] font-semibold">{{ $bean->name }}</span>
            </div>
        </div>
    </section>

    <!-- Main Detail Spread (BrewLab Asymmetric Editorial Layout) -->
    <section class="py-16 lg:py-20 bg-[#F8F5F1] text-[#482820]"
             x-data="{
                packSize: '200g',
                grind: 'Biji Utuh (Whole Bean)',
                get orderUrl() {
                    let base = '{{ config('site.whatsapp') }}';
                    let price = this.packSize === '200g' ? '{{ $bean->formatted_price_200g }}' : '{{ $bean->formatted_price_1kg }}';
                    let msg = encodeURIComponent('Halo Kala Sangrai, saya ingin memesan {{ $bean->name }} kemasan ' + this.packSize + ' (' + price + ') gilingan: ' + this.grind + '. Mohon info ketersediaan.');
                    return 'https://wa.me/' + base + '?text=' + msg;
                }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left (5 Cols): Product Imagery in 40px Squircle with Motion Graphic Stamp -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="bg-white border border-[#482820]/10 p-4 aspect-[4/5] rounded-[40px] relative overflow-hidden shadow-xl brew-photo-frame"
                         data-tilt-3d>
                        <img src="{{ $bean->display_image }}" 
                             alt="{{ $bean->name }}"
                             class="w-full h-full object-cover rounded-[32px]">
                        
                        <div class="absolute top-8 left-8 bg-[#482820]/90 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-mono uppercase tracking-widest text-[#FEBD02] font-semibold border border-white/20">
                            {{ $bean->roast_profile }}
                        </div>

                        <!-- Motion Graphic Rotating Circular Stamp Badge -->
                        <div class="absolute -bottom-3 -right-3 w-24 h-24 sm:w-28 sm:h-28 pointer-events-none drop-shadow-xl animate-spin-slow z-20">
                            <svg viewBox="0 0 100 100" class="w-full h-full text-[#FEBD02]">
                                <defs>
                                    <path id="beanStampCircle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" fill="transparent" />
                                </defs>
                                <circle cx="50" cy="50" r="48" fill="#482820" stroke="#FEBD02" stroke-width="2" />
                                <circle cx="50" cy="50" r="38" fill="none" stroke="#FEBD02" stroke-width="1" stroke-dasharray="2,3" />
                                <text font-size="8" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" fill="#FEBD02" letter-spacing="1.6">
                                    <textPath href="#beanStampCircle">
                                        ★ ARTISAN SINGLE ORIGIN ★ TERROIR ★
                                    </textPath>
                                </text>
                                <circle cx="50" cy="50" r="14" fill="#FEBD02" />
                                <circle cx="50" cy="50" r="6" fill="#482820" />
                            </svg>
                        </div>
                    </div>

                    <!-- Roasting Machine Origin Note -->
                    <div class="bg-white border border-[#482820]/10 rounded-[28px] p-6 text-xs space-y-2 shadow-sm font-sans">
                        <span class="text-[10px] font-mono text-[#482820] uppercase block tracking-wider font-bold">Metode Sangrai</span>
                        <p class="text-[#78716c] leading-relaxed">
                            Disangrai dengan mesin Giesen W6A drum roaster buatan Belanda. Dipantau kurva suhu konvektif untuk menjaga kemurnian rasa buah asli.
                        </p>
                    </div>
                </div>

                <!-- Right (7 Cols): Grounded Technical Spec & Direct Order -->
                <div class="lg:col-span-7 space-y-8">
                    
                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#FEBD02]"></span>
                            <span class="text-xs uppercase tracking-widest text-[#482820] font-mono font-bold">
                                {{ $bean->origin }}
                            </span>
                        </div>
                        <h1 class="font-display text-3xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#482820] leading-tight sm:leading-[0.95]">
                            {{ $bean->name }}
                        </h1>
                    </div>

                    <!-- Tasting Notes Banner -->
                    <div class="bg-[#482820] text-[#F8F5F1] rounded-[24px] sm:rounded-[28px] p-5 sm:p-6 shadow-md border border-white/10 space-y-1">
                        <span class="text-[10px] font-mono text-[#FEBD02] uppercase block tracking-widest font-bold">Catatan Rasa Terdeteksi (Cupping Notes):</span>
                        <p class="font-display text-2xl sm:text-3xl lg:text-4xl uppercase tracking-wider text-[#FFFFFF] leading-snug">
                            {{ $bean->tasting_notes }}
                        </p>
                    </div>

                    <!-- Technical Agricultural Specs Table -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 py-2 border-b border-[#482820]/10 pb-6 text-xs font-sans">
                        <div class="bg-white p-3.5 rounded-2xl border border-[#482820]/10">
                            <span class="text-[10px] font-mono text-[#78716c] uppercase block">Ketinggian Tanam</span>
                            <span class="text-[#482820] font-bold block mt-1">{{ $bean->altitude }}</span>
                        </div>
                        <div class="bg-white p-3.5 rounded-2xl border border-[#482820]/10">
                            <span class="text-[10px] font-mono text-[#78716c] uppercase block">Varietas Kopi</span>
                            <span class="text-[#482820] font-bold block mt-1">{{ $bean->varietal }}</span>
                        </div>
                        <div class="bg-white p-3.5 rounded-2xl border border-[#482820]/10">
                            <span class="text-[10px] font-mono text-[#78716c] uppercase block">Proses Pasca Panen</span>
                            <span class="text-[#482820] font-bold block mt-1">{{ $bean->process }}</span>
                        </div>
                        <div class="bg-white p-3.5 rounded-2xl border border-[#482820]/10">
                            <span class="text-[10px] font-mono text-[#78716c] uppercase block">Profil Sangrai</span>
                            <span class="text-[#482820] font-bold block mt-1">{{ $bean->roast_profile }}</span>
                        </div>
                    </div>

                    <!-- Sensory Intensity Indicators (Acidity, Body, Sweetness) with Smooth Progress Fill Animation -->
                    <div class="space-y-4 pt-2"
                         x-data="{ animated: false }"
                         x-init="setTimeout(() => animated = true, 200)">
                        <div class="flex items-center justify-between">
                            <h3 class="font-display text-2xl uppercase tracking-wider text-[#482820]">
                                Karakteristik Seduhan (Skala 1 - 5)
                            </h3>
                            <span class="text-[10px] font-mono text-[#FEBD02] bg-[#482820] px-2.5 py-0.5 rounded-full font-bold">Cupping Radar</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
                            
                            <!-- Acidity -->
                            <div class="space-y-2 bg-white border border-[#482820]/10 rounded-2xl p-4 shadow-sm hover:border-[#FEBD02] transition-colors">
                                <div class="flex justify-between text-[11px] font-mono">
                                    <span class="text-[#78716c] uppercase font-bold">Keasaman (Acidity)</span>
                                    <span class="text-[#482820] font-bold">{{ $bean->acidity_level }}/5</span>
                                </div>
                                <div class="w-full bg-[#F8F5F1] h-2.5 rounded-full overflow-hidden p-0.5 border border-[#482820]/5">
                                    <div class="h-full rounded-full bg-[#FEBD02] transition-all duration-1000 ease-out"
                                         :style="animated ? 'width: {{ ($bean->acidity_level / 5) * 100 }}%' : 'width: 0%'"></div>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="space-y-2 bg-white border border-[#482820]/10 rounded-2xl p-4 shadow-sm hover:border-[#FEBD02] transition-colors">
                                <div class="flex justify-between text-[11px] font-mono">
                                    <span class="text-[#78716c] uppercase font-bold">Ketebalan (Body)</span>
                                    <span class="text-[#482820] font-bold">{{ $bean->body_level }}/5</span>
                                </div>
                                <div class="w-full bg-[#F8F5F1] h-2.5 rounded-full overflow-hidden p-0.5 border border-[#482820]/5">
                                    <div class="h-full rounded-full bg-[#482820] transition-all duration-1000 ease-out delay-150"
                                         :style="animated ? 'width: {{ ($bean->body_level / 5) * 100 }}%' : 'width: 0%'"></div>
                                </div>
                            </div>

                            <!-- Sweetness -->
                            <div class="space-y-2 bg-white border border-[#482820]/10 rounded-2xl p-4 shadow-sm hover:border-[#FEBD02] transition-colors">
                                <div class="flex justify-between text-[11px] font-mono">
                                    <span class="text-[#78716c] uppercase font-bold">Kemanisan (Sweetness)</span>
                                    <span class="text-[#482820] font-bold">{{ $bean->sweetness_level }}/5</span>
                                </div>
                                <div class="w-full bg-[#F8F5F1] h-2.5 rounded-full overflow-hidden p-0.5 border border-[#482820]/5">
                                    <div class="h-full rounded-full bg-[#FEBD02] transition-all duration-1000 ease-out delay-300"
                                         :style="animated ? 'width: {{ ($bean->sweetness_level / 5) * 100 }}%' : 'width: 0%'"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Narrative Story -->
                    <div class="space-y-3 pt-2">
                        <h3 class="font-display text-2xl uppercase tracking-wider text-[#482820]">
                            Kisah Asal & Proses
                        </h3>
                        <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                            {{ $bean->description }}
                        </p>
                    </div>

                    <!-- Recommended Brewing Recipe with Extraction Parameters -->
                    @if($bean->brewing_recommendation)
                    <div class="bg-white border border-[#482820]/10 rounded-[28px] p-5 space-y-3 shadow-sm hover:border-[#FEBD02] transition-colors">
                        <div class="flex items-center justify-between text-xs font-mono text-[#482820] uppercase font-bold">
                            <div class="flex items-center gap-2">
                                <i data-lucide="coffee" class="w-4 h-4 text-[#FEBD02]"></i>
                                <span>Rekomendasi Seduh dari Barista</span>
                            </div>
                            <span class="text-[10px] text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full font-bold">Terkalibrasi 92°C</span>
                        </div>
                        <p class="text-xs text-[#482820] font-medium leading-relaxed font-sans">
                            {{ $bean->brewing_recommendation }}
                        </p>
                    </div>
                    @endif

                    <!-- Purchase Options & Direct WhatsApp Order Box (BrewLab 36px Rounded Container) -->
                    <div class="bg-white border border-[#482820]/10 rounded-[32px] sm:rounded-[36px] p-5 sm:p-8 space-y-5 sm:space-y-6 shadow-xl">
                        
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-[#482820]/10 pb-4">
                            <div class="w-full sm:w-auto">
                                <span class="text-xs font-mono text-[#78716c] uppercase block font-bold">Pilih Ukuran Kemasan:</span>
                                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2 sm:gap-3 mt-2">
                                    <button type="button" 
                                            @click="packSize = '200g'"
                                            :class="packSize === '200g' ? 'bg-[#482820] text-white' : 'bg-[#F8F5F1] text-[#482820] border border-[#482820]/10'"
                                            class="px-4 sm:px-5 py-2.5 rounded-full text-xs font-mono uppercase transition-all font-bold text-center">
                                        200 Gram ({{ $bean->formatted_price_200g }})
                                    </button>
                                    <button type="button" 
                                            @click="packSize = '1kg'"
                                            :class="packSize === '1kg' ? 'bg-[#482820] text-white' : 'bg-[#F8F5F1] text-[#482820] border border-[#482820]/10'"
                                            class="px-4 sm:px-5 py-2.5 rounded-full text-xs font-mono uppercase transition-all font-bold text-center">
                                        1 Kilogram ({{ $bean->formatted_price_1kg }})
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <span class="text-xs font-mono text-[#78716c] uppercase block mb-2 font-bold">Tingkat Gilingan (Grind Size):</span>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-2.5 text-xs font-mono">
                                <label class="rounded-2xl p-2.5 sm:p-3 flex items-center gap-2 cursor-pointer transition-all border"
                                       :class="grind === 'Biji Utuh (Whole Bean)' ? 'border-[#482820] bg-[#482820] text-white font-bold' : 'border-[#482820]/10 bg-[#F8F5F1] text-[#482820]'">
                                    <input type="radio" x-model="grind" value="Biji Utuh (Whole Bean)" class="hidden">
                                    <span class="text-[11px]">Biji Utuh</span>
                                </label>
                                <label class="rounded-2xl p-2.5 sm:p-3 flex items-center gap-2 cursor-pointer transition-all border"
                                       :class="grind === 'Giling Halus (Espresso)' ? 'border-[#482820] bg-[#482820] text-white font-bold' : 'border-[#482820]/10 bg-[#F8F5F1] text-[#482820]'">
                                    <input type="radio" x-model="grind" value="Giling Halus (Espresso)" class="hidden">
                                    <span class="text-[11px]">Halus (Espresso)</span>
                                </label>
                                <label class="rounded-2xl p-2.5 sm:p-3 flex items-center gap-2 cursor-pointer transition-all border"
                                       :class="grind === 'Giling Sedang (V60/Aeropress)' ? 'border-[#482820] bg-[#482820] text-white font-bold' : 'border-[#482820]/10 bg-[#F8F5F1] text-[#482820]'">
                                    <input type="radio" x-model="grind" value="Giling Sedang (V60/Aeropress)" class="hidden">
                                    <span class="text-[11px]">Sedang (Filter)</span>
                                </label>
                                <label class="rounded-2xl p-2.5 sm:p-3 flex items-center gap-2 cursor-pointer transition-all border"
                                       :class="grind === 'Giling Kasar (Cold Brew/Press)' ? 'border-[#482820] bg-[#482820] text-white font-bold' : 'border-[#482820]/10 bg-[#F8F5F1] text-[#482820]'">
                                    <input type="radio" x-model="grind" value="Giling Kasar (Cold Brew/Press)" class="hidden">
                                    <span class="text-[11px]">Kasar (Cold Brew)</span>
                                </label>
                            </div>
                        </div>

                        <div class="pt-4 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 border-t border-[#482820]/10">
                            <div>
                                <span class="text-[10px] font-mono text-[#78716c] uppercase block">Status Ketersediaan</span>
                                <span class="text-xs text-emerald-700 font-mono font-bold flex items-center gap-1.5 mt-0.5">
                                    <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                                    Tersedia • Batch Sangrai Terbaru
                                </span>
                            </div>
                            <a :href="orderUrl" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               data-magnetic
                               class="btn-brewlab btn-brewlab-yellow w-full sm:w-auto text-xs justify-between sm:justify-start">
                                <span class="btn-brewlab-pill flex-1 sm:flex-initial text-center">Pesan Langsung via WhatsApp</span>
                                <span class="btn-brewlab-circle">
                                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                                </span>
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Related Beans Section -->
    @if($relatedBeans->count() > 0)
    <section class="py-16 bg-[#FFFFFF] text-[#482820] border-t border-[#482820]/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-display text-3xl sm:text-4xl uppercase tracking-wider text-[#482820] mb-8">
                Pilihan Biji Kopi Lainnya
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                @foreach($relatedBeans as $rel)
                <div class="bg-[#F8F5F1] border border-[#482820]/10 rounded-[32px] p-6 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all">
                    <div>
                        <span class="text-[10px] font-mono uppercase text-[#482820] block mb-1 font-bold">{{ $rel->origin }}</span>
                        <h3 class="font-display text-2xl uppercase tracking-wider text-[#482820] mb-2">
                            <a href="{{ route('beans.detail', $rel->slug) }}" class="hover:text-[#FEBD02] transition-colors">
                                {{ $rel->name }}
                            </a>
                        </h3>
                        <p class="text-xs text-[#78716c] line-clamp-2 mb-4 font-sans">{{ $rel->tasting_notes }}</p>
                    </div>
                    <div class="pt-4 border-t border-[#482820]/10 flex items-center justify-between">
                        <span class="font-display text-xl text-[#482820]">{{ $rel->formatted_price_200g }}</span>
                        <a href="{{ route('beans.detail', $rel->slug) }}" class="btn-brewlab btn-brewlab-dark text-xs">
                            <span class="btn-brewlab-pill">Lihat Profil</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

</x-layouts.app>
