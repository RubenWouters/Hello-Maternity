<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::drop('colors');
    }
}
