-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 27 sep. 2022 à 14:44
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookstore`
--

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Professions` varchar(200) NOT NULL,
  `Biography` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `bookpurshaseds`
--

DROP TABLE IF EXISTS `bookpurshaseds`;
CREATE TABLE IF NOT EXISTS `bookpurshaseds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(200) DEFAULT NULL,
  `DocId` varchar(200) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Type` varchar(200) DEFAULT NULL,
  `Topics` varchar(200) DEFAULT NULL,
  `Year` varchar(200) DEFAULT NULL,
  `Quantity` varchar(200) DEFAULT NULL,
  `Price` varchar(200) DEFAULT NULL,
  `User` varchar(200) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` varchar(200) NOT NULL,
  `Doc` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT 'Pending payment',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Author1` varchar(200) DEFAULT NULL,
  `Author2` varchar(200) DEFAULT NULL,
  `Author3` varchar(200) DEFAULT NULL,
  `Publisher` varchar(200) DEFAULT NULL,
  `Type` varchar(200) DEFAULT NULL,
  `themes` varchar(200) DEFAULT NULL,
  `Topics` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `Year` varchar(200) DEFAULT NULL,
  `Pages` varchar(200) DEFAULT NULL,
  `Chapter` varchar(200) DEFAULT NULL,
  `core` varchar(200) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `Abstract` varchar(2000) DEFAULT NULL,
  `Introduction` varchar(9000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `Reference`, `image`, `Title`, `Author1`, `Author2`, `Author3`, `Publisher`, `Type`, `themes`, `Topics`, `price`, `Year`, `Pages`, `Chapter`, `core`, `stock`, `Abstract`, `Introduction`, `created_at`, `updated_at`) VALUES
