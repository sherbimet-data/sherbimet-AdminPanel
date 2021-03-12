<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sherbimet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" background = "black">
          <img src="myimages/logo.png" class="img-circle elevation-2" alt="User Image" style="width:50px">
        </div>
        <div class="info">
            <a href="#" class="d-block">Sherbimet</a>
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
          
          <li class="nav-item">
            <a href="home.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
              <p>
                 HOME
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          
          <!-- Admin -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i> 
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-admin_master.php" class="nav-link">
                  <i class="fas fa-folder-plus nav-icon"></i> 
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="display-admin_master.php" class="nav-link">
                  <i class="fas fa-eye nav-icon"></i> 
                  <p>View</p>
                </a>
              </li>
              </ul>
              
              <!-- User -->
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i> 
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-user_master.php" class="nav-link">
                  <i class="fas fa-folder-plus nav-icon"></i> 
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="display-user_master.php" class="nav-link">
                  <i class="fas fa-eye nav-icon"></i> 
                  <p>View</p>
                </a>
              </li>
              </ul>
          
           
          </li>

          
          
          
          
          <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
          </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>