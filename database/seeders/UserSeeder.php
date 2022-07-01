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
        /*
        $users = [
            [
                'user_id' => 'U0001',
                'username' => 'Raditya22',
                'email' => 'RadityaCatur22@gmail.com',
                'nama' => 'Raditya Catur Narendra',
                'password' => 'RadityaCatur123',
                'no_telp' => '085248146811',
                'alamat' => 'Batu',
            ],
            [
                'user_id' => 'U0002',
                'username' => 'Maulana17',
                'email' => 'MaulanaRosandy17@gmail.com',
                'nama' => 'Maulana Rosandy',
                'password' => 'MaulanaRosandy17',
                'no_telp' => '085612348907',
                'alamat' => 'Batu',
            ],
            [
                'user_id' => 'U0003',
                'username' => 'Kevin15',
                'email' => 'KevinNatanael15@gmail.com',
                'nama' => 'Kevin Natanael',
                'password' => 'KevinNatanael123',
                'no_telp' => '085412346758',
                'alamat' => 'Malang',
            ],
            [
                'user_id' => 'U0004',
                'username' => 'Rofiqoh24',
                'email' => 'Rofiqoh24@gmail.com',
                'nama' => 'Rofiqoh',
                'password' => 'Rofiqoh123',
                'no_telp' => '085248146811',
                'alamat' => 'Batu',
            ],
            [
                'user_id' => 'U0005',
                'username' => 'Rofika23',
                'email' => 'Rofika23@gmail.com',
                'nama' => 'Rofika',
                'password' => 'Rofika123',
                'no_telp' => '085145678456',
                'alamat' => 'Malang',
            ],
            [
                'user_id' => 'U0006',
                'username' => 'Hernanda11',
                'email' => 'HernandaTriana11@gmail.com',
                'nama' => 'Hernanda Triana',
                'password' => 'HernandaTriana123',
                'no_telp' => '085578965745',
                'alamat' => 'Surabaya',
            ],
            [
                'user_id' => 'U0007',
                'username' => 'Cokorda07',
                'email' => 'CokordaGede07@gmail.com',
                'nama' => 'Cokorda Gede',
                'password' => 'CokordaGede123',
                'no_telp' => '085687654356',
                'alamat' => 'Bali',
            ],
            [
                'user_id' => 'U0008',
                'username' => 'Hardy12',
                'email' => 'HardyHermawan12@gmail.com',
                'nama' => 'Hardy Hermawan',
                'password' => 'HardyHermawan123',
                'no_telp' => '089721348976',
                'alamat' => 'Bandung',
            ],
            [
                'user_id' => 'U0009',
                'username' => 'Siti31',
                'email' => 'SitiLutfia31@gmail.com',
                'nama' => 'Siti Lutfia',
                'password' => 'SitiLutfia123',
                'no_telp' => '089765463729',
                'alamat' => 'Bogor',
            ],
            [
                'user_id' => 'U0010',
                'username' => 'Salva32',
                'email' => 'SalvaAlmayda32@gmail.com',
                'nama' => 'Salva Almayda',
                'password' => 'SalvaAlmayda123',
                'no_telp' => '087654367893',
                'alamat' => 'Lombok',
            ],
        ];
        */
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Rofika',
            'username' => 'rofika123',
            'email' => 'fikaaini50@yahoo.co.id',
            'password' => bcrypt('123rofika'),
            'no_telp' => '08123451703',
            'alamat' => 'Malang'
        ]);
    }
}
