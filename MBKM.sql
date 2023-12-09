-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for mbkm
CREATE DATABASE IF NOT EXISTS `mbkm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mbkm`;

-- Dumping structure for table mbkm.fakultas
CREATE TABLE IF NOT EXISTS `fakultas` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.fakultas: ~1 rows (approximately)
INSERT INTO `fakultas` (`id`, `nama_fakultas`, `created_at`, `updated_at`) VALUES
	(1, 'Fakultas Ilmu Komputer dan Teknologi Informasi', NULL, NULL);

-- Dumping structure for table mbkm.jurusan
CREATE TABLE IF NOT EXISTS `jurusan` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.jurusan: ~2 rows (approximately)
INSERT INTO `jurusan` (`id`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
	(1, 'Sistem Informasi', NULL, NULL),
	(2, 'Teknik Informatika', NULL, NULL);

-- Dumping structure for table mbkm.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jurusan_id` int DEFAULT NULL,
  `fakultas_id` int DEFAULT NULL,
  `program_id` int DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skrip_nilai_studentsite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `krs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_id` int DEFAULT NULL,
  `status` enum('Menunggu Validasi','Tidak Lolos Validasi','Anda Tervalidasi Prodi','Anda Tervalidasi Prodi dan Pengurus') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angkatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_pengurus` enum('Menunggu Validasi','Sudah Valid','Tidak Valid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file_sr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_sptjm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_spjm_sr` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `upload_sptjm_ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_surat_pengakuan_sks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi_pengurus_surat_pengakuan_sks` enum('Menunggu Validasi','Sudah Valid','Tidak Valid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu Validasi',
  `upload_surat_pengakuan_sks_ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang_mbkm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mitra_mbkm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_surat_pengakuan_sks` enum('Menunggu Validasi','Sudah Valid','Tidak Valid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu Validasi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.mahasiswa: ~3 rows (approximately)
INSERT INTO `mahasiswa` (`id`, `user_id`, `nama`, `npm`, `kelas`, `nik`, `no_telepon`, `jenis_kelamin`, `alamat`, `kecamatan`, `kelurahan`, `kota_kabupaten`, `provinsi`, `tempat_lahir`, `tanggal_lahir`, `jurusan_id`, `fakultas_id`, `program_id`, `foto`, `skrip_nilai_studentsite`, `krs`, `ipk`, `semester_id`, `status`, `angkatan`, `validasi_pengurus`, `upload_file_sr`, `upload_sptjm`, `validasi_spjm_sr`, `created_at`, `updated_at`, `upload_sptjm_ttd`, `upload_surat_pengakuan_sks`, `validasi_pengurus_surat_pengakuan_sks`, `upload_surat_pengakuan_sks_ttd`, `bidang_mbkm`, `mitra_mbkm`, `status_surat_pengakuan_sks`) VALUES
	(1, 2, 'Muhammad Alamsyah Putra Zatmiko', '13119986', '4KA24', '327405220800045', '081280193693', 'Laki-Laki', 'Apartemen Casablanca East Residence Twr Dallas Lt.11-15, Jl. Pahlawan Revolusi No.02 Pondok Bambu, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13430', 'Duren Sawit', 'Pondok Bambu', 'Jakarta Timur', 'DKI Jakarta', 'Medan', '2000-08-22', 1, 1, NULL, 'public/foto/13119986.jpg', 'public/skrip_nilai_studentsite/13119986.pdf', 'public/krs/13119986.pdf', '3.00', 1, 'Anda Tervalidasi Prodi', '2019', 'Sudah Valid', '1312', '12414', 1, '2023-08-18 23:39:34', '2023-08-18 23:39:34', '1241', '124', 'Sudah Valid', '124414', NULL, NULL, 'Sudah Valid'),
	(4, 3, 'john doe', '1324142145', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'Menunggu Validasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Menunggu Validasi', NULL, NULL, NULL, 'Menunggu Validasi'),
	(5, 4, 'budi', '12415123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 'Menunggu Validasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Menunggu Validasi', NULL, NULL, NULL, 'Menunggu Validasi');

-- Dumping structure for table mbkm.mata_kuliah
CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_sks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_konversi` tinyint(1) NOT NULL,
  `semester_id` int NOT NULL,
  `jurusan_id` int NOT NULL,
  `paket_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.mata_kuliah: ~5 rows (approximately)
INSERT INTO `mata_kuliah` (`id`, `kode_matkul`, `nama_matkul`, `jumlah_sks`, `status_konversi`, `semester_id`, `jurusan_id`, `paket_id`, `created_at`, `updated_at`) VALUES
	(1, 'AK011302', 'ANALISIS DAN PERANCANGAN SISTEM INFORMASI', '3', 1, 1, 1, 1, NULL, NULL),
	(2, 'AK011331', 'DISAIN DAN MANAJEMEN JARINGAN KOMPUTER	', '3', 1, 1, 1, 1, NULL, NULL),
	(3, 'PB011207', 'PENULISAN ILMIAH', '2', 0, 1, 1, 1, NULL, NULL),
	(4, 'AK011318', 'SISTEM BASIS DATA 2', '3', 1, 1, 1, 1, NULL, NULL),
	(5, 'AK385295', 'Ilmu Informatika Teknologi', '4', 1, 2, 2, 2, NULL, NULL);

-- Dumping structure for table mbkm.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.migrations: ~25 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2023_08_11_042153_prodi', 1),
	(4, '2023_08_11_042359_pengurus', 1),
	(5, '2023_08_11_042728_mahasiswa', 1),
	(6, '2023_08_11_063457_mata_kuliah', 1),
	(7, '2023_08_11_063641_paket_matkul', 1),
	(8, '2023_08_11_063846_nilai_mahasiswa_mbkm', 1),
	(9, '2023_08_11_064229_nilai_mahasiswa_perkuliahan', 1),
	(10, '2023_08_11_065346_semester', 1),
	(11, '2023_08_12_055840_add_kelas_to_mahasiswa_table', 2),
	(12, '2023_08_12_055944_add_no_telepon_to_mahasiswa_table', 2),
	(13, '2023_08_12_060720_program', 3),
	(14, '2023_08_13_122434_fakultas', 4),
	(15, '2023_08_13_124918_add_fakultas_to_mahasiswa', 4),
	(16, '2023_08_13_125434_remove_prodi_from_mahasiswa', 4),
	(17, '2023_08_13_125949_jurusan', 4),
	(18, '2023_08_13_130421_add_jurusan_to_mahasiswa', 4),
	(19, '2023_08_19_024903_add_role_to_user', 5),
	(20, '2023_08_15_142932_remove_validasi_prodi_from_mahasiswa', 6),
	(21, '2023_08_15_144222_remove_validasi_pengurus_from_mahasiswa', 6),
	(22, '2023_08_15_151041_add_validasi_pengurus_to_mahasiswa', 6),
	(23, '2023_08_15_151558_add_columns_to_mahasiswa_table', 6),
	(24, '2023_08_23_035059_add_mahasiswa_id_to_nilai_mahasiswa_perkuliahan', 6),
	(25, '2023_08_23_072010_add_semester_id_jurusan_id_to_mata_kuliah', 7);

-- Dumping structure for table mbkm.nilai_mahasiswa_mbkm
CREATE TABLE IF NOT EXISTS `nilai_mahasiswa_mbkm` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `paket_id` int DEFAULT NULL,
  `mahasiswa_id` int NOT NULL,
  `nilai_mbkm` int DEFAULT NULL,
  `file_laporan_akhir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.nilai_mahasiswa_mbkm: ~3 rows (approximately)
INSERT INTO `nilai_mahasiswa_mbkm` (`id`, `paket_id`, `mahasiswa_id`, `nilai_mbkm`, `file_laporan_akhir`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 86, 'public/file_laporan_akhir/Laporan Akhir_Studi Independen_Muhammad Alamsyah Putra Zatmiko_13119986_Skilvul Challenge Kitabisa.pdf', '2023-08-19 00:12:32', '2023-08-19 00:12:32'),
	(2, 1, 4, 80, NULL, NULL, NULL),
	(3, 2, 5, 92, NULL, NULL, NULL);

-- Dumping structure for table mbkm.nilai_mahasiswa_perkuliahan
CREATE TABLE IF NOT EXISTS `nilai_mahasiswa_perkuliahan` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `mahasiswa_id` int NOT NULL,
  `matkul_id` int NOT NULL,
  `nilai_kuliah` int NOT NULL,
  `nilai_final_kuliah` int DEFAULT NULL,
  `nilai_mahasiswa_mbkm_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.nilai_mahasiswa_perkuliahan: ~15 rows (approximately)
INSERT INTO `nilai_mahasiswa_perkuliahan` (`id`, `mahasiswa_id`, `matkul_id`, `nilai_kuliah`, `nilai_final_kuliah`, `nilai_mahasiswa_mbkm_id`, `created_at`, `updated_at`) VALUES
	(219, 1, 1, 90, 90, 1, '2023-12-08 22:45:13', '2023-12-08 22:50:09'),
	(220, 4, 1, 78, 80, 2, '2023-12-08 22:45:13', '2023-12-08 22:50:09'),
	(221, 5, 1, 64, 92, 3, '2023-12-08 22:45:13', '2023-12-08 22:50:09'),
	(222, 1, 2, 88, 88, 1, '2023-12-08 22:45:22', '2023-12-08 22:50:09'),
	(223, 4, 2, 100, 100, 2, '2023-12-08 22:45:22', '2023-12-08 22:50:09'),
	(224, 5, 2, 90, 92, 3, '2023-12-08 22:45:22', '2023-12-08 22:50:09'),
	(225, 1, 3, 78, 86, 1, '2023-12-08 22:45:34', '2023-12-08 22:50:09'),
	(226, 4, 3, 92, 92, 2, '2023-12-08 22:45:34', '2023-12-08 22:50:09'),
	(227, 5, 3, 84, 92, 3, '2023-12-08 22:45:34', '2023-12-08 22:50:09'),
	(228, 1, 4, 80, 86, 1, '2023-12-08 22:45:47', '2023-12-08 22:50:09'),
	(229, 4, 4, 72, 80, 2, '2023-12-08 22:45:47', '2023-12-08 22:50:09'),
	(230, 5, 4, 98, 98, 3, '2023-12-08 22:45:47', '2023-12-08 22:50:09'),
	(231, 1, 5, 78, 86, 1, '2023-12-08 22:45:59', '2023-12-08 22:50:09'),
	(232, 4, 5, 64, 80, 2, '2023-12-08 22:45:59', '2023-12-08 22:50:09'),
	(233, 5, 5, 100, 100, 3, '2023-12-08 22:45:59', '2023-12-08 22:50:09');

-- Dumping structure for table mbkm.paket_matkul
CREATE TABLE IF NOT EXISTS `paket_matkul` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` int NOT NULL,
  `semester_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.paket_matkul: ~2 rows (approximately)
INSERT INTO `paket_matkul` (`id`, `nama_paket`, `jurusan_id`, `semester_id`, `created_at`, `updated_at`) VALUES
	(1, 'sistem informasi smt 6', 1, 1, NULL, NULL),
	(2, 'teknik informatika smt 7', 2, 2, NULL, NULL);

-- Dumping structure for table mbkm.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.password_resets: ~0 rows (approximately)

-- Dumping structure for table mbkm.pengurus
CREATE TABLE IF NOT EXISTS `pengurus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nama_pengurus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.pengurus: ~0 rows (approximately)

-- Dumping structure for table mbkm.prodi
CREATE TABLE IF NOT EXISTS `prodi` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nama_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.prodi: ~0 rows (approximately)

-- Dumping structure for table mbkm.program
CREATE TABLE IF NOT EXISTS `program` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.program: ~4 rows (approximately)
INSERT INTO `program` (`id`, `nama_program`, `created_at`, `updated_at`) VALUES
	(2, 'Bangkit', '2023-08-18 21:33:15', '2023-08-18 21:33:15'),
	(3, 'Studi Independen', '2023-08-18 21:38:25', '2023-08-18 21:38:25'),
	(7, 'Magang', '2023-08-22 22:50:50', '2023-08-22 22:50:50'),
	(9, 'testing 2', '2023-09-04 22:12:46', '2023-09-04 22:13:09');

-- Dumping structure for table mbkm.semesters
CREATE TABLE IF NOT EXISTS `semesters` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_semester` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.semesters: ~2 rows (approximately)
INSERT INTO `semesters` (`id`, `nama_semester`, `created_at`, `updated_at`) VALUES
	(1, 'Semester 6', NULL, NULL),
	(2, 'semester 7', NULL, NULL);

-- Dumping structure for table mbkm.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mbkm.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin@admin.com', '2023-08-11 08:27:35', '$2y$10$C17SUhgHwetXOS6cw.R6SO8oO6vnJEDwpms8bBXGRP.achR3okTzy', 'pengurus', NULL, '2023-08-11 08:27:42', '2023-08-11 08:27:42'),
	(2, 'alam@email.com', NULL, '$2y$10$o5GNV2HEeOPYKrNFz02VbOC8MpA4y7UVmZLTGMuWGsuxc8qXSIMya', 'mahasiswa', NULL, '2023-08-11 23:25:43', '2023-08-11 23:25:43'),
	(3, 'mahasiswa@gmail.com', NULL, '2124153', 'mahasiswa', NULL, NULL, NULL),
	(4, 'budi@gmail.com', NULL, '134135', 'mahasiswa', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
