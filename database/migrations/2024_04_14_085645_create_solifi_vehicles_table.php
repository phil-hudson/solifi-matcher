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
        Schema::create('solifi_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model_range');
            $table->string('ids_code')->unique();
            $table->string('description');
            $table->integer('model_year');
            $table->decimal('model_year_decimal', 8, 2);
            $table->string('body_style');
            $table->string('long_description');
            $table->string('model_group');
            $table->string('model_tree_description');
            $table->string('vehicle_tree_description');
            $table->boolean('special_edition');
            $table->boolean('current_vehicle');
            $table->boolean('commercial');
            $table->boolean('reclaim_vat');
            $table->decimal('basic_price', 10, 2);
            $table->decimal('manufacturers_delivery_price', 10, 2);
            $table->decimal('mrp', 10, 2);
            $table->decimal('p11d_price', 10, 2);
            $table->date('date_of_introduction');
            $table->date('end_of_production')->nullable();
            $table->date('price_list_date');
            $table->integer('door');
            $table->decimal('engine_size', 8, 2);
            $table->integer('insurance_group');
            $table->string('fuel_type');
            $table->string('transmission_type');
            $table->decimal('mpg_urban', 8, 2)->nullable();
            $table->decimal('mpg_extra_urban', 8, 2)->nullable();
            $table->decimal('mpg_combined', 8, 2)->nullable();
            $table->integer('co2_emissions')->nullable();
            $table->integer('euro_emissions')->nullable();
            $table->integer('bhp')->nullable();
            $table->decimal('power_ps', 8, 2)->nullable();
            $table->decimal('power_kw', 8, 2)->nullable();
            $table->decimal('torque', 8, 2)->nullable();
            $table->integer('rpm_for_torque')->nullable();
            $table->integer('length');
            $table->integer('width');
            $table->integer('height');
            $table->integer('gross_vehicle_weight');
            $table->integer('unladen_weight');
            $table->integer('towing_weight_braked')->nullable();
            $table->integer('towing_weight_unbraked')->nullable();
            $table->integer('wheel_base');
            $table->integer('ground_clearance')->nullable();
            $table->integer('boot_capacity')->nullable();
            $table->integer('fuel_tank_size')->nullable();
            $table->integer('maximum_speed')->nullable();
            $table->decimal('acceleration_0_100_kph', 8, 2)->nullable();
            $table->decimal('acceleration_0_60_mph', 8, 2)->nullable();
            $table->string('front_tyres')->nullable();
            $table->string('rear_tyres')->nullable();
            $table->string('spare_tyre')->nullable();
            $table->string('front_brakes')->nullable();
            $table->string('rear_brakes')->nullable();
            $table->integer('servicing_indication')->nullable();
            $table->string('image_filename')->nullable();
            $table->integer('gears')->nullable();
            $table->integer('axles')->nullable();
            $table->string('manufacturer_model_description')->nullable();
            $table->integer('seats')->nullable();
            $table->decimal('otr_price', 10, 2)->nullable();
            $table->boolean('win_commercial')->nullable();
            $table->string('trim')->nullable();
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
        Schema::dropIfExists('solifi_vehicles');
    }
};
