       <!-- Main Sidebar Container -->
       <aside class="main-sidebar sidebar-dark-primary elevation-4">
           <!-- Brand Logo -->
           <a href="<?= BASEURL; ?>Home" class="brand-link">
               <img src="<?= BASEURL; ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
               <span class="brand-text font-weight-light">AdminLTE 3</span>
           </a>

           <!-- Sidebar -->
           <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                   <div class="image">
                       <img src="<?= BASEURL; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                   </div>
                   <div class="info">
                       <a href="<?= BASEURL; ?>about/page" class="d-block">Admin</a>
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
                       <!-- 1. List Pertama -->
                       <li class="nav-item">
                           <a href="<?= BASEURL; ?>home" class="nav-link">
                               <i class="nav-icon fas fa-home"></i>
                               <p>
                                   Home
                               </p>
                           </a>
                       </li>
                       <!-- 2. List Kedua Dropdown -->
                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-list"></i>
                               <p>
                                   Mahasiswa
                                   <i class="right fas fa-angle-left"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="<?= BASEURL; ?>mahasiswa" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Daftar Mahasiswa</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="<?= BASEURL; ?>mahasiswa/insert" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Insert Mahasiswa</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <!-- 3. List Ketiga Dropdown -->
                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-tachometer-alt"></i>
                               <p>
                                   About
                                   <i class="right fas fa-angle-left"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="<?= BASEURL; ?>about" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>About Me</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="<?= BASEURL; ?>about/page" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Page</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <!-- 4. List Keempat Logout -->
                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-th"></i>
                               <p>
                                   Logout
                                   <!-- <span class="right badge badge-danger">New</span> -->
                               </p>
                           </a>
                       </li>
                   </ul>
               </nav>
               <!-- /.sidebar-menu -->
           </div>
           <!-- /.sidebar -->
       </aside>