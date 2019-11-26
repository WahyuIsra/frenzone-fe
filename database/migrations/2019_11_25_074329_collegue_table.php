<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CollegueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collegue', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',60);
            $table->string('nim',11);
            $table->integer('gender');
            $table->string('password');
            $table->string('email');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('faculty_id');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
            $table->foreign('faculty_id')->references('id')->on('faculty')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('collegue');
    }
}
