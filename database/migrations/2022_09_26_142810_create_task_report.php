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
        Schema::create('task_report', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('report_text',100);
            $table->binary('report_image');
            $table->double('task_lat');
            $table->double('task_long');
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
        Schema::dropIfExists('task_report');
    }
};
