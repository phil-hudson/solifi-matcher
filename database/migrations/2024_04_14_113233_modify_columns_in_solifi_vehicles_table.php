<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsInSolifiVehiclesTable extends Migration
{
    public function up()
    {
        Schema::table('solifi_vehicles', function (Blueprint $table) {
            $columns = [
                'towing_weight_braked',
                'towing_weight_unbraked',
                'wheel_base',
                'ground_clearance',
                'boot_capacity',
                'fuel_tank_size',
                'maximum_speed',
                'acceleration_0_100_kph',
                'acceleration_0_60_mph',
                'front_tyres',
                'rear_tyres',
                'spare_tyre',
                'front_brakes',
                'rear_brakes',
                'servicing_indication',
                'image_filename',
                'gears',
                'axles',
                'manufacturer_model_description',
                'gross_vehicle_weight',
                'door',
                'unladen_weight',
                'height',
                'length',
                'width',
            ];

            foreach ($columns as $column) {
                $table->string($column)->nullable()->change();
            }
        });
    }

    public function down()
    {
        Schema::table('solifi_vehicles', function (Blueprint $table) {
            // Define down method if needed
        });
    }
}
