<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedInteger('product_index')->nullable();
            $table->string('slug');

            $table->string('product_category', 50)->nullable();
            $table->string('product_category_slug', 50)->nullable();

            $table->string('product_name', 50)->nullable();
            $table->string('product_shape', 50)->nullable(); //блок, фрагмент
            $table->string('product_pattern', 50)->nullable();
            $table->string('product_color', 50)->nullable();
            $table->string('product_status', 50)->nullable();
           
            $table->unsignedInteger('product_length')->nullable();
            $table->unsignedInteger('product_width')->nullable();
            $table->unsignedInteger('product_height')->nullable();
            $table->unsignedInteger('product_weight')->nullable();

            $table->decimal('product_price',8,2)->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_description_eng')->nullable();
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
};