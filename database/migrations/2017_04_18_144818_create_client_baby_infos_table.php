<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientBabyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_baby_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->nullable()->index();
            $table->integer('answer_info')->default(0)->nullable();
            $table->text('comments_info')->nullable();


            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('client_baby_infos');
    }
}
