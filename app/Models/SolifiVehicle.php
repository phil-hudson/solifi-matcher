<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolifiVehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model_range',
        'ids_code',
        'description',
        'model_year',
        'model_year_decimal',
        'body_style',
        'long_description',
        'model_group',
        'model_tree_description',
        'vehicle_tree_description',
        'special_edition',
        'current_vehicle',
        'commercial',
        'reclaim_vat',
        'basic_price',
        'manufacturers_delivery_price',
        'mrp',
        'p11d_price',
        'date_of_introduction',
        'end_of_production',
        'price_list_date',
        'door',
        'engine_size',
        'insurance_group',
        'fuel_type',
        'transmission_type',
        'mpg_urban',
        'mpg_extra_urban',
        'mpg_combined',
        'co2_emissions',
        'euro_emissions',
        'bhp',
        'power_ps',
        'power_kw',
        'torque',
        'rpm_for_torque',
        'length',
        'width',
        'height',
        'gross_vehicle_weight',
        'unladen_weight',
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
        'seats',
        'otr_price',
        'win_commercial',
        'trim'
    ];

    protected $primaryKey = 'ids_code';

    public $timestamps = false;

    protected $dates = [
        'date_of_introduction',
        'end_of_production',
        'price_list_date'
    ];
}
