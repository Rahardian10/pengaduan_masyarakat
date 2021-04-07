@extends('templates.main')

@section('title')

@section('content')
<div class="jumbotron">
    
    <p class="lead">
      <a target="_blank" class="btn btn-primary btn-rounded" href="/admin/cetak-tabel" role="button">Cetak Tabel</a> | 
      <a target="_blank" href="/admin/cetak-pdf" class="btn btn-danger btn-rounded">PDF</a>
      <a class="btn btn-success btn-rounded" href="/admin/excel" role="button">Excel</a>
    </p>
    <hr>

    {{-- <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Tgl Awal</span>
      </div>
      <input type="date" name="tglAwal" id="tglAwal" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Tgl Akhir</span>
      </div>
      <input type="date" name="tglAkhir" id="tglAkhir" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
      <a href="" onclick="this.href='/admin/cetak-tanggal/'+ document.getElementById('tglAwal').value +
      '/' + document.getElementById('tglAkhir').value" target="_blank" class="btn btn-primary col-md-12">Cetak Laporan PerTanggal</a>
    </div> --}}

  </div>

@endsection