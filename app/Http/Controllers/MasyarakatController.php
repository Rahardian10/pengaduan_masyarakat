<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Pengaduan;
use App\Masyarakat;
use App\Tanggapan;
use App\Petugas; 

class MasyarakatController extends Controller
{
    public function view_login()
    {
        return view('templates.login');
    }

    public function view_regis()
    {
        return view('templates.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|numeric|unique:masyarakats',
            'nama' => 'required|min:3',
            'username' => 'required|unique:masyarakats',
            'email' => 'required|email|unique:masyarakats',
            'password' => 'required|min:6',
            'telp' => 'required|numeric|unique:masyarakats'
        ]);
      
        Masyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);
        
        return back()->with('status', 'Daftar Anda Berhasil');
    }

    public function view_user()
    {
        return view('Masyarakat.view');
    }

    public function form_user()
    {
        return view('Masyarakat.add');
    }

    public function ubah_diri()
    {
        return view('Masyarakat.profile');
    }

    public function form_update()
    {
        return view('Masyarakat.edit');
    }

    public function update_user(Request $request)
    {
        $nik = auth()->user()->nik;
        Masyarakat::where('nik', $nik)
        ->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);  
        return redirect('/data-user')->with('status', 'Data Berhasil di Ubah');
    }

    //Proses pengaduan
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:5',
            'message' => 'required|min:15',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imgName = $request->file->getClientOriginalName() . '-' . time() . '-' . $request->file->extension();
        $request->file->move(public_path('image'), $imgName);

        Pengaduan::create([
            'tgl_pengaduan' => date("Y-m-d"),
            'nik' => $request->nik,
            'judul' => $request->judul,
            'isi_laporan' => $request->message,
            'foto' => $imgName,
            'level' => '0'
        ]);
        
        return back()->with('status', 'Laporan Anda Berhasil');
    }

    //tampilan status pengaduan
    public function status_tabel($nik)
    {
        $status = Pengaduan::where('nik', $nik)->latest()->get();
        return view('Masyarakat.status_tabel', ['status' => $status]);
    }

    public function detail_pengaduan($id)
    {
        $aduan = Pengaduan::find($id);
        return view('Masyarakat.detail_aduan', ['aduan' => $aduan]);
    }
}
