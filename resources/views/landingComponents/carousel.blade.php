@extends('landing')
@section('title')
@section('mycontent')
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img id= "imgCarousel" src="img/galery1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img id= "imgCarousel" src="img/galery4.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img id= "imgCarousel" src="img/galery3.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</div>
@endsection
