<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTankTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tank__types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')
                  ->comment='Name given to tank types e.g Underground Tank';
            $table->boolean('status')
                  ->default('1')
                  ->comment='0 means tanks type is not active, 1 means is active';
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
        Schema::dropIfExists('tank__types');
    }
}
