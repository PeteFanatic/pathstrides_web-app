<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $manager=[
        ['man_id'=>'1','man_fname'=>'Bob','man_lname'=>'Smith','man_email'=>'bobsmith_@gmail.com','man_contanct_num'=>'09199089764','man_password'=>'qwrty','admin_id'=>'1'],
        ['man_id'=>'1','man_fname'=>'Timmy','man_lname'=>'Daniels','man_email'=>'timmy_daniels@gmail.com','man_contanct_num'=>'09191025214','man_password'=>'asdf','admin_id'=>'2'],
    ];
    DB::table('manager')->insert($manager);
    }
}
