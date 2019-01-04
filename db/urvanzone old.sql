-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 04:43 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urvanzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_ID` int(11) NOT NULL,
  `brand_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_ID`, `brand_Name`) VALUES
(1, 'Chana'),
(2, 'Chery'),
(3, 'Chevrolet'),
(4, 'Chrysler'),
(5, 'Dodge'),
(6, 'Ford'),
(7, 'Foton Motor'),
(8, 'Francisco Motors'),
(9, 'Geely'),
(10, 'Great Wall Motor'),
(11, 'Haima Motors'),
(12, 'Honda'),
(13, 'Hyundai Motor'),
(14, 'Isuzu'),
(15, 'Jeep'),
(16, 'Kia Motors'),
(17, 'Lifan Group'),
(18, 'Mazda'),
(19, 'Mitsubishi Motors'),
(20, 'Nissan Motors'),
(21, 'Peugeot'),
(22, 'Subaru'),
(23, 'Suzuki'),
(24, 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_ID` int(11) NOT NULL,
  `category_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_ID`, `category_Name`) VALUES
(1, 'Certified Pre-Owned'),
(2, 'Convertible'),
(3, 'Coupe'),
(4, 'Crossover'),
(5, 'Diesel'),
(6, 'Hatchback'),
(7, 'Hybrid/Electric'),
(8, 'Luxury Car'),
(9, 'Sedan'),
(10, 'Sport Car'),
(11, 'SUV'),
(12, 'Truck'),
(13, 'Van'),
(14, 'Wagon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_ID` int(11) NOT NULL,
  `cus_Image` varchar(50) NOT NULL,
  `cus_Lastname` char(50) NOT NULL,
  `cus_Firstname` char(50) NOT NULL,
  `cus_Middlename` char(50) DEFAULT NULL,
  `cus_Address` varchar(50) NOT NULL,
  `cus_Email` varchar(50) NOT NULL,
  `cus_Contact` varchar(50) NOT NULL,
  `cus_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cus_ID`, `cus_Image`, `cus_Lastname`, `cus_Firstname`, `cus_Middlename`, `cus_Address`, `cus_Email`, `cus_Contact`, `cus_Password`) VALUES
