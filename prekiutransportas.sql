-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 10:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prekiutransportas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumentai`
--

CREATE TABLE `dokumentai` (
  `pavadinimas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `id_dokumentas` int(11) NOT NULL,
  `fk_vairuotojo_sasmens_kodas` int(11) NOT NULL,
  `fk_sutarties_numeris` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_imones_kodas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dokumentai`
--

INSERT INTO `dokumentai` (`pavadinimas`, `data`, `id_dokumentas`, `fk_vairuotojo_sasmens_kodas`, `fk_sutarties_numeris`, `fk_imones_kodas`) VALUES
('ATA', '2016-03-30', 13853, 1000595906, 'BG/6RB/72', 564199773),
('CMR', '2018-09-09', 14781, 1053261423, 'CC/1BQ/22', 311129698),
('CMR', '2018-09-29', 19453, 1318908998, 'RA/7CQ/46', 292501354),
('EKMT', '2017-05-07', 19690, 1982200312, 'DK/1RA/35', 218109923),
('ATA', '2017-12-19', 20092, 1125050058, 'GB/1DB/63', 311129698),
('EKMT', '2015-05-12', 20338, 1863139056, 'RA/7CQ/46', 788981838),
('EKMT', '2015-08-30', 20449, 1110962113, 'BQ/5DB/74', 279747243),
('CMR', '2018-11-13', 20995, 1116281523, 'QK/6GB/55', 292501354),
('EKMT', '2016-05-20', 22299, 2133281547, 'DG/1RQ/76', 292501354),
('ATA', '2019-01-14', 23473, 1095052032, 'RA/4QB/35', 536602579),
('CMR', '2015-06-01', 24920, 1318908998, 'BD/2BA/26', 292501354),
('ATA', '2017-09-15', 25789, 1814736576, 'KD/2AR/65', 514719164),
('EKMT', '2018-09-03', 27003, 1982200312, 'BD/1RB/21', 113460866),
('ATA', '2016-01-30', 27246, 1814736576, 'BB/7KG/27', 514719164),
('CMR', '2017-03-14', 28875, 1982200312, 'RA/7CQ/46', 736829793),
('CMR', '2015-03-11', 29207, 1982200312, 'QK/1CD/67', 736829793),
('CMR', '2018-07-26', 29266, 1197063428, 'CA/8DB/46', 600107229),
('ATA', '2018-04-18', 29989, 1863139056, 'AA/1QK/37', 292501354),
('ATA', '2018-12-15', 30029, 1863139056, 'DA/1KQ/14', 292501354),
('EKMT', '2016-01-03', 30875, 1197063428, 'BK/2GB/62', 346372870),
('EKMT', '2018-03-04', 31863, 1125050058, 'AA/1QK/37', 113460866),
('CMR', '2015-10-06', 34543, 1502355935, 'RG/1DB/84', 564199773),
('ATA', '2019-01-04', 35462, 1844606968, 'BQ/5DB/74', 564199773),
('CMR', '2016-12-21', 38063, 1502355935, 'AA/2BC/71', 788981838),
('CMR', '2015-12-10', 38341, 2122612122, 'AA/2BC/71', 536602579),
('CMR', '2016-07-30', 39379, 1923611006, 'CC/1BQ/22', 292501354),
('EKMT', '2016-05-08', 39545, 1125050058, 'RG/1DB/84', 347112075),
('CMR', '2018-04-12', 42588, 1318908998, 'BB/3DQ/38', 600107229),
('CMR', '2016-07-18', 42979, 1197063428, 'KQ/3RK/62', 206233295),
('EKMT', '2015-08-30', 45723, 1863139056, 'KG/8KR/71', 346372870),
('CMR', '2016-10-18', 47260, 1116281523, 'DA/1KQ/14', 347112075),
('CMR', '2018-08-13', 48340, 1270163337, 'BG/6RB/72', 564199773),
('EKMT', '2015-10-09', 48528, 1568142566, 'GD/4DG/45', 785822238),
('ATA', '2015-06-29', 49264, 1197063428, 'KG/4KA/77', 218109923),
('CMR', '2017-04-09', 49650, 1502355935, 'CC/1BQ/22', 600107229),
('EKMT', '2015-05-01', 50501, 1125050058, 'RG/1DB/84', 600107229),
('CMR', '2017-10-26', 50666, 1923611006, 'BQ/5RG/55', 514719164),
('EKMT', '2016-03-01', 51493, 1844606968, 'DA/1KQ/14', 736829793),
('CMR', '2015-08-24', 52282, 1408654336, 'BB/3DQ/38', 600107229),
('ATA', '2016-08-21', 53993, 1270163337, 'GB/1DB/63', 311129698),
('ATA', '2015-04-22', 54415, 1519754253, 'BD/1RB/21', 623451860),
('CMR', '2016-05-01', 54417, 1053261423, 'QR/5QD/42', 105844721),
('ATA', '2018-08-26', 58436, 1147978423, 'BK/2GB/62', 279747243),
('EKMT', '2016-05-17', 61051, 1318908998, 'DA/1KQ/14', 501591007),
('ATA', '2018-06-23', 61120, 1095052032, 'CA/8DB/46', 624865129),
('EKMT', '2016-11-01', 62479, 1270163337, 'BB/3DQ/38', 536602579),
('CMR', '2016-05-13', 62825, 1982200312, 'BQ/5RG/55', 123909634),
('CMR', '2017-08-08', 64414, 2122612122, 'GG/8RA/68', 788981838),
('CMR', '2016-08-18', 65980, 1159875633, 'AA/1QK/37', 307048350),
('EKMT', '2016-05-17', 66461, 1923611006, 'BQ/6CB/53', 346372870),
('ATA', '2015-07-05', 67989, 1159875633, 'RQ/5BA/32', 279747243),
('EKMT', '2016-09-20', 70268, 1110962113, 'BG/6RB/72', 311129698),
('EKMT', '2016-11-07', 70530, 1923611006, 'QK/1CD/67', 413552080),
('CMR', '2016-08-05', 71999, 1844606968, 'RA/4QB/35', 105844721),
('CMR', '2015-12-21', 75191, 1270163337, 'RQ/5BA/32', 501591007),
('CMR', '2017-06-03', 76063, 1197063428, 'GG/8RA/68', 307048350),
('CMR', '2016-10-21', 76076, 1395384579, 'DG/1RQ/76', 780950775),
('ATA', '2018-12-29', 77620, 1000595906, 'KD/2AR/65', 600107229),
('CMR', '2017-09-07', 77960, 2122612122, 'BB/7KG/27', 218109923),
('ATA', '2018-10-16', 78322, 1197063428, 'KD/2AR/65', 413552080),
('CMR', '2016-04-22', 78357, 1923611006, 'RC/8CQ/21', 292501354),
('ATA', '2016-09-22', 79385, 1844606968, 'KD/2AR/65', 785822238),
('EKMT', '2016-09-14', 80154, 1095052032, 'BB/8KA/72', 624865129),
('EKMT', '2016-11-02', 80907, 1116281523, 'BG/6RB/72', 501591007),
('EKMT', '2017-05-08', 81419, 1982200312, 'GB/3QQ/18', 413552080),
('CMR', '2017-03-17', 82481, 1116281523, 'GG/8RA/68', 788981838),
('ATA', '2015-09-08', 82550, 1053261423, 'CA/8DB/46', 780950775),
('ATA', '2016-07-05', 82776, 2133281547, 'DK/1RA/35', 624865129),
('ATA', '2016-03-06', 84402, 1270163337, 'QK/1CD/67', 218109923),
('ATA', '2017-01-04', 86380, 2024576912, 'BR/5CC/73', 311129698),
('EKMT', '2017-04-08', 87610, 1814736576, 'KG/4KA/77', 346372870),
('ATA', '2017-06-30', 87717, 1053261423, 'KG/4KA/77', 623451860),
('EKMT', '2017-12-09', 89405, 1053261423, 'RA/7CQ/46', 536602579),
('ATA', '2017-05-07', 89501, 1270163337, 'QR/5QD/42', 292501354),
('EKMT', '2017-11-13', 91554, 1095052032, 'RG/1DB/84', 307048350),
('EKMT', '2016-08-12', 91697, 1147978423, 'BR/5CC/73', 736829793),
('EKMT', '2016-04-03', 93106, 1000595906, 'BK/2GB/62', 346372870),
('ATA', '2018-08-13', 95887, 2122612122, 'BQ/5DB/74', 780950775),
('ATA', '2018-09-23', 95964, 1568142566, 'BQ/6CB/53', 736829793),
('CMR', '2017-03-12', 99765, 1408654336, 'KQ/3RK/62', 113460866);

-- --------------------------------------------------------

--
-- Table structure for table `imones`
--

CREATE TABLE `imones` (
  `pavadinimas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kontakto_vardas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kontakto_pavarde` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issimokejimas` tinyint(1) DEFAULT NULL,
  `imones_kodas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `imones`
--

INSERT INTO `imones` (`pavadinimas`, `kontakto_vardas`, `kontakto_pavarde`, `issimokejimas`, `imones_kodas`) VALUES
('Wintheiser Inc', 'Julienne', 'Sayle', 1, 105844721),
('West Inc', 'Gwyneth', 'Picton', 0, 113460866),
('Bechtelar Inc', 'Marya', 'Laxon', 1, 123909634),
('Zemlak and Sons', 'Chucho', 'Durant', 1, 206233295),
('Goyette, Walsh and Kutch', 'Elenore', 'Bushell', 1, 218109923),
('Mraz Inc', 'Cherilynn', 'Moreno', 1, 235134879),
('Breitenberg-Padberg', 'Jeniece', 'Coulsen', NULL, 279747243),
('O\'Keefe-Roob', 'Josi', 'Gilford', 1, 292501354),
('Lebsack-Hansen', 'Bertina', 'Wones', NULL, 307048350),
('Lakin-Dibbert', 'Eleni', 'Cosin', 1, 311129698),
('Becker-Lakin', 'Hubie', 'Tidey', 1, 346372870),
('Balistreri-Prosacco', 'Frederica', 'Welband', NULL, 347112075),
('Stokes, Gerhold and Huels', 'Kendall', 'Shackleford', 1, 353046456),
('Haley-Goodwin', 'Dorena', 'Phillipp', 0, 413552080),
('Stiedemann, Braun and Becker', 'Lolly', 'Hover', 1, 501591007),
('Powlowski-Conroy', 'Abby', 'Edmonstone', 1, 514719164),
('Gerlach-Adams', 'Nikoletta', 'Blouet', NULL, 536602579),
('Brekke Inc', 'Alyss', 'De Malchar', NULL, 564199773),
('White LLC', 'Berget', 'Capoun', 0, 600107229),
('Morissette, Treutel and Hermiston', 'Hodge', 'Yve', 1, 623451860),
('Goodwin, Cruickshank and Barton', 'Julita', 'Shoorbrooke', 0, 624865129),
('Grady-Friesen', 'Ulrick', 'Gepson', 0, 736829793),
('Pollich, Harber and Schoen', 'Richie', 'Robez', 1, 780950775),
('Rogahn, Ritchie and Spencer', 'Valida', 'Fellowes', 1, 785822238),
('Stehr Group', 'Dorthy', 'Czajkowska', NULL, 788981838),
('Mohr-Hettinger', 'Alanah', 'Truran', 1, 793735922),
('Herzog-Mohr', 'Homer', 'Langham', 1, 819768383),
('Prohaska-Macejkovic', 'Merna', 'Mace', NULL, 907606203),
('Hagenes, Carter and Morar', 'Stephanie', 'Hayler', 0, 973152104),
('Mraz, Douglas and Konopelski', 'Pen', 'Betancourt', 0, 994206155);

-- --------------------------------------------------------

--
-- Table structure for table `kroviniai`
--

CREATE TABLE `kroviniai` (
  `pavadinimas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kiekis` float NOT NULL,
  `id_krovinys` int(11) NOT NULL,
  `fk_imones_kodas` int(11) NOT NULL,
  `fk_sunkvezimio_numeriai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kroviniai`
--

INSERT INTO `kroviniai` (`pavadinimas`, `tipas`, `kiekis`, `id_krovinys`, `fk_imones_kodas`, `fk_sunkvezimio_numeriai`) VALUES
('Baldai', 'BigBag', 19, 1, 218109923, 'DKP 463'),
('Televizoriai', 'Paletės', 20, 2, 624865129, 'DIO 336'),
('Plokštės', 'Laisvai', 2, 3, 536602579, 'EHN 626'),
('Kava', 'Laisvai', 6, 4, 346372870, 'FLN 362'),
('Plokštės', 'BigBag', 6, 5, 736829793, 'EKR 256'),
('Baldai', 'Paletės', 11, 6, 292501354, 'ALP 513'),
('Televizoriai', 'Paletės', 14, 7, 353046456, 'FGR 252'),
('Metalas', 'Paletės', 12, 8, 292501354, 'EGR 441'),
('Medis', 'BigBag', 1, 9, 564199773, 'ALM 431'),
('Baldai', 'Paletės', 12, 10, 413552080, 'FKS 116'),
('Padangos', 'Paletės', 20, 11, 785822238, 'AKM 441'),
('Kava', 'BigBag', 7, 12, 780950775, 'EIM 151'),
('Medis', 'Kartonai', 24, 13, 235134879, 'AKM 441'),
('Kava', 'Paletės', 10, 14, 105844721, 'BKP 661'),
('Medis', 'Paletės', 9, 15, 218109923, 'DGO 613'),
('Medis', 'Paletės', 19, 16, 292501354, 'DIM 243'),
('Plokštės', 'Kartonai', 20, 17, 623451860, 'DKS 515'),
('Plokštės', 'BigBag', 12, 18, 413552080, 'AJM 532'),
('Maistas', 'BigBag', 12, 19, 564199773, 'AKM 441'),
('Plokštės', 'BigBag', 21, 20, 564199773, 'CKO 222'),
('Medis', 'BigBag', 24, 21, 311129698, 'AJM 123'),
('Padangos', 'Laisvai', 9, 22, 780950775, 'EKR 256'),
('Padangos', 'BigBag', 7, 23, 311129698, 'FLN 362'),
('Televizoriai', 'Kartonai', 8, 24, 279747243, 'DKS 515'),
('Kava', 'BigBag', 20, 25, 514719164, 'AJM 532'),
('Baldai', 'Kartonai', 17, 26, 353046456, 'CIS 416'),
('Baldai', 'BigBag', 13, 27, 353046456, 'ALN 261'),
('Anglis', 'Kartonai', 22, 28, 292501354, 'ALN 261'),
('Anglis', 'Paletės', 13, 29, 353046456, 'DIO 336'),
('Anglis', 'Laisvai', 21, 30, 123909634, 'FIR 425'),
('Medis', 'Kartonai', 21, 31, 736829793, 'BJP 124'),
('Baldai', 'Laisvai', 24, 32, 413552080, 'ALM 431'),
('Maistas', 'Kartonai', 22, 33, 346372870, 'DIM 243'),
('Maistas', 'Kartonai', 13, 34, 113460866, 'ALN 261'),
('Baldai', 'Kartonai', 2, 35, 624865129, 'FGR 252'),
('Metalas', 'BigBag', 21, 36, 564199773, 'EIM 151'),
('Baldai', 'Paletės', 6, 37, 514719164, 'EIM 151'),
('Kava', 'Paletės', 21, 38, 623451860, 'FKS 116'),
('Padangos', 'Paletės', 23, 39, 123909634, 'AJM 532'),
('Medis', 'Kartonai', 20, 40, 413552080, 'ALP 513'),
('Televizoriai', 'Kartonai', 1, 41, 311129698, 'EGR 441'),
('Plokštės', 'Kartonai', 2, 42, 105844721, 'CKO 222'),
('Metalas', 'Laisvai', 2, 43, 501591007, 'DIM 243'),
('Maistas', 'Laisvai', 12, 44, 347112075, 'AJM 532'),
('Maistas', 'Laisvai', 14, 45, 501591007, 'DIO 336'),
('Anglis', 'Laisvai', 5, 46, 624865129, 'EKR 256'),
('Televizoriai', 'Kartonai', 11, 47, 600107229, 'DKS 515'),
('Anglis', 'BigBag', 6, 48, 105844721, 'EKR 256'),
('Plokštės', 'BigBag', 9, 49, 346372870, 'DKS 515'),
('Anglis', 'BigBag', 1, 50, 780950775, 'EIM 151'),
('Padangos', 'Laisvai', 8, 51, 624865129, 'DKP 463'),
('Kava', 'BigBag', 19, 52, 123909634, 'FIR 425'),
('Baldai', 'Kartonai', 23, 53, 218109923, 'FKS 116'),
('Kava', 'Kartonai', 19, 54, 788981838, 'DKP 463'),
('Medis', 'Kartonai', 5, 55, 353046456, 'FKS 116'),
('Kava', 'Kartonai', 24, 56, 292501354, 'EIM 151'),
('Medis', 'Paletės', 4, 57, 113460866, 'BJP 124'),
('Metalas', 'Kartonai', 16, 58, 413552080, 'BJP 124'),
('Padangos', 'Kartonai', 2, 59, 123909634, 'EGR 441'),
('Televizoriai', 'Laisvai', 18, 60, 785822238, 'FLN 362'),
('Plokštės', 'BigBag', 21, 61, 292501354, 'DKP 463'),
('Metalas', 'Laisvai', 5, 62, 113460866, 'AJM 123'),
('Medis', 'BigBag', 10, 63, 413552080, 'EHN 626'),
('Baldai', 'Laisvai', 19, 64, 292501354, 'DIM 243'),
('Plokštės', 'Paletės', 12, 65, 346372870, 'ALS 554'),
('Medis', 'BigBag', 18, 66, 624865129, 'ALP 513'),
('Metalas', 'Paletės', 3, 67, 514719164, 'ALM 431'),
('Televizoriai', 'Paletės', 1, 68, 307048350, 'AKM 441'),
('Medis', 'Kartonai', 13, 69, 307048350, 'DIM 243'),
('Kava', 'Kartonai', 13, 70, 353046456, 'CKO 222'),
('Maistas', 'Kartonai', 3, 71, 623451860, 'BJP 124'),
('Baldai', 'Kartonai', 6, 72, 501591007, 'ALP 513'),
('Medis', 'Paletės', 14, 73, 600107229, 'FLN 362'),
('Medis', 'Kartonai', 12, 74, 113460866, 'ALN 261'),
('Anglis', 'BigBag', 21, 75, 788981838, 'ALN 261'),
('Medis', 'Kartonai', 4, 76, 279747243, 'CKO 222'),
('Padangos', 'Kartonai', 3, 77, 600107229, 'DIM 243'),
('Medis', 'Laisvai', 17, 78, 600107229, 'BLP 526'),
('Padangos', 'Laisvai', 2, 79, 623451860, 'EIM 151'),
('Medis', 'Laisvai', 5, 80, 346372870, 'DIM 243'),
('Medis', 'BigBag', 4, 81, 235134879, 'FLN 362'),
('Medis', 'BigBag', 24, 82, 788981838, 'DIM 243'),
('Medis', 'Kartonai', 5, 83, 113460866, 'DKS 515'),
('Kava', 'Laisvai', 11, 84, 235134879, 'EHN 626'),
('Baldai', 'Kartonai', 1, 85, 780950775, 'EKR 256'),
('Televizoriai', 'BigBag', 9, 86, 536602579, 'ALM 431'),
('Baldai', 'BigBag', 6, 87, 113460866, 'EIM 151'),
('Baldai', 'Laisvai', 21, 88, 600107229, 'AJM 123'),
('Anglis', 'Paletės', 13, 89, 785822238, 'CIS 416'),
('Maistas', 'Laisvai', 14, 90, 105844721, 'DIO 336'),
('Kava', 'BigBag', 11, 91, 600107229, 'DIO 336'),
('Medis', 'Laisvai', 17, 92, 123909634, 'ALS 554'),
('Kava', 'Kartonai', 9, 93, 307048350, 'ALS 554'),
('Metalas', 'BigBag', 15, 94, 353046456, 'FIR 425'),
('Medis', 'Paletės', 10, 95, 105844721, 'BJP 124'),
('Medis', 'BigBag', 20, 96, 123909634, 'AJM 532'),
('Kava', 'Laisvai', 24, 97, 788981838, 'DKS 515'),
('Baldai', 'Paletės', 8, 98, 353046456, 'BKP 661'),
('Metalas', 'Kartonai', 23, 99, 279747243, 'CKO 222'),
('Medis', 'BigBag', 9, 100, 105844721, 'AJM 123');

-- --------------------------------------------------------

--
-- Table structure for table `mokejimai`
--

CREATE TABLE `mokejimai` (
  `data` date NOT NULL,
  `suma` float NOT NULL,
  `id_mokejimas` int(11) NOT NULL,
  `fk_imones_kodas` int(11) NOT NULL,
  `fk_saskaitos_numeris` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mokejimai`
