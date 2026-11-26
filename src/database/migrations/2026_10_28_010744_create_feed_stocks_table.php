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
        Schema::create('feed_stocks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('feed_id')
                ->constrained('feeds')->restrictOnDelete();

            $table->dateTime('transaction_at');
            $table->string('transaction_type', 20);
            // in, out, adjustment

            $table->decimal('quantity_kg', 10, 3);
            // Positif untuk masuk, negatif untuk keluar

            $table->string('reference', 100)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['feed_id', 'transaction_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_stocks');
    }
};
