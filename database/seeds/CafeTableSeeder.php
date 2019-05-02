<?php

use Illuminate\Database\Seeder;

class CafeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cafe::class, 30)->create();
    }
}
