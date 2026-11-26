<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flocks', function (Blueprint $table) {
            $table->id();
            $table->string('code', 30)->unique();
            $table->string('breed', 100)->nullable();
            $table->date('start_date');
            $table->unsignedInteger('initial_population');
            $table->string('source')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flocks');
    }
};
