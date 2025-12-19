@extends('frontend.layout')

@section('content')
<div style="padding:20px;">

    <!-- JUDUL -->
    <h3 style="
        margin-bottom:10px;
        font-size:28px;
        font-weight:700;
        letter-spacing:2px;
        color:#00f6ff;
        text-shadow:0 0 12px rgba(0,246,255,0.7);
    ">
        WELCOME TO KalCatering
    </h3>

    <!-- DESKRIPSI -->
    <p style="
        margin-bottom:35px;
        max-width:650px;
        line-height:1.7;
        color:#b9f4ff;
        font-size:14px;
    ">
        Sistem catering futuristik dengan menu berkualitas tinggi.
        Jelajahi pilihan hidangan kami dan rasakan pengalaman kuliner masa depan.
    </p>

    @foreach ($menus as $jenis => $items)

        <!-- JENIS MENU -->
        <h4 style="
            margin-top:40px;
            margin-bottom:18px;
            font-size:20px;
            letter-spacing:1.5px;
            color:#00f6ff;
            border-left:4px solid #00f6ff;
            padding-left:12px;
            text-shadow:0 0 8px rgba(0,246,255,0.6);
        ">
            {{ strtoupper($jenis) }}
        </h4>

        <!-- GRID MENU -->
        <div style="
            display:grid;
            grid-template-columns:repeat(auto-fill, minmax(220px, 1fr));
            gap:18px;
        ">
            @foreach ($items as $menu)
                <div class="card" style="
                    padding:18px;
                    border-radius:10px;
                    background:linear-gradient(160deg, rgba(15,15,40,0.95), rgba(5,5,20,0.95));
                    border:1px solid rgba(0,255,255,0.35);
                    transition:0.35s;
                ">

                    <strong style="
                        display:block;
                        margin-bottom:10px;
                        font-size:15px;
                        color:#e0f7ff;
                        letter-spacing:1px;
                    ">
                        {{ $menu->nama_menu }}
                    </strong>

                    <span style="
                        font-size:14px;
                        font-weight:600;
                        color:#00f6ff;
                        text-shadow:0 0 6px rgba(0,246,255,0.7);
                    ">
                        Rp {{ number_format($menu->harga) }}
                    </span>
                </div>
            @endforeach
        </div>

        <!-- BUTTON DETAIL -->
        <a href="{{ route('pemesanan.detail', 1) }}"
           style="
                display:inline-block;
                margin-top:22px;
                padding:12px 26px;
                font-size:13px;
                letter-spacing:1px;
                text-decoration:none;
                color:#00f6ff;
                border:1px solid #00f6ff;
                border-radius:6px;
                background:rgba(0,255,255,0.08);
                transition:0.3s;
           "
           onmouseover="
                this.style.boxShadow='0 0 18px rgba(0,255,255,0.8)';
                this.style.background='rgba(0,255,255,0.18)';
           "
           onmouseout="
                this.style.boxShadow='none';
                this.style.background='rgba(0,255,255,0.08)';
           "
        >
            VIEW ORDER DETAIL →
        </a>

    @endforeach

</div>
@endsection
