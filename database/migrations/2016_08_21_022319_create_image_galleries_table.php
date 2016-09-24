<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_galleries', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
            $table->string('name');
            $table->string('title');
            $table->string('extension',5);
            $table->boolean('main')->default(0);
            $table->boolean('cover')->default(0);
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
        Schema::drop('image_galleries');
    }
}
