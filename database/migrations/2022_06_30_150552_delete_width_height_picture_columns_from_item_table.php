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
        Schema::table('items', function (Blueprint $table) { 
            $table->dropColumn('lot_size_height');
            $table->dropColumn('lot_size_width');
            $table->dropColumn('lot_picture_2');
            $table->dropColumn('lot_picture_3');
            $table->dropColumn('lot_picture_4');
            $table->dropColumn('lot_picture_5');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->unsignedInteger('lot_size_height');
            $table->unsignedInteger('lot_size_width');
            $table->string('lot_picture_2');
            $table->string('lot_picture_3');
            $table->string('lot_picture_4');
            $table->string('lot_picture_5');     
        });
    }
};
