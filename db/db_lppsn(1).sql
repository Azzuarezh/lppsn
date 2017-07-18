-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jul 2017 pada 14.34
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lppsn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE IF NOT EXISTS `tb_jurusan` (
  `kode_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`kode_jurusan`, `nama_jurusan`, `keterangan`) VALUES
(1, 'STMIK Triguna Utama', 'Kurikulum Program Studi Teknik Informatika Kurikulum disusun dengan mengakomodasi kebutuhan dunia usaha dan dunia industry. Kurikulum didistribusikan kedalam delapan semester. Pada semester kedelapan diberikan Penulisan Skripsi/Tugas Akhir. Adapun distribusi kurikulum program studi Teknik Informatika Jenjang Strata Satu (S1) LPPSN dapat dilihat sebagai berikut '),
(2, 'STIE ISM', 'Kurikulum Program Studi Manajemen Bisnis\r\nKurikulum disusun dengan mengakomodasi kebutuhan dunia usaha dan dunia industry. Kurikulum didistribusikan kedalam 8 (delapan) semester. Pada semester ke-8 (kedelapan) diberikan penulisan Skripsi atau Tugas Akhir. Adapun distribusi kurikulum program studi Manajemen Bisnis Jenjang Stratra 1 (S1) LPPSN dapat dilihat sebagai berikut :');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matkul`
--

CREATE TABLE IF NOT EXISTS `tb_matkul` (
  `kode_matkul` varchar(10) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `kode_jurusan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_matkul`
--

INSERT INTO `tb_matkul` (`kode_matkul`, `nama_matkul`, `sks`, `semester`, `kode_jurusan`) VALUES
('AP101', 'Algoritma dan Pemograman', 4, 1, 1),
('IT101', 'Paket Program Niaga', 4, 1, 1),
('AP321', 'Pemograman Berorientasi Objek', 4, 2, 1),
('AP102', 'Metode Perancangan Program', 4, 2, 1),
('KK13225', 'Pengantar Ekonomi Mikro', 3, 1, 2),
('KK13204', 'Pengantar Akuntansi I', 3, 1, 2),
('KK13224', 'Pengantar Ekonomi Makro', 3, 2, 2),
('KK23205', 'Pengantar Akuntansi II', 3, 2, 2),
('IT211', 'Pengantar Teknologi Informasi', 2, 1, 1),
('MP101', 'Manajemen Umum', 2, 1, 1),
('SC201', 'Kalkulus I', 2, 1, 1),
('SC301', 'Statistik I (Dasar)', 2, 1, 1),
('SC101', 'Matriks & Tranformasi Linier', 2, 1, 1),
('DU101', 'Bahasa Inggris', 2, 1, 1),
('IT401', 'Sistem Operasi', 2, 2, 1),
('IS208', 'Pengantar Pengolahan Citra', 2, 2, 1),
('SC202', 'Kalkulus II', 2, 2, 1),
('SC302', 'Statistik II (Probabilitas)', 2, 2, 1),
('IS201', 'Struktur Data', 2, 2, 1),
('DU401', 'Agama', 2, 2, 1),
('IS202', 'Sistem & Perancangan Basis Data', 4, 3, 1),
('IS203', 'Pengolahan Citra Digital', 4, 3, 1),
('IS102', 'Sistem Informasi Manajemen', 2, 3, 1),
('IT221', 'Sistem Digital', 2, 3, 1),
('AP111', 'Konsep Bahasa Pemograman', 2, 3, 1),
('AP312', 'Teori Bahasa & Automata', 2, 3, 1),
('IT215', 'Interaksi Manusia & Komputer', 2, 3, 1),
('DU201', 'Pancasila', 2, 3, 1),
('AP322', 'Pemograman Visual I', 4, 4, 1),
('IS327', 'Perancangan Web', 4, 4, 1),
('IS311', 'Analisis Sistem Informasi', 2, 4, 1),
('IT212', 'Organisasi & Arsitektur Komputer', 4, 4, 1),
('IT219', 'Komunikasi Data', 2, 4, 1),
('SC102', 'Matematika Diskrit', 2, 4, 1),
('DU301', 'Kewarganegaraan', 2, 4, 1),
('AP328', 'Pemograman Visual II', 4, 5, 1),
('AP324', 'Pemograman Web', 4, 5, 1),
('IS321', 'Perancangan Sistem Informasi', 2, 5, 1),
('IT213', 'Keamanan Komputer', 2, 5, 1),
('IT501', 'Artificial Intellegent', 2, 5, 1),
('IS501', 'Rekayasa Perangkat Lunak', 4, 5, 1),
('SC401', 'Metode Numerik', 2, 5, 1),
('AP329', 'Pemograman Visual III', 4, 6, 1),
('IS602', 'E-Commerce', 4, 6, 1),
('MP105', 'Manajemen Proyek', 4, 6, 1),
('MP402', 'Metode Penelitian', 4, 6, 1),
('MP202', 'Kewirausahaan', 2, 6, 1),
('IS204', 'Pengolahan Data Terdistribusi', 2, 6, 1),
('AP201', 'Grafik Komputer', 2, 6, 1),
('IT301', 'Jaringan Komputer', 4, 7, 1),
('IT220', 'Teknologi Wireless', 4, 7, 1),
('IS205', 'Sistem Berkas', 2, 7, 1),
('IS605', 'Sosiologi Komunikasi', 2, 7, 1),
('MP201', 'Etika Profesi/Bisnis', 2, 7, 1),
('IT601', 'Kapita Selekta', 2, 7, 1),
('MP501', 'Hukum dan Perikatan', 2, 7, 1),
('MP300', 'Kerja Praktek', 2, 7, 1),
('IS606', 'Customer Relationship Management', 2, 8, 1),
('IS601', 'Knowledge Management', 2, 8, 1),
('MP301', 'Skripsi', 6, 8, 1),
('KK12223', 'Pengantar Bisnis', 3, 1, 2),
('KK13221', 'Matematika Ekonomi', 3, 1, 2),
('KK13226', 'Pengantar Manajemen', 3, 1, 2),
('KK33227', 'Statistik I (Deskriptif)', 3, 1, 2),
('KK22209', 'Bahasa Inggris', 2, 1, 2),
('KK62208', 'Bahasa Indonesia Unuk Penelitian II', 2, 2, 2),
('BB33549', 'Manajemen Humas', 3, 2, 2),
('KK22212', 'Sosiologi Komunikasi', 2, 2, 2),
('KK43228', 'Statistik II (Probabilitas)', 3, 2, 2),
('PK12102', 'Agama', 2, 2, 2),
('PB53415', 'Manajemen Keuangan I', 3, 3, 2),
('BB73548 	', 'Perekonomian Indonesia', 3, 3, 2),
('KB43331', 'Aplikasi Komputer', 3, 3, 2),
('KK33207', 'Akuntansi Manajemen', 3, 3, 2),
('PB43442', 'Manajemen SDM', 3, 3, 2),
('KB33339', 'Sis. Info Manajemen', 3, 3, 2),
('PK12101', 'PPKN', 2, 3, 2),
('KB63335', 'Manajemen Keuanngan II', 3, 4, 2),
('PB63416', 'Manajemen Produksi', 3, 4, 2),
('KK23229', 'Teori Ekonomi Makro', 3, 4, 2),
('KK33218', 'Manajemen Resiko', 3, 4, 2),
('KB23333', 'Ekonomi Manajerial', 3, 4, 2),
('BB42552', 'Man. Koperasi dan UKM', 2, 4, 2),
('KB43332', 'Lab. Statistik ', 2, 4, 2),
('KK23230', 'Teori Ekonomi Mikro', 3, 5, 2),
('PB43417', 'Manajemen Pemasaran', 3, 5, 2),
('KK33214', 'Lembaga Perbankan Syariah', 2, 5, 2),
('KB33332', 'Bank & Lembaga Keuangan Lainnya', 3, 5, 2),
('KK53337', 'Pengantar Perusahaan', 3, 5, 2),
('KK62222', 'Manajemen Perubahan', 3, 5, 2),
('KB53338', 'Perilaku Organisasi', 3, 5, 2),
('KB53336', 'Metodologi Penelitian', 3, 6, 2),
('PB63419', 'Manajemen Strategic', 3, 6, 2),
('PB73446', 'Teori Protfolio & Analisa Investasi', 3, 6, 2),
('KB63334', 'Evaluasi Kinerja', 3, 6, 2),
('BB73547', 'Ekonomi Internasional', 3, 6, 2),
('KK22213 	', 'Kewirausahaan', 3, 6, 2),
('PB63420', 'Manajemen Proyek', 3, 6, 2),
('KP73778', 'Seminar Manajemen Bisnis', 3, 7, 2),
('BB73553', 'Komunikasi Pemasaran', 3, 7, 2),
('BB73554 	', 'Perilaku Konsumen', 3, 7, 2),
('PB53444', 'Pemasaran Retail', 3, 7, 2),
('PB63441', 'Pengantar Komunikasi Bisnis & Etika', 2, 7, 2),
('KK42207', 'Aspek Hukum Dalam Bisnis', 2, 7, 2),
('BB73556', 'KKN/Kerja Praktek', 4, 7, 2),
('BB82101', 'Manajemen Hubungan Pelanggan ', 2, 8, 2),
('BB82102', 'Manajemen Pengetahuan', 2, 8, 2),
('TA86100', 'Skripsi', 6, 8, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`kode_matkul`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
