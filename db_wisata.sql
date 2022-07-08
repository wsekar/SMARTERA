-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 05:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `dikelola`
--

CREATE TABLE `dikelola` (
  `id_tempatwisata` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `isi_feedback` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `isi_feedback`) VALUES
(1, 'Terima kasih atas review dan saran yang diberikan');

-- --------------------------------------------------------

--
-- Table structure for table `memberi`
--

CREATE TABLE `memberi` (
  `id_pengelola` int(11) NOT NULL,
  `id_feedback` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mereview`
--

CREATE TABLE `mereview` (
  `id` int(11) NOT NULL,
  `id_tempatwisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id_pengelola` int(11) NOT NULL,
  `nama_pengelola` varchar(50) NOT NULL,
  `posisi_pengelola` varchar(50) NOT NULL,
  `email_pengelola` varchar(50) NOT NULL,
  `password` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id_pengelola`, `nama_pengelola`, `posisi_pengelola`, `email_pengelola`, `password`) VALUES
(1, 'Iby', 'Manager', 'iby@mail.com', '$2y$10$2S8.QQEmrE68lvkhSW7JxOyxaIsI25DkkvwFJ/spiWX8a9FSZEaTO'),
(2, 'Wibi', 'Manager', 'wibi@mail.com', '$2y$10$WXnS6JLYcpV29jhtGHQ2huwsTaEd2uw/p5dgSb1UGWaDNsgUwK12W'),
(3, 'Kino', 'Manager', 'kino@mail.com', '$2y$10$X0lpD0.oB.UYZ7i89iJSs./bcKY7INlBNUEKzFT61MXDbljL0uc7O'),
(4, 'Rayna', 'Manager', 'rayna@gmail.com', '$2y$10$V1uWvaC/2A7dFubHAAvsmuAMtNMTrRZD8ALizOZ/xHhsepGeVoFuy');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelolaan`
--

CREATE TABLE `tb_pengelolaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `domisili` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_tempatwisata` varchar(200) NOT NULL,
  `review` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengelolaan`
--

INSERT INTO `tb_pengelolaan` (`id`, `nama`, `domisili`, `email`, `nama_tempatwisata`, `review`, `saran`) VALUES
(1, 'Karina', 'nganjuk', 'karina@gmail.com', 'pinus nongko ijo', 'tempatnya asri dan udaranya segar', 'tempat sampah kurang banyak'),
(2, 'Raflyna', 'madiun', 'Raflyna004@gmail.com', 'waduk widas', 'udaranya sangat sejuk, banyak pilihan makanan yang dijual', 'saran saya fasilitas bermain anak bisa diperbaiki karena ada beberapa yang rusak, ini bisa membahayakan anak-anak'),
(3, 'Haikal', 'madiun', 'Haikal008@gmail.com', 'watu rumpuk', 'tempatnya bagus, terdapat tanaman yang beragam. banyak spot foto yang bisa digunakan', 'saya menjumpai sampah yang masih dibuang ditempat sembarangan, ini cukup mengganggu kenyamanan banyak pengunjung'),
(4, 'Danny', 'Kediri', 'Danny@gmail.com', 'Taman Kota Caruban', 'Tempatnya nyaman, bayak mainan buat anak-anak jadi lebih suka, banyak juga pedagang yang menjual makanan mulai dari cemilan sampai makanan berat', 'Terdapat sampah yang menumpuk disekitar pedagang, jadi sesekali tercium bau tidak sedap dari sampah yang menumpuk tersebut. saran saya pedagang dihimbau untuk lebih menjaga kebersihan disekitar barang jualannya');

-- --------------------------------------------------------

--
-- Table structure for table `tempatwisata`
--

