<?php

use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id' => '1', 'jenis' => 'Kendaraan Dinas'],
        ['id' => '2', 'jenis' => 'Angkutan Umum']
      ];

      foreach ($data as $dt)
      {
        (new \App\Kendaraan())->create($dt);
      }
    }
}
