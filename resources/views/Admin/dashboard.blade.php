@extends('templates.main')

@section('title')

@section('content')

{{-- card --}}
<div class="row">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Jumlah Pengaduan</h5>
    <p class="card-text">{{count($aduan)}}</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Jumlah Tanggapan</h5>
    <p class="card-text">{{count($tanggapan)}}</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Jumlah Masyarakat</h5>
    <p class="card-text">{{count($msy)}}</p>
  </div>
</div>
</div>

<br>
<div class="jumbotron">
    <h1 class="display-4">Hallo, {{auth()->user()->nama_petugas}}!</h1>
    <p class="lead">Awali pagi mu dengan semangat kerja!!</p>
    <hr class="my-4">
    <p></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Admin</a>
    </p>
  </div>

@endsection