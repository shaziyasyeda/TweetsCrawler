-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 08:04 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trx_tweets`
--

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `tweetId` varchar(100) NOT NULL,
  `text` varchar(200) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `retweet_count` int(11) NOT NULL,
  `is_quote_status` tinyint(1) NOT NULL,
  `is_retweet` tinyint(1) NOT NULL,
  `favorite_count` int(11) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`tweetId`, `text`, `user_id`, `retweet_count`, `is_quote_status`, `is_retweet`, `favorite_count`, `created_at`, `timestamp`) VALUES
('828317833138470912', 'RT @harshkkapoor: #VikasVsSCAM\n\nVikas needs disciplined execution of well thoughtout Policies\n can be achieved only through sincere hardwor…', '4503057628', 32, 0, 0, 0, 'Sun Feb 05 19:02:15 +0000 2017', '2017-02-05 19:04:10'),
('828317852956364800', 'RT @sidbakaria: #VikasVsSCAM\nSpot the difference between our  PM Shri @narendramodi &amp; other stupid leaders out there to dislodge him https:…', '3324170294', 10, 0, 0, 0, 'Sun Feb 05 19:02:20 +0000 2017', '2017-02-05 19:04:10'),
('828317866638266369', 'RT @LavishingLavish: @narendramodi ji changd course of politics nw every1 has 2 talk of development whether dey lyk it or nt.#VikasVsSCAM h…', '4193299998', 4, 0, 0, 0, 'Sun Feb 05 19:02:23 +0000 2017', '2017-02-05 19:04:10'),
('828317871197548544', 'RT @byadavbjp: Is it a sign of intellectual bankruptcy or Is it corrupted arrogance? What''s wrong with @INCIndia''s shehzada? #VikasVsSCAM h…', '389491470', 92, 1, 0, 0, 'Sun Feb 05 19:02:24 +0000 2017', '2017-02-05 19:04:10'),
('828317883260346368', 'RT @prakashSriv: #VikasVsSCAM\nOnce again successful trend\nthanks &amp; congratulations all for such great support\n?? ???? ?? ???? ???????????????????? https:/…', '142023476', 19, 0, 0, 0, 'Sun Feb 05 19:02:27 +0000 2017', '2017-02-05 19:04:10'),
('828317889178517505', 'RT @nanditathhakur: #VikasVsSCAM \nIn Gujarat me and my sis drive from Nadiad to Ahm airport almost 60 km at 2.30 AM is it possible in UP ??', '832819592', 107, 0, 0, 0, 'Sun Feb 05 19:02:28 +0000 2017', '2017-02-05 19:04:10'),
('828317900968689665', 'RT @SirJadeja: S- #Samajwadi\nC- #Congress \nA- #Akhilesh \nM- #Mayawati \n\nWhat Do You Want? #VikasVsSCAM\nRT - Vikas \nFav - SCAM \nhttps://t.co…', '522366751', 283, 0, 0, 0, 'Sun Feb 05 19:02:31 +0000 2017', '2017-02-05 19:04:10'),
('828317914172239872', 'RT @RajeevTwari0505: #VikasVsSCAM\n\n??? ???????? ?? ?????? ?? ??????? ?????,.\n? ????? ?????? ?? ??????\n\n#VikasVsSCAM \n\n@pujaj66 @Pushpanjali…', '2909259024', 16, 0, 0, 0, 'Sun Feb 05 19:02:34 +0000 2017', '2017-02-05 19:04:10'),
('828317978349367296', 'RT @SANDIPC08579182: Mother &amp; Motherland Bharatvarsh Are Even Greater Than Swarg- Hare Rama Hare Krishna #VikasVsScam #SCAMHataoBJPLao #Sca…', '164569089', 5, 0, 0, 0, 'Sun Feb 05 19:02:50 +0000 2017', '2017-02-05 19:04:10'),
('828318018270851072', 'Will congress&amp;sapa bonding will be helpful vs bjp #vikasVSscam', '823094483260731392', 0, 0, 0, 0, 'Sun Feb 05 19:02:59 +0000 2017', '2017-02-05 19:04:10'),
('828318024323182593', 'RT @harshkkapoor: #VikasVsSCAM\n\nOn one side we have Vikaspurush Sh @narendramodi ji\nAnd\n\nAnother side claimants of Vikas who only do Pariva…', '3650691374', 77, 0, 0, 0, 'Sun Feb 05 19:03:01 +0000 2017', '2017-02-05 19:04:09'),
('828318034712424448', 'RT @piyushgautam571: #VikasVsSCAM  Hindus r free to choose their fate. Either they can go with anti Hindu alliance "SP+Congress" or choose…', '4193299998', 4, 0, 0, 0, 'Sun Feb 05 19:03:03 +0000 2017', '2017-02-05 19:04:09'),
('828318048054423552', 'RT @nanditathhakur: #VikasVsSCAM  Students sell laptops given by Akhilesh Yadav in computer markets, OLX website https://t.co/je96F6IuIR', '97895996', 23, 0, 0, 0, 'Sun Feb 05 19:03:06 +0000 2017', '2017-02-05 19:04:09'),
('828318095294988289', 'RT @ANKANDUTTA16: #VikasVsSCAM\nOne is fighting against Corruption,unemployment,poverty &amp; anarchy. Others are fighting against him.\nNow the…', '4310983692', 36, 0, 0, 0, 'Sun Feb 05 19:03:17 +0000 2017', '2017-02-05 19:04:09'),
('828318142032142336', '#VikasVsSCAM https://t.co/vwyRxw65t9', '2813883931', 0, 1, 0, 0, 'Sun Feb 05 19:03:29 +0000 2017', '2017-02-05 19:04:09'),
('828318165813776384', 'RT @gitamehta65: A 2 Z of scams by Congress. \nVote 4 BJP Vote 4 development\n#VikasVsSCAM https://t.co/CS2umeWckr', '4422466933', 32, 0, 0, 0, 'Sun Feb 05 19:03:34 +0000 2017', '2017-02-05 19:04:09'),
('828318173720088576', 'RT @harshkkapoor: #VikasVsSCAM\n\nABCD of corruption\n\nCongress has looted India for decades now https://t.co/mdAMmyPxLF', '828201588439281664', 53, 0, 0, 0, 'Sun Feb 05 19:03:36 +0000 2017', '2017-02-05 19:04:09'),
('828318192338608131', 'RT @SANDIPC08579182: Mother &amp; Motherland Bharatvarsh Are Even Greater Than Swarg- Hare Rama Hare Krishna #VikasVsScam #SCAMHataoBJPLao #Sca…', '1341803388', 5, 0, 0, 0, 'Sun Feb 05 19:03:41 +0000 2017', '2017-02-05 19:04:09'),
('828318208696446976', '#VikasVsSCAM If u vote for Vikas thr wl b no scammers! Akhilesh ne ghadhey ko baap banaya aur baap ko ghada!! Phele gundagardi an ghadagiri!', '137734296', 0, 0, 0, 0, 'Sun Feb 05 19:03:45 +0000 2017', '2017-02-05 19:04:08'),
('828318218997661696', 'RT @sampadscales: ?? ?????? ?? ???, ?? ???????? ?? ????\n????? ?? ?? ??? ??? ?????? ?? ?????\n\n??? ????? ???? ?????\n\n#VikasVsSCAM https://t.c…', '4310983692', 19, 0, 0, 0, 'Sun Feb 05 19:03:47 +0000 2017', '2017-02-05 19:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `twt_users`
--

CREATE TABLE `twt_users` (
  `user_id` varchar(100) NOT NULL,
  `user_handle` varchar(100) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_profile_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twt_users`
