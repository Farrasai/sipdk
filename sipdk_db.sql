-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2019 pada 03.22
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipdk_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(10) NOT NULL,
  `perihal` varchar(3000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `perihal`, `tanggal`) VALUES
(1, 'assalamualaikum, bapak/ibu sekalian. jangan lupa besok untuk bersih pantai. dihadiri oleh staf-staf sekretariat.', '2019-11-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `last_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `jabatan`, `bidang`, `role_id`, `is_active`, `date_created`, `last_login`) VALUES
(3, 'Farras A Isnandy', 'farras@gmail.com', 'IMG_3173+.jpg', '$2y$10$DMbshWsjju5CufNACM5r5.5z287kvdyTzrs0jAbk0IJ5LKiWZD8.i', 'Staff', 'Perencanaan', 1, 1, 1570091300, 1573698213),
(4, 'Marsha Pearche', 'admin@gmail.com', '17_02_0163.jpg', '$2y$10$NTbuOEYUAPrm8xKGQGuJq.Ag6hXEC0SjDA7eaiSLvPoCYLJq3BXC.', '', 'Perencanaan', 2, 1, 1570153754, 1570153754),
(8, 'Administrator', 'farrasai13@gmail.com', 'logocilacap.jpg', '$2y$10$7NCtTS1zc/kWpmx2kQ40sOHmFrH/31.XwII77ibC4ox0zi8.y/Lji', '', 'Perencanaan', 2, 1, 1571209669, 1573620932);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-home', 1),
(2, 2, 'Profil', 'user', 'fas fa-fw fa-user', 1),
(3, 3, 'Menu Managemenet', 'menu', '', 1),
(4, 3, 'Submenu Manajemen', 'menu/submenu', '', 1),
(6, 1, 'Role', 'admin/role', 'role untuk admin', 1),
(7, 2, 'Edit Profil', 'user/edit', 'menu untuk edit profile', 1),
(8, 2, 'Ganti Password', 'user/changepassword', 'menu untuk ganti password', 1),
(9, 1, 'Daftar Anggota', 'admin/anggota', 'untuk manajemen anggota', 1),
(10, 1, 'Buat Pengumuman', 'admin/notice', 'untuk broadcast pengumuman', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(4, 'farrasai13@gmail.com', 'w6GClaXVqUviseWjsW1iA9meA0z7ZM65ouWv33C1q2c=', 1571214396),
(5, 'farrasai13@gmail.com', 'WrGSS2P6WPt9g3aXsHEQLFIOqnaDAxXyq8spId5P0S4=', 1571383311),
(6, 'farrasai13@gmail.com', 'wgKrg6uuxLPF4Ape7LeEzAcAQzEp+NfNU/0gXQarax8=', 1572915841);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
