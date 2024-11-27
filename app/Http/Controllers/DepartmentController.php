<?php
// app/Http/Controllers/DepartmentController.php
namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::with(['grades', 'students'])->get();

        return view('department', [
            'title' => 'Department',
            'departments' => $departments
        ]);
    }

    public function show(Department $department)
    {
        $department->load(['grades', 'students']);
        
        return view('department.show', [
            'title' => 'Department Detail',
            'department' => $department
        ]);
    }
}
