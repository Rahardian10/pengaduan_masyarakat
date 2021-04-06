<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\SoftDelete;
use App\Petugas;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;

class PetugasController extends Controller
{

    public function home()
    {
        $aduan = Pengaduan::latest()->get();
        $petugas = Petugas::where('level', 'petugas')->get();
        $tanggapan = Tanggapan::all();
        $msy = Masyarakat::all();
        return view('Admin.dashboard', compact('aduan', 'petugas', 'tanggapan', 'msy'));
    }

    public function table_petugas()
    {
        $admin = Petugas::all()->last()->get();
        return view('Admin.petugas.view', ['admin' => $admin]);
    }

    public function form_petugas()
    {
        $level = ['Admin', 'Petugas'];
        return view('Admin.petugas.add', ['level' => $level]);
    }

    public function edit_petugas($id)
    {
        $edit = Petugas::find($id);
        return view('Admin.petugas.edit', ['edit' => $edit]);
    }

    public function store_petugas(Request $request)
    {
        $this->validate($request, [
            'nama_petugas' => 'required|min:3',
            'username' => 'required',
            'email' => 'required|email|unique:petugas',
            'password' => 'required|min:6',
            'telp' => 'required|numeric|unique:petugas',
            'level' => 'required'
        ]);
      
        Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => $request->level
        ]);
        
        return redirect('/daftar-petugas')->with('status', 'Data Berhasil Di Tambah');
    }

    public function update_petugas(Request $request, $id)
    {
        $this->validate($request, [
            'nama_petugas' => 'required|min:3',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'telp' => 'required|numeric',
            'level' => 'required'
        ]);

        Petugas::where('id_petugas', $id)
        ->update([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => $request->level
        ]);  
        return redirect('/daftar-petugas')->with('status', 'Data Berhasil di Ubah');
    }

    public function nonaktif_petugas($id_petugas)
    {
        $petugas = Petugas::find($id_petugas);
        $petugas->delete();
        return redirect('/daftar-petugas');
    }

    public function daftar_nonaktif()
    {
        $nonaktif = Petugas::onlyTrashed()->get();
        return view('Admin.petugas.nonaktif', ['nonaktif' => $nonaktif]);
    }

    public function aktif_all()
    {
        $aktif = Petugas::onlyTrashed();
        $aktif->restore();
        return redirect('/daftar-petugas');
    }

    public function nonaktif_all()
    {
        $hapus = Petugas::onlyTrashed();
        $hapus->forceDelete();
    
        return redirect('/daftar-petugas');
    }

    public function aktif_petugas($id)
    {
        $trash = Petugas::onlyTrashed()->where('id_petugas', $id);
        $trash->restore();
        return redirect('/daftar-petugas');
    }

    public function hapus_permanent($id)
    {
        $trash = Petugas::onlyTrashed()->where('id_petugas', $id);
        $trash->forceDelete();
    
        return redirect('/daftar-petugas');
    }

    public function view_masyarakat()
    {
        $user = Masyarakat::all()->last()->get();
        return view('Admin.petugas.view_masyarakat', ['user' => $user]);
    }

    public function dashboard()
    {
        $aduan = Pengaduan::latest()->get();
        return view('Petugas.dashboard', compact('aduan'));
    }

    public function profile_admin()
    {
        return view('Admin.profile');
    }

    public function update_profile(Request $request)
    {
        $id = auth()->user()->id_petugas;
        Petugas::where('id_petugas', $id)
        ->update([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => $request->level
        ]);  
        return back();
    }

    public function view_profile()
    {
        return view('Petugas.profile');
    }

    public function petugas_profile(Request $request)
    {
        $id = auth()->user()->id_petugas;
        Petugas::where('id_petugas', $id)
        ->update([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => $request->level
        ]);  
        return back();
    }

    //Tampilan Pengaduan Di Admin
    public function admin_pengaduan_masyarakat()
    {
        $aduan = Pengaduan::latest()->get();
        return view('Admin.petugas.pengaduan', ['aduan' => $aduan]);
    }

    public function admin_detail_pengaduan($id)
    {
        $detail = Pengaduan::find($id);
        return view('Admin.petugas.detail-pengaduan', compact('detail'));
    }

    //Petugas
        //Tampilan Daftar Masyarakat
    public function petugas_daftar_masyarakat()
    {
        $user = Masyarakat::latest()->get();
        return view('Petugas.masyarakat.view_masyarakat', compact('user'));
    }
        //tampilan pengaduan
    public function petugas_pengaduan()
    {
        $aduan = Pengaduan::latest()->get();
        return view('Petugas.masyarakat.pengaduan', ['aduan' => $aduan]);
    }
    
    public function petugas_detail_pengaduan($id)
    {
        $detail = Pengaduan::find($id);
        return view('Petugas.masyarakat.detail-pengaduan', compact('detail'));
    }

    //tanggapan
    public function store_tanggapan(Request $request)
    {
        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => date("Y-m-d"),
            'tanggapan' => 'Laporan anda sedang kami proses',
            'id_petugas' => $request->id_petugas
        ]);

        Pengaduan::where('id_pengaduan', $request->id_pengaduan)->update([
            'level' => 'proses'
        ]);
        
        return redirect('/petugas/pengaduan')->with('status', 'Status Berhasil Di Ubah');
    }

    public function store_tanggapi(Request $request)
    {
        Tanggapan::updateOrCreate(
            ['id_pengaduan'=> $request->id_pengaduan],
        [
            'tgl_tanggapan' => date("Y-m-d"),
            'tanggapan' => $request->tanggapan,
            'id_petugas' => $request->id_petugas
        ]
        );

        Pengaduan::where('id_pengaduan', $request->id_pengaduan)->update([
            'level' => 'selesai'
        ]);

        return redirect('/petugas/pengaduan')->with('status', 'Status Berhasil Di Ubah');
    }

    public function admin_tanggapi(Request $request)
    {
        Tanggapan::updateOrCreate(
            ['id_pengaduan'=> $request->id_pengaduan],
        [
            'tgl_tanggapan' => date("Y-m-d"),
            'tanggapan' => $request->tanggapan,
            'id_petugas' => $request->id_petugas
        ]
        );

        Pengaduan::where('id_pengaduan', $request->id_pengaduan)->update([
            'level' => 'selesai'
        ]);
    
        return redirect('/admin/pengaduan')->with('status', 'Status Berhasil Di Ubah');
    }

    public function admin_proses_tanggapi(Request $request)
    {
        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => date("Y-m-d"),
            'tanggapan' => 'Laporan anda sedang kami proses',
            'id_petugas' => $request->id_petugas
        ]);

        Pengaduan::where('id_pengaduan', $request->id_pengaduan)->update([
            'level' => 'proses'
        ]);
        
        return redirect('/admin/pengaduan')->with('status', 'Status Berhasil Di Ubah');
    }
}
