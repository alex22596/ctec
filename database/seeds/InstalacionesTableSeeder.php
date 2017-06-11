<?php

use Illuminate\Database\Seeder;
use CTEC\Models\Instalacion;

class InstalacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Instalacion::class,25)->create();
    }
}
