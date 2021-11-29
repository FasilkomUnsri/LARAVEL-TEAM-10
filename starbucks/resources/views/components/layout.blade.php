<html>
<head>
    <title>{{ $title ?? 'ini defult title' }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap/css/app.css') }}" />
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/fontawesome5/css/all.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="toastr/toastr.min.css">
</head>
<body>
<main>
    <header>
        <ul class="kiri">
            <li> 
                <img class="block" xmlns="http://www.w3.org/2000/svg" width="10%" height="10%" viewBox="0 0 62 62" focusable="false" src="images/logo2.webp"><img>
            </li>
        </ul>

        <ul class="kanan">
            <li><a href="{{ route('site/index') }}">Beranda</a></li>
            <li><a href="/artikel">Menu Makanan</a></li>
            <li><a href="https://goo.gl/maps/osUpP6MeRsBqQdB6A"><i class="fas fa-map-marked-alt"></i> Mencari Restaurant</a></li>
            <li><a href="/login">Logout</a></li>
        </ul>
    </header>
    <main id="content">
    {{ $slot }} 
    </main>
    <section>
        <footer>
        <div class="footer-l2">
            <div class="sitemap">
            <div class="list">
                <h3>Tentang Kami<h3>
                <ul>
                    <li><a href="{{ route('site/about') }}">Perusahaan</a></li>
                    <li><a href="{{ route('site/penghargaan') }}">Penghargaan</a></li>
                </ul>
            </div>
            <div class="list">
                <h3>Partner Bisnis</h3>
                <ul>
                    <li><a href="{{ route('site/supplier') }}">Suppliers</a></li> 
                    <li><a href="{{ route('site/sponsor') }}">Sponsor</a></li>
                </ul>
            </div>
        
            <div class="list">
                <h3>Order and Pickup</h3>
                <ul>
                    <li><a href="{{ route('site/online') }}">Order melalui app</a></li>
                    <li><a href="{{ route('site/lokasi') }}">Makan di tempat</a></li>
                </ul>
            </div>
            <div class="list">
            <h3>Social Media</h3>
            <ul>
                <li><a href="https://www.youtube.com/channel/UC9WjLdN9oXMYlt1YsU9qxTA">Youtube</a></li>
                <li><a href="https://www.instagram.com/rayhan_muftii/">Instagram</a></li> 
                <li><a href="https://www.facebook.com/Rayhanmufti123/">Facebook</a></li>
                <li><a href="{{ route('site/index') }}">Twitter</a></li>
            </ul>
        </div>
        <div class="copyrights">© 2021 Kelompok 10 Resto. All rights reserved.</div>
        <div>
    
         
       
       
    </footer>
</body>
</main>
