-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 06:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(4) NOT NULL,
  `categoryName` varchar(30) NOT NULL,
  `categoryImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `categoryImage`) VALUES
(1, 'JUJUTSU', 'Pop! & Buddy Megumi Fushiguro with Rabbits, , hi-res.png'),
(2, 'NARUTO', 'Pop! Naruto Uzumaki with Scroll, , hi-res.png'),
(3, 'DRAGON BALL', 'Pop! Goku with Nyoibou, , hi-res.png'),
(4, 'POKEMON', 'Pop! Pikachu, , hi-res.png'),
(5, 'MY HERO ACADEMIA', 'Pop! Infinite Deku with Eri, , hi-res.png'),
(6, 'ONE PIECE', 'Pop! Luffy Gear Five, , hi-res.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(4) NOT NULL,
  `categoryID` int(4) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productImage` varchar(100) NOT NULL,
  `productPrice` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productName`, `productImage`, `productPrice`) VALUES
(1, 1, 'Pop! Nobara Kugisaki', 'Pop! Nobara Kugisaki, , hi-res.png', 650),
(2, 1, 'Pop! Yuji Itadori', 'Pop! Yuji Itadori, , hi-res.png', 650),
(3, 1, 'Pop! Kasumi Miwa', 'Pop! Kasumi Miwa, , hi-res.png', 650),
(4, 1, 'Pop! Noritoshi Kamo', 'Pop! Noritoshi Kamo, , hi-res.png', 650),
(5, 1, 'Pop! Ultimate Mechamaru', 'Pop! Ultimate Mechamaru, , hi-res.png', 650),
(6, 1, 'Pop! Ryomen Sukuna in Kimono', 'Pop! Ryomen Sukuna in Kimono, , hi-res.png', 680),
(7, 1, 'Pop! Satoru Gojo', 'Pop! Satoru Gojo, , hi-res.png', 650),
(8, 1, 'Pop! Deluxe Satoru Gojo using Hollow Technique_ Pu', 'Pop! Deluxe Satoru Gojo using Hollow Technique_ Purple, , hi-res.png', 700),
(9, 1, 'Pop! Nobara Kugisaki with Paint Can', 'Pop! Nobara Kugisaki with Paint Can, , hi-res.png', 650),
(10, 1, 'Pop! Yuji Itadori with Paint Can', 'Pop! Yuji Itadori with Paint Can, , hi-res.png', 650),
(11, 1, 'Pop! Megumi Fushiguro', 'Pop! Megumi Fushiguro, , hi-res.png', 650),
(12, 1, 'Pop! & Buddy Megumi Fushiguro with Rabbits', 'Pop! & Buddy Megumi Fushiguro with Rabbits, , hi-res.png', 650),
(13, 1, 'Pop! Choso (Piercing Blood)', 'Pop! Choso (Piercing Blood), , hi-res.png', 650),
(14, 1, 'Pop! Plus Nobara Kugisaki', 'Pop! Plus Nobara Kugisaki, , hi-res.png', 650),
(15, 1, 'Pop! Plus Yuji Itadori (Divergent Fist)', 'Pop! Plus Yuji Itadori (Divergent Fist), , hi-res.png', 650),
(16, 1, 'Pop! Satoru Gojo (Cursed Technique Lapse_ Blue)', 'Pop! Satoru Gojo (Cursed Technique Lapse_ Blue), , hi-res.png', 650),
(17, 1, 'Pop! Toji Fushiguro (Possessed)', 'Pop! Toji Fushiguro (Possessed), , hi-res.png', 650),
(18, 1, 'Pop! Ryomen Sukuna (Fire Arrow)', 'Pop! Ryomen Sukuna (Fire Arrow), , hi-res.png', 650),
(19, 1, 'Pop! Premium Suguru Geto with Cursed Spirit Dragon', 'Pop! Premium Suguru Geto with Cursed Spirit Dragon, , hi-res.png', 680),
(20, 2, 'Pop! Naruto Uzumaki with Scroll', 'Pop! Naruto Uzumaki with Scroll, , hi-res.png', 650),
(21, 2, 'Pop! Iruka Umino', 'Pop! Iruka Umino, , hi-res.png', 650),
(22, 2, 'Pop! Pain', 'Pop! Pain, , hi-res.png', 650),
(23, 2, 'Pop! Sakura', 'Pop! Sakura, , hi-res.png', 650),
(24, 2, 'Pop! Kakashi', 'Pop! Kakashi, , hi-res.png', 650),
(25, 2, 'Pop! Choji Akimichi', 'Pop! Choji Akimichi, , hi-res.png', 650),
(26, 2, 'Pop! Boruto with Rasengan', 'Pop! Boruto with Rasengan, , hi-res.png', 650),
(27, 2, 'Pop! Super Naruto (Baryon Mode) (Glow)', 'Pop! Super Naruto (Baryon Mode) (Glow), , hi-res.png', 700),
(28, 2, 'Pop! Might Guy Winking', 'Pop! Might Guy Winking, , hi-res.png', 650),
(29, 2, 'Pop! Shikadai Nara', 'Pop! Shikadai Nara, , hi-res.png', 650),
(30, 2, 'Pop! Hidan', 'Pop! Hidan, , hi-res.png', 650),
(31, 2, 'Pop! Shisui Uchiha with Kunai', 'Pop! Shisui Uchiha with Kunai, , hi-res.png', 650),
(32, 2, 'Pop! Temari', 'Pop! Temari, , hi-res.png', 650),
(33, 2, 'Pop! Tenten', 'Pop! Tenten, , hi-res.png', 650),
(34, 2, 'Pop! Obito Uchiha (Kid)', 'Pop! Obito Uchiha (Kid), , hi-res.png', 650),
(35, 2, 'Pop! Hinata Hyuga (Lion Fist Battle Pose)', 'Pop! Hinata Hyuga (Lion Fist Battle Pose), , hi-res.png', 650),
(36, 2, 'Pop! Plus Neji Hyuga', 'Pop! Plus Neji Hyuga, , hi-res.png', 650),
(37, 2, 'Pop! Jiraiya (Jutsu)', 'Pop! Jiraiya (Jutsu), , hi-res.png', 650),
(38, 2, 'Pop! Naruto Uzumaki with Kunai & Shuriken', 'Pop! Naruto Uzumaki with Kunai & Shuriken, , hi-res.png', 650),
(39, 2, 'Pop! Moment Madara (Susano\'o)', 'Pop! Moment Madara (Susano\'o), , hi-res.png', 700),
(40, 2, 'Pop! Itachi Uchiha (Edo Itachi)', 'Pop! Itachi Uchiha (Edo Itachi), , hi-res.png', 650),
(41, 3, 'Pop! Krillin (Kid)', 'Pop! Krillin (Kid), , hi-res.png', 650),
(42, 3, 'Pop! Goku with Nyoibou', 'Pop! Goku with Nyoibou, , hi-res.png', 650),
(43, 3, 'Pop! Kid Buu', 'Pop! Kid Buu, , hi-res.png', 650),
(44, 3, 'Pop! Master Roshi with Staff', 'Pop! Master Roshi with Staff, , hi-res.png', 650),
(45, 3, 'Pop! Shin', 'Pop! Shin, , hi-res.png', 650),
(46, 3, 'Pop! Trunks & Gill', 'Pop! Trunks & Gill, , hi-res.png', 650),
(47, 3, 'Pop! Super Saiyan 3 Kid Goku', 'Pop! Super Saiyan 3 Kid Goku, , hi-res.png', 650),
(48, 3, 'Pop! Majin Vegeta', 'Pop! Majin Vegeta, , hi-res.png', 650),
(49, 3, 'Pop! Vegeta with Scouter', 'Pop! Vegeta with Scouter, , hi-res.png', 650),
(50, 3, 'Pop! Goku (Ultra Instinct)', 'Pop! Goku (Ultra Instinct), , hi-res.png', 650),
(51, 3, 'Pop! Super Saiyan Goku with Kamehameha', 'Pop! Super Saiyan Goku with Kamehameha, , hi-res.png', 650),
(52, 3, 'Pop! Super Saiyan Goku', 'Pop! Super Saiyan Goku, , hi-res.png', 650),
(53, 3, 'Pop! Goku with Tail (Kamehameha)', 'Pop! Goku with Tail (Kamehameha), , hi-res.png', 650),
(54, 3, 'Pop! Son Gohan (Beast) (Powering Up)', 'Pop! Son Gohan (Beast) (Powering Up), , hi-res.png', 700),
(55, 3, 'Pop! Kid Goku in Saiyan Armor', 'Pop! Kid Goku in Saiyan Armor, , hi-res.png', 650),
(56, 3, 'Pop! Orange Piccolo', 'Pop! Orange Piccolo, , hi-res.png', 650),
(57, 3, 'Pop! Gogeta (Dragon Ball Super_ Broly)', 'Pop! Gogeta (Dragon Ball Super_ Broly), , hi-res.png', 650),
(58, 3, 'Pop! Super Saiyan God Vegeta with Aura', 'Pop! Super Saiyan God Vegeta with Aura, , hi-res.png', 700),
(59, 4, 'Pop! Horsea', 'Pop! Horsea, , hi-res.png', 650),
(60, 4, 'Pop! Squirtle', 'Pop! Squirtle, , hi-res.png', 650),
(61, 4, 'Pop! Charmander', 'Pop! Charmander, , hi-res.png', 650),
(62, 4, 'Pop! Mewtwo', 'Pop! Mewtwo, , hi-res.png', 680),
(63, 4, 'Pop! Pikachu', 'Pop! Pikachu, , hi-res.png', 650),
(64, 4, 'Pop! Pikachu in Attack Stance', 'Pop! Pikachu in Attack Stance, , hi-res.png', 650),
(65, 4, 'Pop! Charizard', 'Pop! Charizard, , hi-res.png', 650),
(66, 4, 'Pop! Raichu', 'Pop! Raichu, , hi-res.png', 650),
(67, 4, 'Pop! Jumbo Luxray', 'Pop! Jumbo Luxray, , hi-res.png', 650),
(68, 4, 'Pop! Arcanine', 'Pop! Arcanine, , hi-res.png', 650),
(69, 4, 'Pop! Chimchar', 'Pop! Chimchar, , hi-res.png', 650),
(70, 4, 'Pop! Aipom', 'Pop! Aipom, , hi-res.png', 650),
(71, 4, 'Pop! Greninja', 'Pop! Greninja, , hi-res.png', 650),
(72, 4, 'Pop! Sprigatito', 'Pop! Sprigatito, , hi-res.png', 650),
(73, 4, 'Pop! Quaxly', 'Pop! Quaxly, , hi-res.png', 650),
(74, 4, 'Pop! Zorua', 'Pop! Zorua, , hi-res.png', 650),
(75, 4, 'Pop! Gengar', 'Pop! Gengar, , hi-res.png', 650),
(76, 4, 'Pop! Fuecoco', 'Pop! Fuecoco, , hi-res.png', 650),
(77, 4, 'Pop! Gardevoir', 'Pop! Gardevoir, , hi-res.png', 650),
(78, 4, 'Pop! Fidough', 'Pop! Fidough, , hi-res.png', 650),
(79, 4, 'Pop! Dratini', 'Pop! Dratini, , hi-res.png', 650),
(80, 5, 'Pop! Infinite Deku with Eri', 'Pop! Infinite Deku with Eri, , hi-res.png', 700),
(81, 5, 'Pop! Hawks', 'Pop! Hawks, , hi-res.png', 650),
(82, 5, 'Pop! Super Fatgum', 'Pop! Super Fatgum, , hi-res.png', 650),
(83, 5, 'Pop! Dabi with Flames', 'Pop! Dabi with Flames, , hi-res.png', 650),
(84, 5, 'Pop! Deluxe Tomura Shigaraki in Chair', 'Pop! Deluxe Tomura Shigaraki in Chair, , hi-res.png', 650),
(85, 5, 'Pop! Mirio Togata', 'Pop! Mirio Togata, , hi-res.png', 650),
(86, 5, 'Pop! Shoto Todoroki in Casual Clothes', 'Pop! Shoto Todoroki in Casual Clothes, , hi-res.png', 650),
(87, 5, 'Pop! Ochaco Uraraka', 'Pop! Ochaco Uraraka, , hi-res.png', 650),
(88, 5, 'Pop! All Might (Texas Smash)', 'Pop! All Might (Texas Smash), , hi-res.png', 650),
(89, 5, 'Pop! Nana Shimura', 'Pop! Nana Shimura, , hi-res.png', 650),
(90, 5, 'Pop! Plus Katsuki Bakugo', 'Pop! Plus Katsuki Bakugo, , hi-res.png', 650),
(91, 5, 'Pop! Star and Stripe', 'Pop! Star and Stripe, , hi-res.png', 650),
(92, 5, 'Pop! Stain', 'Pop! Stain, , hi-res.png', 650),
(93, 5, 'Pop! Plus Tomura Shigaraki', 'Pop! Plus Tomura Shigaraki, , hi-res.png', 650),
(94, 5, 'Pop! Izuku Midoriya (Hooded)', 'Pop! Izuku Midoriya (Hooded), , hi-res.png', 650),
(95, 6, 'Pop! Emporio Ivankov with Pop! Protector', 'Pop! Emporio Ivankov with Pop! Protector, , hi-res.png', 650),
(96, 6, 'Pop! Orobi in Wano Outfit', 'Pop! Orobi in Wano Outfit, , hi-res.png', 650),
(97, 6, 'Pop! Luffytaro', 'Pop! Luffytaro, , hi-res.png', 650),
(98, 6, 'Pop! Super Kaido', 'Pop! Super Kaido, , hi-res.png', 650),
(99, 6, 'Pop! Snake-Man Luffy', 'Pop! Snake-Man Luffy, , hi-res.png', 650),
(100, 6, 'Pop! Super Child Big Mom', 'Pop! Super Child Big Mom, , hi-res.png', 650),
(101, 6, 'Pop! Roronoa Zoro', 'Pop! Roronoa Zoro, , hi-res.png', 650),
(102, 6, 'Pop! Rides Deluxe Vivi & Karoo', 'Pop! Rides Deluxe Vivi & Karoo, , hi-res.png', 650),
(103, 6, 'Pop! Plus Boa Hancock with Pop! Protector', 'Pop! Plus Boa Hancock with Pop! Protector, , hi-res.png', 650),
(104, 6, 'Pop! Vinsmoke Sanji', 'Pop! Vinsmoke Sanji, , hi-res.png', 650),
(105, 6, 'Pop! Luffy Gear Five', 'Pop! Luffy Gear Five, , hi-res.png', 700),
(106, 6, 'Pop! Nami (Crying)', 'Pop! Nami (Crying), , hi-res.png', 650),
(107, 6, 'Pop! Sanji in Love', 'Pop! Sanji in Love, , hi-res.png', 650),
(108, 6, 'Pop! Deluxe Buggy the Clown', 'Pop! Deluxe Buggy the Clown, , hi-res.png', 650),
(109, 6, 'Pop! Borsalino', 'Pop! Borsalino, , hi-res.png', 650),
(110, 6, 'Pop! Roronoa Zoro (Three Sword Style) (Glow)', 'Pop! Roronoa Zoro (Three Sword Style) (Glow), , hi-res.png', 650),
(111, 6, 'Pop! Bartholomew Kuma with Pop! Protector', 'Pop! Bartholomew Kuma with Pop! Protector, , hi-res.png', 650),
(112, 6, 'Pop! Plus King', 'Pop! Plus King, , hi-res.png', 650),
(113, 6, 'Pop! Eustass Kid (Awakening)', 'Pop! Eustass Kid (Awakening), , hi-res.png', 650),
(114, 6, 'Pop! Trafalgar Law (Glow)', 'Pop! Trafalgar Law (Glow), , hi-res.png', 650);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
