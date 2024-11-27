<?php
// app/Models/Student.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'grade_id', 'department_id'];

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }
    //mengambil data
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}