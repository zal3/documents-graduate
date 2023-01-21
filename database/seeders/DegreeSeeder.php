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

        for($i = 0; $i < $students->count(); $i++){
            for($j = 0; $j < $subjects->count(); $j++){
                Degree::create([
                    'student_id' => $students[$i]->id,
                    'subject_id' => $subjects[$j]->id,
                    'degree' => rand(0, 100),
                ]);
            }
        }

    }
}
