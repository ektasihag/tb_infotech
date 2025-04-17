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
        Schema::create('company_values', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->text('description1');
            $table->string('image')->nullable();
            $table->string('title2');
            $table->text('description2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_values');
    }
};
