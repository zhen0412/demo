-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-09 21:37:29
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `phpbook`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ass`
--

CREATE TABLE `ass` (
  `nbr` int(5) NOT NULL,
  `引擎形式` text COLLATE utf8_unicode_ci NOT NULL,
  `總排氣量` text COLLATE utf8_unicode_ci NOT NULL,
  `最高馬力` text COLLATE utf8_unicode_ci NOT NULL,
  `最大扭力` text COLLATE utf8_unicode_ci NOT NULL,
  `車體` text COLLATE utf8_unicode_ci NOT NULL,
  `軸距` text COLLATE utf8_unicode_ci NOT NULL,
  `前煞車` text COLLATE utf8_unicode_ci NOT NULL,
  `後煞車` text COLLATE utf8_unicode_ci NOT NULL,
  `座高` text COLLATE utf8_unicode_ci NOT NULL,
  `裝備重量` text COLLATE utf8_unicode_ci NOT NULL,
  `油箱` text COLLATE utf8_unicode_ci NOT NULL,
  `6hr` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `11hr` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `24hr` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `ass`
--

INSERT INTO `ass` (`nbr`, `引擎形式`, `總排氣量`, `最高馬力`, `最大扭力`, `車體`, `軸距`, `前煞車`, `後煞車`, `座高`, `裝備重量`, `油箱`, `6hr`, `11hr`, `24hr`) VALUES
(1, '四行程、水冷、DOHC、4V單缸引擎', '149c.c.', '17.1ps / 9,000rpm', '13.5Nm / 6,500rpm', '1973 x 822 x 1053mm ', '1,296mm', 'Nissin 輻射對四卡鉗、296mm 浪花碟、ABS', 'Nissin 單向單活塞卡鉗、220mm 浪花碟、ABS', '795mm', '125kg', '8.5L', '700', '900', '1100'),
(2, '氣冷四行程SOHC單缸', '149cc', '12.91 ps / 8,000 rpm', '1.27 kg fm / 6,500 rpm', '2,119mm x 793mm x 1,153mm', '1,375mm', '單向雙活塞卡鉗、240mm 碟盤', '單活塞卡鉗、220mm 碟盤', '869mm', '122kg', '7.2L', '700', '900', '1100'),
(3, '水冷4行程直列4缸16汽門DOHC', '948cc', '100.6 PS / 7,500 rpm', '95.0 N•m (9.7 kgf•m) / 6,500 rpm', '長 / 寬 / 高 2,100 / 865 / 1,150 mm', '1,470 mm', '雙輻射固定式對向四活塞卡鉗、 300mm 浮動碟盤', '單向單活塞浮動卡鉗、 250mm 固定碟盤', '800mm', '215kg', '17L', '2100', '2500', '2900'),
(4, '水冷4行程直列三缸 DOHC 4V', '889', '71 PS / 6,000 rpm', '8.6 kg-m / 6,000 rpm', '2,090 × 795 × 1,190', '1,430', 'Φ298mm 雙碟 / 對向四活塞輻射卡鉗', 'Φ245mm 單碟 / 單向單活塞卡鉗', '825mm', '189kg', '14L', '1900', '2300', '2700'),
(5, '水冷並列4汽缸', '649c.c.', '76.4HP/ 9,000 rpm', '6.1kg-m / 8,500rpm', '2,130mm x 780mm x 1,075mm', '1,450 mm', '310mm碟煞 配四活塞輻射卡鉗、abs\r\n', '240mm双活塞單碟', '810mm', '203 kg', '15.4L', '1900', '2300', '2700'),
(6, '水冷單缸四行程', '373 c.c.', '44 PS', '37 Nm', '-', '1,357 ± 15.5 mm', 'Brembo Bybre 對向四活塞輻射卡鉗，320mm浮動碟盤\r\n', 'Brembo Bybre 單向單活塞浮動卡鉗，230mm 固定碟', '835 mm', '152 Kg', '9.5L', '1400', '1700', '2000'),
(7, '水冷單缸四行程', '373.2 c.c.', '44 PS', '37 Nm', '-', '1,357 ± 15 mm', 'Brembo BYBRE 對向4活塞輻射卡鉗 碟徑:320 mm', 'Brembo BYBRE 單活塞卡鉗 碟徑 :230 mm', '830 mm', '149 Kg', '14.5 L', '1400', '1700', '2000'),
(8, '水冷四衝程直列四汽缸DOHC 16閥門', '599cc', '87.1 kW (118.4PS) / 14,500 rpm', '61.7 Nm (6.3 kg-m) / 10,500 rpm', '2040 x 695 x 1150mm', '1375mm', '雙320mm鑽孔碟配放射式四活塞卡鉗', '單220mm鑽孔碟配兩活塞卡鉗', '850mm', '190kg', '17L', '2700', '3300', '3700'),
(9, '水冷式四行程DOHC 4汽門並列雙缸', '249.7cc', '41ps/13000rpm', '2.5kg- m/11000rpm', '2,060×724×1,098mm', '1,389mm', 'Nissin單向雙活塞卡鉗310mm碟盤', 'Nissin單活塞卡鉗240mm碟盤', '790mm', '168kg', '14.5L', '1400', '1700', '2000');

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE `shop` (
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `bike` text COLLATE utf8_unicode_ci NOT NULL,
  `get` text COLLATE utf8_unicode_ci NOT NULL,
  `back` text COLLATE utf8_unicode_ci NOT NULL,
  `hr/km` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `shop`
--

INSERT INTO `shop` (`name`, `date`, `time`, `phone`, `bike`, `get`, `back`, `hr/km`) VALUES
('33', '2022-01-05', '01:30:00.000000', '123456', 'Svartpilen 401', '台北站', '新竹站', '24hr'),
('aaa', '2022-02-03', '12:30:00.000000', '069674', 'Z900RS', '台中站', '新竹站', '11hr/300km'),
('555', '2022-01-28', '11:00:00.000000', '54363', '390 DUKE', '新竹站', '台南站', '24hr/370km');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `account` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`name`, `account`, `password`, `birthday`, `phone`) VALUES
('vvv', '555', 'gdhyjy', '2000-02-02', '123456'),
('33', '555', '000', '2003-05-06', '1524214');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ass`
--
ALTER TABLE `ass`
  ADD PRIMARY KEY (`nbr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
