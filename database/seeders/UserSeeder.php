<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 30; $i++) {
            \DB::table('user')->insert([
                'user_id' => $faker->numerify('U######'),
                'username' => $faker->username,
                'email' => $faker->email,
                'nama' => $faker->name,
                'password' => $faker->sentence(10),
                'no_telp' => $faker->numerify('085#########'),
                'alamat' => $faker->address,
            ]);
        }
    }
}
