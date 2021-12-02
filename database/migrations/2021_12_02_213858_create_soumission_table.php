<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoumissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soumission', function (Blueprint $table) {
            $table->id("id_soumission");
            $table->string("description");
            //$table->timestamps();
        });

        Schema::update('soumission', function (Blueprint $table) {
            $table->foreignId("email_user")->nullable()->references('users')->on('email');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soumission');
    }
}
