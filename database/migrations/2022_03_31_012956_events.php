<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Events', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Reference');
            $table->string('E_title');
            $table->string('image');
            $table->string('about');
            $table->string('date');
            $table->string('duration');
            $table->string('Location');

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
                                Schema::dropIfExists('Events');

    }
}
;