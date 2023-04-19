<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
           $table->integer('id',TRUE,FALSE);
           $table->string('name')->unique();
           $table->string('description');
           $table->integer('validate');
           $table->float('price');
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
