
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
              <li class="breadcrumb-item"><a href="javascript:void(0)">Data Siswa</a></li>
              <li class="breadcrumb-item active" aria-current="page">Rombel</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="<?php echo e(url('admin/rombels/add')); ?>" class="btn btn-sm btn-neutral">Add</a>
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
        <h3 class="mb-0">Master Data Rombel</h3>
        <?php if(Session::has('message')): ?>
        <div class="alert alert-<?php echo e(Session::get('message_type')); ?> alert-dismissible fade show mt-3" role="alert">
          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
          <span class="alert-text"><strong><?php echo e(ucwords(Session::get('message_type'))); ?>!</strong> <?php echo e(Session::get('message')); ?></span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php endif; ?>
      </div>
      <div class="table-responsive py-4">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-light">
            <tr>
              <th>#ID</th>
              <th>Nama</th>
              <th>Kompetensi Keahlian</th>
              <th>Total Siswa</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#ID</th>
              <th>Nama</th>
              <th>Kompetensi Keahlian</th>
              <th>Total Siswa</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($d->id); ?></td>
              <td><?php echo e($d->name); ?></td>
              <td><?php echo e($d->major_competency); ?></td>
              <td><?php echo e($d->total); ?></td>
              <td>
                <a href="<?php echo e(url('admin/rombels/edit').'/'.$d->id); ?>" class="btn btn-sm btn-warning text-white" title="Edit Data"><i class="ni ni-ruler-pencil"></i></a>
                <a href="javascript:void(0)" onclick="destroy(<?php echo e($d->id); ?>)" class="btn btn-sm btn-danger text-white"><i class="ni ni-box-2" title="Hapus Data"></i></a>
              </td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MY BLOG LARA\PREMIUM\e-spp\resources\views/rombels/index.blade.php ENDPATH**/ ?>