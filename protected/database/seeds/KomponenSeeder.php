<?php

use Illuminate\Database\Seeder;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','kode'=>'051','komponen'=>'Penyusunan rencana program dan Penyusunan rencana anggaran'],
        ['id'=>'2','kode'=>'052','komponen'=>'Pelaksanaan pemantauan dan evaluasi'],
        ['id'=>'3','kode'=>'053','komponen'=>'Pengelolaan keuangan dan perbendaharaan'],
        ['id'=>'4','kode'=>'054','komponen'=>'Pengelolaan kepegawaian'],
        ['id'=>'5','kode'=>'055','komponen'=>'Pelayanan umum, Pelayanan rumah tangga dan perlengkapan'],
        ['id'=>'6','kode'=>'001','komponen'=>'Gaji dan Tunjangan'],
        ['id'=>'7','kode'=>'002','komponen'=>'Operasional dan Pemeliharaan Kantor'],
        ['id'=>'8','kode'=>'051','komponen'=>'Pengadaan Kendaraan Bermotor'],
        ['id'=>'9','kode'=>'100','komponen'=>'PENINGKATAN KUALITAS DAN LAYANAN PUBLIKASI'],
        ['id'=>'10','kode'=>'051','komponen'=>'PENINGKATAN PELAYANAN METADATA KEGIATAN STATISTIK DASAR, SEKTORAL DAN KHUSUS'],
        ['id'=>'11','kode'=>'100','komponen'=>'SURVEI ANGKATAN KERJA NASIONAL (SAKERNAS) SEMESTERAN'],
        ['id'=>'12','kode'=>'101','komponen'=>'SURVEI ANGKATAN KERJA NASIONAL (SAKERNAS) TAHUNAN'],
        ['id'=>'13','kode'=>'051','komponen'=>'SURVEI SOSIAL EKONOMI NASIONAL KOR DAN KONSUMSI'],
        ['id'=>'14','kode'=>'205','komponen'=>'SUSENAS MODUL KESEHATAN DAN PERUMAHAN'],
        ['id'=>'15','kode'=>'200','komponen'=>'PENYUSUNAN STATISTIK POLITIK KEAMANAN'],
        ['id'=>'16','kode'=>'602','komponen'=>'PENDATAAN PEMUTAKHIRAN DATA PERKEMBANGAN DESA TAHUN 2019'],
        ['id'=>'17','kode'=>'051','komponen'=>'SURVEI PERUSAHAAN PETERNAKAN DAN RPH/TPH'],
        ['id'=>'18','kode'=>'100','komponen'=>'SURVEI PERUSAHAAN PERIKANAN, TPI/PPI/PP'],
        ['id'=>'19','kode'=>'200','komponen'=>'SURVEI PERUSAHAAN KEHUTANAN'],
        ['id'=>'20','kode'=>'051','komponen'=>'SURVEI INDUSTRI BESAR DAN SEDANG BULANAN'],
        ['id'=>'21','kode'=>'052','komponen'=>'SURVEI INDUSTRI BESAR/SEDANG TAHUNAN'],
        ['id'=>'22','kode'=>'100','komponen'=>'SURVEI INDUSTRI MIKRO DAN KECIL (VIMK) TAHUNAN'],
        ['id'=>'23','kode'=>'101','komponen'=>'SURVEI INDUSTRI MIKRO DAN KECIL (VIMK) TRIWULANAN'],
        ['id'=>'24','kode'=>'200','komponen'=>'SURVEI PERTAMBANGAN, ENERGI, PENGGALIAN, CAPTIVE POWER DAN UPDATING DIREKTORI'],
        ['id'=>'25','kode'=>'301','komponen'=>'SURVEI KONSTRUKSI'],
        ['id'=>'26','kode'=>'301','komponen'=>'KOMPILASI DATA TRANSPORTASI'],
        ['id'=>'27','kode'=>'304','komponen'=>'PENYUSUNAN DAFTAR PELAKU USAHA TRANSPORTASI PASCA SENSUS EKONOMI 2016'],
        ['id'=>'28','kode'=>'920','komponen'=>'PENYUSUNAN DIREKTORI PASAR DAN PUSAT PERDAGANGAN'],
        ['id'=>'29','kode'=>'300','komponen'=>'SURVEI HARGA PERDESAAN'],
        ['id'=>'30','kode'=>'052','komponen'=>'SURVEI STATISTIK BADAN USAHA DAN PASAR MODAL'],
        ['id'=>'31','kode'=>'200','komponen'=>'SURVEI BIDANG JASA PARIWISATA'],
        ['id'=>'32','kode'=>'301','komponen'=>'PENYUSUNAN PDRB TAHUNAN DAN TRIWULANAN MENURUT LAPANGAN USAHA TAHUN DASAR 2010:100'],
        ['id'=>'33','kode'=>'051','komponen'=>'PENYUSUNAN KOMPONEN PENGELUARAN RUMAH TANGGA DAN INSTITUSI NIRLABA TRIWULANAN/TAHUNAN DAN PENYUSUNAN SUT/IO SISI USES'],
        ['id'=>'34','kode'=>'101','komponen'=>'PENYUSUNAN KOMPONEN PENGELUARAN PEMERINTAH TRIWULANAN/TAHUNAN DAN PENYUSUNAN SUT/IO SISI USES'],
        ['id'=>'35','kode'=>'204','komponen'=>'PENYUSUNAN KOMPONEN PMTB DAN INVENTORI TRIWULANAN/TAHUNAN DAN PENYUSUNAN SUT /IO SISI USES'],
        ['id'=>'36','kode'=>'302','komponen'=>'PENYUSUNAN KONSOLIDASI PDRB PENGELUARAN TRIWULANAN DAN TAHUNAN'],
        ['id'=>'37','kode'=>'051','komponen'=>'INDEKS TENDENSI BISNIS DAN INDEKS TENDENSI KONSUMEN'],
        ['id'=>'38','kode'=>'051','komponen'=>'SURVEI PERTANIAN TANAMAN PANGAN/UBINAN'],
        ['id'=>'39','kode'=>'100','komponen'=>'SURVEI HORTIKULTURA DAN INDIKATOR PERTANIAN'],
        ['id'=>'40','kode'=>'200','komponen'=>'SURVEI PERUSAHAAN PERKEBUNAN'],
        ['id'=>'41','kode'=>'100','komponen'=>'INDEKS KEMAHALAN KONSTRUKSI'],
        ['id'=>'42','kode'=>'053','komponen'=>'SURVEI STATISTIK KEUANGAN PEMERINTAH DAERAH'],
        ['id'=>'43','kode'=>'503','komponen'=>'PEMETAAN DAN PEMUTAKHIRAN MUATAN WILAYAH KERJA STATISTIK SP2020'],
        ['id'=>'44','kode'=>'500','komponen'=>'PENYUSUNAN DISAGREGASI PMTB MENURUT INSTITUSI DAN LAPANGAN USAHA'],
        ['id'=>'45','kode'=>'500','komponen'=>'SURVEI WISATAWAN NUSANTARA'],
        ['id'=>'46','kode'=>'054','komponen'=>'PENDATAAN STATISTIK PERTANIAN TANAMAN PANGAN TERINTEGRASI DENGAN METODE KERANGKA SAMPEL AREA']
      ];

      foreach ($data as $dt)
      {
        (new \App\Komponen())->create($dt);
      }
    }
}