(1, '', 'Potolin', 'Federex', 'A.', 'gjhhsuiwhsuh', 'federex@gmail.com', '09366889296', 'federex'),
(2, '', 'Dolorfo', 'Kien', 'Arias', 'Blk9 Lot16 Bistekville1, Molave St. Brgy. Payatas,', 'kiendolorfo@gmail.com', '09366889295', 'kiendolorfo'),
(3, '', 'Amores', 'Fyshie', 'Cayabyab', '124 Diamond St. Comm Q.C', 'fyshie@gmail.com', '09050962171', 'fyshie'),
(4, '', 'Balasta', 'Danise', 'Bondos', 'Dahlia St. Riverside Brgy. Comm. Q.C', 'danise@gmail.com', '09991231564', 'danise'),
(5, '', 'Braza', 'Jeric', 'Andal', '150 Mayon St. Payatas Q.C', 'jeric@gmail.com', '09972380978', 'jeric'),
(6, '', 'Cadorna', 'John Doe', 'Rivera', '187 Banlat Rd. Brgy Tandang Sora Q.C', 'jeyd@gmail.com', '097866745932', 'johndoe'),
(7, '', 'Garan', 'Joseph', 'Gabriel', 'Blk 1 Lot 5 Celina Subd. Montalban', 'joseph@gmail.com', '09986547362', 'joseoh'),
(8, '', 'Macam', 'Anne', 'Dela Cruz', '241 Ilang Ilang St. Batasan Q.C', 'anne@gmail.com', '09217835782', 'anne'),
(9, '', 'Tababa', 'Jonalyn', 'Tan', '32 Emilio St. Batasan Q.C', 'jonalyn@gmail.com', '093587667218', 'jonalyn'),
(10, '', 'Saldivar', 'Dexter', 'Santos', '68 Penafrancia St. Payatas Q.C', 'dexter@gmail.com', '09350044453', 'dexter'),
(11, '', 'Gregorio', 'Kate Dimple', 'Ocampo', '31 Ferrari St. Brgy. Bagong Silang Q.C', 'katedimple@gmail.com', '09298416573', 'katedimple'),
(12, '', 'Jader', 'Joy Anzel', 'Rosario', '52 Pontiac St. Fairview Q.C', 'joyanzel@gmail.com', '09976675342', 'joyanzel'),
(13, '', 'Ducusin', 'Rose Maie', 'Estacio', '12 Sto Nino St. Payatas Quezon City', 'rosemarie@gmail.com', '09376667569', 'rosemarie'),
(14, '', 'Zainal', 'John Rey', 'Aquino', '13 Pilot St. Brgy Comm. Q.C', 'johnrey@gmail.com', '09978544325', 'johnrey'),
(15, '', 'Ebacuado', 'Alvin', 'Soriano', '42 Sanchez St. Brgy Comm. Q.C', 'alvin@gmail.com', '09976577436', 'alvin'),
(16, '', 'Agustin', 'Lian Marie', NULL, '41 Tulip St. Novaliches Q.C', 'lianmarie@gmail.com', '09328846631', 'lianmarie'),
(17, '', 'Romero', 'Terrence', 'Esperanza', '65 Jordan Valley Baesa Caloocan City', 'terrence@gmail.com', '09668564432', 'terrence'),
(18, '', 'Dela Cruz', 'Michael', 'Magarso', '32 Camaro St. Makati City', 'michael@gmail.com', '092235567433', 'michael'),
(19, '', 'Alluso', 'Aljon', 'Despi', '32 Narra St. Payatas Q.C', 'aljon@gmail.com', '09987765844', 'aljon'),
(20, '', 'Lopez', 'Mary', 'De Leon', '43 Up Diliman Q.C', 'mary@gmail.com', '09175564478', 'mary'),
(21, '', 'De Leon', 'Cherrie', 'Lopez', '98 Luzviminda St. Pasong tamo Q.C', 'cherrie@gmail.com', '09235564776', 'cherrie'),
(22, '', 'Monasterial', 'Christian', 'Bonon', '32 Valenzuela St. Brgy Caibiga Caloocan City', 'christian@gmail', '09974577654', 'christian'),
(23, '', 'Agudo', 'Shander', 'Santos', '21 Malolos St. Brgy Glori Novaliches Q.C', 'shander@gmail.com', '09778665489', 'shander'),
(24, '', 'Mirandilla', 'Marvin', 'Bibal', '32 Gravel Pt. Payatas Q.C', 'marvin@gmail.com', '09346788765', 'marvin'),
(25, '', 'BIbal', 'John Paulo', 'Reyes', '55 Abris St. Payatas Q.C', 'johnpaulo@gmail.com', '09536678987', 'johnpaulo'),
(26, '', 'Bigay', 'Jomarie', 'Austurias', '187 Molave St. Payatas Q.C', 'jomarie@gmail.com', '09326657887', 'jomarie'),
(27, '', 'Cancio', 'Romar', 'Flores', '31 Perez St. Marikina City', 'romar@gmail.com', '09357768554', 'romar'),
(28, '', 'Leocario', 'Wilson', 'Bernabe', '21 Perez St. Marikina City', 'wilson@gmail.com', '09357763829', 'wilson'),
(30, '', 'Bicas', 'Rodolfo', 'Doroin', '54 Luzon Brgy. Culiat Q.C', 'rodolfo@gmail.com', '09547768559', 'rodolfo'),
(31, '', 'Cayabyab', 'Jaycie', 'Ong', '38 Sto Domingo Brgy Holy Spirit Q.C', 'jaycie@gmail.com', '09298874637', 'jaycie'),
(32, '', 'Bicas', 'Rodolfo', 'Doroin', '54 Luzon Brgy. Culiat Q.C', 'rodolfo@gmail.com', '09547768559', 'rodolfo'),
(33, '', 'Cayabyab', 'Jaycie', 'Ong', '38 Sto Domingo Brgy Holy Spirit Q.C', 'jaycie@gmail.com', '09298874637', 'jaycie');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `driver_ID` int(11) NOT NULL,
  `driver_Lastname` char(50) NOT NULL,
  `driver_Firstname` char(50) NOT NULL,
  `driver_Middlename` char(50) DEFAULT NULL,
  `driver_Address` varchar(50) NOT NULL,
  `driver_Image` varchar(50) NOT NULL,
  `driver_Email` varchar(50) NOT NULL,
  `driver_Contact` varchar(50) NOT NULL,
  `driver_License` varchar(50) NOT NULL,
  `driver_Expired` varchar(50) NOT NULL,
  `date_created` varchar(55) NOT NULL,
  `created_by` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_driver`
--

INSERT INTO `tbl_driver` (`driver_ID`, `driver_Lastname`, `driver_Firstname`, `driver_Middlename`, `driver_Address`, `driver_Image`, `driver_Email`, `driver_Contact`, `driver_License`, `driver_Expired`, `date_created`, `created_by`) VALUES
(1, 'Amor', 'Ariel', 'Lasala', '#2478 Culdesac Rotonda Sun Valley Paranaque City', '1.jpg', 'ariel_amor@gmail.com', '09268635131', 'xxx-xx-xxxxxx', 'xxxx/xx/xx', '2018-01-04 12:33:58 pm', 'Admin'),
(2, 'Tumlos', 'Antonio, Jr', 'B.', 'Blk9 Lot18 Bacoor Cavite', '2.jpg', '', '09158667897', 'xxx-xx-xxxxxx', 'xxxx/xx/xx', '2018-01-04 12:33:58 pm', 'Admin'),
(3, 'Valles', 'Mario', 'Caviana', 'Phase 4A Tower Bell San Jose Del Monte, Bulacan', '3.jpg', '', '09168823005', 'xxx-xx-xxxxxx', 'xxxx/xx/xx', '2018-01-04 12:33:58 pm', 'Admin'),
(4, 'Macapanas', 'Floro', 'P.', '054 Paseo De Animales St., Santolan, Pasig City', '4.jpg', '', '09275732540', 'N02-96-315711', '2022/08/18', '2018-01-04 12:33:58 pm', 'Admin'),
(5, 'Mingo', 'Bonrenier', 'Salado', '16 B. Orchids St. Santolan, Pasig City', '2.jpg', '', '09503233767', 'F01-04-003410', '2018/07/02', '2018-01-04 12:33:58 pm', 'Admin'),
(6, 'Amor', 'Ariel', 'Lasala', '#2478 Culdesac Rotonda Sun Valley Paranaque City', '1.jpg', 'ariel_amor@gmail.com', '09268635131', 'xxx', 'xxx', '2018-01-04 12:33:58 pm', 'Admin'),
(7, 'Tumlos Jr.', 'Antonio', 'B', 'Blk. 3 lot 18 Bacoor Cavite', '2.jpg', 'xxx@gmail.com', '09158667897', 'xxxx', 'xxxx', '2018-01-04 12:33:58 pm', 'Admin'),
(8, 'Valles', 'Mario', 'Caviana', 'Phase 4A Tower Bell San Jose Del Monte, Bulacan', '3.jpg', 'xxxx@gmail.com', '09168823005', 'xxxxx', 'xxxxx', '2018-01-04 12:33:58 pm', 'Admin'),
(9, 'Macapanas', 'Floro', 'P', '054 Paseo De Animales, St. Santolan Pasig City', '4.jpg', 'xxxxx@gmail.com', '09275732540', 'xxxxxx', 'xxxxxx', '2018-01-04 12:33:58 pm', 'Admin'),
(10, 'Mingo', 'Bonrenier', 'Salado', '16 B.Orchids St. Santolan Pasig City ', '1.jpg', 'x@gmail.com', '09503233767', 'xx', 'xx', '2018-01-04 12:33:58 pm', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engine`
--

