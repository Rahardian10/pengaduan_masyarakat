<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pengaduan Kemasyarakatan</title>
    <style type="text/css">
        form{
            margin: 45px;
        }
    </style>
  </head>
  <body>
    
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-dark">
        <span class="navbar-brand mb-0 h1" style="color: white;">Profile</span>
        <a href="/data-user" class="btn btn-warning my-2 my-sm-0">Kembali</a>
    </nav>

    <br>

    {{-- form --}}
    <form action="/update-user" method="POST">
        {{ method_field('PATCH')}}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputAddress2">NIK</label>
            <input type="text" class="form-control" name="nik" id="inputAddress2" placeholder="" value="{{auth()->user()->nik}}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Nama</label>
            <input type="text" class="form-control" name="nama" id="inputAddress2" placeholder="" value="{{auth()->user()->nama}}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Username</label>
            <input type="text" class="form-control" name="username" id="inputAddress2" placeholder="" value="{{auth()->user()->username}}">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value="{{auth()->user()->email}}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" value="{{auth()->user()->password}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Telephone</label>
          <input type="text" class="form-control" id="inputAddress" name="telp" placeholder="1234 Main St" value="{{auth()->user()->telp}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>

    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>