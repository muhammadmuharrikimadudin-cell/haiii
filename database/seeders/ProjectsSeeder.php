<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::truncate();

        \App\Models\Project::create([
            'title' => 'Sistem Informasi Pendakian Gunung (Simaksi Online)',
            'description' => 'Sistem perizinan pendakian gunung berbasis web untuk registrasi pendaki secara online guna mempermudah pendataan, monitoring kuota basecamp, dan keamanan pendaki di Jawa Tengah. Dilengkapi fitur manifest kelompok dan riwayat pendakian.',
            'technologies' => 'Laravel, MySQL, Vanilla CSS, JS Charting',
            'project_url' => 'https://simaksi.muhammadmuharrik.my.id',
            'github_url' => 'https://github.com/muhammadmuharrik/simaksi-gunung',
            'image_path' => null,
        ]);

        \App\Models\Project::create([
            'title' => 'E-Commerce Kriya Purworejo',
            'description' => 'Aplikasi penjualan produk kerajinan bambu dan kayu khas daerah Purworejo. Terintegrasi dengan API Payment Gateway dan RajaOngkir untuk kalkulasi ongkos kirim otomatis demi mendigitalisasi UMKM lokal.',
            'technologies' => 'Laravel, Midtrans API, RajaOngkir API, Tailwind CSS',
            'project_url' => 'https://kriyapurworejo.store',
            'github_url' => 'https://github.com/muhammadmuharrik/kriya-purworejo',
            'image_path' => null,
        ]);

        \App\Models\Project::create([
            'title' => 'Portfolio Personal Premium',
            'description' => 'Website profil pribadi interaktif dengan tema dark glassmorphism. Menyajikan data profil, keahlian, pengalaman kerja, riwayat pendidikan, dan dokumentasi petualangan mendaki gunung secara dinamis langsung dari database.',
            'technologies' => 'Laravel, Blade, PHP, Vanilla CSS, JS',
            'project_url' => '/',
            'github_url' => 'https://github.com/muhammadmuharrik/personal-website',
            'image_path' => null,
        ]);
    }
}
