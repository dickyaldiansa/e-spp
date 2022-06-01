
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
							<li class="breadcrumb-item"><a href="<?php echo e(url('admin/students')); ?>">Master</a></li>
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
								<label class="form-control-label" for="username">NIS *</label>
								<input type="number" name="username" class="form-control" id="username" placeholder="NIS" required autocomplete="off" value="<?php echo e((empty($data) ? old('username') : $data->username)); ?>">
								<div class="invalid-feedback">
									Silahkan Isi Form NIS Terlebih Dahulu
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label class="form-control-label" for="name">Nama Lengkap *</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required autocomplete="off" value="<?php echo e((empty($data) ? old('name') : $data->name)); ?>">
								<div class="invalid-feedback">
									Silahkan Isi Form Nama Terlebih Dahulu
								</div>
							</div>

							<div class="col-md-4 mb-3">
								<label class="form-control-label" for="rombels_id">Rombel *</label>
								<select class="form-control" name="rombels_id" id="rombels_id" required>
									<?php $__currentLoopData = $rombels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rombel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option<?php echo e(empty($data) ? '' : ($data->rombels_id == $rombel->id ? ' selected' : '')); ?> value="<?php echo e($rombel->id); ?>"><?php echo e($rombel->name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								<div class="invalid-feedback">
									Pilih Rombel Terlebih Dahulu
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-<?php echo e(empty($data) ? '4' : '6'); ?> mb-3">
								<label class="form-control-label" for="email">E-Mail (optional)</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="mail@domain.com" value="<?php echo e((empty($data) ? old('email') : $data->email)); ?>">
							</div>
							<?php if(empty($data)): ?>
							<div class="col-md-4 mb-3">
								<label class="form-control-label" for="email">Password (default: wikrama) *</label>
								<input type="password" name="password" class="form-control" id="password" value="wikrama" required>
								<div class="invalid-feedback">
									Silahkan Isi Form Password Terlebih Dahulu
								</div>
							</div>
							<?php endif; ?>
							<div class="col-md-<?php echo e(empty($data) ? '4' : '6'); ?> mb-3">
								<label class="form-control-label" for="spp_id">Jenis Spp *</label>
								<select class="form-control" name="spp_id" id="spp_id" required>
									<?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option<?php echo e(empty($data) ? '' : ($data->spp_id == $s->id ? ' selected' : '')); ?> value="<?php echo e($s->id); ?>"><?php echo e($s->info); ?> -- <?php echo e(number_format($s->amount)); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								<div class="invalid-feedback">
									Pilih Jenis Spp Terlebih Dahulu.
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-3 mb-3">
								<label class="form-control-label" for="gender">Kelamin *</label>
								<select class="form-control" name="gender" id="gender" required>
									<option<?php echo e(empty($data) ? '' : ($data->gender == 'Laki - Laki' ? ' selected' : '')); ?>>Laki - Laki</option>
									<option<?php echo e(empty($data) ? '' : ($data->gender == 'Perempuan' ? ' selected' : '')); ?>>Perempuan</option>
								</select>
								<div class="invalid-feedback">
									Pilih Jenis Kelamin Terlebih Dahulu.
								</div>
							</div>
							<div class="col-md-5 mb-3">
								<label class="form-control-label" for="address">Alamat (optional)</label>
								<textarea class="form-control" name="address" id="address" rows="1"><?php echo e((empty($data) ? old('address') : $data->address)); ?></textarea>
							</div>
							<div class="col-md-4 mb-3">
								<label class="form-control-label" for="telp">Telp (optional)</label>
								<input type="text" class="form-control" id="telp" placeholder="Telp" autocomplete="off" value="<?php echo e((empty($data) ? old('telp') : $data->telp)); ?>">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MY BLOG LARA\PREMIUM\e-spp\resources\views/students/form.blade.php ENDPATH**/ ?>