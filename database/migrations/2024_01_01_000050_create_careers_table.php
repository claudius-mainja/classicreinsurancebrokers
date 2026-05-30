<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('department', 100);
            $table->string('location', 100);
            $table->string('type', 50);
            $table->text('description');
            $table->text('requirements')->nullable();
            $table->text('responsibilities')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('posted_at');
            $table->timestamp('closing_at')->nullable();
            $table->timestamps();

            $table->index(['is_active', 'posted_at']);
            $table->index('department');
            $table->index('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
