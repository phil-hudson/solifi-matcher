<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDoorColumnInSolifiVehiclesTable extends Migration
{
    public function up()
    {
        Schema::table('solifi_vehicles', function (Blueprint $table) {
            $table->unsignedInteger('door')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('solifi_vehicles', function (Blueprint $table) {
            // If you want to revert the changes, you can define the down method here
            // However, it's not necessary to define a down method for this migration
        });
    }
}
