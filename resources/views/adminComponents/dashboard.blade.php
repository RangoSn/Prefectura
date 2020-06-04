@extends('adminLayout')
@section('title')
@section('mycontent')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Porcentaje de asistencias por academia</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard de asistencias</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h2>Administración Industrial</h2>
                <h3>90<sup style="font-size: 20px">%</sup></h3>
                <p>Asistencias del semestre</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/detailsAcademy" class="small-box-footer">Mostrar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h2>Contaduría publica</h2>
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Asistencias del semestre</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/detailsAcademy" class="small-box-footer">Mostrar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h2>Ciencias de la informática</h2>
                <h3>100<sup style="font-size: 20px">%</sup></h3>
                <p>Asistencias del semestre</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/detailsAcademy" class="small-box-footer">Mostrar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h2>Negocios internacionales</h2>
              <h3>90<sup style="font-size: 20px">%</sup></h3>
              <p>Asistencias del semestre</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/detailsAcademy" class="small-box-footer">Mostrar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h2>Turismo</h2>
                <h3>100<sup style="font-size: 20px">%</sup></h3>
                <p>Asistencias del semestre</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/detailsAcademy" class="small-box-footer">Mostrar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h2>Administración de empresas</h2>
                <h3>60<sup style="font-size: 20px">%</sup></h3>
                <p>Asistencias del semestre</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/detailsAcademy" class="small-box-footer">Mostrar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h2>Derecho</h2>
                <h3>44<sup style="font-size: 20px">%</sup></h3>
                <p>Asistencias del semestre</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/detailsAcademy" class="small-box-footer">Mostrar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h2>Gastronomia</h2>
              <h3>65<sup style="font-size: 20px">%</sup></h3>
              <p>Asistencias del semestre</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/detailsAcademy" class="small-box-footer">Mostrar más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
@endsection
