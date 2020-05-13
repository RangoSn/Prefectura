<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use Validator;
//arrays in laravel
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;


class loadFileController extends Controller
{
    public function importfile(){
        return view('loadFileComponents.formulario');
    }
    
    public function importExcel (Request $request){
        $validator=Validator::make($request->all(),[
            'file'=>'required|max:5000|mimes:xlsx,xls'
        ]);
        if($validator->passes()){
            //Asigna la fecha actual
            $dataTime=date('Ymd_His');
            $file= $request->file('file');//Obtiene el archivo del request.
            $fileName=$dataTime . '-' . $file->getClientOriginalName();//Modifica el nombre del archivo agregando la fecha
            $savePath=public_path('/upload/');//Inicializa el path donde se guarde el archivo.
            $file->move($savePath,$fileName);//Guarda el archivo en la carpeta.
            $saveFile=$savePath . $fileName;
            set_time_limit(0);//Evita el error de muchas peticiones
            $this->jsonExcel($saveFile);
            print("upload successfully");
        }
    }
    
    public function jsonExcel($file)
    {
        $import= new ExcelImport;
        //Importar a la base de datos directamente Excel::import(new ExcelImport, $file);
        $array = Excel::toArray($import, $file);
        //obtener maestros
        $maestros = Arr::pluck($array[0], 'teacher_number');
        //cuenta los maestros
        $maestro=array_count_values($maestros);
        //obtiene arrglo de los maestros
        $master = array_keys($maestro);
        for($i=0;$i<count($master);++$i){
                $this->addJSON([$master[$i]=>['materias'=>$this->getMaterias($master[$i],$array)]]);
        }
    }
  
    private function getMaterias($masterName, $array){
        for($i=0;$i<count($array[0]);++$i){
            if($i==0){
                if ($array[0][$i]['teacher_number'] == $masterName){    
                    $curso=str_replace(".","",$array[0][$i]['course_name']);
                    $this->addMaterias([ $curso=>[
                      'grupo'=>$array[0][$i]['section_number'],
                      'expresion'=>$array[0][$i]['expression'],
                      'valMaestro'=>0,
                      'valPrefecto'=>0,
                      'asistencias'=>0,
                      'faltas'=>0,]
                     ],$array[0][$i]['teacher_number']);
                }    
            }else{
                 if ($array[0][$i]['teacher_number'] == $masterName){
                     $curso=str_replace(".","",$array[0][$i]['course_name']);
                    $this->addMaterias([ $curso=>[
                      'grupo'=>$array[0][$i]['section_number'],
                      'expresion'=>$array[0][$i]['expression'],
                      'valMaestro'=>0,
                      'valPrefecto'=>0,
                      'asistencias'=>0,
                      'faltas'=>0,]
                     ],$array[0][$i]['teacher_number']);
                }
            }
            
        }
    }
    private function addMaterias( $array, $reference){
        $firebase = app('firebase');
        $database = $firebase->getDatabase();
        $newPost = $database
        ->getReference("maestros/".$reference)
        ->push($array);
    }
    private function addJson( $array){
        $firebase = app('firebase');
        $database = $firebase->getDatabase();
        $newPost = $database
        ->getReference("maestros")
        ->push($array);
        
    }
}
