
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
</body>
<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyARp_MW-yFuhVNbNYwqtTYrZbmfKKxzGik",
    authDomain: "prefectura-ilb.firebaseapp.com",
    databaseURL: "https://prefectura-ilb.firebaseio.com",
    projectId: "prefectura-ilb",
    storageBucket: "prefectura-ilb.appspot.com",
    messagingSenderId: "1067133369550",
    appId: "1:1067133369550:web:3b2c3f19ba3fb12e6e649f",
    measurementId: "G-CE1EXG84FD"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
$("#btnLogin").click(function(){
    var email = $("#email").val();
    var password = $("#password").val();
    window.alert("hola");
});
<footer class="footerLanding">
  @include('landingComponents.footer')
</footer>
</html>
