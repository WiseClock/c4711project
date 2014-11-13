-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2014 at 08:10 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE IF NOT EXISTS `attractions` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `location` varchar(32) NOT NULL,
  `image` varchar(50) NOT NULL,
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `description` varchar(526) NOT NULL,
  `pricerange` varchar(100) NOT NULL,
  `foodtype` varchar(256) NOT NULL,
  `sound` varchar(256) NOT NULL,
  `privacy` varchar(256) NOT NULL,
  `togo` varchar(256) NOT NULL,
  `cardio` varchar(256) NOT NULL,
  `dropin` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `category`, `location`, `image`, `image1`, `image2`, `description`, `pricerange`, `foodtype`, `sound`, `privacy`, `togo`, `cardio`, `dropin`) VALUES
(4, 'Professor Mugs Pub', 'Eat', 'Great Hall', 'b1.jpg', 'b11.jpg', 'b111.jpg', 'The only restaurant style place to eat availabe at BCIT. Simple dishes like burgers and fish and chips are the main attractions of this restaurant. If you are looking for a more quality meal or just simply want to enjoy a drink with your friends, this is the dining spot on campus for you.', '10-30$ for one', 'Food Type: Western', '', '', 'Take-out: Yes', '', ''),
(5, 'The Fresh Grille', 'Eat', 'Great Hall', 'b2.jpg', 'b22.jpg', 'b222.jpg', 'The fresh grille offers a more healthy aproach to fast food at bcit. With a wide veriety of multi cultural dishes you will not be dissapointed. These if something for everyone.', '10-20$ for one', 'Food Type: Western Fusion', '', '', 'Take-out: Yes', '', ''),
(6, 'Quizno', 'Eat', 'Great Hall', 'b3.jpg', 'b33.jpg', 'b333.jpg', 'If you are looking for a filling quick meal quiznos is the place to go. It offers a wide variety of subs if you are looking to be healthy or just simply trying to get bang for your buck.', '5-15$ for one', 'Food Type: Casual Western', '', '', 'Take-out: Yes', '', ''),
(1, 'Weight Gym', 'Play', 'Beside eh pod', 'a1.jpg', 'a11.jpg', 'a111.jpg', 'Our weight gym has a very flexible hours as well as all the equipment you need to make BCIT your main workout place. There is a decent amount of room within the gym considering the equipment. The best part about the BCIT gym is that it is never really that', 'Free if student|| 6.50$ per visit|| Monthly and yearly rates available online', '', '', '', '', 'Cardio Level(1-10): < 5', 'Drop-in: Yes'),
(2, 'Climbing Wall', 'Play', 'Beside eh pod', 'a22.jpg', 'a2.jpg', 'a222.jpg', 'One of our proud recreation features at BCIT is our climbing wall. Our Student Staff are there to assist you to safely manoeuvre the 20 foot wall, help belay you up and down and show you climbing techniques. The Climbing wall is always changing so there are always different routes to climb. Come meet our friendly and experienced staff and start climbing at BCIT today.', 'Public-6.00$||Students-3.00$||Staff-4.00$||', '', '', '', '', 'Cardio Level(1-10): < 6', 'Drop-in: Yes'),
(3, 'Cycling', 'Play', 'SE16', 'a3.jpg', 'a33.jpg', 'a333.jpg', 'If you are cycling around BCIT or this your form of transporation there are many services available to you. There are showers changing rooms and lockers as well as very secure areas to study your bicycle. We even offer bike maintanace and repair to always keep your bike in working condition. ', 'Free', '', '', '', '', 'Cardio Level(1-10): < 6', 'Drop-in: No'),
(7, 'Library', 'Study', 'SE12', 'c1.jpg', 'c11.jpg', 'c111.jpg', 'Normal study setting. There are seating areas for single students trying to study as well as for groups trying to study cooperatively. Do not be worried about not finding room to study. The library has multiple levels and a lot of tables there is almost guranteed room available.', 'Free', '', 'Sound Level: Avarage - Loud', 'Privacy Level: Avarage', '', '', ''),
(8, 'Eh pod', 'Study', 'SE16', 'c2.jpg', 'c22.jpg', 'c222.jpg', 'The eh pod is very fast pace and versitile study area. There a lot of computers avaiable if you choose to use one as well as printers. There are a lot of study rooms also located around the eh pod. ', 'Free', '', 'Sound Level: Loud', 'Privacy Level: Crowded', '', '', ''),
(9, 'Study rooms', 'Study', 'All around campus', 'c3.jpg', 'c33.jpg', 'c333.jpg', 'Study rooms are one of the great benefits at BCIT. If you do not enjoy studying in a crowded enviroment where there is a lot of noise these rooms are ideal for you. These rooms are private and quiet, perfect for group projects to help on focus and productivity. Most of the rooms include a white board or a computer with a  television to help present things to the group inside the room.   ', 'Free online || 2 dollars if sign up at the library', '', 'Sound Level: Quiet', 'Privacy Level: Discrete', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
