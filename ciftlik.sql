-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 30 Ağu 2016, 15:27:29
-- Sunucu sürümü: 5.5.49-cll-lve
-- PHP Sürümü: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ciftlik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_animals`
--

CREATE TABLE IF NOT EXISTS `c_animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(255) NOT NULL,
  `a_pic` varchar(255) NOT NULL,
  `a_uretim` int(11) NOT NULL,
  `a_tuketim` int(11) NOT NULL,
  `a_yasam` int(11) NOT NULL,
  `cins` varchar(255) NOT NULL,
  `a_ucret` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `c_animals`
--

INSERT INTO `c_animals` (`id`, `a_name`, `a_pic`, `a_uretim`, `a_tuketim`, `a_yasam`, `cins`, `a_ucret`) VALUES
(1, 'Sultan', 'http://ciftlik.ogrenmen.com/img/t1.png', 300, 3, 200, 'Tavuk', 28),
(13, 'Haylaz Tilki', 'http://ciftlik.ogrenmen.com/img/ht.jpg', 10000, 100, 3650, 'Tilki', 99999999),
(2, 'Şaşkın', 'http://ciftlik.ogrenmen.com/img/t2.png', 200, 2, 150, 'Tavuk', 19),
(3, 'Prenses', 'http://ciftlik.ogrenmen.com/img/t3.png', 100, 1, 100, 'Tavuk', 10),
(4, 'Çapkın', 'http://ciftlik.ogrenmen.com/img/i1.png', 300, 3, 200, 'İnek', 290),
(5, 'Gereksiz', 'http://ciftlik.ogrenmen.com/img/i2.png', 200, 2, 150, 'İnek', 195),
(6, 'Benekli', 'http://ciftlik.ogrenmen.com/img/i3.png', 100, 1, 100, 'İnek', 100),
(7, 'Şapşik', 'http://ciftlik.ogrenmen.com/img/k1.png', 300, 3, 200, 'Koyun', 145),
(8, 'Zeytin', 'http://ciftlik.ogrenmen.com/img/k2.png', 200, 2, 150, 'Koyun', 98),
(9, 'Ponçik', 'http://ciftlik.ogrenmen.com/img/k3.png', 100, 1, 100, 'Koyun', 50),
(10, 'Nazlı', 'http://ciftlik.ogrenmen.com/img/ke1.png', 300, 3, 200, 'Keçi', 220),
(11, 'Sakallı', 'http://ciftlik.ogrenmen.com/img/ke2.png', 200, 2, 150, 'Keçi', 155),
(12, 'Zilli', 'http://ciftlik.ogrenmen.com/img/ke3.png', 100, 1, 100, 'Keçi', 80);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_config`
--

CREATE TABLE IF NOT EXISTS `c_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `sipali` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `c_config`
--

INSERT INTO `c_config` (`id`, `title`, `baslik`, `sipali`) VALUES
(1, 'Mavi Script V1', 'Süper Çiftlik', 285);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_daily_bonus`
--

CREATE TABLE IF NOT EXISTS `c_daily_bonus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tarih` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `c_daily_bonus`
--

INSERT INTO `c_daily_bonus` (`id`, `user_id`, `tarih`) VALUES
(1, 1, '2016-08-30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_epin`
--

CREATE TABLE IF NOT EXISTS `c_epin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `epin` varchar(255) NOT NULL,
  `degeri` int(11) NOT NULL,
  `kullanim` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `c_epin`
--

INSERT INTO `c_epin` (`id`, `epin`, `degeri`, `kullanim`, `user_id`) VALUES
(2, '59500', 1000, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_log`
--

CREATE TABLE IF NOT EXISTS `c_log` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `uye` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `tarih` datetime NOT NULL,
  `aciklama` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Tablo döküm verisi `c_log`
--

