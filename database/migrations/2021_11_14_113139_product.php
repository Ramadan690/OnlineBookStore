<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('Product', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Reference')->nullable();
            $table->string('Product')->nullable();
            $table->string('quantity')->nullable();
            $table->string('Description')->nullable();
            $table->string('size')->nullable();
            $table->string('color');
            $table->string('CategoryRef');
            $table->foreign('CategoryRef')->references('Reference')->on('Category');
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
                        Schema::dropIfExists('Product');
    }
}
