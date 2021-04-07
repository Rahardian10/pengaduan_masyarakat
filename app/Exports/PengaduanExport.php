<?php

namespace App\Exports;

use App\Pengaduan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PengaduanExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Pengaduan::all();
    // }

    public function view(): View
    {
        return view('Laporan.pengaduan', [
            'pengaduan' => Pengaduan::all()
        ]);
    }

    // public function map($pengaduan):array
    //     {
    //         return [
    //             //data yang dari kolom tabel database yang akan diambil
    //             $pengaduan->tgl_pengaduan,
    //             $pengaduan->nik,
    //             $pengaduan->judul,
    //             $pengaduan->isi_laporan,
    //             $pengaduan->level,
    //         ];
    //     }

    // public function headings(): array
    // {
    //     return[
    //         'Tanggal Pengaduan',
    //         'NIK',
    //         'judul',
    //         'Isi Laporan',
    //         'Status'
    //     ];
    // }
}
