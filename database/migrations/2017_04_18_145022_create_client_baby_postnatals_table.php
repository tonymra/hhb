<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientBabyPostnatalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_baby_postnatals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->nullable()->index();
            $table->integer('answer_postnatal')->default(0)->nullable();
            $table->text('comments_postnatal')->nullable();
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
        Schema::dropIfExists('client_baby_postnatals');
    }
}
