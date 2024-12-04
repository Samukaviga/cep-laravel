<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('anddresses', function (Blueprint $table) {
            $table->id();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anddresses');
    }
};
