<x-layouts.app>
    <x-slot:title>Wholesale B2B & Pasokan Biji Kopi Sangrai</x-slot:title>
    <x-slot:description>Kemitraan pasokan biji kopi roasted beans berkualitas konsisten, peracikan signature blend kustom, dan pelatihan barista untuk kafe, resto, dan kantor.</x-slot:description>

    <!-- Page Header (BrewLab Deep Espresso Header) -->
    <section class="bg-[#482820] text-[#F8F5F1] pt-14 pb-16 relative overflow-hidden">
        <!-- Ambient Glow -->
        <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-[#FEBD02]/10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl space-y-4">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-mono tracking-widest text-[#FEBD02] border border-white/10">
                        <span class="w-2 h-2 rounded-full bg-[#FEBD02] animate-pulse"></span>
                        Wholesale B2B
                    </span>
                    <span class="font-script text-2xl text-[#FEBD02] rotate-[-4deg] hidden sm:inline">
                        Commercial Roasting
                    </span>
                </div>
                <h1 class="font-display text-3xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#FFFFFF] leading-tight sm:leading-[0.95]">
                    Pasokan roasted beans konsisten untuk bisnis Anda.
                </h1>
                <p class="text-sm text-[#D8C8B8] leading-relaxed font-sans">
                    Kami mendukung operasional coffee shop, restoran, hotel, dan kantor di seluruh Indonesia melalui pasokan biji kopi sangrai teratur, pengembangan resep blend eksklusif, hingga konsultasi kalibrasi mesin komersial.
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

    <!-- 4 Wholesale Core Pillars -->
    <section class="py-16 sm:py-20 bg-[#F8F5F1] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8" data-reveal="stagger">
                
                <div class="bg-white border border-[#482820]/10 rounded-[28px] sm:rounded-[32px] p-5 sm:p-6 space-y-3 shadow-sm hover:shadow-xl transition-all duration-300" data-tilt-3d>
                    <span class="font-display text-xl sm:text-2xl text-[#482820] block">01 / PASOKAN RUTIN</span>
                    <h3 class="font-display text-lg sm:text-xl uppercase tracking-wider text-[#482820]">Mulai 5 kg per Pesanan</h3>
                    <p class="text-xs text-[#78716c] leading-relaxed font-sans">
                        Pengiriman terjadwal mingguan atau dua mingguan dengan jaminan kesegaran sangrai (*fresh roast guarantee*) maksimal 5 hari setelah proses roasting.
                    </p>
                </div>

                <div class="bg-white border border-[#482820]/10 rounded-[28px] sm:rounded-[32px] p-5 sm:p-6 space-y-3 shadow-sm hover:shadow-xl transition-all duration-300" data-tilt-3d>
                    <span class="font-display text-xl sm:text-2xl text-[#482820] block">02 / CUSTOM BLEND</span>
                    <h3 class="font-display text-lg sm:text-xl uppercase tracking-wider text-[#482820]">Peracikan Signature Blend</h3>
                    <p class="text-xs text-[#78716c] leading-relaxed font-sans">
                        Kami membantu meracik proporsi arabika & robusta specialty yang sesuai dengan profil target pelanggan Anda dan karakter susu yang digunakan di kafe Anda.
                    </p>
                </div>

                <div class="bg-white border border-[#482820]/10 rounded-[28px] sm:rounded-[32px] p-5 sm:p-6 space-y-3 shadow-sm hover:shadow-xl transition-all duration-300" data-tilt-3d>
                    <span class="font-display text-xl sm:text-2xl text-[#482820] block">03 / KALIBRASI MESIN</span>
                    <h3 class="font-display text-lg sm:text-xl uppercase tracking-wider text-[#482820]">Audit Mesin & Grinder</h3>
                    <p class="text-xs text-[#78716c] leading-relaxed font-sans">
                        Konsultasi pemilihan mesin komersial (La Marzocco, Nuova Simonelli, Slayer, Mahlkönig) dan penyesuaian tekanan pompa serta suhu boiler.
                    </p>
                </div>

                <div class="bg-white border border-[#482820]/10 rounded-[28px] sm:rounded-[32px] p-5 sm:p-6 space-y-3 shadow-sm hover:shadow-xl transition-all duration-300" data-tilt-3d>
                    <span class="font-display text-xl sm:text-2xl text-[#482820] block">04 / PELATIHAN BARISTA</span>
                    <h3 class="font-display text-lg sm:text-xl uppercase tracking-wider text-[#482820]">Standardisasi Seduhan</h3>
                    <p class="text-xs text-[#78716c] leading-relaxed font-sans">
                        Sesi cupping dan pelatihan teknik dial-in espresso untuk tim barista Anda agar konsistensi rasa tetap terjaga di setiap shift kerja.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Wholesale Pricing Tiers & Form Section with Interactive B2B Calculator (Distinct Wholesale Page Effect) -->
    <section class="py-16 sm:py-20 bg-[#FFFFFF] text-[#482820]"
             x-data="{
                volumeKg: 30,
                get discountPct() {
                    if (this.volumeKg >= 50) return 30;
                    if (this.volumeKg >= 20) return 20;
                    return 12;
                },
                get tierName() {
                    if (this.volumeKg >= 50) return 'Tier 3: Multi-Outlet / Roastery Partner';
                    if (this.volumeKg >= 20) return 'Tier 2: Established Cafe';
                    return 'Tier 1: Starter Cafe';
                },
                get estSavings() {
                    return this.volumeKg * 60000;
                },
                get freePerks() {
                    if (this.volumeKg >= 50) return 'Free Cupping Session + Dedicated Roast Day + Dial-in Barista On-site';
                    if (this.volumeKg >= 20) return 'Free Cupping Session + 4x 200g Sample Beans + Remote Dial-in Support';
                    return 'Free 2x 200g Sample Beans + Roastery Tasting Flight';
                }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left: Volume Tiers & Interactive Slider (5 Cols) -->
                <div class="lg:col-span-5 space-y-8">
                    
                    <div class="space-y-3">
                        <span class="font-script text-2xl sm:text-3xl text-[#482820] block -rotate-2">
                            Skema Volume & Diskon
                        </span>
                        <h2 class="font-display text-2xl sm:text-4xl lg:text-5xl uppercase tracking-wider text-[#482820] leading-tight sm:leading-[0.95]">
                            Kalkulator pasokan berjenjang untuk mitra.
                        </h2>
                        <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                            Geser volume kebutuhan bulanan Anda untuk melihat estimasi diskon dan benefit kemitraan yang didapatkan secara otomatis.
                        </p>
                    </div>

                    <!-- Interactive Slider Box -->
                    <div class="bg-[#482820] text-white p-5 sm:p-7 rounded-[32px] sm:rounded-[36px] space-y-4 sm:space-y-5 shadow-xl border border-[#482820]/15">
                        <div class="flex items-center justify-between border-b border-white/10 pb-4">
                            <div>
                                <span class="text-[10px] font-mono text-[#FEBD02] uppercase tracking-wider font-bold">Kapasitas Bulanan:</span>
                                <h3 class="font-display text-2xl sm:text-3xl text-white" x-text="volumeKg + ' KG / BULAN'"></h3>
                            </div>
                            <div class="text-right">
                                <span class="text-[10px] font-mono text-[#D8C8B8] uppercase">Estimasi Diskon</span>
                                <span class="font-display text-2xl sm:text-3xl text-[#FEBD02] block leading-none" x-text="discountPct + '%'"></span>
                            </div>
                        </div>

                        <!-- Range Slider Input -->
                        <div class="space-y-2">
                            <input type="range" min="5" max="100" step="5" x-model="volumeKg"
                                   class="w-full h-2 bg-white/20 rounded-lg appearance-none cursor-pointer accent-[#FEBD02]">
                            <div class="flex justify-between text-[10px] font-mono text-[#D8C8B8]">
                                <span>5 kg (Starter)</span>
                                <span>50 kg (Multi-Outlet)</span>
                                <span>100 kg+</span>
                            </div>
                        </div>

                        <!-- Active Perks Preview -->
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-4 space-y-2 text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#FEBD02]"></span>
                                <span class="font-mono text-[#FEBD02] uppercase font-bold" x-text="tierName"></span>
                            </div>
                            <p class="text-[#D8C8B8] font-sans text-[11px] leading-relaxed" x-text="freePerks"></p>
                        </div>
                    </div>

                    <!-- Tier Cards with Rounded Containers -->
                    <div class="space-y-3 text-xs font-mono">
                        <div class="border p-4 rounded-[24px] flex items-center justify-between shadow-sm cursor-pointer transition-all"
                             :class="volumeKg < 20 ? 'bg-[#FEBD02]/15 border-[#FEBD02] font-bold' : 'bg-[#F8F5F1] border-[#482820]/10'"
                             @click="volumeKg = 15">
                            <div>
                                <span class="text-[#482820] block font-bold text-sm">TIER 1: STARTER</span>
                                <span class="text-[#78716c] text-[11px]">Volume 5 — 19 kg / bulan</span>
                            </div>
                            <span class="text-[#482820] text-xs font-bold bg-white px-3 py-1 rounded-full border border-[#482820]/10">Diskon 12%</span>
                        </div>

                        <div class="border p-4 rounded-[24px] flex items-center justify-between shadow-sm cursor-pointer transition-all"
                             :class="volumeKg >= 20 && volumeKg < 50 ? 'bg-[#FEBD02]/15 border-[#FEBD02] font-bold' : 'bg-[#F8F5F1] border-[#482820]/10'"
                             @click="volumeKg = 30">
                            <div>
                                <span class="text-[#482820] block font-bold text-sm">TIER 2: ESTABLISHED CAFE</span>
                                <span class="text-[#78716c] text-[11px]">Volume 20 — 49 kg / bulan</span>
                            </div>
                            <span class="text-[#482820] text-xs font-bold bg-[#FEBD02] px-3 py-1 rounded-full">Diskon 20%</span>
                        </div>

                        <div class="border p-4 rounded-[24px] flex items-center justify-between shadow-sm cursor-pointer transition-all"
                             :class="volumeKg >= 50 ? 'bg-[#FEBD02]/15 border-[#FEBD02] font-bold' : 'bg-[#F8F5F1] border-[#482820]/10'"
                             @click="volumeKg = 60">
                            <div>
                                <span class="text-[#482820] block font-bold text-sm">TIER 3: MULTI-OUTLET / OFFICE</span>
                                <span class="text-[#78716c] text-[11px]">Volume ≥ 50 kg / bulan</span>
                            </div>
                            <span class="text-[#482820] text-xs font-bold bg-white px-3 py-1 rounded-full border border-[#482820]/10">Diskon 30%</span>
                        </div>
                    </div>

                    <!-- Direct WhatsApp B2B Link -->
                    <div class="pt-2 border-t border-[#482820]/10">
                        <p class="text-xs text-[#78716c] mb-3 font-sans">Butuh respons cepat atau jadwal cupping langsung?</p>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('site.whatsapp')) }}?text={{ urlencode('Halo Tim Wholesale Kala Sangrai, saya ingin konsultasi kebutuhan pasokan biji kopi roasted beans.') }}" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="btn-brewlab btn-brewlab-yellow text-xs">
                            <span class="btn-brewlab-pill">Chat WhatsApp Wholesale</span>
                            <span class="btn-brewlab-circle">
                                <i data-lucide="message-circle" class="w-4 h-4"></i>
                            </span>
                        </a>
                    </div>

                </div>

                <!-- Right: Inquiry Form (7 Cols) -->
                <div class="lg:col-span-7">
                    
                    <div class="bg-[#F8F5F1] border border-[#482820]/10 rounded-[32px] sm:rounded-[40px] p-5 sm:p-10 space-y-6 shadow-xl">
                        
                        <div class="border-b border-[#482820]/10 pb-4">
                            <h3 class="font-display text-2xl sm:text-3xl uppercase tracking-wider text-[#482820]">
                                Formulir Permintaan Sampel & Penawaran B2B
                            </h3>
                            <p class="text-xs text-[#78716c] mt-1 font-sans">
                                Isi formulir di bawah ini. Tim roaster kami akan menghubungi Anda dalam 1x24 jam kerja.
                            </p>
                        </div>

                        <form action="{{ route('wholesale.submit') }}" method="POST" class="space-y-4">
                            @csrf

                            <!-- Anti-bot Honeypot Field -->
                            <div class="hidden" aria-hidden="true">
                                <label for="roastery_check_hp">Jangan isi ini</label>
                                <input type="text" name="roastery_check_hp" id="roastery_check_hp" value="">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Nama Lengkap PIC <span class="text-[#FEBD02]">*</span>
                                    </label>
                                    <input type="text" name="contact_name" required value="{{ old('contact_name') }}"
                                           placeholder="Nama Penanggung Jawab"
                                           class="w-full bg-white border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">
                                    @error('contact_name')
                                        <span class="text-[11px] text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Nama Usaha / Perusahaan <span class="text-[#FEBD02]">*</span>
                                    </label>
                                    <input type="text" name="company_name" required value="{{ old('company_name') }}"
                                           placeholder="Contoh: Kopi Senja Abadi"
                                           class="w-full bg-white border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">
                                    @error('company_name')
                                        <span class="text-[11px] text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Nomor Telepon / WhatsApp <span class="text-[#FEBD02]">*</span>
                                    </label>
                                    <input type="text" name="phone" required value="{{ old('phone') }}"
                                           placeholder="08123456789"
                                           class="w-full bg-white border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">
                                    @error('phone')
                                        <span class="text-[11px] text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Alamat Email PIC <span class="text-[#FEBD02]">*</span>
                                    </label>
                                    <input type="email" name="email" required value="{{ old('email') }}"
                                           placeholder="pic@usaha.com"
                                           class="w-full bg-white border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">
                                    @error('email')
                                        <span class="text-[11px] text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Tipe Usaha <span class="text-[#FEBD02]">*</span>
                                    </label>
                                    <select name="business_type" required
                                            class="w-full bg-white border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none font-mono">
                                        <option value="coffee_shop">Coffee Shop / Kedai Kopi</option>
                                        <option value="restaurant">Restoran & Cafe</option>
                                        <option value="hotel">Hotel & Hospitality</option>
                                        <option value="office">Penyedia Kopi Kantor</option>
                                        <option value="reseller">Reseller / Retail</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>

                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Perkiraan Volume Bulanan <span class="text-[#FEBD02]">*</span>
                                    </label>
                                    <select name="monthly_volume" required
                                            class="w-full bg-white border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none font-mono">
                                        <option value="5-20kg">5 — 20 Kilogram / Bulan (Tier 1)</option>
                                        <option value="21-50kg">21 — 50 Kilogram / Bulan (Tier 2)</option>
                                        <option value="51-100kg">51 — 100 Kilogram / Bulan (Tier 3)</option>
                                        <option value=">100kg">> 100 Kilogram / Bulan (Custom Contract)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                    Catatan / Preferensi Profil Rasa
                                </label>
                                <textarea name="message" rows="4" 
                                          placeholder="Ceritakan tentang profil rasa kopi yang Anda cari (misal: bold untuk es kopi susu aren, atau floral fruity untuk manual brew V60)..."
                                          class="w-full bg-white border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none font-sans">{{ old('message') }}</textarea>
                            </div>

                            <div class="pt-2">
                                <button type="submit" 
                                        data-magnetic
                                        class="btn-brewlab btn-brewlab-dark w-full sm:w-auto text-xs">
                                    <span class="btn-brewlab-pill">Kirim Permintaan Sampel Wholesale</span>
                                    <span class="btn-brewlab-circle">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </span>
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </section>

</x-layouts.app>
