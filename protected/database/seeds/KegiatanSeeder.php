<?php

use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','kode'=>'2886','kegiatan'=>'Dukungan Manajemen dan Pelaksanaan Tugas Teknis Lainnya BPS Provinsi'],
        ['id'=>'2','kode'=>'2891','kegiatan'=>'Peningkatan Sarana dan Prasarana Aparatur Negara BPS Provinsi'],
        ['id'=>'3','kode'=>'2895','kegiatan'=>'Penyediaan dan Pelayanan Informasi Statistik BPS Provinsi']
      ];

      foreach ($data as $dt)
      {
        (new \App\Kegiatan())->create($dt);
      }
    }
}
