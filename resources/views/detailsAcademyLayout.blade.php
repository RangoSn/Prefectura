<!DOCTYPE html>
<html lang="en">
@include('detailsAcademy.header')
<body class="Landing hold-transition sidebar-mini">
  <div class="wrapper">
    <div class="headerLanding">
      @include('i0.NavBar')
      @include('i0.Sidebar')
    </div> 
    <div class="contentLanding">
      @yield('mycontent') 
    </div>
  </div>
  @include('sweetalert::alert')
</body>
<footer>
  @include('i0.footer')
</footer>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
</html>
