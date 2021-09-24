<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baux', function (Blueprint $table) {
            $table->id();
            $table->string('titre_contract');
            $table->string('numero_contract');
            $table->string('partie_prenante');
            $table->string('partie_adverse');
            $table->text('articles');
            $table->date('date_debut');
            $table->string('date_fin');
            $table->string('statut');
            $table->string('commentaire');
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
        Schema::dropIfExists('baux');
    }
}
