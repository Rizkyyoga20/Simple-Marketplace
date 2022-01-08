
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Storage::url('storage/gambar/epasien-logo.jpg')}}">
    <script type="text/javascript" src="{{ asset('storage/js/Chart.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>{{ $toko }} | {{ $title }}</title>
  </head>

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


  <body class="bg-primary" style="--bs-bg-opacity: .25;">

    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand text-warning" href="#">
            @guest 
              <h3 style="margin:auto; font-family:Monotype Corsiva; font-weight:bold; font-size:25px;">{{ $toko }}</h3>
            @endguest 
            @auth 
              <h3 style="margin:auto; font-family:Monotype Corsiva; font-weight:bold; font-size:25px;">Akun {{auth()->user()->status_akses }} </h3>
            @endauth
          </a>
            
            @guest

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="{{ url('/fqi') }}">FQI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="{{ url('/pesanan-pelanggan') }}">Pesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="{{ url('/grafik') }}">Grafik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" href="{{ url('/login') }}">Login</a>
            </li>

            @endguest

            @auth

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <div class="dropdown">
              <a class="nav-link active text-white" class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="#">Welcome {{ auth()->user()->name_user }}</a>
          
              <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                  <li class="nav-item">
                    <a class="nav-link active text-white" href="{{ url('/dashboard') }}">Dashboard</a>
                  </li>

                  <hr class="dropdown-divider text-white">
                  
                  <li class="nav-item">
                    <a class="nav-link active text-white" href="{{ url('/akun/vpass') }}">Ubah Password</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active text-white" href="{{ url('/akun/biodata')}}">Biodata</a>
                  </li>
              </ul>
            </div>  
          </ul>

            <ul class="navbar-nav mb-2" style="float:right;">
              <li class="nav-item">
                <form method="POST" action="{{ url('/akun/logout') }}">
                  @csrf
                  <button type="submit" class="nav-link active btn text-white" data-bs-toggle="modal" onclick="return confirm('Are you sure go to Logout!!');" style="border:none; padding-left:10px; padding-top:10px;">
                    <center><img src="{{ asset('storage/web/logout.png')}}" width="20px" height="20px" style="margin-bottom:5px;"></center> 
                  </button>
                </form>
              </li> 
            </ul>

            @endauth

        </div>
      </div>
    </nav>


<br><br><br>

<p class="text-center fixed-bottom bg-info" style="margin:0px; font-weight:bold;">Demo Rizky Prayogo | {{ $toko }}</p>




    <div class="isi p-2" style="margin-bottom:30px;">
      @yield('container')  
    </div>


    <script>
      function myFunction() {
        let input, filter, div, isi, p, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        div = document.getElementById("myMenu");
        isi = div.getElementsByTagName("isi");
        for (i = 0; i < isi.length; i++) {
          p = isi[i].getElementsByTagName("p")[0];
          if (p.innerHTML.toUpperCase().indexOf(filter) > -1) {
            isi[i].style.display = "";
          } else {
            isi[i].style.display = "none";
          }
        }
      }
    </script>
    
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






