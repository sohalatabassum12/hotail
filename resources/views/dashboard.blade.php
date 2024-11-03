<!DOCTYPE html>
<html lang="en">
@include('dahsboard.common.head')
<body class="hold-transition sidebar-mini layout-fixed">
  @include('sweetalert::alert')
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('dahsboard.common.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('dahsboard.common.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('dashboard_content')
  <!-- /.content-wrapper -->
  @include('dahsboard.common.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('dahsboard.common.script')
</body>
</html>
