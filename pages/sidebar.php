 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/hoteladmin/dashboard.php" class="brand-link">
      <img src="/hoteladmin/hotelLogoToBeReplaced.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/hoteladmin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">FORMS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                List of Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/hoteladmin/forms/app.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>App</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hoteladmin/forms/channel.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Channel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hoteladmin/forms/device.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Device</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hoteladmin/forms/facility.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Facility</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hoteladmin/forms/guest.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Guest</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hoteladmin/forms/menu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/hoteladmin/forms/promo.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Promo</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>