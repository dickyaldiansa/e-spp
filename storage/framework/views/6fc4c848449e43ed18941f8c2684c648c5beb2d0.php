<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="<?php echo e(url('admin')); ?>">
        <img src="<?php echo e(asset('assets/img/brand/blue.png')); ?>" class="navbar-brand-img" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link<?php echo e((request()->is('dashboard')) ? ' active' : ''); ?>" href="<?php echo e(url('dashboard')); ?>">
              <i class="ni ni-shop text-green"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?php echo e((request()->is('transactions')) ? ' active' : ''); ?>" href="<?php echo e(url('transactions')); ?>">
              <i class="ni ni-briefcase-24 text-warning"></i>
              <span class="nav-link-text">Transaksi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?php echo e((request()->is('history')) ? ' active' : ''); ?>" href="<?php echo e(url('history')); ?>">
              <i class="ni ni-bullet-list-67 text-info"></i>
              <span class="nav-link-text">History</span>
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading p-0 text-muted">Pengaturan</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link <?php echo e((request()->is('settings')) ? 'active' : ''); ?>" href="<?php echo e(url('user')); ?>">
              <i class="ni ni-single-02"></i>
              <span class="nav-link-text">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e((request()->is('change-password')) ? 'active' : ''); ?>" href="<?php echo e(url('user/change-password')); ?>">
              <i class="ni ni-settings"></i>
              <span class="nav-link-text">Change Password</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\e-spp\resources\views/users/partials/sidenav.blade.php ENDPATH**/ ?>