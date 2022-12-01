<?php


use Illuminate\Database\Seeder;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lapangan')->delete();

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LA-'.$j ,
               'nama' => 'Lapangan 1',
               'lokasi' => '1',
               'kode_jadwal' => 'A'.$j,
           ]);
        }

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LB-'.$j ,
               'nama' => 'Lapangan 3',
               'lokasi' => '3',
               'kode_jadwal' => 'B'.$j,
           ]);
        }

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LT-'.$j ,
               'nama' => 'Lapangan 2',
               'lokasi' => '2',
               'kode_jadwal' => 'T'.$j,
           ]);
        }

    }
}
