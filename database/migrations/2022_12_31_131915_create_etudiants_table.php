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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('ville')->nullable();
            $table->string('telephone')->nullable();
            $table->string('photo')->nullable();
            $table->string('contact_parent')->nullable();
            $table->string('nom_parent')->nullable();
            $table->string('ville_provenance')->nullable();
            $table->enum('statut', ['en_regle','non_en_regle']);
            $table->enum('niveau', ['A1','A2','B1','B2','C1']);
            $table->string('niveau_etude')->nullable();
            $table->enum('sexe', ['Masculin','Feminin']);
            $table->string('age')->nullable();
            $table->text('description')->nullable();
            $table->string('formation_scolaire')->nullable();
            $table->string('formation_professionnelle')->nullable();
            $table->unsignedBigInteger('formation_id')->unique()->unsigned();
            $table->unsignedBigInteger('tranche_id')->unique()->unsigned();
            $table->unsignedBigInteger('classe_id')->unique()->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tranche_id')->references('id')->on('tranches')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('classe_id')->references('id')->on('klasses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
};
