<x-layouts.app>
    <x-slot:title>Permintaan Wholesale Terkirim</x-slot:title>
    <x-slot:description>Konfirmasi pengiriman formulir kemitraan wholesale dan pasokan biji kopi roasted beans Kala Sangrai.</x-slot:description>

    <section class="py-20 lg:py-28 bg-[#F8F5F1] min-h-[85vh] flex items-center text-[#482820]">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 w-full">
            
            <div class="bg-white border border-[#482820]/10 rounded-[40px] p-8 sm:p-12 space-y-6 shadow-2xl relative"
                 data-tilt-3d>
                
                <div class="space-y-3 border-b border-[#482820]/10 pb-6 text-center sm:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#FEBD02]/20 text-xs font-mono text-[#482820] font-bold">
                        <i data-lucide="check-circle" class="w-4 h-4 text-[#482820]"></i>
                        <span>Permintaan Telah Diterima</span>
                    </div>
                    <h1 class="font-display text-4xl sm:text-5xl uppercase tracking-wider text-[#482820] leading-[0.95]">
                        Terima kasih, {{ $inquiry->contact_name }}.
                    </h1>
                    <p class="text-xs sm:text-sm text-[#78716c] leading-relaxed font-sans">
                        Data kemitraan untuk <span class="text-[#482820] font-bold">{{ $inquiry->company_name }}</span> telah tercatat di sistem kami dengan nomor referensi:
                    </p>
                    <div class="pt-2">
                        <span class="inline-block bg-[#F8F5F1] border border-[#482820]/10 px-5 py-2.5 rounded-full font-mono text-sm text-[#482820] font-bold">
                            INQ-WS-{{ str_pad($inquiry->id, 5, '0', STR_PAD_LEFT) }}
                        </span>
                    </div>
                </div>

                <div class="space-y-2.5 text-xs text-[#78716c] bg-[#F8F5F1] p-5 rounded-[24px] border border-[#482820]/10 font-sans">
                    <div class="flex justify-between">
                        <span>Jenis Bisnis:</span>
                        <span class="text-[#482820] font-bold">{{ $inquiry->business_type }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Estimasi Kebutuhan:</span>
                        <span class="text-[#482820] font-bold">{{ $inquiry->monthly_volume }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Nomor Kontak:</span>
                        <span class="text-[#482820] font-bold">{{ $inquiry->phone }}</span>
                    </div>
                </div>

                <p class="text-xs text-[#78716c] leading-relaxed font-sans">
                    Untuk mempercepat proses pengiriman sampel atau menjadwalkan sesi cupping privat di roastery kami, Anda dapat langsung mengonfirmasi via WhatsApp:
                </p>

                <div class="pt-2 flex flex-col sm:flex-row gap-4">
                    <a href="{{ $whatsappUrl }}" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       data-magnetic
                       class="btn-brewlab btn-brewlab-yellow flex-1 text-xs">
                        <span class="btn-brewlab-pill">Konfirmasi ke WhatsApp Roaster</span>
                        <span class="btn-brewlab-circle">
                            <i data-lucide="message-circle" class="w-4 h-4"></i>
                        </span>
                    </a>
                    <a href="{{ route('home') }}" 
                       class="btn-brewlab btn-brewlab-white text-xs">
                        <span class="btn-brewlab-pill">Kembali ke Beranda</span>
                        <span class="btn-brewlab-circle">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                        </span>
                    </a>
                </div>

            </div>

        </div>
    </section>

</x-layouts.app>
