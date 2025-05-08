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
        Schema::create('voos', function (Blueprint $table) {
            $table->id();
            $table->mediumText('origem');
            $table->mediumText('destino');
            $table->date('data');
            $table->mediumText('companhia');
            $table->mediumText('numero_voo');
            $table->mediumText('preco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voos');
    }
};
