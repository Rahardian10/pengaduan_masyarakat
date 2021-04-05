@extends('templates.main')

@section('title')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Petugas <small>.</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <a href="/daftar-petugas" class="btn btn-secondary btn-sm">Kembali</a>
                <hr>
                <form class="" action="/store-petugas" method="post" novalidate>
                    {{ csrf_field() }}
                    <span class="section">Info Personal</span>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Petugas<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="nama_petugas" placeholder="" value="{{ old('nama_petugas') }}"/>
                            @if($errors->has('nama_petugas'))
                            <div class="text-danger">
                                {{ $errors->first('nama_petugas')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="username" class='email' type="email" autocomplete="off" value="{{ old('username') }}"/>
                            @if($errors->has('username'))
                            <div class="text-danger">
                                {{ $errors->first('username')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="email" class='email' type="email" value="{{ old('email') }}"/>
                            @if($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email')}}
                            </div>
                            @endif
                        </div>
                    </div>
                   
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="password" id="password1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" />
                            @if($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password')}}
                            </div>
                            @endif
                            
                            <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
                                <i id="slash" class="fa fa-eye-slash"></i>
                                <i id="eye" class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="tel" class='tel' name="telp" value="{{ old('telp') }}"/>
                            @if($errors->has('telp'))
                            <div class="text-danger">
                                {{ $errors->first('telp')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" name="level" id="">
                                <option value="">--level--</option>
                                @foreach ($level as $item)
                                <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('level'))
                            <div class="text-danger">
                                {{ $errors->first('level')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <button type='submit' class="btn btn-primary">Submit</button>
                                <button type='reset' class="btn btn-success">Reset</button>
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
    
@endsection