@extends('templates.main')

@section('title')

@section('content')

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Petugas<small>.</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">       
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
        <p class="text-muted font-13 m-b-30">
          <a href="/tambah-petugas" class="btn btn-primary btn-sm">Tambah Petugas</a> |
          <a href="/daftar-nonaktif" class="btn btn-warning btn-sm">Petugas Nonaktif</a>
        </p>
        
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Nama Petugas</th>
              <th>Username</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Posisi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($admin as $adm)
            <tr>
              <td>{{ $adm->nama_petugas }}</td>
              <td>{{ $adm->username }}</td>
              <td>{{ $adm->email }}</td>
              <td>{{ $adm->telp }}</td>
              <td>{{ $adm->level }}</td>
              <td>
                <a href="/nonaktif/{{ $adm->id_petugas }}" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-sm">Nonaktif</a> |
                <a href="/edit-petugas/{{ $adm->id_petugas }}" class="btn btn-success btn-sm">Ubah Data</a>
              </td>
            </tr>
              @endforeach  
          </tbody>
        </table>
        
        
      </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection