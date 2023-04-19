<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('channels', function (Blueprint $table) {
           $table->integer('id',TRUE,FALSE);
           $table->string('name')->unique();
           $table->string('price');
            $table->integer('category');
 $table->foreign('category')
      ->constrained()
      ->onUpdate('cascade')
      ->onDelete('cascade')->references('id')->on('categories');

        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
