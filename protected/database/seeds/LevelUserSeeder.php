<?php

use Illuminate\Database\Seeder;

class LevelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ['id' => '1', 'level' => 'Admin'],
            ['id' => '2', 'level' => 'KPA'],
            ['id' => '3', 'level' => 'PPK'],
            ['id' => '4', 'level' => 'Kasubag TU'],
            ['id' => '5', 'level' => 'Bendahara'],
            ['id' => '6', 'level' => 'Kasie/PJ'],
            ['id' => '7', 'level' => 'Staf']
        ];

        foreach ($data as $dt)
        {
            (new \App\Level_user())->create($dt);
        }
    }
}
