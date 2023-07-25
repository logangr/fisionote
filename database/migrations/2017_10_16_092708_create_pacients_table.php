<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni')->nullable();
            $table->string('nom')->nullable();
            $table->string('llinatges')->nullable();
            $table->string('dni_tutor_legal')->nullable();
            $table->string('tutor_legal')->nullable();
            $table->dateTime('data_naixement')->nullable();
            $table->string('adreca_1')->nullable();
            $table->string('adreca_2')->nullable();
            $table->string('telefon_1')->nullable();
            $table->string('telefon_2')->nullable();
            $table->string('email')->nullable();
            $table->longText('antecedents_pat')->nullable();
            $table->longText('historia')->nullable();
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
        Schema::dropIfExists('pacients');
    }
}
