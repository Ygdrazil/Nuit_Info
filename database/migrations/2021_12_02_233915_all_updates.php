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
        Schema::update('bateau_sauvetage', function (Blueprint $table) {
            $table->foreign("id_bateau")->references('id_bateau')->on('bateau');
        });

        Schema::update('info_bateau', function (Blueprint $table) {
            $table->foreign("id_bateau")->references('id_bateau')->on('bateau');
        });

        Schema::update('soumission', function (Blueprint $table) {
            $table->foreign("id_bateau")->references('id_bateau')->on('bateau')->nullable();
        });

		Schema::update('bateau_sauvetage', function (Blueprint $table) {
			$table->foreign("id_sauvetage")->references('id_sauvetage')->on('sauvetage');
		});

		Schema::update('participant', function (Blueprint $table) {
			$table->foreign("id_sauvetage")->references('id_sauvetage')->on('sauvetage');
		});

		Schema::update('participant', function (Blueprint $table) {
			$table->foreign("id_sauveteur")->references('id_sauveteur')->on('sauveteur')->nullable();
		});

		Schema::update('poste', function (Blueprint $table) {
			$table->foreign("id_sauveteur")->references('id_sauveteur')->on('sauveteur');
		});

		Schema::update('soumission', function (Blueprint $table) {
			$table->foreign("id_sauveteur")->references('id_sauveteur')->on('sauveteur')->nullable();
		});

		Schema::update('soumission', function (Blueprint $table) {
            $table->foreign("email_user")->nullable()->references('users')->on('email');
        });

		Schema::update('soumission', function (Blueprint $table) {
			$table->foreign("id_sauvetage")->references('id_sauvetage')->on('sauvetage')->nullable();
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
