<?php

use Illuminate\Database\Seeder;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operator')->delete();
        DB::table('operator')->insert([
            [
                'kode_operator' => '1',
<<<<<<< HEAD
                'nama' => 'Syaddad',
                'password' => bcrypt('admin'),
            ],

            [
                'kode_operator' => '2',
                'nama' => 'Jahval',
                'password' => bcrypt('admin'),
            ],

            [
                'kode_operator' => '3',
                'nama' => 'Dayat',
                'password' => bcrypt('admin'),
            ],
            [
                'kode_operator' => '4',
                'nama' => 'Arif',
                'password' => bcrypt('admin'),
            ],

=======
                'nama' => 'admin',
                'password' => bcrypt('admin'),
            ],
>>>>>>> dayat
        ]);
    }
}
