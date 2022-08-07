<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee=[
            ['emp_id'=>'1','emp_fname'=>'Mitchell','emp_lname'=>'Irons','emp_email'=>'mitchel_irons@gmail.com','emp_contanct_num'=>'09199234514','emp_password'=>'sdgf','man_id'=>'1'],

        ];
        DB::table('employee')->insert($employee);
    }
}
