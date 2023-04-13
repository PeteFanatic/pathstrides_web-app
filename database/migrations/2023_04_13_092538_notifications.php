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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('notif_id')->autoIncrement();  //a unique identifier for each notification (auto-incremented).
            $table->text('message'); //the text of the notification message.
            $table->boolean('is_read')->default(false); //a flag indicating whether the notification has been read by the user (default is FALSE).
            $table->timestamps(); //the timestamp of when the notification was created (default is the current timestamp).

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

            
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
