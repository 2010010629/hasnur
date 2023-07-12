-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 03.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_course`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `duration`) VALUES
(1, 'Belajar Pemrograman Web', 'Kursus ini memberikan pemahaman mendalam tentang pemrograman web. Anda akan mempelajari bahasa pemrograman seperti HTML, CSS, dan JavaScript untuk membangun situs web interaktif.', 180),
(2, 'Pengenalan Data Science', 'Kursus ini adalah pengantar untuk mempelajari konsep dan teknik dalam data science. Anda akan mempelajari dasar-dasar statistika, pengolahan data, dan penggunaan algoritma untuk menganalisis data.', 90),
(3, 'Desain Grafis untuk Pemula', 'Kursus ini mengajarkan prinsip dasar desain grafis dan penggunaan perangkat lunak desain populer. Anda akan belajar membuat ilustrasi, desain poster, dan manipulasi foto.', 120),
(4, 'Pemasaran Digital untuk Bisnis', 'Kursus ini fokus pada strategi pemasaran digital untuk meningkatkan kehadiran online bisnis Anda. Anda akan mempelajari penggunaan media sosial, SEO, dan iklan online untuk mencapai target pasar Anda.', 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `embed_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `title`, `description`, `embed_link`) VALUES
(1, 1, 'Pendahuluan HTML', 'Pelajaran ini memberikan pengenalan tentang HTML dan struktur dasar sebuah halaman web. Anda akan belajar tentang tag-tag dasar dan cara membuat elemen HTML.', 'https://embed-link-1'),
(2, 1, 'Styling dengan CSS', 'Pelajaran ini membahas tentang Cascading Style Sheets (CSS) dan penggunaannya untuk mengatur tampilan dan gaya elemen-elemen HTML. Anda akan belajar mengenai selektor, properti, dan nilai dalam CSS.', 'https://embed-link-2'),
(3, 2, 'Konsep Dasar Statistik', 'Pelajaran ini menjelaskan konsep dasar dalam statistika seperti mean, median, dan mode. Anda akan mempelajari cara menghitung dan menginterpretasikan data statistik.', 'https://embed-link-3'),
(4, 3, 'Menggunakan Adobe Photoshop', 'Pelajaran ini membimbing Anda dalam penggunaan perangkat lunak Adobe Photoshop untuk melakukan manipulasi gambar dan membuat desain grafis sederhana.', 'https://embed-link-4'),
(5, 4, 'Strategi Media Sosial', 'Pelajaran ini membahas strategi penggunaan media sosial dalam pemasaran digital. Anda akan belajar tentang penjadwalan posting, penggunaan hashtag, dan cara berinteraksi dengan audiens.', 'https://embed-link-5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
