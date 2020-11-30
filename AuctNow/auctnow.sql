-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 05:51 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` text NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_owner` text NOT NULL,
  `tag` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `prod_base_price` float NOT NULL,
  `prod_end_date` datetime NOT NULL,
  `prod_previous_bid` float NOT NULL DEFAULT 0,
  `prod_highest_bid` float NOT NULL DEFAULT 0,
  `prod_highest_bidder` text NOT NULL,
  `prod_status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_desc`, `prod_owner`, `tag`, `img1`, `img2`, `img3`, `img4`, `prod_base_price`, `prod_end_date`, `prod_previous_bid`, `prod_highest_bid`, `prod_highest_bidder`, `prod_status`) VALUES
(1, 'Sony PS 4', '1 Unit of PlayStation 4 Console, DualShock 4 Controller, Mono Headset, HDMI Cable, Power Cable, DualShock 4 Charger Cable (USB to micro USB), Quick Guide', 'abc@abc.co', 'ps4 gaming console', 'ps41.jpeg', 'ps42.jpeg', 'ps43.jpeg', 'ps44.jpeg', 1000, '2020-12-25 15:25:00', 1000, 1001, '', 1),
(2, 'Milton Duo 1000 ml Flask', 'Milton Thermosteel water flask is made from 18/8 stainless steel. This Insulated double walled vacuum water flask is designed for maximum temperature retention that keeps your favourite drinks hot/cold without altering their temperatures for a prolonged period of time.', 'jugalgala@xyz', 'flask 1000ml Milton Duo', 'flask1.jpeg', 'flask2.jpeg', 'flask3.jpeg', 'flask4.jpeg', 200, '2021-04-16 05:57:00', 200, 0, '', 1),
(3, 'Smitch Wi-Fi White Smart Bulb', '\r\nCreate mood lighting in your home with this Smitch smart bulb. You can control this bulb with the My Smitch app on your smartphone. You can also control the bulb through Google Assistant or Amazon Alexa. With a simple press of a button, you can change the ambiance of your home. This way, your friends and family will be amazed to see your interiors the minute they step into your home.', 'john@doe', 'Wi-Fi Smitch Smart Bulb', 'led1.jpeg', 'led2.jpeg', 'led3.jpeg', 'led4.jpeg', 200, '2021-02-10 09:52:00', 200, 0, '', 1),
(4, 'boAt Rockerz 510 Bluetooth Headset', 'If you are looking for an efficient wireless headset, then this boAt headset is ideal for you. Its 50 mm drivers bring your audio files to life so that your aural experience is immersive. Moreover, you can enjoy up to 10 hours of playback time with a fully charged battery. Furthermore, it can be connected to your media devices with the help of an AUX cable as well.\r\n', 'jae@doe', 'boAt Rockerz 510 Bluetooth Headset', 'boat1.jpeg', 'boat2.jpeg', 'boat3.jpeg', 'boat4.jpeg', 1500, '2021-08-11 10:04:00', 1500, 0, '', 1),
(5, 'Jackly Screwdriver Set', 'This screwdriver set from Jackly is ideal for your home it serves multiple purposes. It boasts an ergonomically designed rubber handle, which offers a comfortable grip. Furthermore, the tips are made of adequately hard chrome-plated steel, which makes them durable and long-lasting.\r\n\r\n32 Piece Set with Tweezer and Magnetic Shaft Handle', 'jae@doe', 'Jackly Screwdriver Set', 'screw1.jpeg', 'screw2.jpeg', 'screw3.jpeg', 'screw4.jpeg', 50, '2020-12-17 16:07:00', 50, 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_balance` float NOT NULL DEFAULT 1000,
  `user_temp_balance` float NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_balance`, `user_temp_balance`) VALUES
(4, 'abc@abc.co', '123', 1000, 0),
(3, 'sayyamgada4@gmail.com', '', 1000, 0),
(5, 'jugalgala@xyz', 'abc', 1000, 0),
(6, 'john@doe', '987', 1000, 0),
(7, 'jae@doe', 'poi', 1000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
