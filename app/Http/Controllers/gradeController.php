<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;


class gradeController extends Controller
{
    public function getAllGrades()
    {
        $grades = Grade::all();
        return response()->json( $grades,200);
    }
}
