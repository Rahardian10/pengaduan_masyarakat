<!doctype html>
<html lang="en">
  <head>
      <title>Cetak Laporan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        
    <center><h1>Laporan Pengaduan</h1></center>
    <br>

    <!-- Collapse -->
    <?php $__currentLoopData = $cetak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="list-unstyled">
                <li class="media">
                <img class="ml-3" src="<?php echo e(asset('image/'. $item->foto)); ?>" height="10%" width="10%" alt="">
                <div class="media-body">
                    <h5 class="mt-0 mb-1 ml-3">Judul : <?php echo e($item->judul); ?></h5>
                    <span class="mt-0 mb-1 ml-3">Nama : <?php echo e($item->masyarakat->nama); ?> | NIK : <?php echo e($item->nik); ?></span><br>
                    <span class="mt-0 mb-1 ml-3">Tanggal Pengaduan : <?php echo e($item->tgl_pengaduan); ?></span><br>
                    <span class="mt-0 mb-1 ml-3">
                        Status : <?php echo e($item->level); ?>

                    </span><br>
                </div>
                </li>        
            </ul>
      <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script type="text/javascript">
    window.print();    
</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Laporan/cetak_laporan.blade.php ENDPATH**/ ?>