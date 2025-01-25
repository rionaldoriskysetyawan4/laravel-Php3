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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
        ]);
    
        $grade = Grade::findOrFail($id);
        $grade->update($validated);
    
        return redirect()->route('grade.index')->with('success', 'Grade updated successfully.');
    }


    public function destroy($id)
    {
        try {
            $Grade = Grade::findOrFail($id);
            $Grade->delete();
            
            return redirect()->route('admin.grade')
                           ->with('success', 'Grade deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('admin.grade')
                           ->with('error', 'Failed to delete Grade');
        }
    }
}
