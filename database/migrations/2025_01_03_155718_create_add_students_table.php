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
        Schema::create('add_students', function (Blueprint $table) {
            $table->id();
            $table->string('s_name');
            $table->string('s_image');
            $table->string('s_roll');
            $table->string('s_father_n');
            $table->string('birthCertificateNumber');
            $table->string('phoneNumber');
            $table->string('course');
            $table->string('shift');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_students');
    }
};
