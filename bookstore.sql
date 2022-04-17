-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 02:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `checkout_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `name`, `address`, `mobile`, `checkout_id`) VALUES
(9, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '6677889988', '6124041b92802'),
(10, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '6124049685bf2'),
(11, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612406f912b82'),
(12, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '61247d729fd45'),
(13, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '61247e1f2a2d2'),
(14, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '6124837753e8b'),
(15, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612b9539d6061'),
(16, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612c6b61e68ab'),
(17, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612cd3ffabbde'),
(18, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612cd45d3a4d1'),
(19, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612cd7269a22b'),
(20, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612cdafca9f50'),
(21, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612db3c81e7ba'),
(22, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612db4bd0c2e7'),
(23, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612db546e1945'),
(24, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612db58889cf8'),
(25, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612db5bac5d40'),
(26, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612dbf410cbb9'),
(27, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '612dc38c1b076'),
(28, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01959631391', '6135ae82a9269'),
(29, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613cee32bd368'),
(30, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01959631391', '613ceebc1cbd6'),
(31, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613e2c94f1491'),
(32, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613e2cc590964'),
(33, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613e358055149'),
(34, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613e36aa9da6f'),
(35, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613eda24d6c62'),
(36, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613eda7a024c7'),
(37, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613eeceb05de2'),
(38, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613ef533eef8b'),
(39, 7, 'Sayed Fahim', 'Matuail, Dhaka ,,', '01873445740', '613efa64aaa08'),
(40, 4, 'Sifatulla', 'Matuail, Dhaka ,,', '01303169673', '613f191064ed5');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `1` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`1`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(100) NOT NULL,
  `book_name` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL,
  `author` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `img`, `author`, `price`, `category`) VALUES
(102, 'Learn PHP', 'images/184287648454469827844911113PHP.jpg', 'Barry Page', '500', 'CSE'),
(103, 'HTML and CSS Design and Build Websites', 'images/3654184701702533166HTML-and-CSS-Duckett-cover.jpg', 'Jon Duckett', '200', 'CSE'),
(105, 'A Smarter Way to Learn HTML and CSS Learn it faster Remember it longer', 'images/1572175381813916101a-smarter-way-to-learn-HTML-and-CSS-1.jpg', 'Mark Myers', '420', 'BEST');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `book_id` varchar(100) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `book_id`, `book_name`, `img`, `price`, `total_price`, `quantity`, `user_id`) VALUES
(11, '105', 'A Smarter Way to Learn HTML and CSS Learn it faster Remember it longer', 'images/1572175381813916101a-smarter-way-to-learn-HTML-and-CSS-1.jpg', '420', '420', '1', 3),
(12, '102', 'Learn PHP', 'images/184287648454469827844911113PHP.jpg', '500', '500', '1', 3),
(32, '105', 'A Smarter Way to Learn HTML and CSS Learn it faster Remember it longer', 'images/1572175381813916101a-smarter-way-to-learn-HTML-and-CSS-1.jpg', '420', '1260', '3', 4),
(34, '102', 'Learn PHP', 'images/184287648454469827844911113PHP.jpg', '500', '500', '1', 4),
(35, '105', 'A Smarter Way to Learn HTML and CSS Learn it faster Remember it longer', 'images/1572175381813916101a-smarter-way-to-learn-HTML-and-CSS-1.jpg', '420', '420', '1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `name`, `mobile`, `image`, `city`) VALUES
(4, 'sifatulla.nsu2018@northsouth.edu', '$2y$10$rFpiGgm81gk3IDv0uG8EB.TJradgxDqauY4AZNoWwD9vYrpyBcvgu', 'Sifatulla', '01959631391', 'images/1344.jpg', 'Dhaka'),
(6, 'sifat136479@gmail.com', '$2y$10$hMpgdyR/OFSF9cX/C5JvGOGfMIv0k7lURZohsXFcJEocrMVZ7AvyK', 'Sifatulla', '01303169673', 'images/1820.jpg', ''),
(7, 'abu.fahim@northsouth.edu', '$2y$10$6VDrKIjdf1G9Jgy/SfYRCeTXuj5oTkK.oG1UsYPD8.SvA2m6ktRCy', 'Sayed Fahim', '01873445740', 'images/1346.jpg', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sno` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `book_id` varchar(200) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_of_purchase` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sno`, `order_id`, `book_id`, `book_name`, `img`, `price`, `quantity`, `total_price`, `user_id`, `date_of_purchase`, `status`, `payment_method`, `paid`) VALUES
(20, '16773440984', '105', 'A Smarter Way to Learn HTML and CSS Learn it faster Remember it longer', 'images/1572175381813916101a-smarter-way-to-learn-HTML-and-CSS-1.jpg', '420', 1, '420', '4', '2021-09-06 12:00:40', 'delivered', 'COD', 'no'),
(22, '15904327664', '102', 'Learn PHP', 'images/184287648454469827844911113PHP.jpg', '500', 1, '500', '4', '2021-09-11 11:58:23', 'order placed', 'COD', 'no'),
(23, '18835856064', '103', 'HTML and CSS Design and Build Websites', 'images/3654184701702533166HTML-and-CSS-Duckett-cover.jpg', '200', 1, '200', '4', '2021-09-11 11:58:24', 'order placed', 'COD', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `order_address`
--

CREATE TABLE `order_address` (
  `id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `order_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_address`
--

INSERT INTO `order_address` (`id`, `address_id`, `order_id`) VALUES
(8, 9, '13293163244'),
(9, 18, '21412718694'),
(10, 18, '11603068624'),
(11, 19, '278749064'),
(12, 20, '16173574724'),
(13, 21, '5438649014'),
(14, 22, '8694514064'),
(15, 23, '7092669884'),
(16, 24, '127635384'),
(17, 25, '13448917634'),
(18, 26, '12650197634'),
(19, 27, '9193388744'),
(20, 28, '16773440984'),
(21, 29, '7675390464'),
(22, 29, '15904327664'),
(23, 29, '18835856064'),
(24, 30, '16826094964');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`1`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `order_address`
--
ALTER TABLE `order_address`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `1` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_address`
--
ALTER TABLE `order_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
