<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Details2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('active')->nullable();
            $table->text('softCap_reach')->nullable();
            $table->text('hardCap_reach')->nullable();
            $table->text('closedTime')->nullable();
            $table->text('openTime')->nullable();
            $table->text('totalRaised')->nullable();
            $table->text('totalSoldToken')->nullable();
            $table->text('contract')->nullable();
            $table->text('contract_abi')->nullable();
            //
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
