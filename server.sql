-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 11:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `para1` text NOT NULL,
  `para2` text NOT NULL,
  `para3` text NOT NULL,
  `para4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`para1`, `para2`, `para3`, `para4`) VALUES
('We can certainly say, that we\'re one of the best when it comes to recommendation of quality content. Movies, TV shows, Anime - you just name it, we are there to make sure if it\'s the right content for you. Some expert Critics frequent here- They aren\'t afraid to write what\'s on their minds.', 'Film-Sensei has assembled a pack of overseers whose job it is to read thousands of movies and TV show reviews every day. The pack collects movie and TV reviews from the trusted critics and publications every day, generating Sensei scores.Overseers carefully examine and notes if the reviews are honest and to the fact. Trusted critics can also self-submit their reviews.\r\n ', 'Long story short, Just put your faith in us - We will not disappoint you with irrelevant content.\r\n             ', 'Also, there is to a review system for genral audiences soon. Soon, you, your wonderful self would be able to take part in bestowing the movies with ratings, as you have enjoyed it. It would take some time to turn you guys into Pseudo-Senseis, so please be content with being a student for now.\r\n            ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comments` text NOT NULL,
  `m_id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comments`, `m_id`, `uname`, `email`) VALUES
('What a nyc movie !\r\n', 1, 'Farhad  Zaman', 'farhaduzzaman069@gmail.com'),
('I like it \r\n', 1, 'Farhad  Zaman', 'farhaduzzaman069@gmail.com'),
('Synder Cut !!!\r\n', 1, 'Chisty', 'chisty@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `email`, `message`) VALUES
('Chisty', 'Mahmud', 'chisty@gmail.com', 'sfgvsgdbfd'),
('Chisty', 'gdgd', 'chisty@gmail.com', 'gdfgdf'),
('asdas', 'vdvd', 'ccc', 'vcv');

-- --------------------------------------------------------

--
-- Table structure for table `contactext`
--

CREATE TABLE `contactext` (
  `adress` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactext`
--

INSERT INTO `contactext` (`adress`, `phone`, `email`) VALUES
('12/A, Bashundhara DOHS, Dhaka 1212', '+8801801236923', 'filmsensei@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `m_id` int(11) NOT NULL,
  `movie_name` text NOT NULL,
  `banner_link` text NOT NULL,
  `poster_link` text NOT NULL,
  `embed_link` text NOT NULL,
  `movie_para` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `movie_name`, `banner_link`, `poster_link`, `embed_link`, `movie_para`) VALUES
(1, 'Zack Synder\'s Justice League', '\"images/synderbanner.jpeg\"', '\"images/synderposter.jpg\"', '\"https://www.youtube.com/embed/vM-Bja2Gy04\" ', 'In Zack Snyder\'s Justice League, determined to ensure Superman’s (Henry Cavill) ultimate sacrifice was not in vain, Bruce Wayne (Ben Affleck) aligns forces with Diana Prince (Gal Gadot) with plans to recruit a team of metahumans to protect the world from an approaching threat of catastrophic proportions. The task proves more difficult than Bruce imagined, as each of the recruits must face the demons of their own pasts to transcend that which has held them back, allowing them to come together, finally forming an unprecedented league of heroes. Now united, Batman (Affleck), Wonder Woman (Gadot), Aquaman (Jason Momoa), Cyborg (Ray Fisher), and The Flash (Ezra Miller) may be too late to save the planet from Steppenwolf, DeSaad, and Darkseid and their dreadful intentions.'),
(2, 'Avengers Endgame', '\"images/endgamebanner.jpg\" ', '\"images/endgameposter.jpg\"', '\"https://www.youtube.com/embed/TcMBFSGVi1c?start=3\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" ', 'Whatever it takes. Watch the brand-new trailer for Marvel Studios’ Avengers: Endgame. In theaters April 26.'),
(3, 'The Falcon and The Winter Soldier', '\"images/falconbanner.jpg\"', '\"images/falconposter.jpg\"', '\"https://www.youtube.com/embed/IWBsDaFWyTE\"', 'Are you ready? Watch the brand-new trailer for Marvel Studios’ “The Falcon and the Winter Soldier,” and start streaming the Original Series March 19 on Disney+: https://bit.ly/2XyBSIW'),
(4, 'Star Wars 3: Revenge of The Sith', '\"\"', '\"images/starposter.png\"', '\"https://www.youtube.com/embed/5UnjrG_N8hU?start=1\"', 'Years after the onset of the Clone Wars, the noble Jedi Knights lead a massive clone army into a galaxy-wide battle against the Separatists. When the sinister Sith unveil a thousand-year-old plot to rule the galaxy, the Republic crumbles and from its ashes rises the evil Galactic Empire. Jedi hero Anakin Skywalker is seduced by the dark side of the Force to become the Emperor\'s new apprentice -- Darth Vader. The Jedi are decimated, as Obi-Wan Kenobi and Jedi Master Yoda are forced into hiding. The only hope for the galaxy are Anakin\'s own offspring -- the twin children born in secrecy who will grow up to become heroes.'),
(5, 'For All Mankind', '\"\"', '\"images/mankindposter.jpg\"', '\"https://www.youtube.com/embed/eoBvvrbmOvk\"', 'For All Mankind is created by Emmy® Award winner Ronald D. Moore (Outlander, Battlestar Galactica), Matt Wolpert and Ben Nedivi. Told through the lives of NASA astronauts, engineers and their families, For All Mankind presents an aspirational world where NASA and the space program remained a priority and a focal point of our hopes and dreams.\r\n\r\nFor All Mankind stars Joel Kinnaman, Michael Dorman, Wrenn Schmidt, Shantel VanSanten, Sarah Jones and Jodi Balfour. Ronald D. Moore, Maril Davis, Matt Wolpert, Ben Nedivi serve as executive producers.'),
(6, 'Suicide Squad', '\"\"', '\"images/suicideposter.jpg\"', '\"https://www.youtube.com/embed/CmRih_VtVAs?start=5\"', 'Pre-order “Suicide Squad: The Album” and receive instant downloads of twenty one pilots\' \"Heathens”, Lil Wayne, Wiz Khalifa & Imagine Dragons with Logic & Ty Dolla $ign ft. X Ambassadors\' “Sucker For Pain”, and Skrillex & Rick Ross’ “Purple Lamborghini”\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `m_id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`m_id`, `rating`, `email`) VALUES
(1, 2.6, 'farhaduzzaman069@gmail.com'),
(1, 4.9, 'chisty@gmail.com'),
(2, 5, 'farhaduzzaman069@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `t_id` int(11) NOT NULL,
  `profile_image` text NOT NULL,
  `name` text NOT NULL,
  `para` text NOT NULL,
  `mail` text NOT NULL,
  `fbname` text NOT NULL,
  `fblink` text NOT NULL,
  `instaname` text NOT NULL,
  `instalink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`t_id`, `profile_image`, `name`, `para`, `mail`, `fbname`, `fblink`, `instaname`, `instalink`) VALUES
(1, '\"images\\profile2.jpg\"', 'Farhad Uz Zaman', 'Hi, I\'m Farhad Uz Zaman from AUST; ID:180104069; Lab Group: B1.', '180104069@aust.edu', 'Farhad Uz Zaman', '\"https://www.facebook.com/ami.shourav.5\"', '@_fabaswir', '\"https://www.instagram.com/_fabaswir/\"'),
(2, '\"images\\profile3.jpg\"', 'Maruf Hasan', 'Hi, I\'m Maruf Hasan from AUST; ID:180104058;  Lab Group: B1.', '180104058@aust.edu', 'Maruf Hasan Chisty', '\"https://www.facebook.com/marufhasan.chisty.520\"', '@cir_clef', '\"https://www.instagram.com/cir_clef/\"');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `birthdate` varchar(150) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `birthdate`, `gender`, `email`, `phone`, `pass`) VALUES
('Chisty', '24/01/1997', 'Female', 'chisty@gmail.com', '121212', 'e10adc3949ba59abbe56e057f20f883e'),
('Farhad  Uz Zaman', '24/01/1998', 'Male', 'farhaduzzaman069@gmail.com', '01676546443', 'e10adc3949ba59abbe56e057f20f883e'),
('Wahid Uz Zaman', '24/01/1997', 'Male', 'wahid@gmail.com', '0101010', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD KEY `midcon` (`m_id`),
  ADD KEY `emailcon` (`email`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD KEY `m_id_con` (`m_id`),
  ADD KEY `email_con` (`email`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `emailcon` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `midcon` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `email_con` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `m_id_con` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
