<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Kategori;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = Kategori::where('nama', 'Pemrograman')->first();

        Buku::firstOrCreate(
            ['kode' => 'BK001'],
            [
                'judul' => 'Dasar PHP',
                'kategori_id' => $kategori->id
            ]
        );

        Buku::firstOrCreate(
            ['kode' => 'BK002'],
            [
                'judul' => 'Belajar Laravel',
                'kategori_id' => $kategori->id
            ]
        );
    }
}
