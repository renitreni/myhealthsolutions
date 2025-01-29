<?php

use App\Models\Patient;
use App\Models\Specialist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// CREATE TABLE reviews (
//     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     patient_id BIGINT UNSIGNED NOT NULL,
//     specialist_id BIGINT UNSIGNED NOT NULL,
//     rating TINYINT UNSIGNED CHECK (rating BETWEEN 1 AND 5),
//     review_text TEXT,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class);
            $table->foreignIdFor(Specialist::class);
            $table->integer('rating');
            $table->text('review_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
