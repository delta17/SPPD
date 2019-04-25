<?php

use Illuminate\Database\Seeder;

class SeksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['id' => '0', 'seksi' => 'Kepala'],
            ['id' => '1', 'seksi' => 'Tata Usaha'],
            ['id' => '2', 'seksi' => 'Statistik Produksi'],
            ['id' => '3', 'seksi' => 'Neraca Wilayah Analisis Statistik'],
            ['id' => '4', 'seksi' => 'Statistik Distribusi'],
            ['id' => '5', 'seksi' => 'Statistik Sosial'],
            ['id' => '6', 'seksi' => 'Integrasi Pengolahan dan Diseminasi Statistik'],
            ['id' => '7', 'seksi' => 'Koordinator Statistik Kecamatan']
        ];

        foreach ($data as $dt)
        {
            (new \App\Seksi())->create($dt);
        }
    }
}
