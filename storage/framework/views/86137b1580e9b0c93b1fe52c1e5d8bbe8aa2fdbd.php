<!-- Argon Scripts -->
<!-- Core -->
<script src="<?php echo e(asset('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
<?php echo $__env->yieldPushContent('bottom'); ?>

<script type="text/javascript">
  function logout(){
    $('#logout').modal('show');
  }
  
  function destroy(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "<?php echo e(url('admin/'.request()->segment(2).'/delete')); ?>/"+id;
      }
    })
  }
</script>
<!-- Argon JS -->
<script src="<?php echo e(asset('assets/js/argon.js?v=1.1.0')); ?>"></script><?php /**PATH D:\MY BLOG LARA\PREMIUM\e-spp\resources\views/partials/scripts.blade.php ENDPATH**/ ?>