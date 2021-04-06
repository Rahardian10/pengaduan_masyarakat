

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Daftar Masyarakat<small>.</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">       
          <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
        <p class="text-muted font-13 m-b-30">
            
        </p>
        
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>NIK</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Telepon</th>
              
            </tr>
          </thead>
          <tbody>
              <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($item->nik); ?></td>
              <td><?php echo e($item->nama); ?></td>
              <td><?php echo e($item->username); ?></td>
              <td><?php echo e($item->email); ?></td>
              <td><?php echo e($item->telp); ?></td>
              
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
<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Admin/petugas/view_masyarakat.blade.php ENDPATH**/ ?>