<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::firstOrCreate([
            'nim' => '1234567890',
            'nama' => 'Daffa Adi Nugroho',
            'email' => 'daffa@ad.com',
            'jurusan' => 'Teknik Informatika',
            'prodi' => 'Teknik Informatika'
        ]);
        Mahasiswa::firstOrCreate([
            'nim' => '1234567891',
            'nama' => 'affa Adi Nugroho',
            'email' => 'daffa@ad.com',
            'jurusan' => 'Teknik Informatika',
            'prodi' => 'Teknik Informatika'
        ]);
        Mahasiswa::firstOrCreate([
            'nim' => '1234567891',
            'nama' => 'baffa Adi Nugroho',
            'email' => 'daffa@ad.com',
            'jurusan' => 'Teknik Informatika',
            'prodi' => 'Teknik Informatika'
        ]);
        Mahasiswa::firstOrCreate([
            'nim' => '1234567891',
            'nama' => 'Roy Adi Nugroho',
            'email' => 'daffa@ad.com',
            'jurusan' => 'Teknik Informatika',
            'prodi' => 'Teknik Informatika'
        ]);

    }
}
