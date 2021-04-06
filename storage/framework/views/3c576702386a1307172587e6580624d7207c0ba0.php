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

    <table class="table" align="center" border="1px" style="width: 95%;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal</th>
            <th scope="col">NIK</th>
            <th scope="col">Foto</th>
            <th scope="col">Isi Laporan</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
          <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($item->judul); ?></td>
            <td><?php echo e($item->masyarakat->nama); ?></td>
            <td><?php echo e($item->tgl_pengaduan); ?></td>
            <td><?php echo e($item->masyarakat->nik); ?></td>
            <td><img src="<?php echo e(asset('image/'. $item->foto)); ?>" height="100px" width="100px" alt=""></td>
            <td><?php echo e($item->isi_laporan); ?></td>
            <?php if($item->level == '0'): ?>
                <td><span>Belum Diproses</span></td>
            <?php elseif($item->level == 'proses'): ?>
                <td><span>Diproses</span></td>
            <?php else: ?>
                <td><span>Selesai</span></td>
            <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>


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
</html><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Laporan/cetak_pdf.blade.php ENDPATH**/ ?>