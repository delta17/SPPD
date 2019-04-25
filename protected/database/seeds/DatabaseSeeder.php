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
      $this->call(AkunSeeder::class);
      $this->call(KegiatanSeeder::class);
      $this->call(KegiatanSeksiSeeder::class);
      $this->call(KegiatanUraianSeeder::class);
      $this->call(KendaraanSeeder::class);
      $this->call(KomponenSeeder::class);
      $this->call(OutputSeeder::class);
      $this->call(ProgramSeeder::class);
      $this->call(SubkomponenSeeder::class);
    }
}
