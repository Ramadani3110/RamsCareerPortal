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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('department')->nullable();
            $table->string('location')->nullable();
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->enum('work_type', ['on-site', 'remote', 'hybrid'])->default('on-site');
            $table->string('salary_min')->nullable();
            $table->string('salary_max')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
