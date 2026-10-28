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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();

            $table->string('code', 30)->unique();
            $table->string('name', 100);
            $table->string('type', 30);
            // medicine, vitamin, vaccine, supplement

            $table->string('brand', 100)->nullable();
            $table->string('form', 50)->nullable();
            // powder, liquid, tablet, injection

            $table->string('stock_unit', 20);
            // ml, gram, tablet, dose

            $table->text('description')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
