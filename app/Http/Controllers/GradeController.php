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
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255|unique:grades',
                'description' => 'nullable|string|max:1000',
            ]);

            Grade::create($validated);
            return redirect()->route('grade.department')
                           ->with('success', 'Grade created successfully');
        } catch (ValidationException $e) {
            return redirect()->back()
                           ->withErrors($e->errors())
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
