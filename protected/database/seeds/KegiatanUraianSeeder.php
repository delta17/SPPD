<?php

use Illuminate\Database\Seeder;

class KegiatanUraianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['id'=>'1','uraian'=>'Pengumpulan Data Publikasi Kabupaten Dalam Angka','kegiatan_id'=>'1','waktu_kegiatan'=>0.5,'satuan'=>'Instansi'],
        ['id'=>'2','uraian'=>'Pengumpulan Data Publikasi Kecamatan Dalam Angka','kegiatan_id'=>'1','waktu_kegiatan'=>2,'satuan'=>'Desa/Kel'],
        ['id'=>'3','uraian'=>'Pengawasan Pengumpulan Data Publikasi Kabupaten Dalam Angka','kegiatan_id'=>'1','waktu_kegiatan'=>1,'satuan'=>'Instansi'],
        ['id'=>'4','uraian'=>'Pengawasan Pengumpulan Data Publikasi Kecamatan Dalam Angka','kegiatan_id'=>'1','waktu_kegiatan'=>2,'satuan'=>'Desa/Kel'],
        ['id'=>'5','uraian'=>'Pengumpulan data metadata statistik dasar/sektoral/khusus daerah','kegiatan_id'=>'2','waktu_kegiatan'=>1.5,'satuan'=>'Dokumen'],
        ['id'=>'6','uraian'=>'Pengumpulan data SKD','kegiatan_id'=>'2','waktu_kegiatan'=>0.75,'satuan'=>'Responden'],
        ['id'=>'7','uraian'=>'Pengawasan Pengumpulan data metadata statistik dasar/sektoral/khusus daerah','kegiatan_id'=>'2','waktu_kegiatan'=>0.8,'satuan'=>'Dokumen'],
        ['id'=>'8','uraian'=>'Pengawasan Pengumpulan data SKD','kegiatan_id'=>'2','waktu_kegiatan'=>0.75,'satuan'=>'Responden'],
        ['id'=>'9','uraian'=>'Pemutakhiran Peta Blok Sensus','kegiatan_id'=>'3','waktu_kegiatan'=>6,'satuan'=>'Peta'],
        ['id'=>'10','uraian'=>'penggabungan informasi muatan BS dan pengisian daftar SP2020-rd','kegiatan_id'=>'3','waktu_kegiatan'=>1,'satuan'=>'Dokumen'],
        ['id'=>'11','uraian'=>'Pengawasan Pemutakhiran Peta Blok Sensus','kegiatan_id'=>'3','waktu_kegiatan'=>6,'satuan'=>'Peta'],
        ['id'=>'12','uraian'=>'Updating rumah tangga','kegiatan_id'=>'4','waktu_kegiatan'=>0.17,'satuan'=>'Ruta'],
        ['id'=>'13','uraian'=>'Pengawasan Updating rumah tangga','kegiatan_id'=>'4','waktu_kegiatan'=>0.17,'satuan'=>'ruta'],
        ['id'=>'14','uraian'=>'Pencacahan rumah tangga','kegiatan_id'=>'4','waktu_kegiatan'=>1,'satuan'=>'Ruta'],
        ['id'=>'15','uraian'=>'Pengawasan pencacah rumah tangga','kegiatan_id'=>'4','waktu_kegiatan'=>1,'satuan'=>'Ruta'],
        ['id'=>'16','uraian'=>'Updating rumah tangga','kegiatan_id'=>'5','waktu_kegiatan'=>0.17,'satuan'=>'Ruta'],
        ['id'=>'17','uraian'=>'Pengawasan Updating rumah tangga','kegiatan_id'=>'5','waktu_kegiatan'=>0.17,'satuan'=>'ruta'],
        ['id'=>'18','uraian'=>'Pencacahan rumah tangga','kegiatan_id'=>'5','waktu_kegiatan'=>1,'satuan'=>'Ruta'],
        ['id'=>'19','uraian'=>'Pengawasan pencacah rumah tangga','kegiatan_id'=>'5','waktu_kegiatan'=>1,'satuan'=>'Ruta'],
        ['id'=>'20','uraian'=>'Updating rumah tangga','kegiatan_id'=>'6','waktu_kegiatan'=>0.2,'satuan'=>'Ruta'],
        ['id'=>'21','uraian'=>'Pengawasan Updating rumah tangga','kegiatan_id'=>'6','waktu_kegiatan'=>0.2,'satuan'=>'ruta'],
        ['id'=>'22','uraian'=>'Pencacahan rumah tangga','kegiatan_id'=>'6','waktu_kegiatan'=>2,'satuan'=>'ruta'],
        ['id'=>'23','uraian'=>'Pengawasan pencacah rumah tangga','kegiatan_id'=>'6','waktu_kegiatan'=>2,'satuan'=>'ruta'],
        ['id'=>'24','uraian'=>'Updating rumah tangga','kegiatan_id'=>'7','waktu_kegiatan'=>0.17,'satuan'=>'ruta'],
        ['id'=>'25','uraian'=>'Pengawasan Updating rumah tangga','kegiatan_id'=>'7','waktu_kegiatan'=>0.17,'satuan'=>'ruta'],
        ['id'=>'26','uraian'=>'Pencacahan rumah tangga','kegiatan_id'=>'7','waktu_kegiatan'=>2,'satuan'=>'ruta'],
        ['id'=>'27','uraian'=>'Pengawasan pencacah rumah tangga','kegiatan_id'=>'7','waktu_kegiatan'=>2,'satuan'=>'ruta'],
        ['id'=>'28','uraian'=>'Pengumpulan Data','kegiatan_id'=>'8','waktu_kegiatan'=>8,'satuan'=>'Instansi'],
        ['id'=>'29','uraian'=>'Pengawasan Pengumpulan Data','kegiatan_id'=>'8','waktu_kegiatan'=>8,'satuan'=>'Instansi'],
        ['id'=>'30','uraian'=>'updating insfrastruktur','kegiatan_id'=>'9','waktu_kegiatan'=>3,'satuan'=>'Desa/Kel'],
        ['id'=>'31','uraian'=>'pengawasan updating insfrastruktur','kegiatan_id'=>'9','waktu_kegiatan'=>3,'satuan'=>'Desa/Kel'],
        ['id'=>'32','uraian'=>'Pengumpulan data RPH','kegiatan_id'=>'10','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'33','uraian'=>'Pengawasan Pengumpulan data RPH','kegiatan_id'=>'10','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'34','uraian'=>'Pengumpulan data TPI/PPI/PP','kegiatan_id'=>'11','waktu_kegiatan'=>0.5,'satuan'=>'Responden'],
        ['id'=>'35','uraian'=>'Pengawasan Pengumpulan data TPI/PPI/PP','kegiatan_id'=>'11','waktu_kegiatan'=>0.5,'satuan'=>'Responden'],
        ['id'=>'36','uraian'=>'Pengumpulan data Survei IBS Bulanan','kegiatan_id'=>'12','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'37','uraian'=>'pengawasan Pengumpulan data Survei IBS Bulanan','kegiatan_id'=>'12','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'38','uraian'=>'Pengumpulan data Survei IBS Tahunan','kegiatan_id'=>'13','waktu_kegiatan'=>2,'satuan'=>'Perusahaan'],
        ['id'=>'39','uraian'=>'pengawasan Pengumpulan data Survei IBS Tahunan','kegiatan_id'=>'13','waktu_kegiatan'=>2,'satuan'=>'Perusahaan'],
        ['id'=>'40','uraian'=>'Pengumpulan data Survei IMK Tahunan','kegiatan_id'=>'14','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'41','uraian'=>'pengawasan Pengumpulan data Survei IMK Tahunan','kegiatan_id'=>'14','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'42','uraian'=>'Pengumpulan data Survei IMK Triwulanan','kegiatan_id'=>'15','waktu_kegiatan'=>1.5,'satuan'=>'Perusahaan'],
        ['id'=>'43','uraian'=>'pengawasan Pengumpulan data Survei IMK Triwulanan','kegiatan_id'=>'15','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'44','uraian'=>'Pencacahan Survei Pertambangan dan penggalian','kegiatan_id'=>'16','waktu_kegiatan'=>1,'satuan'=>'Responden'],
        ['id'=>'45','uraian'=>'pengawasan Pencacahan Survei Pertambangan dan penggalian','kegiatan_id'=>'16','waktu_kegiatan'=>1,'satuan'=>'Responden'],
        ['id'=>'46','uraian'=>'Pencacahan Survei energi dan captive power','kegiatan_id'=>'16','waktu_kegiatan'=>1,'satuan'=>'Responden'],
        ['id'=>'47','uraian'=>'pengawasan Pencacahan Survei energi dan captive power','kegiatan_id'=>'16','waktu_kegiatan'=>1,'satuan'=>'Responden'],
        ['id'=>'48','uraian'=>'updating direktori perusahaan pertambangan, energi, penggalian dan captive power','kegiatan_id'=>'16','waktu_kegiatan'=>0.25,'satuan'=>'Instansi'],
        ['id'=>'49','uraian'=>'pengawasan updating direktori perusahaan pertambangan, energi, penggalian dan captive power','kegiatan_id'=>'16','waktu_kegiatan'=>0.25,'satuan'=>'Instansi'],
        ['id'=>'50','uraian'=>'Pengutipan direktori perusahaan konstruksi ke instansi terkait','kegiatan_id'=>'17','waktu_kegiatan'=>0.5,'satuan'=>'Instansi'],
        ['id'=>'51','uraian'=>'Pencacahan survei perusahaan konstruksi triwulanan','kegiatan_id'=>'17','waktu_kegiatan'=>0.75,'satuan'=>'Perusahaan'],
        ['id'=>'52','uraian'=>'Pengawasan Pencacahan survei perusahaan konstruksi triwulanan','kegiatan_id'=>'17','waktu_kegiatan'=>0.75,'satuan'=>'Perusahaan'],
        ['id'=>'53','uraian'=>'Pencacahan survei perusahaan konstruksi tahunan','kegiatan_id'=>'17','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'54','uraian'=>'Pengawasan Pencacahan survei perusahaan konstruksi tahunan','kegiatan_id'=>'17','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'55','uraian'=>'Pencacahan survei perusahaan konstruksi perorangan','kegiatan_id'=>'17','waktu_kegiatan'=>0.75,'satuan'=>'Perusahaan'],
        ['id'=>'56','uraian'=>'Pengawasan Pencacahan survei perusahaan konstruksi perorangan','kegiatan_id'=>'17','waktu_kegiatan'=>0.75,'satuan'=>'Perusahaan'],
        ['id'=>'57','uraian'=>'updating ubinan','kegiatan_id'=>'18','waktu_kegiatan'=>0.8,'satuan'=>'ruta'],
        ['id'=>'58','uraian'=>'pengawasan updating ubinan','kegiatan_id'=>'18','waktu_kegiatan'=>0.8,'satuan'=>'ruta'],
        ['id'=>'59','uraian'=>'pengumpulan data rata-rata produksi tanaman pangan','kegiatan_id'=>'18','waktu_kegiatan'=>2,'satuan'=>'plot/ruta'],
        ['id'=>'60','uraian'=>'pengaw sanpengumpulan data rata-rata produksi tanaman pangan','kegiatan_id'=>'18','waktu_kegiatan'=>2,'satuan'=>'plot/ruta'],
        ['id'=>'61','uraian'=>'Pencacahan survei perusahaan perkebunan tahunan','kegiatan_id'=>'19','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'62','uraian'=>'Pengawasan Pencacahan survei perusahaan perkebunan tahunan','kegiatan_id'=>'19','waktu_kegiatan'=>1,'satuan'=>'Perusahaan'],
        ['id'=>'63','uraian'=>'Pencacahan survei perusahaan perkebunan triwulanan','kegiatan_id'=>'19','waktu_kegiatan'=>0.5,'satuan'=>'Perusahaan'],
        ['id'=>'64','uraian'=>'Pengawasan Pencacahan survei perusahaan perkebunan triwulanan','kegiatan_id'=>'19','waktu_kegiatan'=>0.5,'satuan'=>'Perusahaan'],
        ['id'=>'65','uraian'=>'Pencacahan survei perusahaan perkebunan bulanan','kegiatan_id'=>'19','waktu_kegiatan'=>1.17,'satuan'=>'Perusahaan'],
        ['id'=>'66','uraian'=>'Pengawasan Pencacahan survei perusahaan perkebunan bulanan','kegiatan_id'=>'19','waktu_kegiatan'=>1.17,'satuan'=>'Perusahaan'],
        ['id'=>'67','uraian'=>'Pencacahan KSA','kegiatan_id'=>'20','waktu_kegiatan'=>2.25,'satuan'=>'Kunjungan'],
        ['id'=>'68','uraian'=>'pengawasan Pencacahan KSA','kegiatan_id'=>'20','waktu_kegiatan'=>2.25,'satuan'=>'Kunjungan'],
        ['id'=>'69','uraian'=>'Pencacahan KSA jagung','kegiatan_id'=>'20','waktu_kegiatan'=>1,'satuan'=>'Kunjungan'],
        ['id'=>'70','uraian'=>'pengawasan Pencacahan KSA jagung','kegiatan_id'=>'20','waktu_kegiatan'=>1,'satuan'=>'Kunjungan'],
        ['id'=>'71','uraian'=>'Pengumpulan Data Transportasi (form AJR II/2, form AJR II/3, form AJR II/5','kegiatan_id'=>'21','waktu_kegiatan'=>0.33,'satuan'=>'instansi'],
        ['id'=>'72','uraian'=>'pengawasan Pengumpulan Data Transportasi (form AJR II/2, form AJR II/3, form AJR II/5','kegiatan_id'=>'21','waktu_kegiatan'=>0.5,'satuan'=>'instansi'],
        ['id'=>'73','uraian'=>'Pengumpulan data updating direktori pasar dan pusat perdagangan','kegiatan_id'=>'22','waktu_kegiatan'=>0.5,'satuan'=>'instansi'],
        ['id'=>'74','uraian'=>'pengawasan Pengumpulan data updating direktori pasar dan pusat perdagangan','kegiatan_id'=>'22','waktu_kegiatan'=>0.42,'satuan'=>'instansi'],
        ['id'=>'75','uraian'=>'Pencacahan Survei Harga Produsen Perdesaan (HD) Bulanan','kegiatan_id'=>'23','waktu_kegiatan'=>4.75,'satuan'=>'Dokumen'],
        ['id'=>'76','uraian'=>'Pengawasan Pencacahan Survei Harga Produsen Perdesaan (HD) Bulanan','kegiatan_id'=>'23','waktu_kegiatan'=>4.75,'satuan'=>'Dokumen'],
        ['id'=>'77','uraian'=>'Pencacahan Survei Harga Konsumen Perdesaan (HKD) Bulanan','kegiatan_id'=>'23','waktu_kegiatan'=>4.75,'satuan'=>'Dokumen'],
        ['id'=>'78','uraian'=>'Pengawasan Pencacahan Survei Harga Konsumen Perdesaan (HKD) Bulanan','kegiatan_id'=>'23','waktu_kegiatan'=>0.5,'satuan'=>'Dokumen'],
        ['id'=>'79','uraian'=>'Pencacahan survei statistik keuangan BUMD','kegiatan_id'=>'24','waktu_kegiatan'=>0.5,'satuan'=>'BUMD'],
        ['id'=>'80','uraian'=>'PengawasanPencacahan survei statistik keuangan BUMD','kegiatan_id'=>'24','waktu_kegiatan'=>0.39,'satuan'=>'BUMD'],
        ['id'=>'81','uraian'=>'Updating direktori usaha jasa akomodasi','kegiatan_id'=>'25','waktu_kegiatan'=>0.82,'satuan'=>'instansi'],
        ['id'=>'82','uraian'=>'Pendataan VHTS','kegiatan_id'=>'25','waktu_kegiatan'=>0.82,'satuan'=>'Dokumen'],
        ['id'=>'83','uraian'=>'Pengawasan pendataan VHTS','kegiatan_id'=>'25','waktu_kegiatan'=>0.82,'satuan'=>'Dokumen'],
        ['id'=>'84','uraian'=>'Pendataan VHTL','kegiatan_id'=>'25','waktu_kegiatan'=>0.82,'satuan'=>'Dokumen'],
        ['id'=>'85','uraian'=>'Pengawasan pendataan VHTL','kegiatan_id'=>'25','waktu_kegiatan'=>0.5,'satuan'=>'Dokumen'],
        ['id'=>'86','uraian'=>'Pencacahan Bill of quantity kabupaten','kegiatan_id'=>'26','waktu_kegiatan'=>0.75,'satuan'=>'Instansi'],
        ['id'=>'87','uraian'=>'Pengawasan Pencacahan Bill of quantity kabupaten','kegiatan_id'=>'26','waktu_kegiatan'=>16,'satuan'=>'Instansi'],
        ['id'=>'88','uraian'=>'Pencacahan paket komoditas kemahalan konstruksi','kegiatan_id'=>'26','waktu_kegiatan'=>16,'satuan'=>'Dokumen'],
        ['id'=>'89','uraian'=>'Pengawasan Pencacahan paket komoditas kemahalan konstruksi','kegiatan_id'=>'26','waktu_kegiatan'=>1,'satuan'=>'Dokumen'],
        ['id'=>'90','uraian'=>'Pencacahan K-3','kegiatan_id'=>'27','waktu_kegiatan'=>1,'satuan'=>'Desa/Kel'],
        ['id'=>'91','uraian'=>'Pengawasan Pencacahan K-3','kegiatan_id'=>'27','waktu_kegiatan'=>1,'satuan'=>'Desa/Kel'],
        ['id'=>'92','uraian'=>'Pencacahan APBD-2','kegiatan_id'=>'27','waktu_kegiatan'=>1,'satuan'=>'instansi'],
        ['id'=>'93','uraian'=>'Pengawasan pencacahan APBD-2','kegiatan_id'=>'27','waktu_kegiatan'=>1,'satuan'=>'instansi'],
        ['id'=>'94','uraian'=>'Pencacahan K-2','kegiatan_id'=>'27','waktu_kegiatan'=>1,'satuan'=>'instansi'],
        ['id'=>'95','uraian'=>'Pengawasan Pencacahan K-2','kegiatan_id'=>'27','waktu_kegiatan'=>1,'satuan'=>'instansi'],
        ['id'=>'96','uraian'=>'Pencacahan Survei Terintegrasi Kegiatan Usaha Triwulanan','kegiatan_id'=>'28','waktu_kegiatan'=>1,'satuan'=>'Usaha'],
        ['id'=>'97','uraian'=>'Pengawasan pencacahan Survei Terintegrasi Kegiatan Usaha Triwulanan','kegiatan_id'=>'28','waktu_kegiatan'=>1,'satuan'=>'Usaha'],
        ['id'=>'98','uraian'=>'Pencacahan Survei Perdagangan Antar Wilayah','kegiatan_id'=>'29','waktu_kegiatan'=>1,'satuan'=>'Usaha'],
        ['id'=>'99','uraian'=>'Pengawasan pencacahan Survei Perdagangan Antar Wilayah','kegiatan_id'=>'29','waktu_kegiatan'=>1,'satuan'=>'Usaha'],
        ['id'=>'100','uraian'=>'Pencacahan Survei Lembaga Keuangan Koperasi','kegiatan_id'=>'30','waktu_kegiatan'=>0.5,'satuan'=>'Koperasi'],
        ['id'=>'101','uraian'=>'Pengawasan pencacahan Survei Lembaga Keuangan Koperasi','kegiatan_id'=>'30','waktu_kegiatan'=>0.5,'satuan'=>'Koperasi'],
        ['id'=>'102','uraian'=>'Pencacahan Survei Harga Perdagangan Besar','kegiatan_id'=>'31','waktu_kegiatan'=>1,'satuan'=>'Usaha'],
        ['id'=>'103','uraian'=>'Pengawasan pencacahan Survei Harga Perdagangan Besar','kegiatan_id'=>'31','waktu_kegiatan'=>1,'satuan'=>'Usaha'],
        ['id'=>'104','uraian'=>'Updating listing','kegiatan_id'=>'32','waktu_kegiatan'=>1,'satuan'=>'ruta'],
        ['id'=>'105','uraian'=>'Pengawasan Updating listing','kegiatan_id'=>'32','waktu_kegiatan'=>1,'satuan'=>'ruta'],
        ['id'=>'106','uraian'=>'pencacahan','kegiatan_id'=>'32','waktu_kegiatan'=>2,'satuan'=>'Responden'],
        ['id'=>'107','uraian'=>'pengawasan pencacahan','kegiatan_id'=>'32','waktu_kegiatan'=>2,'satuan'=>'Responden'],
        ['id'=>'108','uraian'=>'Pengumpulan data Survei Khusus Triwulanan Neraca Produksi Sektor Barang (SKTNPB)','kegiatan_id'=>'33','waktu_kegiatan'=>0.5,'satuan'=>'Perusahaan'],
        ['id'=>'109','uraian'=>'Pengawasan Pengumpulan data Survei Khusus Triwulanan Neraca Produksi Sektor Barang (SKTNPB)','kegiatan_id'=>'33','waktu_kegiatan'=>0.5,'satuan'=>'Perusahaan'],
        ['id'=>'110','uraian'=>'Pengumpulan data Survei Khusus Triwulanan Neraca Produksi Sektor Jasa (SKTNPJ)','kegiatan_id'=>'34','waktu_kegiatan'=>0.33,'satuan'=>'Perusahaan'],
        ['id'=>'111','uraian'=>'Pengawasan Pengumpulan data Survei Khusus Triwulanan Neraca Produksi Sektor Jasa (SKTNPJ)','kegiatan_id'=>'34','waktu_kegiatan'=>0.33,'satuan'=>'Perusahaan'],
        ['id'=>'112','uraian'=>'Pengumpulan data Survei Khusus Neraca Produksi (SKNP)','kegiatan_id'=>'35','waktu_kegiatan'=>0.79,'satuan'=>'Perusahaan'],
        ['id'=>'113','uraian'=>'Pengawasan Pengumpulan data Survei Khusus Neraca Produksi (SKNP)','kegiatan_id'=>'35','waktu_kegiatan'=>0.83,'satuan'=>'Perusahaan'],
        ['id'=>'114','uraian'=>'Pengumpulan data dasar penghitungan PDRB Tahunan','kegiatan_id'=>'35','waktu_kegiatan'=>1,'satuan'=>'Instansi'],
        ['id'=>'115','uraian'=>'Pengawasan pengumpulan data dasar penghitungan PDRB Tahunan','kegiatan_id'=>'35','waktu_kegiatan'=>1,'satuan'=>'Instansi'],
        ['id'=>'116','uraian'=>'Pengumpulan data dasar penghitungan PDRB Triwulanan','kegiatan_id'=>'35','waktu_kegiatan'=>0.5,'satuan'=>'Instansi'],
        ['id'=>'117','uraian'=>'Pengawasan pengumpulan data dasar penghitungan PDRB Triwulanan','kegiatan_id'=>'35','waktu_kegiatan'=>1,'satuan'=>'Instansi'],
        ['id'=>'118','uraian'=>'Updating direktori Lembaga Non-Profit yang Melayani Rumah Tangga (LNPRT)','kegiatan_id'=>'36','waktu_kegiatan'=>0.25,'satuan'=>'instansi'],
        ['id'=>'119','uraian'=>'pengawasan Updating direktori Lembaga Non-Profit yang Melayani Rumah Tangga (LNPRT)','kegiatan_id'=>'36','waktu_kegiatan'=>0.17,'satuan'=>'instansi'],
        ['id'=>'120','uraian'=>'Pencacahan Survei Khusus Konsumsi Rumah Tangga (SKKRT)','kegiatan_id'=>'36','waktu_kegiatan'=>1.5,'satuan'=>'Dokumen'],
        ['id'=>'121','uraian'=>'Pengawasan Pencacahan Survei Khusus Konsumsi Rumah Tangga (SKKRT)','kegiatan_id'=>'36','waktu_kegiatan'=>0.75,'satuan'=>'Dokumen'],
        ['id'=>'122','uraian'=>'Pencacahan Survei Khusus Lembaga Non-Profit yang Melayani Rumah Tangga Triwulanan (SKLNPRT)','kegiatan_id'=>'36','waktu_kegiatan'=>0.75,'satuan'=>'Dokumen'],
        ['id'=>'123','uraian'=>'Pengawasan Pencacahan Survei Khusus Lembaga Non-Profit yang Melayani Rumah Tangga Triwulanan (SKLNPRT)','kegiatan_id'=>'36','waktu_kegiatan'=>0.63,'satuan'=>'Dokumen'],
        ['id'=>'124','uraian'=>'Pencacahan Survei Khusus Lembaga Non-Profit yang Melayani Rumah Tangga Tahunan (SKLNP)','kegiatan_id'=>'37','waktu_kegiatan'=>0.67,'satuan'=>'Lembaga'],
        ['id'=>'125','uraian'=>'Pengawasan Pencacahan Survei Khusus Lembaga Non-Profit yang Melayani Rumah Tangga Tahunan (SKLNP)','kegiatan_id'=>'37','waktu_kegiatan'=>0.67,'satuan'=>'Lembaga'],
        ['id'=>'126','uraian'=>'Pencacahan Survei Khusus Tabungan & Investasi Rumah Tangga (SKTIR)','kegiatan_id'=>'37','waktu_kegiatan'=>1,'satuan'=>'ruta'],
        ['id'=>'127','uraian'=>'Pengawasan Pencacahan Survei Khusus Tabungan & Investasi Rumah Tangga (SKTIR)','kegiatan_id'=>'37','waktu_kegiatan'=>1,'satuan'=>'ruta'],
        ['id'=>'128','uraian'=>'Pencacahan Survei Khusus Perusahaan Swasta Non-Finansial (SKPS)','kegiatan_id'=>'38','waktu_kegiatan'=>0.83,'satuan'=>'Perusahaan'],
        ['id'=>'129','uraian'=>'Pengawasan Pencacahan Survei Khusus Perusahaan Swasta Non-Finansial (SKPS)','kegiatan_id'=>'38','waktu_kegiatan'=>0.83,'satuan'=>'Perusahaan'],
        ['id'=>'130','uraian'=>'Pencacahan Survei Khusus Studi Penyusunan Perubahan Inventori (SKSPPI)','kegiatan_id'=>'39','waktu_kegiatan'=>1.94,'satuan'=>'Perusahaan'],
        ['id'=>'131','uraian'=>'pengawasan Survei Khusus Studi Penyusunan Perubahan Inventori (SKSPPI)','kegiatan_id'=>'39','waktu_kegiatan'=>1.94,'satuan'=>'Perusahaan'],
        ['id'=>'132','uraian'=>'Pencacahan Survei Khusus Matriks Arus Komoditas (SMAK)','kegiatan_id'=>'40','waktu_kegiatan'=>1,'satuan'=>'responden'],
        ['id'=>'133','uraian'=>'Pengawasan Pencacahan Survei Khusus Matriks Arus Komoditas (SMAK)','kegiatan_id'=>'40','waktu_kegiatan'=>1,'satuan'=>'responden'],
        ['id'=>'134','uraian'=>'Pencacahan survei PMTB Kuesioner Dinas','kegiatan_id'=>'41','waktu_kegiatan'=>0.5,'satuan'=>'Instansi'],
        ['id'=>'135','uraian'=>'Pengawasan Pencacahan survei PMTB Kuesioner Dinas','kegiatan_id'=>'41','waktu_kegiatan'=>0.33,'satuan'=>'Instansi'],
        ['id'=>'136','uraian'=>'Pencacahan survei PMTB Kuesioner MIP-01','kegiatan_id'=>'41','waktu_kegiatan'=>0.78,'satuan'=>'Perusahaan'],
        ['id'=>'137','uraian'=>'Pengawasan Pencacahan survei PMTB Kuesioner MIP-01','kegiatan_id'=>'41','waktu_kegiatan'=>0.78,'satuan'=>'Perusahaan'],
        ['id'=>'138','uraian'=>'Pencacahan survei PMTB Kuesioner MIP-02','kegiatan_id'=>'41','waktu_kegiatan'=>0.83,'satuan'=>'Perusahaan'],
        ['id'=>'139','uraian'=>'Pengawasan Pencacahan survei PMTB Kuesioner MIP-02','kegiatan_id'=>'41','waktu_kegiatan'=>0.83,'satuan'=>'Perusahaan'],
        ['id'=>'140','uraian'=>'Pencacahan survei PMTB Kuesioner LNPRT','kegiatan_id'=>'41','waktu_kegiatan'=>1.19,'satuan'=>'Lembaga'],
        ['id'=>'141','uraian'=>'Pengawasan Pencacahan survei PMTB Kuesioner LNPRT','kegiatan_id'=>'41','waktu_kegiatan'=>0.67,'satuan'=>'Lembaga'],
        ['id'=>'142','uraian'=>'Pencacahan survei PMTB Kuesioner MIRT','kegiatan_id'=>'41','waktu_kegiatan'=>0.81,'satuan'=>'ruta'],
        ['id'=>'143','uraian'=>'Pengawasan Pencacahan survei PMTB Kuesioner MIRT','kegiatan_id'=>'41','waktu_kegiatan'=>0.75,'satuan'=>'ruta'],
        ['id'=>'144','uraian'=>'Pencacahan survei PMTB Kuesioner Desa','kegiatan_id'=>'41','waktu_kegiatan'=>0.89,'satuan'=>'Desa/Kel'],
        ['id'=>'145','uraian'=>'Pengawasan Pencacahan survei PMTB Desa','kegiatan_id'=>'41','waktu_kegiatan'=>0.5,'satuan'=>'Desa/Kel']
      ];

      foreach ($data as $dt)
      {
        (new \App\KegiatanUraian())->create($dt);
      }
    }
}
