<?php

use App\Models\Patient;
use App\Models\Specialist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// CREATE TABLE appointments (
//     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     patient_id BIGINT UNSIGNED NOT NULL,
//     specialist_id BIGINT UNSIGNED NOT NULL,
//     appointment_date DATETIME NOT NULL,
//     type ENUM('online', 'onsite') NOT NULL,
//     status ENUM('pending', 'confirmed', 'cancelled', 'completed') DEFAULT 'pending',
//     notes TEXT,
//     FOREIGN KEY (patient_id) REFERENCES patients(id) ON DELETE CASCADE,
//     FOREIGN KEY (specialist_id) REFERENCES specialists(id) ON DELETE CASCADE
// );
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class);
            $table->foreignIdFor(Specialist::class);
            $table->dateTime('appointment_date');
            $table->string('appointment_type');
            $table->string('appointment_status');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
