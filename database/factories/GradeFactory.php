<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Make sure there's at least one department
        $department = Department::inRandomOrder()->firstOr(function () {
            return Department::factory()->create();
        });
        
        [$min, $max] = match ($department->name) {
            'PPLG' => [1, 2],
            'DKV' => [1, 3],
            'TG' => [1, 2],
            'ANIM 3D' => [1, 3],
            'ANIM 2D' => [1, 2],
            default => [1, 5],
        };

        $subNumber = $this->faker->numberBetween($min, $max);

        return [
            'name' => $this->faker->numberBetween(10, 12) . ' ' . $department->name . ' ' . $subNumber,
            'department_id' => $department->id,
        ];
    }
}