<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('born');
            $table->text('biography');
            $table->string('country');
            $table->string('headshots')->default('default.png');
            $table->string('slug')->nullable();
            $table->timestamps();
        });

        Schema::create('person_post', function (Blueprint $table){
            $table->increments('id');
            $table->string('type');

            $table->integer('person_id')->unsigned();
            $table->integer('post_id')->unsigned();

            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

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
        Schema::drop('people');
    }
}
