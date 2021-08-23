<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permits;
use Faker\Generator as Faker;

$factory->define(Permits::class, function (Faker $faker) {
    return [
        'id'                => 2000,
        'permit_start_date' => '2021-06-12',
        'permit_end_date'   => '2021-06-12',
        'description'       => 'Ijin Sakit',
        'attachments'       => 'surat-dokter.jpg, resep-obat.jpg',   // filename attachment
    ];
});
