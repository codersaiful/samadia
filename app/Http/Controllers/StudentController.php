<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function store( Request $request ){
        
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' =>$validator->messages(),
            ]);
        }else{
            $student = $request->all();

            Student::create($student);
            
            return response()->json([
                'status' => 200,
                'message' =>"Added successfullly!",
            ]);
        }
        
    }
    
}
