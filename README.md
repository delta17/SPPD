# Deskripsi SPPD
- SPPD merupakan Proyek Perubahan (Proper) Diklat Pim IV Kasubag TU BPS Kab. Seruyan Tahun 2019
- Aplikasi ini bertujuan untuk membuat Form JLN, Surat Tugas, Surat Perjalanan Dinas, serta membuat laporan perjalanan dinas
- Selain itu, KPA dapat menentukan dinas yang sesuai kepada pegawai berdasarkan pertimbangan waktu tembuh dan waktu kegiatan yang dimunculkan oleh aplikasi
- Aplikasi ini dibangun menggunakan framework PHP Laravel 5.4, framework CSS Bootstrap, serta database PgAdmin III
- Laravel telah diupdate ke larevel 5.5; php yang digunakan php versi 7
- Daftar yang belum dikerjakan:
1. menambahkan perhitungan waktu_standar_dinas pada JLNController
2. menambahkan kolom tujuan_dlm, tujuan_luar, tujuan_perusahaan pada tabel user_jln dg default null (fix)
3. menampilkan data tujuan ke form-jln-saya dan approval-form-jln
4. membuat fungsi print surtug personal/spd dari halaman agenda
5. membuat fungsi print Form JLN dari halaman form-jln-saya
6. menampilkan daftar spd/surtug personal pada halaman arsip-saya
7. membuat fungsi buat-laporan+upload foto dari halaman arsip-saya
8. menampilkan daftar pegawai SPD/surtug personal di dashboard
9. membuat fungsi tambah peserta berangkat pada halaman buat-form-jln 