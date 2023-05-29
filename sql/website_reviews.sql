-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 12:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(1, 1, 'Walter', 'This is a great high-quality restaurant with great steaks, chips and burgers, amongst other things. \r\n\r\nIn addition the waiting staff was lovely, the wine was also excellent.', 5, '2023-01-04 21:15:02'),
(2, 1, 'Hank', 'Great place to take your family, loved the burgers, fish, and starters.', 4, '2023-01-05 17:57:58'),
(3, 1, 'Keith', 'Great place with great food minor service issues can be improved.', 4, '2023-01-05 18:20:51'),
(4, 2, 'Jesse', 'Great Place for cheap, quick food, with lovely pork sandwiches, chips and cheesy chips.', 5, '2023-01-05 18:21:41'),
(5, 2, 'Keith', 'Pretty good food, but not up to my standard, I would have liked the cheese on the cheesy chips to be melted more.', 3, '2023-01-05 18:23:13'),
(6, 2, 'John Doe', 'Great place to grab a quick bite to eat.', 5, '2023-01-05 18:33:44'),
(7, 3, 'Hank', 'Good place to get quick german food.', 4, '2023-01-05 18:35:54'),
(8, 3, 'Keith', 'Not great food for the price', 2, '2023-01-05 18:38:24'),
(9, 3, 'Jesse', 'Excellent place to get cheap food.', 5, '2023-01-05 18:39:16'),
(10, 4, 'Walter', 'nice to get out into nature and explore the gardens.', 5, '2023-01-05 18:40:37'),
(11, 4, 'WaltJR', 'I think it is a great place especially the walks around the gardens.', 4, '2023-01-05 18:41:22'),
(12, 4, 'Hank', 'a nice trip across the ferry for a good price. it is a wonderful experience truly recommend it. ', 4, '2023-01-05 18:42:14'),
(13, 5, 'Jesse', 'Something great about seeing santa really gets you in the christmas spirit.', 4, '2023-01-05 18:43:04'),
(14, 5, 'Hank', 'My kids loved it would really recommend it.', 5, '2023-01-05 18:43:25'),
(15, 5, 'John Doe', 'Not the best grotto I have ever been to.', 3, '2023-01-05 18:43:47'),
(16, 6, 'Hank', 'This is a wonderful christmas experience especially inside the house and exploring the nature reserve.', 5, '2023-01-05 18:51:24'),
(17, 6, 'Walter', 'Great Christmas Event can be a bit cold though', 4, '2023-01-05 18:51:43'),
(18, 6, 'Jesse', 'Fun for individuals and for familes.', 4, '2023-01-05 18:52:02'),
(19, 4, 'John Doe', 'Great place to take the family', 4, '2023-01-06 15:27:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
