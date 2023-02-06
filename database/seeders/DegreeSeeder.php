<?php

namespace Database\Seeders;
use App\Models\{Student, Degree,  Subject};

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
       $students = Student::all();
         $subjects = Subject::all();
        foreach ($students as $student) {
            foreach ($subjects as $subject) {
                Degree::create([
                    'student_id' => $student->id,
                    'subject_id' => $subject->id,
                    'degree' => rand(1, 100)
                ]);
            }
        }
    

    }
}
