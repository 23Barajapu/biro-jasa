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
        Schema::create('transactions', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('nopol')->nullable();
            $table->string('vehicle_type')->nullable(); // Tipe (e.g., V 1 M A/T)
            $table->year('year')->nullable();
            $table->string('frame_number')->nullable();
            $table->string('engine_number')->nullable();
            $table->boolean('stnk_received')->default(false); // STNK (1/0)
            $table->boolean('plat_received')->default(false); // PLAT (1/0)
            $table->date('transaction_date')->nullable();
            $table->decimal('capital_cost', 15, 2)->default(0); // Modal
            $table->decimal('selling_price', 15, 2)->default(0); // Jual
            $table->decimal('profit', 15, 2)->default(0); // Keuntungan
            $table->foreignId('region_id')->constrained('regions')->onDelete('cascade');
            $table->boolean('bpkb_received')->default(false); // BPKB (1/0)
            $table->date('bpkb_date')->nullable(); // TANGGAL (BPKB)
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
            $table->string('evidence_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
