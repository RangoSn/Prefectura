<!DOCTYPE html>
<html>
@include('loadFileComponents.header')
<body class="hold-transition sidebar-mini" style="height: auto;">
<div class="wrapper">  
@include('loadFileComponents.Sidebar')
  @include('loadFileComponents.NavBar')
  <div class="content-wrapper" style="min-height: 1244.06px;"> 
    @yield('mycontent')
  </div>
  @include('loadFileComponents.footer')
  <aside class="control-sidebar control-sidebar-dark"></aside>
  @include('sweetalert::alert')
</div>
</body>
</html>

