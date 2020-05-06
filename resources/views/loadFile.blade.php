<!DOCTYPE html>
@include('loadFileComponents.header')
<body class="Landing hold-transition sidebar-mini" style="background-image: url('img/fondo.png');">
  <div class="contentLanding">
  @yield('mycontent')
  </div>
  @include('sweetalert::alert')
</body>

<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</html>

