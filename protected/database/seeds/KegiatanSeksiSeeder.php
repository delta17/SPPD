<?php

use Illuminate\Database\Seeder;

class KegiatanSeksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','kegiatan_seksi'=>'PENINGKATAN KUALITAS DAN LAYANAN PUBLIKASI','seksi_id'=>'6'],
        ['id'=>'2','kegiatan_seksi'=>'PENINGKATAN PELAYANAN METADATA KEGIATAN STATISTIK DASAR, SEKTORAL DAN KHUSUS','seksi_id'=>'6'],
        ['id'=>'3','kegiatan_seksi'=>'PEMETAAN DAN PEMUTAKHIRAN MUATAN WILAYAH KERJA STATISTIK SP2020','seksi_id'=>'6'],
        ['id'=>'4','kegiatan_seksi'=>'SURVEI ANGKATAN KERJA NASIONAL (SAKERNAS) SEMESTERAN','seksi_id'=>'5'],
        ['id'=>'5','kegiatan_seksi'=>'SURVEI ANGKATAN KERJA NASIONAL (SAKERNAS) TAHUNAN','seksi_id'=>'5'],
        ['id'=>'6','kegiatan_seksi'=>'SURVEI SOSIAL EKONOMI NASIONAL KOR DAN KONSUMSI','seksi_id'=>'5'],
        ['id'=>'7','kegiatan_seksi'=>'SUSENAS MODUL KESEHATAN DAN PERUMAHAN','seksi_id'=>'5'],
        ['id'=>'8','kegiatan_seksi'=>'PENYUSUNAN STATISTIK POLITIK KEAMANAN','seksi_id'=>'5'],
        ['id'=>'9','kegiatan_seksi'=>'PENDATAAN PEMUTAKHIRAN DATA PERKEMBANGAN DESA TAHUN 2019','seksi_id'=>'5'],
        ['id'=>'10','kegiatan_seksi'=>'SURVEI PERUSAHAAN PETERNAKAN DAN RPH/TPH','seksi_id'=>'2'],
        ['id'=>'11','kegiatan_seksi'=>'SURVEI PERUSAHAAN PERIKANAN, TPI/PPI/PP','seksi_id'=>'2'],
        ['id'=>'12','kegiatan_seksi'=>'SURVEI INDUSTRI BESAR DAN SEDANG BULANAN','seksi_id'=>'2'],
        ['id'=>'13','kegiatan_seksi'=>'SURVEI INDUSTRI BESAR/SEDANG TAHUNAN','seksi_id'=>'2'],
        ['id'=>'14','kegiatan_seksi'=>'SURVEI INDUSTRI MIKRO DAN KECIL (VIMK) TAHUNAN','seksi_id'=>'2'],
        ['id'=>'15','kegiatan_seksi'=>'SURVEI INDUSTRI MIKRO DAN KECIL (VIMK) TRIWULANAN','seksi_id'=>'2'],
        ['id'=>'16','kegiatan_seksi'=>'SURVEI PERTAMBANGAN, ENERGI, PENGGALIAN, CAPTIVE POWER DAN UPDATING DIREKTORI','seksi_id'=>'2'],
        ['id'=>'17','kegiatan_seksi'=>'SURVEI KONSTRUKSI','seksi_id'=>'2'],
        ['id'=>'18','kegiatan_seksi'=>'SURVEI PERTANIAN TANAMAN PANGAN/UBINAN','seksi_id'=>'2'],
        ['id'=>'19','kegiatan_seksi'=>'SURVEI PERUSAHAAN PERKEBUNAN','seksi_id'=>'2'],
        ['id'=>'20','kegiatan_seksi'=>'PENDATAAN STATISTIK PERTANIAN TANAMAN PANGAN TERINTEGRASI DENGAN METODE KERANGKA SAMPEL AREA','seksi_id'=>'2'],
        ['id'=>'21','kegiatan_seksi'=>'KOMPILASI DATA TRANSPORTASI','seksi_id'=>'4'],
        ['id'=>'22','kegiatan_seksi'=>'PENYUSUNAN DIREKTORI PASAR DAN PUSAT PERDAGANGAN','seksi_id'=>'4'],
        ['id'=>'23','kegiatan_seksi'=>'SURVEI HARGA PERDESAAN','seksi_id'=>'4'],
        ['id'=>'24','kegiatan_seksi'=>'SURVEI STATISTIK BADAN USAHA DAN PASAR MODAL','seksi_id'=>'4'],
        ['id'=>'25','kegiatan_seksi'=>'SURVEI BIDANG JASA PARIWISATA','seksi_id'=>'4'],
        ['id'=>'26','kegiatan_seksi'=>'INDEKS KEMAHALAN KONSTRUKSI','seksi_id'=>'4'],
        ['id'=>'27','kegiatan_seksi'=>'SURVEI STATISTIK KEUANGAN PEMERINTAH DAERAH','seksi_id'=>'4'],
        ['id'=>'28','kegiatan_seksi'=>'Survei Terintegrasi Kegiatan Usaha Triwulanan','seksi_id'=>'4'],
        ['id'=>'29','kegiatan_seksi'=>'Survei Perdagangan Antar Wilayah','seksi_id'=>'4'],
        ['id'=>'30','kegiatan_seksi'=>'Survei Lembaga Keuangan Koperasi','seksi_id'=>'4'],
        ['id'=>'31','kegiatan_seksi'=>'Survei Harga Perdagangan Besar','seksi_id'=>'4'],
        ['id'=>'32','kegiatan_seksi'=>'SURVEI WISATAWAN NUSANTARA','seksi_id'=>'4'],
        ['id'=>'33','kegiatan_seksi'=>'PENYUSUNAN NILAI TAMBAH LAPANGAN USAHA BARANG TRIWULANAN 2010:100 (SKTNP BARANG)','seksi_id'=>'3'],
        ['id'=>'34','kegiatan_seksi'=>'PENYUSUNAN NILAI TAMBAH LAPANGAN USAHA JASA TRIWULANAN 2010:100 (SKTNP JASA)','seksi_id'=>'3'],
        ['id'=>'35','kegiatan_seksi'=>'PENYUSUNAN PDRB TAHUNAN DAN TRIWULANAN MENURUT LAPANGAN USAHA TAHUN DASAR 2010:100','seksi_id'=>'3'],
        ['id'=>'36','kegiatan_seksi'=>'PENYUSUNAN KOMPONEN PENGELUARAN RUMAH TANGGA DAN INSTITUSI NIRLABA TRIWULANAN/TAHUNAN DAN PENYUSUNAN SUT/IO SISI USES','seksi_id'=>'3'],
        ['id'=>'37','kegiatan_seksi'=>'PENYUSUNAN NERACA RUMAH TANGGA DAN INSTITUSI NIRLABA','seksi_id'=>'3'],
        ['id'=>'38','kegiatan_seksi'=>'PENYUSUNAN NERACA PEMERINTAHAN DAN BADAN USAHA','seksi_id'=>'3'],
        ['id'=>'39','kegiatan_seksi'=>'PENYUSUNAN KOMPONEN PMTB DAN INVENTORI TRIWULANAN/TAHUNAN DAN PENYUSUNAN SUT /IO SISI USES','seksi_id'=>'3'],
        ['id'=>'40','kegiatan_seksi'=>'PENYUSUNAN KONSOLIDASI PDRB PENGELUARAN TRIWULANAN DAN TAHUNAN','seksi_id'=>'3'],
        ['id'=>'41','kegiatan_seksi'=>'PENYUSUNAN DISAGREGASI PMTB MENURUT INSTITUSI DAN LAPANGAN USAHA','seksi_id'=>'3'],
        ['id'=>'42','kegiatan_seksi'=>'Pengurusan  Administrasi Ke KPPN','seksi_id'=>'1'],
        ['id'=>'43','kegiatan_seksi'=>'REVISI ANGGARAN KE DJPB','seksi_id'=>'1'],
        ['id'=>'44','kegiatan_seksi'=>'KONSULTASI/SOSIALISASI DI KPKNL','seksi_id'=>'1'],
        ['id'=>'45','kegiatan_seksi'=>'PENGURUSAN ADMINISTRASI KEPEGAWAIAN KE BKN','seksi_id'=>'1']
      ];

      foreach ($data as $dt)
      {
        (new \App\KegiatanSeksi())->create($dt);
      }
    }
}
