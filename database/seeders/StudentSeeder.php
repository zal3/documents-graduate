<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Department;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            Student::create([
                'department_id' => Department::all()->random()->id,
                'name_en' => 'Student '.$i . 'الاب والجد واللقب',
                'name_ar' => 'طالب '.$i. 'الاب والجد واللقب',
                'gender' => rand(0,1),
                'graduation_year' => '2021',
                'average' => rand(50,100),
                'round' => rand(0,2),
                'image_path' => 'students/1.jpg',
            ]);
        }
    }
}
