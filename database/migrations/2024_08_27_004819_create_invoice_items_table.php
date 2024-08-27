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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            // If there's an error change the 'cascadOnDelete' to 'Ondelete('cascade')'
            $table->foreignId('invoice_id')->constrained()->cascadeOnDelete();
            $table->text('description');
            $table->integer('quantity');
            $table->decimal('unit_price',10,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
