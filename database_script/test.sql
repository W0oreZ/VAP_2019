-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 08:20 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `ville_id` int(10) UNSIGNED NOT NULL,
  `details_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `approved_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id`, `titre`, `description`, `prix`, `ville_id`, `details_id`, `categorie_id`, `created_by`, `approved_by`, `created_at`, `updated_at`) VALUES
(1, 'sac a do', 'ccxcxc', 0, 3, 0, 1, 1, 1, '2018-10-10 16:36:17', '2018-10-25 14:42:29'),
(2, 'iphone5', 'description', 0, 4, 0, 2, 1, 1, '2018-10-10 16:40:56', '2018-10-18 16:50:00'),
(3, 'tesla 44', 'description123311', 159, 4, 0, 2, 99, 1, '2018-10-11 17:59:42', '2018-10-18 16:50:29'),
(4, 'voiture peugot', 'description123311', 159, 4, 0, 2, 99, 1, '2018-10-11 18:12:21', '2018-10-22 14:35:55'),
(5, 'multipleuploads', 'description123311', 159, 4, 0, 2, 99, 0, '2018-10-11 18:13:01', '2018-10-22 14:35:43'),
(6, 'multipleuploads', 'description123311', 159, 4, 0, 2, 99, 0, '2018-10-11 18:13:56', '2018-10-22 14:35:44'),
(7, 'testannonceadd', 'testuser', 123354, 1, 0, 1, 1, 0, '2018-10-11 18:23:37', '2018-10-22 14:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `annonce_images`
--

CREATE TABLE `annonce_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `annonce_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(50) NOT NULL,
  `isPrimary` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonce_images`
--

INSERT INTO `annonce_images` (`id`, `annonce_id`, `image`, `isPrimary`) VALUES
(1, 1, 'secondtest123.png', 0),
(2, 1, 'p_01.jpg', 1),
(3, 3, '155.jpg', 0),
(4, 3, 'p_02.jpg', 1),
(5, 2, 'adv_2.png', 0),
(6, 2, 'p_03.jpg', 1),
(7, 4, 'p_04.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT 'all',
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`) VALUES
(1, 'all', NULL),
(2, 'Telephone', 'tels');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('dh2trkgi0mp5fpv5sgbd72covemnh9u2', '::1', 1540573110, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537333131303b757365726e616d657c733a31303a226e657773657373696f6e223b656d61696c7c733a32323a22746f6d797572696b3230313840676d61696c2e636f6d223b66697273746e616d657c733a31303a226e657773657373696f6e223b6c6173746e616d657c4e3b696d6167657c733a363a226e612e706e67223b69647c733a323a223134223b6163636573737c733a31313a225574696c69736174657572223b6c6f67676564696e7c623a313b),
('iaptv3lbj4g96ljqp4q3m3l5bsoqhfam', '::1', 1540573570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537333537303b),
('7uaufaioa4ntquark85vod7fpkvj8mvh', '::1', 1540574039, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537343033393b757365726e616d657c733a393a22557365725f54657374223b656d61696c7c733a31343a227465737440676d61696c2e636f6d223b66697273746e616d657c733a31303a22416264657272617a616b223b6c6173746e616d657c733a393a22456c6b686164697269223b696d6167657c733a31303a2270726f665f322e706e67223b69647c733a313a2231223b6163636573737c733a31313a225574696c69736174657572223b6c6f67676564696e7c623a313b),
('f2q196runcohi70sa5vvh0u4he78um0n', '::1', 1540574512, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537343531323b757365726e616d657c733a393a22557365725f54657374223b656d61696c7c733a31343a227465737440676d61696c2e636f6d223b66697273746e616d657c733a31303a22416264657272617a616b223b6c6173746e616d657c733a393a22456c6b686164697269223b696d6167657c733a31303a2270726f665f322e706e67223b69647c733a313a2231223b6163636573737c733a31313a225574696c69736174657572223b6c6f67676564696e7c623a313b),
('fg38d6h7uuprl3sl3j0qm7moaudh7i3n', '::1', 1540575006, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537353030363b757365726e616d657c733a393a22557365725f54657374223b656d61696c7c733a31343a227465737440676d61696c2e636f6d223b66697273746e616d657c733a31303a22416264657272617a616b223b6c6173746e616d657c733a393a22456c6b686164697269223b696d6167657c733a31303a2270726f665f322e706e67223b69647c733a313a2231223b6163636573737c733a31313a225574696c69736174657572223b6c6f67676564696e7c623a313b),
('g5jerc0l9senk4v3qct9a9qcuajj23o1', '::1', 1540575418, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537353431383b757365726e616d657c733a393a22557365725f54657374223b656d61696c7c733a31343a227465737440676d61696c2e636f6d223b66697273746e616d657c733a31303a22416264657272617a616b223b6c6173746e616d657c733a393a22456c6b686164697269223b696d6167657c733a31303a2270726f665f322e706e67223b69647c733a313a2231223b6163636573737c733a31313a225574696c69736174657572223b6c6f67676564696e7c623a313b),
('i8dle0d3pv32d5ovv2venjo9vfdc5hvo', '::1', 1540575729, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537353732393b757365726e616d657c733a393a22557365725f54657374223b656d61696c7c733a31343a227465737440676d61696c2e636f6d223b66697273746e616d657c733a31303a22416264657272617a616b223b6c6173746e616d657c733a393a22456c6b686164697269223b696d6167657c733a31303a2270726f665f322e706e67223b69647c733a313a2231223b6163636573737c733a31313a225574696c69736174657572223b6c6f67676564696e7c623a313b),
('9f7rcm0vq2gjlodabd8m77cfpp985ku5', '::1', 1540577520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537373532303b),
('5h4hka34iolqkp10mko1pjufe3sqpamk', '::1', 1540577903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303537373730363b);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_content` text NOT NULL,
  `status` enum('published','edited','blocked') DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL,
  `annonce_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `annonce_id` int(10) UNSIGNED DEFAULT NULL,
  `field_name` varchar(50) DEFAULT NULL,
  `field_value` varchar(50) DEFAULT NULL,
  `field_description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `target_id` int(11) UNSIGNED NOT NULL,
  `header` varchar(120) DEFAULT 'Instant',
  `content` text NOT NULL,
  `sent_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `read_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(10);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT 'N/A',
  `prenom` varchar(50) DEFAULT 'N/A',
  `date_naissance` date DEFAULT NULL,
  `adresse` tinytext,
  `telephone` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `rating` int(10) DEFAULT '0',
  `account_type` enum('Particulier','Professionel') DEFAULT 'Particulier',
  `is_activated` int(11) DEFAULT NULL,
  `is_online` tinyint(1) DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `nom`, `prenom`, `date_naissance`, `adresse`, `telephone`, `image`, `rating`, `account_type`, `is_activated`, `is_online`, `user_id`) VALUES
