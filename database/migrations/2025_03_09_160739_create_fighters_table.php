<?php
// database/migrations/[timestamp]_create_fighters_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fighters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthday');
            $table->enum('weightclass', [
                'Heavyweight',
                'Light Heavyweight',
                'Middleweight',
                'Welterweight',
                'Lightweight',
                'Featherweight',
                'Bantamweight',
                'Flyweight',
            ]);
            $table->string('photo_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fighters');
    }
};
