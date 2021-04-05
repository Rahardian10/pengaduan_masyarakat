@extends('templates.main')

@section('title')

@section('content')
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