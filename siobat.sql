-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 03:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siobat`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_obat`
--

CREATE TABLE `m_obat` (
  `obat_id` int(11) NOT NULL,
  `obat_nama` varchar(128) NOT NULL,
  `pengertian` text NOT NULL,
  `indikasi` text NOT NULL,
  `kontradiksi` text NOT NULL,
  `efek_samping` text NOT NULL,
  `penggunaan` text NOT NULL,
  `perhatian` text NOT NULL,
  `dosis` text NOT NULL,
  `kemasan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_obat`
--

INSERT INTO `m_obat` (`obat_id`, `obat_nama`, `pengertian`, `indikasi`, `kontradiksi`, `efek_samping`, `penggunaan`, `perhatian`, `dosis`, `kemasan`) VALUES
(2, 'Abacavir', '<p>Abacavir adalah obat anti retroviral yang digunakan dalam pengobatan sistemik infeksi virus, terutama untuk mencegah dan mengobati HIV / AIDS. Obat ini termasuk antivirus golongan nucleotide reverse transcriptase inhibitors (NRTIs).</p>', '<p>Kegunaan abacavir adalah untuk hal-hal berikut :</p><ul><li>Obat ini berguna untuk infeksi Human Immunodeficiency Virus (HIV-1), dengan cara dikombinasikan dengan anti retroviral lain,</li></ul>', '<ul><li>Jangan digunakan untuk penderita yang mengalami reaksi hipersensitivitas terhadap&nbsp; abacavir.</li><li>jangan digunakan untuk bayi usia &lt; 3 bulan.</li><li>Tidak boleh digunakan untuk pasien yang memiliki HLA-B*5701, memiliki riwayat hipersensitif, dan menderita kerusakan hati sedang atau berat.</li></ul>', '<p>Berikut adalah beberapa efek samping abacavir yang mungkin terjadi :</p><ul><li>Efek samping yang umum adalah gangguan pada saluran pencernaan seperti mual, muntah, nyeri lambung, flatulen, dan diare.</li><li>Reaksi hipersensitif bisa terjadi pada beberapa pasien. Beberapa gejalanya yang umum misalnya : demam, malaise, mual, diare, dan ruam kulit.</li><li>Reaksi hipersensitif yang lebih fatal bisa terjadi, misalnya kegagalan multi organ dan syok anafilaksis. Hal ini biasanya lebih banyak terjadi pada 6 minggu pertama penggunaan obat.</li><li>Efek samping lain yang harus diwaspadai adalah terjadinya asidosis laktat dan hepatomegali berat dengan steatosis, sindrom pemulihan kekebalan, redistribusi lemak, bahkan infark miokardial.</li></ul>', '<p>-</p>', '<p>Hal-hal yang harus diperhatikan selama menggunakan obat ini, adalah sebagai berikut :</p><ul><li>Pasien yang menderita gangguan hati sedang atau berat dikontraindikasikan menggunakan obat ini. Pasien yang menderita gangguan hati ringan, lakukan penurunan dosis .</li><li>hentikan penggunaan obat ini jika ditemukan gejala asidosis laktat.</li><li>Untuk menghindari resiko penularan postnatal infeksi HIV-1, ibu yang menggunakan abacavir sebaiknya tidak menyusui.</li><li>Obat-obat golongan nucleotide reverse transcriptase inhibitors (NRTIs) harus digunakan secara hati-hati pada pasien hepatitis B dan C kronis, pasien gangguan ginjal, dan saat hamil.</li></ul>', '<p>Abacavir harus digunakan dalam kombinasi dengan obat lain. Berikut adalah dosis abacavir yang lazim digunakan :</p><ul><li><strong>Dosis lazim dewasa untuk infeksi HIV-1</strong></li></ul><p>oral, 2 x sehari 300 mg atau 1 x sehari 600 mg.</p><ul><li><strong>Dosis lazim dewasa untuk occupational atau nonoccupational exposure</strong></li></ul><p>oral, 2 x sehari 300 atau 1 x sehari 600 mg. Lama pengobatan 28 hari.</p><ul><li><strong>Dosis lazim pediatric untuk infeksi HIV-1</strong></li></ul><p>anak usia &gt; 3 bulan : larutan oral, 2 x sehari 8 mg / kg BB atau 1 x sehari 16 mg / kg BB. maksimum 600 mg/hari.</p><p>anak berat badan 14-20 kg : oral, 2 x sehari 150 mg atau 1 x sehari 300 mg.</p><p>anak berat badan &ge; 25 kg : oral, 2 x sehari 300 mg atau 1 x sehari 600 mg.</p>', '-');

-- --------------------------------------------------------

--
-- Table structure for table `m_pengguna`
--

CREATE TABLE `m_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` varchar(1) NOT NULL,
  `gambar` varchar(64) DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pengguna`
--

INSERT INTO `m_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `hak_akses`, `gambar`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_obat`
--
ALTER TABLE `m_obat`
  ADD PRIMARY KEY (`obat_id`);

--
-- Indexes for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_obat`
--
ALTER TABLE `m_obat`
  MODIFY `obat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
