<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminMenuTableMigration extends Migration
{

    public function up()
    {
        Schema::create('admin_menu_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('menu_id');
            $table->string('title');
            $table->string('icon');
            $table->string('table');
            $table->json('columns');
            $table->enum('permission_add',["Yes","No"]);
            $table->enum('permission_edit',["Yes","No"]);
            $table->enum('permission_delete',["Yes","No"]);
            $table->integer('order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_menu_tables');
    }
}
