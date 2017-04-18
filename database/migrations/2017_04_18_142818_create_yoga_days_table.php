<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYogaDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yoga_days', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('yoga_id')->unsigned()->nullable()->index();
            $table->date('class_date');
            $table->integer('completed')->default(0);
            $table->integer('is_active')->default(1);
            $table->timestamps();

            $table->foreign('yoga_id')->references('id')->on('yogas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yoga_days');
    }
}
