-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2023 at 01:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(10) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_cat` int(10) UNSIGNED NOT NULL,
  `dt_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `content`, `id_user`, `id_cat`, `dt_add`) VALUES
(23, 'ERIK TEN HAG ISSUES MANCHESTER UNITED SUMMER TRANSFER PLEA', 'Erik Ten Hag has confirmed his desire to sign some top-quality players during the summer transfer window.\r\n\r\nAfter demolishing Chelsea 4-1 at Old Trafford on Thursday night, Manchester United secured their place in next season’s Champions League.\r\n\r\nJoining Newcastle United, Arsenal and champions Manchester City in the Champions League, Erik Ten Hag’s Red Devils will be eager to prove they’re still a team to be feared.\r\n\r\nHowever, although the 20-time league winners have made huge progress this year, which included lifting the Carabao Cup earlier in the season, as well as having an FA Cup final to come, the side still needs a handful of additions if they’re to kick on next term.', 2, 1, '2023-05-26 08:34:00'),
(24, 'XAVI WANTS BARCELONA TO SIGN A RIGHT-BACK AT ALL COSTS, THREE NAMES ON THE TABLE', 'According to Diario SPORT, Xavi Hernandez has requested the Barcelona board to sign a new right-back at all costs, as we close in on the start of the summer transfer window.\r\n\r\nThe Barcelona coach’s request comes shortly after a slew of speculations regarding the future of Jules Kounde. The Frenchman is reportedly unhappy with his role at Barça and is threatening to leave if he continues to play at right-back next season.\r\n\r\nAlthough Kounde has categorically denied these rumours, he has certainly informed his grievance to Xavi, which may have played a key role in compelling the Barcelona coach to demand a new right-back in the market this summer.', 2, 1, '2023-05-26 08:34:58'),
(25, 'IN-FORM BARCELONA MIDFIELDER EMERGES AS A CONTENDER FOR CAPTAINCY FOLLOWING BUSQUETS, ALBA EXITS', 'There have been a lot of changes in Barcelona’s leadership lately and many more are in the offing, as two of the team’s old guards Sergio Busquets and Jordi Alba are set to leave Camp Nou at the end of the season.\r\n\r\nThis will leave Xavi devoid of two of his club captains. Sergi Roberto and Marc-Andre ter Stegen are the other two captains, meaning the team needs to find two more options in the coming summer.\r\n\r\nSo far, Ronald Araujo and Robert Lewandowski have been touted as the players to fill the captaincy spots at Barcelona next season.\r\n\r\nHowever, according to Diario SPORT, Frenkie de Jong is another player in contention to take on the leadership mantle at Barcelona this summer.', 2, 1, '2023-05-26 08:35:54'),
(29, 'Heidi Klum Suffers Wardrobe Malfunction on Cannes Film Festival Red Carpet', 'Heidi Klum inadvertently became part of the &quot;free the nipple&quot; movement, when her titillating gown couldn\'t hold her together. \r\n\r\nThe 49-year-old America\'s Got Talent judge attended the La Passion De Dodin Bouffant premiere Wednesday at the 76th annual Cannes Film Festival and, while walking the red carpet at Palais des Festivals, all eyes were on Klum, who looked stunning in an aurora yellow Zuhair Murad gown with a hip-high leg slit, crossed neckline and bejeweled sleeves.\r\n\r\nWith her trademark blonde locks flowing, Klum smiled as she raised her arms, and therein lay the problem -- when she raised her arms to extend her long cape she suffered a bit of a wardrobe malfunction with a nip slip. Not that she\'s ever been shy about nudity.\r\n\r\nBack in February, Klum and her husband, Tom Kaulitz, appeared to have stripped down to their birthday suit to celebrate their four-year wedding anniversary.', NULL, 2, '2023-05-26 10:33:56'),
(31, 'Biden, McCarthy looking to close US debt ceiling deal for two years', 'WASHINGTON (Reuters) - The White House and congressional Republicans on Friday are putting the final touches on a deal that will raise the U.S. government\'s $31.4 trillion debt ceiling for two years while capping spending on everything but military and veterans, according to a U.S. official.\r\n\r\nNegotiators for Democratic President Joe Biden and House of Representatives Speaker Kevin McCarthy appeared to be nearing a deal on Thursday as the two sides reached agreement on key issues, such as spending caps and funding for the Internal Revenue Service (IRS) and the military.\r\n\r\nHowever, items including work requirements for recipients of federal aid were still holding up the deal, the official said.\r\n\r\nThe deal under consideration would increase funding for discretionary spending on military and veterans while essentially holding non-defense discretionary spending at current year levels, the official said, who requested anonymity because they are not authorized to speak about internal discussions.', NULL, 18, '2023-05-26 10:34:55'),
(35, 'China’s tech titans race to invest $340M in OpenAI challenger', 'It’s become increasingly evident that two parallel AI universes are forming between the U.S. and China. While the U.S. has spawned notable players like OpenAI and Anthropic, China has its own emerging candidates. One of these foundation model developers, Zhipu AI, announced today that it has raised 2.5 billion yuan ($340 million) in total financing to date this year.\r\n\r\nFounded in 2019, Zhipu was spun out of China’s prestigious Tsinghua University and is led by Tang Jie, a professor in the university’s Department of Computer Science and Technology.\r\n\r\nThe announcement has come at a delicate time. This week, the Biden administration imposed additional restrictions on the export of Nvidia AI chips to China, further impeding its rival’s ability to train large language models. In anticipation of semiconductor bans from Washington, China’s deep-pocketed AI companies have been stockpiling semiconductors, spending hundreds of millions of dollars on these much-coveted chips.', 10, 19, '2023-10-24 10:59:12'),
(36, 'Luzia lands $10 million in funding to expand its WhatsApp-based chatbot', 'The availability of Large Language Models (LLMs) has made it easier for developers to make chatbots. Large companies such as OpenAI, Google and Microsoft have made ChatGPT, Bard and Bing Chat widely available. However, non-tech affluent audiences might not be aware of some of these bots. Spain-based Luzia is trying to introduce AI chatbot tech to users through a WhatsApp-based bot.\r\n\r\nThe company, founded in 2023 by Álvaro Martínez Higes, Javier Andrés and Carlos Pérez, is trying to address the Spanish and Portuguese-speaking market for chatbots. Using Luzia is pretty easy. You can save the chatbot as a contact on your phone and start talking to it on WhatsApp or Telegram.', 10, 19, '2023-10-24 10:59:39'),
(37, 'Google takes aim at Duolingo with new English tutoring tool', 'Google’s gunning for Duolingo with a new Google Search feature designed to help people practice — and improve — their English speaking skills.\r\n\r\nRolling out over the next few days for Search on Android devices in Argentina, Colombia, India, Indonesia, Mexico and Venezuela, with more countries and languages to come in the future, the new feature will provide interactive speaking practice for language learners translating to or from English, Google writes in a blog post.\r\n\r\n“Google Search is already a valuable tool for language learners, providing translations, definitions, and other resources to improve vocabulary,” reads the the post, attributed to Google Research director Christian Plagemann and product manager Katya Cox. “Now, learners translating to or from English on their Android phones will find a new English speaking practice experience with personalized feedback.”', 10, 19, '2023-10-24 11:00:12'),
(38, 'Will Binance come over to the light side?', 'The luke skywalker and the Darth Vader of crypto.” That is how Michael Lewis, author of “Going Infinite”, a recent book about the rise and fall of Sam Bankman-Fried, founder of ftx, a now-bankrupt crypto exchange, is supposed to have described the intense rivalry between his subject and Changpeng Zhao (pictured), the boss of Binance, a rival firm.\r\n\r\nUntil Mr Bankman-Fried’s exchange collapsed with an $8bn hole in its balance-sheet, the analogy seemed apt. The two men controlled the two largest crypto exchanges in the world. Both were known by acronyms: “sbf” and “cz”. Young, talented and seemingly in favour of playing nice with regulators, sbf was something of a wunderkind, and cz was his shadowy foil. Keen to avoid being pinned down by national laws, his exchange was based “nowhere”. Binance had long been under investigation for possible money-laundering and criminal-sanctions violations by America’s justice', 11, 18, '2023-10-24 11:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_cat`, `name`) VALUES
(18, 'Economy'),
(2, 'Entertainment'),
(3, 'Politics'),
(1, 'Sport'),
(19, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id_session` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(128) NOT NULL,
  `dt_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `token`, `dt_add`) VALUES
(36, 6, 'db5e62a5998015f801f0e132f3804e3d9ed7fe5f32f5fd5c050971db8d0b8a5693fea15177e2b1e1c62218a9efe46a220009ed7552bc9f25092992b3f704688e', '2023-05-25 15:02:45'),
(38, 7, '3366d688428bc9d3be184d24618d4df9fe81ed218d2669275b44ac73c3a65161664c68a14e3e0b0cca4f7f90cfa2e3ecfc9849a0e116ce6c60a812d6e7642787', '2023-05-25 15:07:07'),
(42, 2, 'd16f7ca710af74e3afed2d2ccfe2a01937a028c7d8e26d5c1e41f4eb6260e235f7764458f561c67f1ae45d1ccc0291881d5e89a7e7ee382e1a2a4d77aabb4320', '2023-05-25 15:18:53'),
(44, 2, '666acd9815559ac64d1a2f3cc4898fd895a8bd2df0c005115d8bddd5b8eeccc803f4434977ac0ccd8b0dc7eec57f33ae7b277bd3fc82f31e1882f719cbca6c24', '2023-05-25 16:23:07'),
(49, 2, '1da12ef71a38cf3018f3bf6239379f4a9e032d086f81a6d0315af0e1956bf69973123d101b37b97f650bbbd10c8506e4c14812a70e0d01ff1df2e9b0f8fc1bca', '2023-05-26 08:09:32'),
(53, 7, '92ffe983bf5ecd6a4769f845500a9dc4e708d3ed50a16d76cee191641086761498e8f10862891039ec3323e318eff34caefb8655370176911b5b2b4c45322e32', '2023-05-26 11:11:01'),
(74, 11, '2191f369ef9c23a74426216c8b5ca3e994d888a1a7520fbb3bdcd8d11c462221f079f8158a5c3df0f1d8cbdda2d22629d8481c2772de1d4a1b69cadd1c6c8465', '2023-10-24 11:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `dt_registration` timestamp NOT NULL DEFAULT current_timestamp(),
  `privilege` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `name`, `password`, `dt_registration`, `privilege`) VALUES
(2, 'admin', 'huseyn@gmail.com', 'Huseyn', '$2y$10$plTQRsKYCskTopJ0203CFe62doFVqvMSClXoxtj5lrKtvf.dRpeu6', '2023-05-18 06:07:06', 1),
(10, 'not admin', 'some@gmail.com', 'Jon Doe', '$2y$10$hRzTOKQ2mbDDpyOw3WHF6OnERknD37zaksqVp4yXTzQAiKuH7G6xm', '2023-10-23 21:56:20', 0),
(11, 'not admin again', 'marc@gmail.com', 'Marc Guiu', '$2y$10$rTYOOmU8D66gRa7gsSrf6eCWRjmjmse/Vpc4AoR3CW3DYLc8WkFAe', '2023-10-24 09:24:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `fk_cats_articles` (`id_cat`),
  ADD KEY `fk_users_articles` (`id_user`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `fk_users_sessions` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_cats_articles` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_articles` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
