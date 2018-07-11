-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 01:38 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kaoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id_contact_us` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id_contact_us`, `name`, `email`, `phonenumber`, `message`) VALUES
(1, 'Zeezee', 'zeezee@gmail.com', '0213334445', 'Hi'),
(3, 'Admin', 'admin@app.com', '0292838293', 'Dear admin, mohon maaf lahir batin ya!'),
(7, 'Ani', 'anianiani@gmail.com', '12345678', 'Hallo, i am ani. Edited');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(35) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `category` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `category`, `photo`) VALUES
(7, 'Kaos Dakwah Perempuan', '125000.00', 'Wanita', 'kaos_dakwah_pr.jpg'),
(8, 'Kaos Dakwah Pria', '89900.00', 'Pria', 'kaos_dakwah_pria.jpg'),
(9, 'Kaos Dakwah Anak Laki-laki', '77700.00', 'Anak (Laki-Laki)', 'kaos_dakwah_anak_lk.jpg'),
(10, 'Kaos Lengan Panjang Perempuan', '94900.00', 'Anak (Perempuan)', 'kaos_panjang_anak_pr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('pria','wanita') NOT NULL DEFAULT 'pria'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `gender`) VALUES
(2, 'penjualkopi', '86884ef0bec979499066b46443489833', 'pria'),
(3, 'ts', '827ccb0eea8a706c4c34a16891f84e7b', 'wanita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_contact_us`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_contact_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
