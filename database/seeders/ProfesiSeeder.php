<?php

namespace Database\Seeders;

use App\Models\Profesi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode' => 'A',
                'nama_profesi' => 'Petani'
            ],
            [
                'kode' => 'B',
                'nama_profesi' => 'Teknisi'
            ],
            [
                'kode' => 'C',
                'nama_profesi' => 'Guru'
            ],
            [
                'kode' => 'D',
                'nama_profesi' => 'Nelayan'
            ],
            [
                'kode' => 'E',
                'nama_profesi' => 'Seniman'
            ],
          
        ];
        
        Profesi::insert($data);
    }
}