--

INSERT INTO `mokejimai` (`data`, `suma`, `id_mokejimas`, `fk_imones_kodas`, `fk_saskaitos_numeris`) VALUES
('2016-04-26', 1635, 1, 235134879, '52-428-5025'),
('2018-02-08', 1075, 2, 600107229, '88-521-0777'),
('2017-04-26', 2424, 3, 413552080, '55-334-5840'),
('2015-11-15', 1693, 4, 624865129, '08-078-5878'),
('2017-02-21', 520, 5, 788981838, '25-139-4365'),
('2018-07-09', 928, 6, 624865129, '20-698-9171'),
('2018-12-28', 834, 7, 780950775, '94-430-0572'),
('2016-04-10', 2246, 8, 292501354, '15-252-2055'),
('2017-05-29', 490, 9, 113460866, '94-430-0572'),
('2018-08-12', 2671, 10, 514719164, '28-077-1234'),
('2015-06-03', 2593, 11, 514719164, '08-078-5878'),
('2016-05-08', 758, 12, 346372870, '28-077-1234'),
('2018-12-28', 1390, 13, 307048350, '24-334-1439'),
('2016-10-19', 2508, 14, 353046456, '88-521-0777'),
('2018-10-15', 2409, 15, 736829793, '57-839-0152'),
('2018-10-06', 540, 16, 235134879, '34-975-7693'),
('2016-10-14', 1687, 17, 206233295, '94-430-0572'),
('2017-07-11', 1212, 18, 346372870, '89-002-9549'),
('2016-12-05', 1161, 19, 346372870, '08-078-5878'),
('2017-09-24', 2506, 20, 788981838, '39-238-3795'),
('2015-06-01', 1439, 21, 307048350, '46-029-9911'),
('2017-12-21', 349, 22, 353046456, '33-579-6085'),
('2017-10-01', 2675, 23, 347112075, '24-334-1439'),
('2017-06-01', 512, 24, 736829793, '28-883-7847'),
('2018-09-29', 1528, 25, 600107229, '94-878-2117'),
('2015-04-15', 1811, 26, 218109923, '49-706-2600'),
('2018-09-13', 2336, 27, 235134879, '57-839-0152'),
('2017-07-12', 1570, 28, 113460866, '94-430-0572');

