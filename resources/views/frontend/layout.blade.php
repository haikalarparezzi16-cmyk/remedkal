<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cyber Catering</title>

    <!-- Google Font Cyber -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        /* =====================
           RESET & DASAR
           ===================== */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Orbitron', sans-serif;
            background:
                linear-gradient(135deg, #050510 0%, #0a0a1f 100%),
                repeating-linear-gradient(
                    90deg,
                    rgba(0,255,255,0.03) 0px,
                    rgba(0,255,255,0.03) 1px,
                    transparent 1px,
                    transparent 40px
                );
            color: #e0f7ff;
            display: flex;
            flex-direction: column;
        }

        /* =====================
           HEADER CYBER
           ===================== */
        header {
            position: sticky;
            top: 0;
            z-index: 999;
            padding: 22px 48px;
            background: rgba(10, 10, 30, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,255,255,0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h2 {
            margin: 0;
            font-size: 26px;
            font-weight: 800;
            letter-spacing: 2px;
            color: #00f6ff;
            text-shadow:
                0 0 10px rgba(0,246,255,0.8),
                0 0 30px rgba(0,246,255,0.4);
        }

        /* =====================
           NAVIGATION
           ===================== */
        nav a {
            margin-left: 22px;
            text-decoration: none;
            font-size: 13px;
            letter-spacing: 1px;
            padding: 10px 20px;
            border: 1px solid rgba(0,255,255,0.4);
            color: #00f6ff;
            border-radius: 6px;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
        }

        nav a::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(0,255,255,0.6),
                transparent
            );
            transform: translateX(-100%);
            transition: 0.4s;
        }

        nav a:hover::before {
            transform: translateX(100%);
        }

        nav a:hover {
            box-shadow:
                0 0 15px rgba(0,255,255,0.8),
                inset 0 0 10px rgba(0,255,255,0.6);
            background: rgba(0,255,255,0.1);
        }

        /* =====================
           CONTAINER
           ===================== */
        .container {
            padding: 60px;
            max-width: 1200px;
            margin: auto;
            position: relative;
        }

        .container::before {
            content: "";
            position: absolute;
            inset: 0;
            border: 1px solid rgba(0,255,255,0.15);
            pointer-events: none;
        }

        /* =====================
           CARD CYBER
           ===================== */
        .card {
            background: linear-gradient(
                160deg,
                rgba(15,15,40,0.95),
                rgba(5,5,20,0.95)
            );
            border: 1px solid rgba(0,255,255,0.3);
            padding: 24px;
            margin-bottom: 26px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            transition: 0.35s ease;
        }

        .card::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(0,255,255,0.15),
                transparent
            );
            transition: 0.6s;
        }

        .card:hover::after {
            left: 100%;
        }

        .card:hover {
            transform: translateY(-6px) scale(1.01);
            box-shadow:
                0 0 25px rgba(0,255,255,0.5),
                inset 0 0 15px rgba(0,255,255,0.25);
            border-color: #00f6ff;
        }

        /* =====================
           FOOTER CYBER
           ===================== */
        footer {
            margin-top: auto;
            background: rgba(5,5,20,0.95);
            border-top: 1px solid rgba(0,255,255,0.2);
            padding: 14px;
            text-align: center;
            font-size: 12px;
            letter-spacing: 1px;
            color: #9eefff;
        }

        footer span {
            color: #00f6ff;
            text-shadow: 0 0 8px rgba(0,255,255,0.8);
        }
    </style>
</head>
<body>

<header>
    <h2>CYBER CATERING</h2>
    <nav>
        <a href="/">HOME</a>
        <a href="/menu">MENU</a>
        <a href="/kontak">KONTAK</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    © {{ date('Y') }} <span>CATERING BERKAH</span> | FUTURE FOOD SYSTEM
</footer>

</body>
</html>
