<?php

namespace Database\Seeders;

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
        $users = [
            [
                'id' => '10001',
                'name' => 'Raditya Catur Narendra',
                'username' => 'Raditya22',
                'email' => 'RadityaCatur22@gmail.com',
                'email_verified_at' => null,
                'password' => 'RadityaCatur123',
                'no_telp' => '085248146811',
                'alamat' => 'Batu',
                'role' => 'Admin',
            ],
            [
                'id' => '10002',
                'name' => 'Maulana Rosandy',
                'username' => 'Maulana17',
                'email' => 'MaulanaRosandy17@gmail.com',
                'email_verified_at' => null,
                'password' => 'MaulanaRosandy17',
                'no_telp' => '085612348907',
                'alamat' => 'Batu',
                'role' => 'Admin',
            ],
            [
                'id' => '10003',
                'name' => 'Kevin Natanael',
                'username' => 'Kevin15',
                'email' => 'KevinNatanael15@gmail.com',
                'email_verified_at' => null,
                'password' => 'KevinNatanael123',
                'no_telp' => '085412346758',
                'alamat' => 'Malang',
                'role' => 'Admin',
            ],
            [
                'id' => '10004',
                'name' => 'Rofiqoh',
                'username' => 'Rofiqoh24',
                'email' => 'Rofiqoh24@gmail.com',
                'email_verified_at' => null,
                'password' => 'Rofiqoh123',
                'no_telp' => '085248146811',
                'alamat' => 'Batu',
                'role' => 'Admin',
            ],
            [
                'id' => '10005',
                'name' => 'Rofika',
                'username' => 'Rofika23',
                'email' => 'Rofika23@gmail.com',
                'email_verified_at' => null,
                'password' => 'Rofika123',
                'no_telp' => '085145678456',
                'alamat' => 'Malang',
                'role' => 'Admin',
            ],
            [
                'id' => '10006',
                'name' => 'Hernanda Triana',
                'username' => 'Hernanda11',
                'email' => 'HernandaTriana11@gmail.com',
                'email_verified_at' => null,
                'password' => 'HernandaTriana123',
                'no_telp' => '085578965745',
                'alamat' => 'Surabaya',
                'role' => null,
            ],
            [
                'id' => '10007',
                'name' => 'Cokorda Gede',
                'username' => 'Cokorda07',
                'email' => 'CokordaGede07@gmail.com',
                'email_verified_at' => null,
                'password' => 'CokordaGede123',
                'no_telp' => '085687654356',
                'alamat' => 'Bali',
                'role' => null,
            ],
            [
                'id' => '10008',
                'name' => 'Hardy Hermawan',
                'username' => 'Hardy12',
                'email' => 'HardyHermawan12@gmail.com',
                'email_verified_at' => null,
                'password' => 'HardyHermawan123',
                'no_telp' => '089721348976',
                'alamat' => 'Bandung',
                'role' => null,
            ],
            [
                'id' => '10009',
                'name' => 'Siti Lutfia',
                'username' => 'Siti31',
                'email' => 'SitiLutfia31@gmail.com',
                'email_verified_at' => null,
                'password' => 'SitiLutfia123',
                'no_telp' => '089765463729',
                'alamat' => 'Bogor',
                'role' => null,
            ],
            [
                'id' => '10010',
                'name' => 'Salva Almayda',
                'username' => 'Salva32',
                'email' => 'SalvaAlmayda32@gmail.com',
                'email_verified_at' => null,
                'password' => 'SalvaAlmayda123',
                'no_telp' => '087654367893',
                'alamat' => 'Lombok',
                'role' => null,
            ],
        ];
        
        \DB::table('users')->insert($users);
    }
}
