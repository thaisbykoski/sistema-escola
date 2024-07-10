<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'responsible' => 'required',
            'class' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Aluno cadastrado com sucesso');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'responsible' => 'required',
            'class' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Registro atualizado com sucesso');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Aluno excluído com sucesso.');
    }

}
