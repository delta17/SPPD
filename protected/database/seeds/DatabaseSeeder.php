<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(KecamatanSeeder::class);
      $this->call(DesaSeeder::class);
      $this->call(LevelUserSeeder::class);
      $this->call(SeksiSeeder::class);
      $this->call(UserSeeder::class);
    }
}
