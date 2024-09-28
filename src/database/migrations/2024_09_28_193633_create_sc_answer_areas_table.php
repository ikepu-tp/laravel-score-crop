<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sc_answer_areas', function (Blueprint $table) {
            $table->id();
            $table->uuid('scAnswerAreaId')->unique()->index();
            $table->foreignId('user_id')->constrained(config('score-crop.user_table'));
            $table->foreignId('sc_answer_image_id')->constrained('sc_answer_images');
            $table->tinyInteger('big_number');
            $table->tinyInteger('middle_number')->nullable();
            $table->tinyInteger('small_number')->nullable();
            $table->tinyInteger('score');
            $table->Integer('x');
            $table->Integer('y');
            $table->Integer('width');
            $table->Integer('height');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sc_answer_areas');
    }
};