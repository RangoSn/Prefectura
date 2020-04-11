
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
  <script type="text/javascript">  
    $(document).ready(function(){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $("input[name= _token]").val()
        }
      });
      $('#btnLogin').click(function(){
        var userData = $('#formLogin').serialize();
        alert(userData);
        $.ajax({
          type: 'GET',
          url: "uLogin",
          data: userData
        });
        return false;
      });
    }); 
  </script>

</body>
<footer class="footerLanding">
  @include('landingComponents.footer')
</footer>

</html>
