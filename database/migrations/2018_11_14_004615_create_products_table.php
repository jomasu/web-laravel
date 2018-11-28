<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->float('price');
            $table->integer('stock');
            $table->unsignedInteger('brand_id');
            $table->integer('categorie_id');
            $table->boolean('activate')->nullable($value = true);
            $table->text('description');
            $table->string('photopath_slot1', 100);
            $table->string('photopath_slot2', 100)->nullable($value = true);
            $table->string('photopath_slot3', 100)->nullable($value = true);
            $table->string('photopath_slot4', 100)->nullable($value = true);
            $table->string('photopath_slot5', 100)->nullable($value = true);
            $table->timestamps();

            //$table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
