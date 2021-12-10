@extends('pages')
@section('title', 'Home')
@section('container')

    @if(session('berhasil'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('berhasil') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
  <div class="p-1">

<h3>Simple Marketplace</h3>

    <div class="form-floating mb-2">
      <input type="text" class="form-control" name="Search.." placeholder="No KTP" id="mySearch" onkeyup="myFunction()" placeholder="Search.."> 
      <label for="floatingInput">Search..</label>
    </div>

<h5 style="font-weight:normal; font-size:13px; margin-top:5px;">Pencarian data pasien</h5>


    <div id="myMenu">
    @foreach( $produks as $produk)
    <isi>

        <div class="card border-success mb-3 link-success">
          <div class="card-header bg-transparent border-success"><b>ID Produk : {{ $produk->id_produk; }}</b></div>
          <div class="card-body text-success">

            <p class="card-text">
            	  <img src="{{ asset('storage/' . $produk->gambar)}}" style="height:150px; width:150px; margin:0px; padding:0px; float:right;">
                  <b> Nama  : </b> <br> {{ $produk->nama_produk; }} <br>
                  <b> Harga  : </b> <br> {{ $produk->harga_produk }} <br>
                  <b> Status : </b> <br> {{ $produk->status_produk }} <br>           
            </p>
          </div>
          <div class="card-footer bg-transparent border-success">


                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $produk->id_produk; }}" style="float:right;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                    <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                  </svg>
                </button>



        </div>
    </div>



<!-- Modal -->
        <div class="modal fade" id="staticBackdrop{{ $produk->id_produk; }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Produk</h5>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                    <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                  </svg>      
                </button>
              </div>

              <div class="modal-body">

            	  <img src="{{ asset('storage/' . $produk->gambar)}}" style="height:150px; width:150px; margin:0px; padding:0px; float:right;"><br>
                  <b> Nama  : </b> <br> {{ $produk->nama_produk; }} <br>
                  <b> Harga  : </b> <br> {{ $produk->harga_produk }} <br>
                  <b> Kategori : </b> <br> {{ $produk->kategori_produk }} <br>
                  <b> Status : </b> <br> {{ $produk->status_produk }} <br>
                  <b> Keterangan : </b> <br> {{ $produk->keterangan_produk }} <br>
                  <b> Stok : </b> <br> {{ $produk->stok }} <br>         

              </div>

              <div class="modal-footer">



                        
              </div>


            </div>
          </div>
        </div>
        <!-- akhir dari model----->



    </isi>      
    @endforeach
  </div>
</div>




@endsection

