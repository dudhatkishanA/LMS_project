<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_list()
    {
        $student=student::get()->all();
        return view('studentlist',compact('student'));
    }

    public function add_student()
    {
        return view('add_student');
    }

    public function insertStudent(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
        ]);
        $student = new student();
        $student->S_NAME = $request->student_name;
        $student->save();
        return redirect::to('/studentlist');
    }
    public function editStudent ($id)
    {
        $edit_data = student::where('id','=',$id)->first();
        return view('edit_student',compact('edit_data'));
    }

    public function updateStudent(Request $request)
    {
        // dd($request);

       student::where('id','=', $request->student_id)
        ->update([
               'S_NAME' => $request->student_name,
        ]);
        return redirect::to('/studentlist');
        
    }

    public function deleteStudent($id)
    {
        student::where('id', $id)
        ->delete();
        return redirect::to('/studentlist');

    }
}
