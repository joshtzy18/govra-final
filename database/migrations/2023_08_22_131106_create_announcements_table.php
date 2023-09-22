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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('announcement_no', 255);
            $table->string('for', 255);
            $table->string('subject', 255);
            $table->string('content', 2048);
            $table->string('content_table', 2048);
            $table->string('announce_contacts', 2048);
            $table->string('links', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};