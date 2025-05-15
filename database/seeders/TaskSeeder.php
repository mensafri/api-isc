<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        // ❶ Contoh statis (jika butuh data spesifik)
        Task::insert([
            ['title' => 'Plan Sprint 1',      'description' => 'Define backlog & velocity'],
            ['title' => 'Draft API Spec',     'description' => 'OpenAPI /docs v1'],
            ['title' => 'Set Up CI Pipeline', 'description' => 'GitHub Actions + Pint'],
        ]);

        // ❷ Contoh dinamis (faker) – hapus jika tak perlu
        Task::factory()->count(17)->create();
    }
}
