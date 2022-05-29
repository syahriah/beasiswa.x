<?php

namespace Database\Seeders;

use App\Models\pendaftar;
use Illuminate\Database\Seeder;

class PendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pendaftar::create([
            "nama" => 'sherin asw',
            "inputKampus" => 'antol',
            "ak-kampus" => '0812949492818',
            "inputProdi" => '5',
            "ak-prodi" => 'Lambang_ITK.png',
            "ipk" => 'sherin asw',
            "ukt" => 'antol',
            "gaji" => '0812949492818',
            "foto" => 'Lambang_ITK.png',
        ]);
    }
}
