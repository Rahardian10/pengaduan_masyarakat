<?php

namespace App\Http\Controllers;

use App\Exports\PengaduanExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Petugas;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;
use PDF;

class CetakController extends Controller
{
    public function view_cetak()
    {
        return view('Laporan.dashboard_cetak');
    }

    //cetak semua laporan
    public function cetakAll()
    {
        $cetak = Pengaduan::latest()->get();
        return view('Laporan.cetak_laporan', ['cetak' => $cetak]);
    }

    public function cetak_tabel()
    {
        $cetak = Pengaduan::latest()->get();
        return view('Laporan.cetak_tabel', ['cetak' => $cetak]);
    }

    public function cetak_tanggal($tglAwal, $tglAkhir)
    {
        $cetak_tanggal = Pengaduan::whereBetween('tgl_pengaduan',[$tglAwal, $tglAkhir])->latest()->get();
        return view('Laporan.cetak_tanggal', ['cetak_tanggal' => $cetak_tanggal]);
    }

    public function export() 
    {
        return Excel::download(new PengaduanExport, 'pengaduan.xlsx');
    }

    public function cetak_pdf()
    {
        $pengaduan = Pengaduan::latest()->get();

        $pdf = PDF::loadview('Laporan.cetak_pdf', ['pengaduan' => $pengaduan]);
        return $pdf->download('laporan-pengaduan-pdf');
    }
}
