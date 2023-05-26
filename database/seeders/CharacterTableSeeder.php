<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;
use Faker\Generator as Faker;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++){
            $newCharacter = new Character();
            $newCharacter->name = $faker->name();
            $newCharacter->description = $faker->paragraph(true);
            $newCharacter->attack = $faker->numberBetween(1, 10);
            $newCharacter->defence = $faker->numberBetween(1, 10);
            $newCharacter->speed = $faker->numberBetween(1, 10);
            $newCharacter->life = $faker->numberBetween(1, 100);
            $newCharacter->save();
        }
    }
}
