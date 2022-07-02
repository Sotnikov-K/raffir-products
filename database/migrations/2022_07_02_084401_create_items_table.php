<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Lot;

return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('items');
    }

    
    public function down()
    {
       
    }

};
