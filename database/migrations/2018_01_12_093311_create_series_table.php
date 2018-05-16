<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 /*       Schema::create('directors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
*/
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('image');            
            $table->string('image_preview');
            $table->integer('seasons');
            $table->integer('year');
            $table->integer('rating_age');
            $table->integer('director_id')->unsigned();
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade')->onUpdate('cascade');
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
     //   Schema::dropIfExists('directors');
        Schema::dropIfExists('series');
        
    }
}
