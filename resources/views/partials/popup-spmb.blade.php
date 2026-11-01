@if(!empty($popupSettings) && ($popupSettings['active'] ?? '1') == '1' && !empty($popupSettings['image']))
{{-- ========================================================
     HOMEPAGE PROMO POPUP BANNER MODAL (YAYASAN & UNIT)
     ======================================================== --}}
<div id="madaniHomePopupModal" class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-4 bg-black/80 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300">
    <div id="madaniHomePopupCard" class="relative bg-white rounded-3xl shadow-2xl overflow-hidden max-w-sm sm:max-w-md w-full transform scale-95 transition-transform duration-300 border border-white/20">
        {{-- Close Button --}}
        <button id="closeMadaniHomePopupBtn" type="button" aria-label="Tutup Banner Promosi" class="absolute top-3 right-3 z-10 w-9 h-9 bg-black/70 hover:bg-black text-white rounded-full flex items-center justify-center backdrop-blur-md transition shadow-lg cursor-pointer">
            <i class="fa-solid fa-xmark text-base"></i>
        </button>

        {{-- Poster Image Link --}}
        <a href="{{ $popupSettings['link'] ?? route('spmb.index') }}" target="{{ $popupSettings['target'] ?? '_self' }}" class="block overflow-hidden group">
            <img src="{{ asset($popupSettings['image']) }}?v={{ $popupSettings['version'] ?? '1' }}" 
                 alt="{{ $popupSettings['title'] ?? 'SPMB SIT Madani' }}" 
                 class="w-full h-auto max-h-[75vh] object-contain group-hover:scale-102 transition duration-500" 
                 onerror="this.onerror=null; this.src='/uploads/flyer-spmb-sit-madani.webp'">
        </a>

        {{-- Footer Caption & CTA --}}
        <div class="p-3.5 sm:p-4 bg-gradient-to-r from-indigo-950 via-slate-900 to-blue-950 text-white flex items-center justify-between gap-3">
            <div class="min-w-0">
                <p class="text-[11px] text-amber-400 font-bold uppercase tracking-wider truncate">
                    {{ $popupSettings['title'] ?? 'SPMB SIT Madani' }}
                </p>
                <p class="text-xs text-indigo-100 font-medium truncate">
                    {{ $popupSettings['subtitle'] ?? 'Tahun Pelajaran 2026/2027 • Segera Daftarkan Putra-Putri Anda' }}
                </p>
            </div>
            <a href="{{ $popupSettings['link'] ?? route('spmb.index') }}" target="{{ $popupSettings['target'] ?? '_self' }}" class="shrink-0 bg-gradient-to-r from-amber-400 to-amber-500 hover:from-amber-300 hover:to-yellow-400 text-slate-950 font-black text-xs px-4 py-2.5 rounded-xl shadow-md transition flex items-center space-x-1.5">
                <span>{{ $popupSettings['button_text'] ?? 'Daftar SPMB' }}</span>
                <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>
    </div>
</div>

{{-- Floating Pill Trigger (Memungkinkan pengunjung / admin membuka popup kapan saja dengan 1 klik) --}}
<button id="openMadaniPopupBtn" type="button" aria-label="Buka Brosur Promo SPMB" class="fixed bottom-20 right-5 z-40 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-xs px-3.5 py-2 rounded-full shadow-2xl flex items-center gap-1.5 transition transform hover:scale-105 cursor-pointer border border-amber-300/40">
    <i class="fa-solid fa-bullhorn text-xs text-slate-950"></i>
    <span>Brosur SPMB</span>
</button>

<script>
    (function () {
        const modal = document.getElementById('madaniHomePopupModal');
        const card = document.getElementById('madaniHomePopupCard');
        const closeBtn = document.getElementById('closeMadaniHomePopupBtn');
        const openBtn = document.getElementById('openMadaniPopupBtn');
        const storageKey = 'madani_popup_closed_time';

        if (!modal) return;

        function showPopup() {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100');
            if (card) {
                card.classList.remove('scale-95');
                card.classList.add('scale-100');
            }
        }

        function hidePopup() {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.classList.remove('opacity-100');
            if (card) {
                card.classList.add('scale-95');
                card.classList.remove('scale-100');
            }
            sessionStorage.setItem(storageKey, Date.now().toString());
        }

        // Global opener function for button
        window.openMadaniPopup = showPopup;
        if (openBtn) {
            openBtn.addEventListener('click', showPopup);
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', hidePopup);
        }

        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                hidePopup();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !modal.classList.contains('pointer-events-none')) {
                hidePopup();
            }
        });

        // Auto display rule:
        // 1. If URL has ?popup=1 or ?spmb=1, force display
        // 2. Otherwise display if not closed in last 45 seconds (agar tester/pengunjung tetap melihat tanpa terkunci selamanya)
        const urlParams = new URLSearchParams(window.location.search);
        const forceOpen = urlParams.has('popup') || urlParams.has('spmb');
        const lastClosed = sessionStorage.getItem(storageKey);
        const elapsed = lastClosed ? (Date.now() - parseInt(lastClosed, 10)) : 999999;

        if (forceOpen || elapsed > 45000) {
            setTimeout(showPopup, 500);
        }
    })();
</script>
@endif
