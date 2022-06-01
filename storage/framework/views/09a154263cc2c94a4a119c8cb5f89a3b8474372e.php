
<?php $__env->startPush('up'); ?>
<!-- Page plugins -->
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')); ?>">
<?php $__env->stopPush(); ?>
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
              <li class="breadcrumb-item active" aria-current="page"><?php echo e($page_title); ?></li>
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
    <div class="card">
      <!-- Card header -->
      <div class="card-header">
        <h3 class="mb-0"><?php echo e($page_title); ?></h3>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>#ID</th>
              <th>Payment Method</th>
              <th>Nominal</th>
              <th>For Month</th>
              <th>Description</th>
              <th>Created at</th>
              <th>Expired at</th>
              <th>Status</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#ID</th>
              <th>Payment Method</th>
              <th>Nominal</th>
              <th>For Month</th>
              <th>Description</th>
              <th>Created at</th>
              <th>Expired at</th>
              <th>Status</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($d->id); ?></td>
              <td><?php echo e($d->payment_method); ?></td>
              <td>
                <?php if($d->amount_verify == NULL): ?>
                Rp<?php echo e(number_format($d->amount, 2)); ?>

                <?php else: ?>
                Rp<?php echo e(number_format($d->amount_verify, 2)); ?>

                <?php endif; ?>
              </td>
              <td><?php echo e($d->for_month); ?></td>
              <td><?php echo e($d->description); ?></td>
              <td><?php echo e($d->created_at); ?></td>
              <td><?php echo e($d->expired_at ?? '-'); ?></td>
              <td><span class="badge badge-<?php echo e($d->badge); ?> badge-lg"><?php echo e($d->status); ?></span></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('bottom'); ?>
<!-- Optional JS -->
<script src="<?php echo e(asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('users.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MY BLOG LARA\PREMIUM\e-spp\resources\views/users/history/index.blade.php ENDPATH**/ ?>