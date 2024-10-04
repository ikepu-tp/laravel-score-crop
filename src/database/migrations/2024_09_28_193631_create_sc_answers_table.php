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
        Schema::create('sc_answers', function (Blueprint $table) {
            $table->id();
            $table->uuid('scAnswerId')->unique()->index();
            $table->foreignId('user_id')->constrained(config('score-crop.user.table'));
            $table->foreignId('sc_exam_id')->constrained('sc_exams');
            $table->foreignId('file_id')->nullable()->constrained(config('score-crop.file.table'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sc_answers');
    }
};
