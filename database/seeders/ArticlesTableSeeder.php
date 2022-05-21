<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Artikel::create([
                'judul' => $faker->sentence,
                'author' => $faker->name,
                'isi_artikel' => $faker->paragraph,
                'foto' => $faker->image,
                'ringkasan' => $faker->sentence,
            ]);
    }
}
}