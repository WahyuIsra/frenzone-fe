<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title',60);
            $table->dateTime('date');
            $table->unsignedBigInteger('genre_id');
            $table->string('image');
            $table->double('location_lat');
            $table->double('location_lng');
            $table->integer('maximal_slot');
            $table->text('description');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('collegue')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event');
    }
}
