<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyHeightColumnInSolifiVehiclesTable extends Migration
{
    public function up()
    {
        Schema::table('solifi_vehicles', function (Blueprint $table) {
            $table->unsignedInteger('height')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('solifi_vehicles', function (Blueprint $table) {
            // If needed, define down method here
        });
    }
}
