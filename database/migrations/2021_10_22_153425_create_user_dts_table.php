<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->integer('Tel')->default('0');
            $table->string('Occupation')->default('-');
            $table->string('Level_Ed')->default('-');
            $table->string('Institution')->default('-');
            $table->string('VKey')->default('-');
            $table->string('user_Ref');
            $table->foreign('user_Ref')->references('Reference')->on('users');
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
        Schema::dropIfExists('user_dts');
    }
}
