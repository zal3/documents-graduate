<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unid;

class UnidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
        Unid::create([
            'department_id' => Department::all()->random()->id,
            'number' => $i . '0000000',
            'date' => '2023-01-01',
            'type' => rand(0,1),
            'graduation_year' => 1,
            'round' => rand(1,3),
        ]);
    }
    }
}
