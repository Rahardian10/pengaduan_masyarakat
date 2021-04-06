

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Petugas <small>.</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <a href="/daftar-petugas" class="btn btn-secondary btn-sm">Kembali</a>
                <hr>
                <form class="" action="/store-petugas" method="post" novalidate>
                    <?php echo e(csrf_field()); ?>

                    <span class="section">Info Personal</span>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Petugas<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="nama_petugas" placeholder="" value="<?php echo e(old('nama_petugas')); ?>"/>
                            <?php if($errors->has('nama_petugas')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('nama_petugas')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="username" class='email' type="email" autocomplete="off" value="<?php echo e(old('username')); ?>"/>
                            <?php if($errors->has('username')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('username')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="email" class='email' type="email" value="<?php echo e(old('email')); ?>"/>
                            <?php if($errors->has('email')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('email')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                   
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="password" id="password1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" />
                            <?php if($errors->has('password')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('password')); ?>

                            </div>
                            <?php endif; ?>
                            
                            <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
                                <i id="slash" class="fa fa-eye-slash"></i>
                                <i id="eye" class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="tel" class='tel' name="telp" value="<?php echo e(old('telp')); ?>"/>
                            <?php if($errors->has('telp')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('telp')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" name="level" id="">
                                <option value="">--level--</option>
                                <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('level')): ?>
                            <div class="text-danger">
                                <?php echo e($errors->first('level')); ?>

                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <button type='submit' class="btn btn-primary">Submit</button>
                                <button type='reset' class="btn btn-success">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduan_masyarakat\resources\views/Admin/petugas/add.blade.php ENDPATH**/ ?>