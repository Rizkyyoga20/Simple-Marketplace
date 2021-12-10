@extends('pages')
@section('title')
@section('container')

<center>
<div class="col-sm-6 mb-1 p-2">
    <img src="{{ asset('storage/web/icon-login.png')}}" width="150px" height="150px" style="margin-bottom:5px;">
	<h3 style="margin-bottom:10px; font-family:Monotype Corsiva; font-weight:bold; color:blue; font-size:30px;">Verifikasi Password</h3>
	@if(session()->has('loginError'))
		<div class="alert alert-warning alert-dismissible fade show" role="alert" style="text-align:left;">
		{{ session('loginError') }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif
	<form action="{{ url('/akun/vpass') }}" method="post">

			@csrf

		<input type="hidden" name="email" value="{{ auth()->user()->email }}">

		<div class="form-floating mb-2">
			<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" placeholder="Password Anda" required> 
			<label for="floatingInput">Password Anda</label>
			@error('password')
				<div class="invalid-feedback" style="text-align:left;">
					{{ $message }}
				</div>
			@enderror
		</div>



		<input type="submit" value="Verifikasi" class="btn btn-primary" style="float:right;">
		<br><br><br>
	</form>
	
</div>
</center>

@endsection

