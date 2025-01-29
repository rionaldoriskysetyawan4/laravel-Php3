<?php
// app/Http/Controllers/GradeController.php
namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with(['department', 'students'])->get();
        
        return view('Pages/Klien/grade', [
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
    public function store(Request $request)
    {
        // Validate based on which fields should be present
        $rules = [];
        
        if ($request->has('departname')) {
            $rules['departname'] = 'required|string|max:255';
            $rules['description'] = 'nullable|string|max:500';
        } else {
            $rules['clasname'] = 'required|int|max:2';
            $rules['department_id'] = 'required|integer|exists:departments,id';
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
                $department->departmentId = $validated['department_id'];
            }

            $department->save();

            return redirect()->route('admin.grades')
                ->with('success', 'Department successfully created!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Failed to create department: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        // Find the department by ID or fail
        $grade = Grade::findOrFail($id);
    
        // Determine if this is an email edit
        $thisEmail = !empty($grade->email); // Check if the email field is not empty
    
        // Validate the request based on the $thisEmail condition
        if ($thisEmail) {
            // If it's an email edit, validate only the name
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:departments,email,' . $grade->id, // Adjust the table name if necessary
            ]);
            
            // Update the department with the validated name
            $grade->update($validated);
        } else {
            // If it's not an email edit, validate the email and name
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string'
            ]);
            
            // Update the department with the validated name and email
            $grade->update($validated);
        }
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Department updated successfully');
    }


    public function destroy($id)
    {
        try {
            $Grade = Grade::findOrFail($id);
            $Grade->delete();
            
            return redirect()->route('admin.grades')
                           ->with('success', 'Grade deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('admin.grades')
                           ->with('error', 'Failed to delete Grade');
        }
    }
}
