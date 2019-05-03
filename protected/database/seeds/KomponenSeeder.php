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
        ['id'=>'1','kode'=>'051','komponen'=>'Penyusunan rencana program dan Penyusunan rencana anggaran','seksi_id'=>'1'],
        ['id'=>'2','kode'=>'052','komponen'=>'Pelaksanaan pemantauan dan evaluasi','seksi_id'=>'1'],
        ['id'=>'3','kode'=>'053','komponen'=>'Pengelolaan keuangan dan perbendaharaan','seksi_id'=>'1'],
        ['id'=>'4','kode'=>'054','komponen'=>'Pengelolaan kepegawaian','seksi_id'=>'1'],
        ['id'=>'5','kode'=>'055','komponen'=>'Pelayanan umum, Pelayanan rumah tangga dan perlengkapan','seksi_id'=>'1'],
        ['id'=>'6','kode'=>'001','komponen'=>'Gaji dan Tunjangan','seksi_id'=>'1'],
        ['id'=>'7','kode'=>'002','komponen'=>'Operasional dan Pemeliharaan Kantor','seksi_id'=>'1'],
        ['id'=>'8','kode'=>'051','komponen'=>'Pengadaan Kendaraan Bermotor','seksi_id'=>'1'],
        ['id'=>'9','kode'=>'100','komponen'=>'PENINGKATAN KUALITAS DAN LAYANAN PUBLIKASI','seksi_id'=>'6'],
        ['id'=>'10','kode'=>'051','komponen'=>'PENINGKATAN PELAYANAN METADATA KEGIATAN STATISTIK DASAR, SEKTORAL DAN KHUSUS','seksi_id'=>'6'],
        ['id'=>'11','kode'=>'100','komponen'=>'SURVEI ANGKATAN KERJA NASIONAL (SAKERNAS) SEMESTERAN','seksi_id'=>'5'],
        ['id'=>'12','kode'=>'101','komponen'=>'SURVEI ANGKATAN KERJA NASIONAL (SAKERNAS) TAHUNAN','seksi_id'=>'5'],
        ['id'=>'13','kode'=>'051','komponen'=>'SURVEI SOSIAL EKONOMI NASIONAL KOR DAN KONSUMSI','seksi_id'=>'5'],
        ['id'=>'14','kode'=>'205','komponen'=>'SUSENAS MODUL KESEHATAN DAN PERUMAHAN','seksi_id'=>'5'],
        ['id'=>'15','kode'=>'200','komponen'=>'PENYUSUNAN STATISTIK POLITIK KEAMANAN','seksi_id'=>'5'],
        ['id'=>'16','kode'=>'602','komponen'=>'PENDATAAN PEMUTAKHIRAN DATA PERKEMBANGAN DESA TAHUN 2019','seksi_id'=>'5'],
        ['id'=>'17','kode'=>'051','komponen'=>'SURVEI PERUSAHAAN PETERNAKAN DAN RPH/TPH','seksi_id'=>'2'],
        ['id'=>'18','kode'=>'100','komponen'=>'SURVEI PERUSAHAAN PERIKANAN, TPI/PPI/PP','seksi_id'=>'2'],
        ['id'=>'19','kode'=>'200','komponen'=>'SURVEI PERUSAHAAN KEHUTANAN','seksi_id'=>'2'],
        ['id'=>'20','kode'=>'051','komponen'=>'SURVEI INDUSTRI BESAR DAN SEDANG BULANAN','seksi_id'=>'2'],
        ['id'=>'21','kode'=>'052','komponen'=>'SURVEI INDUSTRI BESAR/SEDANG TAHUNAN','seksi_id'=>'2'],
        ['id'=>'22','kode'=>'100','komponen'=>'SURVEI INDUSTRI MIKRO DAN KECIL (VIMK) TAHUNAN','seksi_id'=>'2'],
        ['id'=>'23','kode'=>'101','komponen'=>'SURVEI INDUSTRI MIKRO DAN KECIL (VIMK) TRIWULANAN','seksi_id'=>'2'],
        ['id'=>'24','kode'=>'200','komponen'=>'SURVEI PERTAMBANGAN, ENERGI, PENGGALIAN, CAPTIVE POWER DAN UPDATING DIREKTORI','seksi_id'=>'2'],
        ['id'=>'25','kode'=>'301','komponen'=>'SURVEI KONSTRUKSI','seksi_id'=>'2'],
        ['id'=>'26','kode'=>'301','komponen'=>'KOMPILASI DATA TRANSPORTASI','seksi_id'=>'4'],
        ['id'=>'27','kode'=>'304','komponen'=>'PENYUSUNAN DAFTAR PELAKU USAHA TRANSPORTASI PASCA SENSUS EKONOMI 2016','seksi_id'=>'4'],
        ['id'=>'28','kode'=>'920','komponen'=>'PENYUSUNAN DIREKTORI PASAR DAN PUSAT PERDAGANGAN','seksi_id'=>'4'],
        ['id'=>'29','kode'=>'300','komponen'=>'SURVEI HARGA PERDESAAN','seksi_id'=>'4'],
        ['id'=>'30','kode'=>'052','komponen'=>'SURVEI STATISTIK BADAN USAHA DAN PASAR MODAL','seksi_id'=>'4'],
        ['id'=>'31','kode'=>'200','komponen'=>'SURVEI BIDANG JASA PARIWISATA','seksi_id'=>'4'],
        ['id'=>'32','kode'=>'301','komponen'=>'PENYUSUNAN PDRB TAHUNAN DAN TRIWULANAN MENURUT LAPANGAN USAHA TAHUN DASAR 2010:100','seksi_id'=>'3'],
        ['id'=>'33','kode'=>'051','komponen'=>'PENYUSUNAN KOMPONEN PENGELUARAN RUMAH TANGGA DAN INSTITUSI NIRLABA TRIWULANAN/TAHUNAN DAN PENYUSUNAN SUT/IO SISI USES','seksi_id'=>'3'],
        ['id'=>'34','kode'=>'101','komponen'=>'PENYUSUNAN KOMPONEN PENGELUARAN PEMERINTAH TRIWULANAN/TAHUNAN DAN PENYUSUNAN SUT/IO SISI USES','seksi_id'=>'3'],
        ['id'=>'35','kode'=>'204','komponen'=>'PENYUSUNAN KOMPONEN PMTB DAN INVENTORI TRIWULANAN/TAHUNAN DAN PENYUSUNAN SUT /IO SISI USES','seksi_id'=>'3'],
        ['id'=>'36','kode'=>'302','komponen'=>'PENYUSUNAN KONSOLIDASI PDRB PENGELUARAN TRIWULANAN DAN TAHUNAN','seksi_id'=>'3'],
        ['id'=>'37','kode'=>'051','komponen'=>'INDEKS TENDENSI BISNIS DAN INDEKS TENDENSI KONSUMEN','seksi_id'=>'3'],
        ['id'=>'38','kode'=>'051','komponen'=>'SURVEI PERTANIAN TANAMAN PANGAN/UBINAN','seksi_id'=>'2'],
        ['id'=>'39','kode'=>'100','komponen'=>'SURVEI HORTIKULTURA DAN INDIKATOR PERTANIAN','seksi_id'=>'2'],
        ['id'=>'40','kode'=>'200','komponen'=>'SURVEI PERUSAHAAN PERKEBUNAN','seksi_id'=>'2'],
        ['id'=>'41','kode'=>'100','komponen'=>'INDEKS KEMAHALAN KONSTRUKSI','seksi_id'=>'2'],
        ['id'=>'42','kode'=>'053','komponen'=>'SURVEI STATISTIK KEUANGAN PEMERINTAH DAERAH','seksi_id'=>'2'],
        ['id'=>'43','kode'=>'503','komponen'=>'PEMETAAN DAN PEMUTAKHIRAN MUATAN WILAYAH KERJA STATISTIK SP2020','seksi_id'=>'6'],
        ['id'=>'44','kode'=>'500','komponen'=>'PENYUSUNAN DISAGREGASI PMTB MENURUT INSTITUSI DAN LAPANGAN USAHA','seksi_id'=>'3'],
        ['id'=>'45','kode'=>'500','komponen'=>'SURVEI WISATAWAN NUSANTARA','seksi_id'=>'4'],
        ['id'=>'46','kode'=>'054','komponen'=>'PENDATAAN STATISTIK PERTANIAN TANAMAN PANGAN TERINTEGRASI DENGAN METODE KERANGKA SAMPEL AREA','seksi_id'=>'2']
      ];

      foreach ($data as $dt)
      {
        (new \App\Komponen())->create($dt);
      }
    }
}
