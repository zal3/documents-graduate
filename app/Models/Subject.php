<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['department_id', 'student_id', 'name_en', 'name_ar', 'degree', 'course_ar', 'course_en'];

    ### Relation ###
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    ### End Relation ###
}
