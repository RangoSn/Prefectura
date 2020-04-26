@extends('landing')
@section('title')
@section('mycontent')
<!--Carrusel-->
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/csroll1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/csroll2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/csroll3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<!--Quiénes somos-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>¿Que ofrece esta aplicación?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-justify">Esta aplicación busca ser una herramienta que otorgue resultados de las asistencias, retardos o inasistencias de los docentes. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h3>La aplicación web.</h3>
        </div>
        <div class="col-md-9">
            <p class="text-justify">Es dirigida para los usuarios de la coordinación general del Instituto Leonardo Bravo plantel centro, integrando funcionalidades para la gestión de horarios a través de la carga de archivos excel, además su principal objetivo será mostrar los resultados en una interfaz sencilla y con datos en tiempo real.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h3>La aplicación móvil.</h3>
        </div>
        <div class="col-md-9">
            <p class="text-justify">Es dirigida al personal de docencia y prefectura, con el objetivo de realizar y validar el pase de asistencia dentro del Instituto Leonardo Bravo plantel centro.</p>
        </div>
    </div>            
</div>
<br>
<br>
<!--Galeria-->
<div class="row" >
        <div class="col col-lg-12">
            <div class="panel-default" style="background-color: #7c2f3e;">
                <div class="row" style="
                            padding-top: 15px;
                            padding-right: 15px;
                            padding-bottom: 15px;
                            padding-left: 15px; ">
                    <div class="col col-md-4">
                        <div class="card" >
                            <img class="img-fluid" src="img/galery1.png" alt="Card image">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card">
                            <img class="img-fluid" src="img/galery2.png" alt="Card image">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card">
                            <img class="img-fluid" src="img/galery3.png" alt="Card image">
                        </div>
                    </div>
                </div>


                <div class="row" style="
                            padding-right: 15px;
                            padding-bottom: 15px;
                            padding-left: 15px; ">
                    <div class="col col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="img/galery4.png" alt="Card image">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card" >
                            <img class="card-img-top" src="img/galery5.png" alt="Card image">
                        </div>
                    </div>

                    <div class="col col-md-4">
                        <div class="card" >
                            <img class="card-img-top" src="img/galery6.png" alt="Card image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
