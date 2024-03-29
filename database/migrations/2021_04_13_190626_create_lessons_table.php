<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('course_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->enum('type', ['Video', 'PDF', 'Other']);
            $table->string('title');
            $table->string('duration')->nullable();
            $table->string('url');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
