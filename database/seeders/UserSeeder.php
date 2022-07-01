<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            [
                'id' => '1',
                'username' => 'Raditya22',
                'email' => 'RadityaCatur22@gmail.com',
                'nama' => 'Raditya Catur Narendra',
                'password' => bcrypt('RadityaCatur123'),
                'no_telp' => '085248146811',
                'alamat' => 'Batu',
            ],
            [
                'id' => '2',
                'username' => 'Maulana17',
                'email' => 'MaulanaRosandy17@gmail.com',
                'nama' => 'Maulana Rosandy',
                'password' => bcrypt('MaulanaRosandy17'),
                'no_telp' => '085612348907',
                'alamat' => 'Batu',
            ],
            [
                'id' => '3',
                'username' => 'Kevin15',
                'email' => 'KevinNatanael15@gmail.com',
                'nama' => 'Kevin Natanael',
                'password' => bcrypt('KevinNatanael123'),
                'no_telp' => '085412346758',
                'alamat' => 'Malang',
            ],
            [
                'id' => '4',
                'username' => 'Rofiqoh24',
                'email' => 'Rofiqoh24@gmail.com',
                'nama' => 'Rofiqoh',
                'password' => bcrypt('Rofiqoh123'),
                'no_telp' => '085248146811',
                'alamat' => 'Batu',
            ],
            [
                'id' => '5',
                'username' => 'Rofika23',
                'email' => 'Rofika23@gmail.com',
                'nama' => 'Rofika',
                'password' => bcrypt('Rofika123'),
                'no_telp' => '085145678456',
                'alamat' => 'Malang',
            ],
            [
                'user_id' => '6',
                'username' => 'Hernanda11',
                'email' => 'HernandaTriana11@gmail.com',
                'nama' => 'Hernanda Triana',
                'password' => bcrypt('HernandaTriana123'),
                'no_telp' => '085578965745',
                'alamat' => 'Surabaya',
            ],
            [
                'id' => '7',
                'username' => 'Cokorda07',
                'email' => 'CokordaGede07@gmail.com',
                'nama' => 'Cokorda Gede',
                'password' => bcrypt('CokordaGede123'),
                'no_telp' => '085687654356',
                'alamat' => 'Bali',
            ],
            [
                'id' => '8',
                'username' => 'Hardy12',
                'email' => 'HardyHermawan12@gmail.com',
                'nama' => 'Hardy Hermawan',
                'password' => bcrypt('HardyHermawan123'),
                'no_telp' => '089721348976',
                'alamat' => 'Bandung',
            ],
            [
                'id' => '9',
                'username' => 'Siti31',
                'email' => 'SitiLutfia31@gmail.com',
                'nama' => 'Siti Lutfia',
                'password' => bcrypt('SitiLutfia123'),
                'no_telp' => '089765463729',
                'alamat' => 'Bogor',
            ],
            [
                'id' => '10',
                'username' => 'Salva32',
                'email' => 'SalvaAlmayda32@gmail.com',
                'nama' => 'Salva Almayda',
                'password' => bcrypt('SalvaAlmayda123'),
                'no_telp' => '087654367893',
                'alamat' => 'Lombok',
            ],
        ]);
    }
}
