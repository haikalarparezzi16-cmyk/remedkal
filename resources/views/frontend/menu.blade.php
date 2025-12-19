@extends('frontend.layout')

@section('content')

<h3 style="
    margin-bottom:26px;
    font-size:26px;
    font-weight:700;
    letter-spacing:2px;
    color:#00f6ff;
    text-shadow:0 0 12px rgba(0,246,255,0.7);
">
    MENU CATERING
</h3>

<div style="
    display:grid;
    grid-template-columns:repeat(auto-fill, minmax(240px, 1fr));
    gap:22px;
">

    @foreach ($menus as $menu)
        <div class="card" style="
            padding:20px;
            border-radius:12px;
            background:linear-gradient(160deg, rgba(15,15,40,0.95), rgba(5,5,20,0.95));
            border:1px solid rgba(0,255,255,0.35);
            position:relative;
            overflow:hidden;
            transition:0.35s ease;
        ">

            <!-- SCAN LINE -->
            <div style="
                position:absolute;
                inset:0;
                background:linear-gradient(
                    120deg,
                    transparent,
                    rgba(0,255,255,0.15),
                    transparent
                );
                transform:translateX(-100%);
                transition:0.6s;
            " class="scan-line"></div>

            <!-- NAMA MENU -->
            <strong style="
                display:block;
                font-size:16px;
                letter-spacing:1px;
                margin-bottom:8px;
                color:#e0f7ff;
            ">
                {{ $menu->nama_menu }}
            </strong>

            <!-- JENIS -->
            <div style="
                font-size:13px;
                color:#9eefff;
                opacity:0.9;
            ">
                TYPE: {{ strtoupper($menu->jenis_menu) }}
            </div>

            <!-- HARGA -->
            <div style="
                margin-top:14px;
                font-size:15px;
                font-weight:600;
                color:#00f6ff;
                text-shadow:0 0 6px rgba(0,246,255,0.7);
            ">
                Rp {{ number_format($menu->harga) }}
            </div>
        </div>
    @endforeach

</div>

<script>
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            const scan = card.querySelector('.scan-line');
            scan.style.transform = 'translateX(100%)';
        });

        card.addEventListener('mouseleave', () => {
            const scan = card.querySelector('.scan-line');
            scan.style.transform = 'translateX(-100%)';
        });
    });
</script>

@endsection
