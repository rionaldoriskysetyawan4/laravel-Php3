<?php
use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data (if needed)
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Department::truncate();
        // Grade::truncate();
        // Student::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create departments
        Department::factory(5)->create();

        // Create grades
        $gradeCount = 36;
        $createdGrades = 0;

        while ($createdGrades < $gradeCount) {
            try {
                Grade::factory()->create();
                $createdGrades++;
            } catch (\Illuminate\Database\QueryException $e) {
                if ($e->errorInfo[1] === 1062) { // Duplicate entry error
                    DB::statement('ALTER TABLE grades AUTO_INCREMENT = ' . ($createdGrades + 1));
                    continue;
                } else {
                    throw $e;
                }
            }
        }

        // Create students
        Student::factory(100)->create();
    }
}
