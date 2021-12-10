@extends('pages')
@section('title')
@section('container')


	<h3>Data Akun</h3>

    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-bottom:5px;">
        <a href="{{ url('/akun') }}" style="text-decoration:none; color:#fff;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M9.636 13.5a.5.5 0 0 1-.5.5H2.5A1.5 1.5 0 0 1 1 12.5v-10A1.5 1.5 0 0 1 2.5 1h10A1.5 1.5 0 0 1 14 2.5v6.636a.5.5 0 0 1-1 0V2.5a.5.5 0 0 0-.5-.5h-10a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h6.636a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M5 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H6.707l8.147 8.146a.5.5 0 0 1-.708.708L6 6.707V10.5a.5.5 0 0 1-1 0v-5z"/>
            </svg>
            Pendaftaran
        </a>
    </button>

    <div class="form-floating mb-2">
      <input type="text" class="form-control" name="Search.." placeholder="No KTP" id="mySearch" onkeyup="myFunction()" placeholder="Search.."> 
      <label for="floatingInput">Search..</label>
    </div>

    <h5 style="font-weight:normal; font-size:13px; margin-top:5px;">Pencarian data pendaftaran</h5>


  @if(session('berhasil'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('berhasil') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

    <div id="myMenu">
    @foreach( $akuns as $akun)
    <isi>

        <div class="card border-success mb-3 link-success">
          <div class="card-header bg-transparent border-success"><b>{{ $akun->name_user; }}</b></div>
          <div class="card-body text-success">
            <p class="card-text">
                  <b> ID User : </b> <br> {{ $akun->id_user; }} <br>
                  <b> Nama User : </b> <br> {{ $akun->name_user; }} <br>
				          <b> Status Akses : </b> <br> {{ $akun->status_akses; }} <br>
            </p>
          </div>
          <div class="card-footer bg-transparent border-success" style="text-align:right;">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $akun->id; }}" style="float:right;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                    <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                  </svg>
                </button>
        </div>
    </div>



        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop{{ $akun->id; }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Akun</h5>
                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                    <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                  </svg>      
                </button>
              </div>
              <div class="modal-body">
                  <b> ID User : </b> <br> {{ $akun->id_user; }} <br>
                  <b> Nama User : </b> <br> {{ $akun->name_user; }} <br>
                  <b> Jenis Kelamin : </b> <br> {{ $akun->jenis_kelamin; }} <br>
                  <b> Alamat : </b> <br> {{ $akun->alamat; }} <br>
                  <b> Kontak : </b> <br> Email : {{ $akun->email; }} | No. Telepon : {{ $akun->no_telepon; }}<br>
                  <b> Status Akses : </b> <br> {{ $akun->status_akses; }} <br>
                  <b> Tanggal Terdaftar : </b> <br> {{ $akun->created_at; }} <br>

              </div>

              <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" style="float:right; margin-left:2px;">
                    <a href="{{ url('/akun/tampil',$akun->id ) }}" style="color:#fff;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                      </svg>
                    </a>
                </button>

                <form method="POST" action="{{ url('/akun/hapus',$akun->id ) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" style="float:right; margin-left:2px;" onclick="return confirm('Are you sure..??');">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg>
                    </button>
                </form>
            
                        
              </div>


            </div>
          </div>
        </div>
        <!-- akhir dari model----->




    </isi>
    @endforeach
  </div>



@endsection