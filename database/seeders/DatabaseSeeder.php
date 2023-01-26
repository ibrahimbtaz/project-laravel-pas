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
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);

        Dokter::create([
            'kode_dokter' => 31,
            'nama_dokter' => 'Surya',
            'keahlian' => 'Jantung',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);

        Dokter::create([
            'kode_dokter' => 32,
            'nama_dokter' => 'Ibrahim',
            'keahlian' => 'Bedah',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);

        Dokter::create([
            'kode_dokter' => 33,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Paru-Paru',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 34,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Ginjal',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 35,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Perut',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);
        Dokter::create([
            'kode_dokter' => 36,
            'nama_dokter' => fake()->name(),
            'keahlian' => 'Hati',
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
        ]);

    }
}
