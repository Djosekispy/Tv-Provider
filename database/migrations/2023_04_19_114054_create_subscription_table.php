<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('subscription', function (Blueprint $table) {
            $table->integer('id',TRUE,false);
            $table->integer('user');
            $table->integer('package');
            $table->integer('duration');
            $table->enum('state',['1','0'])->default('1');
            $table->timestamps();

            $table->foreign('package')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade')->references('id')->on('packages');

            $table->foreign('user')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade')->references('id')->on('users');





        });


    }

    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
