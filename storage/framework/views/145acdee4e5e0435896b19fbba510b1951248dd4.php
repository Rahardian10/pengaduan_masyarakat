

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>
<div class="jumbotron">
    
    <p class="lead">
      <a target="_blank" class="btn btn-primary btn-rounded" href="/admin/cetak-tabel" role="button">Cetak Tabel</a> | 
      <a target="_blank" href="/admin/cetak-pdf" class="btn btn-danger btn-rounded">PDF</a>
      <a class="btn btn-success btn-rounded" href="/admin/excel" role="button">Excel</a>
    </p>
    <hr>

    

  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Laporan/dashboard_cetak.blade.php ENDPATH**/ ?>