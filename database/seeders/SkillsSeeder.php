<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->truncate();

        DB::table('skills')->insert([
            [
                'name' => 'Laravel',
                'level' => 'Advanced',
                'description' => 'Mampu membangun sistem backend tangguh, menerapkan arsitektur MVC, middleware, queue, dan integrasi API Pihak Ketiga.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PHP',
                'level' => 'Advanced',
                'description' => 'Menguasai fundamental pemrograman berorientasi objek (OOP), manajemen sesi, penanganan error, dan PHP PDO database connection.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'JavaScript',
                'level' => 'Intermediate',
                'description' => 'Memahami pemrograman asinkronus (Promises/Async-Await), AJAX Fetch, integrasi UI Framework, dan JSON parsing.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'MySQL',
                'level' => 'Intermediate',
                'description' => 'Menguasai penulisan relasi tabel, perancangan foreign key, join table query, optimasi query select, dan indexing database.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
