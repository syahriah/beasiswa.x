<?php

namespace Database\Seeders;

use App\Models\Pendaftar;
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
        $gaji_ortu = [
            "Rp 1.000.000 - Rp 2.000.000",
            "Rp 2.000.000 - Rp 3.000.000",
            "Rp 3.000.000 - Rp 4.000.000",
            "Rp 4.000.000 - Rp 5.000.000",
            "Rp 5.000.000 Keatas"
        ];
        $akre_kampus = ["A", "B", "C"];
        $akre_prodi = ["A", "B", "C"];
        // make random data
        for ($i = 1; $i <= 50; $i++) {
            Pendaftar::create([
                "first_name" => "Pendaftar",
                "last_name" => $i,
                "kampus" => "Kampus",
                "prodi" => "Prodi",
                "akre_kampus" => $akre_kampus[rand(0, 2)],
                "akre_prodi" => $akre_prodi[rand(0, 2)],
                "ipk" => rand(300, 400) / 100,
                "ukt" => rand(500000, 15000000),
                "gaji_ortu" => $gaji_ortu[rand(0, 4)],
            ]);
        }
    }
}
