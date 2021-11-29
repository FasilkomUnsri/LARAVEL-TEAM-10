<x-layout>
    <x-slot name="title">Kelompok 10 Resto</x-slot>
    <section class ="home">
    <div class="content-home hijau">
        <div class="content-home-atas">
            RESTAURANT TERBAIK DI INDONESIA, <br />
            Join Kelompok10® Untuk mendapatkan diskon dan promo.
        </div>
    </div>

    <div class="content-home hijau">
        <div class="tahun50">
            <div class="list">
                <div class="foto">
                    <img src="{{ asset('images/goreng.webp') }}" alt="goreng" />  
                </div>
            </div>
            <div class="list">
                <div class="desc">
                    <h1>Nasi Goreng Spesial</h1>
                    <p>Paket hemat #BarengTeman, makan berdua cukup bayar Rp 20.000 saja untuk setiap produk nasi goreng special</p>
                    <button> <a class="btn-putih" href="{{ route('site/online') }} ">Pesan sekarang</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-home hijau">
        <div class="tahun50">
            <div class="list">
                <div class="desc">
                    <h2>Es Teh Manis</h2>
                    <p>Makan di iringi dengan es teh yang segar dan banyak. Hanya Rp.5.000 saja!!</p>
                    <button> <a class="btn-putih" href="{{ route('site/online') }} ">Pesan sekarang</a></button> 
                </div>
            </div>
            <div class="list">
                <div class="foto">
                    <img src="{{ asset('images/esteh.webp') }}" alt="esteh" /> 
                </div>
            </div>
        </div>
    </div>

    <div class="content-home hijau">
        <div class="tahun50">
            <div class="list">
                <div class="foto">
                    <img src="{{ asset('images/ayambakar.webp') }}" alt="ayambakar" />  
                </div>
            </div>
            <div class="list">
                <div class="desc">
                    <h3>Ayam Bakar</h3>
                    <p>Makan Ayam bakar dengan nasi dan cocolan sambal terasi yang nikmat.</p>
                    <button> <a class="btn-putih" href="{{ route('site/online') }} ">Pesan sekarang</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-home hijau">
        <div class="tahun50">
            <div class="list">
                <div class="desc">
                    <h4>Pesan kopi jika ngantuk.</h4>
                    <p>Anda ngantuk tapi banyak kerjaan ? Silahkan pesan kopi kami! Buka sampai pukul 24.00!</p>
                    <button> <a class="btn-putih" href="{{ route('site/online') }} ">Pesan sekarang</a></button>
                </div>
            </div>
            <div class="list">
                <div class="foto">
                    <img src="{{ asset('images/eskopi.webp') }}" alt="eskopi">  
                </div>
            </div>
        </div>
        <div class="note">Thank you</div>
    </section>   
</x-layout>
