<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFilmStartFilmGoFilmToFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('films', function (Blueprint $table) {
            $table->timestamp('film_start')->after('price');
            $table->timestamp('film_go')->after('film_start');
            $table->timestamp('film_end')->after('film_go');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('films', function (Blueprint $table) {
            $table->dropColumn('film_start');
            $table->dropColumn('film_go');
            $table->dropColumn('film_end');
        });
    }
}
