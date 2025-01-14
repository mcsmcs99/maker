<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('segment_id')->nullable();
            $table->unsignedBigInteger('sub_segment_id')->nullable();

            // Define as chaves estrangeiras
            $table->foreign('segment_id')->references('id')->on('segments')->onDelete('set null');
            $table->foreign('sub_segment_id')->references('id')->on('sub_segments')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove as chaves estrangeiras
            $table->dropForeign(['segment_id']);
            $table->dropForeign(['sub_segment_id']);

            // Remove as colunas
            $table->dropColumn(['segment_id', 'sub_segment_id']);
        });
    }
}
