<?php

use Illuminate\Database\Seeder;

class SubkomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','kode'=>'A','subkomponen'=>'Pembayaran Gaji dan Tunjangan','komponen_id'=>'7'],
        ['id'=>'2','kode'=>'A','subkomponen'=>'Operasional Perkantoran dan Pimpinan','komponen_id'=>'8'],
        ['id'=>'3','kode'=>'B','subkomponen'=>'Kendaraan Dinas dan Operasional','komponen_id'=>'8'],
        ['id'=>'4','kode'=>'C','subkomponen'=>'Gedung Bangunan Negara','komponen_id'=>'8'],
        ['id'=>'5','kode'=>'D','subkomponen'=>'SARANA KANTOR','komponen_id'=>'8'],
        ['id'=>'6','kode'=>'E','subkomponen'=>'Penyelenggaraan Perkantoran Lainnya','komponen_id'=>'8'],
        ['id'=>'7','kode'=>'A','subkomponen'=>'Pengadaan Kendaraan Roda 4 atau lebih','komponen_id'=>'9']
      ];

      foreach ($data as $dt)
      {
        (new \App\Subkomponen())->create($dt);
      }
    }
}
