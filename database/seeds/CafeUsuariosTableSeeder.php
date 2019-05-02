<?php

use Illuminate\Database\Seeder;

class CafeUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CafeUsuario::class, 30)->create();
    }
}
