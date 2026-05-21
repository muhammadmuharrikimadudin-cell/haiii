<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Experience::truncate();

        \App\Models\Experience::create([
            'company_name' => 'Freelance Web Developer',
            'role' => 'Fullstack Developer',
            'location' => 'Purworejo, Jawa Tengah',
            'start_date' => 'Januari 2024',
            'end_date' => 'Sekarang',
            'description' => 'Merancang dan membangun aplikasi web kustom untuk pelaku usaha mikro dan UMKM lokal. Mengimplementasikan Laravel sebagai backend engine, serta Tailwind CSS/CSS Grid untuk antarmuka yang modern, cepat, dan responsif.',
            'is_current' => true,
        ]);

        \App\Models\Experience::create([
            'company_name' => 'Dinas Komunikasi, Informatika, Statistik dan Persandian (Diskominfo)',
            'role' => 'IT Support & Web Admin (Intern)',
            'location' => 'Purworejo, Jawa Tengah',
            'start_date' => 'Juli 2023',
            'end_date' => 'Desember 2023',
            'description' => 'Membantu pengelolaan konten dan pemeliharaan website resmi instansi daerah. Melakukan troubleshooting jaringan skala kecil, pencatatan log aktivitas sistem, serta penanganan kendala teknis pengguna internal.',
            'is_current' => false,
        ]);
    }
}
