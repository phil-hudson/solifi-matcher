<?php

namespace Database\Seeders;

use App\Models\SolifiVehicle;
use App\Models\SoliFiveVehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SolifiVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Read CSV file
        $file = fopen(Storage::path('../../data/full_solifi_vehicle_table.csv'), 'r');
        $header = fgetcsv($file); // Get the header row
    
        // Read data and insert into database
        while ($row = fgetcsv($file)) {
            // Convert empty cells to NULL
            foreach ($row as $key => $value) {
                if ($value === 'NULL') {
                    $row[$key] = null;
                }
            }
    
            // Convert date fields to the correct format
            $dateFields = ['date_of_introduction', 'end_of_production', 'price_list_date'];
            foreach ($dateFields as $field) {
                if (isset($row[$field]) && $row[$field] !== null) {
                    $date = \DateTime::createFromFormat('d/m/Y', $row[$field]);
                    $row[$field] = $date ? $date->format('Y-m-d') : null;
                }
            }
    
            $data = array_combine($header, $row);
            try {
                SolifiVehicle::create($data);
            } catch (\Exception $e) {
                // Handle any exceptions
                // For debugging, you can log or echo the $data and $e->getMessage() here
            }
        }
    
        fclose($file);
    }
    
}
