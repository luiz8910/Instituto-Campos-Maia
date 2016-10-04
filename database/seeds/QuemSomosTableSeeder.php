<?php

use Illuminate\Database\Seeder;
use Admin\Models\QuemSomos;

class QuemSomosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(QuemSomos::class)->create();
    }
}
