@extends('pages')
@section('title')
@section('container')

<center>
<div class="col-sm-6 mb-1 p-2">
    <img src="{{ asset('storage/web/icon-login.png') }}" width="150px" height="150px" style="margin-bottom:5px;">
	<h3 style="margin-bottom:10px; font-family:Monotype Corsiva; font-weight:bold; color:blue; font-size:30px;">Login</h3>
	@if(session()->has('loginError'))
		<div class="alert alert-warning alert-dismissible fade show" role="alert" style="text-align:left;">
		{{ session('loginError') }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif
	<form action="{{ url('/login/sleksi_log') }}" method="post">

			@csrf

		<div class="form-floating mb-2">
			<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autofocus required> 
			<label for="floatingInput">Email</label>
			@error('email')
				<div class="invalid-feedback" style="text-align:left;">
					{{ $message }}
				</div>
			@enderror
		</div>

		<div class="form-floating mb-2">
			<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" placeholder="Password" required> 
			<label for="floatingInput">Password</label>
			@error('password')
				<div class="invalid-feedback" style="text-align:left;">
					{{ $message }}
				</div>
			@enderror
		</div>



		<input type="submit" value="Login" class="btn btn-primary" style="float:right;">
		<br><br><br>
	</form>
	
</div>
</center>

@endsection

