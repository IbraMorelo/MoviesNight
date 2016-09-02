<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->timestamps();
        });

        Schema::create('link_post', function (Blueprint $table){
            $table->increments('id');
            $table->string('path');

            $table->integer('link_id')->unsigned();
            $table->integer('post_id')->unsigned();

            $table->foreign('link_id')->references('id')->on('links')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('link_person', function (Blueprint $table){
            $table->increments('id');
            $table->string('path');

            $table->integer('link_id')->unsigned();
            $table->integer('person_id')->unsigned();

            $table->foreign('link_id')->references('id')->on('links')->onDelete('cascade');
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');

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
        Schema::drop('links');
    }
}
