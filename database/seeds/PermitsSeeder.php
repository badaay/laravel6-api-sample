<?php

use Illuminate\Database\Seeder;

class PermitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Permits::class)->create();
    }
}
