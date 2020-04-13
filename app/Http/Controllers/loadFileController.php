<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Validator;


class loadFileController extends Controller
{
    public function importfile(){
        return view('loadFile');
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
            $json=$this->jsonExcel($saveFile);
            //$this->addJSON($json);
        }
    }
    
    public function jsonExcel($file)
    {
        $import= new ExcelImport;
        //Importar a la base de datos directamente Excel::import(new ExcelImport, $file);
        $array = Excel::toArray($import, $file);
        
        for($i=0;$i<count($array[0]);$i++){ 
            $curso = $array[0][$i]["course_name"];
            $materia = $array[0][$i]["section_number"];
            $teacher = $array[0][$i]["teacher_number"];
            $expression = $array[0][$i]["expression"];
            /**
            $json="[
            'curso'=>$curso,
            'materia'=>$materia,
            'teacher'=>$teacher,
            'expression'=>$expression]";
            $jsonAux=$json ;
            **/
            $this->addJSON($curso ,$materia ,$teacher ,$expression);
            }
        //print_r($array[0]->expression);
        //$json=json_encode($array,JSON_UNESCAPED_UNICODE);
        //print_r($array[0][0]["expression"]);
        //print_r($array[0][1]);
        print("COOL :V");
        //return $json;
    }
    public function addJSON ($curso, $materia, $teacher,$expression){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'./firebasekey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://prefectura-ilb.firebaseio.com/')
        ->create();
        $database = $firebase->getDatabase();
        $newPost = $database
        ->getReference('horario')
        ->push([
            'curso'=>$curso,
            'materia'=>$materia,
            'teacher'=>$teacher,
            'expression'=>$expression
        ]);
    }
}
