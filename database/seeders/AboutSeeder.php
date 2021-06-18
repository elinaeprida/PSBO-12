<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'About Us',
            'sub_title' => 'and Our Website',
            'description' => 'KOM-Hub sebagai wadah untuk memudahkan mahasiswa aktif Ilmu Komputer IPB untuk dapat terhubung dengan para alumni. Menyediakan database alumni yang dapat diakses untuk mendapatkan berbagai kontak pribadi para alumni',
        ]);
    }
}
