<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department=[
            ['dep_id'=>1,'dep_title'=>'Research'],
            ['dep_id'=>2,'dep_title'=>'Sales']
        ];
        DB::table('departments')->insert($department);
    }
}
