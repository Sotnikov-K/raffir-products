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
            $table->unsignedInteger('user_id')->nullable();
            $table->string('lot_type', 100)->nullable();
            $table->string('animal_type', 100)->nullable();
            $table->string('animal_type_latin', 100)->nullable();
            $table->string('lot_origin', 200)->nullable();
            $table->unsignedInteger('lot_weight')->nullable();
            $table->unsignedInteger('lot_size_length')->nullable();
            $table->unsignedInteger('lot_size_width')->nullable();
            $table->unsignedInteger('lot_size_height')->nullable();
            $table->string('lot_size_title', 100)->nullable();
            $table->unsignedInteger('lot_grade')->nullable();
            $table->string('wet_condition', 100)->nullable();
            $table->date('date_of_found')->nullable();
            $table->text('lot_annotation', 100)->nullable();
            $table->unsignedInteger('lot_price')->nullable();
            $table->string('lot_picture_1', 200)->nullable()->unique();
            $table->string('lot_picture_2', 200)->nullable()->unique();
            $table->string('lot_picture_3', 200)->nullable()->unique();
            $table->string('lot_picture_4', 200)->nullable()->unique();
            $table->string('lot_picture_5', 200)->nullable()->unique();
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

