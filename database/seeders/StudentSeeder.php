<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Department;
use App\Models\Subject;
use App\Models\Unid;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (Student::where('gender', 0)->first()) {
            $img = 'img/male.png';
        } else
            $img = 'img/female.png';

        for ($i = 1; $i <= 10; $i++) {
            $student=Student::create([
                // 'department_id' => Department::all()->random()->id,
                'unid_id' => Unid::all()->random()->id,
                'name_en' => 'Student ' . $i . '  father, grandfather and surname',
                'name_ar' => 'طالب ' . $i . 'الاب والجد واللقب',
                // 'type' => rand(0,1),
                'gender' => rand(0, 1),
                // 'graduation_year' => 0,
                'average' => rand(50, 100),
                'average_written' => 'سبعة وسبعون',
                // 'round' => rand(0,2),
                'image_path' => $img,
            ]);
        }
        //add to pivot table
        // $students = Student::all();
        // $Subjects = Subject::all();

        // foreach ($students as $student) {
        //     foreach ($Subjects as $subject) {
        //         if (array_rand([true, false]))
        //         $student->subjects()->attach( ['subject_id' => $subject->id
        //         , 'degree' => rand(50, 100)]);
        //     }
        // }
    }
}
