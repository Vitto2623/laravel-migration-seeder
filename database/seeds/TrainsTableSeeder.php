<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;


class TrainsTableSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{6}');
            $newTrain->numero_carrozze = $faker->numberBetween(0,50);
            $newTrain->in_orario = $faker->dateTime();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->date = $faker->date('Y-m-d', '2023-06-04');
            $newTrain->save();
        }
    }
}
