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
        Schema::create('patient', function (Blueprint $table) {
        $table->id();
        $table->foreignId('users_id')->constrained()->cascadeOnDelete();
        $table->string('fName');
        $table->string('lName');
        $table->string('email')->unique();
        $table->integer('phoneNumber');
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->string('gender');
        $table->integer('MRN')->unique();
        $table->date('dateOfBirth');
        $table->rememberToken();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
