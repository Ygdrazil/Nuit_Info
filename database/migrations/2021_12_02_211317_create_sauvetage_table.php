<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSauvetageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauvetage', function (Blueprint $table) {
            $table->id("id_sauvetage");
            $table->text("description");
            $table->string('source')->nullable();
            $table->string('titre');
            $table->date('date_sauvetage')->nullable();
            $table->string('info_sauvetage')->nullable();
            $table->integer('nb_sauve')->nullable();
            $table->time('duree')->nullable();
            $table->integer('nb_equipage_sauve')->nullable();
            //$table->timestamps();

            Schema::update('bateau_sauvetage', function (Blueprint $table) {
                $table->foreignId("id_sauvetage")->references('id_sauvetage')->on('sauvetage');
            });

            Schema::update('soumission', function (Blueprint $table) {
                $table->foreignId("id_sauvetage")->references('id_sauvetage')->on('sauvetage')->nullable();
            });

            Schema::update('participant', function (Blueprint $table) {
                $table->foreignId("id_sauvetage")->references('id_sauvetage')->on('sauvetage');
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
        Schema::dropIfExists('sauvetage');
    }
}
