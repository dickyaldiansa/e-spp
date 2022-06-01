
<?php $__env->startSection('header'); ?>
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0"><?php echo e($page_title); ?></h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?php echo e(url('admin/data')); ?>">Petugas</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col">
    <div class="card-wrapper">
      <!-- Custom form validation -->
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0"><?php echo e($page_title); ?></h3>
          <?php if($errors->any()): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Error!</strong> <?php echo e($error); ?></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <form class="validation" novalidate method="POST" action="">
            <?php echo csrf_field(); ?>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label class="form-control-label" for="name">Nama *</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required autocomplete="off" value="<?php echo e((empty($data) ? old('name') : $data->name)); ?>">
                <div class="invalid-feedback">
                  Silahkan Isi Form Nama Terlebih Dahulu
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label class="form-control-label" for="username">Username *</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required autocomplete="off" value="<?php echo e((empty($data) ? old('username') : $data->username)); ?>">
                <div class="invalid-feedback">
                  Silahkan Isi Form Username Terlebih Dahulu
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-control-label" for="email">E-Mail (optional)</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="E-Mail" value="<?php echo e((empty($data) ? old('email') : $data->email)); ?>">
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-control-label" for="content">Password *</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"<?php echo e(empty($data) ? ' required' : ''); ?>>
                <div class="invalid-feedback">
                  Silahkan Isi Password Terlebih Dahulu
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('bottom'); ?>
<!-- Optional JS -->
<script>
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MY BLOG LARA\PREMIUM\e-spp\resources\views/admins/form.blade.php ENDPATH**/ ?>