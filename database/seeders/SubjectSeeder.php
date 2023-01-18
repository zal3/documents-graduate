<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Department;
use App\Models\Student;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //lمواد قسم الحاسوب  الصف الاول
        Subject::create([
            'department_id' => Department::where('stage', 1)->where('name_en', 'Computer')->first()->id,
            'course' => 'First',
            'name_en' => 'Math',
            'name_ar' => 'الرياضيات',
            'degree' => 3,
        ]);
        
    }
}
