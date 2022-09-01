-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 11:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `Password`) VALUES
(1, 'Sanan@gmail.com', 'sanan123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `BackgroundImage` varchar(1000) NOT NULL,
  `CategoryIcon` varchar(1000) NOT NULL,
  `Description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `BackgroundImage`, `CategoryIcon`, `Description`) VALUES
(8, 'Cocktails', 'images/cocktailsbg.png', 'images/rockt.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(9, 'Cocoa', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(10, 'Non - Alcholic Beverage', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis. '),
(11, 'Legumes & Vegetables', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(12, 'Pasta', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(13, 'Coconuts', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.'),
(14, 'Biscuits', 'images/cocktailsbg.png', 'images/Brands.png', 'Pharetra ac neque, non diam, nisl volutpat facilisis facilisi. Ipsum et enim integer rhoncus aliquam. Cursus euismod diam adipiscing egestas eget egestas magnis blandit lobortis.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Id`, `Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES
(2, 'Testing Again One', 'sanan@gmail.com', '32323232', 'Testing Message', 'sdfsdfsfsfsd'),
(3, 'Testing Again One', 'sanan@gmail.com', '32323232323', 'Testing Message', 'This is a test message sent from the app');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `BrandIcon` varchar(1000) NOT NULL,
  `SKU` varchar(30) NOT NULL,
  `PrimaryImage` varchar(1000) NOT NULL,
  `SecondaryImage` varchar(100) NOT NULL,
  `Pack` varchar(50) NOT NULL,
  `CasesPerPallet` int(11) NOT NULL,
  `CasesPerContainer` int(11) NOT NULL,
  `ShelfLife` varchar(30) NOT NULL,
  `PrimaryDescription` varchar(2000) NOT NULL,
  `SecondaryDescription` varchar(1000) NOT NULL,
  `ReasonOne` varchar(1000) NOT NULL,
  `ReasonTwo` varchar(1000) NOT NULL,
  `ReasonThree` varchar(1000) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `BrandIcon`, `SKU`, `PrimaryImage`, `SecondaryImage`, `Pack`, `CasesPerPallet`, `CasesPerContainer`, `ShelfLife`, `PrimaryDescription`, `SecondaryDescription`, `ReasonOne`, `ReasonTwo`, `ReasonThree`, `CategoryId`) VALUES
(10, 'Gin & Tonic Cocktail', 'images/rockt.png', '101', 'images/Gin.png', 'images/Ellipse 23.png', '24 x 250ml', 160, 3192, '24 Months', 'Viverra ultrices diam tellus nunc vitae. Ullamcorper turpis dignissim pharetra et feugiat turpis. Imperdiet a nam in velit sed nulla risus. Ut tempus, sociis at auctor sit commodo suscipit aliquet faucibus. Egestas non suspendisse ullamcorper semper in senectus. Elementum augue ut sit vel.', 'Gin & Tonic Cocktail', 'Tortor, pellentesque placerat facilisi sed morbi imperdie', 'Tortor, pellentesque placerat facilisi sed morbi imperdie', 'Tortor, pellentesque placerat facilisi sed morbi imperdie', 8);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `Id` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `PrimaryImage` varchar(1000) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_images`
--

CREATE TABLE `recipe_images` (
  `Id` int(11) NOT NULL,
  `ImageLink` varchar(1000) NOT NULL,
  `RecipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `RecipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_steps`
--

CREATE TABLE `recipe_steps` (
  `Id` int(11) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `RecipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `recipe_images`
--
ALTER TABLE `recipe_images`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `recipe_images_ibfk_1` (`RecipeId`);

--
-- Indexes for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RecipeId` (`RecipeId`);

--
-- Indexes for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RecipeId` (`RecipeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `recipe_images`
--
ALTER TABLE `recipe_images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`);

--
-- Constraints for table `recipe_images`
--
ALTER TABLE `recipe_images`
  ADD CONSTRAINT `recipe_images_ibfk_1` FOREIGN KEY (`RecipeId`) REFERENCES `recipes` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD CONSTRAINT `recipe_ingredients_ibfk_1` FOREIGN KEY (`RecipeId`) REFERENCES `recipes` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  ADD CONSTRAINT `recipe_steps_ibfk_1` FOREIGN KEY (`RecipeId`) REFERENCES `recipes` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
