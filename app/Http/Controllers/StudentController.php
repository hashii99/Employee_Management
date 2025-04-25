<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    protected $student;

    public function __construct() {
        $this->student = new Student();
    }

    public function index()
    {
        $response['students'] = $this->student->all();
        return view('pages.index')->with($response);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'emp_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone' => 'string|max:10',
        ]);
        // dd($request->all()); //for troubleshooting - to check data is passing correctly
        $this->student->create($request->all());
        return redirect()->back()->with('success', 'Employee registered successfully!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $response['student'] = $this->student->find($id);
        return view('pages.edit')->with($response);
    }

    public function update(Request $request, string $id)
    {
        $student = $this->student->find($id);
        $student->update(array_merge($student->toArray(), $request->toArray()));
        return redirect('student');
    }

    public function destroy(string $id)
    {
        $student = $this->student->find($id);
        $student->delete();
        return redirect('student');
    }

    public function cancel()
    {
        return redirect('student');
    }
}
