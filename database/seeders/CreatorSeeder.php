<?php

namespace Database\Seeders;
use App\Models\creator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        creator::factory()->count(50)->create();
    }
}
