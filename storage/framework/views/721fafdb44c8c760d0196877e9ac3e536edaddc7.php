

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>


<div class="row">
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Jumlah Pengaduan</div>
    <div class="card-body text-primary">
      <p class="card-text"><?php echo e(count($aduan)); ?></p>
    </div>
  </div>

  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Jumlah tanggapan</div>
    <div class="card-body text-primary">
      <p class="card-text"><?php echo e(count($tanggapan)); ?></p>
    </div>
  </div>

  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Jumlah Masyarakat</div>
    <div class="card-body text-primary">
      <p class="card-text"><?php echo e(count($msy)); ?></p>
    </div>
  </div>

  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Admin</div>
    <div class="card-body text-primary">
      <p class="card-text"><?php echo e(count($admin)); ?></p>
    </div>
  </div>

  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Jumlah Petugas</div>
    <div class="card-body text-primary">
      <p class="card-text"><?php echo e(count($petugas)); ?></p>
    </div>
  </div>
</div>

<br>
<div class="jumbotron">
    <h1 class="display-4">Hallo, <?php echo e(auth()->user()->nama_petugas); ?>!</h1>
    <p class="lead">Awali pagi mu dengan semangat kerja!!</p>
    <hr class="my-4">
    <p></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Admin</a>
    </p>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Admin/dashboard.blade.php ENDPATH**/ ?>