-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 02:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-08-05-183509', 'App\\Database\\Migrations\\CreateTblAdmin', 'default', 'App', 1692722762, 1),
(2, '2023-08-05-183703', 'App\\Database\\Migrations\\CreateTblResetPassword', 'default', 'App', 1692722762, 1),
(3, '2023-08-07-190626', 'App\\Database\\Migrations\\CreateTblKategori', 'default', 'App', 1692722762, 1),
(4, '2023-08-07-204250', 'App\\Database\\Migrations\\CreateTblSekolah', 'default', 'App', 1692722762, 1),
(5, '2023-08-22-145515', 'App\\Database\\Migrations\\CreateTblKecamatan', 'default', 'App', 1692722762, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(5) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'Dewa', 'dewahanggara10@gmail.com', '$2y$10$7pmkRbjjiSWfQcho0.344e2zsDKE04rbw6JR67COUq2ymiMmD2tjm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `jenis_sekolah` varchar(20) NOT NULL,
  `tingkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `jenis_sekolah`, `tingkatan`) VALUES
(3, 'SMK', 'Negeri'),
(5, 'SMA', 'Negeri'),
(6, 'SMK', 'Swasta'),
(7, 'SMA', 'Swasta'),
(8, 'SMP', 'Negeri'),
(9, 'SMP', 'Swasta'),
(10, 'MTS', 'Negeri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id_kecamatan` int(11) UNSIGNED NOT NULL,
  `kode_kecamatan` varchar(20) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id_kecamatan`, `kode_kecamatan`, `nama_kecamatan`) VALUES
(4, 'K01', 'Kadugede'),
(5, 'K02', 'Kuningan'),
(6, 'K02', 'Mandirancan'),
(8, 'K01', 'Ciniru'),
(9, 'K01', 'Subang'),
(10, 'K01', 'Ciwaru'),
(11, 'K01', 'Cibingbin'),
(12, 'K01', 'Luragung'),
(13, 'K01', 'Lebakwangi'),
(14, 'K02', 'Ciawigebang'),
(15, 'K02', 'Cidahu'),
(16, 'K02', 'Jalaksana'),
(17, 'K02', 'Cilimus'),
(18, 'K02', 'Salajambe'),
(19, 'K03', 'Darma'),
(20, 'K03', 'Cigugur'),
(21, 'K03', 'Pasawahan'),
(22, 'K03', 'Nusaherang'),
(23, 'K03', 'Cipicung'),
(24, 'K03', 'Pancalang'),
(26, 'K03', 'Japara'),
(27, 'K03', 'Cimahi'),
(28, 'K04', 'Cilebak'),
(29, 'K04', 'Cigandamekar'),
(30, 'K04', 'Maleber'),
(31, 'K02', 'Kramatmulya'),
(32, 'K04', 'Sindangagung'),
(33, 'K01', 'Garawangi'),
(34, 'K04', 'Karangkancana'),
(35, 'K04', 'Kalimanggis'),
(36, 'K04', 'Hantara'),
(37, 'K04', 'Cibeureum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id_reset_pass` int(11) UNSIGNED NOT NULL,
  `id_admin` int(11) UNSIGNED NOT NULL,
  `token` varchar(100) NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) UNSIGNED NOT NULL,
  `id_kategori` int(11) UNSIGNED NOT NULL,
  `id_kecamatan` int(11) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `website` varchar(150) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `akreditas` varchar(20) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_sekolah`, `id_kategori`, `id_kecamatan`, `nama_sekolah`, `deskripsi`, `gambar`, `website`, `alamat`, `akreditas`, `latitude`, `longitude`) VALUES
(3, 5, 21, 'SMAN 1 Pasawahan', 'SMA Negeri 1 Pasawahan merupakan salah satu Sekolah Menengah Atas yang ada di Kabupaten Kuningan Provinsi Jawa Barat, Indonesia. Dengan Kurikulum pembelajaran menggunakan kurikulum 2013. Sama dengan SMA pada umumnya di Indonesia masa pendidikan sekolah di sekolah ini ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII.', '1692771424_a740930abde32523e076.jpg', 'https://dapo.kemdikbud.go.id/sekolah/F5218CED4A260F1F2C71', '5CRM+5P5, Jl. Cirea-Pasawahan, Singkup, Kec. Pasawahan, Kabupaten Kuningan, Jawa Barat 45559', 'A', '-6.8096011', '108.4317807'),
(4, 5, 17, 'SMAN 1 Cilimus', 'SMA Negeri 1 Cilimus merupakan salah satu Sekolah Menengah Atas yang ada di Kabupaten Kuningan Provinsi Jawa Barat, Indonesia. Sama dengan SMA pada umumnya di Indonesia masa pendidikan sekolah di sekolah ini ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII. Kurikulum pembelajaran yang digunakan adalah kurikulum 2013', '1692771670_bc6282f3dcb733085e18.jpg', 'http://www.smancilimus.sch.id/', 'Cilimus, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556', 'A', '-6.8750819', '108.4957526'),
(5, 3, 24, 'SMKN 6 Kuningan', 'SMK Negeri 6 Kuningan merupakan sekolah menengah kejuruan Teknik, Bisnis dan Pariwisata yang berada di wilayah Utara Kuningan, Jawa Barat. Pada segi kualitas output SMK Negeri 6 Kuningan telah meraih prestasi membanggakan di berbagai bidang akademik dan non akademik, baik di tingkat kabupaten maupun provinsi, seperti : Lomba Kompetensi Siswa, Pencak Silat dan Bahasa Inggris. Prestasi yang di raih tersebut sejalan dengan banyaknya alumni dari sekolah ini yang di terima bekerja di dunia usaha dan industri serta melanjutkan pendidikan di beberapa perguruan tinggi ternama.', '1693007718_92427588e5671dcf795b.jpg', 'https://dapo.kemdikbud.go.id/sekolah/09F652B0235E282AE0E2', '5GV2+G4M, Jalan Raya, Sindangkempeng, Kec. Pancalang, Kabupaten Kuningan, Jawa Barat 45557', 'A', '-6.8061558', '108.497708'),
(6, 3, 17, 'SMKN 1 Cilimus', 'SMK NEGERI 1 CILIMUS merupakan sekolah pusat keunggulan di bidang Bisnis Manajemen dan Pariwisata yang terletak di Kecamatan Cilimus Kabupaten Kuningan, memiliki 5 program keahlian, yaitu Pemasaran, Manajemen Perkantoran dan Layanan Bisnis, Perhotelan, Kuliner dan Usaha Layanan Pariwisata. SMK NEGERI 1 CILIMUS terakreditasi A (unggul)', '1692772671_01d0bcf68a4f13427d31.jpg', 'https://smkn1cilimus.sch.id/', '4GQ4+63C, Caracas, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556', 'A', '-6.861941', '108.5025718'),
(7, 3, 20, 'SMKN 1 Kuningan', 'SMK NEGERI 1 KUNINGAN adalah salah satu satuan pendidikan dengan jenjang SMK di Cigugur, Kec. Cigugur, Kab. Kuningan, Jawa Barat. Dalam menjalankan kegiatannya, SMK NEGERI 1 KUNINGAN berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.', '1692773034_149ed982e652206159c0.jpg', 'http://www.smkn1-kng.sch.id/', 'Jl. Sukamulya No.1, Cigugur, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45552', 'A', '-6.9777495', '108.3822585'),
(8, 3, 20, 'SMKN 2 Kuningan', 'Seiring dengan perkembangan pendidikan, khususnya dalam bidang manajemen sejak tanggal 26 Desember 2012 SMK Negeri 2 Kuningan sudah menerapkan SIStem Manjemen Mutu ISO 9001:2008 dan memperoleh sertifikat dari PT TUV Rheiland Indonesia dengan No. Register Sertifikat 82410012098.', '1692773228_43e8291e0994a45c13c3.jpg', 'http://smkn2-kng.sch.id/', 'Jl. Cigugur Sukamulya No.77, Sukamulya, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45552', 'A', '-6.980009', '108.4586885'),
(9, 3, 26, 'SMKN 1 Japara', 'SMK Negeri 1 Japara merupakan sekolah menengah kejuruan negeri yang berada di Kabupaten Kuningan, Jawa Barat, Indonesia. Berlokasi di Jalan Raya Puskesmas Kecamatan Japara, Kabupaten Kuningan. SMK Negeri 1 Japara adalah SMK kelompok Teknik Rekayasa, Teknik Informasi dan Bisnis Manajemen. Masa pendidikan di SMK Negeri 1 Japara ditempuh dalam waktu tiga tahun pelajaran, mulai dari kelas X hingga kelas XII, Kecuali Kompetensi Keahlian TOI.', '1692773380_2a8b06ec38e86b9789c3.jpg', 'http://smkn1japara-kng.sch.id/', '4G3C+649, Jl. Raya Puskesmas, Japara, Kec. Japara, Kabupaten Kuningan, Jawa Barat 45555', 'A', '-6.8969549', '108.5177943'),
(10, 3, 15, 'SMKN 4 Kuningan', 'SMK Negeri 4 Kuningan Merupakan Salah Satu Sekolah Menengah Kejuruan (SMK) di Kuningan, Jawa Barat yang berlokasi di Jln. Cikeusik No. 73, Desa Cikeusik, Kecamatan Cidahu, Kabupaten Kuningan, Jawa Barat. Berdiri sejak 02 September 2004, siap mencetak generasi muda yang siap pakai di dunia usaha atau dunia industri.', '1692773846_7a2fe94d6a9064a84d5c.jpg', 'https://www.smkn4kuningan.sch.id/', 'Jl. Puter Sari Cikeusik No.73, Cikeusik, Kec. Cidahu, Kabupaten Kuningan, Jawa Barat 45595', 'A', '-6.9564761', '108.6833032'),
(11, 3, 20, 'SMKN 3 Kuningan', 'Didirikan  pada tanggal 20 November 1984, Dirancang untuk menghasilkan lulusan/ tamatan yang memiliki pemahaman dan keahlian/ keterampilan serta memiliki wawasan kewirausahaan di bidang teknologi dan industri untuk mengisi kebutuhan  pasar tenaga kerja.\r\nMengingat besarnya kebutuhan tenaga kerja di dunia  industri, SMK Negeri 3 Kuningan telah mendapatkan kepercayaan dan diakui keberadaannya sebagai institusi yang mampu menghasilkan tenaga kerja terampil dan handal di berbagai perusahaan/ industri.', '1692773982_a0e72f5504933e883102.jpg', 'http://www.smkn3-kuningan.sch.id/', 'Jl. Raya Cirendang, Cirendang, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45518', 'A', '-6.9520381', '108.4680233'),
(13, 5, 12, 'SMAN 1 Luragung', 'SMA Negeri 1 Luragung mempunyai peranan yang cukup penting baik di lingkungan kecamatan Luragung pada Khususnya dan Kabupaten Kuningan pada umumnya.\r\nBanyak pretasi yang sudah di capai oleh SMA Negeri 1 Luragung baik di bidang akademik maupun non akademik', '1692774417_43f6db5a183dcee4d99c.jpg', 'https://sman1luragung.sekolahkita.net/', 'XJPC+377, JL. Luragung, 45581, Cirahayu, Kuningan, Kabupaten Kuningan, Jawa Barat 45581', 'A', '-7.0142466', '108.6179757'),
(14, 5, 5, 'SMAN 3 Kuningan', 'Sekolah Menengah Atas (SMA) Negeri 3 Kuningan  merupakan salah satu lembaga Pendidikan  Menengah Atas di Kabupaten Kuningan, yang lokasinya terletak di Jalan Siliwangi  Nomor 13 Kuningan Jawa Barat, tepat di depan Kantor Bupati Kuningan. SMA Negeri 3 Kuningan merupakan sekolah alih fungsi dari Sekolah Pendidikan Guru (SPG) Negeri Kuningan. Sampai saat ini SMA Negeri 3 Kuningan  baru berusia kurang lebih 20  tahun.', '1692774651_ae7a66c078759c019e6c.jpg', 'http://www.sman3kuningan.sch.id/', '2FFM+6HX, Jl. Siliwangi No.13, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511', 'A', '-6.9767261', '108.4843344'),
(15, 5, 6, 'SMAN 1 Mandirancan', 'SMA Negeri 1 Mandirancan merupakan salah satu Sekolah Menengah Atas yang ada di Kabupaten Kuningan Provinsi Jawa Barat, Indonesia. Sama dengan SMA pada umumnya di Indonesia masa pendidikan sekolah di sekolah ini ditempuh dalam waktu tiga tahun pelajaran, mulai dari Kelas X sampai Kelas XII. Sekolah ini menggunakan kurikulum pembelajaran 2013.', '1692775044_b76ff01412bf2c855227.jpg', 'https://dapo.kemdikbud.go.id/sekolah/568466315F39771F8506', 'Jl. Siliwangi No.I A, Mandirancan, Kuningan, Kabupaten Kuningan, Jawa Barat 45558', 'A', '-6.8161797', '108.4707952'),
(16, 5, 14, 'SMAN 1 Ciawigebang', 'SMA Negeri 1 Ciawigebang adalah sebuah sekolah SMA negeri yang beralamat di Jl. Siliwangi No. 106, Kab. Kuningan.\r\nSMA negeri ini didirikan pertama kali pada tahun 1980. Saat ini SMA Negeri 1 Ciawigebang menggunakan kurikulum SMA 2013 MIPA. SMA Negeri 1 Ciawigebang memiliki kepala sekolah dengan nama Ii Wasita dan operator sekolah Ginanjar Prayudi.', '1693009180_c32ac31cbc6a1f591231.jpg', 'http://www.sman1ciawigebang.sch.id/', '2HGQ+CHQ, Jl. Raya Siliwangi No.106, Ciawigebang, Kec. Ciawigebang, Kabupaten Kuningan, Jawa Barat 45591', 'A', '-6.974448', '108.586365'),
(17, 7, 14, 'SMA ISLAM TERPADU AN-NUR DUKUHDALEM', 'SMA ISLAM TERPADU AN-NUR DUKUHDALEM adalah salah satu satuan pendidikan dengan jenjang SMA di Dukuhdalem, Kec. Ciawigebang, Kab. Kuningan, Jawa Barat.', '1693009458_2d5679d96a7475a21f29.jpg', 'https://dapo.kemdikbud.go.id/sekolah/51DC4D4B952F99DA5823', 'Jl.Balai, Dukuhdalem, Kec. Ciawigebang, Kabupaten Kuningan, Jawa Barat 45591', 'C', '-6.9686377', '108.5602363'),
(18, 7, 14, 'SMA IT MANBA`UL HUDA', 'test', '1693009647_169330252ee31e05ac5e.jpg', 'https://dapo.kemdikbud.go.id/sekolah/7A633B79816B9A6D5BF4', '2H9C+JG8, Sidaraja, Kec. Ciawigebang, Kabupaten Kuningan, Jawa Barat', 'B', '-6.9809588', '108.568755'),
(19, 3, 14, 'SMKN 5 Kuningan', 'SMK Negeri 5 Kuningan terletak di Jalan Raya Kecamatan Ciawigebang Kab. Kuningan, Letak kampus yang sangat strategis dan jauh dari kebisingan dengan luas area 7,5 hektar.Ruang Teori dan Praktek Ruang teori menggunakan ruang kelas milik sendiri sebanyak 29 ruangan teori, laboratorium 4 ruang, 1 ruang perpustakaan, 1 ruang praktek otomotif, Aula, Ruang Kantor dan Ruang guru', '1693009913_8f6b5cf24026834202f8.jpg', 'https://smkn5kuningan.sch.id/', '2HPF+8WR, Ciawilor, Kec. Ciawigebang, Kabupaten Kuningan, Jawa Barat 45591', 'A', '-6.9641261', '108.5721807'),
(20, 6, 14, 'SMK AL-IHYA CIAWIGEBANG', 'test', '1693010207_7ca2b412b26d6714d235.jpg', 'https://dapo.kemdikbud.go.id/sekolah/E303E8F0444E1074D282', 'JL. RAYA CIHAUR NO. 08 RT.01 RW.02', 'C', '-6.9752622', '108.5890427'),
(21, 6, 14, 'SMK MODEL PATRIOT IV CIAWIGEBANG', 'Visi Sekolah\r\n\r\n“TERWUJUDNYA GENERASI YANG TERPUJI DALAM BUDIPEKRTI DAN TERUJI DALAM KOMPETENSI PADA TAHUN 2023”\r\n\r\nMisi Sekolah yang berbunyi : \r\n\r\nMenyelenggarakan program pendidikan yang dilandasi iman dan takwa (Imtaq)\r\nMenciptakan lingkungan dan budaya belajar D’SMART (Disiplin, Santun, Mandiri, Antusias, Religius, Terampil)\r\nMenciptakan iklim belajar yang kondusif, kreatif – inovatif dan kompetitif berbasis ilmu pengetahuan dan teknologi.vc\r\nMemberikan pelayanan pendidikan dan pelatihan keterampilan bagi peserta didik dengan berorientasi kepada kebutuhan dunia kerja.\r\nMenjalin kerjasama yang harmonis antar warga sekolah dan lembaga lain yang terkait.', '1693010648_af09e553f69e4048d369.jpg', 'http://www.smkpatriot-kng.sch.id/', 'Sidaraja, Kec. Ciawigebang, Kabupaten Kuningan, Jawa Barat 45591', 'A', '-6.9802543', '108.5683304'),
(22, 6, 14, 'SMK PGRI CIAWIGEBANG', 'SMK PGRI Ciawigebang semakin berkembang dan hingga sekarang sudah memiliki ijin untuk membuka 6 program keahlian, yaitu Teknik Otomotif Kendaraan Ringan, Teknik Otomotif Sepeda Motor, Teknik Komputer dan Informatika (MULTIMEDIA), Pemasaran, Tata Busana, dan Teknik Produksi Penyiaran Radio dan Pertelevisian (Broadcasting).\r\nadapun jenjang Akreditasi kelembagaan, SMK PGRI Ciawigebang mendapatkan peringkat A (Amat Baik) sesuai dengan keputusan Badan Akreditasi Sekolah Swasta Propinsi Jawa Barat tanggal 22 November 2007 No. 02.00/90/BAP - SM/XI/2007.', '1693010790_ae7c510e20116bd288b1.jpg', 'http://smkspgriciawigebang.sch.id/kontak/', 'Jl. Susukan - Ciawigebang, RT.01/RW.01, Ciputat, Kec. Ciawigebang, Kabupaten Kuningan, Jawa Barat 45591', 'A', '-6.9717954', '108.5738713'),
(23, 6, 14, 'SMK TAUFIQ MUBAROK', 'SMK Taufiq Mubarok menjadi satu satunya sekolah Penerbangan di Kabupaten Kuningan Jawa Barat yang fokus kepada pendidikan berkarakter disiplin, professional dan religius sesuai dengan tuntutan Dunia Usaha dan Dunia Industri penerbangan di Indonesia.', '1693010921_9023278196de757386b5.jpg', 'http://www.smkpenerbangantaufiqmubarok.sch.id/', 'Kapandayan, Kec. Ciawigebang, Kabupaten Kuningan, Jawa Barat 45591', 'A', '-6.9756279', '108.5732487'),
(25, 5, 11, 'SMA NEGERI 1 CIBINGBIN', 'SMA Negeri 1 Cibingbin merupakan salah satu lembaga pendidikan negeri,\r\ndengan jenjang pendidikan menengah atas yang beralamat di Jln.Raya Sukamaju No.34A\r\nKecamatan Cibingbin Kabupaten Kuningan Jawa Barat. Sebagai sekolah negeri satusatunya yang terdapat di Kecamatan Cibingbin, SMA Negeri 1 Cibingbin diharuskan\r\nmengikuti perkembangan jaman dengan menyiapkan lingkungan sekolah yang mampu\r\nmemanfaatkan teknologi informasi, agar tetap mampu bersaing dengan sekolah negeri\r\nyang ada di kota Kuningan Jawa Barat. Salah satunya adalah dengan mengembangkan\r\nsistem informasi akademiknya, karena dengan sistem informasi akademik yang baik maka\r\nproses pengolahan data dan pelayanan terhadap siswa juga.', '1693011536_4649d08dca73472df479.jpg', 'https://dapo.kemdikbud.go.id/sekolah/368308B7B40E79BEE98B', 'Sukamaju, Cibingbin, Kabupaten Kuningan, Jawa Barat 45587', 'A', '-7.0555971', '108.7474679'),
(26, 6, 11, 'SMK CIBENING', 'SMK Cibening Kecamatan Cibingbin Kabupaten Kuningan merupakan sekolah dibawah Yayasan Umar Syahir Cibingbin yang didirikan untuk memenuhi kebutuhan masyrakat Kecamatan Cibingbin, Kecamatan Cibeureum Kabupaten Brebes dalam upaya peningkatan kualitas Pendidikan dibidang Teknologi Informasi dan Komunikasi juga bidang lainnya. Keberadaan SMK sangat dibutuhkan karena belum ada diwilayah tersebut diatas, sehingga pada tahun 2016 SMK Cibening berdiri dan mulai menerima siswa baru. Pada tahun pelajaran 2019 / 2020 SMK Cibening kembali membuka penerimaan peserta didik baru.', '1693011692_219b59166e74118e7488.jpg', 'https://www.smkcibening.sch.id/', 'WQR8+49R, Cibingbin, Kabupaten Kuningan, Jawa Barat 45587', 'B', '-7.059632', '108.7633086'),
(27, 5, 15, 'SMAN 1 Cidahu', 'test', '1693011942_979e1d51eefb1a64897c.jpg', 'https://dapo.kemdikbud.go.id/sekolah/2D7E41231FB5C3F46F40', '2J9W+R3H, Jl. Kertawinangun No.09, Cidahu, Kec. Cidahu, Kabupaten Kuningan, Jawa Barat 45595', 'A', '-6.9808295', '108.6431731'),
(28, 7, 29, 'SMA AINURRAFIQ', 'test', '1693012276_571514dbda7de6a7eb89.jpg', 'https://dapo.kemdikbud.go.id/sekolah/792C3C4944CA255644B9', 'Jl. Cigintung No.92, Panawuan, Kec. Cigandamekar, Kabupaten Kuningan, Jawa Barat 45556', 'A', '-6.8806941', '108.4933553'),
(29, 7, 29, 'SMA PUI CIWEDUS TIMBANG', 'test', '1693012372_8cfdf255a8ce1f91b2d0.jpg', 'https://dapo.kemdikbud.go.id/sekolah/16D86E081C18098AEA4F', 'Timbang, Kec. Cigandamekar, Kabupaten Kuningan, Jawa Barat 45556', 'A', '-6.8786416', '108.4970264'),
(30, 5, 20, 'SMA NEGERI 1 CIGUGUR', 'SMA NEGERI 1 CIGUGUR\r\nMenegakkan disiplin warga sekolah dan memberikan keteladanan, penyediaaan sarana dan prasarana yang memadai, menciptakan lingkungan sekolah sebagai masyarakat belajar, masyarakat berbudaya dan berkepribadian', '1693012644_73c41384b2a758ac90b6.jpg', 'https://dapo.kemdikbud.go.id/sekolah/A5D67B63B39184AEAD8F', 'Jl. Sukamulya No.12, Sukamulya, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45552', 'A', '-6.9837894', '108.4601123'),
(31, 7, 20, 'SMA BINAUL UMMAH', 'ummah islam bercita-cita pada masa mendatang untuk melayani dan memimpin bangsa ini, namun sejauh mana kita telah mempersiapkan perangkat birokrasi dan aparatur pendukungnya? Agar pelayanan dan kepemimpinan itu optimal dirasakan oleh seluruh masyarakat Indonesia.\r\nUntuk lebih melengkapi persiapan cita-cita di atas, maka didirikanlah Pondok Pesantren Binaul Ummah Kuningan di atas tanah wakaf dan hibah keluarga alm. Bapak Sajim, dan berbasis Dakwah dan Tarbiyah untuk menyiapkan para calon Teknokrat dan Birokrat yang Islami di masa mendatang.', '1693012828_ec2b50ce48c922041136.jpg', 'http://binaulummah-kng.ponpes.id/', 'Jl. Raya Cisantana, Cipari, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45552', 'A', '-6.9637635', '108.4648335'),
(32, 6, 20, 'SMK KARYA NASIONAL KUNINGAN', 'SMK Karnas Kuningan merupakan sekolah yang berkomitment membekali siswa-siswinya dalam ilmu-ilmu sesuai dengan program studi, serta kemampuan dibidang teknologi, informasi, bahasa inggris, entrepreneur dan kepribadian yang unggul, serta terus berinovasi untuk menghasilkan lulusan yang memiliki kualifikasi tinggi dengan masa tunggu pendek yaitu segera memperoleh pekerjaan yang berkualitas ataupun berwiraswasta setelah lulus nanti.', '1693205413_c5e1e7341ddb130e1219.jpg', 'http://smkkarnas.sch.id/', '2FW9+4Q8, Jl. Cirendang - Cigugur, Cirendang, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45518', 'A', '-6.9547087', '108.4668709'),
(33, 6, 20, 'SMK MUHAMMADIYAH 2 KUNINGAN', 'Mewujudkan peserta didik yang Bertaqwa, Berakhlaqul Karimah, Berkarakter, Berprestasi dan Berjiwa Enterpreuner', '1693207672_22d8fdb5231905393def.jpg', 'https://dapo.kemdikbud.go.id/sekolah/0CDBBF88C4F1136138B6', 'JL. RAYA CIGUGUR NO. 28', 'A', '-6.9758685', '108.4660644'),
(34, 6, 20, 'SMK PLUS PERTIWI SUKAMULYA', 'SMK PLUS PERTIWI SUKAMULYA Tidak Perlu Diragukan Lagi Kualitas Dan Komitmennya Terhadap Mutu Lulusan. Berdiri Sejak Tahun 2008 Dibawah Naungan Yayasan Pendidikan Elis Mulyati ( YPEM ), sudah Terakreditasi \"A\" ( Amat Baik ) Nomor : 1466/BAN-SM/SK/2022. Sehingga diarahkan untuk mampu mengembangkan strategi kompetitif yang pada akhirnya output lulusannya mudah bekerja, maupun mempunyai bekal ilmu praktek tambahan untuk meneruskan kuliah. Selain Itu Juga Siswa Dibekali Dengan Ilmu Agama Melalui Program Boarding School Dan Pesantren Sehingga Diharapkan Lulusannya Berilmu Dan Berakhlak Mulia.', '1693207841_43bb434e9b9e04ba057d.jpg', 'https://www.smkpluspertiwi.sch.id/', 'JL. Sukamulya - Bayuning, No. 240, Sukamulya, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45552', 'A', '-6.9777956', '108.4554773'),
(35, 7, 17, 'SMA ISLAM TERPADU AL-MULTAZAM 2 LINGGAJATI', 'Ponpes Terpadu Al-Multazam adalah salah satu pesantren terbaik di Jawa Barat dibawah naungan Yayasan Pendidikan Islam Al-Multazam Khusnul Khotimah yang didirikan pada tahun 2002 dengan 2 kampus terpisah antara putra dan putri. Dengan kurikulum IQRA yang menggabungkan antara kurikulum dinas pendidikan dan kurikulum khas pesantren Al-Multazam,dengan focus penguatan di Intelligent, Qurani , Religius dan Attitude.', '1693208058_f0786ac56fc83b85a9c7.jpg', 'http://almultazam.sch.id/', 'Linggarjati, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556', 'A', '-6.8805105', '108.4649178'),
(36, 6, 17, 'SMK PERTIWI CILIMUS', 'Menyiapkan generasi yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, mencetak lulusan siap kerja dan berwirausaha yang memiliki kompetensi dibidangnya  sesuai dengan kebutuhan Dunia Usaha  dan Dunia Industri (DU/DI), serta menguasai Teknologi Digital', '1693208254_70f7749ae1ca3c81495a.jpg', 'http://smkpertiwicilimus.com/', 'Jl. Raya Bandorasa No.25, RT.05/RW.02, Bandorasa Wetan, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556', 'A', '-6.8878554', '108.4896302'),
(37, 6, 17, 'SMK SWADAYA PUI', 'SMK SWADAYA PUI KUNINGAN tanggap dengan perkembangan teknologi tersebut. Dengan dukungan SDM yang di miliki sekolah ini siap untuk berkompetisi dengan sekolah lain dalam pelayanan informasi publik. Teknologi Informasi Web khususnya, menjadi sarana bagi SMK SWADAYA PUI KUNINGAN. Harapan untuk memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula, sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab Kebutuhan masyarakat.', '1693208473_b87dd6f5e7bef35c87ea.jpg', 'http://smkpuikng.sch.id/', 'Jl. H. Bakri No.94, Caracas, Kec. Cilimus, Kabupaten Kuningan, Jawa Barat 45556', 'A', '-6.8647551', '108.4979502'),
(38, 5, 8, 'SMA NEGERI 1 CINIRU', 'SMA NEGERI 1 CINIRU adalah salah satu satuan pendidikan dengan jenjang SMA di Ciniru, Kec. Ciniru, Kab. Kuningan, Jawa Barat. Dalam menjalankan kegiatannya, SMA NEGERI 1 CINIRU berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.', '1693208734_411fc11807e257bfb221.jpg', 'https://dapo.kemdikbud.go.id/sekolah/4C5462D9AA63A78AEBC1', 'XF4X+3FP, Ciniru, Kec. Ciniru, Kabupaten Kuningan, Jawa Barat 45565', 'A', '-7.0447983', '108.4986983'),
(39, 5, 9, 'SMA NEGERI 1 SUBANG', 'SMA Negeri 1 Subang merupakan salah satu sekolah menengah atas negeri yang ada di kabupaten Kuningan, Jawa Barat, Indonesia. Sama dengan SMA pada umumnya di Indonesia, masa pendidikan sekolah di SMAN 1 Subang ditempuh dalam waktu 3 tahun pelajaran, mulai dari Kelas X sampai Kelas XII.', '1693208996_ad39f775ae70dadbe78a.jpg', 'https://dapo.kemdikbud.go.id/sekolah/1E0F3DC14875BEAD6510', 'Jl. H.O. Iskandar No.4, Subang, Kec. Subang, Kabupaten Kuningan, Jawa Barat 45586', 'A', '-7.1288424', '108.523015'),
(40, 6, 6, 'SMK BUDI BHAKTI MANDIRANCAN', 'SMK BUDI BHAKTI MANDIRANCAN adalah salah satu satuan pendidikan dengan jenjang SMK di Sukasari, Kec. Mandirancan, Kab. Kuningan, Jawa Barat. Dalam menjalankan kegiatannya, SMK BUDI BHAKTI MANDIRANCAN berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.', '1693209299_3b9b279db1c86ffe352d.jpg', 'https://dapo.kemdikbud.go.id/sekolah/B1E80525E848CFDAFD34', 'Jl. Raya Cimalati Sukasari Mandirancan, Sukasari, Kuningan, Kabupaten Kuningan, Jawa Barat 45558', 'A', '-6.8071212', '108.4609017'),
(41, 6, 30, 'SMK AUTO MATSUDA', 'Visi SMK Auto Matsuda\r\nLembaga Pendidikan Kejuruan Termaju 2025\r\nMenghasilkan SDM yang Profesional Kompeten, Kompetitif, dan Mandiri\r\nBerlandaskan Iman dan Taqwa', '1693209726_5f642219f0293da617e1.jpg', 'https://smkautomatsuda.sch.id/', 'Jalan No.192, Kutaraja, Kec. Maleber, Kabupaten Kuningan, Jawa Barat 45574', 'A', '-7.025707', '108.5455129'),
(42, 6, 13, 'SMK PERSADA KUNINGAN', 'Sistem Pendidikan Nasional adalah perkembangan positif dan penting ke arah munculnya sistem pendidikan yang bermutu dan berkualitas dan diperlukan penyelenggaraan sekolah dengan menggunakan manajemen yang baik dan terbuka.\r\n SMK PERSADA KUNINGAN \"Tandang Naratas Jalan Nagri Waluya\"  ', '1693210133_60a6fd937369bdcef174.jpg', 'http://www.smkpersadakng.mysch.id/', 'Jl. Raya Luragung - Kuningan, Mekarwangi, Kec. Lebakwangi, Kabupaten Kuningan, Jawa Barat 45574', 'B', '-7.0117464', '108.6006429'),
(43, 3, 12, 'SMK NEGERI 1 LURAGUNG', 'SMK NEGERI 1 LURAGUNG adalah salah satu satuan pendidikan dengan jenjang SMK di Luragunglandeuh, Kec. Luragung, Kab. Kuningan, Jawa Barat. Dalam menjalankan kegiatannya, SMK NEGERI 1 LURAGUNG berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.', '1693210485_17ba435011d7f1d03ae2.jpg', 'https://dapo.kemdikbud.go.id/sekolah/619009F7E2283C57B1E6', 'Jl. Raya Luragung-Cidahu, RT. 3 / RW. 3, Luragung, Luragunglandeuh, Kuningan, Kabupaten Kuningan, Jawa Barat 45581', 'B', '-7.0126786', '108.6389964'),
(44, 6, 13, 'SMK CENDIKIA UTAMA', 'Berdirinya SMK Cendikia Utama Kuningan yang dipelopori oleh Bapak Dr. H. Suherman Saji, M.Pd., didasari oleh beberapa aspek penunjang di antaranya:\r\nKemampuan sekolah  dalam melaksanakan  Pendidikan Moral/Etika/Spiritual perlu ditingkatkan.\r\nPesantren memiliki pengalaman yang cukup memadai dalam pendidikan karakter, diharapkan dapat memberikan  contoh pendidikan karakter bagi sekolah lain.\r\nSMK yang ada di pondok pesantren memiliki prestasi yang lebih baik atau setidak-tidaknya sama dengan SMK lain (meningkatkan kemampuan pondok pesantren dalam mengakses   pendidikan berbasis IPTEK', '1693210716_68749c9af6737a2d0b34.jpg', 'http://cendikiautama.blogspot.co.id/', 'XHVH+45V, Langseb, Kec. Lebakwangi, Kabupaten Kuningan, Jawa Barat 45574', 'B', '-7.0071221', '108.575356'),
(45, 5, 13, 'SMA NEGERI 1 LEBAKWANGI', 'SMA NEGERI 1 LEBAKWANGI adalah salah satu satuan pendidikan dengan jenjang SMA di Cinagara, Kec. Lebakwangi, Kab. Kuningan, Jawa Barat. Dalam menjalankan kegiatannya, SMA NEGERI 1 LEBAKWANGI berada di bawah naungan Kementerian Pendidikan dan Kebudayaan', '1693212066_7df949763a3f5b00eb56.jpg', 'https://dapo.kemdikbud.go.id/sekolah/1F148F36D8BD53F035BC', 'XHCP+X74, Cinagara, Kec. Lebakwangi, Kabupaten Kuningan, Jawa Barat 45574', 'A', '-7.0276186', '108.583141'),
(46, 5, 5, 'SMA NEGERI 2 KUNINGAN', 'SMA Negeri 2 Kuningan berdiri sejak tanggal 1 Juli 1982 dengan Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor : 0298/0/1982  tanggal 9 Oktober 1982 yang secara resmi dianggap penunggalan dari SMA Negeri Kuningan.', '1693212349_eca67870a1241b43a82e.jpg', 'http://www.sman2kuningan.sch.id/', 'Jl. Aruji Kartawinata No.16, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511', 'A', '-6.9793459', '108.4834822'),
(47, 5, 5, 'SMA NEGERI 1 KUNINGAN', 'SMA Negeri 1 Kuningan merupakan sekolah yang tidak hanya mengedepankan prestasi akademik namun juga prestasi non akademik, di mana siswa nya dituntut untuk memiliki potensi yang lebih, dengan tujuan agar nantinya siswa-siswi SMA Negeri 1 Kuningan tidak hanya mencerdaskan tapi juga mengembangkan dan menginspirasi masyarakat, guna menciptakan kualitas hidup bangsa ini yang lebih baik lagi', '1693212510_fd4c8273d55eed4668cf.jpg', 'https://www.sman1kuningan.sch.id/', 'Jl. Siliwangi No.55, Purwawinangun, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511', 'A', '-6.9777723', '108.4795779'),
(49, 5, 4, 'SMA NEGERI 1 KADUGEDE', 'SMA negeri ini pertama kali berdiri pada tahun 1991. Pada waktu ini SMA Negeri 1 Kadugede memakai panduan kurikulum pemerintah yaitu SMA 2013 MIPA.', '1693213336_c719e0d66eb74c177c44.jpg', 'https://dapo.kemdikbud.go.id/sekolah/4C57418E57F62055EBB3', 'Jl. Syech Manglayang No.65, Babatan, Kec. Kadugede, Kabupaten Kuningan, Jawa Barat 45561', 'A', '-7.0048522', '108.4480426'),
(50, 7, 16, 'SMAS ITUS JALAKSANA', 'Sekolah Menengah Atas (SMA) dengan NPSN 20247295 merupakan lembaga pendidikan swasta yang berada di bawah kepemilikan Yayasan. Sekolah ini didirikan berdasarkan Surat Keputusan (SK) Pendirian Sekolah nomor 4213/1297-Disdik/2004 pada tanggal 13 Maret 2004. Selain itu, sekolah ini juga telah mendapatkan izin operasional melalui SK Izin Operasional nomor 421.3/1297-Disdik/2004 yang diterbitkan pada tanggal yang sama, yaitu 13 Maret 2004.', '1693213946_96f5d516ebedb9b45236.jpg', 'https://dapo.kemdikbud.go.id/sekolah/AB1ED05C61C07863E638', '3FXF+8MQ, Peusing, Kec. Jalaksana, Kabupaten Kuningan, Jawa Barat 45554', 'A', '-6.9020025', '108.471775'),
(51, 5, 16, 'SMA NEGERI 1 JALAKSANA', 'SMA dengan Nomor Pokok Sekolah Nasional (NPSN) 20212963 merupakan sebuah lembaga pendidikan tingkat menengah atas yang berstatus negeri. Sekolah ini berada di bawah kepemilikan Pemerintah Daerah. Pendirian sekolah ini resmi dilakukan berdasarkan Surat Keputusan (SK) Pendirian nomor 642.2/KPTS.59/DTRC pada tanggal 6 Maret 2006. Sekolah telah mendapatkan izin operasional melalui SK Izin Operasional nomor 291/O/1999 yang dikeluarkan pada tanggal 2 Oktober 1999.', '1693214130_18edc812640199e582e0.jpg', 'http://sman1jalaksana.sch.id', 'JL. Raya Padamenak, Jalaksana, 45554, Padamenak, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45554', 'A', '-6.9178261', '108.4883796'),
(52, 5, 33, 'SMA NEGERI 1 GARAWANGI', 'SMA dengan Nomor Pokok Sekolah Nasional (NPSN) 20212951 adalah sebuah lembaga pendidikan tingkat menengah atas yang berstatus negeri. Sekolah ini berada di bawah kepemilikan Pemerintah Pusat. Pendirian sekolah ini resmi dilakukan berdasarkan Surat Keputusan (SK) Pendirian nomor 0887/0/1986 pada tanggal 22 Desember 1986. Sekolah telah mendapatkan izin operasional melalui SK Izin Operasional nomor 0887/0/1986 yang dikeluarkan pada tanggal 1 Juli 1986.', '1693214373_478b679fc505b84122e4.jpg', 'http://www.sman1garawangi.sch.id', 'Jl. Raya Garawangi No.34, Karamatwangi, Kec. Garawangi, Kabupaten Kuningan, Jawa Barat 45514', 'A', '-6.999796', '108.5395431'),
(53, 5, 19, 'SMA NEGERI 1 DARMA', 'SMA dengan Nomor Pokok Sekolah Nasional (NPSN) 20253827 adalah lembaga pendidikan tingkat menengah atas yang memiliki status negeri. Sekolah ini berada di bawah kepemilikan Pemerintah Daerah. Pendirian sekolah ini secara resmi diakui melalui Surat Keputusan (SK) Pendirian nomor 421.5/KPTS.204-Disdik/2007 pada tanggal 25 April 2007. Izin operasional sekolah juga diberikan melalui SK Izin Operasional nomor yang sama, yaitu 421.5/KPTS.204-Disdik/2007, yang diterbitkan pada tanggal yang sama, yaitu 25 April 2007.', '1693214601_bc8aa7a6e85a0bb5f26f.jpeg', 'https://dapo.kemdikbud.go.id/sekolah/81DA53CFE7485CE0340E', 'Raya KM-15 Kec., Jl. Cipasung Desa, Cipasung, Kec. Darma, Kabupaten Kuningan, Jawa Barat 45562', 'A', '-7.0174322', '108.3922643'),
(54, 5, 10, 'SMA NEGERI 1 CIWARU', 'SMA Negeri 1 Ciwaru sudah melewati usia 17 tahun, sudah banyak mengeluarkan lulusan baik jurusan IPA maupun jurusan IPS yang setiap tahunnya terus mengukir prestasi baik akademik maupun non akademik.', '1693214745_7554c4b8b5dcfcc849f5.jpg', 'http://www.smanciwaru.sch.id/', 'SMAN1C, Jl. 11 April, Linggajaya, Kec. Ciwaru, Kabupaten Kuningan, Jawa Barat 45583', 'A', '-7.0862295', '108.6384302'),
(55, 6, 23, 'SMK Syntax Business School', 'Sekolah Menengah Kejuruan (SMK) dengan Nomor Pokok Sekolah Nasional (NPSN) 70031658 merupakan lembaga pendidikan swasta yang dikelola oleh Yayasan. Sekolah ini resmi didirikan berdasarkan Surat Keputusan (SK) Pendirian Sekolah nomor 9/011060a/DPMPTSP/2022 yang dikeluarkan pada tanggal 11 Mei 2022. Sekolah juga telah memperoleh izin operasional melalui Surat Keputusan (SK) Izin Operasional nomor yang sama, yaitu 9/011060a/DPMPTSP/2022, yang juga diterbitkan pada tanggal 11 Mei 2022.', '1693214929_d48eae912aabf6e9e1a2.jpg', 'https://dapo.kemdikbud.go.id/sekolah/DF552455987C456C68F4', 'Jl. Raya Susukan Jl. Raya Ciputat, RT.4/RW.5, Susukan, Kec. Cipicung, Kabupaten Kuningan, Jawa Barat 45576', 'B', '-6.9520261', '108.5442212'),
(135, 8, 21, 'SMPN 1 Pasawahan', 'SMPN 1 Pasawahan dikenal sebagai lembaga pendidikan menengah pertama yang dipimpin oleh Kepala Sekolah, Dede Dudi Sudiana. Tugas administratif dijalankan oleh Operator bernama WAHYUDIN. Prestasi sekolah tercermin dalam akreditasi tingkat A yang telah diraih, mengindikasikan komitmen mereka terhadap standar pendidikan yang tinggi. Dengan menerapkan Kurikulum 2013, sekolah ini mengadopsi pendekatan pembelajaran yang terkini. Proses belajar mengajar dilakukan pada pagi hari, memberikan suasana yang segar dan produktif bagi para siswa.', '1693437659_1c895009708e976b8c36.jpg', 'https://dapo.kemdikbud.go.id/sekolah/A818F4EDE59A9535EBF8', '5CXH+976, Pasawahan, Kec. Pasawahan, Kabupaten Kuningan, Jawa Barat 45559', 'A', '-6.8015714', '108.4255738'),
(136, 8, 6, 'SMPN 2 Mandirancan', 'SMPN 2 Mandirancan adalah lembaga pendidikan tingkat menengah pertama yang dipimpin oleh Kepala Sekolah bernama Ariyanto. Dukungan administratif diberikan oleh seorang Operator bernama Asyrofi. Sekolah ini telah memperoleh akreditasi tingkat A, menggambarkan komitmen mereka terhadap standar pendidikan yang berkualitas tinggi. Mengadopsi Kurikulum 2013, sekolah ini menghadirkan pendekatan pembelajaran yang up-to-date. Proses belajar mengajar dilaksanakan pada pagi hari, memberikan lingkungan yang segar dan inspiratif bagi para siswa.', '1693438077_b90afef287583f7b59f9.jpg', 'https://dapo.kemdikbud.go.id/sekolah/AC218640DF84D5B9AF6F', 'Pakembangan, Kec. Mandirancan, Kabupaten Kuningan, Jawa Barat 45557', 'A', '-6.8443769', '108.4859541');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id_reset_pass`),
  ADD KEY `tbl_reset_password_id_admin_foreign` (`id_admin`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id_kecamatan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id_reset_pass` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD CONSTRAINT `tbl_reset_password_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
