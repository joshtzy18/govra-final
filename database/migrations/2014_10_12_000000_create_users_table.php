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
            $table->string('name')->nullable(false);
            $table->string(column: 'gender')->nullable(false);
            $table->string(column: 'contact')->nullable(false);
            $table->string(column: 'email')->unique();
            $table->timestamp(column: 'email_verified_at')->nullable(false);
            $table->string(column: 'username')->nullable(false);
            $table->string(column: 'password');
            $table->string(column: 'role')->default(User::User);
            $table->rememberToken();
            $table->timestamps();
          
          ////////////////////////////////////////////////
          $table->string(column: 'surname', length: 10)->nullable();
            $table->string(column: 'first_name', length: 10)->nullable();
            $table->string(column: 'middle_name', length: 10)->nullable();
            $table->string(column: 'name_extension', length: 10)->nullable();
            $table->string(column: 'date_of_birth', length: 10)->nullable();
            $table->string(column: 'place_of_birth', length: 10)->nullable();
            $table->string(column: 'sex', length: 10)->nullable();
            $table->string(column: 'civil_status', length: 10)->nullable();
            $table->string(column: 'height', length: 10)->nullable();
            $table->string(column: 'weight', length: 10)->nullable();
            $table->string(column: 'blood_type', length: 10)->nullable();
            $table->string(column: 'gsis_id_no', length: 10)->nullable();
            $table->string(column: 'pagibig_id_no', length: 10)->nullable();
            $table->string(column: 'philhealth_no', length: 10)->nullable();
            $table->string(column: 'sss_no', length: 10)->nullable();
            $table->string(column: 'tin_no', length: 10)->nullable();
            $table->string(column: 'agency_employee_no', length: 10)->nullable();
            $table->string(column: 'citizenship', length: 10)->nullable();
           //residential adddress
            $table->string(column: 'r-house_block_no', length: 10)->nullable();
            $table->string(column: 'r-street', length: 10)->nullable();
            $table->string(column: 'r-subdivision/village', length: 10)->nullable();
            $table->string(column: 'r-barangay', length: 10)->nullable();
            $table->string(column: 'r-city_municipality', length: 10)->nullable();
            $table->string(column: 'r-province', length: 10)->nullable();
            $table->string(column: 'r-zip-code', length: 10)->nullable();

             //permanenet adddress
             $table->string(column: 'p-house_block_no', length: 10)->nullable();
             $table->string(column: 'p-street', length: 10)->nullable();
             $table->string(column: 'p-subdivision/village', length: 10)->nullable();
             $table->string(column: 'p-barangay', length: 10)->nullable();
             $table->string(column: 'p-city_municipality', length: 10)->nullable();
             $table->string(column: 'p-province', length: 10)->nullable();
             $table->string(column: 'p-zip-code', length: 10)->nullable();

             $table->string(column: 'telephone-no', length: 10)->nullable();
             $table->string(column: 'mobile-no', length: 10)->nullable();

             //family background
             $table->string(column: 'spouses-surname', length: 10)->nullable();
             $table->string(column: 'f-first-name', length: 10)->nullable();
             $table->string(column: 'f-extension-name', length: 10)->nullable();
             $table->string(column: 'f-middle-name', length: 10)->nullable();
             $table->string(column: 'occupation', length: 10)->nullable();
             $table->string(column: 'employer-business-name', length: 10)->nullable();
             $table->string(column: 'business-address', length: 10)->nullable();
             $table->string(column: 'f-telephone-no', length: 10)->nullable();
             $table->string(column: 'father-surname', length: 10)->nullable();
             $table->string(column: 'father-first-name', length: 10)->nullable();
             $table->string(column: 'father-extension-name', length: 10)->nullable();
             $table->string(column: 'mother-surname', length: 10)->nullable();
             $table->string(column: 'mother-first-name', length: 10)->nullable();
             $table->string(column: 'mother-middle-name', length: 10)->nullable();
             $table->string(column: 'children-1', length: 10)->nullable();
             $table->string(column: 'children-1-dob', length: 10)->nullable();
             $table->string(column: 'children-2', length: 10)->nullable();
             $table->string(column: 'children-2-dob', length: 10)->nullable();
             $table->string(column: 'children-3', length: 10)->nullable();
             $table->string(column: 'children-3-dob', length: 10)->nullable();
             $table->string(column: 'children-4', length: 10)->nullable();
             $table->string(column: 'children-4-dob', length: 10)->nullable();
             $table->string(column: 'children-5', length: 10)->nullable();
             $table->string(column: 'children-5-dob', length: 10)->nullable();
             $table->string(column: 'children-6', length: 10)->nullable();
             $table->string(column: 'children-6-dob', length: 10)->nullable();
             $table->string(column: 'children-7', length: 10)->nullable();
             $table->string(column: 'children-7-dob', length: 10)->nullable();
             $table->string(column: 'children-8', length: 10)->nullable();
             $table->string(column: 'children-8-dob', length: 10)->nullable();
             $table->string(column: 'children-9', length: 10)->nullable();
             $table->string(column: 'children-9-dob', length: 10)->nullable();
             $table->string(column: 'children-10', length: 10)->nullable();
             $table->string(column: 'children-10-dob', length: 10)->nullable();
             $table->string(column: 'children-11', length: 10)->nullable();
             $table->string(column: 'children-11-dob', length: 10)->nullable();
             $table->string(column: 'children-12', length: 10)->nullable();
             $table->string(column: 'children-12-dob', length: 10)->nullable();
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