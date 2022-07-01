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
    //    Schema::table('items', function (Blueprint $table) {      
    //         $table->string('lot_status')->after('lot_grade')->nullable();
    //         $table->unsignedInteger('lot_size_diameter')->after('lot_size_height')->nullable();
    //         $table->string('lot_color')->after('lot_annotation')->nullable();
    //         $table->string('lot_rarity')->after('lot_annotation')->nullable();
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('the_items', function (Blueprint $table) {
            //
        });
    }
};
