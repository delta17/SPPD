<?php

use Illuminate\Database\Seeder;

class OutputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','kode'=>'970','output'=>'Layanan Dukungan Manajemen Satker'],
        ['id'=>'2','kode'=>'994','output'=>'Layanan Perkantoran'],
        ['id'=>'3','kode'=>'951','output'=>'Layanan Sarana dan Prasarana Internal'],
        ['id'=>'4','kode'=>'004','output'=>'LAPORAN DISEMINASI STATISTIK'],
        ['id'=>'5','kode'=>'005','output'=>'LAPORAN METADATA STATISTIK'],
        ['id'=>'6','kode'=>'006','output'=>'PUBLIKASI/LAPORAN KEPENDUDUKAN DAN KETENAGAKERJAAN'],
        ['id'=>'7','kode'=>'009','output'=>'PUBLIKASI/LAPORAN STATISTIK KESEJAHTERAAN RAKYAT'],
        ['id'=>'8','kode'=>'010','output'=>'PUBLIKASI/LAPORAN STATISTIK KETAHANAN SOSIAL'],
        ['id'=>'9','kode'=>'011','output'=>'PUBLIKASI/LAPORAN PENDATAAN POTENSI DESA'],
        ['id'=>'10','kode'=>'014','output'=>'PUBLIKASI/LAPORAN STATISTIK PETERNAKAN, PERIKANAN, DAN KEHUTANAN'],
        ['id'=>'11','kode'=>'015','output'=>'PUBLIKASI/LAPORAN STATISTIK INDUSTRI, PERTAMBANGAN DAN PENGGALIAN, ENERGI, DAN KONSTRUKSI'],
        ['id'=>'12','kode'=>'016','output'=>'PUBLIKASI/LAPORAN STATISTIK DISTRIBUSI'],
        ['id'=>'13','kode'=>'018','output'=>'PUBLIKASI/LAPORAN UPDATING DIREKTORI PASAR DAN PUSAT PERDAGANGAN'],
        ['id'=>'14','kode'=>'020','output'=>'PUBLIKASI/LAPORAN STATISTIK HARGA'],
        ['id'=>'15','kode'=>'023','output'=>'PUBLIKASI/LAPORAN STATISTIK KEUANGAN, TI, DAN PARIWISATA'],
        ['id'=>'16','kode'=>'024','output'=>'PUBLIKASI/LAPORAN NERACA PRODUKSI'],
        ['id'=>'17','kode'=>'025','output'=>'PUBLIKASI/LAPORAN NERACA PENGELUARAN'],
        ['id'=>'18','kode'=>'026','output'=>'PUBLIKASI/LAPORAN ANALISIS DAN PENGEMBANGAN STATISTIK'],
        ['id'=>'19','kode'=>'027','output'=>'PUBLIKASI/LAPORAN STATISTIK TANAMAN PANGAN'],
        ['id'=>'20','kode'=>'028','output'=>'PUBLIKASI/LAPORAN STATISTIK HORTIKULTURA DAN PERKEBUNAN'],
        ['id'=>'21','kode'=>'029','output'=>'PUBLIKASI/LAPORAN INDEKS KEMAHALAN KONSTRUKSI'],
        ['id'=>'22','kode'=>'030','output'=>'PUBLIKASI/LAPORAN STATISTIK KEUANGAN PEMERINTAH DAERAH'],
        ['id'=>'23','kode'=>'032','output'=>'PUBLIKASI/ LAPORAN SENSUS PENDUDUK'],
        ['id'=>'24','kode'=>'034','output'=>'PUBLIKASI/ LAPORAN PMTB INSTITUSI DAN LAPANGAN USAHA'],
        ['id'=>'25','kode'=>'035','output'=>'PUBLIKASI/ LAPORAN STATISTIK WISATAWAN NUSANTARA'],
        ['id'=>'26','kode'=>'038','output'=>'PUBLIKASI/ LAPORAN STATISTIK TANAMAN PANGAN TERINTEGRASI DENGAN KERANGKA SAMPEL AREA']
      ];

      foreach ($data as $dt)
      {
        (new \App\Output())->create($dt);
      }
    }
}
