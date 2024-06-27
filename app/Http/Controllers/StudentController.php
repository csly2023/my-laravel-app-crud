<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $student, $students;

    public function index()
    {
        $this->students = Student::all();

        return view('student.index', ['students' => $this->students]);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $this->student = new Student();
        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->address = $request->address;
        $this->student->gender  = $request->gender;
        $this->student->image   = $request->image;
        $this->student->save();

        return back()->with('message', 'Data store successfully.');
    }
}
