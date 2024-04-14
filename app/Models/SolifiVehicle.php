<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class SolifiVehicle extends Model
{
    use HasFactory, Searchable;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'date_of_introduction' => 'datetime:Y-m-d',
        'end_of_production' => 'datetime:Y-m-d',
        'price_list_date' => 'datetime:Y-m-d',
    ];

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
        'trim',
    ];

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $dates = [
        'date_of_introduction',
        'end_of_production',
        'price_list_date',
    ];

    /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */
    public function toSearchableArray()
    {
        return array_merge($this->toArray(), [
            'id' => (string) $this->id,
            'created_at' => $this->created_at ? $this->created_at->toIso8601String() : null,
            'make' => $this->make,
            'model_range' => $this->model_range,
            'description' => $this->description,
            'model_year' => $this->model_year,
            'model_year_decimal' => (string) $this->model_year_decimal,
            'body_style' => $this->body_style,
            'fuel_type' => $this->fuel_type,
            'transmission_type' => (string) $this->transmission_type,
            'co2_emissions' => $this->co2_emissions,
            'boot_capacity' => $this->boot_capacity,
            'fuel_tank_size' => $this->fuel_tank_size,
            'maximum_speed' => $this->maximum_speed,
            'acceleration_0_100_kph' => $this->acceleration_0_100_kph,
            'acceleration_0_60_mph' => $this->acceleration_0_60_mph,
            'front_tyres' => $this->front_tyres,
            'rear_tyres' => $this->rear_tyres,
            'spare_tyre' => $this->spare_tyre,
            'front_brakes' => $this->front_brakes,
            'rear_brakes' => $this->rear_brakes,
            'servicing_indication' => $this->servicing_indication,
            'image_filename' => $this->image_filename,
            'gears' => $this->gears,
            'axles' => $this->axles,
            'manufacturer_model_description' => $this->manufacturer_model_description,
            'seats' => $this->seats,
            'otr_price' => $this->otr_price,
            'win_commercial' => $this->win_commercial,
            'trim' => (string) $this->trim,
            'basic_price' => (float) $this->basic_price,
            'mrp' => (float) $this->mrp,
            'special_edition' => (bool) $this->special_edition,
            'current_vehicle' => (bool) $this->current_vehicle,
            'door' => (int) $this->door,
            'bhp' => (int) $this->bhp,
            'power_ps' => (int) $this->power_ps,
            'power_kw' => (int) $this->power_kw,
        ]);
    }

    public function searchableAs()
    {
        return 'solifi_vehicles_index';
    }
}