CREATE TABLE `tbl_engine` (
  `engine_ID` int(11) NOT NULL,
  `engine_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_engine`
--

INSERT INTO `tbl_engine` (`engine_ID`, `engine_Name`) VALUES
(3, 'Boxer'),
(5, 'Diesel'),
(4, 'Rotary'),
(1, 'Straight'),
(2, 'V type');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fleet`
--

CREATE TABLE `tbl_fleet` (
  `car_ID` int(11) NOT NULL,
  `car_Image1` varchar(50) NOT NULL DEFAULT '0',
  `car_Image2` varchar(50) NOT NULL DEFAULT '0',
  `car_Image3` varchar(50) NOT NULL DEFAULT '0',
  `category_Name` varchar(50) NOT NULL,
  `brand_Name` varchar(50) NOT NULL,
  `car_Model` varchar(50) NOT NULL,
  `driver_ID` int(11) DEFAULT NULL,
  `car_Plateno` varchar(50) NOT NULL DEFAULT 'xxx xxxxx',
  `car_Capacity` int(11) NOT NULL,
  `car_Luggage` int(11) NOT NULL,
  `transmission_Name` varchar(50) NOT NULL,
  `fuel_Name` varchar(50) NOT NULL,
  `engine_Name` varchar(50) NOT NULL,
  `car_Status` char(50) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `car_Price` varchar(50) DEFAULT NULL,
  `date_created` varchar(55) NOT NULL,
  `created_by` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fleet`
--

INSERT INTO `tbl_fleet` (`car_ID`, `car_Image1`, `car_Image2`, `car_Image3`, `category_Name`, `brand_Name`, `car_Model`, `driver_ID`, `car_Plateno`, `car_Capacity`, `car_Luggage`, `transmission_Name`, `fuel_Name`, `engine_Name`, `car_Status`, `rating`, `car_Price`, `date_created`, `created_by`) VALUES
(1, 'S15.png', 'S15.png', 'S15.png', 'Hybrid/Electric', 'Great Wall Motor', 'Go High', NULL, 'ACP 5359', 6, 0, 'Semi Automatic & Dual Clutch', 'Ethanol', 'Straight', 'InActive', NULL, '1,200', '', ''),
(2, 'S4.png', 'S5.png', 'S6.png', 'Sedan', 'Toyota', 'Vios 2016', 2, 'ACD - 5359', 5, 4, 'Automatic', 'Diesel', 'Diesel', 'InActive', NULL, '1,200', '', ''),
(3, 'S7.png', 'S8.png', 'S9.png', 'Sedan', 'Toyota', 'Vios 2017', 3, 'VX – 9868 ', 5, 4, 'Manual', 'Bio Diesel', 'Diesel', 'Available', NULL, '1,000', '', ''),
(4, 'S13.png', 'S14.png', 'S15.png', 'Sedan', 'Toyota', 'Innova', 4, 'AOV – 225 ', 5, 8, 'Automatic', 'Bio Diesel', 'Diesel', 'Available', NULL, '1,200', '', ''),
(5, 'S13.png', 'S14.png', 'S15.png', 'Sport Car', 'Chana', 'asdxx', 5, 'aaa-123', 10, 0, 'Automatic', 'Bio Diesel', 'Boxer', 'Available', NULL, '10', '', ''),
(6, 'S1.png', 'S2.png', 'S3.png', 'Crossover', 'Chana', 'zxc', 6, 'asd 123', 10, 0, 'Automatic', 'Bio Diesel', 'Boxer', 'Available', NULL, '10', '', ''),
(8, 'S1.png', 'S1.png', 'S1.png', 'SUV', 'Ford', 'Edge', 7, 'DR 4079', 5, 0, 'Manual', 'Diesel', 'Rotary', 'Available', NULL, '1,010', '', ''),
(9, 'S2.png', 'S2.png', 'S2.png', 'Certified Pre-Owned', 'Chery', 'Tiggo', 8, 'ALA 3990', 4, 0, 'Manual', 'Ethanol', 'Rotary', 'Available', NULL, '1,100', '', ''),
(10, 'S3.png', 'S3.png', 'S3.png', 'Coupe', 'Isuzu', 'D-Max', 9, 'ACP 5359', 6, 0, 'Continuously Variable Transmission', 'Gasoline', 'V type', 'Available', NULL, '1,100', '', ''),
(11, 'S4.png', 'S4.png', 'S4.png', 'Convertible', 'Chevrolet', 'TataTigor', 10, 'VX 9868', 5, 0, 'Manual', 'Liquefied Petroleum', 'Straight', 'InActive', NULL, '1,010', '', ''),
(12, 'S5.png', 'S5.png', 'S5.png', 'Convertible', 'Chana', 'Lexus NX', NULL, 'VI 1645', 10, 0, 'Continuously Variable Transmission', 'Compress Natural Gas', 'V type', 'Reserved', NULL, '1,200', '', ''),
(13, 'S6.png', 'S6.png', 'S6.png', 'Coupe', 'Chery', 'Vega', NULL, 'YV 1103', 5, 0, 'Continuously Variable Transmission', 'Diesel', 'Rotary', 'InActive', NULL, '1,100', '', ''),
(14, 'S7.png', 'S7.png', 'S7.png', 'Crossover', 'Chrysler', 'Power', NULL, 'YU 0753', 10, 0, 'Automatic', 'Bio Diesel', 'Boxer', 'Available', NULL, '1,010', '', ''),
(15, 'S8.png', 'S8.png', 'S8.png', 'Diesel', 'Ford', 'Tyga', NULL, 'AOV 225', 4, 0, 'Manual', 'Ethanol', 'Rotary', 'InActive', NULL, '1,100', '', ''),
(16, 'S9.png', 'S9.png', 'S9.png', 'Hatchback', 'Francisco Motors', 'Francy XY', NULL, 'A2 0392', 6, 0, 'Semi Automatic & Dual Clutch', 'Ethanol', 'Straight', 'InActive', NULL, '1,010', '', ''),
(17, 'S10.png', 'S10.png', 'S10.png', 'Hybrid/Electric', 'Foton Motor', 'Gear 11', NULL, 'ZTS 498', 5, 0, 'Semi Automatic & Dual Clutch', 'Ethanol', 'Rotary', 'Available', NULL, '1,200', '', ''),
(18, 'S11.png', 'S11.png', 'S11.png', 'Luxury Car', 'Francisco Motors', 'Moto XX', NULL, 'BO 4720', 10, 0, 'Manual', 'Gasoline', 'Rotary', 'Available', NULL, '1,100', '', ''),
(19, 'S12.png', 'S12.png', 'S12.png', 'Sedan', 'Honda', 'Super 88', NULL, 'NM 0553', 10, 0, 'Semi Automatic & Dual Clutch', 'Ethanol', 'Boxer', 'InActive', NULL, '1,010', '', ''),
(20, 'S13.png', 'S13.png', 'S13.png', 'Sport Car', 'Kia Motors', 'Hype', NULL, 'NM 2004', 6, 0, 'Manual', 'Ethanol', 'Straight', 'InActive', NULL, '1,200', '', ''),
(21, 'S15.png', 'S15.png', 'S15.png', 'Certified Pre-Owned', 'Lifan Group', 'Wavy', NULL, 'ABO 2351', 6, 0, 'Semi Automatic & Dual Clutch', 'Ethanol', 'Rotary', 'InActive', NULL, '1,010', '', ''),
(22, 'S1.png', 'S1.png', 'S1.png', 'Truck', 'Dodge', 'Navy', NULL, 'OV 8516', 4, 0, 'Continuously Variable Transmission', 'Diesel', 'V type', 'InActive', NULL, '1,010', '', ''),
(23, 'S2.png', 'S2.png', 'S2.png', 'Van', 'Isuzu', 'Porshea', NULL, 'OX 5380', 4, 0, 'Manual', 'Liquefied Petroleum', 'V type', 'Reserved', NULL, '1,100', '', ''),
(24, 'S3.png', 'S3.png', 'S3.png', 'Truck', 'Great Wall Motor', 'Negah', NULL, 'VK 9025', 10, 0, 'Manual', 'Diesel', 'Straight', 'Available', NULL, '1,010', '', ''),
(25, 'S3.png', 'S3.png', 'S3.png', 'Luxury Car', 'Haima Motors', 'Hype', NULL, 'YW 6087', 5, 0, 'Automatic', 'Bio Diesel', 'Boxer', 'Available', NULL, '1,100', '', ''),
(26, 'S1.png', 'S1.png', 'S1.png', 'Hatchback', 'Lifan Group', 'Go Life', NULL, 'A1 X630', 6, 0, 'Manual', 'Gasoline', 'Straight', 'InActive', NULL, '1,200', '', ''),
(27, 'S2.png', 'S2.png', 'S2.png', 'Luxury Car', 'Geely', 'Gear', NULL, 'RBL 198', 5, 0, 'Semi Automatic & Dual Clutch', 'Liquefied Petroleum', 'Diesel', 'Reserved', NULL, '1,200', '', ''),
(28, 'S6.png', 'S6.png', 'S6.png', 'Sedan', 'Foton Motor', 'Veige', NULL, 'GB 7836', 4, 0, 'Semi Automatic & Dual Clutch', 'Compress Natural Gas', 'V type', 'InActive', NULL, '1,010', '', ''),
(29, 'S4.png', 'S4.png', 'S4.png', 'Diesel', 'Chevrolet', 'Chevz xx', NULL, 'NM 0115', 10, 0, 'Manual', 'Gasoline', 'Rotary', 'Available', NULL, '1,200', '', ''),
(30, 'S8.png', 'S8.png', 'S8.png', 'SUV', 'Foton Motor', 'XP xia', NULL, 'GB 8309', 5, 0, 'Semi Automatic & Dual Clutch', 'Liquefied Petroleum', 'Diesel', 'Reserved', NULL, '1,200', '', ''),
(31, 'S9.png', 'S9.png', 'S9.png', 'Convertible', 'Dodge', 'XX power', NULL, 'VK 9025', 4, 0, 'Semi Automatic & Dual Clutch', 'Liquefied Petroleum', 'Diesel', 'Reserved', NULL, '1,200', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fuel`
--

CREATE TABLE `tbl_fuel` (
  `fuel_ID` int(11) NOT NULL,
  `fuel_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fuel`
--

INSERT INTO `tbl_fuel` (`fuel_ID`, `fuel_Name`) VALUES
(6, 'Bio Diesel'),
(4, 'Compress Natural Gas'),
(2, 'Diesel'),
(5, 'Ethanol'),
(1, 'Gasoline'),
(3, 'Liquefied Petroleum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `message_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`message_id`, `message`) VALUES
(1, 'Your reservation request has been sent, we will send an Email or SMS for updates'),
(2, 'Your reservation request has been approved.'),
(3, 'We remind you to have a copy and read our terms and condition.'),
(4, 'You have 2 hrs left to take back the rented car. Thank you. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `total`, `month`, `year`) VALUES
(1, 1000, 'January', 2016),
(2, 1500, 'February', 2016),
(3, 1800, 'March', 2016),
(4, 1200, 'April', 2016),
(5, 1500, 'May', 2016),
(6, 1400, 'June', 2016),
(7, 1800, 'July', 2016),
(8, 1900, 'Aug', 2016),
(9, 1600, 'September', 2016),
(10, 1700, 'October', 2016),
(11, 1500, 'November', 2016),
(12, 1100, 'January', 2017),
(13, 1200, 'January', 2017),
(14, 1500, 'January', 2017),
(15, 1600, 'February', 2017),
(16, 1700, 'February', 2017),
(17, 1200, 'February', 2017),
(18, 1300, 'February', 2017),
(19, 1500, 'March', 2017),
(20, 1600, 'March', 2017),
(21, 1500, 'April', 2017),
(22, 1100, 'May', 2017),
(23, 1200, 'June', 2017),
(24, 1300, 'July', 2017),
(25, 1200, 'Aug', 2017),
(26, 1200, 'September', 2017),
(27, 1500, 'October', 2017),
(28, 1800, 'November', 2017),
(29, 1100, 'December', 2017),
(30, 1200, 'December', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rating_ID` int(11) NOT NULL,
  `car_ID` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `reservation_ID` int(11) NOT NULL,
  `dropoff_Location` varchar(50) NOT NULL,
  `pickup_Date` varchar(50) NOT NULL,
  `pickup_Time` varchar(50) NOT NULL,
  `dropoff_Date` varchar(50) NOT NULL,
  `dropoff_Time` varchar(50) NOT NULL,
  `pickup_Location` varchar(55) NOT NULL,
  `color` varchar(7) NOT NULL,
  `reservation_Time` varchar(50) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `car_ID` int(11) NOT NULL,
  `driver_ID` varchar(50) NOT NULL,
  `total_payment` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  `reservation_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`reservation_ID`, `dropoff_Location`, `pickup_Date`, `pickup_Time`, `dropoff_Date`, `dropoff_Time`, `pickup_Location`, `color`, `reservation_Time`, `customer_ID`, `car_ID`, `driver_ID`, `total_payment`, `balance`, `reservation_status`) VALUES
(1, 'Batangas', '2018-01-12 ', '12:33:58', '2018-01-19 ', '12:33:58', 'Pasay City ', '#e61378', '4:00pm', 1, 1, '1', 9, 6, 'Confirmed'),
(2, 'Caloocan', '2018-01-05 12:33:58', '', '2018-01-10 12:33:58', '', 'Pasay City', '#3a87ad', '9:00am', 2, 2, '2', 9, 6, 'Confirmed'),
(3, 'Valenzuela', '2018-01-06 12:33:58', '', '2018-01-10 12:33:58', '', 'Pasay City', '#e61378', '4:00pm', 3, 3, '3', 8, 6, 'Upcoming'),
(4, 'Bataan', '2018-01-07 12:33:58', '', '2018-01-11 12:33:58', '', 'Pasay City', '#3a87ad', '11:00am', 4, 4, '4', 6, 4, 'Ongoing'),
(5, 'Quezon', '2018-01-08 12:33:58', '', '2018-01-11 12:33:58', '', 'Pasay City', '#e61378', '4:00pm', 5, 5, '5', 5, 4, 'Finished'),
(6, 'Valenzuela', '2018-01-09 12:33:58', '', '2018-01-11 12:33:58', '', 'Pasay City', '#3a87ad', '4:00pm', 6, 6, '6', 9, 7, 'Cancelled'),
(7, 'San mateo', '2018-01-10 12:33:58', '', '2018-01-11 12:33:58', '', 'Pasay City', '#e61378', '4:00pm', 7, 7, '7', 8, 3, 'Unfulfilled'),
(8, 'Montalban', '2018-02-12 ', '', '2018-02-24 ', '', 'Pasay City', '#3a87ad', '3:00pm', 8, 8, '8', 7, 2, 'Pending'),
(9, 'Antipolo', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#e61378', '10:00am', 9, 9, '9', 7, 3, 'Pending'),
(10, 'Valenzuela', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#3a87ad', '11:00am', 10, 10, '10', 7, 1, 'Pending'),
(11, 'Pasig', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#e61378', '3:00pm', 1, 1, '1', 8, 2, 'Pending'),
(12, 'Indang Cavite', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#3a87ad', '3:00pm', 2, 2, '2', 7, 2, 'Pending'),
(13, 'Navotas', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#e61378', '4:00pm', 3, 3, '3', 9, 3, 'Pending'),
(14, 'Caloocan ', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#3a87ad', '10:00am', 4, 4, '4', 9, 4, 'Pending'),
(15, 'Montalban', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#e61378', '11:00am', 5, 5, '5', 17, 4, 'Pending'),
(16, 'Negros', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#3a87ad', '4:00pm', 6, 6, '6', 12, 1, 'Pending'),
(17, 'Pampanga', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#e61378', '3:00pm', 7, 7, '7', 14, 2, 'Pending'),
(18, 'Dumaguete', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#3a87ad', '5:00pm', 8, 8, '8', 11, 3, 'Pending'),
(19, 'Bohol', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#e61378', '1:00pm', 9, 9, '9', 13, 4, 'Pending'),
(20, 'Baguio', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '#3a87ad', '3:00pm', 10, 10, '10', 10, 2, 'Pending'),
(21, 'La presa', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '', '8:00am', 1, 1, '1', 12, 2, 'Pending'),
(22, 'Bicol', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '', '11:00am', 2, 2, '2', 11, 2, 'Pending'),
(23, 'Batangas', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '', '10:00am', 3, 3, '3', 11, 3, 'Pending'),
(24, 'Laguna', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '', '4:00pm', 4, 4, '4', 13, 2, 'Pending'),
(25, 'Marawi', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'Pasay City', '', '3:00pm', 5, 5, '5', 10, 4, 'Pending'),
(26, 'Ilocos', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '10:00am', 6, 6, '6', 12, 5, 'Pending'),
(27, 'Iloilo', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '3:00pm', 7, 7, '7', 10, 4, 'Pending'),
(28, 'Naga City', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '2:00pm', 8, 8, '8', 13, 3, 'Pending'),
(29, 'Baguio', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '4:00pm', 9, 9, '9', 14, 3, 'Pending'),
(30, 'Batangas', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '4:00pm', 10, 10, '10', 15, 2, 'Pending'),
(31, 'Baguio', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '4:00pm', 1, 1, '1', 14, 3, 'Pending'),
(32, 'Quezon', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '4:00pm', 2, 2, '2', 13, 5, 'Pending'),
(33, '', '2018-01-11 00:00:00', '', '2018-01-12 00:00:00', '', 'asd', '#d9a00d', '', 0, 0, '0', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_res_status`
--

CREATE TABLE `tbl_res_status` (
  `reservation_status_id` int(11) NOT NULL,
  `reservation_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_res_status`
--

INSERT INTO `tbl_res_status` (`reservation_status_id`, `reservation_status`) VALUES
(1, 'Pending'),
(2, 'Confirmed'),
(3, 'Upcoming'),
(4, 'Ongoing'),
(5, 'Finished'),
(6, 'Cancelled'),
(7, 'Unfulfilled');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_ID` int(11) NOT NULL,
  `car_Status` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_ID`, `car_Status`) VALUES
(3, 'Available'),
(2, 'InActive'),
(4, 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transmission`
--

CREATE TABLE `tbl_transmission` (
  `transmission_ID` int(11) NOT NULL,
  `transmission_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transmission`
--

INSERT INTO `tbl_transmission` (`transmission_ID`, `transmission_Name`) VALUES
(2, 'Automatic'),
(3, 'Continuously Variable Transmission'),
(1, 'Manual'),
(4, 'Semi Automatic & Dual Clutch');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(11) NOT NULL,
  `Lastname` char(50) NOT NULL,
  `Firstname` char(50) NOT NULL,
  `Middlename` char(50) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Position` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Lastname`, `Firstname`, `Middlename`, `Address`, `Picture`, `Email`, `Contact`, `Password`, `Username`, `Position`) VALUES
(1, 'Potolin', 'Federex', 'Abarera', 'zxczxc', 'rex.png', 'aa@gmail.com', '09098202040', '123', 'xx', 'Admin'),
(2, 'Ebacuado', 'Alvin', 'Pogi', 'asdasd', 'alvin.jpg', 'ae@gmail.com', '09091234567', '123', 'ae', 'Admin'),
(3, 'Dolorfo', 'Kien', 'Arias', 'qwerty', 'kien.jpg', 'dka@gmail.com', '09098765432', '123', 'dka', 'Admin'),
(4, 'Staff', 'Staff', 'Staff', 'Staff', '', 'staff@gmail.com', '09091212121', '123', 'staff', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_ID`),
  ADD UNIQUE KEY `brand_Name` (`brand_Name`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_ID`),
  ADD UNIQUE KEY `category_Name` (`category_Name`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_ID`);

--
-- Indexes for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`driver_ID`);

--
-- Indexes for table `tbl_engine`
--
ALTER TABLE `tbl_engine`
  ADD PRIMARY KEY (`engine_ID`),
  ADD UNIQUE KEY `engine_Name` (`engine_Name`);

--
-- Indexes for table `tbl_fleet`
--
ALTER TABLE `tbl_fleet`
  ADD PRIMARY KEY (`car_ID`),
  ADD KEY `FK_tbl_car_tbl_brand` (`brand_Name`),
  ADD KEY `FK_tbl_car_tbl_category` (`category_Name`),
  ADD KEY `FK_tbl_car_tbl_transmission` (`transmission_Name`),
  ADD KEY `FK_tbl_car_tbl_driver` (`driver_ID`),
  ADD KEY `FK_tbl_car_tbl_engine` (`engine_Name`),
  ADD KEY `FK_tbl_car_tbl_status` (`car_Status`),
  ADD KEY `FK_tbl_car_tbl_rating` (`rating`),
  ADD KEY `FK_tbl_car_tbl_fuel` (`fuel_Name`);

--
-- Indexes for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  ADD PRIMARY KEY (`fuel_ID`),
  ADD UNIQUE KEY `fuel_Name` (`fuel_Name`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rating_ID`),
  ADD UNIQUE KEY `rating` (`rating`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`reservation_ID`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_ID`),
  ADD UNIQUE KEY `car_Status` (`car_Status`);

--
-- Indexes for table `tbl_transmission`
--
ALTER TABLE `tbl_transmission`
  ADD PRIMARY KEY (`transmission_ID`),
  ADD UNIQUE KEY `transmission_Name` (`transmission_Name`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cus_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_driver`
--
ALTER TABLE `tbl_driver`
  MODIFY `driver_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_engine`
--
ALTER TABLE `tbl_engine`
  MODIFY `engine_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_fleet`
--
ALTER TABLE `tbl_fleet`
  MODIFY `car_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  MODIFY `fuel_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rating_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `reservation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_transmission`
--
ALTER TABLE `tbl_transmission`
  MODIFY `transmission_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_fleet`
--
ALTER TABLE `tbl_fleet`
  ADD CONSTRAINT `FK_tbl_car_tbl_brand` FOREIGN KEY (`brand_Name`) REFERENCES `tbl_brand` (`brand_Name`),
  ADD CONSTRAINT `FK_tbl_car_tbl_category` FOREIGN KEY (`category_Name`) REFERENCES `tbl_category` (`category_Name`),
  ADD CONSTRAINT `FK_tbl_car_tbl_driver` FOREIGN KEY (`driver_ID`) REFERENCES `tbl_driver` (`driver_ID`),
  ADD CONSTRAINT `FK_tbl_car_tbl_engine` FOREIGN KEY (`engine_Name`) REFERENCES `tbl_engine` (`engine_Name`),
  ADD CONSTRAINT `FK_tbl_car_tbl_fuel` FOREIGN KEY (`fuel_Name`) REFERENCES `tbl_fuel` (`fuel_Name`),
  ADD CONSTRAINT `FK_tbl_car_tbl_rating` FOREIGN KEY (`rating`) REFERENCES `tbl_rating` (`rating`),
  ADD CONSTRAINT `FK_tbl_car_tbl_status` FOREIGN KEY (`car_Status`) REFERENCES `tbl_status` (`car_Status`),
  ADD CONSTRAINT `FK_tbl_car_tbl_transmission` FOREIGN KEY (`transmission_Name`) REFERENCES `tbl_transmission` (`transmission_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
