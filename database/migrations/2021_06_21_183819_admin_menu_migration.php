<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminMenuMigration extends Migration
{

    public function up()
    {
        Schema::create('admin_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->integer('order');
            $table->timestamps();


        });

    }

    public function down()
    {
        Schema::dropIfExists('admin_menus');
    }

}
