<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('descp')->nullable();
            $table->date('startdate');
            $table->date('enddate');
            $table->integer('location_id')->unsigned()->nullable()->index();
            $table->integer('min_quantity');
            $table->integer('max_quantity');
            $table->string('starttime');
            $table->string('endtime');
            $table->string('price');
            $table->integer('is_active')->default(1);
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('slug');
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
        Schema::dropIfExists('courses');
    }
}
