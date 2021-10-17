<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Details extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('telegram')->nullable();
            $table->text('twitter')->nullable();
            $table->text('medium')->nullable();
            $table->text('reddit')->nullable();
            $table->text('github')->nullable();
            $table->text('bscscan')->nullable();
            $table->text('pancake')->nullable();
            $table->text('coingecko')->nullable();
            $table->text('coinmarketcap')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}
