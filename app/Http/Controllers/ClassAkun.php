<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Produk;


class ClassAkun extends Controller
{

   public function Login()
    {
        $toko = "Script Sports";
        $title = "Login";
        return view('akun.login', compact(['toko','title']));
    }


   public function dashboard()
    {
        $toko = "Script Sports";
        $title = "Dashboard";
        return view('akun.dashboard', compact(['toko','title']));
    }

   public function biodata()
    {
        $toko = "Script Sports";
        $title = "Biodata";
        return view('akun.biodata', compact(['toko','title']));
    }
    
    public function SleksiLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required',],
        ]);
        
         if (Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->with('berhasil', 'Berhasil Login');
        }

        return back()->with('loginError', 'Password salah, anda gagal login');
    }

   public function vpass()
    {
        $toko = "Script Sports";
        $title = "Verifikasi Password";
        return view('akun.verifikasi-password', compact(['toko','title']));
    }

   public function upass()
    {
        $toko = "Script Sports";
        $title = "Password Baru";
        return view('akun.password-baru', compact(['toko','title']));
    }

    public function vpasss(Request $request)
    {
        $sleksi = $request->validate([
            'password' => ['password',],
        ]);
        
         if ($sleksi){
            return redirect('upass')->with('berhasil', 'Berhasil melakukan verifikasi');
        }else{
            return redirect('vpass')->with('gagal', 'Gagal melakukan verifikasi');
        }
    }

    public function upasss(Request $request,$id)
    {
        $data = $request->validate([
            'password' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);

        $akuns = User::find($id);
        $akuns->update($data);
        return redirect('dashboard')->with('berhasil', 'Berhasil ubah password'); 
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('berhasil', 'Berhasil keluar dari halaman akun');
    }

    public function pendaftaran()
    {
        $toko = "Script Sports";
        $title = "pendaftaran";
        return view('akun.pendaftaran', compact(['toko','title']));
    }

    public function data_akun()
    {   
        $akuns = User::all();
        $toko = "Script Sports";
        $title = "Data Akun";
        return view('akun.data-akun', compact(['toko','title','akuns']));
    }

    public function daftar(Request $request)
    {
        $data = $request->validate([
            'id_user' => 'required|unique:users|max:16',
            'name_user' => 'required',
            'password' => 'required',
            'jenis_kelmain' => 'required',
            'no_telepon' => 'required|unique:users',
            'status_akses' => 'required',
            'email' => 'required|unique:users',
            'alamat' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect('data_akun')->with('berhasil', 'Berhasil melakukan pendaftaran'); 
    }

    public function ViewPendaftaran($id)
    {
        $toko = "Script Sports";
        $title = "Edit Pendaftaran";
        $user = User::find($id);
        return view('akun.edit-pendaftar', compact(['toko','title','user'])); 
    }

    public function EditPendaftaran(Request $request,$id)
    {

        $data = $request->validate([
            'id_user' => 'required',
            'name_user' => 'required',
            'jenis_kelmain' => 'required',
            'no_telepon' => 'required',
            'status_akses' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $user = User::find($id);
        $user->update($data);
        return redirect('data_akun')->with('berhasil', 'Berhasil update pendaftaran'); 
    }

    public function delete_akun(Request $request, $id)
    {
        $akuns = User::find($id);
        $akuns->delete($request->all());
        return redirect('data_akun')->with('berhasil', 'Data akun berhasil hapus');
    }

}
