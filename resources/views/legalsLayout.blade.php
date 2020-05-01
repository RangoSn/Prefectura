
<!DOCTYPE html>
<html lang="en">
@include('legalsComponents.header')
<body class="Landing" style="background-image: url('img/fondo.png');">
  <div class="contentLanding">
    @yield('mycontent') 
  </div>
  @include('sweetalert::alert')
</body>
<footer>

</footer>
</html>
