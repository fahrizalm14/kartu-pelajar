-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Nov 2020 pada 10.19
-- Versi server: 5.5.68-MariaDB
-- Versi PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erzetid_kapel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`, `role`) VALUES
(1, 'kartu', '$2y$10$3HgIq1kcaEFG1mk.8fdmB.JZYeHX43SwJ49LanFzlqgH4B9NYSFoa', 9, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desain`
--

CREATE TABLE `desain` (
  `id` int(11) NOT NULL,
  `desain` varchar(128) NOT NULL,
  `id_desain` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desain`
--

INSERT INTO `desain` (`id`, `desain`, `id_desain`) VALUES
(1, 'birunom.png', '1'),
(2, 'kpel2.png', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `qr_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `nip`, `nama_pegawai`, `qr_code`) VALUES
(1, '123', '12345', '123.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `visi_misi` varchar(1000) NOT NULL,
  `lembaga` varchar(128) NOT NULL,
  `domisili` varchar(25) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(25) NOT NULL,
  `kepsek` varchar(25) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `dinas` varchar(128) NOT NULL,
  `tanda_tangan` varchar(128) NOT NULL,
  `stempel` varchar(128) NOT NULL,
  `desain` varchar(128) NOT NULL,
  `id_desain` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `sekolah`, `visi_misi`, `lembaga`, `domisili`, `lokasi`, `kota`, `alamat`, `kode_pos`, `telepon`, `email`, `website`, `kepsek`, `nip`, `logo`, `dinas`, `tanda_tangan`, `stempel`, `desain`, `id_desain`) VALUES
(1, 'SMK Maarif NU 01', '<li> Disiplin, dan tepat waktu</li><li>Taat dan hormat kepada semua Guru dan karyawan SMK Ma\'arif NU 01 Wanasari</li><li>Mena\'ati Peraturan di SMK Ma\'arif NU 01 Wanasri</li><li>Selalu menjaga nama baik SMK Ma\'arif NU 01 Wanasari</li><li>Siswa harus hadir sebelum jam pembelajaran</li>', 'Lembaga Pendidikan Maarif', 'Kota', 'Wanasari', 'Brebes', 'Jl. Pemuda Sawojajar-Pesantunan KM 1, Kec. Wanasari, Kab. Brebes', 52252, '(0283) 4514778', 'smkmaarif01wanasari.brebes@gmail.com', 'smkmaarif1wanasari.sch.id', 'Ali Fauzan, MH', '123456', 'twh.png', '1f3920e722fa59abbe6365d482d595e0.jpg', 'Kepsek_copy.png', 'STEMPEL-SMK.png', 'birunom.png', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `qr` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `jk`, `nis`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `qr`, `foto`) VALUES
(14582, 'Bamabang', 'Laki-laki', '20018', 'Brebes', '08/03/2004', 'Wanasari', '20018.png', '20018.png'),
(14583, 'Bamabang', 'Laki-laki', '20019', 'Brebes', '09/03/2004', 'Wanasari', '20019.png', '20019.png'),
(14584, 'Bamabang', 'Laki-laki', '20020', 'Brebes', '10/03/2004', 'Wanasari', '20020.png', '20020.png'),
(14585, 'Bamabang', 'Laki-laki', '20021', 'Brebes', '11/03/2004', 'Wanasari', '20021.png', '20021.png'),
(14586, 'Bamabang', 'Laki-laki', '20022', 'Brebes', '12/03/2004', 'Wanasari', '20022.png', '20022.png'),
(14587, 'Bamabang', 'Laki-laki', '20023', 'Brebes', '13/03/2004', 'Wanasari', '20023.png', '20023.png'),
(14588, 'Bamabang', 'Laki-laki', '20024', 'Brebes', '14/03/2004', 'Wanasari', '20024.png', '20024.png'),
(14589, 'Bamabang', 'Laki-laki', '20025', 'Brebes', '15/03/2004', 'Wanasari', '20025.png', '20025.png'),
(14590, 'Bamabang', 'Laki-laki', '20026', 'Brebes', '16/03/2004', 'Wanasari', '20026.png', '20026.png'),
(14591, 'Bamabang', 'Laki-laki', '20027', 'Brebes', '17/03/2004', 'Wanasari', '20027.png', '20027.png'),
(14592, 'Bamabang', 'Laki-laki', '20028', 'Brebes', '18/03/2004', 'Wanasari', '20028.png', '20028.png'),
(14593, 'Bamabang', 'Laki-laki', '20029', 'Brebes', '19/03/2004', 'Wanasari', '20029.png', '20029.png'),
(14594, 'Bamabang', 'Laki-laki', '20030', 'Brebes', '20/03/2004', 'Wanasari', '20030.png', '20030.png'),
(14595, 'Bamabang', 'Laki-laki', '20031', 'Brebes', '21/03/2004', 'Wanasari', '20031.png', '20031.png'),
(14596, 'Bamabang', 'Laki-laki', '20032', 'Brebes', '22/03/2004', 'Wanasari', '20032.png', '20032.png'),
(14597, 'Bamabang', 'Laki-laki', '20033', 'Brebes', '23/03/2004', 'Wanasari', '20033.png', '20033.png'),
(14598, 'Bamabang', 'Laki-laki', '20034', 'Brebes', '24/03/2004', 'Wanasari', '20034.png', '20034.png'),
(14599, 'Bamabang', 'Laki-laki', '20035', 'Brebes', '25/03/2004', 'Wanasari', '20035.png', '20035.png'),
(14600, 'Bamabang', 'Laki-laki', '20036', 'Brebes', '26/03/2004', 'Wanasari', '20036.png', '20036.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `desain`
--
ALTER TABLE `desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14601;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
