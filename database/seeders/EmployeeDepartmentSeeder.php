<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EmployeeDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employeeDepartment=[
            ['emp_id'=>'1','dep_id'=>'2']
           
        ];
        DB::table('employee_departments')->insert($employeeDepartment);
    }
}
