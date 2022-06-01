
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
							<li class="breadcrumb-item"><a href="<?php echo e(url('admin/spp')); ?>">Data SPP</a></li>
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
							<div class="col-md-4 mb-3">
								<label class="form-control-label" for="period">Periode *</label>
								<input type="text" name="period" class="form-control" id="period" placeholder="Tahun Ajaran" required autocomplete="off" value="<?php echo e((empty($data) ? old('period') : $data->period)); ?>">
								<div class="invalid-feedback">
									Silahkan Isi Form Periode Terlebih Dahulu
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label class="form-control-label" for="amount">Nominal *</label>
								<input type="number" name="amount" class="form-control" id="amount" placeholder="Kompetensi Keahlian" required value="<?php echo e((empty($data) ? old('amount') : $data->amount)); ?>">
								<div class="invalid-feedback">
									Silahkan Isi Form Nominal Terlebih Dahulu
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label class="form-control-label" for="info">Info (optional)</label>
								<input type="text" name="info" class="form-control" id="info" placeholder="Kompetensi Keahlian" required value="<?php echo e((empty($data) ? old('info') : $data->info)); ?>">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MY BLOG LARA\PREMIUM\e-spp\resources\views/spp/form.blade.php ENDPATH**/ ?>