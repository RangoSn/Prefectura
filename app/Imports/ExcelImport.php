<?php

namespace App\Imports;

use App\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ExcelImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Excel([
           'Course_Name' => $row['course_name'],
           'Section_Number' => $row['section_number'], 
           'Teacher Number' => $row['teacher_number'],
           'Expression' => $row['expression']
        ]);
    }
}
