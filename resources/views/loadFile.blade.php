<!DOCTYPE html>
<html lang="en">
@include('loadFileComponents.header')
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
<!-- bs-custom-file-input -->
<script src="admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</html>

