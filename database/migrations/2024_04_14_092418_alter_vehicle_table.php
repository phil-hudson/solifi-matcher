<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solifi_vehicles', function (Blueprint $table) {
            $table->decimal('boot_capacity', 8, 2)->nullable()->change();
            $table->decimal('fuel_tank_size', 8, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solifi_vehicles', function (Blueprint $table) {
            $table->integer('boot_capacity')->nullable()->change();
            $table->integer('fuel_tank_size')->nullable()->change();
        });
    }
};