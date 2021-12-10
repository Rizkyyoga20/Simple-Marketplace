<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style type="text/css">

  table.isi tr td {
    padding:3px;
  }

</style>

<body style="page-break-inside: avoid; height: auto; position:static;">


    <div class="p-1">
        <table width="100%">
                <tr>
                    <td width="120px" height="120px"><img src="{{public_path('storage/gambar/epasien-logo.jpg')}}" width="120px"></td>
                    <td align="center" valign="top">
                      <h2 style="top:2px; padding:0px; margin:0px;">Info Pesanan Pelanggan</h2>
                      <h4 style="top:2px; padding:0px; margin:0px 0px 50px 0px;">{{ $toko }}</h4>
                      <h5 style="font-size:11px; padding:0px; margin:0px;">Jln. Tanjung Karang I, Lrg. Merpati, Gg. damai, Nomor. 210 | Telp : 0877-4141-242 / Email : ss21@gmail.com</h5>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="1px" bgcolor="#000"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        
            
            <table width="100%">
                <tr>
                    <td colspan="3" height="100px"></td>
                </tr>
                @foreach($pes as $pesanan)
                @foreach($pelanggans as $p)
                @if($pesanan->id_pelanggan == $p->id_user)

                <tr>
                    <td width="200px" valign="top">ID pelanggan</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">{{ $p->id_user }}</td>
                </tr>
                <tr>
                    <td width="200px" valign="top">Nama pelanggan</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">{{ $p->name_user }}</td>
                </tr>
                <tr>
                    <td width="200px" valign="top">Kontak</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">Eamil : {{ $p->email }} | No. telp : {{ $p->no_telepon }} </td>
                </tr>                
                <tr>
                    <td width="200px" valign="top">Jenis kelamin</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">{{ $p->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td width="200px" valign="top">Alamat</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">{{ $p->alamat }}</td>
                </tr>

                <tr>
                    <td colspan="3" height="30px"></td>
                </tr>

                @endif
                @endforeach

                <tr>
                    <td colspan="3" height="10px"></td>
                </tr>
                <tr>
                    <td width="200px" valign="top">ID pesanan</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">{{ $pesanan->id_pesanan }}</td>
                </tr>
                <tr>
                    <td width="200px" valign="top">Nama produk</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">{{ $pesanan->nama_produk }}</td>
                </tr>
                <tr>
                    <td width="200px" valign="top">Catatan produk</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">{{ $pesanan->catatan_produk }}</td>
                </tr>
                <tr>
                    <td width="200px" valign="top">Status pesanan</td>
                    <td width="50px" valign="top">:</td>
                    <td valign="top">{{ $pesanan->status_pesanan }}</td>
                </tr>

                @endforeach

            </table>


                    </td>
                </tr>
        </table>
    </div>

</body>

</html>