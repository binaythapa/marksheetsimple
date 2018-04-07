<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marksheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            
            // $table->integer('English');
            //  $table->integer('Nepali');
            //  $table->integer('Mathematics');
            //  $table->integer('Science');
            //  $table->integer('SocialStudies');
            //  $table->integer('EPH');
            //  $table->integer('OptionalI');
            //  $table->integer('OptionalII');
             $table->integer('total');
             $table->float('percentage');
             $table->string('result');
             $table->boolean('registered');
             $table->boolean('verified');


            $table->foreign('student_id')
                    ->references('id')
                    ->on('students')
                    ->onDelete('cascade');
                     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marksheets');
    }
}
