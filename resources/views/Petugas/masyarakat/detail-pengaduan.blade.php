@extends('templates.petugas')

@section('title')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Detail Pengaduan <small>.</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <a href="/petugas/pengaduan" class="btn btn-secondary btn-sm">Kembali</a>
                <hr>
                <form class="" action="/petugas/tanggapan" method="post" novalidate>
                    {{ csrf_field() }}
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Foto<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <img src="{{asset('image/'. $detail->foto)}}" height="100%" width="30%" alt="">
                        </div>
                    </div>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <p>
                                @if($detail->level == '0')
                                  <td><span class="btn btn-warning btn-sm">Belum Diproses</span></td>
                                @elseif($detail->level == 'proses')
                                  <td><span class="btn btn-warning btn-sm">Diproses</span></td>
                                @else
                                <td><span class="btn btn-success btn-sm">Selesai</span></td>
                                @endif</p> 
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="email" class='email' type="email" value="{{ $detail->tgl_pengaduan }}"  readonly/>
                        </div>
                    </div>
                   
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">NIK<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="email" class='email' type="email" value="{{ $detail->masyarakat->nik }}"  readonly/>  
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Judul<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="tel" class='tel' name="telp" value="{{ $detail->judul }}" readonly/>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Isi Laporan<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <p>{!!$detail->isi_laporan!!}</p>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="tel" class='tel' name="id_pengaduan" value="{{$detail->id_pengaduan}}" hidden/>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="tel" class='tel' name="id_petugas" value="{{auth()->user()->id_petugas}}" hidden/>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Petugas Tanggapan<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            @foreach($detail->tanggapan as $t)
                            <input class="form-control" type="tel" class='tel' name="telp" value="{{ $t->petugas->nama_petugas }}" readonly/>
                            @endforeach
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggapan<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            @foreach($detail->tanggapan as $t)
                            <p>{!!$t->tanggapan!!}</p>
                            @endforeach
                        </div>
                    </div>
                    </div>   
                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                @if($detail->level == '0')
                                    <button type="submit" onclick="return confirm('Apakah Anda akan Proses ?')" class="btn btn-warning btn-sm">DiProses</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        Tanggapi
                                    </button>
                                @elseif($detail->level == 'proses')
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        Tanggapi
                                    </button>
                                @else
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        Tanggapi
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

{{-- Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tanggapi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="/petugas/tanggapi" method="post" id="search_form">
        @csrf
        <div class="modal-body">
                <div class="form-group" style="display:none;">>
                    <label for="id_pengaduan"></label>
                    <input type="email" class="form-control" name="id_pengaduan"  id="id_pengaduan" placeholder="" value="{{$detail->id_pengaduan}}" required="required" >
                </div>
                <div class="form-group" style="display:none;">>
                    <label for="id_petugas"></label>
                    <input type="email" class="form-control" name="id_petugas"  id="id_petugas" placeholder="" value="{{auth()->user()->id_petugas}}" required="required" >
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Example textarea</label>
                  <textarea class="form-control" name="tanggapan" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button onclick="form_submit()" type="submit" class="btn btn-primary">Ditanggapi</button>
            </div>
        </div>
    </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function form_submit() {
      document.getElementById("search_form").submit();
     }    
    </script>
@endsection