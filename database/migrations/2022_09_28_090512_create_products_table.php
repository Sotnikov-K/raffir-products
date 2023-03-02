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

            $table->float('product_length', 6, 2)->nullable();
            $table->float('product_width', 6, 2)->nullable();
            $table->float('product_height', 6, 2)->nullable();
            $table->unsignedInteger('product_weight')->nullable();

            $table->unsignedInteger('product_price')->nullable();
            $table->string('product_description')->nullable();

            $table->unsignedInteger('product_rating')->nullable();

            $table->string('product_tag_1')->nullable();
            $table->string('product_tag_2')->nullable();
            $table->string('product_tag_3')->nullable();
            $table->string('product_tag_4')->nullable();
            $table->string('product_tag_5')->nullable();

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
