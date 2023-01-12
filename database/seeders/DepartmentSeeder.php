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
        //id = 1
        Department::create([
            'name_en' => 'Computer Science',
            'name_ar' => 'علوم الحاسوب',
            'type' => 0|1,
        ]);
        //id = 2
        Department::create([
            'name_en' => ' Information Technology',
            'name_ar' => ' تكنولوجيا المعلومات',
            'type' => 0|1,
        ]);
        
    }
}
