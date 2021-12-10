@extends('pages')
@section('title')
@section('container')

<div class="p-1">

	<h3>Biodata</h3>

  <p>
    <b>ID Biodata :</b><br>
    {{ auth()->user()->id_user }}
  </p> 
  <p>
    <b>Nama Biodata :</b><br>
    {{ auth()->user()->name_user }}
  </p>
  <p>
    <b>Jenis Kelamin :</b><br>
    {{ auth()->user()->jenis_kelamin }}
  </p>
  <p>
    <b>Status Akses :</b><br>
    {{ auth()->user()->status_akses }}
  </p> 
  <p>
    <b>Kontak :</b><br>
    <b>Email : </b> {{ auth()->user()->email }} | <b> No. Telpon : </b>{{ auth()->user()->no_telepon }}
  </p>  
  <p>
    <b>Alamat:</b><br>
    {{ auth()->user()->alamat }}
  </p> 

</div>



@endsection