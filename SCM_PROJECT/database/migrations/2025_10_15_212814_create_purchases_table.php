<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            $table->date('purchase_date');
            $table->decimal('total', 10, 2)->default(0);
            $table->string('status')->default('Pendiente');
            $table->timestamps();

            // Relación con proveedor
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
