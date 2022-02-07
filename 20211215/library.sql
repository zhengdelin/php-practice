-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2021-12-15 10:23:42
-- 伺服器版本： 8.0.21
-- PHP 版本： 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library`;

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--
-- 建立時間： 2021-12-15 03:06:58
-- 最後更新： 2021-12-15 06:46:38
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `bookid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `booktitle` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bookprice` int NOT NULL,
  `bookauthor` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 資料表新增資料前，先清除舊資料 `books`
--

TRUNCATE TABLE `books`;
--
-- 傾印資料表的資料 `books`
--

INSERT INTO `books` (`bookid`, `booktitle`, `bookprice`, `bookauthor`) VALUES
('B01', '愛的藝術', 316, '埃里希．佛洛姆'),
('B02', '我想跟你好好說話', 284, '賴佩霞'),
('B03', '被討厭的勇氣', 237, '岸見一郎'),
('B04', '致富心態', 356, '摩根．豪瑟'),
('B05', '解密黑洞與人類未來', 395, '海諾．法爾克'),
('B06', '影響力革命', 395, '羅納德・柯恩爵士'),
('B07', '貝佐斯新傳', 474, '布萊德．史東'),
('B08', '海上傭兵', 514, '鄭維中'),
('B09', '馴羊記', 338, '徐振輔'),
('B10', '此生，你我皆短暫燦爛', 286, '王鷗行'),
('B11', '勇氣', 300, '岸見一郎'),
('B12', '123', 317, '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
