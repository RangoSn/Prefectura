@extends('loadFile')
@section('mycontent')
    <form action="{{ url('/import')}}" method="post" enctype="multipart/form-data">
    
   {{csrf_field()}}
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Formulario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
        
            <!-- formulario -->
       
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Cargar Archivos</h3>
              </div>
              <div class="card-body">
                
                  <input type="file" name="file" id="file" >
                  
                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit">Upload File</button>
                  <br><br><br>
                 <a href="{{url('/sample/ejemplo.xlsx')}}">Download Simple File</a>
                </div>
                  
                </form>

@endsection


