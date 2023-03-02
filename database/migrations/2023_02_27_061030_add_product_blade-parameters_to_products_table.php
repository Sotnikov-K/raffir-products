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
            $table->string('product_blade_model')->after('product_rating')->nullable();
            $table->string('product_blade_design')->after('product_rating')->nullable();
            $table->string('product_thickness')->after('product_rating')->nullable();
            $table->string('product_blade_hardness')->after('product_rating')->nullable();
            $table->string('product_blade_finish')->after('product_rating')->nullable();
            $table->string('product_steel_type')->after('product_rating')->nullable();
            $table->string('product_blade_style')->after('product_rating')->nullable();
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