(1, '123', NULL, 'Strengthening the Engineering in Software Engineering Education: A Software Engineering Bachelor of Engineering Program for the 21st Century', 'Linda Laird', '', '', 'IEEE', 'Journals and Magazines', 'Computing and Processing', 'Software Engineering', '150', '2017', '10', '5', 'Papercore', 12, 'In the fall of 2015, Stevens Institute of Technology welcomed the first freshmen into a newly launched Software Engineering Undergraduate Program based largely on the most recent ACM and IEEE-CS guidelines for undergraduate software engineering programs. This is the first such program in the US that also has an ABET accredited general engineering curriculum. Students will receive a B. E. in Software Engineering Degree, and be prepared to sit for the Fundamentals of Engineering (FE) examination. In addition to its strong engineering foundation, the program benefits from the success of the Stevens graduate program in software engineering. This paper describes the program: the motivation, the curriculum, the program assessment plan, the early challenges, and the results to date, including some consideration as a potential model of an undergraduate Cyber-Physical Systems Engineering curriculum.', 'On any given day, there are over 150,000 job openings for software engineers in the United States [3]. This represents a huge variety of jobs, ranging from Python programmers or network administrators to overall systems architects. Frequently jobs may be called software engineering but in reality, only require basic software programming skills. Beyond this misnomer, there is a tendency in Silicon Valley to call the software development organizations “Engineering.” This situation is reflected in the comment in an opinion piece in the Atlantic [4], ‘“Engineer’ is an aspirational title in software development. Traditional engineers are regulated, certified, and subject to apprenticeship and continuing education. Engineering claims an explicit responsibility to public safety and reliability, even if it doesn’t always deliver.” Stevens has offered an M.S. in Software Engineering since 2001; it has is based on the IEEE/ACM SWE curriculum guidelines for graduate programs in software engineering [5], similarly to many other schools. The Stevens M.S. covers the full development life cycle, is quantitative and empirical, and emphasizes the engineering and development of trusted systems. In this context, the “engineering” in software engineering means using good engineering judgment to select the appropriate architecture and designs, tools and techniques, and applying them to reliably build trustable software. Stevens is now offering a B.E. in Software Engineering. This new undergraduate program goes beyond the M.S. program in adding the foundation of traditional engineering to the software engineer. It strengthens the Engineer in Software Engineer.1 We believe this is a unique program: our graduates will be qualified to sit for the F.E. exam and eventually the P.E. exam; it is ABET accredited, it meets the recent ACM/IEEE SWE undergraduate guidelines, and even includes some systems engineering. These graduates will be able to effectively build a variety of challenging systems, utilizing their broad engineering and their deep software engineering skills, including advanced and complex cyber-physical systems. In ICSE 2016, one of the keynotes speeches is “Progress Toward an Engineering Discipline of Software” by Prof. M. Shaw [6]. Our intention is that the Stevens’ undergraduate B.E. in Software Engineering is one more step in this path of progress. The SWE curriculum is a standard Stevens Engineering Undergraduate Curriculum, consisting of 141 total credit hours. The SWE program-specific content consist of 9 required courses (27 credit hours), 2 courses for Senior Design (6 credit hours), and 2 courses for Domain Electives (6 credit hours). The results to date are very encouraging; the fall 2015 enrollment is 18 freshman, 5 sophomores, and one junior. We expect a small number of graduates in 2018, with the number growing to 20 or 25 per year by 2022. Our goal is to remain a small, high-touch program.', NULL, '2022-09-27 03:57:35'),
(2, '2536', '2536.webp', 'Statistical and Thermal Physics: With Computer Applications', 'Harvey Gould', 'Jan Tobochnik', '', 'DirectScience', 'Books', 'physics and chemistry', 'Physics', '200', '2020', '166', '19', 'Hardcore', 6, 'This textbook carefully develops the main ideas and techniques of statistical and thermal physics and is intended for upper-level undergraduate courses. The authors each have more than thirty years experience in teaching, curriculum development, and research in statistical and computational physics. Statistical and Thermal Physics begins with a qualitative discussion of the relation between the macroscopic and microscopic worlds and incorporates computer simulations throughout the book to provide concrete examples of important conceptual ideas. Unlike many contemporary texts on thermal physics, this book presents thermodynamic reasoning as an independent way of thinking about macroscopic systems. Probability concepts and techniques are introduced, including topics that are useful for understanding how probability and statistics are used. Magnetism and the Ising model are considered in greater depth than in most undergraduate texts, and ideal quantum gases are treated within a uniform framework. Advanced chapters on fluids and critical phenomena are appropriate for motivated undergraduates and beginning graduate students.\r\n', 'Our goal is to understand the properties of macroscopic systems, that is, systems of many electrons,\r\natoms, molecules, photons, or other constituents. Examples of familiar macroscopic objects include\r\nsystems such as the air in your room, a glass of water, a coin, and a rubber band – examples of a gas,\r\nliquid, solid, and polymer, respectively. Less familiar macroscopic systems include superconductors,\r\ncell membranes, the brain, the stock market, and neutron stars.\r\nWe will find that the type of questions we ask about macroscopic systems differ in important\r\nways from the questions we ask about systems that we treat microscopically. For example, consider\r\nthe air in your room. Have you ever wondered about the trajectory of a particular molecule in the\r\nair? Would knowing that trajectory be helpful in understanding the properties of air? Instead of\r\nquestions such as these, examples of questions that we do ask about macroscopic systems include\r\nthe following:\r\n1. How does the pressure of a gas depend on the temperature and the volume of its container?\r\n2. How does a refrigerator work? How can we make it more efficient?\r\n3. How much energy do we need to add to a kettle of water to change it to steam?\r\n1\r\nCHAPTER 1. FROM MICROSCOPIC TO MACROSCOPIC BEHAVIOR 2\r\n4. Why are the properties of water different from those of steam, even though water and steam\r\nconsist of the same type of molecules?\r\n5. How and why does a liquid freeze into a particular crystalline structure?\r\n6. Why does helium have a superfluid phase at very low temperatures? Why do some materials\r\nexhibit zero resistance to electrical current at sufficiently low temperatures?\r\n7. In general, how do the properties of a system emerge from its constituents?\r\n8. How fast does the current in a river have to be before its flow changes from laminar to\r\nturbulent?\r\n9. What will the weather be tomorrow?\r\nThese questions can be roughly classified into three groups. Questions 1–3 are concerned\r\nwith macroscopic properties such as pressure, volume, and temperature and processes related to\r\nheating and work. These questions are relevant to , thermodynamics which provides a framework\r\nfor relating the macroscopic properties of a system to one another. Thermodynamics is concerned\r\nonly with macroscopic quantities and ignores the microscopic variables that characterize individual\r\nmolecules. For example, we will find that understanding the maximum efficiency of a refrigerator\r\ndoes not require a knowledge of the particular liquid used as the coolant. Many of the applications\r\nof thermodynamics are to engines, for example, the internal combustion engine and the steam\r\nturbine.\r\nQuestions 4–7 relate to understanding the behavior of macroscopic systems starting from the\r\natomic nature of matter. For example, we know that water consists of molecules of hydrogen and\r\noxygen. We also know that the laws of classical and quantum mechanics determine the behavior of\r\nmolecules at the microscopic level. The goal of statistical mechanics is to begin with the microscopic\r\nlaws of physics that govern the behavior of the constituents of the system and deduce the properties\r\nof the system as a whole. Statistical mechanics is a bridge between the microscopic and macroscopic\r\nworlds.\r\nQuestion 8 also relates to a macroscopic system, but temperature is not relevant in this case.\r\nMoreover, turbulent flow continually changes in time. Question 9 concerns macroscopic phenomena\r\nthat change with time. Although there has been progress in our understanding of time-dependent\r\nphenomena such as turbulent flow and hurricanes, our understanding of such phenomena is much\r\nless advanced than our understanding of time-independent systems. For this reason we will focus\r\nour attention on systems whose macroscopic properties are independent of time and consider\r\nquestions such as those in Questions 1–7.\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BookRef` varchar(200) NOT NULL,
  `User_Ref` varchar(200) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `PropertyRef` (`BookRef`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Sender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(10000) NOT NULL,
  `User_Ref` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `User_Ref` (`User_Ref`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(239, '2014_10_12_000000_create_users_table', 2),
(240, '2014_10_12_100000_create_password_resets_table', 2),
(241, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2021_10_22_153517_create_roles_table', 1),
(242, '2021_10_22_153425_create_user_dts_table', 2),
(243, '2021_11_14_111509_category', 2),
(244, '2021_11_14_113139_product', 2),
(245, '2022_03_31_012956_events', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
CREATE TABLE IF NOT EXISTS `promotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(2000) NOT NULL,
  `Name` varchar(2000) NOT NULL,
  `Promotion` varchar(2000) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

DROP TABLE IF EXISTS `themes`;
CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `themes` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `themes`
--

INSERT INTO `themes` (`id`, `themes`) VALUES
(1, 'Computing and Processing'),
(2, 'Communication'),
(3, 'physics and chemistry'),
(4, 'Logistic and Transport'),
(5, 'Business and Economics'),
(6, 'Engineering'),
(7, 'Medical');

-- --------------------------------------------------------

--
-- Structure de la table `type_of_paper`
--

DROP TABLE IF EXISTS `type_of_paper`;
CREATE TABLE IF NOT EXISTS `type_of_paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_of_paper`
--

INSERT INTO `type_of_paper` (`id`, `Type`) VALUES
(1, 'Books'),
(2, 'Conference'),
(3, 'Journals and Magazines'),
(4, 'Articals'),
(5, 'Papers');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Reference` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `Role` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Member',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `Reference`, `name`, `email`, `email_verified_at`, `password`, `status`, `Role`, `remember_token`, `created_at`, `updated_at`) VALUES
(86, 'RA-1638489236', 'Robel Robel', 'Ramadanyacin6@gmail.com', NULL, '$2y$10$fUm1gJwG.uQUkAO9t0ymUeiBI5h5FqYuHQNA5hN3osc6NmcS8PDOa', 1, 'Admin', NULL, '2022-09-13 04:22:51', '2022-09-13 04:22:51'),
(84, 'RA-1469213363', 'Ramadan Yacin Ibrahim', 'ramadanyacin@gmail.com', NULL, '$2y$10$7taK3ERzHlFMTLG1b5eLKeU2jazplAbAUaezquG//RFfLWsmkhzKW', 1, 'Admin', NULL, '2022-09-13 04:16:46', '2022-09-13 04:19:29');

-- --------------------------------------------------------

--
-- Structure de la table `user_dts`
--

DROP TABLE IF EXISTS `user_dts`;
CREATE TABLE IF NOT EXISTS `user_dts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tel` int(11) NOT NULL DEFAULT '0',
  `Address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `VKey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `user_Ref` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_dts_user_ref_foreign` (`user_Ref`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_dts`
--

INSERT INTO `user_dts` (`id`, `photo`, `Tel`, `Address`, `VKey`, `user_Ref`, `created_at`, `updated_at`) VALUES
(88, '', 162446713, 'Jalan Sunsuria, Bandar Sunsuri', '-', 'RA-1638489236', '2022-09-13 04:22:51', '2022-09-13 04:22:51'),
(86, NULL, 1624467131, 'KLCC', '-', 'RA-1469213363', '2022-09-13 04:16:46', '2022-09-13 04:19:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
