<html>
<head>
    <title>{{ $title ?? 'ini defult title' }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap/css/app.css') }}" />
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/fontawesome5/css/all.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&display=swap" rel="stylesheet" />
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
            <li><a href="{{ route('site/index') }}">Menu Makanan</a></li>
            <li><a href="https://goo.gl/maps/FDidG2MWrNtUC6yM6"><i class="fas fa-map-marked-alt"></i> Mencari toko</a></li>
            <li><a href="{{ route('site/index') }}">Logout</a></li>
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
                    <li><a href="#">Cerita dan berita</a></li>
                    <li><a href="#">Penghargaan</a></li>
                    <li><a href="#">Relasi Investor</a></li>
                    <li><a href="#">Customer Service </a></li>
                </ul>
            </div>
            <div class="list">
                <h3>Partner Bisnis</h3>
                <ul>
                    <li><a href="#">Suppliers</a></li> 
                    <li><a href="#">Sponsor</a></li>
                    <li><a href="#">Endorse</a></li>
                </ul>
            </div>
        
            <div class="list">
                <h3>Order and Pickup</h3>
                <ul>
                    <li><a href="#">Order melalui app</a></li>
                    <li><a href="#">Order melalui website</a></li> 
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Order and Pickup Options</a></li>
                    <li><a href="#">Makan di tempat</a></li>
                </ul>
            </div>
            <div class="list">
            <h3>Social Media</h3>
            <ul>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Instagram</a></li> 
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
        <div class="copyrights">© 2021 Kelompok 10 Resto. All rights reserved.</div>
        <div>
    
         
       
       
    </footer>
</body>
</main>
