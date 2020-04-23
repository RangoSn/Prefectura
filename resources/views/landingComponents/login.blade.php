@extends('landing')
@section('title','PrefecturaILB | Login')

@section('mycontent')
<div class="container" id="formlogin">
      <div class="col-md-6 mx-auto text-center">
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="form ">
               <form id="formLogin" method="POST" data-parsley-validate="" action="/ulogin">                    
               @csrf
               <div class="form-group">
                     <input type="email" name="email" id="email" class="form-control inputLogin" placeholder="Email" required="">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" id="password"  class="form-control inputLogin" placeholder="Password" required="">
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-secondary btn-lg btn-block btnLogin" id="btnLogin" >Iniciar</button >
                  </div>
                  <p id="privacyNoteLogin" class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection
