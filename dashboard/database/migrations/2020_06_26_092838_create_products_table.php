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
            //$table->bigIncrements('id');
            //$table->timestamps();
            $table->bigIncrements('id_prod');
            $table->string('cod_product')->unique();
            $table->string('nombre');
            $table->string('categoria');
            $table->string('peso');
            $table->string('precio');
            $table->string('stock');
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
        Schema::dropIfExists('products');
    }
}
