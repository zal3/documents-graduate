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
                'unid_id' => Unid::all()->random()->id,
                'name_en' => 'Student ' . $i . '  father, grandfather and surname',
                'name_ar' => 'طالب ' . $i . 'الاب والجد واللقب',
                'gender' => rand(0, 1),
                'average' => rand(50, 100),
                'average_written' => 'سبعة وسبعون',
                'image_path' => $img,
            ]);
        }
    }
}
