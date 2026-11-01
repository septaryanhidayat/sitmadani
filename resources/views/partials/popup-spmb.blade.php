@if(!empty($popupSettings) && ($popupSettings['active'] ?? '1') == '1' && !empty($popupSettings['image']))
{{-- ========================================================
     HOMEPAGE PROMO POPUP BANNER MODAL (YAYASAN & UNIT)
     ======================================================== --}}
<div id="madaniHomePopupModal" class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-4 bg-black/80 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300">
    <div id="madaniHomePopupCard" class="relative bg-white rounded-3xl shadow-2xl overflow-hidden max-w-sm sm:max-w-md w-full transform scale-95 transition-transform duration-300 border border-white/20">
        <button id="closeMadaniHomePopupBtn" type="button" aria-label="Tutup Banner Promosi" class="absolute top-3 right-3 z-10 w-9 h-9 bg-black/70 hover:bg-black text-white rounded-full flex items-center justify-center backdrop-blur-md transition shadow-lg cursor-pointer">
            <i class="fa-solid fa-xmark text-base"></i>
        </button>

        <a href="{{ $popupSettings['link'] ?? '/ppdb' }}" target="{{ $popupSettings['target'] ?? '_self' }}" class="block overflow-hidden group">
            <img src="{{ asset($popupSettings['image']) }}?v={{ $popupSettings['version'] ?? '1' }}" 
                 alt="{{ $popupSettings['title'] ?? 'SPMB SIT Madani' }}" 
                 class="w-full h-auto max-h-[75vh] object-contain group-hover:scale-102 transition duration-500" 
                 onerror="this.onerror=null; this.src='/uploads/flyer-spmb-sit-madani.webp'">
        </a>

        <div class="p-3.5 sm:p-4 bg-gradient-to-r from-indigo-950 via-slate-900 to-blue-950 text-white flex items-center justify-between gap-3">
            <div class="min-w-0">
                <p class="text-[11px] text-amber-400 font-bold uppercase tracking-wider truncate">
                    {{ $popupSettings['title'] ?? 'SPMB SIT Madani' }}
                </p>
                <p class="text-xs text-indigo-100 font-medium truncate">
                    {{ $popupSettings['subtitle'] ?? 'Tahun Pelajaran 2026/2027 • Segera Daftarkan Putra-Putri Anda' }}
                </p>
            </div>
            <a href="{{ $popupSettings['link'] ?? '/ppdb' }}" target="{{ $popupSettings['target'] ?? '_self' }}" class="shrink-0 bg-gradient-to-r from-amber-400 to-amber-500 hover:from-amber-300 hover:to-yellow-400 text-slate-950 font-black text-xs px-4 py-2.5 rounded-xl shadow-md transition flex items-center space-x-1.5">
                <span>{{ $popupSettings['button_text'] ?? 'Daftar' }}</span>
                <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('madaniHomePopupModal');
        const card = document.getElementById('madaniHomePopupCard');
        const closeBtn = document.getElementById('closeMadaniHomePopupBtn');
        const storageKey = 'madani_popup_' + {{ json_encode($popupSettings['version'] ?? 'v1') }};

        if (!modal) return;

        // Auto display if not closed in this session for this specific banner version
        if (!sessionStorage.getItem(storageKey)) {
            setTimeout(function () {
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modal.classList.add('opacity-100');
                if (card) {
                    card.classList.remove('scale-95');
                    card.classList.add('scale-100');
                }
            }, 600);
        }

        function closePopup() {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.classList.remove('opacity-100');
            if (card) {
                card.classList.add('scale-95');
                card.classList.remove('scale-100');
            }
            sessionStorage.setItem(storageKey, '1');
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', closePopup);
        }

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                closePopup();
            }
        });
    });
</script>
@endif
