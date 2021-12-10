<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>{{ $toko }} | {{ $title }}</title>
  </head>
  <body class="bg-success" style="--bs-bg-opacity: .25;">


<script type="text/javascript">
      function isNumber(evt)
        {
          var charCode = (evt.width) ? evt.width : event.keyCode
          if(charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
          return true;
        }
  </script>

<style type="text/css">
  ::-webkit-scrollbar {
    width:5px;
    background:#fff;
    -webkit-border-radius:0px;
    border-radius:10px;
    overflow-x:hidden; 
}

::-webkit-scrollbar-thumb {
    background:#1E90FF;
    -webkit-border-radius:0px;
    border-radius:10px;
}


::placeholder {
    color: #000;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #000;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: #000;
}
</style>

<center>
<div class="col-sm-6 mb-1 p-2">
  <form action="{{ url('/akun/pendaftaran',$user->id) }}" method="post">

    <a href="{{ url('/data_akun') }}">
        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close" style="float:right;">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
            <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
          </svg>      
        </button>
      </a><br><br>

    <img src="{{ asset('storage/web/man.png')}}" width="150px" height="150px" style="margin-bottom:5px;">
    <h3 style="margin-bottom:10px; font-family:Monotype Corsiva; font-weight:bold; color:blue; font-size:30px;">Pendaftaran Pelanggan</h3>

      @csrf
      @method('put')
    <div class="form-floating mb-2">
      <input type="text" class="form-control @error('id_user') is-invalid @enderror" name="id_user" value="{{ $user->id_user }}" placeholder="No KTP" onkeypress="return isNumber(event)" maxlength="16"> 
      <label for="floatingInput">ID User</label>
      @error('id_user')
        <div class="invalid-feedback" style="text-align:left;">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-floating mb-2">
      <input type="text" class="form-control @error('name_user') is-invalid @enderror" name="name_user" value="{{ $user->name_user }}" placeholder="Username"> 
      <label for="floatingInput">Username</label>
      @error('name_user')
        <div class="invalid-feedback" style="text-align:left;">
          {{ $message }}
        </div>
      @enderror
    </div> 

    <div class="form-floating mb-2">
      <select name="jenis_kelmain" class="form-control @error('jenis_kelmain') is-invalid @enderror">
        <option value="{{ $user->jenis_kelamin }}">{{ $user->jenis_kelamin }}</option>
        <option value="Laki-laki">Laki-laki</option>        
        <option value="Perempuan">Perempuan</option>
      </select>
      <label for="floatingInput">Pilih Jenis Kelamin</label>
      @error('jenis_kelmain')
        <div class="invalid-feedback" style="text-align:left;">
          {{ $message }}
        </div>
      @enderror
    </div>


    <div class="form-floating mb-2">
      <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $user->no_telepon }}" placeholder="No Telepon" onkeypress="return isNumber(event)" maxlength="13"> 
      <label for="floatingInput" style="text-align:left;">No Telepon</label>
      @error('no_telepon')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>


    <div class="form-floating mb-2">
      <select name="status_akses" class="form-control @error('status_akses') is-invalid @enderror">
        <option value="{{ $user->status_akses }}">{{ $user->status_akses }}</option>
        <option value="Admin Utama">Admin Utama</option>        
        <option value="Kasir">Kasir</option>
        <option value="Pelanggan">Pelanggan</option>
      </select>
      <label for="floatingInput">Pilih Status Akses</label>
      @error('status_akses')
        <div class="invalid-feedback" style="text-align:left;">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-floating mb-2">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" placeholder="Email"> 
      <label for="floatingInput" style="text-align:left;">Email</label>
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-floating mb-2">
      <input type="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $user->alamat }}" placeholder="Email"> 
      <label for="floatingInput" style="text-align:left;">Alamat</label>
      @error('alamat')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
  


    <input type="submit" value="Daftar" class="btn btn-primary" style="float:right;">
    <br><br><br>

</form>


</div>
</center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>