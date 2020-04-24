
<!DOCTYPE html>
<html lang="en">
@include('landingComponents.header')
<body class="Landing" style="background-image: url('img/fondo.png');">
  <div class="headerLanding">
    @include('landingComponents.navbarLanding')       
  </div>  
  <div class="contentLanding">
    @yield('mycontent') 
  </div>
  @include('sweetalert::alert')
</body>
<footer class="footerLanding">
  @include('landingComponents.footer')
</footer>
</html>
