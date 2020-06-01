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
            <h1 class="m-0 text-dark">Horario</h1>
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
              <h3 class="card-title"> Vespertino</h3>
            </div>
            <!-- /.card-header TABLA -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Hora</th>
                  <th>Profesor</th>
                  <th>Materia</th>
                  <th>Grupo</th>
                  <th>Salón</th>
                </tr>
                </thead>
                <tbody>
          
                <tr>
                  <td>7:00</td>
                  <td>Fernando</td>
                  <td>Seguridad</td>
                  <td>1501-LI</td>
                  <td>i-8</td>
                </tr>
                <tr>
                  <td>8:00</td>
                  <td>Camila</td>
                  <td>Multimedia</td>
                  <td>1101-LI</td>
                  <td>i-1</td>
                </tr>
                <tr>
                  <td>9:00</td>
                  <td>Alejandro</td>
                  <td>OSX.3+</td>
                  <td>1.8</td>
                  <td>i-2</td>
                </tr>
            
                <tr>
                  <td>10:00</td>
                  <td>Ana</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1</td>
                  <td>i-3</td>
                </tr>
                <tr>
                  <td>11:00</td>
                  <td>Paulina</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.1</td>
                  <td>i-5</td>
                </tr>
                <tr>
                  <td>12:00</td>
                  <td>Tania</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.2</td>
                  <td>i-2</td>
                </tr>
                <tr>
                  <td>13:00</td>
                  <td>Mozilla 1.3</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.3</td>
                  <td>i-1</td>
                </tr>
                <tr>
                  <td>14:00</td>
                  <td>Mozilla 1.4</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.4</td>
                  <td>i-8</td>
                </tr>
                <tr>
                  <td>15:00</td>
                  <td>Mozilla 1.5</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.5</td>
                  <td>i-7</td>
                </tr>
                <tr>
                  <td>16:00</td>
                  <td>Mozilla 1.6</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.6</td>
                  <td>i-9</td>
                </tr>
                <tr>
                  <td>17:00</td>
                  <td>Mozilla 1.7</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td>1.7</td>
                  <td>i-7</td>
                </tr>
                <tr> 
                </tbody>
                <tfoot>
                <tr>
                  <th>Hora</th>
                  <th>Profesor</th>
                  <th>Materia</th>
                  <th>Grupo</th>
                  <th>Salón</th>
                </tr>
                </tfoot>
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
