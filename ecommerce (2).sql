-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 12:25 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE IF NOT EXISTS `cart_items` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=478 ;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cid`, `product_id`, `quantity`, `user_id`, `created`, `modified`) VALUES
(477, 157, 2, 1, '2016-05-07 00:24:14', '2016-05-06 22:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `name` varchar(50) NOT NULL,
  `parent` varchar(50) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `description` mediumtext,
  `status` int(11) NOT NULL DEFAULT '0',
  `position` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_pk` varchar(35) NOT NULL DEFAULT 'CURRENT_USER',
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_pk` varchar(35) NOT NULL DEFAULT 'CURRENT_USER',
  PRIMARY KEY (`name`),
  KEY `created_pk` (`created_pk`),
  KEY `updated_pk` (`updated_pk`),
  KEY `subcategory` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`name`, `parent`, `type`, `description`, `status`, `position`, `created`, `created_pk`, `updated`, `updated_pk`) VALUES
('Bollywood', 'Media', 0, NULL, 0, 0, '2016-05-06 18:27:59', '', '2016-05-06 18:27:59', ''),
('Books', NULL, 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Cameras', 'Electronics', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Children', 'Books', 0, NULL, 0, 0, '2016-05-06 18:14:29', '', '2016-05-06 18:14:29', ''),
('Clothing', NULL, 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Comics & Graphic Novels', 'Books', 0, NULL, 0, 0, '2016-04-19 01:16:40', '', '2016-04-19 01:16:40', ''),
('Computer Accessories', 'Electronics', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Consoles', 'Gaming', 0, NULL, 0, 0, '2016-05-06 18:41:14', '', '2016-05-06 18:41:14', ''),
('Cookware', 'Home & Kitchen', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Education', 'Books', 0, NULL, 0, 0, '2016-05-06 18:14:48', '', '2016-05-06 18:14:48', ''),
('Electronics', NULL, 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Fiction', 'Books', 1, 'Fiction Books', 0, 0, '2016-05-06 17:14:23', '', '2016-05-06 17:14:23', ''),
('Furniture', 'Home & Kitchen', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Gaming', NULL, 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Hollywood', 'Media', 0, NULL, 0, 0, '2016-05-06 18:27:48', '', '2016-05-06 18:27:48', ''),
('Home & Kitchen', NULL, 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Home Decor', 'Home & Kitchen', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('International', 'Music', 0, NULL, 0, 0, '2016-05-06 18:37:26', '', '2016-05-06 18:37:26', ''),
('Kids & Education', 'Media', 0, NULL, 0, 0, '2016-05-06 18:28:41', '', '2016-05-06 18:28:41', ''),
('Kitchen Appliances', 'Home & Kitchen', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Laptops', 'Electronics', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Media', NULL, 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Mobiles & Accessories', 'Electronics', 0, NULL, 0, 0, '2016-03-28 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Music', NULL, 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Non-Fiction', 'Books', 7, NULL, 0, 0, '2016-05-06 18:13:16', '', '2016-05-06 18:13:16', ''),
('PC', 'Gaming', 0, NULL, 0, 0, '2016-05-06 18:39:54', '', '2016-05-06 18:39:54', ''),
('PS4', 'Gaming', 0, NULL, 0, 0, '2016-05-06 18:40:55', '', '2016-05-06 18:40:55', ''),
('Regional', 'Media', 0, NULL, 0, 0, '2016-05-06 18:28:17', '', '2016-05-06 18:28:17', ''),
('Stationery', NULL, 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Tablets', 'Electronics', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Televisions', 'Electronics', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Tools & Hardware', 'Home & Kitchen', 0, NULL, 0, 0, '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in', '2016-03-31 00:00:00', 'rachitshah@hotmail.co.in'),
('Xbox', 'Gaming', 0, NULL, 0, 0, '2016-05-06 18:40:34', '', '2016-05-06 18:40:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(4000) NOT NULL,
  `response` varchar(4000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `posted_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_pk` varchar(35) DEFAULT NULL,
  `created_ip` varchar(15) NOT NULL,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_pk` varchar(35) DEFAULT NULL,
  `updated_ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `cart` varchar(2048) NOT NULL,
  `shipped` tinyint(1) NOT NULL DEFAULT '0',
  `shipped_date` date DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT CURRENT_TIMESTAMP,
  `new` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `category_pk` varchar(50) NOT NULL,
  `category_par` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` blob,
  `description` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `sale` varchar(100) DEFAULT NULL,
  `pricesale` varchar(10) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_pk` varchar(35) NOT NULL,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_pk` varchar(35) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `category_pk` (`category_pk`),
  KEY `created_pk` (`created_pk`),
  KEY `updated_pk` (`updated_pk`),
  KEY `images` (`photo`(767))
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=518304163 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `category_pk`, `category_par`, `name`, `photo`, `description`, `price`, `sale`, `pricesale`, `created`, `created_pk`, `updated`, `updated_pk`) VALUES
(153, 'Fiction', 'Books', 'Harry Potter and the Cursed Child', NULL, 'ssafs\r\nfdsfds', '1000', '0', '1000', '2016-05-06 17:15:03', '', '2016-05-06 17:15:03', ''),
(155, 'Televisions', 'Electronics', 'Sony Bravia 32''', NULL, '<ul>\r\n  <li>LED Display</li>\r\n  <li>80 cm (32)</li>\r\n  <li>WXGA, 1280 x 800</li>\r\n  <li>2 x HDMI, 1 x USB</li>\r\n  <li>Refresh Rate - Motionflow XR 100 Hz</li>\r\n</ul>', '35000', '0', '35000', '2016-05-06 17:31:21', '', '2016-05-06 17:31:21', ''),
(156, 'Mobiles & Accessories', 'Electronics', 'Google NEXUS 6p', NULL, '<ul>\r\n  <li>Android v6 (Marshmallow) OS</li>\r\n  <li>12.3 MP Primary Camera</li>\r\n  <li>8 MP Secondary Camera</li>\r\n  <li>4G LTE (Cat 6)</li>\r\n  <li>5.7 inch Touchscreen</li>\r\n  <li>2 GHz Qualcomm Snapdragon 810 v2.1 64-bit Octa Core Processor</li>\r\n  <li>Wi-Fi Enabled</li>\r\n  <li>RAM: 3 GB LPDDR4</li>\r\n</ul>', '43000', '0', '43000', '2016-05-06 17:43:18', '', '2016-05-06 17:43:18', ''),
(157, 'Mobiles & Accessories', 'Electronics', 'Apple iPhone 6S', NULL, '<ul>\r\n  <li>4.7 inch Touchscreen</li>\r\n  <li>Bluetooth Support</li>\r\n  <li>iOS 9</li>\r\n  <li>5 MP Secondary Camera</li>\r\n  <li>Wi-Fi Enabled</li>\r\n  <li>12 MP Primary Camera</li>\r\n  <li>3D Touch & Live Photos</li>\r\n</ul>', '48999', '0', '48', '2016-05-06 17:53:09', '', '2016-05-06 17:53:09', ''),
(158, 'Laptops', 'Electronics', 'HP envy15 X360', NULL, '<ul>\r\n  <li>Intel Core i5-6200U Processor</li>\r\n  <li>15.6" FHD IPS WLED-backlit touch screen (1920 x 1080) CONNECTIVITY</li>\r\n  <li>NVIDIA GeForce 930M 2GB Graphics card</li>\r\n  <li>Windows 10 Home 64Bit</li>\r\n</ul>', '74889', '0', '74', '2016-05-06 17:56:39', '', '2016-05-06 17:56:39', ''),
(159, 'Cameras', 'Electronics', 'Nikon D3200', NULL, '<ul>\r\n  <li>Full HD Recording</li>\r\n  <li>3 inch TFT LCD</li>\r\n  <li>24.2 Megapixel Camera</li>\r\n  <li>CMOS Image Sensor</li>\r\n  <li>ISO 100 - ISO 6400 Sensitivity</li>\r\n  <li>35 mm Equivalent Focal Length: 27 - 82.5 mm</li>\r\n  <li>f/3.0 - f/5.6 Aperture</li>\r\n</ul>', '21990', '', '21', '2016-05-06 17:58:29', '', '2016-05-06 17:58:29', ''),
(160, 'Computer Accessories', 'Electronics', 'JBL T250SI On-the-ear Headphone', NULL, '<ul>\r\n  <li>Supra-aural Closed Headphone</li>\r\n  <li>On-the-ear Headphone</li>\r\n  <li>Over-the-head Design</li>\r\n  <li>Wired Connectivity</li>\r\n</ul>', '999', '', '999', '2016-05-06 18:00:10', '', '2016-05-06 18:00:10', ''),
(161, 'Cookware', 'Home & Kitchen', 'Prestige 2 L Pressure Cooker', NULL, '<ul>\r\n  <li>2 L</li>\r\n  <li>Outer Lid</li>\r\n  <li>Aluminium</li>\r\n</ul>', '922', '', '922', '2016-05-06 18:02:37', '', '2016-05-06 18:02:37', ''),
(162, 'Kitchen Appliances', 'Home & Kitchen', 'Birdy Dinner Set', NULL, '<ul>\r\n  <li>Melamine</li>\r\n  <li>Bowl, Plate, Serving Tray, Spoon</li>\r\n</ul>', '1499', '0', '1', '2016-05-06 18:04:41', '', '2016-05-06 18:04:41', ''),
(163, 'Furniture', 'Home & Kitchen', 'Evok Poland Fabric 1 Seater Sofa', NULL, 'Stun all your peers and relatives by decorating your room with this sofa that is brought to you by EVOK. Expertly crafted, this home decor item is a perfect item to grab compliments from the viewers. Detailed to perfection, this furnishing item is a tough beauty and ensures long lasting use. This spacious furniture features a well structured frame with a neat finish. Further, the classic color of this home decor item add to its beauty. With ample space to keep your essentials, this decor item makes for a great furniture choice.', '25925', '0', '25', '2016-05-06 18:06:43', '', '2016-05-06 18:06:43', ''),
(164, 'Tools & Hardware', 'Home & Kitchen', 'Globalepartner Painting Machine PZGEP64 Airless Sprayer', NULL, '<ul>\r\n  <li>Airless Sprayer</li>\r\n  <li>Spray Distance 100mm</li>\r\n  <li>Easy To Use</li>\r\n  <li>Easy To Carry</li>\r\n</ul>', '1449', '', '1', '2016-05-06 18:09:16', '', '2016-05-06 18:09:16', ''),
(165, 'Home Decor', 'Home & Kitchen', 'Gojeeva Sconce Wall Lamp', NULL, '<ul>\r\n  <li>Durable Construction</li>\r\n  <li>Ideal For Home Decor</li>\r\n  <li>Attractive Design</li>\r\n</ul>', '1191', '', '1', '2016-05-06 18:11:50', '', '2016-05-06 18:11:50', ''),
(167, 'Non-Fiction', 'Books', 'Playing It My Way: My Autobiography', NULL, '<ul>\r\n  <li>Author: Sachin Tendulkar</li>\r\n  <li>Publisher: Hodder & Stoughton</li>\r\n</ul>', '349', '0', '349', '2016-05-06 18:21:21', '', '2016-05-06 18:21:21', ''),
(168, 'Comics & Graphic Novels', 'Books', 'Batman: Year One', NULL, '<ul>\r\n  <li>Author: David Mazzucchelli, Frank Miller</li>\r\n  <li>Publisher: DC Comics</li>\r\n</ul>', '674', '0', '674', '2016-05-06 18:22:38', '', '2016-05-06 18:22:38', ''),
(169, 'Children', 'Books', 'Rodrick Rules (Diary of a Wimpy Kid book 2) (English)', NULL, '<ul>\r\n  <li>Language: English</li>\r\n  <li>Publisher: Penguin Books Ltd</li>\r\n</ul>', '299', '0', '299', '2016-05-06 18:24:31', '', '2016-05-06 18:24:31', ''),
(170, 'Education', 'Books', 'Beginning PHP6, Apache, Mysql Web Development (English)', NULL, '<ul>\r\n  <li>Language: English</li>\r\n  <li>Author: Timothy Boronczyk, Elizabeth Naramore, Jason Gerner, Yann Le Scouarnec, Jeremy Stolz, Michael K. Glass</li>\r\n  <li>Publisher: Wiley India Pvt Ltd</li>\r\n</ul>', '699', '', '699', '2016-05-06 18:27:07', '', '2016-05-06 18:27:07', ''),
(171, 'Hollywood', 'Media', 'THE REVENANT(DVD English)', NULL, '<ul>\r\n  <li>Total Number of Discs	1</li>\r\n  <li>Video Encoding	Pal 2,5</li>\r\n  <li>Aspect Ratio	16:9 (Widescreen)</li>\r\n  <li>Total Running Time	156 Mins</li>\r\n  <li>Subtitle Languages	ENGLISH</li>\r\n</ul>', '479', '', '479', '2016-05-06 18:33:05', '', '2016-05-06 18:33:05', ''),
(172, 'Bollywood', 'Media', 'Queen(DVD Hindi)', NULL, '<ul>\r\n  <li>Publisher	Excel Home Videos</li>\r\n  <li>Format	DVD</li>\r\n  <li>Genre	Drama</li>\r\n  <li>Language	Hindi</li>\r\n  <li>Title	Queen</li>\r\n</ul>', '299', '', '299', '2016-05-06 18:34:18', '', '2016-05-06 18:34:18', ''),
(173, 'Regional', 'Media', 'Kanmani Namma Nanbargal(DVD Tamil)', NULL, '<ul>\r\n  <li>Publisher	Infobells Interactive Solutions</li>\r\n  <li>Format	DVD</li>\r\n  <li>Genre	Drama</li>\r\n  <li>Language	Tamil</li>\r\n  <li>Title	Kanmani Namma Nanbargal</li>\r\n</ul>', '149', '', '149', '2016-05-06 18:35:34', '', '2016-05-06 18:35:34', ''),
(174, 'Kids & Education', 'Media', 'Ice Age-Trilogy(Movie, DVD)', NULL, '<ul>\r\n  <li>Year	2009</li>\r\n  <li>Category	Movies</li>\r\n  <li>Format	DVD</li>\r\n  <li>Manufacturer	Excel Productions Audio Visual</li>\r\n  <li>Video Encoding	NTSC 3, 5</li>\r\n  <li>Subtitles	English</li>\r\n  <li>Actor	Eunice Cho, Karen Disher</li>\r\n  <li>Genre	Animation, Kids</li>\r\n  <li>Number Of Discs	4</li>\r\n  <li>Language	English</li>\r\n  <li>Title	Ice Age-Trilogy</li>\r\n</ul>', '949', '', '949', '2016-05-06 18:36:38', '', '2016-05-06 18:36:38', ''),
(175, 'International', 'Music', '25 : Adele(Music, Audio CD)', NULL, '<ul>\r\n  <li>Category	Music</li>\r\n  <li>Format	Audio CD</li>\r\n  <li>Genre	Pop</li>\r\n  <li>Number Of Discs	1</li>\r\n  <li>Language	English</li>\r\n  <li>Label	Universal Music India</li>\r\n  <li>Artist	Adele</li>\r\n  <li>Title	25 : Adele</li>\r\n</ul>', '395', '', '395', '2016-05-06 18:43:08', '', '2016-05-06 18:43:08', ''),
(176, 'International', 'Music', 'Purpose : Audio CD(Music, Audio CD)', NULL, '<ul>\r\n  <li>Category	Music</li>\r\n  <li>Format	Audio CD</li>\r\n  <li>Genre	Pop</li>\r\n  <li>Number Of Discs	1</li>\r\n  <li>Language	English</li>\r\n  <li>Label	Universal Music India</li>\r\n  <li>Artist	Justin Bieber</li>\r\n  <li>Title	Purpose : Audio CD</li>\r\n</ul>', '395', '', '395', '2016-05-06 18:45:11', '', '2016-05-06 18:45:11', ''),
(177, 'PC', 'Gaming', 'Grand Theft Auto IV & Episodes From Liberty City (Complete Edition)', NULL, '<ul>\r\n  <li>PC: Platform</li>\r\n  <li>Genre: Action-Adventure</li>\r\n</ul>', '580', '', '580', '2016-05-06 18:46:26', '', '2016-05-06 18:46:26', ''),
(178, 'Xbox', 'Gaming', 'Call Of Duty: Ghosts(Games, PS4)', NULL, '<ul>\r\n  <li>Publisher	Ubisoft</li>\r\n  <li>Category	Games</li>\r\n  <li>Genre	Action-Adventure</li>\r\n  <li>Mode	Single-Player, Multi-Player</li>\r\n  <li>Platform	PS4</li>\r\n  <li>Title	Call Of Duty: Ghosts</li>\r\n</ul>', '1525', '', '1525', '2016-05-06 18:51:54', '', '2016-05-06 18:51:54', ''),
(179, 'PS4', 'Gaming', 'FIFA 14(for Xbox One)', NULL, '<ul>\r\n  <li>Publisher	Electronic Arts</li>\r\n  <li>Video Encoding	PAL</li>\r\n  <li>Edition	Standard Edition</li>\r\n  <li>Type	Full Game</li>\r\n  <li>Title Name	FIFA 14</li>\r\n  <li>Genre	Sports</li>\r\n  <li>Game Modes	Single-Player, Multi-Player</li>\r\n  <li>Platform	Xbox One</li>\r\n  <li>Developer	EA Canada</li>\r\n</ul>\r\n', '752', '', '752', '2016-05-06 18:52:45', '', '2016-05-06 18:52:45', ''),
(180, 'Consoles', 'Gaming', 'Microsoft Xbox One 500 GB with Gears of War(Black)', NULL, '<ul>\r\n  <li>All in One Entertainment Device</li>\r\n  <li>Enjoy the Original Gears of War Remastered in 1080p, Play Five Campaign Chapters Never Released on Console, Experience Competitive Multiplayer in 60FPS with 19 Maps and Six Game Modes</li>\r\n  <li>Play Halo 5: Guardians, Rise of the Tomb Raider, and Forza Motorsport 6</li>\r\n  <li>Experience the Most Advanced Multiplayer on Xbox Live</li>\r\n  <li>Quickly Awitch Back and Forth between Games, Live TV and Apps</li>\r\n  <li>Includes Gears of War Game Token</li>\r\n</ul>', '32990', '', '32', '2016-05-06 18:54:29', '', '2016-05-06 18:54:29', ''),
(518304162, 'Comics & Graphic Novels', 'Books', 'One Piece: East Blue 1-2-3, Vol. 1 (Omnibus Edition) (One Piece (Omnibus Edition))', NULL, 'gfdgfd', '757', '', '757', '2016-05-07 02:54:06', '', '2016-05-07 02:54:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `testblob`
--

CREATE TABLE IF NOT EXISTS `testblob` (
  `image_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `image_type` varchar(25) NOT NULL,
  `image` longblob NOT NULL,
  `image_size` varchar(25) NOT NULL,
  `image_ctgy` varchar(25) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  KEY `image_id` (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `upload_data`
--

CREATE TABLE IF NOT EXISTS `upload_data` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `PROD_CODE` int(11) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `PROD_CODE` (`PROD_CODE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `upload_data`
--

INSERT INTO `upload_data` (`ID`, `PROD_CODE`, `images_path`, `date`) VALUES
(9, 518304162, 'images/06-05-2016-1462569846.jpg', '2016-05-05 18:30:00'),
(10, 153, 'images/516EhyD4A8L._SX323_BO1,204,203,200_.jpg', '2016-05-06 21:52:43'),
(11, 155, 'images/91mm75FZD8L._SX522_.jpg', '2016-05-06 21:55:21'),
(12, 156, 'images/81aFmVmUbFL._SL1500_.jpg', '2016-05-06 21:57:00'),
(13, 157, 'images/81OYkMWueCL._SL1500_.jpg', '2016-05-06 21:58:11'),
(14, 158, 'images/41+mPLFVkmL._SX450_.jpg', '2016-05-06 21:59:06'),
(15, 159, 'images/612FuN7KcML._SL1089_.jpg', '2016-05-06 22:00:46'),
(16, 160, 'images/41UwKgDSR8L.jpg', '2016-05-06 22:01:32'),
(17, 161, 'images/10000-prestige-400x400-imae26tvqcwyhpgj.jpeg', '2016-05-06 22:02:57'),
(18, 162, 'images/ds2002-birdy-400x400-imae4djhuhkn3aeu.jpeg', '2016-05-06 22:03:36'),
(19, 163, 'images/it00045726-cotton-evok-brown-brown-400x400-imae9hw2ujw8wnch.jpeg', '2016-05-06 22:05:09'),
(20, 164, 'images/pzgep36-globalepartner-400x400-imae4qy5wrq5tyy3.jpeg', '2016-05-06 22:06:02'),
(21, 167, 'images/playing-it-my-way-my-autobiography-400x400-imae2egdeguvffrs.jpeg', '2016-05-06 22:06:48'),
(22, 168, 'images/batman-year-one-400x400-imae5uwwg3wsfqzv.jpeg', '2016-05-06 22:07:16'),
(23, 169, 'images/Diary_of_a_Wimpy_Kid_Rodrick_Rules.png', '2016-05-06 22:09:21'),
(24, 170, 'images/beginning-php6-apache-mysql-web-development-400x400-imae2kf7rph9sakk.jpeg', '2016-05-06 22:09:55'),
(25, 171, 'images/the-revenant-2016-english-dvd-excel-home-videos-400x400-imaehbzmqngu4ege.jpeg', '2016-05-06 22:10:49'),
(26, 172, 'images/queen-400x400-imae4dgq8h7brseg.jpeg', '2016-05-06 22:11:23'),
(27, 173, 'images/kanmani-namma-nanbargal-400x400-imae5ede36wxdfrg.jpeg', '2016-05-06 22:12:12'),
(28, 174, 'images/ice-age-3-dawn-of-the-dinosaurs-trilogy-400x400-imadbwyxnfvffrfq.jpeg', '2016-05-06 22:12:56'),
(29, 175, 'images/25-adele-400x400-imaed64adpvdfd2h.jpeg', '2016-05-06 22:13:27'),
(30, 176, 'images/purpose-audio-cd-400x400-imaed64ahsjywnug.jpeg', '2016-05-06 22:14:15'),
(31, 177, 'images/grand-theft-auto-iv-complete-edition-400x400-imad8b8ujbmgrs52.jpeg', '2016-05-06 22:15:13'),
(32, 178, 'images/call-of-duty-ghosts-400x400-imae7da4z23zbyqz.jpeg', '2016-05-06 22:15:58'),
(33, 179, 'images/xbox-one-standard-edition-full-game-fifa-14-400x400-imaegmn9wfnvysms.jpeg', '2016-05-06 22:16:33'),
(34, 180, 'images/400x400-imaegjg7xjgcersv.jpeg', '2016-05-06 22:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pwd` tinytext NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `address` longtext NOT NULL,
  `state` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `code` decimal(6,0) NOT NULL,
  `role` varchar(35) NOT NULL DEFAULT 'user',
  `visits` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_pk` varchar(35) NOT NULL,
  `created_ip` varchar(15) NOT NULL,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_ip` varchar(15) NOT NULL,
  `updated_pk` varchar(35) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `fname`, `lname`, `phone`, `address`, `state`, `city`, `code`, `role`, `visits`, `status`, `last_login`, `created`, `created_pk`, `created_ip`, `updated`, `updated_ip`, `updated_pk`) VALUES
(0, '', '', '', '', '0', '', '', '', '0', 'user', 0, 0, '2016-03-28 01:42:20', '2016-03-28 01:42:20', '', '', '2016-03-28 01:42:20', '', ''),
(0, 'rachitshah3105@gmail.com', 'qasd3105', 'Rachit', 'Shah', '8460196109', '', '', '', '0', 'user', 0, 0, '2016-04-19 01:39:28', '2016-04-19 01:39:28', '', '', '2016-04-19 01:39:28', '', ''),
(0, 'rachitshah@hotmail.co.in', 'qwer', 'Rachit', '', '0', '', '', '', '0', 'user', 0, 0, '2016-02-14 15:58:41', '2016-02-14 15:58:41', '', '', '2016-02-14 15:58:41', '', ''),
(0, 'rakeshshah@gmail.com', 'asdfghjkl', 'Rakesh', 'Shah', '9426748368', '', '', '', '0', 'user', 0, 0, '2016-04-19 02:05:51', '2016-04-19 02:05:51', '', '', '2016-04-19 02:05:51', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`created_pk`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `categories_ibfk_2` FOREIGN KEY (`updated_pk`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `subcategory` FOREIGN KEY (`parent`) REFERENCES `categories` (`name`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk2` FOREIGN KEY (`created_pk`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `products_ibfk3` FOREIGN KEY (`updated_pk`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_pk`) REFERENCES `categories` (`name`);

--
-- Constraints for table `upload_data`
--
ALTER TABLE `upload_data`
  ADD CONSTRAINT `images` FOREIGN KEY (`PROD_CODE`) REFERENCES `products` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