INSERT INTO `c_log` (`id`, `uye`, `ip`, `tarih`, `aciklama`) VALUES
(1, '1', '88.251.11.77', '2016-08-30 21:20:45', 'Giriş Yapıldı'),
(2, '1', '88.251.11.77', '2016-08-30 21:21:57', 'Bir E-pin kullandınız.'),
(3, '1', '88.251.11.77', '2016-08-30 21:22:10', 'Ahırınız için bir hayvan aldınız.'),
(4, '1', '88.251.11.77', '2016-08-30 21:22:15', 'Ahırınız için bir hayvan aldınız.'),
(5, '1', '88.251.11.77', '2016-08-30 21:22:17', 'Ahırınız için bir hayvan aldınız.'),
(6, '1', '88.251.11.77', '2016-08-30 21:22:20', 'Ahırınız için bir hayvan aldınız.'),
(7, '1', '88.251.11.77', '2016-08-30 21:22:23', 'Ahırınız için bir hayvan aldınız.'),
(8, '1', '88.251.11.77', '2016-08-30 21:22:26', 'Ahırınız için bir hayvan aldınız.'),
(9, '1', '88.251.11.77', '2016-08-30 21:22:29', 'Ahırınız için bir hayvan aldınız.'),
(10, '1', '88.251.11.77', '2016-08-30 21:22:33', 'Ahırınız için bir hayvan aldınız.'),
(11, '1', '88.251.11.77', '2016-08-30 21:22:35', 'Ahırınız için bir hayvan aldınız.'),
(12, '1', '88.251.11.77', '2016-08-30 21:22:37', 'Ahırınız için bir hayvan aldınız.'),
(13, '1', '88.251.11.77', '2016-08-30 21:22:40', 'Ahırınız için bir hayvan aldınız.'),
(14, '1', '88.251.11.77', '2016-08-30 21:22:43', 'Ahırınız için bir hayvan aldınız.'),
(15, '1', '88.251.11.77', '2016-08-30 21:22:45', 'Ahırınız için bir hayvan aldınız.'),
(16, '1', '88.251.11.77', '2016-08-30 21:22:49', 'Ahırınız için bir hayvan aldınız.'),
(17, '1', '88.251.11.77', '2016-08-30 21:22:52', 'Ahırınız için bir hayvan aldınız.'),
(18, '1', '88.251.11.77', '2016-08-30 21:22:56', 'Ahırınız için bir hayvan aldınız.'),
(19, '1', '88.251.11.77', '2016-08-30 21:22:59', 'Ahırınız için bir hayvan aldınız.'),
(20, '1', '88.251.11.77', '2016-08-30 21:23:01', 'Ahırınız için bir hayvan aldınız.'),
(21, '1', '88.251.11.77', '2016-08-30 21:23:04', 'Ahırınız için bir hayvan aldınız.'),
(22, '1', '88.251.11.77', '2016-08-30 21:23:07', 'Ahırınız için bir hayvan aldınız.'),
(23, '1', '88.251.11.77', '2016-08-30 21:23:18', 'Yumurtalarınızı Sattınız'),
(24, '1', '88.251.11.77', '2016-08-30 21:23:25', 'Ahırınızı 1 birim genişlettiniz.'),
(25, '1', '88.251.11.77', '2016-08-30 21:23:26', 'Yumurta deponuzu 100 birim genişlettiniz.'),
(26, '1', '88.251.11.77', '2016-08-30 21:23:28', 'Süt deponuzu 100 birim genişlettiniz.'),
(27, '1', '88.251.11.77', '2016-08-30 21:23:29', 'Peynir depounuzu 100 birim genişlettiniz.'),
(28, '1', '88.251.11.77', '2016-08-30 21:23:38', 'Günlük bonusunuzu aldınız.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_money`
--

CREATE TABLE IF NOT EXISTS `c_money` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `istek` int(11) NOT NULL,
  `zaman` datetime NOT NULL,
  `odendi` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_notice`
--

CREATE TABLE IF NOT EXISTS `c_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice` text NOT NULL,
  `zaman` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `c_notice`
--

INSERT INTO `c_notice` (`id`, `notice`, `zaman`) VALUES
(1, 'Sitemize hoş geldiniz.', '2016-08-30 21:21:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_share`
--

CREATE TABLE IF NOT EXISTS `c_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `adres` text NOT NULL,
  `deger` text NOT NULL,
  `tarih` datetime NOT NULL,
  `odendi` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_users`
--

CREATE TABLE IF NOT EXISTS `c_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(2555) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_pic` varchar(255) NOT NULL DEFAULT 'http://i.hizliresim.com/zaW944.png',
  `name_surname` varchar(255) NOT NULL,
  `nesil` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deneyim` int(6) NOT NULL,
  `city` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `cep` varchar(25) NOT NULL,
  `iban` varchar(35) NOT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `c_users`
--

INSERT INTO `c_users` (`id`, `username`, `password`, `user_pic`, `name_surname`, `nesil`, `email`, `deneyim`, `city`, `job`, `web`, `cep`, `iban`, `ref`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'http://i.hizliresim.com/R1aMz6.png', '', 0, 'admin@gmail.com', 0, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_user_ani`
--

CREATE TABLE IF NOT EXISTS `c_user_ani` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ani_id` int(11) NOT NULL,
  `tarih` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Tablo döküm verisi `c_user_ani`
--

INSERT INTO `c_user_ani` (`id`, `user_id`, `ani_id`, `tarih`) VALUES
(1, 1, 3, '2016-08-30 21:22:10'),
(2, 1, 3, '2016-08-30 21:22:15'),
(3, 1, 3, '2016-08-30 21:22:17'),
(4, 1, 3, '2016-08-30 21:22:20'),
(5, 1, 3, '2016-08-30 21:22:23'),
(6, 1, 3, '2016-08-30 21:22:26'),
(7, 1, 3, '2016-08-30 21:22:29'),
(8, 1, 3, '2016-08-30 21:22:33'),
(9, 1, 3, '2016-08-30 21:22:35'),
(10, 1, 3, '2016-08-30 21:22:37'),
(11, 1, 3, '2016-08-30 21:22:40'),
(12, 1, 3, '2016-08-30 21:22:43'),
(13, 1, 3, '2016-08-30 21:22:45'),
(14, 1, 3, '2016-08-30 21:22:49'),
(15, 1, 3, '2016-08-30 21:22:52'),
(16, 1, 3, '2016-08-30 21:22:56'),
(17, 1, 3, '2016-08-30 21:22:59'),
(18, 1, 3, '2016-08-30 21:23:01'),
(19, 1, 3, '2016-08-30 21:23:04'),
(20, 1, 3, '2016-08-30 21:23:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_user_bank`
--

CREATE TABLE IF NOT EXISTS `c_user_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gayme` float NOT NULL,
  `para` float NOT NULL,
  `sipali` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `c_user_bank`
--

INSERT INTO `c_user_bank` (`id`, `user_id`, `gayme`, `para`, `sipali`) VALUES
(1, 1, 816.053, 0.00116, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `c_user_depo`
--

CREATE TABLE IF NOT EXISTS `c_user_depo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `yumurta` int(11) NOT NULL,
  `sut` int(11) NOT NULL,
  `peynir` int(11) NOT NULL,
  `yum_sat` datetime NOT NULL,
  `sut_sat` datetime NOT NULL,
  `pey_sat` datetime NOT NULL,
  `ydepo` int(11) NOT NULL DEFAULT '500',
  `sdepo` int(11) NOT NULL DEFAULT '500',
  `pdepo` int(11) NOT NULL DEFAULT '500',
  `adepo` int(11) NOT NULL DEFAULT '20',
  `ykat` decimal(6,6) NOT NULL DEFAULT '0.000040',
  `skat` decimal(6,6) NOT NULL DEFAULT '0.000400',
  `pkat` decimal(6,6) NOT NULL DEFAULT '0.000700',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `c_user_depo`
--

INSERT INTO `c_user_depo` (`id`, `user_id`, `yumurta`, `sut`, `peynir`, `yum_sat`, `sut_sat`, `pey_sat`, `ydepo`, `sdepo`, `pdepo`, `adepo`, `ykat`, `skat`, `pkat`) VALUES
(1, 1, 6, 0, 0, '2016-08-30 21:23:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 600, 600, 600, 21, '0.000040', '0.000400', '0.000700');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
