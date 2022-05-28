<?php

namespace Database\Seeders;

use App\Models\resident;
use Illuminate\Database\Seeder;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        resident::create([
            "rooms" => '0101',
            "nama" => 'antol',
            "nomorhp" => '0812949492818',
            "jumlah_keluarga" => '5',
            "foto" => 'Lambang_ITK.png',
        ]);
    }
}
