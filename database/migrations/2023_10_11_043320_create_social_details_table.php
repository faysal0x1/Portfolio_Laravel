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
        Schema::create('social_details', function (Blueprint $table) {
            $table->id();
            $table->string('Facebook');
            $table->string('Twitter');
            $table->string('Linkedin');
            $table->string('Stack_Overflow');
            $table->string('Leetcode');
            $table->string('Hackerank');
            $table->string('github');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_details');
    }
};
