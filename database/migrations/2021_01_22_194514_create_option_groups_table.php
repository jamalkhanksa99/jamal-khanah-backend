<?php
/*
 * File name: 2021_01_22_194514_create_option_groups_table.php

 * Author: DAS360
 * Copyright (c) 2022
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionGroupsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('name')->nullable();
            $table->boolean('allow_multiple')->default(0);
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
        Schema::drop('option_groups');
    }
}
