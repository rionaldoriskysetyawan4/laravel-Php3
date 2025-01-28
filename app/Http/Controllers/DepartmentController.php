<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class DepartmentController extends Controller
{
    public function up()
    {
        // Fix: This belongs to a migration file, not a controller
        Schema::table('departments', function (Blueprint $table) {
            $table->string('email')->nullable();
        });
    }

    public function index()
    {
        $departments = Department::with(['grades', 'students'])->get();

        return view('Pages/Klien/department', [
            'title' => 'Department',
            'departments' => $departments,
        ]);
    }

    public function show(Department $department)
    {
        $department->load(['grades', 'students']);

        return view('department.show', [
            'title' => 'Department Detail',
            'department' => $department,
        ]);
    }
    //edit
    public function update(Request $request, $id)
    {
        // Find the department by ID or fail
        $department = Department::findOrFail($id);
    
        // Determine if this is an email edit
        $thisEmail = !empty($department->email); // Check if the email field is not empty
    
        // Validate the request based on the $thisEmail condition
        if ($thisEmail) {
            // If it's an email edit, validate only the name
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:departments,email,' . $department->id, // Adjust the table name if necessary
            ]);
            
            // Update the department with the validated name
            $department->update($validated);
        } else {
            // If it's not an email edit, validate the email and name
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string'
            ]);
            
            // Update the department with the validated name and email
            $department->update($validated);
        }
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Department updated successfully');
    }

    //delete
    public function destroy($id)
    {
        $department = Department::find($id);

        if ($department) {
            $department->delete();
            return redirect()->route('admin.departments')->with('success', 'Department deleted successfully.');
        }

        return redirect()->route('admin.department')->with('error', 'Department not found.');
    }

    //tambahkan
    public function store(Request $request)
    {
        // Validate based on which fields should be present
        $rules = [];
        
        if ($request->has('departname')) {
            $rules['departname'] = 'required|string|max:255';
            $rules['description'] = 'nullable|string|max:500';
        } else {
            $rules['clasname'] = 'required|string|max:255';
        }

        $validated = $request->validate($rules);

        try {
            $department = new Department();
            
            // If departname exists, we're in "this-depart" mode
            if (isset($validated['departname'])) {
                $department->name = $validated['departname'];
                $department->description = $validated['description'] ?? null;
            } else {
                $department->class_name = $validated['clasname'];
            }

            $department->save();

            return redirect()->route('departments.index')
                ->with('success', 'Department successfully created!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to create department: ' . $e->getMessage())
                ->withInput();
        }
    }
    
}
