<?php
// app/Http/Controllers/StudentController.php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['grade', 'department'])->get();
        
        return view('student', [
            'title' => 'Student',
            'students' => $students
        ]);
    }

    public function show(Student $student)
    {
        $student->load(['grade', 'department']);
        
        return view('student.show', [
            'title' => 'Student Detail',
            'student' => $student
        ]);
    }
}