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
        ['id'=>'1','kode'=>'970','output'=>'Layanan Dukungan Manajemen Satker','seksi_id'=>'1'],
        ['id'=>'2','kode'=>'994','output'=>'Layanan Perkantoran','seksi_id'=>'1'],
        ['id'=>'3','kode'=>'951','output'=>'Layanan Sarana dan Prasarana Internal','seksi_id'=>'1'],
        ['id'=>'4','kode'=>'004','output'=>'LAPORAN DISEMINASI STATISTIK','seksi_id'=>'6'],
        ['id'=>'5','kode'=>'005','output'=>'LAPORAN METADATA STATISTIK','seksi_id'=>'6'],
        ['id'=>'6','kode'=>'006','output'=>'PUBLIKASI/LAPORAN KEPENDUDUKAN DAN KETENAGAKERJAAN','seksi_id'=>'5'],
        ['id'=>'7','kode'=>'009','output'=>'PUBLIKASI/LAPORAN STATISTIK KESEJAHTERAAN RAKYAT','seksi_id'=>'5'],
        ['id'=>'8','kode'=>'010','output'=>'PUBLIKASI/LAPORAN STATISTIK KETAHANAN SOSIAL','seksi_id'=>'5'],
        ['id'=>'9','kode'=>'011','output'=>'PUBLIKASI/LAPORAN PENDATAAN POTENSI DESA','seksi_id'=>'5'],
        ['id'=>'10','kode'=>'014','output'=>'PUBLIKASI/LAPORAN STATISTIK PETERNAKAN, PERIKANAN, DAN KEHUTANAN','seksi_id'=>'2'],
        ['id'=>'11','kode'=>'015','output'=>'PUBLIKASI/LAPORAN STATISTIK INDUSTRI, PERTAMBANGAN DAN PENGGALIAN, ENERGI, DAN KONSTRUKSI','seksi_id'=>'2'],
        ['id'=>'12','kode'=>'016','output'=>'PUBLIKASI/LAPORAN STATISTIK DISTRIBUSI','seksi_id'=>'4'],
        ['id'=>'13','kode'=>'018','output'=>'PUBLIKASI/LAPORAN UPDATING DIREKTORI PASAR DAN PUSAT PERDAGANGAN','seksi_id'=>'4'],
        ['id'=>'14','kode'=>'020','output'=>'PUBLIKASI/LAPORAN STATISTIK HARGA','seksi_id'=>'4'],
        ['id'=>'15','kode'=>'023','output'=>'PUBLIKASI/LAPORAN STATISTIK KEUANGAN, TI, DAN PARIWISATA','seksi_id'=>'3'],
        ['id'=>'16','kode'=>'024','output'=>'PUBLIKASI/LAPORAN NERACA PRODUKSI','seksi_id'=>'3'],
        ['id'=>'17','kode'=>'025','output'=>'PUBLIKASI/LAPORAN NERACA PENGELUARAN','seksi_id'=>'3'],
        ['id'=>'18','kode'=>'026','output'=>'PUBLIKASI/LAPORAN ANALISIS DAN PENGEMBANGAN STATISTIK','seksi_id'=>'3'],
        ['id'=>'19','kode'=>'027','output'=>'PUBLIKASI/LAPORAN STATISTIK TANAMAN PANGAN','seksi_id'=>'2'],
        ['id'=>'20','kode'=>'028','output'=>'PUBLIKASI/LAPORAN STATISTIK HORTIKULTURA DAN PERKEBUNAN','seksi_id'=>'2'],
        ['id'=>'21','kode'=>'029','output'=>'PUBLIKASI/LAPORAN INDEKS KEMAHALAN KONSTRUKSI','seksi_id'=>'2'],
        ['id'=>'22','kode'=>'030','output'=>'PUBLIKASI/LAPORAN STATISTIK KEUANGAN PEMERINTAH DAERAH','seksi_id'=>'2'],
        ['id'=>'23','kode'=>'032','output'=>'PUBLIKASI/ LAPORAN SENSUS PENDUDUK','seksi_id'=>'0'],
        ['id'=>'24','kode'=>'034','output'=>'PUBLIKASI/ LAPORAN PMTB INSTITUSI DAN LAPANGAN USAHA','seksi_id'=>'3'],
        ['id'=>'25','kode'=>'035','output'=>'PUBLIKASI/ LAPORAN STATISTIK WISATAWAN NUSANTARA','seksi_id'=>'4'],
        ['id'=>'26','kode'=>'038','output'=>'PUBLIKASI/ LAPORAN STATISTIK TANAMAN PANGAN TERINTEGRASI DENGAN KERANGKA SAMPEL AREA','seksi_id'=>'2']
      ];

      foreach ($data as $dt)
      {
        (new \App\Output())->create($dt);
      }
    }
}
