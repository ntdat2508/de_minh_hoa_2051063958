<?php

namespace App\Http\Controllers;

use App\Models\Student; //add
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $students = Student::all(); //Nhan all du lieu tu DB
        return view('student_manage', compact('student'));
    }
    public function get_student_by_id($id)
    {
        $students = Student::find($id);
        return $students;
    }
    public function edit($id)
    {
        $students = Student::findOrFail($id);
        // $students = Student::find($id);
        return view('student_edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->fullname = $request->input('fullname');
        $students->birthday = $request->input('birthday');
        $students->address = $request->input('address');
        $students->update();
        return redirect('/student')->with('status','Student Updated Successfully');
    }
}
