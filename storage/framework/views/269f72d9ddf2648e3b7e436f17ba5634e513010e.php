
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengaduan Kemasyarakatan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('user/assets/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('user/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('template-user/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('template-user/assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('template-user/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('template-user/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('template-user/assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('template-user/assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('template-user/assets/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KnightOne - v2.2.1
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="#">Pengaduan Kemasyarakatan</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </nav><!-- .nav-menu -->

          
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>C-Lapor - Buat Laporan Keluhan Anda</h1>
          <h2>Ajukan Laporan Anda Dengan Berbasis Online</h2>
          
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    
    <section id="contact" class="contact">
      <div class="container">
  
        <div class="section-title">
          <h2>Daftar Tabel Pengajuan Anda</h2>
          <a href="/" class="btn btn-warning btn-rounded">Kembali</a>
        </div>
      </div>
  
      <div class="container">
  
        <div class="row mt-5">
  
          <div class="col-lg-12 mt-5 mt-lg-0">
  
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($sts->masyarakat->nama); ?></td>
                        <td><?php echo e($sts->judul); ?></td>
                        <td><?php echo e($sts->tgl_pengaduan); ?></td>
                        <td>
                            <img src="<?php echo e(asset('image/'. $sts->foto)); ?>" height="100px" alt="">
                        </td>
                        
                            <?php if($sts->level == '0'): ?>
                                <td><span class="btn btn-warning btn-sm">Belum Diproses</span></td>
                            <?php elseif($sts->level == 'proses'): ?>
                                <td><span class="btn btn-warning btn-sm">Diproses</span></td>
                            <?php else: ?>
                                <td><span class="btn btn-success btn-sm">Selesai</span></td>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="/masyarakat/detail-pengaduan/<?php echo e($sts->id_pengaduan); ?>" class="btn btn-primary btn-sm"><i class="bx bx-plus"></i></a>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                  </table>
            </div>

          </div>
  
        </div>
  
      </div>
    </section>

   

  </main>
  <!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('template-user/assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template-user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template-user/assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template-user/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('template-user/assets/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template-user/assets/vendor/counterup/counterup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template-user/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template-user/assets/vendor/venobox/venobox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('template-user/assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('template-user/assets/js/main.js')); ?>"></script>
  <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'message' );
</script>
</body>

</html><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Masyarakat/status_tabel.blade.php ENDPATH**/ ?>