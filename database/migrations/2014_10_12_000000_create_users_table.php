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
            $table->string(column: 'surname')->nullable();
            $table->string(column: 'first_name')->nullable();
            $table->string(column: 'middle_name')->nullable();
            $table->string(column: 'name_extension')->nullable();
            $table->string(column: 'date_of_birth')->nullable();
            $table->string(column: 'place_of_birth')->nullable();
            $table->string(column: 'sex')->nullable();
            $table->string(column: 'civil_status')->nullable();
            $table->string(column: 'height')->nullable();
            $table->string(column: 'weight')->nullable();
            $table->string(column: 'blood_type')->nullable();
            $table->string(column: 'gsis_id_no')->nullable();
            $table->string(column: 'pagibig_id_no')->nullable();
            $table->string(column: 'philhealth_no')->nullable();
            $table->string(column: 'sss_no')->nullable();
            $table->string(column: 'tin_no')->nullable();
            $table->string(column: 'agency_employee_no')->nullable();
            $table->string(column: 'citizenship')->nullable();
           //residential adddress
            $table->string(column: 'r-house_block_no')->nullable();
            $table->string(column: 'r-street')->nullable();
            $table->string(column: 'r-subdivision/village')->nullable();
            $table->string(column: 'r-barangay')->nullable();
            $table->string(column: 'r-city_municipality')->nullable();
            $table->string(column: 'r-province')->nullable();
            $table->string(column: 'r-zip-code')->nullable();

             //permanenet adddress
             $table->string(column: 'p-house_block_no')->nullable();
             $table->string(column: 'p-street')->nullable();
             $table->string(column: 'p-subdivision/village')->nullable();
             $table->string(column: 'p-barangay')->nullable();
             $table->string(column: 'p-city_municipality')->nullable();
             $table->string(column: 'p-province')->nullable();
             $table->string(column: 'p-zip-code')->nullable();

             $table->string(column: 'telephone-no')->nullable();
             $table->string(column: 'mobile-no')->nullable();

             //family background
             $table->string(column: 'spouses-surname')->nullable();
             $table->string(column: 'f-first-name')->nullable();
             $table->string(column: 'f-extension-name')->nullable();
             $table->string(column: 'f-middle-name')->nullable();
             $table->string(column: 'occupation')->nullable();
             $table->string(column: 'employer-business-name')->nullable();
             $table->string(column: 'business-address')->nullable();
             $table->string(column: 'f-telephone-no')->nullable();
             $table->string(column: 'father-surname')->nullable();
             $table->string(column: 'father-first-name')->nullable();
             $table->string(column: 'father-extension-name')->nullable();
             $table->string(column: 'mother-surname')->nullable();
             $table->string(column: 'mother-first-name')->nullable();
             $table->string(column: 'mother-middle-name')->nullable();
             $table->string(column: 'children-1')->nullable();
             $table->string(column: 'children-1-dob')->nullable();
             $table->string(column: 'children-2')->nullable();
             $table->string(column: 'children-2-dob')->nullable();
             $table->string(column: 'children-3')->nullable();
             $table->string(column: 'children-3-dob')->nullable();
             $table->string(column: 'children-4')->nullable();
             $table->string(column: 'children-4-dob')->nullable();
             $table->string(column: 'children-5')->nullable();
             $table->string(column: 'children-5-dob')->nullable();
             $table->string(column: 'children-6')->nullable();
             $table->string(column: 'children-6-dob')->nullable();
             $table->string(column: 'children-7')->nullable();
             $table->string(column: 'children-7-dob')->nullable();
             $table->string(column: 'children-8')->nullable();
             $table->string(column: 'children-8-dob')->nullable();
             $table->string(column: 'children-9')->nullable();
             $table->string(column: 'children-9-dob')->nullable();
             $table->string(column: 'children-10')->nullable();
             $table->string(column: 'children-10-dob')->nullable();
             $table->string(column: 'children-11')->nullable();
             $table->string(column: 'children-11-dob')->nullable();
             $table->string(column: 'children-12')->nullable();
             $table->string(column: 'children-12-dob')->nullable();





        

        








           

             
         


            

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