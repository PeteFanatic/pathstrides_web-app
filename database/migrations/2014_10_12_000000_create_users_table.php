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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id')->primary();
            $table->string('user_fname',45);
            $table->string('user_mname',45)->nullable();
            $table->string('user_lname',45);
            $table->string('user_email')->unique();
            $table->string('contactnumber');
            $table->string('user_username',45);
            $table->string('user_password',45);
            $table->string('user_department',100);
            $table->integer('role');
            $table->integer('status');
            $table->integer('admin_id')->nullable();
            $table->integer('dep_id')->nullable();
            $table->timestamps();

            $table->foreign('admin_id')->references('admin_id')->on('admin');
            $table->foreign('dep_id')->references('dep_id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
