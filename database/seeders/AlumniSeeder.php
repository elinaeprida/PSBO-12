<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){

            DB::table('alumnis')->insert([
                'angkatan' => $faker->randomDigitNotNull,
                'spesialisasi' => $faker->currencyCode,
                'jabatan' => $faker->jobTitle,
                'perusahaan' => $faker->company,
                'domisili_pekerjaan' => $faker->country,
                'domisili_asal' => $faker->country,
                'instagram' => $faker->url,
                'linkedin' => $faker->url,
                'github' => $faker->url,
                'avatar' => $faker->image,
            ]);
           
        }
    }
}
