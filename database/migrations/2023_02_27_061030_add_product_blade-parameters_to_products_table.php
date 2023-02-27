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
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_blade-model')->after('product_rating')->nullable();
            $table->string('product_blade-design')->after('product_rating')->nullable();
            $table->unsignedBigInteger('product_thickness')->after('product_rating')->nullable();
            $table->unsignedBigInteger('product_blade-hardness')->after('product_rating')->nullable();
            $table->string('product_blade-finish')->after('product_rating')->nullable();
            $table->string('product_steel-type')->after('product_rating')->nullable();
            $table->string('product_blade-style')->after('product_rating')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
