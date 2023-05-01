<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
             $table->integer('id',TRUE,FALSE);
           $table->integer('package');
           $table->integer('channel');
           $table->timestamps();
 $table->foreign('package')
      ->constrained()
      ->onUpdate('cascade')
      ->onDelete('cascade')->references('id')->on('packages');


 $table->foreign('channel')
      ->constrained()
      ->onUpdate('cascade')
      ->onDelete('cascade')->references('id')->on('channels');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
