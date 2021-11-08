<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bauxes', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()-> index();
            $table->string('titre_contract');
            $table->string('numero_contract');
            $table->string('partie_prenante');
            $table->string('partie_adverse');
            $table->text('articles')->nullable();
            $table->date('date_debut');
            $table->string('date_fin');
            $table->string('statut')->nullable();
            $table->string('commentaire')->nullable();;
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
        Schema::dropIfExists('bauxes');
    }
}