CREATE TABLE `tempatwisata` (
  `id_tempatwisata` int(11) NOT NULL,
  `nama_tempatwisata` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tentang_tempatwisata` varchar(1024) NOT NULL,
  `gambar_tempatwisata` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempatwisata`
--

INSERT INTO `tempatwisata` (`id_tempatwisata`, `nama_tempatwisata`, `lokasi`, `tentang_tempatwisata`, `gambar_tempatwisata`) VALUES
(1, 'Taman Rekreasi Wisata Umbul', 'Madiun Umbul Square, Umbul, Glonggong, Kec. Dolopo', 'Merupakan taman peninggalan di masa penjajahan Belanda, taman ini memiliki banyak objek menarik.                         Taman Rekreasi Wisata Umbul juga memiliki sumber air belerang yang hangat. Ada kebun binatang mini dan juga beberapa                         satwa di dalamnya. Tempat wisata di Madiun ini cukup populer dan menjadi destinasi hits.                         Salah satu keunikan dari tempat wisata tersebut adalah adanya dua jurang yang mengapit dan diburu untuk dijadikan tempat                         berfoto. Lokasinya berada di Jalan Ngumbul, Golonggong. Liburan bisa semakin seru dan menyenangkan', 'umbul.jpg'),
(3, 'Taman Kota Caruban', 'Jl. Anggur, Lingkungan Dua, Purwosari, Kec. Wonoasri, Madiun, Jawa Timur', 'Menghabiskan waktu bersama keluarga atau bercengkrama dengan teman adalah hal yang sangat menyenangkan.\r\n                        Taman Kota Caruban menjadi salah satu objek wisata yang populer dan banyak dikunjungi warga Madiun.\r\n                        Hal tersebut dikarenakan taman ini cukup luas dan memiliki suasana taman yang asri.\r\n                        Tak heran apabila banyak kalangan muda hingga tua suka berada disini.\r\n                        Lokasi taman kota Caruban ini berada di Jalan Anggur, Purwosari.\r\n                        Anda bisa menikmati banyak fasilitas yang disediakan di taman ini, seperti gazebo dan wahana bermain anak.\r\n                        Disisi lain, banyak juga menjual makanan di pinggir taman ini yang bisa Anda nikmati sembari keliling taman.\r\n                        Tempat yang asri ini bisa menjadi tempat nongkrong yang asik.', 'tamkot_caruban.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dikelola`
--
ALTER TABLE `dikelola`
  ADD KEY `id_tempatwisata` (`id_tempatwisata`),
  ADD KEY `id_pengelola` (`id_pengelola`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `memberi`
--
ALTER TABLE `memberi`
  ADD KEY `id_pengelola` (`id_pengelola`),
  ADD KEY `id_feedback` (`id_feedback`);

--
-- Indexes for table `mereview`
--
ALTER TABLE `mereview`
  ADD KEY `id` (`id`),
  ADD KEY `id_tempatwisata` (`id_tempatwisata`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indexes for table `tb_pengelolaan`
--
ALTER TABLE `tb_pengelolaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD PRIMARY KEY (`id_tempatwisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengelolaan`
--
ALTER TABLE `tb_pengelolaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  MODIFY `id_tempatwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dikelola`
--
ALTER TABLE `dikelola`
  ADD CONSTRAINT `dikelola_ibfk_1` FOREIGN KEY (`id_tempatwisata`) REFERENCES `tempatwisata` (`id_tempatwisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dikelola_ibfk_2` FOREIGN KEY (`id_pengelola`) REFERENCES `pengelola` (`id_pengelola`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memberi`
--
ALTER TABLE `memberi`
  ADD CONSTRAINT `memberi_ibfk_1` FOREIGN KEY (`id_pengelola`) REFERENCES `pengelola` (`id_pengelola`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memberi_ibfk_2` FOREIGN KEY (`id_feedback`) REFERENCES `feedback` (`id_feedback`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mereview`
--
ALTER TABLE `mereview`
  ADD CONSTRAINT `mereview_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_pengelolaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mereview_ibfk_2` FOREIGN KEY (`id_tempatwisata`) REFERENCES `tempatwisata` (`id_tempatwisata`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
