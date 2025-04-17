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
        Schema::create('team_stats', function (Blueprint $table) {
            $table->id();
            $table->string('satisfied_clients_number'); // e.g., 500
            $table->string('satisfied_clients_title');  // e.g., "Satisfied Clients"
            $table->string('positive_feedback_number'); // e.g., 99
            $table->string('positive_feedback_title');  // e.g., "Positive Feedback"
            $table->string('project_ongoing_number');    // e.g., 25
            $table->string('project_ongoing_title');     // e.g., "PROJECT ONGOING"
            $table->string('years_of_experience_number'); // e.g., 15
            $table->string('years_of_experience_title');  // e.g., "YEARS OF EXPERIENCES"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_stats');
    }
};
