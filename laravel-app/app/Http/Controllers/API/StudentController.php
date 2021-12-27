<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->phone_number = $request->input('phone_number');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        
        $student->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Student added successfully',
        ]);
    }
}
