<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_navs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tbl_nav_1', 70);
            $table->string('tbl_nav_2', 70);
            $table->string('tbl_nav_3', 70);
            $table->string('tbl_nav_4', 70);
            $table->string('tbl_nav_5', 70);
            $table->string('tbl_nav_6', 70);
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
        Schema::drop('app_navs');
    }
}
