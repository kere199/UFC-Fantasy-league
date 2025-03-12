<?php
// database/migrations/[timestamp]_create_fighter_user_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fighter_user', function (Blueprint $table) {
            $table->foreignId('fighter_id');
            $table->foreignId('user_id');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fighter_user');
    }
};
