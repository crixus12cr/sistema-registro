<?php

namespace Database\Seeders;

use App\Models\Tipo_identificacione;
use Illuminate\Database\Seeder;

class tipo_identificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres = [
            'Cedula de Ciudadania',
            'Tarjeta de Identidad',
            'Registro Civil',
            'Pasaporte Extranjero',
            'Nit'
        ];
        foreach ($nombres as $nombre) {
            $tipo_identificacion = new Tipo_identificacione();
            $tipo_identificacion->nombre = $nombre;
            $tipo_identificacion->estado = true;
            $tipo_identificacion->save();
        }
    }
}
