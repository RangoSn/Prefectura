@extends('detailsAcademyLayout')
@section('title')
@section('mycontent')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Asistencias de academía</h1>
          </div><!-- /.col -->
      
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header TABLA -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Profesor</th>
                  <th>Materia</th>
                  <th>Asistencias</th>
                  <th>Faltas</th>
                  <th>Retardos</th>
                </tr>
                </thead>
                <tbody>
          
                <tr>                  
                  <td>González Lemus Fernando</td>
                  <td>Seguridad</td>
                  <td>10</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Sedas Suárez Silvia Jassel</td>
                  <td>Arquitectura de las organizaciones</td>
                  <td>9</td>
                  <td>1</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Ochoa Toledo Miguel Angel</td>
                  <td>Modelos de gestión</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>Canto Gallo Rafael</td>
                  <td>Programación orientada a objetos.</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>Nolasco Sánchez Araceli Adriana</td>
                  <td>Computación básica</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>
                </tr>            
                <tr>
                  <td>Rosales Galicia Miguel Ángel</td>
                  <td>Computación básica</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>
                </tr>                
                <tr>
                  <td>González Gordillo Jaime</td>
                  <td>Sistemas Ubicuos</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>
                </tr>                
                <tr>
                  <td>García Luna Mario</td>
                  <td>Auditoria informatica</td>
                  <td>5</td>
                  <td>2</td>
                  <td>3</td>
                </tr>                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <!-- /.card-header TABLA -->  
  
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
@endsection
