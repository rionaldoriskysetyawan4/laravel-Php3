<?php
// app/Http/Controllers/GradeController.php
namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Department;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with(['department', 'students'])->get();
        
        return view('grade', [
            'title' => 'Grade',
            'grades' => $grades
        ]);
    }

    public function show(Grade $grade)
    {
        $grade->load(['department', 'students']);
        
        return view('grade.show', [
            'title' => 'Grade Detail',
            'grade' => $grade
        ]);
    }
}
