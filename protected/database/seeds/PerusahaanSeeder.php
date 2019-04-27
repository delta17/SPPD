<?php

use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','perusahaan'=>'GAWI BAHANDEP SAWIT MEKAR, PT','waktu_tempuh'=>'22'],
        ['id'=>'2','perusahaan'=>'RIMBA HARAPAN SAKTI, PT','waktu_tempuh'=>'20'],
        ['id'=>'3','perusahaan'=>'SARANA TITIAN PERMATA, PT','waktu_tempuh'=>'4.25'],
        ['id'=>'4','perusahaan'=>'KERRY SAWIT INDONESIA, PT','waktu_tempuh'=>'3'],
        ['id'=>'5','perusahaan'=>'MEGA IKA KHANSA, PT','waktu_tempuh'=>'12'],
        ['id'=>'6','perusahaan'=>'SALONOK LADANG MAS, PT','waktu_tempuh'=>'28'],
        ['id'=>'7','perusahaan'=>'AGRO INDOMAS, PT','waktu_tempuh'=>'13'],
        ['id'=>'8','perusahaan'=>'SAWITMAS NUGRAHA PERDANA, PT','waktu_tempuh'=>'13'],
        ['id'=>'9','perusahaan'=>'HAMPARAN MASSAWIT BANGUN PERSADA, PT','waktu_tempuh'=>'13'],
        ['id'=>'10','perusahaan'=>'RIM CAPITAL, PT','waktu_tempuh'=>'3'],
        ['id'=>'11','perusahaan'=>'TAPIAN NADENGGAN, PT','waktu_tempuh'=>'15'],
        ['id'=>'12','perusahaan'=>'SUMUR PANDAN WANGI, PT','waktu_tempuh'=>'13'],
        ['id'=>'13','perusahaan'=>'WANA SAWIT SUBUR LESTARI II (EKS. KHARISMA UNGGUL CENTRALTAMA CEMERLANG), PT','waktu_tempuh'=>'13'],
        ['id'=>'14','perusahaan'=>'BUANA ARTHA SEJAHTERA, PT','waktu_tempuh'=>'13'],
        ['id'=>'15','perusahaan'=>'TAPIAN NADENGGAN  (EX. MITRATAMA ABADI MAKMUR), PT','waktu_tempuh'=>'13'],
        ['id'=>'16','perusahaan'=>'BINA SAWIT ABADI PRATAMA, PT','waktu_tempuh'=>'13'],
        ['id'=>'17','perusahaan'=>'MUSIRAWAS CITRA HARPINDO, PT','waktu_tempuh'=>'7'],
        ['id'=>'18','perusahaan'=>'MENTHOBI SAWIT JAYA, PT','waktu_tempuh'=>'8'],
        ['id'=>'19','perusahaan'=>'CIPTATANI KUMAI SEJAHTERA, PT','waktu_tempuh'=>'16.5'],
        ['id'=>'20','perusahaan'=>'KRIDATAMA LANCAR, PT','waktu_tempuh'=>'16.5'],
        ['id'=>'21','perusahaan'=>'BANGUN JAYA  ALAM PERMAI  (EKS. MITRA UNGGUL TAMA PERKASA), PT','waktu_tempuh'=>'18'],
        ['id'=>'22','perusahaan'=>'TEGUH SEMPURNA, PT','waktu_tempuh'=>'13.5'],
        ['id'=>'23','perusahaan'=>'TELAGA SARI PERSADA, PT','waktu_tempuh'=>'14.75'],
        ['id'=>'24','perusahaan'=>'ADITUNGGAL MAHAJAYA, PT','waktu_tempuh'=>'13'],
        ['id'=>'25','perusahaan'=>'MITRA KARYA AGROINDO, PT','waktu_tempuh'=>'13'],
        ['id'=>'26','perusahaan'=>'SUMBER INDAHPERKASA, PT','waktu_tempuh'=>'13']
      ];

      foreach ($data as $dt)
      {
        (new \App\Perusahaan())->create($dt);
      }
    }
}
