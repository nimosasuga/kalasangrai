@php
    $phone = preg_replace('/[^0-9]/', '', config('site.whatsapp', '6285133331476'));
    $msg = rawurlencode(config('site.whatsapp_message', 'Halo Kala Sangrai, saya ingin berkunjung / tanya biji kopi / kemitraan wholesale.'));
    $waLink = "https://wa.me/{$phone}?text={$msg}";
@endphp

<div class="fixed bottom-6 right-6 z-40 flex items-center">
    <a href="{{ $waLink }}" 
       target="_blank" 
       rel="noopener noreferrer" 
       aria-label="WhatsApp Bar & Roastery"
       data-magnetic
       class="group inline-flex items-center bg-[#482820] text-[#F8F5F1] p-1.5 pl-4 sm:pl-5 rounded-full border border-[#FEBD02]/40 shadow-2xl hover:border-[#FEBD02] hover:bg-[#341b15] transition-all duration-300">
        <span class="text-xs uppercase tracking-wider font-semibold mr-3 hidden sm:inline text-[#F8F5F1] group-hover:text-[#FEBD02] transition-colors">
            WhatsApp Bar
        </span>
        <span class="w-10 h-10 rounded-full bg-[#FEBD02] text-[#482820] flex items-center justify-center group-hover:scale-110 group-hover:rotate-12 transition-transform duration-300 shadow-md">
            <i data-lucide="message-circle" class="w-5 h-5 fill-current"></i>
        </span>
    </a>
</div>
