<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('course_name');
            $table->string('course_title');
            $table->mediumText('course_content');
            $table->string('course_image_name');
            $table->integer('courses_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_courses');
    }
}
