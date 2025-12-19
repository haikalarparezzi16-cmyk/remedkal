<h2 style="
    margin-bottom:18px;
    font-size:26px;
    letter-spacing:2px;
    color:#00f6ff;
    text-shadow:0 0 12px rgba(0,246,255,0.7);
">
    DETAIL PESANAN
</h2>

<!-- INFO PELANGGAN -->
<div style="
    background:linear-gradient(160deg, rgba(15,15,40,0.95), rgba(5,5,20,0.95));
    padding:18px 22px;
    border-radius:10px;
    border:1px solid rgba(0,255,255,0.35);
    margin-bottom:26px;
    max-width:620px;
    box-shadow:0 0 18px rgba(0,255,255,0.25);
">

    <p style="margin:6px 0; color:#9eefff; font-size:14px;">
        <strong style="color:#00f6ff;">CUSTOMER:</strong>
        {{ $pemesanan->pelanggan->nama }}
    </p>

    <p style="margin:6px 0; color:#9eefff; font-size:14px;">
        <strong style="color:#00f6ff;">EVENT DATE:</strong>
        {{ $pemesanan->tanggal_acara }}
    </p>
</div>

<!-- TABEL DETAIL -->
<table style="
    width:100%;
    border-collapse:separate;
    border-spacing:0;
    background:linear-gradient(160deg, rgba(15,15,40,0.95), rgba(5,5,20,0.95));
    border:1px solid rgba(0,255,255,0.35);
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 0 25px rgba(0,255,255,0.25);
">

    <!-- HEADER -->
    <thead>
        <tr style="background:rgba(0,255,255,0.08);">
            <th style="padding:14px; text-align:left; color:#00f6ff; letter-spacing:1px;">
                MENU
            </th>
            <th style="padding:14px; text-align:center; color:#00f6ff; letter-spacing:1px;">
                QTY
            </th>
            <th style="padding:14px; text-align:right; color:#00f6ff; letter-spacing:1px;">
                PRICE
            </th>
            <th style="padding:14px; text-align:right; color:#00f6ff; letter-spacing:1px;">
                SUBTOTAL
            </th>
        </tr>
    </thead>

    <!-- BODY -->
    <tbody>
        @foreach ($pemesanan->details as $detail)
        <tr style="
            border-top:1px solid rgba(0,255,255,0.15);
            transition:0.3s;
        " onmouseover="this.style.background='rgba(0,255,255,0.08)'"
          onmouseout="this.style.background='transparent'">

            <td style="padding:12px; color:#e0f7ff;">
                {{ $detail->menu->nama_menu }}
            </td>

            <td style="padding:12px; text-align:center; color:#9eefff;">
                {{ $detail->jumlah }}
            </td>

            <td style="padding:12px; text-align:right; color:#9eefff;">
                Rp {{ number_format($detail->menu->harga) }}
            </td>

            <td style="
                padding:12px;
                text-align:right;
                color:#00f6ff;
                font-weight:600;
            ">
                Rp {{ number_format($detail->subtotal) }}
            </td>
        </tr>
        @endforeach
    </tbody>

    <!-- FOOTER -->
    <tfoot>
        <tr style="background:rgba(0,255,255,0.12);">
            <th colspan="3" style="
                padding:14px;
                text-align:right;
                color:#00f6ff;
                letter-spacing:1px;
            ">
                TOTAL
            </th>
            <th style="
                padding:14px;
                text-align:right;
                font-size:16px;
                colo
