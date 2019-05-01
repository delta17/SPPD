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
            ['id' => '2', 'seksi' => 'Produksi'],
            ['id' => '3', 'seksi' => 'Nerwilis'],
            ['id' => '4', 'seksi' => 'Distribusi'],
            ['id' => '5', 'seksi' => 'Sosial'],
            ['id' => '6', 'seksi' => 'IPDS'],
            ['id' => '7', 'seksi' => 'Koordinator Statistik Kecamatan']
        ];

        foreach ($data as $dt)
        {
            (new \App\Seksi())->create($dt);
        }
    }
}
