<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientBabiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_babies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->nullable()->index();
            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->integer('crawling')->default(0)->nullable();
            $table->integer('walking')->default(0)->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_babies');
    }
}
