<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ManagerDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managerDepartment=[
            ['man_id'=>'1','dep_id'=>'2']
        
        ];
        DB::table('manager_departments')->insert($managerDepartment);
    }
}
