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
            // Add missing columns from the original list with the nullable modifier
            $table->string('parent_ids_code')->nullable();
            $table->string('vehicle_factory_code')->nullable();
            $table->string('fleetware_code')->nullable();
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
            // Drop the columns if needed, this is just a simple example
            $table->dropColumn([
                'parent_ids_code',
                'vehicle_factory_code',
                'fleetware_code',
            ]);
        });
    }
};
