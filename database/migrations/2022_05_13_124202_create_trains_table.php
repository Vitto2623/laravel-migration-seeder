<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 50);
            $table->string("stazione_di_partenza", 30);
            $table->string("stazione_di_arrivo", 30);
            $table->dateTime("orario_di_partenza");
            $table->dateTime("orario_di_arrivo");
            $table->string("codice_treno");
            $table->tinyInteger("numero_carrozze");
            $table->dateTime("in_orario");
            $table->string("cancellato");
            $table->date("date");
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
        Schema::dropIfExists('trains');
    }
}
