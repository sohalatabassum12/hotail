<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sohala Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="https://www.facebook.com/profile.php?id=100060187704625" class="d-block">Islami Sohala Tabassum</a>
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
                <a href="{{ route('admin') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-house"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.list') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-users"></i>
                  <p>
                    User List
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('room.list') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-person-shelter"></i>
                  <p>
                    Rooms
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('appointment.list') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-person-shelter"></i>
                  <p>
                    Appointment List
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('staff.list')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-person-shelter"></i>
                  <p>
                    Staffs
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('about.list') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-person-shelter"></i>
                  <p>
                    About
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
