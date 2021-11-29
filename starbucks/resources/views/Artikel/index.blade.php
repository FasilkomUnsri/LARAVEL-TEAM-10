<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Makanan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="toastr/toastr.min.css">
  </head>
  <body class="d-flex flex-column h-100">


<x-layout>
    <x-slot name="title">Kelompok 10 Resto</x-slot>
    <section class ="section_artikel">
    <div class="content-home hijau">
        <div class="content-home-atas">
            MAKANAN TERPOPULER <br />
            Join Kelompok10® Untuk mendapatkan diskon dan promo.
        </div>
    </div>
         <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">GAMBAR MAKANAN</th>
                        <th scope="col">NAMA MAKANAN</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($artikels as $artikel)
                     <tr>
                      <td class="text-center">
                        <img src="{{ Storage::url('public/artikels/').$artikel->gambar }}" class="rounded" style="width: 150px">
                      </td>
                      <td>{{ $artikel->judul }}</td>
                      <td>{!! $artikel->isi !!}</td>
                      <td class="text-center">
                        <form>
                          <a href="{{ route('site/online') }}" class="btn btn-sm btn-primary">Pesan Sekarang!</a>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                      Makanan belum tersedia
                    </div>
                    @endforelse
                  </tbody>
                </table>
                 {{ $artikels->links() }}
                 <a href="{{ route('site/online') }}" class="solid" >Menu lainnya?Silahkan cek di gofood kami</a>
              </div>
            </div>
          </div>
        </div>
      </section>


  <script src="jquery/jquery-3.6.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="toastr/toastr.min.js"></script>

  <script>
    @if(session()->has('success'))
    toastr.success('{{ session('success') }}', 'BERHASIL!');

    @elseif(session()->has('error'))

    toastr.error('{{ session('error') }}', 'GAGAL!');

    @endif
  </script>

</x-layout>

</body>
</html>