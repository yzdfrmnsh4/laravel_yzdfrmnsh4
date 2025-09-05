<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Ahmad Yusuf',
            'alamat' => 'Jl. Merdeka No.5',
            'telepon' => '08123456789',
            'rumah_sakit_id' => 1
        ]);

        Pasien::create([
            'nama' => 'Siti Aminah',
            'alamat' => 'Jl. Diponegoro No.12',
            'telepon' => '08234567890',
            'rumah_sakit_id' => 2
        ]);
    }
}
