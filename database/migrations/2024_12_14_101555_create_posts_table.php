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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('s_id');
            $table->string('s_name');
            $table->string('f_name');
            $table->string('ssc_roll');
            $table->string('image');


             $table->timestamps();                        
        });                                                                                                                                                                                               
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts'); 
    }
};
