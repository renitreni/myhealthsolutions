<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// CREATE TABLE specialists (
//     id BIGINT UNSIGNED PRIMARY KEY, -- Foreign key from users.id
//     specialty VARCHAR(255) NOT NULL,
//     license_number VARCHAR(50) NOT NULL UNIQUE,
//     experience_years INT UNSIGNED,
//     clinic_address TEXT,
//     FOREIGN KEY (id) REFERENCES users(id) ON DELETE CASCADE
// );
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specialists', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('speciality');
            $table->string('license_number');
            $table->integer('experience_years');
            $table->text('clinic_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialists');
    }
};
