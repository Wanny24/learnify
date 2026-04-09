<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skillio — Belajar Skill Digital</title>

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            color: #0f172a;
        }

        a { text-decoration: none; }

        /* ----------------------------------- */
        /* TOPBAR (Hitam) — ala Coursera */
        /* ----------------------------------- */
        .topbar {
            background: #000;
            color: #fff;
            padding: 8px 0;
            font-size: 14px;
        }

        .topbar-container {
            max-width: 1300px;
            margin: auto;
            padding: 0 20px;
            display: flex;
            gap: 25px;
        }

        .topbar-item {
            cursor: pointer;
            opacity: 0.7;
        }

        .topbar-item.active {
            font-weight: 600;
            opacity: 1;
            border-bottom: 2px solid #fff;
            padding-bottom: 3px;
        }

        .topbar-item:hover {
            opacity: 1;
        }

        /* ----------------------------------- */
        /* NAVBAR PUTIH */
        /* ----------------------------------- */
        .navbar {
            width: 100%;
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1300px;
            margin: auto;
            padding: 15px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-logo {
            font-size: 26px;
            font-weight: 800;
            color: #2563eb;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        .nav-menu li a {
            font-size: 15px;
            font-weight: 500;
            color: #475569;
        }

        /* SEARCH BAR */
        .nav-search {
            position: relative;
        }

        .nav-search input {
            width: 350px;
            padding: 10px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 25px;
            font-size: 14px;
            padding-left: 45px;
        }

        .nav-search-icon {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            background: #2563eb;
            color: #fff;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 13px;
        }

        /* BUTTONS */
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .login-btn {
            color: #2563eb;
            font-weight: 600;
        }

        .register-btn {
            padding: 8px 16px;
            border: 1px solid #2563eb;
            border-radius: 8px;
            font-weight: 600;
            color: #2563eb;
        }

        /* RESPONSIVE NAVBAR */
        @media(max-width: 768px) {
            .nav-search input { width: 200px; }
            .nav-menu { display: none; }
        }

                /* ----------------------------------- */
        /* HERO CAROUSEL — Modern Minimalist */
        /* ----------------------------------- */
        .hero-section {
            max-width: 1300px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .carousel-container {
            display: flex;
            overflow: hidden;
            scroll-behavior: smooth;
            border-radius: 26px;
            position: relative;
        }

        .carousel-slide {
            min-width: 100%;
            display: flex;
            gap: 20px;
            padding: 25px;
        }

        /* LEFT CARD */
        .hero-card {
            flex: 1;
            background: #f8fafc;
            border-radius: 26px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-title {
            font-size: 34px;
            font-weight: 800;
            margin-bottom: 14px;
            color: #0f172a;
        }

        .hero-text {
            color: #475569;
            font-size: 16px;
            margin-bottom: 22px;
        }

        .hero-btn {
            padding: 12px 18px;
            background: #2563eb;
            color: #fff;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            width: fit-content;
        }

        /* RIGHT CARD (gradient) */
        .hero-card-blue {
            flex: 1;
            background: linear-gradient(135deg, #1e3a8a, #2563eb, #3b82f6);
            border-radius: 26px;
            padding: 40px;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .hero-circle {
            position: absolute;
            right: -60px;
            bottom: -60px;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
        }

        .hero-card-blue h2 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .hero-card-blue p {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 22px;
        }

        .hero-btn-white {
            padding: 12px 18px;
            background: #fff;
            color: #1e40af;
            border-radius: 8px;
            font-weight: 600;
            width: fit-content;
        }

        /* DOTS */
        .carousel-dots {
            text-align: center;
            margin-top: 12px;
        }

        .carousel-dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 3px;
            background: #cbd5e1;
            border-radius: 50%;
            cursor: pointer;
        }

        .carousel-dot.active {
            background: #2563eb;
        }

        /* RESPONSIVE */
        @media(max-width: 768px) {
            .carousel-slide {
                flex-direction: column;
                padding: 20px;
            }
        }

        /* ===============================
   RESPONSIVE FIX FINAL (MOBILE)
   Learnify Homepage — iPhone XR+
================================*/

/* GLOBAL MOBILE RESET */
@media (max-width: 768px) {
    section, div {
        max-width: 100% !important;
        overflow-x: hidden !important;
    }
    body {
        padding: 0 !important;
        margin: 0 !important;
    }
}


/* ===============================
        NAVBAR FIX
===============================*/
@media (max-width: 768px) {

    /* hide the top navigation list */
    .top-navigation {
        display: none !important;
    }

    /* navbar stacked layout */
    .navbar-wrapper {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
        padding: 10px 15px !important;
    }

    /* small logo */
    .logo {
        font-size: 22px !important;
    }

    /* search bar full width */
    .search-bar {
        width: 100% !important;
    }
}


/* ===============================
        HERO FIX
===============================*/
@media (max-width: 768px) {

    .hero-title {
        font-size: 26px !important;
        line-height: 1.25 !important;
    }

    .hero-subtitle {
        font-size: 15px !important;
        margin-bottom: 12px !important;
    }

    .hero-card {
        padding: 20px !important;
        border-radius: 14px !important;
    }

    .hero-section {
        padding: 15px !important;
    }

    .hero-slide img {
        width: 100% !important;
        height: auto !important;
    }

    .carousel-dot {
        width: 8px !important;
        height: 8px !important;
    }
}


/* ===============================
   PROGRAM & FITUR UNGGULAN FIX
===============================*/
@media (max-width: 768px) {

    .program-grid {
        grid-template-columns: 1fr !important;
        gap: 15px !important;
    }

    .program-card {
        padding: 18px !important;
        height: auto !important;
    }

    .program-card h3 {
        font-size: 16px !important;
    }

    .program-card .description {
        font-size: 13px !important;
    }

    .bubble-bg {
        transform: scale(0.6) !important;
        right: -10px !important;
        bottom: -10px !important;
    }
}


/* ===============================
      KATEGORI FIX
===============================*/
@media (max-width: 768px) {

    .category-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 12px !important;
    }

    .category-card {
        height: auto !important;
        padding: 18px !important;
    }

    .category-card img {
        width: 40px !important;
        height: 40px !important;
    }
}


/* ===============================
      FLASH SALE FIX
===============================*/
@media (max-width: 768px) {

    .flash-carousel {
        display: flex !important;
        overflow-x: scroll !important;
        gap: 14px !important;
        padding-bottom: 10px;
    }

    .flash-card {
        min-width: 220px !important;
        max-width: 220px !important;
        border-radius: 14px !important;
    }

    .flash-card img {
        height: 120px !important;
    }

    .flash-title {
        font-size: 20px !important;
    }

    .flash-timer {
        font-size: 12px !important;
        padding: 6px 10px !important;
    }
}


/* ===============================
      BENEFIT / KEUNGGULAN FIX
===============================*/
@media (max-width: 768px) {

    .benefit-grid {
        grid-template-columns: 1fr !important;
        gap: 14px !important;
    }

    .benefit-card {
        padding: 18px !important;
        height: auto !important;
    }

    .benefit-icon {
        width: 50px !important;
        height: 50px !important;
        font-size: 22px !important;
    }
}


/* ===============================
      PARTNERSHIP FIX
===============================*/
@media (max-width: 768px) {

    .partner-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 14px !important;
    }

    .partner-grid img {
        width: 100px !important;
        height: 40px !important;
    }
}


/* ===============================
      TESTIMONI FIX
===============================*/
@media (max-width: 768px) {

    .testi-box {
        padding: 22px !important;
    }

    .testi-photo {
        width: 70px !important;
        height: 70px !important;
    }

    .testi-name {
        font-size: 16px !important;
    }

    .testi-text {
        font-size: 14px !important;
    }
}

/* NAVBAR: perbaiki layout di layar sempit */
@media (max-width: 600px) {
    .nav-container {
        flex-wrap: wrap;
        row-gap: 8px;
        padding: 10px 16px;
    }

    .nav-left {
        width: 100%;
        justify-content: space-between;
    }

    .nav-logo {
        font-size: 22px;
    }

    /* search bar turun ke baris sendiri, full width */
    .nav-search {
        order: 3;
        width: 100%;
    }

    .nav-search input {
        width: 100%;
    }

    /* tombol Masuk & Daftar jadi di baris tengah */
    .nav-actions {
        order: 2;
        gap: 8px;
    }
}

/* VOUCHER BAR: jangan full satu layar di HP */
@media (max-width: 600px) {
    .voucher-bar {
        width: 90%;
        margin: 24px auto;
        padding: 14px 12px;
        border-radius: 16px;
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }

    .voucher-bar > div:first-child {
        font-size: 14px;
        line-height: 1.4;
    }

    .voucher-buttons {
        width: 100%;
        justify-content: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .voucher-buttons button {
        padding: 8px 12px;
        font-size: 14px;
        min-width: 120px;
    }
}

/* ====== 1. Global: jangan sampai melebar ke samping ====== */
*,
*::before,
*::after {
    box-sizing: border-box;
}

/* Kunci body & html biar gak bisa scroll horizontal */
html, body {
    max-width: 100%;
    overflow-x: hidden;
}

/* ====== 2. Hero carousel: rapihin di mobile ====== */
@media (max-width: 600px) {

    /* Hilangin padding luar yang bikin slide kaya “kepotong” */
    .hero-section {
        padding: 0;
    }

    /* Biar kartu hero nempel rapi ke sisi kiri-kanan layar */
    .carousel-container {
        border-radius: 0;
    }

    /* Kasih padding di dalam slide, bukan di container */
    .carousel-slide {
        padding: 20px 16px;
    }
}

.nav-login {
    font-size: 14px;
    color: #1a56db;
    margin-right: 20px;
    text-decoration: none;
    font-weight: 500;
}

.nav-login:hover {
    color: #0045c5;
}

.nav-register {
    padding: 6px 16px;
    border: 2px solid #1a56db;
    border-radius: 6px;
    color: #1a56db;
    text-decoration: none;
    font-weight: 600;
    transition: 0.2s;
}

.nav-register:hover {
    background: #1a56db;
    color: white;
}

    </style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
    <div class="topbar-container">
        <div class="topbar-item active">Untuk Individu</div>
        <div class="topbar-item">Untuk Bisnis</div>
        <div class="topbar-item">Untuk Universitas</div>
        <div class="topbar-item">Untuk Pemerintah</div>
    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-container">

        <div class="nav-left">
            <a class="nav-logo">Skillio</a>

            <ul class="nav-menu">
                <li><a href="#">Jelajahi</a></li>
            </ul>
        </div>

        <div class="nav-search">
            <div class="nav-search-icon">🔍</div>
            <input type="text" placeholder="Apa yang ingin Anda pelajari?">
        </div>

        <div class="nav-actions">
            <a href="{{ url('/login') }}" class="nav-login">Masuk</a>
            <a href="{{ url('/register') }}" class="nav-register">Daftar Gratis</a>

        </div>

    </div>
</nav>


<!-- HERO CAROUSEL -->
<section class="hero-section">

    <div class="carousel-container" id="heroCarousel">

        <!-- SLIDE 1 -->
        <div class="carousel-slide">

            <div class="hero-card">
                <h2 class="hero-title">Nikmati Pembelajaran Tak Terbatas</h2>
                <p class="hero-text">
                    Akses ribuan kelas premium dengan mentor profesional. Tingkatkan kariermu sekarang.
                </p>
                <a class="hero-btn">Mulai Belajar</a>
            </div>

            <div class="hero-card-blue">
                <h2>Upgrade Skill Tim Anda</h2>
                <p>Pelatihan berkualitas untuk perusahaan, organisasi, dan institusi pendidikan.</p>
                <a class="hero-btn-white">Pelajari Program</a>

                <div class="hero-circle"></div>
            </div>

        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-slide">

            <div class="hero-card">
                <h2 class="hero-title">Belajar dari Mentor Terbaik</h2>
                <p class="hero-text">
                    Bergabung dengan ribuan siswa lain dan tingkatkan kemampuanmu.
                </p>
                <a class="hero-btn">Lihat Kelas Populer</a>
            </div>

            <div class="hero-card-blue">
                <h2>Program Sertifikasi</h2>
                <p>Dapatkan sertifikat resmi yang diakui industri dan tingkatkan peluang kariermu.</p>
                <a class="hero-btn-white">Lihat Program Sertifikasi</a>

                <div class="hero-circle"></div>
            </div>

        </div>

    </div>

    <div class="carousel-dots">
        <div class="carousel-dot active" onclick="goToSlide(0)"></div>
        <div class="carousel-dot" onclick="goToSlide(1)"></div>
    </div>

</section>

<style>
    /* ----------------------------------- */
    /* PROGRAM & FITUR UNGGULAN */
    /* ----------------------------------- */

    .section {
        max-width: 1300px;
        margin: 60px auto 40px;
        padding: 0 20px;
    }

    .section-title {
        font-size: 26px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 14px;
    }

    .section-sub {
        font-size: 15px;
        color: #64748b;
        margin-bottom: 25px;
    }

    /* GRID 4 — Program Unggulan */
    .program-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 22px;
    }

    .program-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 4px 16px rgba(0,0,0,0.05);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 180px;
        font-size: 18px;
        font-weight: 700;
        color: #0f172a;
        position: relative;
        overflow: hidden;
    }

    .program-card::after {
        content: "";
        position: absolute;
        width: 90px;
        height: 90px;
        background: #bfdbfe;
        opacity: 0.25;
        border-radius: 50%;
        right: -20px;
        bottom: -20px;
    }

    /* ----------------------------------- */
    /* KATEGORI POPULER */
    /* ----------------------------------- */

    .kategori-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
        margin-top: 20px;
    }

    .kategori-item {
        background: #f8fafc;
        padding: 22px 18px;
        border-radius: 14px;
        font-size: 15px;
        font-weight: 600;
        text-align: center;
        color: #1e293b;
        border: 1px solid #e2e8f0;
        transition: 0.2s;
        cursor: pointer;
    }

    .kategori-item:hover {
        transform: translateY(-4px);
        box-shadow: 0px 4px 14px rgba(0,0,0,0.07);
    }

    /* ICON placeholder */
    .kategori-icon {
        font-size: 26px;
        margin-bottom: 10px;
        color: #2563eb;
    }

    /* RESPONSIVE */
    @media(max-width: 1024px) {
        .program-grid { grid-template-columns: repeat(2, 1fr); }
        .kategori-grid { grid-template-columns: repeat(3, 1fr); }
    }

    @media(max-width: 600px) {
        .program-grid { grid-template-columns: repeat(1, 1fr); }
        .kategori-grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>


<!-- SECTION: PROGRAM UNGGULAN -->
<section class="section">
    <h2 class="section-title">Program & Fitur Unggulan</h2>
    <p class="section-sub">Pilihan program terbaik untuk membantu kamu berkembang lebih cepat.</p>

    <div class="program-grid">

        <div class="program-card">
            Engineering Academy
        </div>

        <div class="program-card">
            Sertifikasi Komputer CASN
        </div>

        <div class="program-card">
            Bimbel CASN
        </div>

        <div class="program-card">
            E-Meterai Digital
        </div>

    </div>
</section>


<!-- SECTION: KATEGORI TERPOPULER -->
<section class="section">
    <h2 class="section-title">Kategori Terpopuler</h2>
    <p class="section-sub">Jelajahi kategori yang paling diminati.</p>

    <div class="kategori-grid">

        <div class="kategori-item">
            <div class="kategori-icon">🎨</div>
            Design
        </div>
        <div class="kategori-item">
            <div class="kategori-icon">💼</div>
            Bisnis
        </div>
        <div class="kategori-item">
            <div class="kategori-icon">💻</div>
            Coding
        </div>
        <div class="kategori-item">
            <div class="kategori-icon">📈</div>
            Marketing
        </div>
        <div class="kategori-item">
            <div class="kategori-icon">🖥️</div>
            Editing
        </div>
        <div class="kategori-item">
            <div class="kategori-icon">🤖</div>
            AI & Data
        </div>

    </div>
</section>

<style>
    /* ----------------------------------- */
    /* VOUCHER BAR — Soft Orange Gradient */
    /* ----------------------------------- */

    .voucher-bar {
        max-width: 1300px;
        margin: 40px auto;
        padding: 20px 26px;
        border-radius: 18px;
        background: linear-gradient(90deg, #ffb873, #ff8f3c);
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
        font-weight: 600;
    }

    .voucher-buttons {
        display: flex;
        gap: 12px;
    }

    .voucher-buttons button {
        padding: 10px 18px;
        background: white;
        border: none;
        color: #ff7a2c;
        font-weight: 700;
        border-radius: 10px;
        cursor: pointer;
    }

    /* ----------------------------------- */
    /* FLASH SALE — Premium Minimalist */
    /* ----------------------------------- */

    .flash-section {
        max-width: 1300px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .flash-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .flash-title {
        font-size: 26px;
        font-weight: 800;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #0f172a;
    }

    .flash-title span {
        font-size: 28px;
    }

    /* TIMER */
    .flash-timer {
        background: #e2e8f0;
        padding: 8px 14px;
        border-radius: 10px;
        font-weight: 700;
        color: #1e293b;
        font-size: 14px;
    }

    /* FLASH GRID / CAROUSEL */
    .flash-carousel {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        margin-top: 25px;
        padding-bottom: 12px;
        scroll-behavior: smooth;
    }

    .flash-card {
        min-width: 240px;
        background: #ffffff;
        border-radius: 18px;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 4px 16px rgba(0,0,0,0.05);
        overflow: hidden;
        cursor: pointer;
        transition: 0.2s;
    }

    .flash-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 22px rgba(0,0,0,0.07);
    }

    .flash-card img {
        width: 100%;
        height: 140px;
        object-fit: cover;
    }

    .flash-info {
        padding: 14px;
    }

    .flash-name {
        font-size: 16px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 6px;
    }

    .flash-mentor {
        font-size: 13px;
        color: #64748b;
        margin-bottom: 10px;
    }

    .flash-price {
        font-weight: 800;
        color: #e11d48;
        font-size: 18px;
    }

    .flash-old-price {
        text-decoration: line-through;
        color: #94a3b8;
        font-size: 14px;
        margin-left: 6px;
    }

    .flash-badge {
        background: #2563eb;
        color: white;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 12px;
        margin-top: 8px;
        display: inline-block;
        font-weight: 600;
    }

    .discount-badge {
        background: #e11d48;
        margin-left: 6px;
    }

    /* RESPONSIVE */
    @media(max-width: 768px) {
        .flash-card { min-width: 200px; }
        .flash-title { font-size: 22px; }
    }

    @media(max-width: 480px) {
        .voucher-bar {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .flash-header {
            flex-direction: column;
            gap: 10px;
            align-items: flex-start;
        }
    }

</style>



<!-- VOUCHER BAR -->
<div class="voucher-bar">
    <div>🎁 Tukarkan voucher dan cek sertifikat kamu sekarang!</div>

    <div class="voucher-buttons">
        <button>Tukar Voucher</button>
        <button>Cek Sertifikat</button>
    </div>
</div>


<!-- FLASH SALE -->
<section class="flash-section">

    <div class="flash-header">
        <h2 class="flash-title"><span>🔥</span> Flash Sale</h2>
        <div class="flash-timer">Berakhir dalam: 01:24:51</div>
    </div>

    <div class="flash-carousel">

        <!-- Card 1 -->
        <div class="flash-card">
            <img src="https://picsum.photos/300/200" alt="">
            <div class="flash-info">
                <div class="flash-name">UI/UX Design Beginner</div>
                <div class="flash-mentor">Mentor: Aulia Rahman</div>

                <div>
                    <span class="flash-price">Rp 45.000</span>
                    <span class="flash-old-price">Rp 120.000</span>
                </div>

                <span class="flash-badge">Best Seller</span>
                <span class="flash-badge discount-badge">-67%</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="flash-card">
            <img src="https://picsum.photos/301/200" alt="">
            <div class="flash-info">
                <div class="flash-name">Belajar Dasar Pemrograman</div>
                <div class="flash-mentor">Mentor: Ryan Putra</div>

                <div>
                    <span class="flash-price">Rp 39.000</span>
                    <span class="flash-old-price">Rp 99.000</span>
                </div>

                <span class="flash-badge discount-badge">-60%</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="flash-card">
            <img src="https://picsum.photos/302/200" alt="">
            <div class="flash-info">
                <div class="flash-name">Canva Editing</div>
                <div class="flash-mentor">Mentor: Shinta R.</div>

                <div>
                    <span class="flash-price">Rp 29.000</span>
                    <span class="flash-old-price">Rp 79.000</span>
                </div>

                <span class="flash-badge discount-badge">-63%</span>
            </div>
        </div>

    </div>

</section>

<style>
    /* ----------------------------------- */
    /* BENEFIT / KEUNGGULAN — Minimalist */
    /* ----------------------------------- */

    .benefit-section {
        max-width: 1300px;
        margin: 70px auto;
        padding: 0 20px;
    }

    .benefit-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 22px;
        margin-top: 25px;
    }

    .benefit-card {
        background: #ffffff;
        padding: 26px;
        text-align: center;
        border-radius: 18px;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 6px 18px rgba(0,0,0,0.04);
        transition: 0.2s;
    }

    .benefit-card:hover {
        transform: translateY(-4px);
        box-shadow: 0px 10px 20px rgba(0,0,0,0.06);
    }

    .benefit-icon {
        background: #dbeafe;
        color: #2563eb;
        font-size: 30px;
        width: 60px;
        height: 60px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        margin-bottom: 15px;
    }

    .benefit-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #0f172a;
    }

    .benefit-text {
        font-size: 14px;
        color: #64748b;
        line-height: 1.5;
    }

    /* Responsive Benefit */
    @media(max-width: 1024px) {
        .benefit-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media(max-width: 600px) {
        .benefit-grid { grid-template-columns: repeat(1, 1fr); }
    }


    /* ----------------------------------- */
    /* PARTNERSHIP — Clean Corporate */
    /* ----------------------------------- */

    .partner-section {
        max-width: 1300px;
        margin: 60px auto;
        padding: 0 20px;
    }

    .partner-wrapper {
        background: #f1f5ff;
        border-radius: 18px;
        padding: 35px;
    }

    .partner-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 25px;
        margin-top: 20px;
        align-items: center;
        justify-items: center;
    }

    .partner-grid img {
        max-width: 110px;
        max-height: 50px;
        opacity: 0.7;
        transition: 0.2s;
    }

    .partner-grid img:hover {
        opacity: 1;
    }

    @media(max-width: 1024px) {
        .partner-grid { grid-template-columns: repeat(4, 1fr); }
    }

    @media(max-width: 600px) {
        .partner-grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>


<!-- BENEFIT / KEUNGGULAN -->
<section class="benefit-section">

    <h2 class="section-title">Keunggulan Skillio</h2>
    <p class="section-sub">Platform belajar online yang dibuat untuk kenyamanan dan kemajuanmu.</p>

    <div class="benefit-grid">

        <div class="benefit-card">
            <div class="benefit-icon">🚀</div>
            <div class="benefit-title">Zero to Hero</div>
            <div class="benefit-text">
                Belajar dari dasar hingga mahir dengan kurikulum terstruktur.
            </div>
        </div>

        <div class="benefit-card">
            <div class="benefit-icon">💸</div>
            <div class="benefit-title">Biaya Terjangkau</div>
            <div class="benefit-text">
                Harga ramah pelajar dengan materi premium dan up-to-date.
            </div>
        </div>

        <div class="benefit-card">
            <div class="benefit-icon">🌐</div>
            <div class="benefit-title">Full Online</div>
            <div class="benefit-text">
                Belajar dari mana saja dan kapan saja tanpa batasan waktu.
            </div>
        </div>

        <div class="benefit-card">
            <div class="benefit-icon">👨‍🏫</div>
            <div class="benefit-title">Trainer Berpengalaman</div>
            <div class="benefit-text">
                Dibimbing oleh mentor yang ahli dan berpengalaman di bidangnya.
            </div>
        </div>

    </div>

</section>


<!-- PARTNERSHIP -->
<section class="partner-section">

    <h2 class="section-title">Partnership</h2>
    <p class="section-sub">Dipercaya oleh berbagai perusahaan, lembaga, dan institusi profesional.</p>

    <div class="partner-wrapper">

        <div class="partner-grid">
            <img src="https://dummyimage.com/120x50/000/fff&text=PLN" alt="">
            <img src="https://dummyimage.com/120x50/000/fff&text=Telkom" alt="">
            <img src="https://dummyimage.com/120x50/000/fff&text=BSI" alt="">
            <img src="https://dummyimage.com/120x50/000/fff&text=Elnusa" alt="">
            <img src="https://dummyimage.com/120x50/000/fff&text=JDS" alt="">
            <img src="https://dummyimage.com/120x50/000/fff&text=Univ" alt="">
        </div>

    </div>

</section>


<style>
    /* ----------------------------------- */
    /* TESTIMONI — Clean Minimalist */
    /* ----------------------------------- */

    .testi-section {
        max-width: 900px;
        margin: 60px auto;
        text-align: center;
        padding: 0 20px;
    }

    .testi-box {
        background: #ffffff;
        border-radius: 18px;
        padding: 35px;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 6px 18px rgba(0,0,0,0.05);
    }

    .testi-photo {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        margin: 0 auto 15px;
    }

    .testi-name {
        font-size: 18px;
        font-weight: 700;
        color: #0f172a;
        margin-top: 10px;
    }

    .testi-job {
        font-size: 14px;
        color: #64748b;
        margin-bottom: 16px;
    }

    .testi-text {
        font-size: 15px;
        font-style: italic;
        color: #475569;
        line-height: 1.6;
    }

    /* ----------------------------------- */
    /* CTA SECTION — Modern Blue Minimalist */
    /* ----------------------------------- */

    .cta-section {
        max-width: 1300px;
        margin: 70px auto;
        background: linear-gradient(135deg, #e0eaff, #f3f8ff);
        padding: 50px 20px;
        border-radius: 22px;
        text-align: center;
    }

    .cta-title {
        font-size: 30px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 14px;
    }

    .cta-text {
        font-size: 16px;
        color: #475569;
        margin-bottom: 25px;
    }

    .cta-btn {
        padding: 14px 22px;
        background: #2563eb;
        color: #fff;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 700;
        display: inline-block;
    }

    /* ----------------------------------- */
    /* FOOTER MINIMALIS */
    /* ----------------------------------- */

    footer {
        background: #f8fafc;
        padding: 35px 0;
        margin-top: 60px;
        text-align: center;
        color: #64748b;
        font-size: 14px;
        border-top: 1px solid #e2e8f0;
    }

    
</style>




<!-- TESTIMONI -->
<section class="testi-section">
    <h2 class="section-title">Apa Kata Alumni?</h2>

    <div class="testi-box">
        <img class="testi-photo" src="https://picsum.photos/200" alt="Alumni">
        <div class="testi-name">Aditya Pratama</div>
        <div class="testi-job">Frontend Developer · Batch 2023</div>
        <div class="testi-text">
            “Belajar di Skillio sangat membantu saya memahami konsep programming dari nol. Mentornya keren dan materinya mudah dipahami!”
        </div>
    </div>
</section>


<!-- CTA SECTION -->
<section class="cta-section">
    <h2 class="cta-title">Siap Meningkatkan Skill Kamu?</h2>
    <p class="cta-text">Ribuan pelajar sudah bergabung dan merasakan manfaatnya. Sekarang giliran kamu!</p>
    <a href="#" class="cta-btn">Lihat Semua Kelas</a>
</section>


<!-- FOOTER -->
<footer>
    © {{ date('Y') }} Learnify — Semua Hak Dilindungi.
</footer>


<!-- JAVASCRIPT (HERO CAROUSEL) -->
<script>
    let currentSlide = 0;
    const carousel = document.getElementById("heroCarousel");
    const slides = document.querySelectorAll(".carousel-slide");
    const dots = document.querySelectorAll(".carousel-dot");

    function goToSlide(index) {
        currentSlide = index;
        carousel.scrollTo({
            left: carousel.offsetWidth * index,
            behavior: "smooth"
        });

        dots.forEach(dot => dot.classList.remove("active"));
        dots[index].classList.add("active");
    }

    setInterval(() => {
        currentSlide = (currentSlide + 1) % slides.length;
        goToSlide(currentSlide);
    }, 6000);
</script>

</body>
</html>
