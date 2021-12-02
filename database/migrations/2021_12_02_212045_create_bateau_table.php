<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBateauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateau', function (Blueprint $table) {
            $table->id("id_bateau");
            $table->string('nom');
            $table->date('annee_debut')->nullable();
            $table->text("description");
            //$table->timestamps();
        });

        Schema::update('bateau_sauvetage', function (Blueprint $table) {
            $table->foreignId("id_bateau")->references('id_bateau')->on('bateau');
        });

        Schema::update('info_bateau', function (Blueprint $table) {
            $table->foreignId("id_bateau")->references('id_bateau')->on('bateau');
        });

        Schema::update('soumission', function (Blueprint $table) {
            $table->foreignId("id_bateau")->references('id_bateau')->on('bateau')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bateau');
    }
}
