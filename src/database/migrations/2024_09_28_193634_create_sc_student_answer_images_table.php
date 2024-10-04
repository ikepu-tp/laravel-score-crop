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
        Schema::create('sc_student_answer_images', function (Blueprint $table) {
            $table->id();
            $table->uuid('scStudentAnswerImageId')->unique()->index();
            $table->foreignId('user_id')->constrained(config('score-crop.user.table'));
            $table->foreignId('sc_answer_image_id')->constrained('sc_answer_images');
            $table->foreignId('sc_student_id')->constrained('sc_students');
            $table->foreignId('file_id')->constrained(config('score-crop.file.table'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sc_student_answer_images');
    }
};
