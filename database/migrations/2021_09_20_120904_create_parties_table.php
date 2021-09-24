<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('raison_social');
            $table->string('rccm');
            $table->string('ifu');
            $table->string('capital');
            $table->string('siege');
            $table->string('contact');
            $table->string('domaine_activite');
            $table->string('email')->unique();
            $table->string('Responsable');
            $table->string('contact_responsable');
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
        Schema::dropIfExists('parties');
    }
}