(1, 'Abderrazak', 'Elkhadiri', '1994-02-03', 'Hay Lamiaa Bloc 6 Numero 20, SAFI', NULL, 'prof_2.png', 3, 'Particulier', 1, 0, 2),
(2, 'proftest', NULL, NULL, NULL, NULL, 'na.png', 0, 'Particulier', 0, 0, 5),
(3, 'NewUploader', NULL, NULL, NULL, NULL, 'na.png', 0, NULL, 0, 0, 11),
(4, 'saad', 'benhima', NULL, NULL, '06688957504', 'na.png', 0, 'Particulier', 0, 0, 12),
(5, 'saad', 'benhima', NULL, NULL, '06688957504', 'na.png', 0, 'Particulier', 0, 0, 13),
(6, 'jilali', 'benjermoun', NULL, NULL, '06254875', 'na.png', 0, 'Particulier', 0, 0, 14),
(7, 'sqsqsqs', NULL, NULL, NULL, NULL, 'na.png', 0, NULL, 0, 0, 15),
(8, 'dddd', NULL, NULL, NULL, NULL, 'na.png', 0, NULL, 0, 0, 16),
(9, 'User_Test', NULL, NULL, NULL, NULL, 'na.png', 0, NULL, 0, 0, 17),
(10, 'registernew', NULL, NULL, NULL, NULL, 'na.png', 0, NULL, 0, 0, 18),
(11, 'issam', 'sakasse', NULL, NULL, NULL, 'noimg.png', 0, 'Particulier', 0, 0, 18),
(12, 'newsleeptest', NULL, NULL, NULL, NULL, 'na.png', 0, NULL, 0, 0, 19),
(13, 'hamza', 'elkhadiri', NULL, NULL, NULL, 'noimg.png', 0, 'Particulier', 0, 0, 19),
(14, 'newsession', NULL, NULL, NULL, NULL, 'na.png', 0, NULL, 0, 0, 20),
(15, 'testing123', 'newtest', NULL, NULL, NULL, 'noimg.png', 0, 'Particulier', 0, 0, 20),
(16, 'User#1234', NULL, NULL, NULL, NULL, 'na.png', 0, NULL, 0, 0, 21),
(17, 'Omar', 'Elkhadiri', NULL, NULL, NULL, 'noimg.png', 0, 'Particulier', 0, 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` enum('Utilisateur','Administrateur','Moderateur') DEFAULT 'Utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `access`) VALUES
(1, 'Admin', 'esperto.agency@gmail.com', '1234', 'Administrateur'),
(2, 'User_Test', 'test@gmail.com', '6482', 'Utilisateur'),
(3, 'Abdo', 'abd.elk@gmail.com', '648255', 'Administrateur'),
(4, 'test124578', 'tomyurik2018@gmail.com', '1234', 'Utilisateur'),
(5, 'proftest', 'gmail@gmail.com', '123456', 'Utilisateur'),
(11, 'NewUploader', 'lord-of-hamza@hotmail.fr', '6482', 'Utilisateur'),
(12, 'NewUploader', 'lord-of-hamza@hotmail.fr', '6482', 'Utilisateur'),
(13, 'NewUploader', 'lord-of-hamza@hotmail.fr', '6482', 'Utilisateur'),
(14, 'fixtest', 'kiritokan2001@gmail.com', '6482', 'Utilisateur'),
(15, 'sqsqsqs', 'esperto.agency@gmail.com', '123', 'Utilisateur'),
(16, 'dddd', 'esperto.agency@gmail.com', '11', 'Utilisateur'),
(17, 'User_Test', 'esperto.agency@gmail.com', 'sss', 'Utilisateur'),
(18, 'registernew', 'ebrothersland@gmail.com', '5555', 'Utilisateur'),
(19, 'newsleeptest', 'tomyurik2018@gmail.com', '6482', 'Utilisateur'),
(20, 'newsession', 'tomyurik2018@gmail.com', '111', 'Utilisateur'),
(21, 'User#1234', 'lord-of-hamza@hotmail.fr', '6482', 'Utilisateur');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `users_after_insert` AFTER INSERT ON `users` FOR EACH ROW BEGIN
insert into profiles values(null,NEW.username,NULL,NULL,NULL,NULL,'na.png',0,null,0,0,NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

CREATE TABLE `villes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT 'Global'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`id`, `nom`) VALUES
(1, 'Global'),
(2, 'Casablanca'),
(3, 'Marrakech'),
(4, 'SAFI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annonce_images`
--
ALTER TABLE `annonce_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `annonce_images`
--
ALTER TABLE `annonce_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
