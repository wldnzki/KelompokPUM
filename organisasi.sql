-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2025 pada 11.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `organisasi`;
USE `organisasi`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `admin` (`id`, `id_login`, `nama`, `no_telpon`) VALUES
(1, 1, 'Admin 1', '0812345678');

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `blog` (`id`, `judul`, `konten`, `gambar`, `link`) VALUES
(5, 'Sumpah Jabatan 2025', '\"Integritas Tetap Tegak Demi Mewujudkan Himpunan yang Profesional dan Beretika\"', 'Sumpah Jabatan 2025.png', 'https://www.instagram.com/p/DLo8wmsSQCW/?utm_source=ig_web_copy_link&igsh=Yjl4MmRvYzUwazNh'),
(6, 'Apresiasi & Prestasi JTI Juni 2025', '\"Dengan bangga kami ucapkan selamat atas keberhasilan saudara/i meraih kejuaraan ini. Prestasi ini merupakan cerminan kompetensi dan kapabilitas yang tinggi dalam Jurusan Teknologi Informasi.\"', 'Screenshot 2025-10-02 112628.png', 'https://www.instagram.com/p/DLwTTpUSuDO/?utm_source=ig_web_copy_link&igsh=djY2ZTlyc2xtOGl2'),
(7, 'Open Recruitment HMJ TI 2025 ', '\"Organisasi bukan tujuan akhir, tapi perjalanan. HMJ TI jadi ruang bagi kita semua untuk melangkah, tumbuh, dan berinovasi.\"', 'OPEN RECRUITMENT HMJ TI 2025 .png', 'https://www.instagram.com/p/DORHHpLEk77/?utm_source=ig_web_copy_link&igsh=Mjhnc3owYzl0bTg='),
(8, 'Direktur Baru Politeknik Negri Lampung', 'HMJ Teknologi Informasi Polinela mengucapkan selamat atas terpilihnya Dr. Dwi Puji Hartono sebagai Direktur Politeknik Negeri Lampung periode 2025–2029.', 'Selamat dan Sukses.png', 'https://www.instagram.com/p/DPCMu7Pki4k/?utm_source=ig_web_copy_link&igsh=MWNlNnU0cmh1bzJsag==');

CREATE TABLE `devisi` (
  `id` int(11) NOT NULL,
  `nama_devisi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `devisi` (`id`, `nama_devisi`, `deskripsi`, `gambar`) VALUES
(12, 'Media dan Informasi', 'Divisi Media dan Informasi ...', 'Medinfo.png'),
(13, 'Minat dan Bakat', 'Divisi Minat dan Bakat ...', 'Minbat.png'),
(14, 'Pengembangan Sumber Daya Mahasiswa', 'Divisi PSDM ...', 'PSDM.png'),
(15, 'Sosial Masyarakat', 'Divisi Sosial Masyarakat ...', 'Sosma.jpg'),
(16, 'Dana dan Usaha', 'Divisi Danus ...', 'Danus.png'),
(17, 'Keuangan', 'Divisi Keuangan ...', 'Keuangan.jpg');

CREATE TABLE `devisi3` (
  `id` int(11) NOT NULL,
  `nama_devisi` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `devisi3` (`id`, `nama_devisi`, `deskripsi`, `gambar`) VALUES
(6, 'Gunung Hutan', 'Kegiatan mendaki gunung  dan menyusuri hutan ...', 'logo hiking.png'),
(7, 'Arung Jeram', 'Kegiatan mengarungi jeram-jeram sungai ...', 'logo rafting.png'),
(8, 'Rock Climbing', 'Pemanjatan tebing dengan peralatan ...', 'logo rc.png'),
(9, 'Caving', 'Penelusuran goa, pemetaan goa ...', 'logo caving.png');

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `informasi` (`id`, `judul`, `konten`, `gambar`, `link`) VALUES
(4, 'Hasil Seleksi', 'Selamat kepada peserta yang lolos tes wawancara Open Recruitment HMJ TI 2025 👏', 'Hasiltes.png', 'https://www.instagram.com/p/DPQgLwBAOS-/'),
(5, 'Open Recruitment HMJ TI 2025', 'Organisasi bukan tujuan akhir ...', 'OPEN RECRUITMENT HMJ TI 2025 .png', 'https://www.instagram.com/p/DORHHpLEk77/');

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('mahasiswa','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(16, 'admin', '$2y$10$yh2pU.UZwZl05VdaDjdf8OI09KTdvSBvWlmDl59Rw0Xgo5vSxK8jW', 'admin'),
(17, 'felsi', '$2y$10$D7WD/JcAw1c6okgFE7dv/.VZ1kIXFaZh9tQsVXiQ6gpWQsl3yjNve', 'mahasiswa'),
(18, 'wildan zaki', '$2y$10$3k45nESokQEsGBM/mkaMoeuFMXQnPTGMSRsra0scT2kPrIrzCrqKO', 'mahasiswa');

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `mahasiswa` (`id`, `id_login`, `nama`, `email`, `no_telpon`, `jurusan`) VALUES
(17, 17, 'felsi', 'felsirianghepat@gmail.com', '081225628561', 'informatika'),
(18, 18, '123', 'nn@gmail.com', '0895605896637', 'Teknologi Informasi');

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `pengurus` (`id`, `foto`, `nama`, `angkatan`) VALUES
(9, 'img/pengurus/Wildan.png', 'Wildan', '2023'),
(10, 'img/pengurus/Ripki.png', 'Ripki', '2023'),
(11, 'img/pengurus/Tiara.png', 'Tiara', '2023'),
(12, 'img/pengurus/Nazwa.png', 'Nazwa', '2023');

CREATE TABLE `regis_anggota_organisasi` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_devisi` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `admin` ADD PRIMARY KEY (`id`);
ALTER TABLE `blog` ADD PRIMARY KEY (`id`);
ALTER TABLE `devisi` ADD PRIMARY KEY (`id`);
ALTER TABLE `devisi3` ADD PRIMARY KEY (`id`);
ALTER TABLE `gallery` ADD PRIMARY KEY (`id`);
ALTER TABLE `informasi` ADD PRIMARY KEY (`id`);
ALTER TABLE `login` ADD PRIMARY KEY (`id`);
ALTER TABLE `mahasiswa` ADD PRIMARY KEY (`id`);
ALTER TABLE `pengurus` ADD PRIMARY KEY (`id`);
ALTER TABLE `regis_anggota_organisasi` ADD PRIMARY KEY (`id`);

ALTER TABLE `blog` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
ALTER TABLE `devisi` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
ALTER TABLE `informasi` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `login` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
ALTER TABLE `mahasiswa` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
ALTER TABLE `pengurus` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
ALTER TABLE `regis_anggota_organisasi` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id`);

ALTER TABLE `regis_anggota_organisasi`
  ADD CONSTRAINT `regis_anggota_organisasi_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `regis_anggota_organisasi_ibfk_2` FOREIGN KEY (`id_devisi`) REFERENCES `devisi` (`id`);

COMMIT;
