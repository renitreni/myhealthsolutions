<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


// CREATE TABLE patients (
//     id BIGINT UNSIGNED PRIMARY KEY, -- Foreign key from users.id
//     date_of_birth DATE,
//     gender ENUM('male', 'female', 'other'),
//     address TEXT,
//     FOREIGN KEY (id) REFERENCES users(id) ON DELETE CASCADE
// );
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->date('date_of_birth');
            $table->string('gender');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
