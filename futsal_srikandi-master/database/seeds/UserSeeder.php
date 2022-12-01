<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();
        // DB::table('user')->insert([
        //     [
        //         'kode_user' => '1',
        //         'nama' => 'Arif Putra Rochman',
        //         'telepon' => '081122334455',
        //     ],

        //     [
        //         'kode_user' => '2',
        //         'nama' => 'Hidayat',
        //         'telepon' => '082233445566',
        //     ],

        //     [
        //         'kode_user' => '3',
        //         'nama' => 'Jahval Romiz Septrada',
        //         'telepon' => '083344556677',
        //     ],
            
        //     [
        //         'kode_user' => '4',
        //         'nama' => 'M. Syaddad G. Al Farez',
        //         'telepon' => '082135788302',
        //     ]
        // ]);
    }
}
