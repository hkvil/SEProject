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
                'nama' => 'admin',
                'password' => bcrypt('admin'),
            ],
        ]);
    }
}
