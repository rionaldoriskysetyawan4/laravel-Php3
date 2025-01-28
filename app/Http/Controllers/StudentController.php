<?php
// app/Http/Controllers/StudentController.php
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Validation\ValidationException;

class StudentController extends Controller
{
    public function index()
    {


        $students = Student::with(['grade', 'department'])->get();

        // Pass the data to the view
        return view('Pages.Klien.student', [
            'title' => 'Student',
            'students' => $students,

        ]);
    }

    // Update the student details
    // In your StudentController

    public function update(Request $request, $id)
    {
        // Find the department by ID or fail
        $student = Student::findOrFail($id);
    
        // Determine if this is an email edit
        $thisEmail = !empty($student->email); // Check if the email field is not empty
    
        // Validate the request based on the $thisEmail condition
        if ($thisEmail) {
            // If it's an email edit, validate only the name
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:students,email,' . $student->id, // Adjust the table name if necessary
            ]);
            
            // Update the department with the validated name
            $student->update($validated);
        } else {
            // If it's not an email edit, validate the email and name
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string'
            ]);
            
            // Update the department with the validated name and email
            $student->update($validated);
        }
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Department updated successfully');
    }


    // Show the details of a single student
    public function show($id)
    {
        $student = Student::findOrFail($id);
        $student->load(['grade', 'department']); // Lazy load related data (grade and department)

        return view('student.show', [
            'title' => 'Student Detail',
            'student' => $student
        ]);
    }



    // Delete a student
    public function destroy($id)
    {
        $student = Student::find($id);
        

        if ($student) {
            $student->delete();
            return redirect()->route('admin.students')->with('success', 'Student deleted successfully');
        }

        return redirect()->route('admin.students')->with('error', 'Student not found');
    }

    //tambahkan

    public function store(Request $request)
    {

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:students,email',
                'grade_id' => 'required|integer|exists:grades,id', // Ensure grade_id exists in the grades table
                'department_id' => 'required|integer|exists:departments,id', // Ensure department_id exists in the departments table
                'address' => 'nullable|string', // Allow address to be optional
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }


        Student::create($validated);

        return redirect()->route('admin.students')
            ->with('success', 'Student created successfully');
    }
}
