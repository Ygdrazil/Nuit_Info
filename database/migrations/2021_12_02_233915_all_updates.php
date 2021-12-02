<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllUpdates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bateau_sauvetage', function (Blueprint $table) {
            $table->foreignId("id_bateau")->references('id_bateau')->on('bateau');
			$table->foreignId("id_sauvetage")->references('id_sauvetage')->on('sauvetage');
        });

        Schema::table('info_bateau', function (Blueprint $table) {
            $table->foreignId("id_bateau")->references('id_bateau')->on('bateau');
        });

		Schema::table('participant', function (Blueprint $table) {
			$table->foreignId("id_sauvetage")->references('id_sauvetage')->on('sauvetage');
			$table->foreignId("id_sauveteur")->references('id_sauveteur')->on('sauveteur')->nullable();
		});

		Schema::table('poste', function (Blueprint $table) {
			$table->foreignId("id_sauveteur")->references('id_sauveteur')->on('sauveteur');
		});

		Schema::table('soumission', function (Blueprint $table) {
			$table->foreignId("id_bateau")->references('id_bateau')->on('bateau')->nullable();
			$table->foreignId("id_sauveteur")->references('id_sauveteur')->on('sauveteur')->nullable();
			$table->foreignId("id_user")->references('id')->on('users');
			$table->foreignId("id_sauvetage")->references('id_sauvetage')->on('sauvetage')->nullable();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
