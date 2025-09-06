<?php

namespace Database\Seeders;

use App\Models\RumahSakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('rumah_sakits')->truncate();
        
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

        RumahSakit::create([
            'nama' => 'RS Kasih Bunda',
            'alamat' => 'Jl. Industri No.30, Cimahi',
            'email' => 'info@kasihbundda.com',
            'telepon' => '0211345291'
        ]);

        // Tambahan 2 data
        RumahSakit::create([
            'nama' => 'RS Harapan Kita',
            'alamat' => 'Jl. Gatot Subroto No.45, Jakarta',
            'email' => 'info@rsharapankita.com',
            'telepon' => '0219876543'
        ]);

        RumahSakit::create([
            'nama' => 'RS Siloam Hospitals',
            'alamat' => 'Jl. TB Simatupang No.60, Jakarta',
            'email' => 'info@siloamhospitals.com',
            'telepon' => '02111223344'
        ]);
    }

}
