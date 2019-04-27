<?php

use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '010', 'kecamatan' => 'Seruyan Hilir'],
            ['id' => '011', 'kecamatan' => 'Seruyan Hilir Timur'],
            ['id' => '020', 'kecamatan' => 'Danau Sembuluh'],
            ['id' => '021', 'kecamatan' => 'Seruyan Raya'],
            ['id' => '030', 'kecamatan' => 'Hanau'],
            ['id' => '031', 'kecamatan' => 'Danau Seluluk'],
            ['id' => '040', 'kecamatan' => 'Seruyan Tengah'],
            ['id' => '041', 'kecamatan' => 'Batu Ampar'],
            ['id' => '050', 'kecamatan' => 'Seruyan Hulu'],
            ['id' => '051', 'kecamatan' => 'Suling Tambun']
        ];

        foreach ($data as $dt)
        {
            (new \App\Kecamatan())->create($dt);
        }
    }
}
