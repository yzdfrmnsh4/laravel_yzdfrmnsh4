<?php

namespace Database\Seeders;

use App\Models\RumahSakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RumahSakit::create([
            'nama' => 'RS Bandung Sehat',
            'alamat' => 'Jl. Asia Afrika No.10, Bandung',
            'email' => 'info@rsbandung.com',
            'telepon' => '0221234567'
        ]);

        RumahSakit::create([
            'nama' => 'RS Jakarta Medika',
            'alamat' => 'Jl. Sudirman No.20, Jakarta',
            'email' => 'info@rsjakarta.com',
            'telepon' => '0217654321'
        ]);
    }
}
