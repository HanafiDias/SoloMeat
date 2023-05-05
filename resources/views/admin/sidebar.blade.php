 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="admin" class="brand-link">
         <img src="{{ asset('image/beef.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">Admin SoloMeat</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 mb-1 d-flex justify-content-start">
             <div class="info ">
                 <p style="color:aliceblue; font-size: 180%" class="d-block"> <i
                         class="fa-solid fa-circle-user"></i><strong>
                         {{ auth()->user()->username }} </strong></p>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                 {{-- <li class="nav-item">
                     <a href="adminseller" class="nav-link">
                         <i class="fa-solid fa-shop"></i>
                         <p>Store / Seller</p>
                     </a>
                 </li> --}}
                 <li class="nav-item">
                     <a href="adminproduct" class="nav-link">
                         <i class="nav icon fas fa-box"></i>
                         <p>Product</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="adminuser" class="nav-link">
                         <i class="fa-solid fa-user"></i>
                         <p>User</p>
                     </a>
                 </li>
             </ul>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     <a href="/sesi/logout" class="nav-link">
                         <i class="fas fa-sign-out"></i>
                         <p>Logout</p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
