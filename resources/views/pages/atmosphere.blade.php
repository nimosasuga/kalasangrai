<x-layouts.app>
    <x-slot:title>Ruang & Suasana Kedai Roastery</x-slot:title>
    <x-slot:description>Dokumentasi visual ruang, meja kerja fokus, slow bar interaktif, dan mesin sangrai Kala Sangrai di Kebayoran Baru, Jakarta Selatan.</x-slot:description>

    <!-- Page Header (BrewLab Deep Espresso Header) -->
    <section class="bg-[#482820] text-[#F8F5F1] pt-14 pb-16 relative overflow-hidden">
        <!-- Ambient Warm Bokeh -->
        <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-[#FEBD02]/10 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl space-y-4">
                <div class="flex items-center gap-3">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs font-mono tracking-widest text-[#FEBD02] border border-white/10">
                        <span class="w-2 h-2 rounded-full bg-[#FEBD02] animate-pulse"></span>
                        Ruang & Suasana
                    </span>
                    <span class="font-script text-2xl text-[#FEBD02] rotate-[-4deg] hidden sm:inline">
                        Warm & Focus
                    </span>
                </div>
                <h1 class="font-display text-3xl sm:text-5xl lg:text-6xl uppercase tracking-wider text-[#FFFFFF] leading-tight sm:leading-[0.95]">
                    Suasana tenang untuk bekerja dan bertukar pikiran.
                </h1>
                <p class="text-sm text-[#D8C8B8] leading-relaxed font-sans">
                    Dirancang dengan material kayu jati alami, beton ekspos bersih, dan aksen logam tembaga. Cahaya alami masuk leluasa di siang hari, berganti lampu temaram hangat di waktu senja.
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

    <!-- Interactive Atmosphere Gallery with Lighting Mood Switcher (Distinct Atmosphere Page Effect) -->
    <section class="py-16 sm:py-20 transition-colors duration-700"
             :class="mood === 'day' ? 'bg-[#F8F5F1] text-[#482820]' : 'bg-[#24140f] text-[#F8F5F1]'"
             x-data="{
                mood: 'day',
                activeIdx: null,
                photos: [
                    {
                        title: 'Slow Bar & Meja Seduh Rendah',
                        category: 'Area Bar',
                        desc: 'Tempat barista menyeduh pour-over V60 dan berdiskusi mengenai profil rasa kopi bersama pengunjung.',
                        src: 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=1200&q=80'
                    },
                    {
                        title: 'Meja Komunal Kayu Solid',
                        category: 'Ruang Kerja',
                        desc: 'Meja panjang dari kayu jati solid dengan colokan listrik terintegrasi di setiap sisi untuk bekerja nyaman.',
                        src: 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=1200&q=80'
                    },
                    {
                        title: 'Ruang Mesin Sangrai Giesen W6A',
                        category: 'Roastery Lab',
                        desc: 'Area produksi kaca transparan tempat biji kopi mentah (green beans) disangrai segar setiap pekan.',
                        src: 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=1200&q=80'
                    },
                    {
                        title: 'Selasar Luar Rindang',
                        category: 'Outdoor Area',
                        desc: 'Area terbuka semi-teras di bawah naungan pohon rindang untuk menikmati angin sore dan kopi susu dingin.',
                        src: 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1200&q=80'
                    },
                    {
                        title: 'Koleksi Biji Kopi Retail',
                        category: 'Beans Display',
                        desc: 'Rak kayu kurasi biji kopi sangrai segar lengkap dengan kartu spesifikasi ketinggian dan varietal.',
                        src: 'https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=1200&q=80'
                    },
                    {
                        title: 'Sudut Baca & Dialog Tenang',
                        category: 'Quiet Corner',
                        desc: 'Sudut sofa empuk dengan pencahayaan baca terfokus untuk membaca buku atau berdiskusi personal.',
                        src: 'https://images.unsplash.com/photo-1521017432531-fbd92d768814?auto=format&fit=crop&w=1200&q=80'
                    }
                ],
                get activePhoto() {
                    return this.activeIdx !== null ? this.photos[this.activeIdx] : null;
                },
                nextPhoto() {
                    if (this.activeIdx !== null) {
                        this.activeIdx = (this.activeIdx + 1) % this.photos.length;
                    }
                },
                prevPhoto() {
                    if (this.activeIdx !== null) {
                        this.activeIdx = (this.activeIdx - 1 + this.photos.length) % this.photos.length;
                    }
                }
             }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Lighting Mood Control Toolbar -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-12 pb-6 border-b"
                 :class="mood === 'day' ? 'border-[#482820]/10' : 'border-white/10'">
                <div>
                    <span class="text-[10px] font-mono uppercase tracking-widest block font-bold"
                          :class="mood === 'day' ? 'text-[#78716c]' : 'text-[#FEBD02]'">
                        Simulasi Ambience Kedai
                    </span>
                    <h3 class="font-display text-xl sm:text-2xl uppercase tracking-wider"
                        :class="mood === 'day' ? 'text-[#482820]' : 'text-white'">
                        Pencahayaan & Suasana Ruang
                    </h3>
                </div>

                <div class="flex items-center gap-1.5 sm:gap-2 p-1 sm:p-1.5 rounded-full border self-start sm:self-auto"
                     :class="mood === 'day' ? 'bg-white border-[#482820]/15' : 'bg-black/30 border-white/20'">
                    <button type="button" 
                            @click="mood = 'day'"
                            :class="mood === 'day' ? 'bg-[#482820] text-white shadow-sm' : 'text-[#D8C8B8] hover:text-white'"
                            class="px-3.5 sm:px-4 py-2 sm:py-1.5 rounded-full text-xs font-mono font-bold transition-all flex items-center gap-1.5">
                        <span>☀️ Siang Alami</span>
                    </button>
                    <button type="button" 
                            @click="mood = 'evening'"
                            :class="mood === 'evening' ? 'bg-[#FEBD02] text-[#482820] shadow-sm font-bold' : 'text-[#78716c] hover:text-white'"
                            class="px-3.5 sm:px-4 py-2 sm:py-1.5 rounded-full text-xs font-mono font-bold transition-all flex items-center gap-1.5">
                        <span>🌙 Senja Temaram</span>
                    </button>
                </div>
            </div>

            <!-- Photos Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <template x-for="(photo, idx) in photos" :key="idx">
                    <div class="border rounded-[32px] sm:rounded-[36px] overflow-hidden group cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-300"
                         :class="mood === 'day' ? 'bg-white border-[#482820]/10 hover:border-[#FEBD02]' : 'bg-[#341b15] border-white/10 hover:border-[#FEBD02]'"
                         @click="activeIdx = idx"
                         data-tilt-3d>
                        
                        <div class="relative aspect-[4/3] bg-[#482820] overflow-hidden brew-photo-frame">
                            <img :src="photo.src" 
                                 :alt="photo.title"
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                 :class="mood === 'evening' ? 'brightness-90 contrast-105' : ''">
                            
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 bg-[#482820]/90 backdrop-blur-md px-2.5 sm:px-3 py-0.5 sm:py-1 rounded-full text-[9px] sm:text-[10px] font-mono uppercase tracking-widest text-[#FEBD02] font-semibold border border-white/20"
                                 x-text="photo.category">
                            </div>
                        </div>

                        <div class="p-5 sm:p-6 space-y-1.5 sm:space-y-2">
                            <h3 class="font-display text-xl sm:text-2xl uppercase tracking-wider transition-colors"
                                :class="mood === 'day' ? 'text-[#482820] group-hover:text-[#FEBD02]' : 'text-white group-hover:text-[#FEBD02]'"
                                x-text="photo.title"></h3>
                            <p class="text-xs leading-relaxed line-clamp-2 font-sans"
                               :class="mood === 'day' ? 'text-[#78716c]' : 'text-[#D8C8B8]'"
                               x-text="photo.desc"></p>
                        </div>

                    </div>
                </template>
            </div>

            <!-- Lightbox Modal with Next/Prev Controls -->
            <div x-show="activePhoto" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @keydown.escape.window="activeIdx = null"
                 @keydown.arrow-right.window="nextPhoto()"
                 @keydown.arrow-left.window="prevPhoto()"
                 class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-[#482820]/90 backdrop-blur-md"
                 style="display: none;">
                
                <div @click.away="activeIdx = null" 
                     class="max-w-4xl w-full max-h-[90vh] overflow-y-auto bg-[#1e100c] text-white rounded-[28px] sm:rounded-[36px] p-5 sm:p-8 space-y-4 relative shadow-2xl border border-white/20">
                    
                    <div class="flex items-center justify-between pb-2 border-b border-white/10">
                        <span class="text-[9px] sm:text-[10px] font-mono text-[#FEBD02] uppercase tracking-wider font-bold bg-white/10 px-2.5 sm:px-3 py-0.5 sm:py-1 rounded-full" x-text="activePhoto?.category"></span>
                        <div class="flex items-center gap-2 sm:gap-3">
                            <button @click="prevPhoto()" type="button" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#FEBD02] hover:text-[#482820] flex items-center justify-center font-bold">←</button>
                            <span class="text-xs font-mono text-[#D8C8B8]" x-text="(activeIdx + 1) + ' / ' + photos.length"></span>
                            <button @click="nextPhoto()" type="button" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#FEBD02] hover:text-[#482820] flex items-center justify-center font-bold">→</button>
                            <button @click="activeIdx = null" 
                                    type="button"
                                    class="text-white hover:text-[#FEBD02] ml-1 sm:ml-2 p-1 text-xs font-mono font-bold bg-white/10 hover:bg-white/20 rounded-full px-2.5 sm:px-3 py-1">
                                ✕
                            </button>
                        </div>
                    </div>

                    <div class="aspect-[16/10] bg-[#482820] rounded-[20px] sm:rounded-[24px] overflow-hidden border border-white/10">
                        <img :src="activePhoto?.src" :alt="activePhoto?.title" class="w-full h-full object-cover">
                    </div>

                    <div class="space-y-1 pt-2">
                        <h4 class="font-display text-2xl sm:text-3xl uppercase tracking-wider text-white" x-text="activePhoto?.title"></h4>
                        <p class="text-xs text-[#D8C8B8] font-sans" x-text="activePhoto?.desc"></p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Facility Features Strip -->
    <section class="py-16 sm:py-20 bg-[#FFFFFF] text-[#482820]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8 sm:mb-10 text-center max-w-xl mx-auto space-y-2">
                <span class="text-[10px] font-mono text-[#FEBD02] bg-[#482820] px-3 py-1 rounded-full uppercase tracking-wider font-bold">Kenyamanan Kedai</span>
                <h3 class="font-display text-2xl sm:text-3xl uppercase tracking-wider text-[#482820]">Fasilitas Pengunjung</h3>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-6 text-center font-sans">
                <div class="p-4 sm:p-6 rounded-[24px] sm:rounded-[28px] bg-[#F8F5F1] space-y-1.5 sm:space-y-2 border border-[#482820]/10" data-tilt-3d>
                    <i data-lucide="wifi" class="w-5 h-5 sm:w-6 sm:h-6 mx-auto text-[#482820]"></i>
                    <h4 class="font-display text-base sm:text-lg uppercase tracking-wider text-[#482820]">WiFi 150 Mbps</h4>
                    <p class="text-[10px] sm:text-[11px] text-[#78716c]">Koneksi serat optik stabil untuk panggilan video & berkas besar.</p>
                </div>
                <div class="p-4 sm:p-6 rounded-[24px] sm:rounded-[28px] bg-[#F8F5F1] space-y-1.5 sm:space-y-2 border border-[#482820]/10" data-tilt-3d>
                    <i data-lucide="zap" class="w-5 h-5 sm:w-6 sm:h-6 mx-auto text-[#482820]"></i>
                    <h4 class="font-display text-base sm:text-lg uppercase tracking-wider text-[#482820]">Power Outlets</h4>
                    <p class="text-[10px] sm:text-[11px] text-[#78716c]">Colokan listrik tersedia di setiap meja kerja komunal.</p>
                </div>
                <div class="p-4 sm:p-6 rounded-[24px] sm:rounded-[28px] bg-[#F8F5F1] space-y-1.5 sm:space-y-2 border border-[#482820]/10" data-tilt-3d>
                    <i data-lucide="volume-2" class="w-5 h-5 sm:w-6 sm:h-6 mx-auto text-[#482820]"></i>
                    <h4 class="font-display text-base sm:text-lg uppercase tracking-wider text-[#482820]">Lo-Fi Acoustic</h4>
                    <p class="text-[10px] sm:text-[11px] text-[#78716c]">Kurasi musik jazz instrumental dan akustik ramah telinga.</p>
                </div>
                <div class="p-4 sm:p-6 rounded-[24px] sm:rounded-[28px] bg-[#F8F5F1] space-y-1.5 sm:space-y-2 border border-[#482820]/10" data-tilt-3d>
                    <i data-lucide="sun" class="w-5 h-5 sm:w-6 sm:h-6 mx-auto text-[#482820]"></i>
                    <h4 class="font-display text-base sm:text-lg uppercase tracking-wider text-[#482820]">Area Outdoor</h4>
                    <p class="text-[10px] sm:text-[11px] text-[#78716c]">Selasar rindang untuk santai sore hari.</p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
