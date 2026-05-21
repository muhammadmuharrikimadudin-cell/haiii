<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationHistorySeeder extends Seeder
{
    public function run()
    {
        DB::table('education_histories')->truncate();
        
        DB::table('education_histories')->insert([
            [
                'school_name' => 'SMA Negeri 6 Purworejo',
                'degree' => 'IPS (Ilmu Pengetahuan Sosial)',
                'start_year' => 2020,
                'end_year' => 2023,
            ],
            [
                'school_name' => 'Politeknik Indonusa Surakarta',
                'degree' => 'D4 Teknologi Rekayasa Perangkat Lunak',
                'start_year' => 2024,
                'end_year' => null, // Sedang Berjalan
            ],
        ]);
    }
}
