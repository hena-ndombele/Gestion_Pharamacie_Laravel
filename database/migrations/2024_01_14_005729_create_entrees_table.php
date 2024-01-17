<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('entrees')) {
            Schema::create('entrees', function (Blueprint $table) {
                $table->id();
                $table->string('medicament');
                $table->decimal('quantite', 8, 2);
                $table->decimal('prix_unitaire', 8, 2);
                $table->decimal('prix_total', 8, 2);
                $table->foreignId('categorie_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
                $table->date('date_entree');
                $table->date('expiration');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('entrees');
    }
}