-- --------------------------------------------------------

--
-- Table structure for table `saskaitos`
--

CREATE TABLE `saskaitos` (
  `numeris` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isstatymo_data` date NOT NULL,
  `suma` float NOT NULL,
  `terminas` date NOT NULL,
  `fk_sutarties_numeris` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `saskaitos`
--

INSERT INTO `saskaitos` (`numeris`, `isstatymo_data`, `suma`, `terminas`, `fk_sutarties_numeris`) VALUES
('00-280-8999', '2017-11-21', 2202, '2018-02-21', 'RA/4QB/35'),
('02-129-1307', '2016-11-17', 1670, '2017-02-17', 'BD/1RB/21'),
('08-078-5878', '2018-03-30', 226, '2018-06-30', 'KQ/3RK/62'),
('10-353-0765', '2018-12-07', 379, '2019-03-07', 'BB/3DQ/38'),
('15-252-2055', '2017-06-09', 2866, '2017-09-09', 'GG/8RA/68'),
('15-395-5450', '2017-03-01', 1759, '2017-06-01', 'BA/7KD/84'),
('19-632-7080', '2016-09-30', 506, '2016-12-30', 'DK/3QR/73'),
('20-698-9171', '2018-03-29', 606, '2018-06-29', 'BB/7KG/27'),
('21-828-3106', '2017-01-28', 2832, '2017-04-28', 'QK/6GB/55'),
('23-951-0736', '2015-06-11', 1141, '2015-09-11', 'DA/1KQ/14'),
('24-334-1439', '2016-04-29', 619, '2016-07-29', 'BK/2GB/62'),
('24-383-7563', '2016-11-26', 2146, '2017-02-26', 'RA/4QB/35'),
('25-139-4365', '2015-03-13', 987, '2015-06-13', 'AA/2BC/71'),
('28-077-1234', '2017-02-13', 835, '2017-05-13', 'GG/8RA/68'),
('28-883-7847', '2015-07-30', 1300, '2015-10-30', 'QK/1CD/67'),
('33-579-6085', '2016-09-11', 826, '2016-12-11', 'QK/1CD/67'),
('34-581-4460', '2018-04-11', 1569, '2018-07-11', 'BQ/6CB/53'),
('34-975-7693', '2015-12-20', 645, '2016-03-20', 'RQ/5BA/32'),
('37-395-6271', '2016-10-28', 2553, '2017-01-28', 'KG/4KA/77'),
('39-238-3795', '2015-12-23', 1313, '2016-03-23', 'RG/1DB/84'),
('41-600-9202', '2016-02-12', 1954, '2016-05-12', 'GB/4AR/35'),
('45-908-8798', '2017-08-19', 737, '2017-11-19', 'BR/5CC/73'),
('46-029-9911', '2016-12-04', 2323, '2017-03-04', 'RA/4QB/35'),
('49-706-2600', '2018-01-16', 2899, '2018-04-16', 'GD/4DG/45'),
('51-810-2144', '2018-09-07', 2581, '2018-12-07', 'BD/2BA/26'),
('52-273-5931', '2016-10-18', 1261, '2017-01-18', 'KG/4KA/77'),
('52-428-5025', '2017-07-28', 1572, '2017-10-28', 'RA/4QB/35'),
('54-692-5609', '2016-10-15', 1959, '2017-01-15', 'QK/6GB/55'),
('55-334-5840', '2015-05-21', 300, '2015-08-21', 'QK/6GB/55'),
('56-831-8277', '2015-06-16', 2497, '2015-09-16', 'QK/1CD/67'),
('57-839-0152', '2018-06-08', 393, '2018-09-08', 'RQ/5BA/32'),
('59-259-1325', '2018-01-29', 1653, '2018-04-29', 'CC/1BQ/22'),
('59-481-9933', '2017-09-21', 250, '2017-12-21', 'GB/4AR/35'),
('62-305-2932', '2017-04-11', 1275, '2017-07-11', 'RG/1DB/84'),
('65-561-2744', '2018-10-28', 2229, '2019-01-28', 'QR/5QD/42'),
('68-490-2000', '2016-12-11', 1774, '2017-03-11', 'BK/2GB/62'),
('70-727-0540', '2018-08-15', 2742, '2018-11-15', 'KQ/3RK/62'),
('71-461-8195', '2018-01-28', 602, '2018-04-28', 'BD/2BA/26'),
('73-411-1247', '2016-08-04', 859, '2016-11-04', 'KG/8KR/71'),
('78-657-8015', '2018-10-04', 2790, '2019-01-04', 'BD/2BA/26'),
('79-161-5354', '2015-10-09', 1679, '2016-01-09', 'GB/3QQ/18'),
('79-802-0804', '2015-06-24', 2064, '2015-09-24', 'BR/5CC/73'),
('79-812-6916', '2017-05-10', 745, '2017-08-10', 'BD/2BA/26'),
('84-199-0737', '2017-09-21', 2819, '2017-12-21', 'CA/8DB/46'),
('85-561-6530', '2015-03-21', 1155, '2015-06-21', 'GB/3QQ/18'),
('88-001-1521', '2015-08-30', 1809, '2015-11-30', 'BA/7KD/84'),
('88-521-0777', '2017-05-25', 1674, '2017-08-25', 'CC/1BQ/22'),
('89-002-9549', '2016-09-05', 1990, '2016-12-05', 'BG/6RB/72'),
('94-430-0572', '2015-04-29', 1058, '2015-07-29', 'QR/5QD/42'),
('94-878-2117', '2015-10-29', 1557, '2016-01-29', 'BB/3DQ/38');

-- --------------------------------------------------------

--
-- Table structure for table `sunkvezimiai`
--

CREATE TABLE `sunkvezimiai` (
  `marke` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeriai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pagaminimo_data` date NOT NULL,
  `registravimo_data` date NOT NULL,
  `rida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sunkvezimiai`
--

INSERT INTO `sunkvezimiai` (`marke`, `modelis`, `numeriai`, `pagaminimo_data`, `registravimo_data`, `rida`) VALUES
('Volvo', 'FH16', 'AJM 123', '2014-03-30', '2014-10-30', 399850),
('Volvo', 'FH', 'AJM 532', '2011-08-15', '2012-03-15', 559790),
('Volvo', 'FH16', 'AKM 441', '2013-12-25', '2014-07-25', 399850),
('Volvo', 'FH16', 'ALM 431', '2015-05-06', '2015-12-06', 319880),
('Volvo', 'FH', 'ALN 261', '2014-07-12', '2015-02-12', 319880),
('Volvo', 'FH', 'ALP 513', '2017-09-10', '2018-04-10', 79970),
('Volvo', 'FH16', 'ALS 554', '2016-07-31', '2017-02-28', 159940),
('Mercedes', 'Actros', 'BJP 124', '2016-06-18', '2017-01-18', 159940),
('Daff', 'XF105', 'BKP 661', '2012-05-02', '2012-12-02', 559790),
('Daff', 'XF105', 'BLP 526', '2017-08-02', '2018-03-02', 79970),
('Volvo', 'FH16', 'CIS 416', '2018-10-29', '2018-12-29', 79970),
('Mercedes', 'Arocs', 'CKO 222', '2012-08-27', '2013-03-27', 479820),
('Volvo', 'FH', 'DGO 613', '2017-12-12', '2018-07-12', 79970),
('Daff', 'XF105', 'DIM 243', '2010-01-13', '2010-08-13', 719730),
('Mercedes', 'Arocs', 'DIO 336', '2012-11-21', '2013-06-21', 479820),
('Mercedes', 'Arocs', 'DKP 463', '2018-06-11', '2018-08-11', 79970),
('Daff', 'XF105', 'DKS 515', '2012-08-11', '2013-03-11', 479820),
('Volvo', 'FH16', 'EGR 441', '2012-01-18', '2012-08-18', 559790),
('Mercedes', 'Actros', 'EHN 626', '2017-05-31', '2017-12-31', 159940),
('Mercedes', 'Arocs', 'EIM 151', '2013-08-11', '2014-03-11', 399850),
('Mercedes', 'Arocs', 'EKR 256', '2018-01-26', '2018-03-26', 79970),
('Volvo', 'FH', 'FGR 252', '2014-08-20', '2015-03-20', 319880),
('Mercedes', 'Actros', 'FIR 425', '2010-02-17', '2010-09-17', 719730),
('Mercedes', 'Arocs', 'FKS 116', '2011-06-19', '2012-01-19', 559790),
('Mercedes', 'Arocs', 'FLN 362', '2014-04-15', '2014-11-15', 399850);

-- --------------------------------------------------------

--
-- Table structure for table `sunkvezimio_iranga`
--

CREATE TABLE `sunkvezimio_iranga` (
  `pavadinimas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pinigu_kiekis` float NOT NULL,
  `id_sunkvezimio_iranga` int(11) NOT NULL,
  `fk_sunkvezimio_numeriai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sunkvezimio_iranga`
--

INSERT INTO `sunkvezimio_iranga` (`pavadinimas`, `salis`, `pinigu_kiekis`, `id_sunkvezimio_iranga`, `fk_sunkvezimio_numeriai`) VALUES
('Myto', 'Slovakija', 87.2, 1, 'EHN 626'),
('Tol Collect', 'Voketija', 65.2, 2, 'FLN 362'),
('Satellic', 'Belgija', 133.6, 3, 'DKS 515'),
('Myto', 'Slovakija', 243.4, 4, 'ALN 261'),
('Satellic', 'Belgija', 80.4, 5, 'BLP 526'),
('Satellic', 'Belgija', 67.1, 6, 'DKP 463'),
('Myto', 'Slovakija', 141.2, 7, 'AJM 123'),
('Satellic', 'Belgija', 80.2, 8, 'EIM 151'),
('Satellic', 'Belgija', 299.9, 9, 'EIM 151'),
('Satellic', 'Belgija', 1.8, 10, 'EHN 626'),
('Tol Collect', 'Voketija', 54.6, 11, 'DKS 515'),
('Viatol', 'Lenkija', 46, 12, 'EGR 441'),
('Myto', 'Slovakija', 121.7, 13, 'DKS 515'),
('Tol Collect', 'Voketija', 106.9, 14, 'EGR 441'),
('Viatol', 'Lenkija', 223.7, 15, 'EGR 441'),
('Satellic', 'Belgija', 246.1, 16, 'DIM 243'),
('Viatol', 'Lenkija', 284.7, 17, 'EHN 626'),
('Myto', 'Slovakija', 54.6, 18, 'ALM 431'),
('Viatol', 'Lenkija', 45, 19, 'FKS 116'),
('Viatol', 'Lenkija', 108.1, 20, 'FGR 252'),
('Viatol', 'Lenkija', 41.4, 21, 'ALN 261'),
('Tol Collect', 'Voketija', 71, 22, 'EHN 626'),
('Viatol', 'Lenkija', 249.9, 23, 'AJM 532'),
('Tol Collect', 'Voketija', 72.8, 24, 'EHN 626'),
('Satellic', 'Belgija', 212.2, 25, 'DKS 515'),
('Myto', 'Slovakija', 127.1, 26, 'EHN 626'),
('Viatol', 'Lenkija', 26.8, 27, 'FLN 362'),
('Satellic', 'Belgija', 76.7, 28, 'FGR 252'),
('Viatol', 'Lenkija', 179, 29, 'FIR 425'),
('Satellic', 'Belgija', 105.9, 30, 'ALS 554'),
('Tol Collect', 'Voketija', 164.2, 31, 'ALP 513'),
('Tol Collect', 'Voketija', 185.9, 32, 'FGR 252'),
('Satellic', 'Belgija', 15.9, 33, 'FLN 362'),
('Viatol', 'Lenkija', 197.1, 34, 'ALM 431'),
('Myto', 'Slovakija', 24.2, 35, 'BKP 661'),
('Satellic', 'Belgija', 295.9, 36, 'BLP 526'),
('Viatol', 'Lenkija', 213.4, 37, 'FLN 362'),
('Viatol', 'Lenkija', 62.9, 38, 'CIS 416'),
('Viatol', 'Lenkija', 4.6, 39, 'DIO 336'),
('Viatol', 'Lenkija', 14.1, 40, 'BLP 526'),
('Tol Collect', 'Voketija', 54.6, 41, 'FIR 425'),
('Satellic', 'Belgija', 27.2, 42, 'EHN 626'),
('Viatol', 'Lenkija', 210.1, 43, 'FLN 362'),
('Satellic', 'Belgija', 249.6, 44, 'FIR 425'),
('Viatol', 'Lenkija', 146.7, 45, 'DGO 613'),
('Satellic', 'Belgija', 31.1, 46, 'AJM 532'),
('Myto', 'Slovakija', 76.8, 47, 'DKP 463'),
('Myto', 'Slovakija', 189.2, 48, 'FKS 116'),
('Myto', 'Slovakija', 169.2, 49, 'EHN 626'),
('Satellic', 'Belgija', 138.3, 50, 'BLP 526');

-- --------------------------------------------------------

--
-- Table structure for table `sunkvezimio_vairuotojai`
--

CREATE TABLE `sunkvezimio_vairuotojai` (
  `nuo_data` date NOT NULL,
  `iki_data` date DEFAULT NULL,
  `id_sunkvezimio_vairuotojas` int(11) NOT NULL,
  `fk_sunkvezimio_numeriai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_vairuotojo_asmens_kodas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sunkvezimio_vairuotojai`
--

INSERT INTO `sunkvezimio_vairuotojai` (`nuo_data`, `iki_data`, `id_sunkvezimio_vairuotojas`, `fk_sunkvezimio_numeriai`, `fk_vairuotojo_asmens_kodas`) VALUES
('2018-10-02', NULL, 1, 'AJM 123', 1000595906),
('2017-05-15', '2017-12-15', 2, 'AJM 532', 1053261423),
('2016-06-27', '2017-01-27', 3, 'AKM 441', 1095052032),
('2018-12-09', NULL, 4, 'ALM 431', 1110962113),
('2017-12-10', '2018-07-10', 5, 'ALN 261', 1116281523),
('2018-06-25', NULL, 6, 'ALP 513', 1125050058),
('2016-07-12', '2017-02-12', 7, 'ALS 554', 1147978423),
('2018-09-14', NULL, 8, 'BJP 124', 1159875633),
('2017-02-14', '2017-09-14', 9, 'BKP 661', 1197063428),
('2018-05-28', NULL, 10, 'BLP 526', 1270163337),
('2017-09-27', '2018-04-27', 11, 'CIS 416', 1318908998),
('2017-01-26', '2017-08-26', 12, 'CKO 222', 1395384579),
('2018-11-19', NULL, 13, 'DGO 613', 1408654336),
('2018-07-02', NULL, 14, 'DIM 243', 1502355935),
('2017-10-10', '2018-05-10', 15, 'DIO 336', 1519754253),
('2018-06-20', NULL, 16, 'DKP 463', 1568142566),
('2016-09-02', '2017-04-02', 17, 'DKS 515', 1814736576),
('2017-11-23', '2018-06-23', 18, 'EGR 441', 1844606968),
('2017-05-29', '2017-12-29', 19, 'EHN 626', 1863139056),
('2018-09-26', NULL, 20, 'EIM 151', 1923611006),
('2018-06-07', NULL, 21, 'EKR 256', 1982200312),
('2018-06-02', NULL, 22, 'FGR 252', 2018738862),
('2016-04-25', '2016-11-25', 23, 'FIR 425', 2024576912),
('2017-11-27', '2018-06-27', 24, 'FKS 116', 2122612122),
('2018-12-09', NULL, 25, 'FLN 362', 2133281547),
('2016-06-08', '2017-01-08', 26, 'AJM 123', 1000595906),
('2016-12-02', '2017-07-02', 27, 'AJM 532', 1053261423),
('2016-12-06', '2017-07-06', 28, 'AKM 441', 1095052032),
('2018-02-01', NULL, 29, 'ALM 431', 1110962113),
('2018-07-15', NULL, 30, 'ALN 261', 1116281523),
('2016-03-09', '2016-10-09', 31, 'ALP 513', 1125050058),
('2018-01-27', NULL, 32, 'ALS 554', 1147978423),
('2017-01-18', '2017-08-18', 33, 'BJP 124', 1159875633),
('2017-08-04', '2018-03-04', 34, 'BKP 661', 1197063428),
('2018-03-11', NULL, 35, 'BLP 526', 1270163337),
('2016-04-19', '2016-11-19', 36, 'CIS 416', 1318908998),
('2017-09-03', '2018-04-03', 37, 'CKO 222', 1395384579),
('2016-11-12', '2017-06-12', 38, 'DGO 613', 1408654336),
('2017-05-04', '2017-12-04', 39, 'DIM 243', 1502355935),
('2016-06-11', '2017-01-11', 40, 'DIO 336', 1519754253),
('2016-07-23', '2017-02-23', 41, 'DKP 463', 1568142566),
('2017-11-24', '2018-06-24', 42, 'DKS 515', 1814736576),
('2018-09-22', NULL, 43, 'EGR 441', 1844606968),
('2018-08-03', NULL, 44, 'EHN 626', 1863139056),
('2018-08-25', NULL, 45, 'EIM 151', 1923611006),
('2018-10-01', NULL, 46, 'EKR 256', 1982200312),
('2018-07-12', NULL, 47, 'FGR 252', 2018738862),
('2018-12-25', NULL, 48, 'FIR 425', 2024576912),
('2017-10-28', '2018-05-28', 49, 'FKS 116', 2122612122),
('2016-05-10', '2016-12-10', 50, 'FLN 362', 2133281547);

-- --------------------------------------------------------

--
-- Table structure for table `sutartys`
--

CREATE TABLE `sutartys` (
  `numeris` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kaina` float NOT NULL,
  `referencinis_numeris` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_įmones_kodas` int(11) NOT NULL,
  `fk_vairuotojo_sasmens_kodas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sutartys`
--

INSERT INTO `sutartys` (`numeris`, `kaina`, `referencinis_numeris`, `fk_įmones_kodas`, fk_vairuotojo_asmens_kodas) VALUES
('AA/1QK/37', 2438, '30-533-4187', 514719164, 1863139056),
('AA/2BC/71', 2081, '42-641-0603', 311129698, 1197063428),
('BA/7KD/84', 1654, '91-355-7909', 501591007, 1408654336),
('BB/3DQ/38', 1279, '14-085-0527', 346372870, 1197063428),
('BB/7CC/54', 2789, '17-858-2059', 501591007, 1053261423),
('BB/7KG/27', 2144, '72-208-4319', 623451860, 2133281547),
('BB/8KA/72', 1165, '65-127-1067', 105844721, 1095052032),
('BD/1RB/21', 1503, '88-954-7042', 347112075, 2018738862),
('BD/2BA/26', 603, '86-075-3196', 413552080, 1863139056),
('BG/6RB/72', 734, '83-280-4467', 347112075, 1519754253),
('BK/2GB/62', 2559, '58-227-8161', 623451860, 2018738862),
('BQ/5DB/74', 2892, '60-880-4758', 624865129, 1982200312),
('BQ/5RG/55', 2671, '25-861-7411', 785822238, 1982200312),
('BQ/6CB/53', 2433, '61-425-5888', 113460866, 1923611006),
('BR/5CC/73', 246, '04-944-3348', 624865129, 1814736576),
('CA/8DB/46', 334, '41-600-3551', 736829793, 2024576912),
('CC/1BQ/22', 493, '45-797-9457', 788981838, 1844606968),
('DA/1KQ/14', 456, '32-770-6708', 780950775, 1110962113),
('DD/6GC/38', 1620, '86-016-6758', 279747243, 1000595906),
('DG/1RQ/76', 1753, '01-239-2684', 780950775, 1116281523),
('DK/1RA/35', 1323, '69-719-7715', 623451860, 1519754253),
('DK/3QR/73', 2123, '50-707-9362', 347112075, 1095052032),
('GB/1DB/63', 816, '15-115-7163', 785822238, 1095052032),
('GB/3QQ/18', 470, '89-020-6669', 346372870, 1408654336),
('GB/4AR/35', 1199, '60-485-4611', 105844721, 2122612122),
('GD/4DG/45', 543, '88-911-4328', 123909634, 1095052032),
('GG/8RA/68', 1767, '00-447-1516', 536602579, 1095052032),
('KD/2AR/65', 316, '63-182-1119', 624865129, 1395384579),
('KG/4KA/77', 2147, '75-369-0588', 624865129, 2024576912),
('KG/8KR/71', 1086, '42-987-6943', 218109923, 2133281547),
('KQ/3RK/62', 1136, '26-354-5110', 311129698, 1159875633),
('QK/1CD/67', 724, '76-962-2905', 113460866, 1197063428),
('QK/6GB/55', 2822, '68-739-5356', 501591007, 1053261423),
('QR/5QD/42', 1373, '50-384-0636', 279747243, 1095052032),
('RA/4QB/35', 2032, '47-982-3107', 113460866, 1408654336),
('RA/7CQ/46', 2946, '32-197-6605', 218109923, 1197063428),
('RC/8CQ/21', 1831, '92-660-3728', 307048350, 1125050058),
('RG/1DB/84', 1887, '53-460-0523', 279747243, 2018738862),
('RG/4DG/84', 297, '65-631-4265', 413552080, 2122612122),
('RQ/5BA/32', 2358, '88-518-6512', 206233295, 1110962113);

-- --------------------------------------------------------

--
-- Table structure for table `vairuotojai`
--

CREATE TABLE `vairuotojai` (
  `vardas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pavarde` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asmens_kodas` int(11) NOT NULL,
  `teisiu_pabaigos_data` date NOT NULL,
  `gimimo_data` date NOT NULL,
  `sutarties_data` date DEFAULT NULL,
  `telefono_numeris` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vairuotojai`
--

INSERT INTO `vairuotojai` (`vardas`, `pavarde`, `asmens_kodas`, `teisiu_pabaigos_data`, `gimimo_data`, `sutarties_data`, `telefono_numeris`) VALUES
('Sean', 'Lapthorn', 1000595906, '2019-12-25', '1960-03-24', '2013-08-14', '1631441922'),
('Arliene', 'Cardall', 1053261423, '2019-12-09', '1964-09-15', '2012-11-03', '5615163264'),
('Gasper', 'Bortolozzi', 1095052032, '2021-06-25', '1968-04-27', '2011-06-20', '6144392079'),
('Feliks', 'Plampin', 1110962113, '2020-08-18', '1971-12-28', '2016-11-29', '3973464249'),
('Sander', 'Pithie', 1116281523, '2019-05-19', '1974-11-29', '2011-03-15', '3909885205'),
('Shannon', 'Ayerst', 1125050058, '2020-03-12', '1970-07-04', '2012-05-25', '9863665765'),
('Ethan', 'Furness', 1147978423, '2020-10-15', '1969-06-09', '2016-06-09', '7362659512'),
('Kori', 'Ellis', 1159875633, '2019-05-19', '1977-05-11', '2014-02-17', '5793511697'),
('Sharona', 'Fadell', 1197063428, '2020-10-07', '1958-07-19', '2017-08-28', '8682079514'),
('Ambros', 'Alexandrou', 1270163337, '2021-12-22', '1960-01-19', '2011-07-24', '3465736427'),
('Pedro', 'Conklin', 1318908998, '2021-01-26', '1977-01-21', '2014-09-05', '2132957754'),
('Orson', 'Braney', 1395384579, '2021-11-24', '1979-06-26', '2012-10-29', '4428389051'),
('Manda', 'Towsie', 1408654336, '2020-03-01', '1963-09-05', '2015-03-02', '5498967775'),
('Webb', 'Kuller', 1502355935, '2019-11-18', '1976-12-15', '2011-04-16', '5114797502'),
('Codie', 'Fridaye', 1519754253, '2019-10-09', '1970-12-01', '2013-06-22', '3075988344'),
('Fredra', 'Waggitt', 1568142566, '2019-09-12', '1978-11-11', '2014-02-04', '5285461922'),
('Nobe', 'Utterson', 1814736576, '2021-07-01', '1978-11-24', '2015-07-30', '7757818920'),
('Manya', 'Sawden', 1844606968, '2020-04-28', '1976-05-10', '2015-01-18', '2418753387'),
('Izabel', 'Goggen', 1863139056, '2019-11-04', '1968-03-18', '2016-11-13', '6981097542'),
('Holli', 'Ackers', 1923611006, '2022-03-03', '1977-12-04', '2011-03-08', '5371590025'),
('Rafferty', 'Charge', 1982200312, '2021-04-15', '1966-04-03', '2017-04-01', '6785800974'),
('Lawrence', 'Fearneley', 2018738862, '2021-12-29', '1964-02-27', '2013-07-31', '4549405030'),
('Sheree', 'Thursby', 2024576912, '2020-11-06', '1973-09-17', '2017-05-31', '7613111754'),
('Clovis', 'Knibbs', 2122612122, '2021-12-11', '1974-06-25', '2014-10-06', '5208034145'),
('Aldus', 'McCumskay', 2133281547, '2020-02-10', '1971-07-24', '2015-06-17', '6505919281');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumentai`
--
ALTER TABLE `dokumentai`
  ADD PRIMARY KEY (`id_dokumentas`),
  ADD KEY `turi` (`fk_vairuotojo_sasmens_kodas`),
  ADD KEY `patvirtina` (`fk_sutarties_numeris`),
  ADD KEY `pateikiamas` (`fk_imones_kodas`);

--
-- Indexes for table `imones`
--
ALTER TABLE `imones`
  ADD PRIMARY KEY (`imones_kodas`);

--
-- Indexes for table `kroviniai`
--
ALTER TABLE `kroviniai`
  ADD PRIMARY KEY (`id_krovinys`),
  ADD KEY `patenka` (`fk_imones_kodas`),
  ADD KEY `transportuoja` (`fk_sunkvezimio_numeriai`);

--
-- Indexes for table `mokejimai`
--
ALTER TABLE `mokejimai`
  ADD PRIMARY KEY (`id_mokejimas`),
  ADD KEY `sumoka` (`fk_imones_kodas`),
  ADD KEY `apmoka` (`fk_saskaitos_numeris`);

--
-- Indexes for table `saskaitos`
--
ALTER TABLE `saskaitos`
  ADD PRIMARY KEY (`numeris`),
  ADD KEY `išrašo` (`fk_sutarties_numeris`);

--
-- Indexes for table `sunkvezimiai`
--
ALTER TABLE `sunkvezimiai`
  ADD PRIMARY KEY (`numeriai`);

--
-- Indexes for table `sunkvezimio_iranga`
--
ALTER TABLE `sunkvezimio_iranga`
  ADD PRIMARY KEY (`id_sunkvezimio_iranga`),
  ADD KEY `fk_sunkvezimio_numeriai` (`fk_sunkvezimio_numeriai`);

--
-- Indexes for table `sunkvezimio_vairuotojai`
--
ALTER TABLE `sunkvezimio_vairuotojai`
  ADD PRIMARY KEY (`id_sunkvezimio_vairuotojas`),
  ADD KEY `vairuoja` (`fk_sunkvezimio_numeriai`),
  ADD KEY `yra` (`fk_vairuotojo_asmens_kodas`);

--
-- Indexes for table `sutartys`
--
ALTER TABLE `sutartys`
  ADD PRIMARY KEY (`numeris`),
  ADD KEY `sudaro` (`fk_įmones_kodas`),
  ADD KEY `išsiunčia` (fk_vairuotojo_asmens_kodas);

--
-- Indexes for table `vairuotojai`
--
ALTER TABLE `vairuotojai`
  ADD PRIMARY KEY (`asmens_kodas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumentai`
--
ALTER TABLE `dokumentai`
  ADD CONSTRAINT `pateikiamas` FOREIGN KEY (`fk_imones_kodas`) REFERENCES `imones` (`imones_kodas`),
  ADD CONSTRAINT `patvirtina` FOREIGN KEY (`fk_sutarties_numeris`) REFERENCES `sutartys` (`numeris`),
  ADD CONSTRAINT `turi` FOREIGN KEY (`fk_vairuotojo_sasmens_kodas`) REFERENCES `vairuotojai` (`asmens_kodas`);

--
-- Constraints for table `kroviniai`
--
ALTER TABLE `kroviniai`
  ADD CONSTRAINT `patenka` FOREIGN KEY (`fk_imones_kodas`) REFERENCES `imones` (`imones_kodas`),
  ADD CONSTRAINT `transportuoja` FOREIGN KEY (`fk_sunkvezimio_numeriai`) REFERENCES `sunkvezimiai` (`numeriai`);

--
-- Constraints for table `mokejimai`
--
ALTER TABLE `mokejimai`
  ADD CONSTRAINT `apmoka` FOREIGN KEY (`fk_saskaitos_numeris`) REFERENCES `saskaitos` (`numeris`),
  ADD CONSTRAINT `sumoka` FOREIGN KEY (`fk_imones_kodas`) REFERENCES `imones` (`imones_kodas`);

--
-- Constraints for table `saskaitos`
--
ALTER TABLE `saskaitos`
  ADD CONSTRAINT `išrašo` FOREIGN KEY (`fk_sutarties_numeris`) REFERENCES `sutartys` (`numeris`);

--
-- Constraints for table `sunkvezimio_iranga`
--
ALTER TABLE `sunkvezimio_iranga`
  ADD CONSTRAINT `sunkvezimio_iranga_ibfk_1` FOREIGN KEY (`fk_sunkvezimio_numeriai`) REFERENCES `sunkvezimiai` (`numeriai`);

--
-- Constraints for table `sunkvezimio_vairuotojai`
--
ALTER TABLE `sunkvezimio_vairuotojai`
  ADD CONSTRAINT `vairuoja` FOREIGN KEY (`fk_sunkvezimio_numeriai`) REFERENCES `sunkvezimiai` (`numeriai`),
  ADD CONSTRAINT `yra` FOREIGN KEY (`fk_vairuotojo_asmens_kodas`) REFERENCES `vairuotojai` (`asmens_kodas`);

--
-- Constraints for table `sutartys`
--
ALTER TABLE `sutartys`
  ADD CONSTRAINT `išsiunčia` FOREIGN KEY (fk_vairuotojo_asmens_kodas) REFERENCES `vairuotojai` (`asmens_kodas`),
  ADD CONSTRAINT `sudaro` FOREIGN KEY (`fk_įmones_kodas`) REFERENCES `imones` (`imones_kodas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
