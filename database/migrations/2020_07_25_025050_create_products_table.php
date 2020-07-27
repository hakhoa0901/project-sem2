<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->unsignedDouble('price');
            $table->text('description');
            $table->timestamps();
            $table->enum('colour',array('red','green','blue','yellow','violet','orange','gray'));
            $table->enum('frameShape',array('Pilot','rectangle','square','round','others','cat eyes'));
            $table->enum('frameSize',array('small','medium','large'));
            $table->enum('frameType',array('full rim','rim less','half rim'));
            $table->text('images');
            $table->enum('status',array('active','inactive'));
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
