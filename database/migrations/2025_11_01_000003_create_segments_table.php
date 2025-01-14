<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegmentsTable extends Migration
{
    public function up()
    {
        Schema::create('segments', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('segments');
    }
}