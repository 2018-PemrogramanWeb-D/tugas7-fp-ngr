-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 01:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `a_id` int(11) NOT NULL,
  `a_img_link` varchar(500) NOT NULL,
  `a_genre` varchar(20) NOT NULL,
  `a_link` varchar(80) NOT NULL,
  `a_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`a_id`, `a_img_link`, `a_genre`, `a_link`, `a_name`) VALUES
(1, 'https://images.performgroup.com/di/library/GOAL/da/11/fifa-18-world-cup-update_1muuluhdqyeshz1y22gbiw58s.jpg?t=-1535892213', 'Sport', '../../tugas7-fp-ngr/sport/FIFA2018.php', 'fifa 2018'),
(2, 'https://vignette.wikia.nocookie.net/captaintsubasa/images/6/60/Captain_Tsubasa_%28PS2%29.jpg/revision/latest?cb=20081001031143', 'Sport', '../../tugas7-fp-ngr/sport/captaintsubasa.php', 'Captain Tsubasa'),
(3, 'https://segaretro.org/images/thumb/a/a7/DaytonaUSA_Art.jpg/504px-DaytonaUSA_Art.jpg', 'Sport', '../../tugas7-fp-ngr/sport/daytonausa.php', 'Daytona USA (Arcade)'),
(4, 'https://i.ytimg.com/vi/F7G91RjVmvk/maxresdefault.jpg', 'Platformer', '../../tugas7-fp-ngr/platform/Crash.php', 'Crash N\'sane Trilogy'),
(5, 'https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcs0kFf0mPcqlr.9LtCWvGqMn9BS2H2iIcZlhBH0jcafpYqt.u1KQ9Qjaxv3hjDNZ4XOfGRhYq6w8.eLBfCMAWKNpEq6LVLHrLnhbLXZcAhS6hhrTJ9P1xbfRZ0WtaKaE7z6wxHRnIic1ECRZ_IZG0o_7AU43A9sl0r769ksFf_Cc-&h=300&w=200&format=jpg', 'Platformer', '../../tugas7-fp-ngr/plarform/shovelknighttt.php', 'Shovel Knight'),
(6, 'http://info.sonicretro.org/images/thumb/3/37/Sonic1_box_jap.jpg/800px-Sonic1_box_jap.jpg\"', 'Platformer', '../../tugas7-fp-ngr/plarform/sonic1.php', 'Sonic the Hedgehog (1991)'),
(7, 'https://images-1.gog.com/6d049200e23f35fd288419ab16955a63f2b749cd1a80e8121c4737ffdc4848c1.jpg', 'Simulation', '../../tugas7-fp-ngr/simulation/KerbalSpaceProgram.php', 'Kerbal Space Program'),
(8, 'https://upload.wikimedia.org/wikipedia/en/6/63/MarioAndLuigiSuperstarSagaGBACoverArtUS.jpg', 'Simulation', '../../tugas7-fp-ngr/simulation/sims1.php', 'The Sims'),
(9, 'https://upload.wikimedia.org/wikipedia/en/6/63/MarioAndLuigiSuperstarSagaGBACoverArtUS.jpg', 'RPG', '../../tugas7-fp-ngr/rpg/marioluigissg.php', 'Mario and Luigi Superstar Saga'),
(10, 'https://vignette.wikia.nocookie.net/finalfantasy/images/4/4e/FF7_Logo.png/revision/latest?cb=20160920112537', 'RPG', '../../tugas7-fp-ngr/rpg/FinalFantasy.php', 'Final Fantasy'),
(11, 'https://yt3.ggpht.com/aXRtwPwqQ8yYDZ6e8EtNX8h9U_vztz4VOkgLdFKa97EfIJfXnwghFwxw1Pex4Fvr7mGWNY1ccc69LFXv_A=w390-h540-nd', 'RPG', '../../tugas7-fp-ngr/rpg/undertale.php', 'Undertale'),
(12, 'http://tokyologic.info/wp/wp/wp-content/uploads/2015/01/maimai-640x270.jpg', 'Rhythm', '../../tugas7-fp-ngr/rhytmn/maimai.php', 'Maimai'),
(13, 'https://static.tvtropes.org/pmwiki/pub/images/sviv_01.jpg', 'Rhythm', '../../tugas7-fp-ngr/rhytmn/soundvoltex4.php', 'Sound Voltex IV Heavenly Haven'),
(14, 'https://nintendosoup.com/wp-content/uploads/2018/03/taiko-no-tatsujin-nintendo-switch-version-mar92018-1.jpg', 'Rhythm', '../../tugas7-fp-ngr/rhytmn/taikoswitch.php', 'Taiko no Tatsujin ~Nintendo Switch Version~'),
(15, 'https://vignette.wikia.nocookie.net/logopedia/images/6/67/Tekken-7-logo-wallpaper.jpg/revision/latest?cb=20140719134807\"', 'Fighting', '../../tugas7-fp-ngr/fighting/Tekken.php', 'Tekken'),
(16, 'https://en.touhouwiki.net/images/7/72/Th123.jpg', 'Fighting', '../../tugas7-fp-ngr/fighting/touhou12.3.php', 'Touhou 12.3 Hisoutensoku'),
(17, 'https://mark.trademarkia.com/logo-images/shanghai-sunborn-network-technology-co/girlsfrontline-87610067.jpg', 'Strategy', '../../tugas7-fp-ngr/strategy/GirlsFrontline.php', 'Girls\' Frontline'),
(18, 'https://www.euronics.ee/UserFiles/Products/Images/87399-far-cry-3.jpg', 'Shooting', '../../tugas7-fp-ngr/shooter/FarCry3.php', 'FarCry3');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `c_contents` varchar(500) NOT NULL,
  `c_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `a_id`, `u_id`, `c_contents`, `c_time`) VALUES
(6, 1, 1, 'test', '2018-11-09'),
(12, 1, 3, 'qqqq', '2018-11-10'),
(13, 1, 3, 'wwwwww', '2018-11-10'),
(14, 1, 3, 'wwwwww', '2018-11-10'),
(15, 1, 3, 'wwwwww', '2018-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(64) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_password`) VALUES
(1, 'test', 'asfsdf@cgnhfh.com', 'test2'),
(2, 'dGVzdHQ=', 'YXNmc2RmQGNnbmhmaC5jb20=', '80b85ebf641abccdd26e327c578235'),
(3, 'dGVzdHR0', 'eXJzdEBzZGdzLmNvbQ==', '5e52fee47e6b070565f74372468cdc699de89107'),
(4, 'MTIz', 'MTIzQGQuY29t', 'e3431a8e0adbf96fd140103dc6f63a3f8fa343ab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`,`a_id`,`u_id`),
  ADD KEY `user_comments_fk` (`u_id`),
  ADD KEY `articles_comments_fk` (`a_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `articles_comments_fk` FOREIGN KEY (`a_id`) REFERENCES `articles` (`a_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_comments_fk` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
