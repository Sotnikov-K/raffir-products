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
        Schema::table('lots', function (Blueprint $table) {
            $table->string('lot_type');
            $table->string('animal_type');
            $table->string('animal_type_latin');
            $table->unsignedInteger('lot_size_length');
            $table->unsignedInteger('lot_size_diameter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lots', function (Blueprint $table) {
            $table->dropColumn('lot_type');
            $table->dropColumn('animal_type');
            $table->dropColumn('animal_type_latin');
            $table->dropColumn('lot_size_length');
            $table->dropColumn('lot_size_diameter');
        });
    }
};
