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
        Schema::create('task', function (Blueprint $table) {
            $table->integer('task_id')->unsigned();
            $table->string('task_title',45);
            $table->string('task_desc',255);
            $table->integer('points',45);
            $table->string('address',255);
            $table->string('task_lat');
            $table->string('task_long');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->string('deadline',45);

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
};
