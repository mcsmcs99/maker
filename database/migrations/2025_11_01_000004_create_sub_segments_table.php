<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSegmentsTable extends Migration
{
    public function up()
    {
        Schema::create('sub_segments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('segment_id')->constrained('segments')->onDelete('cascade');
            $table->string('label');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_segments');
    }
}