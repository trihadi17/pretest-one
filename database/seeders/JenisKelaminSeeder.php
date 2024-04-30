<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Model
use App\Models\JenisKelamin;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode' => '1',
                'jenis_kelamin' => 'Laki-Laki'
            ],
            [
                'kode' => '2',
                'jenis_kelamin' => 'Perempuan'
            ],
        ];
        
        JenisKelamin::insert($data);
    }
}
