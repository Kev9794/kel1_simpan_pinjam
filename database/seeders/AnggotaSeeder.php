<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
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
                'id_anggota' => '10006',
                'nama' => 'Hernanda Triana',
                'email' => 'HernandaTriana11@gmail.com',
                'password' => 'HernandaTriana123',
                'no_telp' => '085578965745',
                'alamat' => 'Surabaya',
                'foto' => null,
            ],
            [
                'id_anggota' => '10007',
                'nama' => 'Cokorda Gede',
                'email' => 'CokordaGede07@gmail.com',
                'password' => 'CokordaGede123',
                'no_telp' => '085687654356',
                'alamat' => 'Bali',
                'foto' => null,
            ],
            [
                'id_anggota' => '10008',
                'nama' => 'Hardy Hermawan',
                'email' => 'HardyHermawan12@gmail.com',
                'password' => 'HardyHermawan123',
                'no_telp' => '089721348976',
                'alamat' => 'Bandung',
                'foto' => null,
            ],
            [
                'id_anggota' => '10009',
                'nama' => 'Siti Lutfia',
                'email' => 'SitiLutfia31@gmail.com',
                'password' => 'SitiLutfia123',
                'no_telp' => '089765463729',
                'alamat' => 'Bogor',
                'foto' => null,
            ],
            [
                'id_anggota' => '10010',
                'nama' => 'Salva Almayda',
                'email' => 'SalvaAlmayda32@gmail.com',
                'password' => 'SalvaAlmayda123',
                'no_telp' => '087654367893',
                'alamat' => 'Lombok',
                'foto' => null,
            ],
        ];
        
        \DB::table('anggota')->insert($users);
    }
}
