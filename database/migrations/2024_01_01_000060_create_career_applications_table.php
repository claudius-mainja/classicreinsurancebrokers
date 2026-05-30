<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('career_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained('careers')->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->string('phone', 50);
            $table->text('cover_letter')->nullable();
            $table->string('cv_path');
            $table->string('status', 50)->default('pending');
            $table->timestamps();

            $table->index('career_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('career_applications');
    }
};
