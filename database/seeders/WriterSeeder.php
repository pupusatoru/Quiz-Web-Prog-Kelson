<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        Writer::create([
            'name' => 'Kelson',
            'email' => 'kelson@edufun.com',
        ]);
    }
}
