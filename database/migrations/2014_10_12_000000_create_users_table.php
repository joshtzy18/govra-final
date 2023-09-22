<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    const SuperAdmin = "SuperAdmin";   
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name')->nullable();
            $table->string(column: 'gender')->nullable();
            $table->string(column: 'contact')->nullable();
            $table->string(column: 'email')->unique();
            $table->timestamp(column: 'email_verified_at')->nullable();
            $table->string(column: 'username')->nullable();
            $table->string(column: 'password');
            $table->string(column: 'role')->default(User::User);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};