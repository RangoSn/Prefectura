<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UACompatible" content="ie-edge">
        <title>Import Excel</title>
    </head>
<body>
    <form action="{{ url('/import')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
       @if(session('errors'))
            @foreach($erors as $error)
            <li>{{$error}}</li>
            @endforeach
       @endif
       @if(session('success'))
           {{session('success')}}
       @endif
       <br><br>
    Select excel file to upload
    <br><br>
    <input type="file" name="file" id="file">
    <br><br>
    <button type="submit">Upload File</button>
    <br><br><br>
    <a href="{{url('/sample/ejemplo.xlsx')}}">Download Simple File</a>
    </form>
</body>

</html>