-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 11:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `beer`
--

CREATE TABLE `beer` (
  `beer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beer`
--

INSERT INTO `beer` (`beer_id`, `name`, `price`, `image`) VALUES
(100, 'Heineken', '4.50', '/heineken.png'),
(101, 'Corona', '4.00', '/corona.png'),
(102, 'Kozel', '3.00', '/kozel.png'),
(103, 'Pan', '3.12', '/pan.png'),
(104, 'Becks', '3.00', '/becks.png');

-- --------------------------------------------------------

--
-- Table structure for table `burgers`
--

CREATE TABLE `burgers` (
  `burger_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burgers`
--

INSERT INTO `burgers` (`burger_id`, `name`, `price`, `image`) VALUES
(21, 'Cheese Burger ', '5.10', '/cheese_burger.png'),
(22, 'Big Smoke Burger', '9.00', '/big_smoke.png'),
(23, 'Chicken Burger', '7.50', '/chicken_burger.png'),
(24, 'Hamburger With Fries', '6.50', '/hamwithfries.png '),
(30, 'Classic Burger', '2.00', '/classic_burger.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `food_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `coffee_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`coffee_id`, `name`, `price`, `image`) VALUES
(125, 'Espresso', '1.00', '/espresso.png'),
(126, 'Cappucino', '1.50', '/cappucino.png'),
(127, 'Macchiato', '1.25', '/machiato.png'),
(128, 'Irish Coffee', '2.00', '/irish.png'),
(129, 'Turkish Coffee', '1.40', '/turkish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food_num`
--

CREATE TABLE `food_num` (
  `id` int(11) NOT NULL,
  `food_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `user_id` int(20) NOT NULL,
  `Ime` varchar(50) NOT NULL,
  `Prezime` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Sifra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`user_id`, `Ime`, `Prezime`, `Email`, `Sifra`) VALUES
(1, 'Marin', 'Zilic', 'marin@gmail.com', '2002'),
(5, 'Mija', 'Sabljic', 'mija@gmail.com', '1234'),
(6, 'Milan', 'Eres', 'milan@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `name`, `price`, `image`) VALUES
(60, 'Sushi ', '35.79', '/sushi.png'),
(61, 'Spaghetti Bolognese', '23.00', '/bolognese.png'),
(62, 'Fish Filet ', '45.00', '/fish_filet.png'),
(63, 'Carbonara', '37.00', '/carbonara.png'),
(64, 'Baked Chicken', '50.00', '/baked_chicken.png');

-- --------------------------------------------------------

--
-- Table structure for table `nonalcoholic`
--

CREATE TABLE `nonalcoholic` (
  `drink_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nonalcoholic`
--

INSERT INTO `nonalcoholic` (`drink_id`, `name`, `price`, `image`) VALUES
(81, 'Fanta', '1.40', '/fanta.png'),
(82, 'Juice', '2.00', '/juice.png'),
(83, 'Ice Tea', '1.75', '/ice_tea.png'),
(84, 'Schweppes', '1.45', '/sveps.png'),
(85, 'Coca Cola', '1.50', '/cola.png');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `price`, `image`) VALUES
(40, 'Pizza Capricciosa', '20.00', '/capri.png'),
(41, 'Pizza Margherita', '22.00', '/margarita.png'),
(42, 'Funghi Pizza', '24.34', '/cheeese.png'),
(43, 'Chicken Pizza', '30.00', '/chicken_pizza.png'),
(44, 'Tuna Pizza', '31.00', '/tuna.png');

-- --------------------------------------------------------

--
-- Table structure for table `soup`
--

CREATE TABLE `soup` (
  `food_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soup`
--

INSERT INTO `soup` (`food_id`, `name`, `price`, `image`) VALUES
(2, 'Chicken Soup', '2.78', '/chicken.png'),
(3, 'Pea Soup', '3.21', '/pea.png'),
(4, 'Vegetable Soup', '3.12', '/vegetable.png'),
(5, 'Mushroom Soup', '5.21 ', '/mushroom.png'),
(12, 'Tomato Soup', '2.00', '/soup_raj.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beer`
--
ALTER TABLE `beer`
  ADD PRIMARY KEY (`beer_id`);

--
-- Indexes for table `burgers`
--
ALTER TABLE `burgers`
  ADD PRIMARY KEY (`burger_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Indexes for table `food_num`
--
ALTER TABLE `food_num`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nonalcoholic`
--
ALTER TABLE `nonalcoholic`
  ADD PRIMARY KEY (`drink_id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soup`
--
ALTER TABLE `soup`
  ADD PRIMARY KEY (`food_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beer`
--
ALTER TABLE `beer`
  MODIFY `beer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `burgers`
--
ALTER TABLE `burgers`
  MODIFY `burger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `coffee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `food_num`
--
ALTER TABLE `food_num`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `nonalcoholic`
--
ALTER TABLE `nonalcoholic`
  MODIFY `drink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `soup`
--
ALTER TABLE `soup`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
