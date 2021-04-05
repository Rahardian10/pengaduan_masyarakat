@extends('templates.petugas')

@section('title')

@section('content')

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Pengaduan<small>.</small></h2>
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
        </p>
        
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Judul</th>
              <th>Tanggal</th>
              <th>Foto</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($aduan as $adm)
            <tr>
              <td>{{ $adm->masyarakat->nama }}</td>
              <td>{{ $adm->judul }}</td>
              <td>{{ $adm->tgl_pengaduan }}</td>
              <td><img src="{{asset('image/'. $adm->foto)}}" height="100px" alt=""></td>
                @if($adm->level == '0')
                <td><span class="btn btn-warning btn-sm">Belum Diproses</span></td>
                @elseif($adm->level == 'proses')
                <td><span class="btn btn-warning btn-sm">Proses</span></td>
                @else
                <td><span class="btn btn-success btn-sm">Selesai</span></td>
                @endif
            </td>
              <td>
                <a href="/petugas/detail/pengaduan/{{$adm->id_pengaduan}}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-zoom-in"></i></a>
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