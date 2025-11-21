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


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organisasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `id_login`, `nama`, `no_telpon`) VALUES
(1, 1, 'Admin 1', '0812345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `konten`, `gambar`, `link`) VALUES
(5, 'Sumpah Jabatan 2025', '\"Integritas Tetap Tegak Demi Mewujudkan Himpunan yang Profesional dan Beretika\"', 'Sumpah Jabatan 2025.png', 'https://www.instagram.com/p/DLo8wmsSQCW/?utm_source=ig_web_copy_link&igsh=Yjl4MmRvYzUwazNh'),
(6, 'Apresiasi & Prestasi JTI Juni 2025', '\"Dengan bangga kami ucapkan selamat atas keberhasilan saudara/i meraih kejuaraan ini. Prestasi ini merupakan cerminan kompetensi dan kapabilitas yang tinggi dalam Jurusan Teknologi Informasi. Semoga capaian ini menjadi motivasi untuk terus mengembangkan diri dan memberikan kontribusi nyata.\"', 'Screenshot 2025-10-02 112628.png', 'https://www.instagram.com/p/DLwTTpUSuDO/?utm_source=ig_web_copy_link&igsh=djY2ZTlyc2xtOGl2'),
(7, 'Open Recruitment HMJ TI 2025 ', '\"Organisasi bukan tujuan akhir, tapi perjalanan. HMJ TI jadi ruang bagi kita semua untuk melangkah, tumbuh, dan berinovasi.\"', 'OPEN RECRUITMENT HMJ TI 2025 .png', 'https://www.instagram.com/p/DORHHpLEk77/?utm_source=ig_web_copy_link&igsh=Mjhnc3owYzl0bTg='),
(8, 'Direktur Baru Politeknik Negri Lampung', 'HMJ Teknologi Informasi Polinela mengucapkan selamat atas terpilihnya Dr. Dwi Puji Hartono, S.Pi., M.Si. sebagai Direktur Politeknik Negeri Lampung periode 2025–2029. Semoga dapat membawa Polinela semakin maju, berdaya saing, dan berkontribusi besar bagi pendidikan vokasi di Indonesia.', 'Selamat dan Sukses.png', 'https://www.instagram.com/p/DPCMu7Pki4k/?utm_source=ig_web_copy_link&igsh=MWNlNnU0cmh1bzJsag==');

-- --------------------------------------------------------

--
-- Struktur dari tabel `devisi`
--

CREATE TABLE `devisi` (
  `id` int(11) NOT NULL,
  `nama_devisi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `devisi`
--

INSERT INTO `devisi` (`id`, `nama_devisi`, `deskripsi`, `gambar`) VALUES
(12, 'Media dan Informasi', 'Divisi Media dan Informasi merupakan divisi yang bergerak dalam bidang pengelolaan, penyebaran, dan pengembangan informasi di lingkungan HMJ Teknik Informatika. Medinfo menjadi pusat kreativitas dalam publikasi kegiatan, pengelolaan media sosial, serta penyediaan informasi yang informatif, kreatif, dan tepat sasaran.', 'Medinfo.png'),
(13, 'Minat dan Bakat', 'Divisi Minat dan Bakat adalah divisi yang berfokus pada pengembangan potensi, kreativitas, serta bakat mahasiswa Teknik Informatika di bidang non-akademik. Minbat menjadi wadah bagi mahasiswa untuk menyalurkan hobi, minat, dan talenta mereka baik dalam bidang seni, olahraga, maupun keterampilan lainnya.', 'Minbat.png'),
(14, 'Pengembangan Sumber Daya Mahasiswa', 'Divisi Pengembangan Sumber Daya Mahasiswa adalah divisi yang berfokus pada pengembangan kualitas, potensi, dan kapasitas mahasiswa Teknik Informatika. Melalui berbagai program pembinaan, pelatihan, dan kaderisasi, PSDM hadir untuk menciptakan mahasiswa yang aktif, berkarakter, serta memiliki jiwa kepemimpinan.', 'PSDM.png'),
(15, 'Sosial Masyarakat', 'Divisi Sosial Masyarakat merupakan divisi yang berperan dalam menumbuhkan rasa kepedulian sosial dan tanggung jawab mahasiswa TI terhadap lingkungan sekitar. Sosma menjadi wadah untuk menghubungkan mahasiswa dengan masyarakat melalui kegiatan sosial, kemanusiaan, dan pengabdian.', 'Sosma.jpg'),
(16, 'Dana dan Usaha', 'Divisi Danus adalah divisi yang berfokus pada pengelolaan dan pencarian sumber dana untuk mendukung keberlangsungan program kerja HMJ TI. Dengan kreativitas dan jiwa kewirausahaan, Danus merancang serta menjalankan berbagai usaha produktif agar organisasi dapat mandiri secara finansial.', 'Danus.png'),
(17, 'Keuangan', 'Divisi Keuangan adalah divisi yang berperan penting dalam mengelola, mencatat, dan mempertanggungjawabkan segala bentuk keuangan HMJ TI. Divisi ini memastikan setiap pemasukan dan pengeluaran tercatat rapi, transparan, serta sesuai dengan kebutuhan organisasi.', 'Keuangan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `devisi3`
--

CREATE TABLE `devisi3` (
  `id` int(11) NOT NULL,
  `nama_devisi` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `devisi3`
--

INSERT INTO `devisi3` (`id`, `nama_devisi`, `deskripsi`, `gambar`) VALUES
(6, 'Gunung Hutan', 'Kegiatan mendaki gunung  dan menyusuri hutan dengan menerapkan materi-materi yang  dibutuhkan selama pendakian', 'logo hiking.png'),
(7, 'Arung Jeram', 'Kegiatan mengarungi jeram-jeram sungai yang sangat menantang', 'logo rafting.png'),
(8, 'Rock Climbing', 'Pemanjatan tebing dengan peralatan dan teknik-teknik tertentu', 'logo rc.png'),
(9, 'Caving', 'Kegiatan yang dilakukan antara lain adalah penelusuran goa, pemetaan goa, pendataan flora dan fauna dalam goa', 'logo caving.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `konten`, `gambar`, `link`) VALUES
(4, 'Hasil Seleksi', 'Selamat! Kami ucapkan selamat kepada para peserta yang lolos tes wawancara Open Recruitment HMJ Teknologi Informasi 2025 👏👏 Selamat bergabung menjadi bagian dari keluarga besar HMJ TI Polinela 🧡✨ Semoga ke depannya kita bisa bersama-sama belajar, berkembang, dan menciptakan inovasi terbaik untuk jurusan tercinta 🌐💡', 'Hasiltes.png', 'https://www.instagram.com/p/DPQgLwBAOS-/?utm_source=ig_web_copy_link&igsh=MjNjOXlrNWlteGxj'),
(5, 'Open Recruitment HMJ TI 2025', '\"Organisasi bukan tujuan akhir, tapi perjalanan. HMJ TI jadi ruang bagi kita semua untuk melangkah, tumbuh, dan berinovasi.\"', 'OPEN RECRUITMENT HMJ TI 2025 .png', 'https://www.instagram.com/p/DORHHpLEk77/?utm_source=ig_web_copy_link&igsh=Mjhnc3owYzl0bTg=');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('mahasiswa','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'john_doe', 'password123', 'mahasiswa'),
(2, 'admin1', 'admin123', 'admin'),
(3, 'felixcia', 'feli22', 'mahasiswa'),
(16, 'admin', '$2y$10$yh2pU.UZwZl05VdaDjdf8OI09KTdvSBvWlmDl59Rw0Xgo5vSxK8jW', 'admin'),
(17, 'felsi', '$2y$10$D7WD/JcAw1c6okgFE7dv/.VZ1kIXFaZh9tQsVXiQ6gpWQsl3yjNve', 'mahasiswa'),
(18, 'wildan zaki', '$2y$10$3k45nESokQEsGBM/mkaMoeuFMXQnPTGMSRsra0scT2kPrIrzCrqKO', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_login`, `nama`, `email`, `no_telpon`, `jurusan`) VALUES
(3, 3, 'felixcia', 'felsirianghepat@gmail.com', '081225628561', 'informatika'),
(16, 16, 'admin', 'admin@gmail.com', '081225628561', 'informatika'),
(17, 17, 'felsi', 'felsirianghepat@gmail.com', '081225628561', 'informatika'),
(18, 18, '123', 'nn@gmail.com', '0895605896637', 'Teknologi Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id`, `foto`, `nama`, `angkatan`) VALUES
(9, 'img/pengurus/Wildan.png', 'Wildan', '2023'),
(10, 'img/pengurus/Ripki.png', 'Ripki', '2023'),
(11, 'img/pengurus/Tiara.png', 'Tiara', '2023'),
(12, 'img/pengurus/Nazwa.png', 'Nazwa', '2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regis_anggota_organisasi`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `devisi`
--
ALTER TABLE `devisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `devisi3`
--
ALTER TABLE `devisi3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_login` (`id_login`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regis_anggota_organisasi`
--
ALTER TABLE `regis_anggota_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_devisi` (`id_devisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `devisi`
--
ALTER TABLE `devisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `devisi3`
--
ALTER TABLE `devisi3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `regis_anggota_organisasi`
--
ALTER TABLE `regis_anggota_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id`);

--
-- Ketidakleluasaan untuk tabel `regis_anggota_organisasi`
--
ALTER TABLE `regis_anggota_organisasi`
  ADD CONSTRAINT `regis_anggota_organisasi_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `regis_anggota_organisasi_ibfk_2` FOREIGN KEY (`id_devisi`) REFERENCES `devisi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
