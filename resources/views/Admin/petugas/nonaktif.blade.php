@extends('templates.main')

@section('title')

@section('content')

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Halaman Nonaktif<small>Petugas</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
        <p class="text-muted font-13 m-b-30">
          <a href="/aktif-all" class="btn btn-info btn-sm">Aktifkan Semua Petugas</a> | 
          <a href="/nonaktif-all" class="btn btn-danger btn-sm">Nonaktifkan Semua Petugas</a>
          <a href="/daftar-petugas" class="btn btn-round btn-secondary btn-sm">Kembali</a>
        </p>
        
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Nama Petugas</th>
              <th>Username</th>
              <th>Password</th>
              <th>Telepon</th>
              <th>Posisi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($nonaktif as $adm)
            <tr>
              <td>{{ $adm->nama_petugas }}</td>
              <td>{{ $adm->username }}</td>
              <td>{{ $adm->password }}</td>
              <td>{{ $adm->telp }}</td>
              <td>{{ $adm->level }}</td>
              <td>
                <a href="/aktif-petugas/{{$adm->id_petugas}}" class="btn btn-success btn-sm">Aktifkan</a> | 
                <a href="/permanent-petugas/{{$adm->id_petugas}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ?')">Nonaktif Permanent</a>
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