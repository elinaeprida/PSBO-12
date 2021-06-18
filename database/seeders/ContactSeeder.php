<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'location' => 'Departemen Ilmu Komputer Jl Meranti Wing 20 Level 5 Kampus IPB Darmaga 16680',
            'phone' => '0251-8625584',
            'email' => 'ilkom@apps.ipb.ac.id',
            'link_more' => 'cs.ipb.ac.id',
        ]);
    }
}
