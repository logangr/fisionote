<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pere',
            'email' => 'p8p8g8wow@gmail.com',
            'password' => bcrypt('darckbound8'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rafel',
            'email' => 'rafel.pg82@gmail.com',
            'password' => bcrypt('bonrotllo2'),
        ]);
        DB::table('users')->insert([
            'name' => 'Olga',
            'email' => 'olga.consulta@gmail.com',
            'password' => bcrypt('Juligarreta'),
        ]);
    }
}
