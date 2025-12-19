@extends('frontend.layout')

@section('content')

<h3 style="
    margin-bottom:22px;
    font-size:26px;
    letter-spacing:2px;
    color:#00f6ff;
    text-shadow:0 0 12px rgba(0,246,255,0.7);
">
    CONTACT SYSTEM
</h3>

<div style="
    max-width:520px;
    background:linear-gradient(160deg, rgba(15,15,40,0.95), rgba(5,5,20,0.95));
    padding:24px;
    border-radius:12px;
    border:1px solid rgba(0,255,255,0.35);
    box-shadow:0 0 22px rgba(0,255,255,0.25);
    position:relative;
    overflow:hidden;
">

    <!-- SCAN EFFECT -->
    <div style="
        position:absolute;
        inset:0;
        background:linear-gradient(
            120deg,
            transparent,
            rgba(0,255,255,0.12),
            transparent
        );
        transform:translateX(-100%);
        transition:0.6s;
    " class="scan"></div>

    <!-- ALAMAT -->
    <div style="margin-bottom:18px; position:relative;">
        <strong style="
            color:#00f6ff;
            letter-spacing:1px;
            font-size:14px;
        ">📍 LOCATION</strong><br>

        <span style="
            color:#e0f7ff;
            font-size:14px;
        ">
            merangin, bangka belitung
        </span>
    </div>

    <!-- WHATSAPP -->
    <div style="margin-bottom:18px; position:relative;">
        <strong style="
            color:#00f6ff;
            letter-spacing:1px;
            font-size:14px;
        ">📱 WHATSAPP</strong><br>

        <span style="
            color:#00ff9c;
            font-size:14px;
            text-shadow:0 0 6px rgba(0,255,156,0.7);
        ">
            085367681316
        </span>
    </div>

    <!-- INFO -->
    <div style="position:relative;">
        <strong style="
            color:#00f6ff;
            letter-spacing:1px;
            font-size:14px;
        ">ℹ SYSTEM INFO</strong><br>

        <span style="
            color:#9eefff;
            font-size:14px;
        ">
            Best Catering Service in Town
        </span>
    </div>

</div>

<script>
    const panel = document.querySelector('.scan')?.parentElement;
    if(panel){
        panel.addEventListener('mouseenter', () => {
            panel.querySelector('.scan').style.transform = 'translateX(100%)';
        });
        panel.addEventListener('mouseleave', () => {
            panel.querySelector('.scan').style.transform = 'translateX(-100%)';
        });
    }
</script>

@endsection
