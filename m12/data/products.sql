-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2022 at 01:46 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ixd608_winestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `images` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `category`, `title`, `images`, `thumbnail`, `price`, `description`, `quantity`, `total`) VALUES
(1, '2022-11-01 00:10:32', '2022-11-01 00:10:32', 'Cabernet Sauvignon', 'Schrader', '', 'image_01.jpg', 2.99, 'Cabernet Sauvignon is a full-bodied red grape first heavily planted in the Bordeaux region. Today, it’s the most popular wine variety in the world! Wines are full-bodied with bold tannins and a long persistent finish driven mostly by the higher levels of alcohol and tannin that often accompany these wines.', 37, 0),
(2, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Cabernet Sauvignon', 'Newton', '', 'image_02.jpg', 2.99, 'Cabernet Sauvignon is a full-bodied red grape first heavily planted in the Bordeaux region. Today, it’s the most popular wine variety in the world! Wines are full-bodied with bold tannins and a long persistent finish driven mostly by the higher levels of alcohol and tannin that often accompany these wines.', 37, 0),
(3, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Cabernet Sauvignon', 'Mayacamas', '', 'image_03.jpg', 2.99, 'Cabernet Sauvignon is a full-bodied red grape first heavily planted in the Bordeaux region. Today, it’s the most popular wine variety in the world! Wines are full-bodied with bold tannins and a long persistent finish driven mostly by the higher levels of alcohol and tannin that often accompany these wines.', 37, 0),
(4, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Syrah', 'Donelan', '', 'image_04.jpg', 2.99, 'Syrah (aka Shiraz) is a full-bodied red wine that’s heavily planted in the Rhône Valley in France and Australia. The wines have intense fruit flavors and medium-weight tannins. Syrah is commonly blended with Grenache and Mourvèdre to create the red Rhône blend. The wine often has a meaty (beef broth, jerky) quality.', 37, 0),
(5, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Syrah', 'Bien Nacido', '', 'image_05.jpg', 2.99, 'Syrah (aka Shiraz) is a full-bodied red wine that’s heavily planted in the Rhône Valley in France and Australia. The wines have intense fruit flavors and medium-weight tannins. Syrah is commonly blended with Grenache and Mourvèdre to create the red Rhône blend. The wine often has a meaty (beef broth, jerky) quality.', 37, 0),
(6, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Syrah', 'Vitigno', '', 'image_06.jpg', 2.99, 'Syrah (aka Shiraz) is a full-bodied red wine that’s heavily planted in the Rhône Valley in France and Australia. The wines have intense fruit flavors and medium-weight tannins. Syrah is commonly blended with Grenache and Mourvèdre to create the red Rhône blend. The wine often has a meaty (beef broth, jerky) quality.', 37, 0),
(7, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Zinfandel', 'William Gunn', '', 'image_07.jpg', 2.99, 'Zinfandel (aka Primitivo) is a medium-bodied red wine that originated in Croatia. Wines are fruit-forward and spicy with a medium length finish. Zinfandel is a red grape that may be better known in its pink variation, White Zinfandel.', 37, 0),
(8, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Zinfandel', 'Ravens Wood', '', 'image_08.jpg', 2.99, 'Zinfandel (aka Primitivo) is a medium-bodied red wine that originated in Croatia. Wines are fruit-forward and spicy with a medium length finish. Zinfandel is a red grape that may be better known in its pink variation, White Zinfandel.', 37, 0),
(9, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Zinfandel', 'Elyse', '', 'image_09.jpg', 2.99, 'Zinfandel (aka Primitivo) is a medium-bodied red wine that originated in Croatia. Wines are fruit-forward and spicy with a medium length finish. Zinfandel is a red grape that may be better known in its pink variation, White Zinfandel.', 37, 0),
(10, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Pinot Noir', 'Kiwi Cuvee', '', 'image_10.jpg', 2.99, 'Pinot Noir is a dry, light-bodied red that was first widely planted in France. The wines typically have higher acidity and a soft, smooth, low-tannin finish.', 37, 0),
(11, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Pinot Noir', 'La Crema', '', 'image_11.jpg', 2.99, 'Pinot Noir is a dry, light-bodied red that was first widely planted in France. The wines typically have higher acidity and a soft, smooth, low-tannin finish.', 37, 0),
(12, '2022-11-01 00:39:42', '2022-11-01 00:39:42', 'Pinot Noir', 'Testa Rossa', '', 'image_12.jpg', 2.99, 'Pinot Noir is a dry, light-bodied red that was first widely planted in France. The wines typically have higher acidity and a soft, smooth, low-tannin finish.', 37, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
