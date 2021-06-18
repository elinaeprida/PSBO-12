<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Grad;

class GradSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grad::create([
            'tepat_waktu' => '75',
            'dapat_kerja' => '88',
            'kerja_sesuai' => '95',
        ]);
    }
}
