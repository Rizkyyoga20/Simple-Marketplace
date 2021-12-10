@extends('pages')
@section('title', 'Home')
@section('container')


  <h3 style="margin-bottom:5px; font-family:Monotype Corsiva; font-weight:bold; font-size:25px;" align="center">
    <center><img src="{{ asset('storage/web/logo-admin.png')}}" width="120px" height="120px" style="margin-bottom:5px;"></center>  
    Dashboard
  </h3>

	@if(session('berhasil'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ session('berhasil') }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif


<style type="text/css">
	body{
		box-sizing:border-box;
		overflow-x:hidden;
	}
	#isi{
		height:100px;
		overflow-y:scroll;
	}
</style>

<div class="row row-cols-1 row-cols-md-3 g-3">

  <div class="col-sm-4 mb-1">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Akun</h5>
        <hr class="dropdown-divider">
        <div id="isi">
        	<p class="card-text">Akun merupakan data akun yang dibuat oleh admin instansi, seteleh pasien selesai berobat. <br> Contoh : <br>
            Id user : 2112893289382932 <br>
            Name user : Rianto Abi Yaso <br>
            Email : abi11@gmail.com <br>
            Status_akses : Pelanggan <br>
            No telepon : 081121224343 <br>
            Jenis kelamin : Laki-laki <br>
            Alamat : Jln. Sayangan I, Lrg. Jambu menyet, No. 1121 <br>
            Password : xxxxxxxxxxx.
          </p>
        </div>
        <hr class="dropdown-divider">
        <a href="{{ url('/data_akun') }}" class="btn btn-primary">Daftar Akun</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-1">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kategori</h5>
        <hr class="dropdown-divider">
        <div id="isi">
        	<p class="card-text">Kategori merupakan halaman untuk menambah kategori produk toko <br> Contoh : <br>
            Nama kategori : Sepatu Olaraga<br>
            Keterangan kategori : Sepatu olaraga model tarbaru seperti futsal, bola tangkis, voli, sepak bola dan masih banyak lagi, dengan harga kisaran 100.000 sd 1.500.000.<br>
          </p>
        </div>
        <hr class="dropdown-divider">
        <a href="#" class="btn btn-primary">Daftar Kategori</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-1">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Produk</h5>
        <hr class="dropdown-divider">
        <div id="isi">
        	<p class="card-text">Produk merupakan halaman yang digunakan untuk menambah data produk <br> 
            Contoh : <br>
            Id produk : P001<br>
            Nama produk : Sepatu futsal Puma.<br>
            Harga produk : 450.000.<br>
            Kategori produk : Sepatu Olaraga.<br>
            Status produk : Diskon.<br>
            Keterangan produk : Sapetu futsal Puma tersedia warna hitam, kuning, dan biru dengan dengan potongan diskon 50%.<br>
            Gambar : Upload data gambar produk ada. <br>
            Stok : 100 <br>  
          </p>
        </div>
        <hr class="dropdown-divider">
        <a href="#" class="btn btn-primary">Daftar Produk</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-1">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pesanan</h5>
        <hr class="dropdown-divider">
        <div id="isi">
          <p class="card-text">
            Pesanan merupakan halaman yang digunakan untuk menlakukan transaksi pesanan pelanggan. <br> Contoh : <br>
            Id pesanan : PJ005.<br>
            Id pelanggan : 8882893221382911.<br>
            Id kasir : 9932893289382921.<br>
            Nama produk : Sepatu jogging Adidas.<br>
            Harga produk : 320.000.<br>
            Catatan produk : Ada | Sepatu Olaraga.<br>
            Status pesanan : Lunas.<br>
          </p>
        </div>
        <hr class="dropdown-divider">
        <a href="#" class="btn btn-primary">Pesanan</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-1">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Laporan</h5>
        <hr class="dropdown-divider">
        <div id="isi">
          <p class="card-text">Laporan merupakan halaman yang berisi data laporan penjualan toko.</p>
        </div>
        <hr class="dropdown-divider">
        <a href="#" class="btn btn-primary">Laporan</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mb-1">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">FQI</h5>
        <hr class="dropdown-divider">
        <div id="isi">
          <p class="card-text">FQI merupakan informasi prosuder yang harus di ikuti oleh admin, yang berisikan fungsi dan tugas dari seorang admin tersebut.</p>
        </div>
        <hr class="dropdown-divider">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropFqi">
          FQI
        </button>
      </div>
    </div>
  </div>

</div>







        <!-- Modal -->
        <div class="modal fade" id="staticBackdropFqi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Pasien</h5>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                    <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                  </svg>      
                </button>
              </div>

              <div class="modal-body">

                  <h3>FQI</h3> 

                  <p>Script Sports merupakan sebuah aplikasi <i>Marketplace</i> sederhana yang menjual berbagai macam peralatan olaraga seperti sepatu, kaos, dan alat alat lainnya. Selain itu <i>Marketplace</i> menjual alat musik berserta peralatannya seperti, gitar, bass dan masih bayak lagi. Ada pun yang terlibat dari aplikasi ini adalah Admin Utama, Kasir, dan Pelanggan, yang memilki tugas sebagai berikut ;</p>

                  <h4>Admin Utama</h4>

                  <ul>
                    <li>Mengelola data kategori produk seperti sepatu dan kaos misalnya.</li>
                    <li>mengelola data produk yang ada pada toko seperti Sepatu futsal Puma misalnya.</li>
                    <li>Mencetak laporan penjaulan.</li>
                  </ul>

                  <h4>Kasir</h4>

                  <ul>
                    <li>Buat akun pelanggan</li>
                    <li>Entri data produk yang ingin di beli oleh pelanggan.</li>
                    <li>Cetak nota.</li>
                  </ul>

                  <h4>Pelanggan</h4>

                  <ul>
                    <li>Memilih barang pesanan yang ada di toko.</li>
                  </ul>

              </div>

              <div class="modal-footer"><br></div>

            </div>
          </div>
        </div>
        <!-- akhir dari model----->







@endsection