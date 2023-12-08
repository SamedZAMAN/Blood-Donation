-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Oca 2023, 20:38:53
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `login_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `unit` int(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `bloodType` varchar(128) NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `unit`, `lastName`, `bloodType`, `age`, `height`, `mail`, `request`) VALUES
(19, 'samed', 'zaman@hotmail.com', '$2y$10$q/y5opNCl2GOY5QU96q9/.6I.FeZPZvDEg6xHYKcZmnvp1a65CAde', 0, 'zaman', 'A+', 18, 185, '', ''),
(20, 'samed', 'samed@hotmail.com', '$2y$10$p1JMwjf5spEPjIhOHrk3/.XrTNtTNWpmXhckZ9A8oYhZYSPOfoWbe', 4, '', 'B+', 0, 0, '', ''),
(21, 'samo', 'samo@hot.com', '$2y$10$xOjLRDmfZB3jJdXOE8944eBJz16HdzSfEiI7kXvKEpX8G.Mv1UEhC', 0, 'zaman', 'A+', 18, 192, '', ''),
(22, 'sam', 'sam@hot.com', '$2y$10$H3LzyU72DSDNOqF2i8Kq9Ok3NOK58uXjtlKksR/yrONsBsxXQRHOm', 0, 'zaman', 'A+', 22, 180, 'ASLKDASKLD', 'a+ kan 3 unit lazım'),
(23, 'mert', 'mert@hotmail.com', '$2y$10$tjwuV0m7kKcybant3qQXzemCCeovdzqiArG6u3bPw853SkKk/k7iy', 1, 'kayısı', 'A-', 55, 167, '', ''),
(24, 'Meltem', 'meltem@hot.com', '$2y$10$uCvbW7ECtpGFiaqCT.JSm.U9DNfRE7m/JD190F/FGXyAnkSgl/PD2', 4, 'lapa', 'A-', 33, 166, '', ''),
(25, 'merve', 'merve@hot.com', '$2y$10$XiqL9xLi20ZV8cVpFS9Kl.9HtR/DAJ8j4p1f2Nub8WCso1tloCoru', 3, 'geyik', 'B+', 32, 177, '', ''),
(26, 'nilay', 'nilay@hot.com', '$2y$10$24BE7NXmcqCVLa72B3oDlOhLGIH0r7clnkbAOQ/O7AgCvfl3oyJpq', 4, 'kader', 'B-', 24, 167, '', ''),
(27, 'kader', 'kader@hot.com', '$2y$10$bm0NtL6zkmG8xpsAJSDnEOlpgeh36avcF.qWrUUhr568KcR6icOHG', 2, 'kıyamet', 'AB+', 21, 178, '', ''),
(28, 'Fatih', 'fatih@hot.com', '$2y$10$K5uZNtJj9sxHllACD6SHwudhOydes/GsXPWz/JMjdXoWGd9A.T1Oe', 0, 'tas', 'AB-', 27, 182, '', ''),
(29, 'Beyza', 'beyza@hot.com', '$2y$10$PUNgdClKSyOQGkeGqZaUOOZbVYlGXNWvsTdBbh4RLOqSdGk1vulaO', 3, 'fırat', '0-', 16, 155, '', ''),
(30, 'fırat', 'firat@hot.com', '$2y$10$51x/pgwoKc12uNoys88Cm.3//9jlFK4rlt.X4UwQrzPKCyYkiqnDu', 3, 'gül', '0+', 28, 178, '', ''),
(31, 'Mehmet', 'mehmet@hot.com', '$2y$10$J4jV67KbgwXLR5JkiL/3z.aOkI8CtASox5KDpD0H0N96mbRrus19.', 4, 'demir', '0+', 18, 176, '', ''),
(32, 'ali', 'ali@hot.com', '$2y$10$aED7gBpa2u6uWkcKbecnY.b.lfUgXtPMyuQYQGy5TyYdSPzZBIfXW', 3, 'Er', 'B+', 43, 185, '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
