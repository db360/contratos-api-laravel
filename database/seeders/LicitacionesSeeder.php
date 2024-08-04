<?php

namespace Database\Seeders;

use App\Models\Licitacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ruta del archivo JSON
        $jsonPath = base_path('database/seeders/licitaciones.json');

        
        // Leer el archivo JSON
        $json = file_get_contents($jsonPath);

        // Convertir el contenido JSON a un array
        $data = json_decode($json, true);

        // Iterar sobre los datos y crear instancias del modelo
        foreach ($data as $item) {
            Licitacion::create($item);
        }
    }
}
