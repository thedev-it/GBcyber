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
        Schema::create('outils', function (Blueprint $table) {
            $table->id();
            $table->string('type_outil');
            $table->string('titre');
            $table->string('tarification');
            $table->string('description');
            $table->string('lien_outil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outils');
    }
};
