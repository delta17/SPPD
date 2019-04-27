<?php

use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','kode'=>'524111','akun'=>'Beban Perjalanan Dinas Biasa'],
        ['id'=>'2','kode'=>'524113','akun'=>'Beban Perjalanan Dinas Dalam Kota'],
        ['id'=>'3','kode'=>'524114','akun'=>'Beban Perjalanan Dinas Paket Meeting Dalam Kota'],
        ['id'=>'4','kode'=>'524119','akun'=>'Beban Perjalanan Dinas Paket Meeting Luar Kota']
      ];

      foreach ($data as $dt)
      {
        (new \App\Akun())->create($dt);
      }
    }
}
