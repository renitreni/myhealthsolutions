<?php

use App\Models\Appointment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// CREATE TABLE consultations (
//     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     appointment_id BIGINT UNSIGNED UNIQUE NOT NULL,
//     diagnosis TEXT,
//     prescription TEXT,
//     additional_notes TEXT,
//     FOREIGN KEY (appointment_id) REFERENCES appointments(id) ON DELETE CASCADE
// );
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Appointment::class);
            $table->longText('diagnosis');
            $table->longText('prescription');
            $table->longText('additional_notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
