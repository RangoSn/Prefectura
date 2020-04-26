<!DOCTYPE html>
<html lang="en">
@include('adminComponents.header')
<body class="Landing hold-transition sidebar-mini" style="background-image: url('img/fondo.png');">

  <div class="contentLanding">
    @yield('mycontent') 
  </div>
  @include('sweetalert::alert')
</body>
<footer>
</footer>
</html>

<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>
