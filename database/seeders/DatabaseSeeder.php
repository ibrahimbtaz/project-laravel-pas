<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pasien::factory(10)->create();

        Dokter::create([
            'kode_dokter' => 30,
            'nama_dokter' => 'Muhammad',
            'keahlian' => 'Mata',
            'telepon' => '82135711877',
            'alamat' => 'Kudus',
        ]);

        Dokter::create([
            'kode_dokter' => 31,
            'nama_dokter' => 'Surya',
            'keahlian' => 'Jantung',
            'telepon' => '082135711877',
            'alamat' => 'Semarang',
        ]);

        Dokter::create([
            'kode_dokter' => 32,
            'nama_dokter' => 'Ibrahim',
            'keahlian' => 'Bedah',
            'telepon' => '082135711877',
            'alamat' => 'Demak',
        ]);

        Dokter::create([
            'kode_dokter' => 33,
            'nama_dokter' => 'Kuchiki',
            'keahlian' => 'Paru-Paru',
            'telepon' => '082135711877',
            'alamat' => 'Demak',
        ]);
        Dokter::create([
            'kode_dokter' => 34,
            'nama_dokter' => 'Ika',
            'keahlian' => 'Ginjal',
            'telepon' => '082135711877',
            'alamat' => 'Demak',
        ]);
        Dokter::create([
            'kode_dokter' => 35,
            'nama_dokter' => 'Rena',
            'keahlian' => 'Perut',
            'telepon' => '082135711877',
            'alamat' => 'Demak',
        ]);
    }
}
