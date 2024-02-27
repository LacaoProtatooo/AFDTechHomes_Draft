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
        Schema::create('properties', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('agent_id');
            $table->decimal('price');
            $table->string('address');
            $table->string('property_type');
            $table->string('description');
            $table->string('rooms');
            $table->integer('sqm');
            $table->string('cr');
            $table->string('parking');
            $table->string('status');
            $table->string('image_path')->nullable();
            $table->timestamps(); 

            // FK
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Property');
    }
};
