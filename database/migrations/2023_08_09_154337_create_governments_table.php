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
        Schema::create('governments', function (Blueprint $table) {
            $table->id();
            // $table->foreignId(column: 'government_id')->references(column: 'id')->on(table: 'governments')->onDelete(action: 'cascade');
            $table->string(column: 'logo', length: 2048)->nullable();
            $table->string(column: 'name', length: 255);
            $table->string(column: 'type', length: 255);
            $table->string(column: 'overview', length: 2048);
            $table->string(column: 'vision', length: 2048);
            $table->string(column: 'mission', length: 2048);
            $table->string(column: 'location', length: 255);
            $table->string(column: 'website', length: 255);
            $table->string(column: 'contacts', length: 255);
            $table->boolean(column: 'active');
            $table->foreignIdFor(model: \App\Models\User::class, column:'user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('governments');
    }
};