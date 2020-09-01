<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;


class StudentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('DisablePreventBack');
    }
    
    public function index(){
        $student=Students::all();
        return view('admin/students/index', ['student' => $student]);
    }

    public function add_students(){
        return view('admin/students/add-student');
    }

    public function save_students(Request $request){
        $this->validate($request, [
            'student_nis'          => 'required|unique:students,student_nis',
            'student_full_name'    => 'required',
            'student_class'        => 'required',
            'student_phone_number' => 'required',
            'student_address'      => 'required',
            ]);
        $student = new students;
        $student->save_students($request->all());
        return redirect('/students');
    }


    public function edit_students($student_id){
        $student=students::find($student_id);
        return view('admin/students/edit-student', ['student' => $student]);
    }

    public function update_students(Request $request, $student_id){
        $student = students::find($student_id);
        $student->update_students($request->all());
        return redirect('/students/');
    }

    public function destroy($student_id)
    {
        $student = students::find($student_id);
        $student->delete();
        return redirect('/students/');
    }


}
