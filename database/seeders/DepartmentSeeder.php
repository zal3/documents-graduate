<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $departments = [
            [
                'name_en' => 'Computer Science',
                'name_ar' => 'علوم الحاسوب',
            ],
            [
                'name_en' => ' Information Technology',
                'name_ar' => ' تكنولوجيا المعلومات',
            ],
        ];
            

        for($i=1;$i<=10;$i++){
            Department::create([
                //rand on department 0 or 1
                'name_en' => $departments[rand(0,1)]['name_en'],
                'name_ar' => $departments[rand(0,1)]['name_ar'],
                'type' => rand(0,1),
                'stage' => rand(0,3),
            ]);
        }
        
    }
}
