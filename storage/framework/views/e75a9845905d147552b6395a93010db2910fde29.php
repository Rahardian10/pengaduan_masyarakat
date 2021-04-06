
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
          <h2>Form Pengaduan</h2>
          <p>Tuliskan keluhan anda dibawah ini.</p>
        </div>
      </div>
  
      <div class="container">
  
        <div class="row mt-5">
          <?php if(session('status')): ?>
          <div class="alert alert-success">
              <?php echo e(session('status')); ?>

          </div>
          <?php endif; ?>
          <div class="col-lg-12 mt-5 mt-lg-0">
  
            <form action="/masyarakat/ajukan" method="post" enctype="multipart/form-data" role="form">
              <?php echo e(csrf_field()); ?>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="tgl_pengaduan" class="form-control" id="name" placeholder="Tgl Pengaduan" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo e(date('d-m-Y')); ?>" readonly/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK Anda" data-rule="nik" data-msg="Please enter NIK" value="<?php echo e(auth()->user()->nik); ?>" readonly/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Pengajuan" data-rule="judul" data-msg="Please enter Judul" value=""/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <b>Isi Laporan</b>
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                  <b>Pilih Gambar</b>
                  <input type="file" class="form-control" name="file" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
              </div>
  
               
              <div class="text-center">
                  <button type="submit" class="btn btn-success btn-rounded">Kirim Laporan</button>
              </div>
            </form>
  
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

</html><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Masyarakat/add.blade.php ENDPATH**/ ?>