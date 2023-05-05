 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="admin" class="brand-link">
         <img src="{{ asset('image/beef.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">Seller SoloMeat</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 mb-1 d-flex justify-content-start">
             <div class="info ">
                 <p style="color:aliceblue; font-size: 120%" class="d-block"> <i
                         class="fa-solid fa-circle-user"></i><strong>
                         {{ auth()->user()->username }} </strong></p>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-1">
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
