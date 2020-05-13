<!DOCTYPE html>
<html lang="en">
@include('adminComponents.header')
<body class="Landing hold-transition sidebar-mini>

  <div class="contentLanding">
    @yield('mycontent') 
  </div>
  @include('sweetalert::alert')
</body>
<footer>
</footer>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</html>
