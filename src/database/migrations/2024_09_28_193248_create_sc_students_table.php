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
        Schema::create('sc_students', function (Blueprint $table) {
            $table->id();
            $table->uuid('scStudentId')->unique()->index();
            $table->foreignId('user_id')->constrained(config('score-crop.user.table'));
            $groupTable = config('score-crop.group.table');
            if ($groupTable) {
                $table->foreignId('group_id')->nullable()->constrained($groupTable);
            } else {
                $table->foreignId('group_id')->nullable();
            }
            $table->tinyInteger('grade');
            $table->tinyInteger('class');
            $table->tinyInteger('number');
            $table->text('name');
            $table->text('ruby_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sc_students');
    }
};
