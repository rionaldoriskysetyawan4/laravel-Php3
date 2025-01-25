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
        return view('Pages/Admin/home-admin',[
            'title' => 'Home',
        ]);
    }

    public function index2() {

        $departments = Department::all();
        
        return view('Pages/Admin/student-admin', [
            'grades' => Grade::all()->load('department'),
            'departments' => $departments,
            'students' => Student::all()->load('grade')->load('department'),
            'title' => 'Student Admin',
        ]);
    }
    

    public function index3() {
        return view('Pages/Admin/grade-admin', [
            'grades' => Grade::all()->load('students')->load('department'),
            'title' => 'Grade Admin',
        ]);
    }

    public function index4() {
        return view('Pages./Admin/department-admin', [
            'title' => 'Department Admin',
            'departments' => Department::all()
        ]);
    }

    public function index5() {
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
