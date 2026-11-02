<!-- Top Crema Wave Divider transitioning from light section into Espresso Footer -->
<div class="w-full overflow-hidden leading-none bg-transparent">
    <svg viewBox="0 0 1440 134" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-12 sm:h-20 lg:h-28 text-[#482820] preserve-3d block" preserveAspectRatio="none">
        <path d="M0,64 C320,130 640,0 960,64 C1200,112 1360,40 1440,24 L1440,134 L0,134 Z" fill="currentColor"></path>
    </svg>
</div>

<footer class="bg-[#482820] text-[#F8F5F1] relative z-10 pt-8 pb-14 border-t-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top Brand & Newsletter Banner -->
        <div class="pb-16 border-b border-white/10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7 space-y-3">
                <div class="flex items-center gap-3">
                    <span class="font-display text-4xl sm:text-5xl uppercase tracking-wider text-[#FFFFFF]">
                        {{ config('site.name') }}
                    </span>
                    <span class="font-script text-3xl sm:text-4xl text-[#FEBD02] rotate-[-6deg] inline-block">
                        Artisan Roastery
                    </span>
                </div>
                <p class="text-sm text-[#D8C8B8] max-w-xl font-sans leading-relaxed">
                    {{ config('site.description') }} Biji kopi nusantara kualitas spesialisasi disangrai segar setiap minggu di Jakarta Selatan.
                </p>
            </div>

            <!-- Fast Wholesale Contact Split-Pill -->
            <div class="lg:col-span-5 flex flex-col sm:flex-row items-start sm:items-center justify-start lg:justify-end gap-4">
                <a href="{{ route('wholesale') }}" 
                   data-magnetic
                   class="btn-brewlab btn-brewlab-yellow">
                    <span class="btn-brewlab-pill">Kemitraan Pasokan B2B</span>
                    <span class="btn-brewlab-circle">
                        <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </span>
                </a>
            </div>
        </div>

        <!-- 4-Column Main Footer Links -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-10 pt-16">
            
            <!-- Col 1: Identity & Roaster Spec -->
            <div class="space-y-4">
                <span class="font-display text-xl uppercase tracking-wider text-[#FEBD02] block">
                    Standar Sangrai
                </span>
                <p class="text-xs leading-relaxed text-[#D8C8B8]">
                    Kami menggunakan profil kurva panas terukur untuk mempertahankan kejernihan asam buah dan aroma alami terroir tanpa cacat gosong.
                </p>
                <div class="pt-2 border-t border-white/10 space-y-1">
                    <span class="text-[10px] uppercase tracking-widest text-[#FEBD02] font-mono block">Mesin Sangrai Utama</span>
                    <span class="text-xs text-[#FFFFFF] font-medium font-sans">{{ config('site.roaster_machine') }}</span>
                </div>
            </div>

            <!-- Col 2: Kurasi Biji Kopi -->
            <div>
                <h4 class="font-display text-xl uppercase tracking-wider text-[#FEBD02] mb-5">Single Origin Pilihan</h4>
                <ul class="space-y-3 text-xs tracking-wide font-sans">
                    <li><a href="{{ route('beans', ['filter' => 'natural']) }}" class="text-[#D8C8B8] hover:text-[#FEBD02] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#FEBD02]"></span> Aceh Gayo Anaerobic Natural</a></li>
                    <li><a href="{{ route('beans', ['filter' => 'washed']) }}" class="text-[#D8C8B8] hover:text-[#FEBD02] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#FEBD02]"></span> Toraja Sapan Fully Washed</a></li>
                    <li><a href="{{ route('beans', ['filter' => 'filter']) }}" class="text-[#D8C8B8] hover:text-[#FEBD02] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#FEBD02]"></span> Kerinci Gunung Tujuh Honey</a></li>
                    <li><a href="{{ route('beans', ['filter' => 'espresso']) }}" class="text-[#D8C8B8] hover:text-[#FEBD02] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#FEBD02]"></span> Bali Kintamani Ulian Natural</a></li>
                    <li><a href="{{ route('beans') }}" class="text-[#D8C8B8] hover:text-[#FEBD02] transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#FEBD02]"></span> Senja Wijaya Signature Blend</a></li>
                </ul>
            </div>

            <!-- Col 3: Waktu Operasional -->
            <div>
                <h4 class="font-display text-xl uppercase tracking-wider text-[#FEBD02] mb-5">Jam Bar & Roastery</h4>
                <div class="space-y-4 text-xs font-sans">
                    <div class="bg-white/5 p-3 rounded-2xl border border-white/10">
                        <span class="text-[10px] text-[#D8C8B8] uppercase block tracking-wider font-mono">Senin — Jumat</span>
                        <span class="text-[#FFFFFF] font-bold text-sm block mt-0.5">{{ config('site.opening_hours.weekday') }}</span>
                    </div>
                    <div class="bg-white/5 p-3 rounded-2xl border border-white/10">
                        <span class="text-[10px] text-[#D8C8B8] uppercase block tracking-wider font-mono">Sabtu — Minggu & Libur</span>
                        <span class="text-[#FEBD02] font-bold text-sm block mt-0.5">{{ config('site.opening_hours.weekend') }}</span>
                    </div>
                    <p class="text-[11px] text-[#D8C8B8]">
                        Slow bar manual drip melayani hingga 30 menit sebelum kedai tutup.
                    </p>
                </div>
            </div>

            <!-- Col 4: Alamat & Kontak -->
            <div>
                <h4 class="font-display text-xl uppercase tracking-wider text-[#FEBD02] mb-5">Lokasi & Kontak</h4>
                <div class="space-y-3.5 text-xs font-sans">
                    <p class="text-[#F8F5F1] leading-relaxed">
                        {{ config('site.address') }}, {{ config('site.city') }}, {{ config('site.province') }} {{ config('site.postal_code') }}
                    </p>
                    <p>
                        <span class="text-[#D8C8B8] block text-[10px] uppercase font-mono">WhatsApp Bar & Biji Kopi:</span>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('site.whatsapp')) }}" class="text-[#FEBD02] font-bold hover:underline font-mono text-sm whitespace-nowrap inline-block">
                            +{{ config('site.whatsapp') }}
                        </a>
                        @if(config('site.whatsapp_alt'))
                            <span class="text-[#a89888] text-[11px] mx-1">/</span>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('site.whatsapp_alt')) }}" class="text-[#FEBD02] font-bold hover:underline font-mono text-sm whitespace-nowrap inline-block">
                                +{{ config('site.whatsapp_alt') }}
                            </a>
                        @endif
                    </p>
                    <p>
                        <span class="text-[#D8C8B8] block text-[10px] uppercase font-mono">Kemitraan Wholesale:</span>
                        <a href="mailto:{{ config('site.wholesale_email') }}" class="text-[#F8F5F1] hover:text-[#FEBD02] transition-colors">
                            {{ config('site.wholesale_email') }}
                        </a>
                    </p>
                    <div class="pt-2">
                        <a href="{{ config('site.maps_url') }}" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="inline-flex items-center gap-1.5 text-xs tracking-wider uppercase text-[#FEBD02] hover:underline font-medium">
                            <span>Petunjuk Arah Google Maps</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Hairline Divider & Bottom Copyright -->
        <div class="mt-16 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between text-xs tracking-wider text-[#D8C8B8] gap-4 font-sans">
            <p>© {{ date('Y') }} {{ config('site.name') }}. Hak cipta dilindungi undang-undang.</p>
            <p class="uppercase tracking-widest text-[#FEBD02] font-mono text-[11px]">
                EXPROSA Website Starter — Sektor 04 (Coffee Shop & Roastery)
            </p>
        </div>
    </div>
</footer>
