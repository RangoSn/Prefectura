<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
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
                
        }
    }
    public function jsonExcel($file)
    {
        $import= new ExcelImport;
        //Importar a la base de datos directamente Excel::import(new ExcelImport, $file);
        $array = Excel::toArray($import, $file);
        $json=json_encode($array,JSON_UNESCAPED_UNICODE);
        //var_dump($json);
        print($json);
        return $json;
    }
}
