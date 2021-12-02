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
