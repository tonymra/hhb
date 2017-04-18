<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_days', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned()->nullable()->index();
            $table->string('class_number');
            $table->date('class_date');
            $table->integer('completed')->default(0);
            $table->integer('is_active')->default(1);
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_days');
    }
}
