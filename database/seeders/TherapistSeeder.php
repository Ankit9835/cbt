<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TherapistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Therapist::class, 10)->create();
    }
}
