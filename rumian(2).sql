-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 18 Lis 2013, 00:34
-- Wersja serwera: 5.5.27
-- Wersja PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `rumian`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id_email` int(5) NOT NULL AUTO_INCREMENT,
  `date_send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `emails`
--

INSERT INTO `emails` (`id_email`, `date_send`, `from`, `to`, `subject`, `content`) VALUES
(1, '2013-11-16 19:33:35', 'biuro@cssoft.pl (KR CSSoft)', 'bart.city@gmail.com', 'KR.CSSoft.pl - Nowy użytkownik', 'Twoje konto zostało utworzone.<br/>\n			Login: abcd<br/>\n			Hasło: zGhscGGoH7fZfug<br/><br/>\n			\n			Wejdź na stronę http://kr.cssoft.pl/admin żeby się zalogować');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konkursy`
--

CREATE TABLE IF NOT EXISTS `konkursy` (
  `id_konkurs` int(5) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(100) DEFAULT NULL,
  `aktywny` tinyint(1) DEFAULT NULL,
  `imie` varchar(2) DEFAULT NULL,
  `nazwisko` varchar(2) DEFAULT NULL,
  `plec` varchar(2) DEFAULT NULL,
  `adres` varchar(2) DEFAULT NULL,
  `kod_pocztowy` varchar(2) DEFAULT NULL,
  `miasto` varchar(2) DEFAULT NULL,
  `email` varchar(2) DEFAULT NULL,
  `telefon` varchar(2) DEFAULT NULL,
  `kod` varchar(2) DEFAULT NULL,
  `paragon` varchar(2) DEFAULT NULL,
  `slogan` varchar(2) DEFAULT NULL,
  `captcha` varchar(2) DEFAULT NULL,
  `regulamin` varchar(2) DEFAULT NULL,
  `regulamin_tresc` text,
  `checkbox1` varchar(2) DEFAULT NULL,
  `checkbox1_tresc` text,
  `checkbox2` varchar(2) DEFAULT NULL,
  `checkbox2_tresc` text,
  `checkbox3` varchar(2) DEFAULT NULL,
  `checkbox3_tresc` text,
  `pelnoletni` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id_konkurs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `konkursy`
--

INSERT INTO `konkursy` (`id_konkurs`, `nazwa`, `aktywny`, `imie`, `nazwisko`, `plec`, `adres`, `kod_pocztowy`, `miasto`, `email`, `telefon`, `kod`, `paragon`, `slogan`, `captcha`, `regulamin`, `regulamin_tresc`, `checkbox1`, `checkbox1_tresc`, `checkbox2`, `checkbox2_tresc`, `checkbox3`, `checkbox3_tresc`, `pelnoletni`) VALUES
(1, 'Takietam', 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus. Sed vel lectus. Ut sagittis, ipsum dolor quam.', 'on', 'Wyrażam zgodę na przetwarzanie moich danych osobowych w celach marketingowych. Administratorem danych jest Danone Sp. z o.o. z siedzibą przy ul. Redutowej 9/23, 01-103 Warszawa. ', 'on', 'Wyrażam zgodę na przetwarzanie moich danych osobowych przez Marketing House Sp. z o.o. z siedzibą w Warszawie, ul. Marynarska 11, kod pocztowy 02-674 Warszawa, jako administratora danych osobowych, w celu przeprowadzenia loterii promocyjnej „Loteria Głodomaniacy 2013”. ', 'on', 'Wyrażam zgodę na otrzymywanie informacji handlowych, w rozumieniu ustawy o świadczeniu usług drogą elektroniczną, dotyczących Danone Sp. z o.o. z siedzibą przy ul. Redutowej 9/23, 01-103 Warszawa, za pomocą środków komunikacji elektronicznej (np. e-mail, SMS, MMS). ', '1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id_log` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(32) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `browser` varchar(32) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `platform` varchar(32) DEFAULT NULL,
  `content` mediumtext,
  PRIMARY KEY (`id_log`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Zrzut danych tabeli `logs`
--

INSERT INTO `logs` (`id_log`, `login`, `date`, `type`, `ip`, `browser`, `version`, `platform`, `content`) VALUES
(1, 'admin', '2013-11-11 18:35:51', 'add user', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'Login: aaa, Imie i nazwisko: bbb ccc E-mail:bgalezia@gmail.com'),
(2, 'admin', '2013-11-12 10:13:08', 'change password fail', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'wrong old password?'),
(3, 'admin', '2013-11-12 10:15:04', 'change password', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'ok'),
(4, 'admin', '2013-11-12 10:15:27', 'change password', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'ok'),
(5, 'admin', '2013-11-12 10:16:10', 'change password fail', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'wrong old password?'),
(6, 'admin', '2013-11-12 10:18:04', 'change password fail', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'wrong old password?'),
(7, 'admin', '2013-11-12 10:18:37', 'change user password', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'User: 2, p: '),
(8, 'miethek', '2013-11-12 10:53:49', 'Usuń konto błąd', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'wrong old password?'),
(9, 'miethek', '2013-11-12 10:54:35', 'Usuń konto', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'ok'),
(10, 'admin', '2013-11-12 11:04:27', 'change user password', '127.0.0.1', 'Firefox', '25.0', 'Linux', 'User: 2, p: miethek'),
(11, 'admin', '2013-11-15 23:55:28', 'Losowanie', '::1', 'Firefox', '25.0', 'Windows 7', '7'),
(12, 'admin', '2013-11-16 09:59:53', 'Losowanie', '::1', 'Firefox', '25.0', 'Windows 7', '6'),
(13, 'admin', '2013-11-16 14:37:01', 'change user password', '::1', 'Firefox', '25.0', 'Windows 7', 'User: 2, p: miethek'),
(14, 'admin', '2013-11-16 16:38:16', 'change user password', '::1', 'Firefox', '25.0', 'Windows 7', 'User: 3, p: dddd'),
(15, 'admin', '2013-11-16 17:37:27', 'Edycja profilu', '::1', 'Firefox', '25.0', 'Windows 7', 'Imie i nazwisko: Admin2 aDmin4 E-mail:miethek@gmail.com'),
(16, 'admin', '2013-11-16 17:38:47', 'Zmiana swojego hasła błąd', '::1', 'Firefox', '25.0', 'Windows 7', 'Błędne stare hasło? p: admin1'),
(17, 'admin', '2013-11-16 17:39:13', 'Zmiana swojego hasła', '::1', 'Firefox', '25.0', 'Windows 7', 'User: admin, p: admin'),
(18, 'admin', '2013-11-16 17:40:59', 'Edycja profilu', '::1', 'Firefox', '25.0', 'Windows 7', 'Imie i nazwisko: Admin2 aDmin4 E-mail:miethek@gmail.com'),
(19, 'admin', '2013-11-16 17:41:48', 'Usuń konto błąd', '::1', 'Firefox', '25.0', 'Windows 7', 'Błędne hasło'),
(20, 'admin', '2013-11-16 17:44:29', 'Zmiana hasła', '::1', 'Firefox', '25.0', 'Windows 7', 'User: aaa, p: dddd'),
(21, 'aaa', '2013-11-16 17:45:57', 'Usuń konto błąd', '::1', 'Firefox', '25.0', 'Windows 7', 'Błędne hasło'),
(22, 'aaa', '2013-11-16 17:46:01', 'Usuń konto', '::1', 'Firefox', '25.0', 'Windows 7', 'Ok'),
(23, 'admin', '2013-11-16 19:29:01', 'Dodanie użytkownia', '::1', 'Firefox', '25.0', 'Windows 7', 'Login: abcd, Imie i nazwisko: aaaa bbbb E-mail:bart.city@gmail.com'),
(24, 'admin', '2013-11-16 19:30:53', 'Dodanie użytkownia', '::1', 'Firefox', '25.0', 'Windows 7', 'Login: abcd, Imie i nazwisko: Bartek Gałęzia E-mail:bart.city@gmail.com'),
(25, 'admin', '2013-11-16 19:33:35', 'Dodanie użytkownia', '::1', 'Firefox', '25.0', 'Windows 7', 'Login: abcd, Imie i nazwisko: Bartek Gałęzia E-mail:bart.city@gmail.com'),
(26, 'abcd', '2013-11-16 19:34:13', 'Usuń konto', '::1', 'Firefox', '25.0', 'Windows 7', 'Ok'),
(27, '0', '2013-11-17 13:11:33', 'Wylogowanie', '::1', 'Firefox', '25.0', 'Windows 7', 'Ok'),
(28, 'admin', '2013-11-17 13:11:36', 'Logowanie', '::1', 'Firefox', '25.0', 'Windows 7', 'Ok'),
(29, '0', '2013-11-17 13:11:50', 'Wylogowanie', '::1', 'Firefox', '25.0', 'Windows 7', 'Ok'),
(30, 'admin', '2013-11-17 13:11:53', 'Logowanie', '::1', 'Firefox', '25.0', 'Windows 7', 'Ok'),
(31, 'admin', '2013-11-17 13:12:08', 'Wylogowanie', '::1', 'Firefox', '25.0', 'Windows 7', 'Ok'),
(32, 'admin', '2013-11-17 13:12:10', 'Logowanie', '::1', 'Firefox', '25.0', 'Windows 7', 'Ok'),
(33, 'admin', '2013-11-17 14:55:17', 'Logowanie', '::1', 'Chrome', '31.0.1650.57', 'Windows 7', 'Ok'),
(34, 'admin', '2013-11-17 15:05:42', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(35, 'admin', '2013-11-17 15:06:12', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(36, 'admin', '2013-11-17 15:09:24', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(37, 'admin', '2013-11-17 15:10:14', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(38, 'admin', '2013-11-17 15:25:41', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(39, 'admin', '2013-11-17 15:25:54', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(40, 'admin', '2013-11-17 15:26:08', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(41, 'admin', '2013-11-17 15:29:08', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(42, 'admin', '2013-11-17 15:29:16', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(43, 'admin', '2013-11-17 15:29:40', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(44, 'admin', '2013-11-17 15:46:40', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(45, 'admin', '2013-11-17 15:47:01', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(46, 'admin', '2013-11-17 15:47:53', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(47, 'admin', '2013-11-17 16:15:50', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(48, 'admin', '2013-11-17 16:19:17', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(49, 'admin', '2013-11-17 16:19:27', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(50, 'admin', '2013-11-17 16:19:58', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(51, 'admin', '2013-11-17 16:20:10', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(52, 'admin', '2013-11-17 16:20:23', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(53, 'admin', '2013-11-17 16:20:59', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(54, 'admin', '2013-11-17 16:24:27', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(55, 'admin', '2013-11-17 16:24:33', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(56, 'admin', '2013-11-17 16:24:47', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(57, 'admin', '2013-11-17 16:29:08', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(58, 'admin', '2013-11-17 16:30:20', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(59, 'admin', '2013-11-17 16:30:33', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(60, 'admin', '2013-11-17 16:30:50', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(61, 'admin', '2013-11-17 16:30:59', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(62, 'admin', '2013-11-17 16:31:15', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(63, 'admin', '2013-11-17 16:36:08', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(64, 'admin', '2013-11-17 16:36:24', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(65, 'admin', '2013-11-17 16:37:22', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(66, 'admin', '2013-11-17 16:37:30', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(67, 'admin', '2013-11-17 16:52:03', 'Edycja konkursu', '::1', 'Firefox', '25.0', 'Windows 7', 'ID: 1'),
(68, 'no-name', '2013-11-17 16:54:52', 'Dodane zgłoszenie', '::1', 'Chrome', '31.0.1650.57', 'Windows 7', 'Konkurs: 1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `imie` varchar(100) DEFAULT NULL,
  `nazwisko` varchar(100) DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_lastlogin` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) DEFAULT NULL,
  `kto_zalozyl` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_user`, `login`, `email`, `imie`, `nazwisko`, `date_create`, `date_lastlogin`, `is_admin`, `is_active`, `password`, `kto_zalozyl`) VALUES
(1, 'admin', 'miethek@gmail.com', 'Admin2', 'aDmin4', '2013-11-04 16:39:15', '2013-11-17 14:55:17', 1, 1, 'd033e22ae348aeb5660fc2140aec35850c4da997', ''),
(2, 'miethek', 'miethek@miethek.net', 'Bart', 'Galezia', '2013-11-11 18:24:14', '2013-11-12 11:05:19', 0, 0, 'd24e14bb53e137a931e5b7fcbe0c6a0e7d17c029', 'admin'),
(3, 'aaa', 'bgalezia@gmail.com', 'bbb', 'ccc', '2013-11-11 18:35:50', '2013-11-16 17:45:49', 0, 0, '', 'admin'),
(6, 'abcd', 'bart.city@gmail.com', 'Bartek', 'Gałęzia', '2013-11-16 19:33:33', '2013-11-16 19:34:06', 0, 0, '', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zgloszenia`
--

CREATE TABLE IF NOT EXISTS `zgloszenia` (
  `id_zgloszenia` int(10) NOT NULL AUTO_INCREMENT,
  `id_konkurs` int(5) NOT NULL,
  `imie` varchar(150) NOT NULL,
  `nazwisko` varchar(150) DEFAULT NULL,
  `plec` varchar(1) DEFAULT NULL,
  `adres` varchar(150) DEFAULT NULL,
  `kod1` int(2) DEFAULT NULL,
  `kod2` int(3) DEFAULT NULL,
  `miasto` varchar(150) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `slogan` text NOT NULL,
  `kod` varchar(10) NOT NULL,
  `paragon` varchar(20) DEFAULT NULL,
  `regulamin` tinyint(1) DEFAULT NULL,
  `zgoda1` tinyint(1) DEFAULT NULL,
  `zgoda2` tinyint(1) DEFAULT NULL,
  `zgoda3` tinyint(1) DEFAULT NULL,
  `captcha` varchar(10) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `version` varchar(50) NOT NULL,
  `system` varchar(100) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `potwierdzone` tinyint(1) NOT NULL DEFAULT '0',
  `kto_potwierdzil` varchar(100) DEFAULT NULL,
  `winner` tinyint(1) NOT NULL DEFAULT '0',
  `data_losowania` timestamp NULL DEFAULT NULL,
  `kto_losowal` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_zgloszenia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Zrzut danych tabeli `zgloszenia`
--

INSERT INTO `zgloszenia` (`id_zgloszenia`, `id_konkurs`, `imie`, `nazwisko`, `plec`, `adres`, `kod1`, `kod2`, `miasto`, `email`, `telefon`, `slogan`, `kod`, `paragon`, `regulamin`, `zgoda1`, `zgoda2`, `zgoda3`, `captcha`, `ip`, `browser`, `version`, `system`, `date_create`, `potwierdzone`, `kto_potwierdzil`, `winner`, `data_losowania`, `kto_losowal`) VALUES
(1, 1, 'Adam', 'Nowak', 'M', 'ulica 1', 11, 222, 'miasto', 'adam@wp.pl', '123412341234', 'asdasdasdasd', '12312312', NULL, NULL, NULL, NULL, NULL, 'Itonho und', '195.205.15.199', 'Firefox', '24.0', 'Linux', '2013-10-28 09:42:37', 0, NULL, 1, NULL, NULL),
(2, 1, 'Damian', 'Kowalski', 'M', 'aleja 2', 33, 123, 'miasteczko', 'Kowalski@wp.pl', '123412341234', 'adfasfasdfadsf', 'sqweqweqw', NULL, NULL, NULL, NULL, NULL, '310 983544', '195.205.15.3', 'Firefox', '24.0', 'Windows 7', '2013-10-28 09:44:28', 0, NULL, 1, '2013-11-08 15:04:04', 'admin'),
(3, 1, 'Alicja', 'Nowakowska', 'K', 'skwer 3', 0, 999, 'Stolica', 'ddd@wp.pl', '123123123', 'asdas', 'dasdasda', NULL, NULL, NULL, NULL, NULL, '25.3 reaty', '::1', 'Firefox', '24.0', 'Windows 7', '2013-11-04 20:14:17', 0, NULL, 1, NULL, NULL),
(4, 1, 'Jan', 'Nowak', 'M', 'al. Jerozolimskie 56c', 11, 234, 'Warszawa', 'miethek@gmail.com', '1234567689', 'Fajnie jest wygrać', 'asdfuqwerq', '2013-11-03', 1, 0, 0, 0, 'was ineown', '::1', 'Firefox', '24.0', 'Windows 7', '2013-11-04 20:25:13', 0, NULL, 1, NULL, NULL),
(5, 1, 'zzz', 'xxx', 'K', 'yyy', 99, 765, 'Kielce', 'miethek@gmail.com', '987654321', 'asdasdasd', 'asdasd', '2013-11-03', 1, 1, 1, 1, 'FedERec ex', '::1', 'Firefox', '24.0', 'Windows 7', '2013-11-04 20:41:03', 0, NULL, 1, '2013-11-14 22:28:30', 'admin'),
(6, 1, 'aaaa', 'bbbb', 'K', 'aaaaa', 11, 213, '1', 'miethek@gmail.com', '123213213', 'asdasdasd', 'sadasdasda', '2013-11-08', 1, 1, 1, 1, 'lsockL ouv', '127.0.0.1', 'Firefox', '25.0', 'Linux', '2013-11-12 09:04:48', 0, NULL, 1, '2013-11-16 09:59:52', 'admin'),
(7, 1, 'bbb', 'asdasd', 'K', 'asdasdasd', 74, 454, 'Kielce', 'miethek@gmail.com', '5646546546', 'asdasdsd', 'asdasdasd', '2013-11-08', 1, 1, 1, 1, '2855465 92', '127.0.0.1', 'Firefox', '25.0', 'Linux', '2013-11-13 13:06:24', 0, NULL, 1, '2013-11-15 23:55:28', 'admin'),
(8, 1, 'FASDAS', 'ASDASDAS', 'M', 'asdasd', 44, 662, 'asdasdasd', 'asdas@gmail.com', '798456123', 'asdadasdasd', 'adasdasdas', '2013-11-02', 1, 1, 1, 1, '6 33866995', '::1', 'Firefox', '25.0', 'Windows 7', '2013-11-16 18:14:19', 0, NULL, 0, NULL, NULL),
(9, 0, '0', '0', 'M', 'asdas', 12, 123, 'asasd', 'miethek@gmail.com', '654654654', 'adasdasdasd', 'asdsadasd', '2013-11-08', 0, 0, 0, 0, 'essesft ca', '::1', 'Chrome', '31.0.1650.57', 'Windows 7', '2013-11-17 16:37:13', 0, NULL, 0, NULL, NULL),
(10, 0, '0', '0', 'K', 'asdasd', 12, 123, 'asda', 'miethek@gmail.com', '1231231231', '0', '0', '0', 0, 0, 0, 0, '0', '::1', 'Chrome', '31.0.1650.57', 'Windows 7', '2013-11-17 16:37:46', 0, NULL, 0, NULL, NULL),
(11, 1, '0', '0', 'M', 'asdasd', 21, 123, 'asdasd', 'miethek@gmail.com', '13242134231423', '0', '0', '0', 0, 0, 0, 0, '0', '::1', 'Chrome', '31.0.1650.57', 'Windows 7', '2013-11-17 16:40:06', 0, NULL, 0, NULL, NULL),
(12, 1, 'aaaa', 'bbbb', 'M', 'asdasdasd', 12, 123, 'asasd', 'miethek@gmail.com', '12321341234', 'asdasdasdasd', 'asdfasdfds', '2013-11-09', 1, 1, 1, 1, '245592 511', '::1', 'Chrome', '31.0.1650.57', 'Windows 7', '2013-11-17 16:54:52', 0, NULL, 0, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
