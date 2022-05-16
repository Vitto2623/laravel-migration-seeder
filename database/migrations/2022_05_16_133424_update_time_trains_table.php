<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTimeTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->Time("orario_di_partenza")->change();
            $table->Time("orario_di_arrivo")->change();
            $table->Time("in_orario")->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dateTime("orario_di_partenza")->change();
            $table->dateTime("orario_di_arrivo")->change();
            $table->dateTime("in_orario")->change();
        });
    }
}
