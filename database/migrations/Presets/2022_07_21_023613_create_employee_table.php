<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin', function (Blueprint $table) {
            // $table->id();
            // $table->id('admin_id');
            // $table->string('admin_fname');
            // $table->string('admin_lname');
            // $table->integer('admin_coll');
            // $table->string('email')->unique();
            // $table->string('username');
            // $table->string('password');
            $table->timestamps();
        });
        // Schema::table('manager', function (Blueprint $table) {
        //     // $table->id();
        //     // $table->id('man_id');
        //     // $table->string('man_fname');
        //     // $table->string('man_lname');
        //     // $table->string('man_email')->unique();
        //     // $table->string('man_contanct_num');
        //     // $table->integer('man_coll');
        //     // $table->string('man_username');
        //     // $table->string('man_password')->unique();
        //     // $table->integer('admin_id');
        //     // $table->integer('dep_id');
        //     $table->timestamps();
        // });
        // Schema::table('employee', function (Blueprint $table) {
        //     // $table->id();
        //     // $table->id('emp_id');
        //     // $table->string('emp_fname');
        //     // $table->string('emp_lname');
        //     // $table->string('emp_email')->unique();
        //     // $table->string('emp_contanct_num');
        //     // $table->integer('man_coll');
        //     // $table->string('man_username');
        //     // $table->string('man_password')->unique();
        //     // $table->integer('admin_id');
        //     // $table->integer('dep_id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};