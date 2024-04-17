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
            // Modify the column to be nullable
            $table->string('vehicle_tree_description')->nullable()->change();
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
            // Revert the column to be non-nullable
            $table->string('vehicle_tree_description')->nullable(false)->change();
        });
    }
};
