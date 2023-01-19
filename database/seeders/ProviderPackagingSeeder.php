<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProviderPackagingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ProviderPackaging::factory(10)->create();
    }
}
