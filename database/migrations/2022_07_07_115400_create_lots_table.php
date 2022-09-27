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
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('slug')->nullable();
            $table->string('type', 100)->nullable();
            $table->string('lot_origin', 200)->nullable();
            $table->unsignedInteger('lot_weight')->nullable();
            $table->string('lot_status')->nullable();
            $table->string('lot_size_title', 100)->nullable();
            $table->text('lot_annotation', 100)->nullable();
            $table->unsignedInteger('lot_count')->nullable();
            $table->decimal('lot_price',8,2)->nullable();
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
        Schema::dropIfExists('lots');
    }
};
