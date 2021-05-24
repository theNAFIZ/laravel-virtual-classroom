<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('session');
            $table->string('dept');
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreignId('batch_id')
                ->nullable()
                ->constrained()
                ->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
