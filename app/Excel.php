<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Course_Name','Section_Number','Teacher_Number','Expression',
    ];
