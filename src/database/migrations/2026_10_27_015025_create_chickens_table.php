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
          Schema::create('chickens', function (Blueprint $table) {
            $table->id();

            $table->string('tag_code', 50)->unique();

            $table->foreignId('flock_id')
                ->constrained('flocks')
                ->restrictOnDelete();

            $table->foreignId('current_zone_id')
                ->nullable()
                ->constrained('house_zones')
                ->nullOnDelete();

            $table->date('birth_date')->nullable();
            $table->date('arrival_date');
            $table->date('exit_date')->nullable();

            $table->string('status', 30)->default('active');
            // active, sick, dead, culled, sold

            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['flock_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chickens');
    }
};
