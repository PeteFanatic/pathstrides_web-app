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
            $table->string('userfname',45);
            $table->string('usermname',45)->nullable();
            $table->string('userlname',45);
            $table->string('useremail')->unique();
            $table->string('contanctnumber');
            $table->string('username',45);
            $table->string('password',45);
            $table->string('department',100);
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
