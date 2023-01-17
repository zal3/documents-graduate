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
        $type = [
            'Morning',
            'Evening',
        ];
        $stage = [
            'First',
            'Second',
            'Third',
            'Fourth',
        ];



        //id 1
        
            Department::create([
                'name_en' => 'Computer Science',
                'name_ar' => 'علوم الحاسوب',
                // 'stage' => 0,
            ]);
        
        //id 2
    
            Department::create([
                'name_en' => ' Information Technology',
                'name_ar' => ' تكنولوجيا المعلومات',
                // 'stage' => 0,
            ]);
        





        // for($i=1;$i<=2;$i++){
        //     Department::create([
        //         //rand on department 0 or 1
        //         'name_en' => $departments[rand(0,1)]['name_en'],
        //         'name_ar' => $departments[rand(0,1)]['name_ar'],
        //         'type' => rand(0,1),
        //         'stage' => rand(0,3),
        //     ]);
        // }

    }
}