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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lot_id')->nullable();
            $table->foreign('lot_id')->references('id')->on('lots')->onDelete('cascade');
            $table->string('animal_type', 100)->nullable();
            $table->string('animal_type_latin', 100)->nullable();
            $table->string('item_type', 100)->nullable();
            $table->unsignedInteger('item_weight')->nullable();
            $table->unsignedInteger('item_size_length')->nullable();
            $table->unsignedInteger('item_size_width')->nullable();
            $table->unsignedInteger('item_size_height')->nullable();
            $table->unsignedInteger('item_size_diameter')->nullable();
            $table->unsignedInteger('item_grade')->nullable();
            $table->string('item_rarity')->nullable();
            $table->string('item_color')->nullable();
            $table->string('item_condition', 100)->nullable(); 
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
        Schema::dropIfExists('items');
    }
};
