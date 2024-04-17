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
            // Modify columns to accept numeric values
            $table->decimal('bhp', 10, 1)->nullable()->change();
            $table->decimal('co2_emissions', 10, 1)->nullable()->change();
            $table->decimal('euro_emissions', 10, 1)->nullable()->change();
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
            // Revert changes if needed
            $table->integer('bhp')->change();
            $table->integer('co2_emissions')->change();
            $table->integer('euro_emissions')->change();
        });
    }
};