--

INSERT INTO `twt_users` (`user_id`, `user_handle`, `user_name`, `user_profile_img`) VALUES
('1341803388', 'I_YogiVerma', 'Yug verma', 'http://pbs.twimg.com/profile_images/828216102463369216/ZiVp7wOE_normal.jpg'),
('137734296', 'SLokesh921', 'Lokesh', 'http://abs.twimg.com/sticky/default_profile_images/default_profile_0_normal.png'),
('142023476', 'dilipjain1979', 'Dilip Jain', 'http://pbs.twimg.com/profile_images/827925940420411395/UH3ijhgY_normal.jpg'),
('164569089', 'sankalpdwi', 'sankalp dwivedi', 'http://abs.twimg.com/sticky/default_profile_images/default_profile_6_normal.png'),
('2813883931', 'SANDIPC08579182', 'SANDIP CHAKRABORTY', 'http://pbs.twimg.com/profile_images/512032520385204225/DS_SE69p_normal.jpeg'),
('2909259024', 'pujaj66', 'puja', 'http://pbs.twimg.com/profile_images/827885156371292162/T8qumevL_normal.jpg'),
('3324170294', 'AdityaMangroliy', 'Aditya Mangroliya', 'http://pbs.twimg.com/profile_images/825047287097344002/kSN3wat-_normal.jpg'),
('3650691374', 'AmiteshBiswas1', 'proud kafir', 'http://pbs.twimg.com/profile_images/822780233946451969/NRzip4cP_normal.jpg'),
('389491470', 'narendrapjoshi', 'Narendra Joshi', 'http://pbs.twimg.com/profile_images/700987178965344256/9VjqtaJ6_normal.jpg'),
('4193299998', 'sood_pankul', 'Pankul Sood', 'http://pbs.twimg.com/profile_images/769963438936293377/Hkc7pf5z_normal.jpg'),
('4310983692', 'myself_ap', 'Aarav Punjabi', 'http://pbs.twimg.com/profile_images/826138707765846017/4p-P6ZV6_normal.jpg'),
('4422466933', 'RathodDilipsnh', 'Dilipsinh V Rathod', 'http://pbs.twimg.com/profile_images/671739251663331328/1WTcKoZu_normal.jpg'),
('4503057628', 'mp_manash', 'M.Ravan#BMJ[ ????? ]', 'http://pbs.twimg.com/profile_images/827216181425799173/LFXfwB3P_normal.jpg'),
('522366751', 'Purohit9Rahul', 'Rahul Purohit', 'http://pbs.twimg.com/profile_images/807222646991532032/MePjLA6A_normal.jpg'),
('823094483260731392', 'SumitDadhich6', 'Sumit Dadhich', 'http://pbs.twimg.com/profile_images/823224838001197057/wHSXkFV6_normal.jpg'),
('828201588439281664', 'pappuchorhai', 'Pappu', 'http://pbs.twimg.com/profile_images/828206595947556864/XXq546ZW_normal.jpg'),
('832819592', 'Bp65prajapat', 'bharat prajapat', 'http://pbs.twimg.com/profile_images/776515711208390656/zhDhZaee_normal.jpg'),
('97895996', 'amitabh_aks', 'Amitabh Chaudhary', 'http://pbs.twimg.com/profile_images/823078986267979776/3wvxPHdq_normal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`tweetId`);

--
-- Indexes for table `twt_users`
--
ALTER TABLE `twt_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_handle` (`user_handle`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
