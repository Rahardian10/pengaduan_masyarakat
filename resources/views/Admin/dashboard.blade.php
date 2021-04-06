@extends('templates.main')

@section('title')

@section('content')

{{-- card --}}
  <div class="container">
    <div class="row" style="padding-left: 12px;">
      <div class="card border-primary mb-3" style="max-width: 18rem; margin-right: 10px;">
        <div class="card-header">Jumlah Pengaduan</div>
        <div class="card-body text-primary">
          <p class="card-text">{{count($aduan)}}</p>
        </div>
      </div>

      <div class="card border-primary mb-3" style="max-width: 18rem; margin-right: 10px;">
        <div class="card-header">Jumlah tanggapan</div>
        <div class="card-body text-primary">
          <p class="card-text">{{count($tanggapan)}}</p>
        </div>
      </div>

      <div class="card border-primary mb-3" style="max-width: 18rem; margin-right: 10px;">
        <div class="card-header">Jumlah Masyarakat</div>
        <div class="card-body text-primary">
          <p class="card-text">{{count($msy)}}</p>
        </div>
      </div>

      <div class="card border-primary mb-3" style="max-width: 18rem; margin-right: 10px;">
        <div class="card-header">Admin</div>
        <div class="card-body text-primary">
          <p class="card-text">{{count($admin)}}</p>
        </div>
      </div>

      <div class="card border-primary mb-3" style="max-width: 18rem; margin-right: 10px;">
        <div class="card-header">Jumlah Petugas</div>
        <div class="card-body text-primary">
          <p class="card-text">{{count($petugas)}}</p>
        </div>
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