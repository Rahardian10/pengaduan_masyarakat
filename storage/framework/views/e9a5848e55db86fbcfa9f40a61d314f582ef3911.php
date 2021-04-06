<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('template-login/fonts/material-icon/css/material-design-iconic-font.min.css')); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo e(asset('template-login/css/style.css')); ?>">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                      
                  <?php if(session('status')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session('status')); ?>

                  </div>
                <?php endif; ?>
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="/register" class="register-form" id="register-form">
                          <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="nik"><i class="zmdi zmdi-dns"></i></label>
                                <input type="text" name="nik" id="nik" placeholder="NIK Anda" autocomplete="off" value="<?php echo e(old('nik')); ?>"/>
                                <?php if($errors->has('nik')): ?>
                                  <div class="text-danger">
                                      <?php echo e($errors->first('nik')); ?>

                                  </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Nama Anda" autocomplete="off" value="<?php echo e(old('nama')); ?>" />
                                <?php if($errors->has('nama')): ?>
                                  <div class="text-danger">
                                      <?php echo e($errors->first('nama')); ?>

                                  </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                              <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input type="text" name="username" id="username" placeholder="contoh : rahma" autocomplete="off" value="<?php echo e(old('username')); ?>"/>
                              <?php if($errors->has('username')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('username')); ?>

                                </div>
                              <?php endif; ?>
                            </div>
                            <div class="form-group">
                              <label for="email"><i class="zmdi zmdi-email"></i></label>
                              <input type="email" name="email" id="email" placeholder="Email Anda" value="<?php echo e(old('email')); ?>"/>
                              <?php if($errors->has('email')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('email')); ?>

                                </div>
                              <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Buat Password Anda"/>
                                <?php if($errors->has('password')): ?>
                                  <div class="text-danger">
                                      <?php echo e($errors->first('password')); ?>

                                  </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="telp"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="telp" id="telp" placeholder="Masukkan Nomor Telp Anda" autocomplete="off" value="<?php echo e(old('telp')); ?>"/>
                                <?php if($errors->has('telp')): ?>
                                  <div class="text-danger">
                                      <?php echo e($errors->first('telp')); ?>

                                  </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                            
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo e(asset('template-login/images/pm3.png')); ?>" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="<?php echo e(asset('template-login/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template-login/js/main.js')); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/templates/register.blade.php ENDPATH**/ ?>