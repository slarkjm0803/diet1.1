<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientse', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('diet_id');
            $table->string('value');
            $table->string('unit');
            $table->string('ingredient_name');
            $table->string('ingredient_div');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredientse');
    }
}
