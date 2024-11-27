<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;
    
    private static $departments = [
        'PPLG' => 'Pengembangan Perangkat Lunak dan Gim',
        'DKV' => 'Desain Komunikasi Visual',
        'TG' => 'Teknik Grafika',
        'ANIM 3D' => 'Animasi 3 Dimensi',
        'ANIM 2D' => 'Animasi 2 Dimensi'
    ];
    
    private static $index = 0;
    
    public function definition(): array
    {
        $names = array_keys(self::$departments);
        $descriptions = array_values(self::$departments);
        
        $name = $names[self::$index];
        $description = $descriptions[self::$index];
        
        self::$index = (self::$index + 1) % count($names);
        
        return [
            'name' => $name,
            'description' => $description
        ];
    }
}