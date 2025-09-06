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

        // Tambahan 8 data
        Pasien::create([
            'nama' => 'Budi Santoso',
            'alamat' => 'Jl. Cendana No.7',
            'telepon' => '08198765432',
            'rumah_sakit_id' => 1
        ]);

        Pasien::create([
            'nama' => 'Rina Putri',
            'alamat' => 'Jl. Kenanga No.10',
            'telepon' => '08211223344',
            'rumah_sakit_id' => 3
        ]);

        Pasien::create([
            'nama' => 'Dedi Kurniawan',
            'alamat' => 'Jl. Melati No.15',
            'telepon' => '08155667788',
            'rumah_sakit_id' => 2
        ]);

        Pasien::create([
            'nama' => 'Fitri Handayani',
            'alamat' => 'Jl. Anggrek No.20',
            'telepon' => '08233445566',
            'rumah_sakit_id' => 4
        ]);

        Pasien::create([
            'nama' => 'Agus Pratama',
            'alamat' => 'Jl. Mawar No.25',
            'telepon' => '08199887766',
            'rumah_sakit_id' => 5
        ]);

        Pasien::create([
            'nama' => 'Nina Lestari',
            'alamat' => 'Jl. Flamboyan No.30',
            'telepon' => '08277665544',
            'rumah_sakit_id' => 3
        ]);

        Pasien::create([
            'nama' => 'Hendra Wijaya',
            'alamat' => 'Jl. Cemara No.35',
            'telepon' => '08122334455',
            'rumah_sakit_id' => 4
        ]);

        Pasien::create([
            'nama' => 'Dewi Anggraini',
            'alamat' => 'Jl. Sakura No.40',
            'telepon' => '08266778899',
            'rumah_sakit_id' => 5
        ]);
    }

}
