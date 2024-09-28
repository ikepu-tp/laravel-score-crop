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
        Schema::create('sc_student_answer_trimmed_images', function (Blueprint $table) {
            $table->id();
            $table->uuid('scStudentAnswerTrimmedImageId')->unique("sc_s_a_trimmed_images_id_unique")->index();
            $table->foreignId('user_id')->constrained(config("score-crop.user_table"));
            $table->foreignId('sc_student_answer_image_id')->constrained('sc_student_answer_images', "id", "sc_s_a_trimmed_images_sc_s_a_image_id_foreign");
            $table->foreignId('sc_answer_area_id')->constrained('sc_answer_areas');
            $table->foreignId('file_id')->constrained(config('score-crop.file_table'));
            $table->tinyInteger('score')->default(0);
            $table->longText('feedback')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sc_student_answer_trimmed_images');
    }
};