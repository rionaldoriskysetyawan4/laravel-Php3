<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Models\Student;
use App\Models\Department;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPage extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Pages/Admin/home-admin', [
            'title' => 'Home',
        ]);
    }

    public function index2(Request $request)
    {

        
        $page = $request->query('page', 1);
        $perPage = $request->query('per_page', 20);
        $search = $request->query('search');

        

        if ($search) {
            $students = Student::where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%")
                ->orWhere('address', 'like', "%$search%")
                ->paginate($perPage, ['*'], 'page', $page);
        } else {
            $students = Student::paginate($perPage, ['*'], 'page', $page);
        }


        $departments = Department::all();
        $students->load(['grade', 'department']);

        return view('Pages/Admin/student-admin', [
            'grades' => Grade::all()->load('department'),
            'departments' => $departments,
            'students' => $students,
            'title' => 'Student Admin',
        ]);
    }


    public function index3()
    {
        return view('Pages/Admin/grade-admin', [
            'grades' => Grade::all()->load('students')->load('department'),
            'title' => 'Grade Admin',
        ]);
    }

    public function index4()
    {
        return view('Pages./Admin/department-admin', [
            'title' => 'Department Admin',
            'departments' => Department::all()
        ]);
    }

    public function index5()
    {
        return view('Pages/Admin/contact-admin', [
            'title' => 'Contact Admin',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
}
