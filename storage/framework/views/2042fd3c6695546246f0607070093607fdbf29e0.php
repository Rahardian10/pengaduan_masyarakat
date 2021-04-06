
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
              <li><a href="#services">Ajukan</a></li>
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
    
    <!-- ======= Services Section ======= -->
 <section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Ajukan Pengaduan</h2>
      <p>Untuk melakukan Pengaduan tekan link <a href="/form-pengaduan"><b>ini<b></a></p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href="/form-pengaduan">Pengaduan Masyarakat</a></h4>
          <p>Laporkan Pengaduan Anda di Form ini</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-category-alt"></i></div>
          <h4><a href="/masyarakat/tabel-pengaduan/<?php echo e(auth()->user()->nik); ?>">Status Pengaduan</a></h4>
          <p>Untuk Melihat Status Pengaduan di halaman ini</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-user"></i></div>
          <h4><a href="/data-user">Data Anda</a></h4>
          <p>Silahkan Ubah Data Anda di halaman ini</p>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- End Services Section -->


<!-- ======= Faq Section ======= -->
<section id="faq" class="faq">
  <div class="container-fluid">

    <div class="row">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content">
          <h3>Frequently Asked <strong>Questions</strong></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
          </p>
        </div>

        <div class="accordion-list">
          <ul>
            <li>
              <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
    </div>

  </div>
</section><!-- End Faq Section -->

   

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <!-- End Footer -->

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

</html><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Masyarakat/view.blade.php ENDPATH**/ ?>