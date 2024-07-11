<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_produit');
            $table->string('categorie');
            $table->string('classe');
            $table->string('conditionnement');
            $table->string('origine');
            $table->string('unite_vente')->nullable();
            $table->integer('quantite')->nullable();
            $table->integer('prix_unitaire');
            $table->string('logistique');
            $table->string('image');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
};
