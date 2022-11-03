-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 06:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wrathyboo`
--

-- --------------------------------------------------------

--
-- Table structure for table `applist`
--

CREATE TABLE `applist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `genres` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`genres`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applist`
--

INSERT INTO `applist` (`id`, `name`, `status`, `genres`, `created_at`, `updated_at`) VALUES
(500, 'Left 4 Dead', 1, '[\"Action\"]', '2022-10-25 01:15:41', '2022-10-25 01:15:41'),
(550, 'Left 4 Dead 2', 1, '[\"Action\"]', '2022-10-25 01:15:42', '2022-10-25 01:15:42'),
(620, 'Portal 2', 1, '[\"Action\",\"Adventure\"]', '2022-10-26 20:56:47', '2022-10-26 20:56:47'),
(3590, 'Plants vs. Zombies GOTY Edition', 1, '[\"Strategy\"]', '2022-10-25 01:15:41', '2022-10-25 01:15:41'),
(6850, 'Hitman 2: Silent Assassin', 1, '[\"Action\"]', '2022-10-25 01:15:40', '2022-10-25 01:15:40'),
(6860, 'Hitman: Blood Money', 1, '[\"Action\"]', '2022-10-25 01:15:40', '2022-10-25 01:15:40'),
(6900, 'Hitman: Codename 47', 1, '[\"Action\"]', '2022-10-25 01:15:39', '2022-10-25 01:15:39'),
(7660, 'X-COM: Apocalypse', 1, '[\"Strategy\"]', '2022-10-25 01:15:45', '2022-10-25 01:15:45'),
(7730, 'X-COM: Interceptor', 1, '[\"Strategy\"]', '2022-10-25 01:15:45', '2022-10-25 01:15:45'),
(7760, 'X-COM: UFO Defense', 1, '[\"Strategy\"]', '2022-10-25 01:15:46', '2022-10-25 01:15:46'),
(7770, 'X-COM: Enforcer', 1, '[\"Strategy\"]', '2022-10-25 01:15:46', '2022-10-25 01:15:46'),
(10680, 'Aliens vs. Predator™', 1, '[\"Action\"]', '2022-10-25 01:15:48', '2022-10-25 01:15:48'),
(21130, 'LEGO® Harry Potter: Years 1-4', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:43', '2022-10-25 01:15:43'),
(22300, 'Fallout 3', 1, '[\"RPG\"]', '2022-10-25 01:15:41', '2022-10-25 01:15:41'),
(22380, 'Fallout: New Vegas', 1, '[\"Action\",\"RPG\"]', '2022-10-25 01:15:43', '2022-10-25 01:15:43'),
(32370, 'STAR WARS™ - Knights of the Old Republic™', 1, '[\"Adventure\",\"RPG\"]', '2022-10-25 01:15:45', '2022-10-25 01:15:45'),
(33230, 'Assassin\'s Creed 2', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:42', '2022-10-25 01:15:42'),
(40990, 'Mafia', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:16:37', '2022-10-25 01:16:37'),
(43110, 'Metro 2033', 1, '[\"Action\"]', '2022-10-25 01:16:26', '2022-10-25 01:16:26'),
(46510, 'Syberia II', 1, '[\"Adventure\"]', '2022-10-25 01:16:31', '2022-10-25 01:16:31'),
(57650, 'Dungeons', 1, '[\"RPG\",\"Strategy\"]', '2022-10-25 01:15:47', '2022-10-25 01:15:47'),
(65790, 'ARMA: Cold War Assault', 1, '[\"Action\",\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:28', '2022-10-25 01:16:28'),
(105600, 'Terraria', 1, '[\"Action\",\"Adventure\",\"Indie\",\"RPG\"]', '2022-10-25 01:15:43', '2022-10-25 01:15:43'),
(108710, 'Alan Wake', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:44', '2022-10-25 01:15:44'),
(203140, 'Hitman: Absolution™', 1, '[\"Action\"]', '2022-10-25 01:15:47', '2022-10-25 01:15:47'),
(204300, 'Awesomenauts - the 2D moba', 1, '[\"Action\",\"Free to Play\",\"Indie\",\"Strategy\"]', '2022-10-25 01:16:12', '2022-10-25 01:16:12'),
(204450, 'Call of Juarez: Gunslinger', 1, '[\"Action\"]', '2022-10-25 01:16:33', '2022-10-25 01:16:33'),
(205910, 'Tiny and Big: Grandpa\'s Leftovers', 1, '[\"Indie\"]', '2022-10-25 01:15:46', '2022-10-25 01:15:46'),
(207610, 'The Walking Dead', 1, '[\"Adventure\"]', '2022-10-25 01:15:44', '2022-10-25 01:15:44'),
(208140, 'ENDLESS™ Space - Definitive Edition', 1, '[\"Strategy\"]', '2022-10-25 01:16:06', '2022-10-25 01:16:06'),
(208650, 'Batman™: Arkham Knight', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:59', '2022-10-25 01:15:59'),
(218620, 'PAYDAY 2', 1, '[\"Action\",\"RPG\"]', '2022-10-25 01:15:49', '2022-10-25 01:15:49'),
(219740, 'Don\'t Starve', 1, '[\"Adventure\",\"Indie\",\"Simulation\"]', '2022-10-25 01:15:57', '2022-10-25 01:15:57'),
(220240, 'Far Cry 3', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:47', '2022-10-25 01:15:47'),
(222480, 'Resident Evil Revelations', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:48', '2022-10-25 01:15:48'),
(228360, 'Full Throttle Remastered', 1, '[\"Adventure\"]', '2022-10-25 01:16:11', '2022-10-25 01:16:11'),
(231430, 'Company of Heroes 2', 1, '[\"Strategy\"]', '2022-10-25 01:16:27', '2022-10-25 01:16:27'),
(232890, 'Stronghold Crusader 2', 1, '[\"Simulation\",\"Strategy\"]', '2022-10-25 01:15:53', '2022-10-25 01:15:53'),
(242760, 'The Forest', 1, '[\"Action\",\"Adventure\",\"Indie\",\"Simulation\"]', '2022-10-25 01:15:48', '2022-10-25 01:15:48'),
(247430, 'Hitman: Contracts', 1, '[\"Action\"]', '2022-10-25 01:15:50', '2022-10-25 01:15:50'),
(253230, 'A Hat in Time', 1, '[\"Adventure\",\"Indie\"]', '2022-10-25 01:15:49', '2022-10-25 01:15:49'),
(261030, 'The Walking Dead: Season Two', 1, '[\"Adventure\"]', '2022-10-25 01:15:50', '2022-10-25 01:15:50'),
(262060, 'Darkest Dungeon®', 1, '[\"Indie\",\"RPG\",\"Strategy\"]', '2022-10-25 01:15:50', '2022-10-25 01:15:50'),
(269210, 'Hero Siege', 1, '[\"Action\",\"Adventure\",\"Indie\",\"Massively Multiplayer\",\"RPG\"]', '2022-10-25 01:15:50', '2022-10-25 01:15:50'),
(271590, 'Grand Theft Auto V', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:51', '2022-10-25 01:15:51'),
(274520, 'Darkwood', 1, '[\"Action\",\"Adventure\",\"Indie\",\"RPG\"]', '2022-10-25 01:15:51', '2022-10-25 01:15:51'),
(280160, 'Aragami', 1, '[\"Action\",\"Adventure\",\"Indie\"]', '2022-10-25 01:15:52', '2022-10-25 01:15:52'),
(282070, 'This War of Mine', 1, '[\"Adventure\",\"Indie\",\"Simulation\"]', '2022-10-25 01:15:55', '2022-10-25 01:15:55'),
(283270, 'Jagged Alliance 1: Gold Edition', 1, '[\"Action\",\"RPG\",\"Strategy\"]', '2022-10-25 01:16:30', '2022-10-25 01:16:30'),
(285160, 'LEGO® The Hobbit™', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:53', '2022-10-25 01:15:53'),
(287290, 'Resident Evil Revelations 2', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:56', '2022-10-25 01:15:56'),
(289650, 'Assassin\'s Creed® Unity', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:54', '2022-10-25 01:15:54'),
(290280, 'Volt', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:15:53', '2022-10-25 01:15:53'),
(292030, 'The Witcher® 3: Wild Hunt', 1, '[\"RPG\"]', '2022-10-25 01:16:03', '2022-10-25 01:16:03'),
(297130, 'Titan Souls', 1, '[\"Action\",\"Adventure\",\"Indie\"]', '2022-10-25 01:16:29', '2022-10-25 01:16:29'),
(298110, 'Far Cry® 4', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:54', '2022-10-25 01:15:54'),
(304240, 'Resident Evil', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:15:56', '2022-10-25 01:15:56'),
(304430, 'INSIDE', 1, '[\"Action\",\"Adventure\",\"Indie\"]', '2022-10-25 01:15:53', '2022-10-25 01:15:53'),
(307780, 'Mortal Kombat X', 1, '[\"Action\"]', '2022-10-25 01:16:03', '2022-10-25 01:16:03'),
(322330, 'Don\'t Starve Together', 1, '[\"Adventure\",\"Indie\",\"Simulation\"]', '2022-10-25 01:15:57', '2022-10-25 01:15:57'),
(322500, 'SUPERHOT', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:16:23', '2022-10-25 01:16:23'),
(331440, 'bit Dungeon II', 1, '[\"Action\",\"Adventure\",\"Indie\",\"RPG\"]', '2022-10-25 01:15:54', '2022-10-25 01:15:54'),
(335240, 'Transformice', 1, '[\"Free to Play\",\"Indie\",\"Massively Multiplayer\"]', '2022-10-25 01:15:55', '2022-10-25 01:15:55'),
(357070, 'UBERMOSH', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:15:57', '2022-10-25 01:15:57'),
(362680, 'Fran Bow', 1, '[\"Adventure\",\"Indie\"]', '2022-10-25 01:15:56', '2022-10-25 01:15:56'),
(367520, 'Hollow Knight', 1, '[\"Action\",\"Adventure\",\"Indie\"]', '2022-10-26 20:56:41', '2022-10-26 20:56:41'),
(377160, 'Fallout 4', 1, '[\"RPG\"]', '2022-10-25 01:16:14', '2022-10-25 01:16:14'),
(381210, 'Dead by Daylight', 1, '[\"Action\"]', '2022-10-25 01:15:58', '2022-10-25 01:15:58'),
(418370, 'Resident Evil 7 Biohazard', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:16:04', '2022-10-25 01:16:04'),
(420290, 'Blackwake', 1, '[\"Action\",\"Casual\",\"Indie\",\"Strategy\"]', '2022-10-25 01:15:59', '2022-10-25 01:15:59'),
(424840, 'Little Nightmares', 1, '[\"Adventure\"]', '2022-10-25 01:16:27', '2022-10-25 01:16:27'),
(438480, 'Rock \'N\' Roll Defense', 1, '[\"Action\",\"Adventure\",\"Casual\",\"Strategy\"]', '2022-10-25 01:16:01', '2022-10-25 01:16:01'),
(448510, 'Overcooked', 1, '[\"Action\",\"Casual\",\"Indie\",\"Simulation\"]', '2022-10-25 01:16:00', '2022-10-25 01:16:00'),
(464920, 'Surviving Mars', 1, '[\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:29', '2022-10-25 01:16:29'),
(475150, 'Titan Quest Anniversary Edition', 1, '[\"Action\",\"RPG\"]', '2022-10-25 01:16:30', '2022-10-25 01:16:30'),
(475550, 'Beholder', 1, '[\"Adventure\",\"Indie\",\"Strategy\"]', '2022-10-25 01:16:31', '2022-10-25 01:16:31'),
(485450, 'Ninja Stealth', 1, '[\"Casual\",\"Indie\",\"Strategy\"]', '2022-10-25 01:16:35', '2022-10-25 01:16:35'),
(489520, 'Minion Masters', 1, '[\"Action\",\"Adventure\",\"Free to Play\",\"Indie\",\"RPG\",\"Strategy\"]', '2022-10-25 01:16:27', '2022-10-25 01:16:27'),
(505630, 'Let Them Come', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:16:02', '2022-10-25 01:16:02'),
(520720, 'Dear Esther: Landmark Edition', 1, '[\"Adventure\",\"Casual\",\"Indie\"]', '2022-10-25 01:16:33', '2022-10-25 01:16:33'),
(521890, 'Hello Neighbor', 1, '[\"Adventure\",\"Indie\",\"Strategy\"]', '2022-10-25 01:16:02', '2022-10-25 01:16:02'),
(534560, 'Ramify', 1, '[\"Casual\",\"Indie\"]', '2022-10-25 01:16:07', '2022-10-25 01:16:07'),
(537340, 'Guts and Glory', 1, '[\"Action\",\"Casual\",\"Indie\",\"Racing\"]', '2022-10-25 01:16:04', '2022-10-25 01:16:04'),
(537800, 'Bomber Crew', 1, '[\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:34', '2022-10-25 01:16:34'),
(539720, 'Razortron 2000', 1, '[\"Casual\",\"Indie\",\"Racing\"]', '2022-10-25 01:16:01', '2022-10-25 01:16:01'),
(546560, 'Half-Life: Alyx', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:16:05', '2022-10-25 01:16:05'),
(552520, 'Far Cry® 5', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:16:18', '2022-10-25 01:16:18'),
(552990, 'World of Warships', 1, '[\"Action\",\"Free to Play\",\"Massively Multiplayer\",\"Simulation\"]', '2022-10-25 01:16:37', '2022-10-25 01:16:37'),
(556130, 'Drones, The Human Condition', 1, '[\"Action\",\"Indie\",\"Sports\"]', '2022-10-25 01:16:32', '2022-10-25 01:16:32'),
(562360, 'Planes, Bullets and Vodka', 1, '[\"Action\",\"Casual\",\"Indie\"]', '2022-10-25 01:16:01', '2022-10-25 01:16:01'),
(571310, 'SteamWorld Dig 2', 1, '[\"Action\",\"Adventure\",\"Indie\"]', '2022-10-25 01:16:32', '2022-10-25 01:16:32'),
(582660, 'Black Desert', 1, '[\"Action\",\"Adventure\",\"Massively Multiplayer\",\"RPG\",\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:34', '2022-10-25 01:16:34'),
(588430, 'Fallout Shelter', 1, '[\"Free to Play\",\"RPG\",\"Simulation\"]', '2022-10-25 01:16:08', '2022-10-25 01:16:08'),
(594550, 'Arma: Cold War Assault Mac/Linux', 1, '[\"Action\",\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:29', '2022-10-25 01:16:29'),
(611360, 'Video Horror Society', 1, '[\"Action\",\"Free to Play\",\"Indie\",\"Early Access\"]', '2022-10-25 01:16:09', '2022-10-25 01:16:09'),
(613900, 'Museum of Other Realities', 1, '[\"Casual\",\"Simulation\"]', '2022-10-25 01:16:28', '2022-10-25 01:16:28'),
(617670, 'Zup! S', 1, '[\"Casual\",\"Indie\"]', '2022-10-25 01:16:10', '2022-10-25 01:16:10'),
(636150, 'Cyberhunt', 1, '[\"Action\",\"Adventure\",\"Casual\",\"Indie\"]', '2022-10-25 01:16:01', '2022-10-25 01:16:01'),
(638970, 'Yakuza 0', 1, '[\"Action\",\"Adventure\",\"RPG\"]', '2022-10-25 01:16:19', '2022-10-25 01:16:19'),
(640380, 'UBERMOSH Vol.5', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:16:11', '2022-10-25 01:16:11'),
(640890, 'Will Glow the Wisp', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:16:30', '2022-10-25 01:16:30'),
(641990, 'The Escapists 2', 1, '[\"Indie\",\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:12', '2022-10-25 01:16:12'),
(646270, '60 Parsecs!', 1, '[\"Adventure\",\"Casual\",\"Indie\",\"RPG\",\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:12', '2022-10-25 01:16:12'),
(673450, 'Time Lock VR 1', 1, '[\"Action\",\"Adventure\",\"Casual\",\"Indie\"]', '2022-10-25 01:16:13', '2022-10-25 01:16:13'),
(690040, 'SUPERHOT: MIND CONTROL DELETE', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:16:13', '2022-10-25 01:16:13'),
(694500, 'Army Men RTS', 1, '[\"Action\",\"Strategy\"]', '2022-10-25 01:16:14', '2022-10-25 01:16:14'),
(698780, 'Doki Doki Literature Club!', 1, '[\"Casual\",\"Free to Play\",\"Indie\"]', '2022-10-25 01:16:15', '2022-10-25 01:16:15'),
(699920, 'Despotism 3k', 1, '[\"Indie\",\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:36', '2022-10-25 01:16:36'),
(703310, 'Hidden & Dangerous: Action Pack', 1, '[\"Action\",\"Strategy\"]', '2022-10-25 01:16:15', '2022-10-25 01:16:15'),
(703320, 'Hidden & Dangerous 2: Courage Under Fire', 1, '[\"Action\",\"Strategy\"]', '2022-10-25 01:16:15', '2022-10-25 01:16:15'),
(714120, 'Little Misfortune', 1, '[\"Adventure\",\"Casual\",\"Indie\"]', '2022-10-25 01:16:16', '2022-10-25 01:16:16'),
(729660, 'Blackout Z: Slaughterhouse Edition', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:16:17', '2022-10-25 01:16:17'),
(774171, 'Muse Dash', 1, '[\"Action\",\"Casual\",\"Indie\"]', '2022-10-25 01:16:18', '2022-10-25 01:16:18'),
(837470, 'Untitled Goose Game', 1, '[\"Action\",\"Indie\"]', '2022-10-25 01:16:19', '2022-10-25 01:16:19'),
(870780, 'Control Ultimate Edition', 1, '[\"Action\",\"Adventure\"]', '2022-10-26 20:55:21', '2022-10-26 20:55:21'),
(883710, 'Resident Evil 2', 1, '[\"Action\"]', '2022-10-25 01:16:19', '2022-10-25 01:16:19'),
(949060, 'Love Thyself - A Horatio Story', 1, '[\"Casual\",\"Indie\",\"Simulation\"]', '2022-10-25 01:16:20', '2022-10-25 01:16:20'),
(972660, 'Spiritfarer®: Farewell Edition', 1, '[\"Adventure\",\"Indie\",\"Simulation\"]', '2022-10-25 01:16:20', '2022-10-25 01:16:20'),
(976310, 'Mortal Kombat 11', 1, '[\"Action\"]', '2022-10-25 01:16:20', '2022-10-25 01:16:20'),
(1012880, '60 Seconds! Reatomized', 1, '[\"Adventure\",\"Casual\",\"Indie\",\"Simulation\",\"Strategy\"]', '2022-10-25 01:16:21', '2022-10-25 01:16:21'),
(1022310, 'Warhammer Underworlds: Online', 1, '[\"Casual\",\"Strategy\"]', '2022-10-25 01:16:28', '2022-10-25 01:16:28'),
(1057090, 'Ori and the Will of the Wisps', 1, '[\"Action\"]', '2022-10-25 01:16:21', '2022-10-25 01:16:21'),
(1069740, 'Seen', 1, '[\"Action\",\"Adventure\",\"Indie\",\"Early Access\"]', '2022-10-25 01:16:21', '2022-10-25 01:16:21'),
(1093910, 'Tales of the Black Forest', 1, '[\"Adventure\",\"Indie\",\"RPG\"]', '2022-10-25 01:16:22', '2022-10-25 01:16:22'),
(1101140, 'Fishing Adventure', 1, '[\"Indie\",\"Simulation\"]', '2022-10-25 01:16:22', '2022-10-25 01:16:22'),
(1102130, 'Florence', 1, '[\"Adventure\",\"Casual\",\"Indie\"]', '2022-10-26 20:56:28', '2022-10-26 20:56:28'),
(1172470, 'Apex Legends™', 1, '[\"Action\",\"Adventure\",\"Free to Play\"]', '2022-10-25 01:16:22', '2022-10-25 01:16:22'),
(1174180, 'Red Dead Redemption 2', 1, '[\"Action\",\"Adventure\"]', '2022-10-25 01:16:23', '2022-10-25 01:16:23'),
(1180660, 'Tell Me Why', 1, '[\"Adventure\"]', '2022-10-25 01:16:26', '2022-10-25 01:16:26'),
(1222140, 'Detroit: Become Human', 1, '[\"Action\",\"Adventure\"]', '2022-10-26 20:56:36', '2022-10-26 20:56:36'),
(1222670, 'The Sims™ 4', 1, '[\"Adventure\",\"Casual\",\"Free to Play\",\"Simulation\"]', '2022-10-25 01:16:38', '2022-10-25 01:16:38'),
(1222680, 'Need for Speed™ Heat', 1, '[\"Action\",\"Adventure\",\"Racing\",\"Sports\"]', '2022-10-25 01:16:24', '2022-10-25 01:16:24'),
(1241700, 'There Is No Game: Jam Edition 2015', 1, '[\"Adventure\",\"Casual\",\"Free to Play\",\"Indie\"]', '2022-10-25 01:16:23', '2022-10-25 01:16:23'),
(1251300, 'Last Floor', 1, '[\"Action\",\"Adventure\",\"Indie\"]', '2022-10-25 01:16:24', '2022-10-25 01:16:24'),
(1281930, 'tModLoader', 1, '[\"Action\",\"Adventure\",\"Free to Play\",\"Indie\",\"RPG\"]', '2022-10-25 01:16:24', '2022-10-25 01:16:24'),
(1289310, 'Helltaker', 1, '[\"Adventure\",\"Free to Play\",\"Indie\"]', '2022-10-25 01:16:24', '2022-10-25 01:16:24'),
(1332010, 'Stray', 1, '[\"Adventure\",\"Indie\"]', '2022-10-25 01:16:25', '2022-10-25 01:16:25'),
(1466640, 'Road 96 🛣️', 1, '[\"Action\",\"Adventure\",\"Indie\"]', '2022-10-25 01:16:25', '2022-10-25 01:16:25'),
(1515950, 'Capcom Arcade Stadium', 1, '[\"Action\",\"Free to Play\"]', '2022-10-25 01:16:35', '2022-10-25 01:16:35'),
(1556200, 'Predator: Hunting Grounds', 1, '[\"Action\"]', '2022-10-26 20:56:20', '2022-10-26 20:56:20'),
(1593500, 'God of War', 1, '[\"Action\",\"Adventure\",\"RPG\"]', '2022-10-26 20:56:14', '2022-10-26 20:56:14'),
(1794680, 'Vampire Survivors', 1, '[\"Action\",\"Casual\",\"Indie\",\"RPG\"]', '2022-10-25 01:16:31', '2022-10-25 01:16:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applist`
--
ALTER TABLE `applist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applist`
--
ALTER TABLE `applist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1794681;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
