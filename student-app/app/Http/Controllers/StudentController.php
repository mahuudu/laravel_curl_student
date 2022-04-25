<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{   
    public function create(){
        return view('students.create');
    }

    public function index(){
        $student = Students::all();
        return view('students.index', compact('student'));
    }

    public function insert(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required',
            'gender' => 'required',
            'msv' => 'required|unique:students',
        ]);

        Students::create($validatedData);
        echo "success create";
    }

    public function edit($id){
        $student = Students::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id){
        $student = Students::findOrFail($id);

        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required',
            'gender' => 'required',
            'msv' => 'required|unique:students',
        ]);

        $student->update($validatedData);
        echo"success update student";
    }

    public function delete($id){
        $student = Students::findOrFail($id);
        $student->delete();
        echo"success delete student";
    }

}
