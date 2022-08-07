<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task=[
            ['task_id'=>'1','task_title'=>'Repair Post','task_desc'=>'Repair Post lacking transformer','emp_id'=>'1']
           
        ];
        DB::table('task')->insert($task);
    }
}
