<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// CREATE TABLE notifications (
//     id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     user_id BIGINT UNSIGNED NOT NULL,
//     message TEXT NOT NULL,
//     is_read BOOLEAN DEFAULT FALSE,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
// );
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'to_id');
            $table->foreignIdFor(User::class, 'from_id');
            $table->longText('message');
            $table->integer('is_read');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
