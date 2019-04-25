<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','kode'=>'054.01.01','program'=>'Program Dukungan Manajemen dan Pelaksanaan Tugas Teknis Lainnya BPS'],
        ['id'=>'2','kode'=>'054.01.02','program'=>'Program Peningkatan Sarana dan Prasarana Aparatur BPS'],
        ['id'=>'3','kode'=>'054.01.06','program'=>'Program Penyediaan dan Pelayanan Informasi Statistik']
      ];

      foreach ($data as $dt)
      {
        (new \App\Program())->create($dt);
      }
    }
}
