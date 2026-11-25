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
        Schema::create('house_zones', function (Blueprint $table) {
            $table->id();

            $table->foreignId('house_id')
                ->constrained('houses')
                ->restrictOnDelete();

            $table->string('code', 30);
            $table->string('name', 100);
            $table->string('code_blend', 30);
            $table->string('name_blend', 100);
            $table->unsignedInteger('status', 11);
            $table->unsignedInteger('capacity', 10);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->unique(['house_id', 'code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_zones');
    }
};
