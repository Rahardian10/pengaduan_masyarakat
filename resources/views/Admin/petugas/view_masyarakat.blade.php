@extends('templates.main')

@section('title')

@section('content')

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Masyarakat<small>.</small></h2>
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
            {{--  --}}
        </p>
        
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>NIK</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Telepon</th>
              {{-- <th>Aksi</th> --}}
            </tr>
          </thead>
          <tbody>
              @foreach ($user as $item)
            <tr>
              <td>{{ $item->nik }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->username }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->telp }}</td>
              {{-- <td>
                <a href="" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-sm">Nonaktif</a> |
                <a href="" class="btn btn-success btn-sm">Ubah Data</a>
              </td> --}}
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