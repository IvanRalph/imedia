-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 11:21 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_imedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `image`, `brand`, `model`, `name`, `price`) VALUES
(1, 'video-balun.jpg', 'N/A', 'VB-2VS', 'Video Balun', 20);

-- --------------------------------------------------------

--
-- Table structure for table `cable`
--

CREATE TABLE `cable` (
  `id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cable`
--

INSERT INTO `cable` (`id`, `image`, `brand`, `model`, `name`, `type`, `price`) VALUES
(1, 'sample.jpg', 'Belden', 'cat5e', 'utp cable', 'utp', 1000),
(4, 'unnamed.png', 'asdasd', 'asdasdsadasd', '', 'NVR', 290999);

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `ctype` varchar(10) NOT NULL,
  `poe` int(2) NOT NULL,
  `specs` varchar(300) NOT NULL,
  `lens` varchar(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `image`, `brand`, `model`, `type`, `ctype`, `poe`, `specs`, `lens`, `price`) VALUES
(1, '1.jpg', 'Hikvision', 'DS-2CD2T42WD-I3/I5/I8', 'Bullet', 'IP', 1, 'l  1/3” Progressive Scan CMOS\r\n\r\nl  Up to 4 megapixel resolution\r\n\r\nl  120dB Wide Dynamic Range\r\n\r\nl  3D DNR\r\n\r\nl  EXIR high performance LEDs\r\n\r\nl  Up to 30/50/80 meters IR range\r\n\r\nl  12V DC±25% & PoE(802.3af Class3)\r\n\r\nl  Support H.264+\r\n\r\nl  IP67', '2.8 mm', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `power`
--

CREATE TABLE `power` (
  `id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `channels` int(2) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `power`
--

INSERT INTO `power` (`id`, `image`, `brand`, `model`, `name`, `channels`, `price`) VALUES
(1, 'sample.jpg', 'null', '12V DC', '12V DC CCTV Power Distribution Box', 18, 1000),
(2, 'png.jpg', 'lkjasdlkj', 'alksjdlkasjd', '', 23, 123123);

-- --------------------------------------------------------

--
-- Table structure for table `recorder`
--

CREATE TABLE `recorder` (
  `id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `poe` int(2) NOT NULL,
  `specs` varchar(500) NOT NULL,
  `ports` int(2) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recorder`
--

INSERT INTO `recorder` (`id`, `image`, `brand`, `model`, `name`, `type`, `poe`, `specs`, `ports`, `price`) VALUES
(1, '1.jpg', 'Hikvision', 'DS-9632/64NI-I8', 'Test', 'NVR', 1, '\r\n        • Third-party network cameras supported\r\n        • Up to 12 Megapixels resolution recording\r\n        • Support 2-ch HDMI, 2-ch VGA, HMDI1 at up to 4K(3840x2160)\r\n        resolution\r\n        • Up to 64 IP cameras can be connected with 320M\r\n        incoming bandwidth\r\n        • Up to 8 SATA interfaces\r\n        • Support HDD hot swap with RAID0,1,5,6,10 storage\r\n        scheme configurable\r\n        •Support various VCA detection alarm and VCA search\r\n        •Support H.265/H.264/MPEG4 vi', 64, 5000),
(6, 'unnamed.png', 'asdaasdasd', 'asdasd', '', 'NVR', 1, 'asdasdasdasdasdasdsd', 23, 123123);

-- --------------------------------------------------------

--
-- Table structure for table `router`
--

CREATE TABLE `router` (
  `id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `wirelessCapability` varchar(3) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `router`
--

INSERT INTO `router` (`id`, `image`, `brand`, `model`, `name`, `wirelessCapability`, `price`) VALUES
(1, 'sample.jpg', 'Linksys', 'X6200 AC750', 'Linksys X6200 AC750 Wi-Fi VDSL Modem Router', 'yes', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `switch`
--

CREATE TABLE `switch` (
  `id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ports` varchar(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `switch`
--

INSERT INTO `switch` (`id`, `image`, `brand`, `model`, `name`, `ports`, `price`) VALUES
(1, 'sample.jpg', 'Linksys', 'SE3024', 'Linksys SE3024 24-Port Gigabit Ethernet Switch', '24', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `wireless`
--

CREATE TABLE `wireless` (
  `id` int(5) NOT NULL,
  `image` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `frequency` varchar(10) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wireless`
--

INSERT INTO `wireless` (`id`, `image`, `brand`, `model`, `name`, `frequency`, `speed`, `price`) VALUES
(1, 'sample.jpg', 'ubiquiti', 'UniFi AP AC Lite', 'UniFi AP AC Lite 802.11ac Dual Radio Access Point', '2.4 GHZ', '300 mbps', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cable`
--
ALTER TABLE `cable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `power`
--
ALTER TABLE `power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recorder`
--
ALTER TABLE `recorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `router`
--
ALTER TABLE `router`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `switch`
--
ALTER TABLE `switch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wireless`
--
ALTER TABLE `wireless`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cable`
--
ALTER TABLE `cable`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `power`
--
ALTER TABLE `power`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `recorder`
--
ALTER TABLE `recorder`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `router`
--
ALTER TABLE `router`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `switch`
--
ALTER TABLE `switch`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wireless`
--
ALTER TABLE `wireless`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
