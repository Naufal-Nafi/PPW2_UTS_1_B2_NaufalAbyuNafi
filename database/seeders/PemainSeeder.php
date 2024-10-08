<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++){
            Pemain::create([
                'nama_pemain' => fake()->sentence(3),
                'no_punggung' => fake()->numberBetween(1,99),
                'posisi' => fake()->sentence(1),
            ]);
        }
    }
}
// $table->string('nama_pemain');
//             $table->integer('no_punggung');
//             $table->string('posisi');