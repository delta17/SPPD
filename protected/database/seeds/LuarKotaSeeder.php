<?php

use Illuminate\Database\Seeder;

class LuarKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','tujuan'=>'KPPN','waktu_tempuh'=>'3.25'],
        ['id'=>'2','tujuan'=>'KPKNL','waktu_tempuh'=>'9'],
        ['id'=>'3','tujuan'=>'DJPB','waktu_tempuh'=>'8'],
        ['id'=>'4','tujuan'=>'BKN','waktu_tempuh'=>'12'],
        ['id'=>'5','tujuan'=>'BPS Provinsi Kalimantan Tengah','waktu_tempuh'=>'8']
      ];

      foreach ($data as $dt)
      {
        (new \App\LuarKota())->create($dt);
      }
    }
}
