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
        Schema::create('sorties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medicament');
                $table->foreign('medicament')->references('id')->on('entrees')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('quantite', 8, 2);
            $table->decimal('prix_unitaire', 8, 2);
            $table->decimal('prix_total', 8, 2);
            $table->date('date_sortie');
            $table->timestamps()
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sorties');
    }
};
