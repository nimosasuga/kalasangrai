<x-layouts.app>
    <x-slot:title>Lokasi Kedai, Jam Operasional & Kontak</x-slot:title>
    <x-slot:description>Alamat lengkap Kala Sangrai Coffee Roasters di Kebayoran Baru, Jakarta Selatan, jam operasional bar, nomor WhatsApp, dan formulir pesan.</x-slot:description>

    <!-- Page Header (BrewLab Deep Espresso Header with Live Bar Status Beacon) -->
    <section class="bg-[#482820] text-[#F8F5F1] pt-14 pb-16 relative overflow-hidden">
        <!-- Ambient Warm Glow -->
        <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-[#FEBD02]/10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                
                <div class="max-w-3xl space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-mono tracking-widest text-[#FEBD02] border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            Kedai Buka Hari Ini
                        </span>
                        <span class="font-script text-2xl text-[#FEBD02] rotate-[-4deg] hidden sm:inline">
                            Visit Our Bar
                        </span>
                    </div>
                    <h1 class="font-display text-3xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#FFFFFF] leading-tight sm:leading-[0.95]">
                        Lokasi, jam seduh, dan sapaan barista.
                    </h1>
                    <p class="text-sm text-[#D8C8B8] leading-relaxed font-sans max-w-2xl">
                        Kami berlokasi di kawasan tenang Melawai, Kebayoran Baru. Dekat dengan stasiun MRT Blok M BCA, mudah diakses kendaraan umum maupun roda empat.
                    </p>
                </div>

                <!-- Live Bar Beacon Card (Distinct Contact Page Effect) -->
                <div class="bg-white/5 border border-white/10 rounded-[32px] p-6 lg:p-7 backdrop-blur-md max-w-sm w-full space-y-3" data-tilt-3d>
                    <div class="flex items-center gap-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </span>
                        <span class="text-xs font-mono font-bold text-white uppercase tracking-wider">Barista Sedang Menyeduh</span>
                    </div>
                    <div class="pt-2 border-t border-white/10 text-xs font-mono space-y-1.5">
                        <div class="flex justify-between text-[#D8C8B8]">
                            <span>Hari Ini:</span>
                            <span class="text-white font-bold">07:00 — 22:00 WIB</span>
                        </div>
                        <div class="flex justify-between text-[#D8C8B8]">
                            <span>Slow Bar V60:</span>
                            <span class="text-[#FEBD02] font-bold">Siap Dilayani</span>
                        </div>
                    </div>
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

    <!-- Content Grid: Asymmetric 12-Col with Transit Navigator -->
    <section class="py-16 sm:py-20 bg-[#F8F5F1] text-[#482820]"
             x-data="{
                activeTransit: 'mrt',
                transitData: {
                    mrt: { title: 'Via MRT Blok M BCA', time: '8 Menit Jalan Kaki', step: 'Turun di Stasiun MRT Blok M BCA (Pintu B). Berjalan ke arah Jl. Melawai Raya, lalu belok ke Jl. Panglima Polim IX. Kedai berada di sisi kiri dengan plang kayu Kala Sangrai.' },
                    tj: { title: 'Via TransJakarta Koridor 1 / 13', time: '5 Menit Jalan Kaki', step: 'Turun di Halte Kejaksaan Agung atau Blok M Bus Terminal. Menyusuri jalur pedestrian rindang ke arah area kedai sekitar 400 meter.' },
                    car: { title: 'Kendaraan Roda 4 & Motor', time: 'Parkir Halaman Kedai', step: 'Tersedia slot parkir khusus untuk 8 mobil dan 20 motor di dalam halaman kedai lengkap dengan petugas keamanan.' }
                }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- Left: Location & Hours Info (5 Cols) -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <div class="bg-white border border-[#482820]/10 rounded-[36px] p-6 sm:p-8 space-y-6 shadow-xl" data-tilt-3d>
                        <div class="space-y-2 border-b border-[#482820]/10 pb-4">
                            <span class="text-[10px] font-mono uppercase tracking-widest text-[#482820] font-bold">Alamat Kedai & Roastery</span>
                            <h2 class="font-display text-2xl uppercase tracking-wider text-[#482820]">Kala Sangrai Kebayoran Baru</h2>
                            <p class="text-xs text-[#78716c] leading-relaxed font-sans">
                                {{ config('site.address') }}, {{ config('site.city') }}, {{ config('site.province') }} {{ config('site.postal_code') }}
                            </p>
                            <div class="pt-2">
                                <a href="{{ config('site.maps_url') }}" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center gap-1.5 text-xs uppercase tracking-wider text-[#482820] hover:text-[#FEBD02] transition-colors font-mono font-bold">
                                    <span>Buka di Google Maps Navigasi</span>
                                    <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </div>
                        </div>

                        <div class="space-y-3 border-b border-[#482820]/10 pb-4 text-xs font-sans">
                            <span class="text-[10px] font-mono uppercase tracking-widest text-[#482820] font-bold">Jam Operasional</span>
                            <div class="flex justify-between">
                                <span class="text-[#78716c]">Senin — Jumat</span>
                                <span class="text-[#482820] font-bold">{{ config('site.opening_hours.weekday') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-[#78716c]">Sabtu — Minggu</span>
                                <span class="text-[#482820] font-bold">{{ config('site.opening_hours.weekend') }}</span>
                            </div>
                        </div>

                        <div class="space-y-3 text-xs font-sans">
                            <span class="text-[10px] font-mono uppercase tracking-widest text-[#482820] font-bold">Kontak Cepat</span>
                            <div>
                                <span class="text-[#78716c] block text-[11px]">WhatsApp Bar & Reservasi:</span>
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('site.whatsapp')) }}" class="text-[#482820] font-bold hover:underline font-mono text-sm block">
                                    +{{ config('site.whatsapp') }}
                                </a>
                                @if(config('site.whatsapp_alt'))
                                    <span class="text-[#78716c] block text-[11px] mt-1.5">Hotline Alternatif / Roastery:</span>
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('site.whatsapp_alt')) }}" class="text-[#482820] font-bold hover:underline font-mono text-sm block">
                                        +{{ config('site.whatsapp_alt') }}
                                    </a>
                                @endif
                            </div>
                            <p>
                                <span class="text-[#78716c] block text-[11px]">Email Resmi:</span>
                                <a href="mailto:{{ config('site.email') }}" class="text-[#482820] hover:text-[#FEBD02] font-mono">
                                    {{ config('site.email') }}
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- Interactive Transportation Tabs -->
                    <div class="bg-white border border-[#482820]/10 rounded-[32px] p-5 sm:p-6 space-y-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-mono text-[#482820] uppercase block font-bold">Navigasi Akses Kedai</span>
                            <span class="text-[10px] font-mono text-[#FEBD02] bg-[#482820] px-2.5 py-0.5 rounded-full font-bold" x-text="transitData[activeTransit].time"></span>
                        </div>

                        <div class="flex items-center gap-1.5 sm:gap-2 text-xs font-mono overflow-x-auto no-scrollbar">
                            <button type="button" 
                                    @click="activeTransit = 'mrt'"
                                    :class="activeTransit === 'mrt' ? 'bg-[#482820] text-white font-bold' : 'bg-[#F8F5F1] text-[#482820]'"
                                    class="px-3 py-2 rounded-full transition-all flex-1 text-center shrink-0 min-h-[36px]">
                                MRT
                            </button>
                            <button type="button" 
                                    @click="activeTransit = 'tj'"
                                    :class="activeTransit === 'tj' ? 'bg-[#482820] text-white font-bold' : 'bg-[#F8F5F1] text-[#482820]'"
                                    class="px-3 py-2 rounded-full transition-all flex-1 text-center shrink-0 min-h-[36px]">
                                Busway
                            </button>
                            <button type="button" 
                                    @click="activeTransit = 'car'"
                                    :class="activeTransit === 'car' ? 'bg-[#482820] text-white font-bold' : 'bg-[#F8F5F1] text-[#482820]'"
                                    class="px-3 py-2 rounded-full transition-all flex-1 text-center shrink-0 min-h-[36px]">
                                Parkir
                            </button>
                        </div>

                        <p class="text-xs text-[#78716c] leading-relaxed font-sans bg-[#F8F5F1] p-3.5 rounded-2xl border border-[#482820]/5"
                           x-text="transitData[activeTransit].step">
                        </p>
                    </div>

                </div>

                <!-- Right: Guest Message Form (7 Cols) -->
                <div class="lg:col-span-7">
                    
                    <div class="bg-white border border-[#482820]/10 rounded-[32px] sm:rounded-[40px] p-5 sm:p-10 space-y-6 shadow-xl">
                        
                        <div class="border-b border-[#482820]/10 pb-4">
                            <h2 class="font-display text-2xl sm:text-3xl uppercase tracking-wider text-[#482820]">
                                Kirim Pesan atau Pertanyaan
                            </h2>
                            <p class="text-xs text-[#78716c] mt-1 font-sans">
                                Sampaikan pertanyaan mengenai biji kopi, reservasi meja kelompok, atau masukan untuk kedai kami.
                            </p>
                        </div>

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                            @csrf

                            <!-- Anti-bot Honeypot Field -->
                            <div class="hidden" aria-hidden="true">
                                <label for="roastery_check_hp">Jangan isi ini</label>
                                <input type="text" name="roastery_check_hp" id="roastery_check_hp" value="">
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Nama Lengkap <span class="text-[#FEBD02]">*</span>
                                    </label>
                                    <input type="text" name="name" required value="{{ old('name') }}"
                                           placeholder="Nama Anda"
                                           class="w-full bg-[#F8F5F1] border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">
                                    @error('name')
                                        <span class="text-[11px] text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Nomor Telepon / WhatsApp
                                    </label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                           placeholder="08123456789"
                                           class="w-full bg-[#F8F5F1] border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Alamat Email <span class="text-[#FEBD02]">*</span>
                                    </label>
                                    <input type="email" name="email" required value="{{ old('email') }}"
                                           placeholder="nama@email.com"
                                           class="w-full bg-[#F8F5F1] border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">
                                    @error('email')
                                        <span class="text-[11px] text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="space-y-1.5">
                                    <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                        Subjek Pertanyaan
                                    </label>
                                    <input type="text" name="subject" value="{{ old('subject') }}"
                                           placeholder="Contoh: Reservasi Meja Diskusi"
                                           class="w-full bg-[#F8F5F1] border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <label class="block text-xs uppercase tracking-wider text-[#78716c] font-mono font-bold">
                                    Pesan Anda <span class="text-[#FEBD02]">*</span>
                                </label>
                                <textarea name="message" rows="5" required
                                          placeholder="Tuliskan pesan, pertanyaan mengenai profil sangrai, atau detail reservasi Anda di sini..."
                                          class="w-full bg-[#F8F5F1] border border-[#482820]/15 focus:border-[#482820] text-[#482820] text-xs px-4 py-3 rounded-2xl focus:outline-none">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-[11px] text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="pt-2">
                                <button type="submit" 
                                        data-magnetic
                                        class="btn-brewlab btn-brewlab-yellow w-full text-xs">
                                    <span class="btn-brewlab-pill">Kirimkan Pesan ke Barista</span>
                                    <span class="btn-brewlab-circle">
                                        <i data-lucide="send" class="w-4 h-4"></i>
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
