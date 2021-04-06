

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>
    
<div class="jumbotron">
    <h1 class="display-4">Hallo, <?php echo e(auth()->user()->nama_petugas); ?>!</h1>
    <p class="lead">Awali pagi mu dengan semangat kerja!!</p>
    <hr class="my-4">
    <p></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Petugas</a>
    </p>
  </div>

  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Pengaduan<small>.</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">       
        <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
        <p class="text-muted font-13 m-b-30">
        </p>
        
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Judul</th>
              <th>Tanggal</th>
              <th>Foto</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php $__currentLoopData = $aduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($adm->masyarakat->nama); ?></td>
              <td><?php echo e($adm->judul); ?></td>
              <td><?php echo e($adm->tgl_pengaduan); ?></td>
              <td><img src="<?php echo e(asset('image/'. $adm->foto)); ?>" height="100px" alt=""></td>
                <?php if($adm->level == '0'): ?>
                <td><span class="btn btn-warning btn-sm">Belum Diproses</span></td>
                <?php elseif($adm->level == 'proses'): ?>
                <td><span class="btn btn-warning btn-sm">Diproses</span></td>
                <?php else: ?>
                <td><span class="btn btn-success btn-sm">Selesai</span></td>
                <?php endif; ?>
            </td>
              <td>
                <a href="/petugas/detail/pengaduan/<?php echo e($adm->id_pengaduan); ?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-zoom-in"></i></a>
              </td>
            </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
          </tbody>
        </table>
        
        
      </div>
    </div>
  </div>
  </div>
                </div>
            </div>
        </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>
    

<?php echo $__env->make('templates.petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Petugas/dashboard.blade.php ENDPATH**/ ?>