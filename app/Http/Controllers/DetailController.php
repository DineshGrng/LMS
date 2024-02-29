<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    function getDetail($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }
}
