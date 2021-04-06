<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('template-login/fonts/material-icon/css/material-design-iconic-font.min.css')); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo e(asset('template-login/css/style.css')); ?>">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo e(asset('template-login/images/pm2.png')); ?>" alt="sing up image"></figure>
                        <a href="/create-account" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <?php if(session('danger')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('danger')); ?>

                        </div>
                        <?php endif; ?>
                        <h2 class="form-title">Sign In</h2>
                        <form action="/login" method="POST" class="register-form" id="login-form">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="Email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="Email" placeholder="Email Anda"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo e(asset('template-login/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template-login/js/main.js')); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/templates/login.blade.php ENDPATH**/ ?>