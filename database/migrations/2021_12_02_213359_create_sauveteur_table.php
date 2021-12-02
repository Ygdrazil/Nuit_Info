<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSauveteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauveteur', function (Blueprint $table) {
            $table->id("id_sauveteur");
            $table->string("nom")->nullable();
            $table->string("prenom")->nullable();
            $table->date("naissance")->nullable();
            $table->date("mort")->nullable();
            $table->text("description");
            $table->string("source")->nullable();
            //$table->timestamps();

            Schema::update('participant', function (Blueprint $table) {
                $table->foreignId("id_sauveteur")->references('id_sauveteur')->on('sauveteur')->nullable();
            });

            Schema::update('poste', function (Blueprint $table) {
                $table->foreignId("id_sauveteur")->references('id_sauveteur')->on('sauveteur');
            });

            Schema::update('soumission', function (Blueprint $table) {
                $table->foreignId("id_sauveteur")->references('id_sauveteur')->on('sauveteur')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sauveteur');
    }
}
