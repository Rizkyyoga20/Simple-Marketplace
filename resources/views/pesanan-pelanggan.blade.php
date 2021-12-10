@extends('pages')
@section('title', 'Home')
@section('container')
    
  <div class="p-1">

<h3>{{ $title }}</h3>

    <div class="form-floating mb-2">
      <input type="text" class="form-control" name="Search.." placeholder="No KTP" id="mySearch" onkeyup="myFunction()" placeholder="Search.."> 
      <label for="floatingInput">Search..</label>
    </div>


    <div id="myMenu">
    @foreach( $pelanggans as $pelanggan)
    <isi>

        <div class="card border-success mb-3 link-success">
          <div class="card-header bg-transparent border-success"><b>ID Pelanggan : {{ $pelanggan->id_user }}</b></div>
          <div class="card-body text-success">
            <p class="card-text">
                  <b> Nama  : </b> <br> {{ $pelanggan->name_user }} <br>
                  <b> No Telp : </b> <br> {{ $pelanggan->no_telepon }} <br>           
                  <b> Jenis Kelamin : </b> <br> {{ $pelanggan->jenis_kelamin }} <br>           
                  <b> Alamat : </b> <br> {{ $pelanggan->alamat }} <br>           
            </p>
          </div>
          <div class="card-footer bg-transparent border-success">


                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $pelanggan->id_user }}" style="float:right;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                    <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                  </svg>
                </button>



        </div>
    </div>



<!-- Modal -->
        <div class="modal fade" id="staticBackdrop{{ $pelanggan->id_user; }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

                  <button type="button" class="btn btn-primary" style="margin-bottom:10px; float:right;">
                    <a href="{{url('/print_pesanan_pelanggan',$pelanggan->id_user)}}" style="text-decoration:none; color:#fff;" target="_blank">Print All</a>
                  </button>


              	  <b> ID Pelanggan :</b> <br>{{ $pelanggan->id_user }}<br>
              	  <b> Nama  : </b> <br> {{ $pelanggan->name_user }} <br>
                  <b> No Telp : </b> <br> {{ $pelanggan->no_telepon }} <br>           
                  <b> Jenis Kelamin : </b> <br> {{ $pelanggan->jenis_kelamin }} <br>           
                  <b> Alamat : </b> <br> {{ $pelanggan->alamat }} <br> 

                
                @foreach ($pesanans as $pesanan)     

	                @if( $pelanggan->id_user == $pesanan->id_pelanggan )

	                	<hr>
	                	<b> Nama Produk  : </b> <br>{{ $pesanan->nama_produk }}<br>
	                	<b> Harga Produk  : </b> <br>{{ $pesanan->harga_produk }}<br>
	                	<b> Catatan Pesanan  : </b> <br>{{ $pesanan->catatan_produk }}<br>
	                	<b> Status Pesanan  : </b> <br>{{ $pesanan->status_pesanan }}<br>
                  
                  <button type="button" class="btn btn-primary" style="margin:10px 0px;">
                    <a href="{{url('/print_pesanan',$pesanan->id_pesanan)}}" style="text-decoration:none; color:#fff;" target="_blank">Print</a>
                  </button>

	                @endif	

              	@endforeach 

              	
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

