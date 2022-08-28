-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 10:09 PM
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
(5, 'Cocktails Test', 'images/productBg.png', 'images/asiukpo-logo.png', ' have 3 tables. The last two tables have a foreign key to the first on the same field. Both foreign keys are set to UPDATE CASCADE, DELETE CASCADE. When I delete a child-row in the second table, the parent row in the first table remains unchanged. But when I delete a child-row in the third table, the first row in the table is deleted!  new'),
(7, 'Pasta Products', 'images/investigations.png', 'images/asiukpo-logo.png', ' have 3 tables. The last two tables have a foreign key to the first on the same field. Both foreign keys are set to UPDATE CASCADE, DELETE CASCADE. When I delete a child-row in the second table, the parent row in the first table remains unchanged. But when I delete a child-row in the third table, the first row in the table is deleted!');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'Product One', 'images/asiukpo-logo.png', 'TB02411', 'images/Cancer-Male.png', 'images/dr-placeholder.jpg', '22x24', 45, 2330, '23 days', ' have 3 tables. The last two tables have a foreign key to the first on the same field. Both foreign keys are set to UPDATE CASCADE, DELETE CASCADE. When I delete a child row in the second table, the parent row in the first table remains unchanged. But when I delete a child row in the third table, the first row in the table is deleted!', 'Testing Again', 'one reason 1', 'reason two 2', 'reason three 3', 5),
(9, 'Product Two', 'images/general.png', 'TB02411', 'images/emergency.png', 'images/investigations.png', '23x90', 29, 2630, '33 days', ' have 3 tables. The last two tables have a foreign key to the first on the same field. Both foreign keys are set to UPDATE CASCADE, DELETE CASCADE. When I delete a child-row in the second table, the parent row in the first table remains unchanged. But when I delete a child-row in the third table, the first row in the table is deleted!', 'Testing Again', 'one reason 1', 'reason two', 'reason three', 7);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `Id` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `PrimaryImage` varchar(1000) NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`Id`, `Name`, `Description`, `PrimaryImage`, `ProductId`) VALUES
(23, 'Recipe One', ' have 3 tables. The last two tables have a foreign key to the first on the same field. Both foreign keys are set to UPDATE CASCADE, DELETE CASCADE. When I delete a child-row in the second table, the parent row in the first table remains unchanged. But when I delete a child-row in the third table, the first row in the table is deleted!', 'images/Cancer-Femalre.png', 9),
(24, 'Recipe Two Test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/RecipeMainImage.png', 8),
(25, 'Recipe Three Test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/dr-placeholder.jpg', 8),
(26, 'Recipe Three Test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/dr-placeholder.jpg', 8),
(27, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/general.png', 8),
(28, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/general.png', 8),
(29, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/general.png', 8),
(30, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/general.png', 8),
(31, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/general.png', 8),
(32, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/general.png', 8),
(33, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/anitnational.png', 8),
(34, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/anitnational.png', 8),
(35, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/anitnational.png', 8),
(36, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/anitnational.png', 8),
(37, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/anitnational.png', 8),
(38, 'Testing Again One', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, voluptatibus consequuntur ducimus fugit repellat distinctio maxime ullam nulla ab quidem eius cum asperiores sequi aperiam voluptates. Omnis fuga expedita repellat?', 'images/anitnational.png', 8);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_images`
--

CREATE TABLE `recipe_images` (
  `Id` int(11) NOT NULL,
  `ImageLink` varchar(1000) NOT NULL,
  `RecipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_images`
--

INSERT INTO `recipe_images` (`Id`, `ImageLink`, `RecipeId`) VALUES
(5, 'mike.jpg', 23),
(6, 'Obinna.png', 23),
(7, 'operating.png', 23),
(8, 'general-1661192433.png', 24),
(9, 'medical-imaging-1661192433.png', 24),
(10, 'operating-1661192433.png', 24),
(11, 'general-1661192498.png', 25),
(12, 'medical-imaging-1661192498.png', 25),
(13, 'operating-1661192498.png', 25),
(14, 'general-1661192528.png', 26),
(15, 'medical-imaging-1661192528.png', 26),
(16, 'operating-1661192528.png', 26),
(17, 'general-1661193328.png', 27),
(18, 'investigations-1661193328.png', 27),
(19, 'general-1661193328.png', 27),
(20, 'general-1661193496.png', 28),
(21, 'investigations-1661193496.png', 28),
(22, 'RecipeSec2-1661193496.png', 28),
(23, 'general-1661193540.png', 29),
(24, 'investigations-1661193540.png', 29),
(25, 'RecipeSec2-1661193540.png', 29),
(26, 'general-1661193585.png', 30),
(27, 'investigations-1661193585.png', 30),
(28, 'RecipeSec2-1661193585.png', 30),
(29, 'general-1661194452.png', 31),
(30, 'investigations-1661194452.png', 31),
(31, 'RecipeSec2-1661194452.png', 31),
(32, 'general-1661194488.png', 32),
(33, 'investigations-1661194488.png', 32),
(34, 'RecipeSec2-1661194488.png', 32),
(35, 'dr-placeholder-1661195890.jpg', 33),
(36, 'medical-imaging-1661195890.png', 33),
(37, 'recipe1-1661195890.png', 33),
(38, 'dr-placeholder-1661195978.jpg', 34),
(39, 'medical-imaging-1661195978.png', 34),
(40, 'recipe1-1661195978.png', 34),
(41, 'dr-placeholder-1661196491.jpg', 35),
(42, 'medical-imaging-1661196491.png', 35),
(43, 'recipe1-1661196491.png', 35),
(44, 'dr-placeholder-1661196597.jpg', 36),
(45, 'medical-imaging-1661196597.png', 36),
(46, 'recipe1-1661196597.png', 36),
(47, 'dr-placeholder-1661196896.jpg', 37),
(48, 'medical-imaging-1661196896.png', 37),
(49, 'recipe1-1661196896.png', 37),
(50, 'dr-placeholder-1661196910.jpg', 38),
(51, 'medical-imaging-1661196910.png', 38),
(52, 'recipe1-1661196910.png', 38);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `RecipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`Id`, `Name`, `RecipeId`) VALUES
(3, '$value', 28),
(7, 'Step Number one ', 35),
(8, 'Step Number one ', 37),
(9, 'Step Number one ', 38);

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
-- Dumping data for table `recipe_steps`
--

INSERT INTO `recipe_steps` (`Id`, `Description`, `RecipeId`) VALUES
(16, 'Ste[ one', 28),
(17, 'Ste[ one', 31),
(23, 'Step Number one ', 37),
(24, 'Step Number one ', 38);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `recipe_images`
--
ALTER TABLE `recipe_images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recipe_steps`
--
ALTER TABLE `recipe_steps`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
