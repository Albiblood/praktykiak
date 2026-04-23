-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2026 at 03:41 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `haslo` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`) VALUES
(2, 'sigma', '$2y$10$j8wcgDOA8azG.KPIWObmYuLnstf5AZq0OJdG47RvTyKXKfGFHMIUG', 'email'),
(3, 'g', '$2y$10$vDs7KjGTGqTbDO3syzrFSe0Kwse6.cHd0ZCx5a4WoE2wmyO9/yNWe', 'g'),
(4, 'adam', '$2y$10$wH8QxK6m0Rk7b2jT1m0r3e1uVj9l8Q6Yc3t4p5Z6d7x8y9z0a1b2c', 'adam@test.pl'),
(5, 'kasia', '$2y$10$wH8QxK6m0Rk7b2jT1m0r3e1uVj9l8Q6Yc3t4p5Z6d7x8y9z0a1b2c', 'kasia@test.pl'),
(6, 'marek', '$2y$10$wH8QxK6m0Rk7b2jT1m0r3e1uVj9l8Q6Yc3t4p5Z6d7x8y9z0a1b2c', 'marek@test.pl'),
(7, 'ania', '$2y$10$wH8QxK6m0Rk7b2jT1m0r3e1uVj9l8Q6Yc3t4p5Z6d7x8y9z0a1b2c', 'ania@test.pl'),
(8, 'tomek', '$2y$10$wH8QxK6m0Rk7b2jT1m0r3e1uVj9l8Q6Yc3t4p5Z6d7x8y9z0a1b2c', 'tomek@test.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
