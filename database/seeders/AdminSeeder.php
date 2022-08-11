<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=[
            ['admin_id'=>1,'admin_fname'=>'James','admin_lname'=>'Stewart'],
            ['admin_id'=>2,'admin_fname'=>'Jin','admin_lname'=>'Lu'],
        ];
        DB::table('admin')->insert($admin);

        
    }
}
