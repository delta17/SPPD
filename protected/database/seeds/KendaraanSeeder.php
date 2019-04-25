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
        ['id' => '1', 'jenis' => 'Dinas'],
        ['id' => '2', 'jenis' => 'Darat'],
        ['id' => '3', 'jenis' => 'Air'],
        ['id' => '4', 'jenis' => 'Campuran']
      ];

      foreach ($data as $dt)
      {
        (new \App\Kendaraan())->create($dt);
      }
    }
}
