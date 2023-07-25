<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PacientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i <= 120; $i++) {
            $nowDate = $faker->dateTime;

            DB::table('pacients')->insert([
                'dni' => $faker->creditCardNumber,
                'nom' => $faker->firstName,
                'dni_tutor_legal' => $faker->creditCardNumber,
                'tutor_legal' => $faker->firstName." ".$faker->lastName." ".$faker->lastName,
                'llinatges' => $faker->lastName." ".$faker->lastName,
                'data_naixement' => $faker->date(),
                'adreca_1' => $faker->address,
                'adreca_2' => $faker->address,
                'telefon_1' => $faker->phoneNumber,
                'telefon_2' => $faker->phoneNumber,
                'email' => $faker->email,
                'antecedents_pat' => $faker->realText,
                'historia' => $faker->realText,

                "created_at" => $nowDate,
                "updated_at" => Carbon::now()
            ]);
        }
    }
}