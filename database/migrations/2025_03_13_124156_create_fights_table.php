<?php
// database/migrations/[timestamp]_create_fights_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fighter_1_id');
            $table->foreignId('fighter_2_id');
            $table->foreignId('winner_id')->nullable()
            ;
            $table->enum('method', ['decision', 'knockout', 'submission'])->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fights');
    }
};
