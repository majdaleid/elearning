<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeacherIdToCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
              $table->unsignedBigInteger('teacher_id')->constrained('teachers')->onDelete('cascade');
        //      $table->foreignId('teacher_id')->constrained('teachers')->onDelete('cascade');

        });
//constrained('teachers', 'id')
      // $table->foreign('author')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

      //  $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
