<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articlesmigration extends Migration
{
    public function up()
    {
        Schema::create('front_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('order');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('front_articles');
    }
}
