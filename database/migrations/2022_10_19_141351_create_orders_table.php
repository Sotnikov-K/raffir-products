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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic')->nullable();

            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('street');
            $table->string('building');
            $table->string('flat')->nullable();

            $table->integer('index');
            $table->string('email')->nullable();
            $table->string('phone');
            
            
            $table->decimal('amount', 10, 2)->unsigned();
            $table->timestamps();

            // внешний ключ, ссылается на поле id таблицы users
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
