-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 11:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cate_ID` int(20) NOT NULL,
  `Cate_Name` varchar(500) DEFAULT NULL,
  `parentId` int(20) DEFAULT NULL,
  `Cate_Type` varchar(500) DEFAULT NULL,
  `Link` varchar(500) DEFAULT NULL,
  `Amount` int(20) DEFAULT NULL,
  `slug` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cate_ID`, `Cate_Name`, `parentId`, `Cate_Type`, `Link`, `Amount`, `slug`) VALUES
(1, 'Calenders', NULL, 'shop', 'http://dummyimage.com/250x300.png/cc0000/ffffff', 4, 'calender'),
(2, 'Diaries', NULL, 'shop', 'http://dummyimage.com/250x300.png/5fa2dd/ffffff', 4, 'diary'),
(3, 'New Design', NULL, 'main', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'new-design'),
(4, 'Lunisolar', 1, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'calender--lunisolar'),
(5, 'Solar', 1, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'calender--solar'),
(6, 'Lunar', 1, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'calender--lunar'),
(7, 'Seasonal', 1, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'calender--seasonal'),
(8, 'Travel', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--travel'),
(9, 'Reflextive', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--reflextive'),
(10, 'Gratitude', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--gratitude'),
(11, 'Dream', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--dream'),
(12, 'Diet', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--diet'),
(13, 'Health', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--health'),
(14, 'Work', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--work'),
(15, 'Secret', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--secret'),
(16, 'General', 2, 'shop', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'diary--general'),
(17, 'Best Seller', NULL, 'main', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'best-seller'),
(18, 'Popular', NULL, 'main', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'popular'),
(19, 'Favorite', NULL, 'main', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'favorite'),
(20, 'Limited Edition Calenders', 3, 'main', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'new-design--limited-edition-calenders'),
(21, 'Limited Edition Diaries', 3, 'main', 'http://dummyimage.com/250x300.png/dddddd/000000', 4, 'new-design--limited-edition-diaries');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(20) NOT NULL,
  `code` varchar(500) DEFAULT NULL,
  `VaL` varchar(500) DEFAULT NULL,
  `img_url` varchar(500) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `code`, `VaL`, `img_url`, `slug`) VALUES
(1, 'logo', 'assets/img/logo.png', 'img/logo', '/'),
(2, 'hotline', '097.865.4921', '', NULL),
(3, 'GioiThieu-moTaNho-Khoi1', 'Hello, welcome to', '', ''),
(4, 'GioiThieu-moTaLon-Khoi1', 'My First Project', '', ''),
(5, 'GioiThieu-noiDung-Khoi1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop pu', '', ''),
(6, 'GioiThieu-anh-Khoi1', 'https://ssl.tzoo-img.com/images/blog/legacyblog/us/wp-content/uploads/2018/02/1_BoracayIsland_WhiteBeach_Philippines_shutterstock_401484094.jpg?width=412&spr=3', 'https://ssl.tzoo-img.com/images/blog/legacyblog/us/wp-content/uploads/2018/02/1_BoracayIsland_WhiteBeach_Philippines_shutterstock_401484094.jpg?width=412&spr=3', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(20) NOT NULL,
  `Menu_Name` varchar(500) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `parentId` int(20) DEFAULT NULL,
  `Locat` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Menu_Name`, `slug`, `parentId`, `Locat`) VALUES
(1, 'Home', 'index.php', NULL, 'nav-bar'),
(2, 'Calenders', '/calender', NULL, 'nav-bar'),
(3, 'Diaries', '/diary', NULL, 'nav-bar'),
(4, 'About', 'about.php', NULL, 'nav-bar'),
(5, 'Contact', 'contact.php', NULL, 'nav-bar'),
(6, 'Lunisolar', '/calender--lunisolar', 2, 'nav-bar'),
(7, 'Solar', '/calender--solar', 2, 'nav-bar'),
(8, 'Lunar', '/calender--lunar', 2, 'nav-bar'),
(9, 'Seasonal', '/calender--seasonal', 2, 'nav-bar'),
(10, 'Travel', '/diary--travel', 3, 'nav-bar'),
(11, 'Reflextive', '/diary--reflextive', 3, 'nav-bar'),
(12, 'Gratitude', '/diary--gratitude', 3, 'nav-bar'),
(13, 'Dream', '/diary--dream', 3, 'nav-bar'),
(14, 'Diet', '/diary--diet', 3, 'nav-bar'),
(15, 'Health', '/diary--health', 3, 'nav-bar'),
(16, 'Work', '/diary--work', 3, 'nav-bar'),
(17, 'Secret', '/diary--secret', 3, 'nav-bar'),
(18, 'General', '/diary--general', 3, 'nav-bar');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Pro_ID` int(20) NOT NULL,
  `Pro_Name` varchar(500) DEFAULT NULL,
  `Descriptions` varchar(500) DEFAULT NULL,
  `Pro_Avatar` varchar(500) DEFAULT NULL,
  `Pro_IMG` varchar(500) DEFAULT NULL,
  `rating` int(20) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `size` varchar(500) DEFAULT NULL,
  `Quantity` int(255) DEFAULT NULL,
  `Discount` varchar(500) DEFAULT NULL,
  `Details` text DEFAULT NULL,
  `Types` varchar(500) DEFAULT NULL,
  `slug` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pro_ID`, `Pro_Name`, `Descriptions`, `Pro_Avatar`, `Pro_IMG`, `rating`, `price`, `size`, `Quantity`, `Discount`, `Details`, `Types`, `slug`) VALUES
(1, 'lunisolar-1', 'Lorem Ipsum is simply dummy text.', 'http://dummyimage.com/600x200.png/dddddd/000000', 'https://graphix.co.nz/wp-content/uploads/2021/02/calendarwebresized.jpg', 5, '100', 'm', 10, '50%', 'assets/doc/pro.docx', 'ca-ls', '#111111'),
(2, 'solar-1', 'Lorem Ipsum is simply dummy text.', 'http://dummyimage.com/600x200.png/dddddd/000000', 'https://graphix.co.nz/wp-content/uploads/2021/02/calendarwebresized.jpg', 4, '100', 's', 10, '50%', 'assets/doc/pro.docx', 'ca-sl', '#111112'),
(3, 'lunar-1', 'Lorem Ipsum is simply dummy text.', 'http://dummyimage.com/600x200.png/dddddd/000000', 'https://graphix.co.nz/wp-content/uploads/2021/02/calendarwebresized.jpg', 3, '100', 'xl', 10, '50%', 'assets/doc/pro.docx', 'ca-ln', '#111113'),
(4, 'seasonal-1', 'Lorem Ipsum is simply dummy text.', 'http://dummyimage.com/600x200.png/dddddd/000000', 'https://graphix.co.nz/wp-content/uploads/2021/02/calendarwebresized.jpg', 5, '100', 'l', 10, '50%', 'assets/doc/pro.docx', 'ca-snl', '#111114'),
(5, 'dream-1', 'Lorem Ipsum is simply dummy text.', 'http://dummyimage.com/600x200.png/dddddd/000000', 'https://graphix.co.nz/wp-content/uploads/2021/02/calendarwebresized.jpg', 4, '100', 'm', 10, '60%', 'assets/doc/pro.docx', 'di-dr', '#111115'),
(6, 'travel-1', 'Lorem Ipsum is simply dummy text.', 'http://dummyimage.com/600x200.png/dddddd/000000', 'https://graphix.co.nz/wp-content/uploads/2021/02/calendarwebresized.jpg', 3, '100', 'm', 10, '50%', 'assets/doc/pro.docx', 'di-tr', '#111116'),
(7, 'Health-1', 'Lorem Ipsum is simply dummy text.', 'http://dummyimage.com/600x200.png/dddddd/000000', 'https://graphix.co.nz/wp-content/uploads/2021/02/calendarwebresized.jpg', 5, '100', 's', 10, '50%', 'assets/doc/pro.docx', 'di-ht', '#111117'),
(8, 'secret-1', 'Lorem Ipsum is simply dummy text.', 'http://dummyimage.com/600x200.png/dddddd/000000', 'https://graphix.co.nz/wp-content/uploads/2021/02/calendarwebresized.jpg', 5, '100', 'xl', 10, '50%', 'assets/doc/pro.docx', 'di-sc', '#111118');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cate_ID`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pro_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Cate_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pro_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
