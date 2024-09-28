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
        Schema::create('sc_answer_images', function (Blueprint $table) {
            $table->id();
            $table->uuid('scAnswerImageId')->unique()->index();
            $table->foreignId('user_id')->constrained(config('score-crop.user_table'));
            $table->foreignId('sc_answer_id')->constrained("sc_answers");
            $table->tinyInteger('page')->default(1);
            $table->foreignId('file_id')->constrained(config('score-crop.file_table'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sc_answer_images');
    }
};