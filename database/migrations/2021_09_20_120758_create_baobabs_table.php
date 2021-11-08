<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaobabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baobabs', function (Blueprint $table) {
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
            $table->string('contactsresponsable');
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
        Schema::dropIfExists('baobabs');
    }
}
