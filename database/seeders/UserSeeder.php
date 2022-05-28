<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'kamar' => 'admin',
            'email' => 'admin@gmail.com',
            'status' => 'admin',
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'Sayhriah',
            'kamar' => '0101',
            'password' => bcrypt('sery123'),
        ]);
    }
}
