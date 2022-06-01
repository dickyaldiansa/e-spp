<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<?php echo $__env->make('users.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body>
  <?php echo $__env->make('users.partials.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <?php echo $__env->make('users.partials.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header -->
    <?php echo $__env->yieldContent('header'); ?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <?php echo $__env->yieldContent('content'); ?>
      
      <?php echo $__env->make('users.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
  <div class="modal" id="logout" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Log Out <i class="fa fa-lock"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p><i class="fa fa-question-circle"></i> Are you sure you want to log-off? <br /></p>
          <div class="actionsBtns">
            <form action="<?php echo e(url('logout')); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

              <button type="submit" class="btn btn-outline-primary">Log Out</button>
              <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </form>
          </div>
        </div>
      </div>
      <?php echo $__env->make('users.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

    </html><?php /**PATH C:\xampp\htdocs\e-spp\resources\views/users/layouts/master.blade.php ENDPATH**/ ?>