-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Septembre 2015 à 14:42
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mealoclock2`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `comment_text` text,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `comment_text`, `event_id`, `user_id`) VALUES
(1, 'Nam est velit culpa porro. Molestiae voluptatem ea architecto enim nulla impedit illum cupiditate. Veritatis officiis reprehenderit dolorum enim qui vel. Quia voluptatem deleniti ad veritatis sit veniam. Sint consequatur consectetur dolores. Facilis atque dolore ullam ipsum soluta rem. Modi sequi maiores nulla occaecati. Distinctio deserunt veritatis voluptas incidunt rerum.', 5, 8),
(2, 'Temporibus totam ullam commodi voluptas consequatur delectus. Ut voluptate voluptatem eius soluta voluptas in qui sapiente. Est dolorem et et in recusandae. Deserunt officia quo amet necessitatibus. Sequi molestiae cupiditate itaque omnis. Libero repellat delectus quia quis impedit iste et. Omnis eaque commodi similique ab voluptas a alias. Et assumenda quas dolorem ipsa est eligendi et atque.', 7, 10),
(3, 'Quis voluptas autem culpa. Ex soluta ipsa corrupti et in rerum. Quaerat ut dolores nemo est quaerat voluptatibus. Eum qui voluptas eos at libero animi aliquid. Nisi impedit non velit excepturi delectus. Dolores saepe provident quos incidunt praesentium earum asperiores qui. Soluta similique dolor cum molestiae aspernatur. Expedita dolorem est qui consequatur quo. Iste nisi reprehenderit maiores eaque quo enim libero.', 8, 15),
(4, 'Aliquid neque non quo quis. Consequuntur vitae amet quia cumque nostrum laboriosam quaerat. Est ratione libero in ut et. Ullam maxime dolores sed enim magni. Sit officia sit aspernatur repellat hic. Magnam explicabo voluptatibus eum quos facere. Quo voluptatem natus beatae asperiores. Aut asperiores facilis exercitationem non porro repellendus reprehenderit consectetur.', 5, 16),
(5, 'Neque quam ut impedit iste et expedita repellendus. Quam architecto inventore asperiores nihil. Excepturi ipsa laboriosam laboriosam autem fugit fugiat. Quidem architecto corrupti non et eos magnam officiis. Necessitatibus molestiae error consequatur exercitationem ut necessitatibus. In labore odio necessitatibus sed quod vero laboriosam earum.', 6, 16),
(6, 'Accusamus porro sit est illo error vel fugiat. Aspernatur ut molestiae maiores qui porro libero veritatis. Et dicta dolor culpa tempore odit eos. Sapiente explicabo vel consequatur aliquid qui quaerat. Sed et quaerat ducimus sint dolores aut impedit. Eos id eum rerum dolor magnam repellendus. Animi quod dolor ut ducimus impedit perspiciatis. Repudiandae excepturi sunt accusamus velit sit consequatur.', 6, 17),
(7, 'Dolorem voluptate voluptatum molestiae. Quibusdam et consequatur necessitatibus velit eum mollitia commodi eaque. Facilis aut beatae minus ratione. Vitae sint nemo qui dolorem fugit. Nemo qui alias nam suscipit nisi non. Molestiae neque earum sed. Ut incidunt magni tenetur labore at. Sed et eaque dignissimos quod pariatur ut distinctio. Dicta corporis sequi culpa et. Ut in blanditiis vero tempora itaque pariatur. Voluptate officiis optio sit expedita et.', 4, 18),
(8, 'Ratione expedita qui aut inventore. Possimus quia nam qui provident voluptates ut nihil eligendi. Quae reprehenderit placeat quasi nesciunt accusantium et. Saepe sed possimus voluptates voluptatum rerum assumenda. Quidem voluptatem nulla aut dolorem occaecati. Aut et aperiam voluptas reiciendis animi. Rerum dolores qui aut illo optio assumenda et blanditiis.', 9, 23),
(9, 'A inventore accusamus fuga dolorem consectetur vero repellendus nihil. Qui mollitia molestiae necessitatibus consequatur consequuntur maxime quos temporibus. Dolores qui in quidem ratione nobis quod quia. Assumenda earum quia inventore doloribus dolor. Fugit sed quas qui assumenda. Placeat eligendi et eos aut adipisci. Quas quis nihil corporis est omnis ad facilis nulla. Aut at impedit fugiat. Ut est non quam quae.', 7, 26),
(10, 'Illum sit sed tempora fuga et eveniet. Nesciunt accusamus occaecati sed omnis non ad. Qui hic explicabo omnis. Itaque qui consectetur perspiciatis illo autem inventore. Quis sint placeat vel aut culpa sapiente ut. Impedit tempora accusantium aspernatur. Nihil neque cum delectus ea animi. Similique veniam ut aut delectus eum adipisci dicta laudantium. Nam officiis sunt pariatur officiis cumque quam. Non ipsum natus voluptatem. Ducimus sed et consequuntur incidunt culpa.', 9, 28);

-- --------------------------------------------------------

--
-- Structure de la table `communities`
--

CREATE TABLE IF NOT EXISTS `communities` (
  `id` int(11) NOT NULL,
  `com_name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `communities`
--

INSERT INTO `communities` (`id`, `com_name`) VALUES
(1, 'Végétariens'),
(2, 'Vegans'),
(3, 'Sans Gluten'),
(4, 'Sans Lactose');

-- --------------------------------------------------------

--
-- Structure de la table `communities_members`
--

CREATE TABLE IF NOT EXISTS `communities_members` (
  `user_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `communities_members`
--

INSERT INTO `communities_members` (`user_id`, `community_id`) VALUES
(2, 1),
(6, 1),
(7, 1),
(13, 1),
(17, 1),
(30, 1),
(45, 1),
(1, 2),
(3, 2),
(4, 2),
(5, 2),
(9, 2),
(10, 2),
(15, 2),
(18, 2),
(24, 2),
(26, 2),
(28, 2),
(8, 3),
(16, 3),
(22, 3),
(23, 3),
(45, 3),
(11, 4),
(12, 4),
(14, 4),
(19, 4),
(20, 4),
(21, 4),
(25, 4),
(27, 4),
(29, 4);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `event_title` varchar(100) DEFAULT NULL,
  `event_desc` text,
  `event_guests` int(11) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_location` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20') DEFAULT NULL,
  `event_address` text,
  `event_image` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_desc`, `event_guests`, `event_date`, `event_time`, `event_location`, `event_address`, `event_image`, `user_id`, `community_id`) VALUES
(1, 'Porro consequatur nostrum tenetur quidem dolores tenetur accusantium labore.', 'Praesentium et mollitia rem iure quia exercitationem et. Qui non inventore voluptas dolorem a eos. Nisi sunt et ratione molestiae voluptas illo eos. Qui quia pariatur perspiciatis quo aliquam. Consequuntur ratione omnis id repellat cum quia. Neque sed fugit ad nesciunt temporibus facilis. Omnis architecto nulla ducimus rerum cum est. Velit enim tenetur in corrupti quia distinctio reprehenderit. Iusto numquam et nesciunt vel numquam labore.', 6, '2015-09-28', '00:25:00', '3', '510 Gibson Viaduct Mckenzieview, AR 05175-6162', NULL, 13, 2),
(2, 'Velit ipsa occaecati iusto dolor qui voluptatem.', 'Voluptatem eum mollitia quo neque qui. Praesentium commodi eaque ipsam. Autem iste et dolor facere qui. Recusandae in quas eos quia soluta ipsam. Minima laborum quia aspernatur ea. Molestiae voluptatem voluptas quia sit sunt. Architecto fugiat odit sit dolor et cum ad ut. Quidem modi ullam eveniet veritatis quisquam ipsa modi nam.', 8, '2015-09-30', '07:57:00', '12', '25765 Haley Fords Apt. 500 Dejahside, MO 36027', NULL, 3, 4),
(3, 'Quas qui quia nostrum cupiditate.', 'Pariatur et pariatur est delectus nam est. Illum dolore pariatur sint fuga impedit quis. Dolorem asperiores autem aut tempore. Iste quas est consequatur. Ullam temporibus assumenda vel nostrum earum ipsa. Ut modi placeat sint facere sit animi non est. Dolores est ab voluptatibus. Dolor delectus molestiae dolore commodi. Neque rerum rem optio blanditiis unde eius et. Similique hic omnis et possimus maxime eum corrupti voluptates. Aliquam saepe qui itaque eveniet.', 10, '2015-10-06', '10:37:00', '8', '2040 Ansley Street Kertzmanntown, WY 03236-7473', NULL, 7, 1),
(4, 'Accusamus dolor optio ex velit et voluptas.', 'Dolores tenetur odit tempore dicta culpa. Est voluptatibus nam voluptatibus et ut consequuntur a eos. Enim maiores esse voluptas fuga qui. Quibusdam ut et debitis id quod est. Perferendis a corporis non voluptas corrupti quibusdam maiores. Molestiae ad reiciendis voluptas ut. Illo ut iure necessitatibus laboriosam dolorem aperiam. Molestiae eum dicta repellendus iste quos corrupti. Illo optio ratione necessitatibus atque repellat veniam maxime.', 3, '2015-09-30', '06:26:00', '11', '938 Haag Harbors Suite 488 Gorczanyton, MD 03654', NULL, 4, 2),
(5, 'GASTON PARTICIPE Et aut expedita velit perferendis.', 'GASTON PARTICIPE Numquam qui consequatur voluptatem nostrum cum ut. Vel et excepturi aliquid veniam. Ratione aut dolore qui qui quod dolor. Dolor velit quidem magnam. Esse quia sit voluptate repudiandae. Ut asperiores qui hic aut dolore. Maxime debitis alias quos laborum tenetur corrupti. Voluptas voluptatum repellat deserunt maxime tempora reiciendis dolore id. Ex provident aut aut aut odio. Quas quaerat impedit at minima harum.', 7, '2015-09-19', '20:39:00', '5', '0054 Marcelo Turnpike Eleazarmouth, NV 66783', NULL, 2, 3),
(6, 'Officia molestiae et quod aut ut perspiciatis.', 'Explicabo consequuntur deleniti suscipit nisi cum expedita omnis. Sunt optio repellat velit deleniti odit placeat perferendis eius. Qui alias quidem temporibus a similique. Earum assumenda molestias harum repellat enim in. Veniam explicabo nesciunt et maiores ipsam. Qui voluptas quo nihil dolorum. Ducimus fugiat dolor est voluptatem et fugit voluptas. Sed quidem aut voluptas aut rerum. Labore quisquam vel earum. Hic accusamus qui tenetur dignissimos.', 8, '2015-09-09', '20:23:00', '1', '0597 Torphy Flat Suite 493 Fisherland, AK 50732', NULL, 13, 4),
(7, 'Sapiente sit ut ducimus quos nobis.', 'Et rerum minima cumque qui perferendis. Facere deserunt velit quia consequatur qui quas at. Aliquid deleniti voluptas occaecati ut nulla qui reiciendis. Ducimus et unde enim nemo est dolorem. Soluta deserunt eveniet et molestiae. Ut et iure ipsum culpa temporibus. Voluptatem doloremque dignissimos ea non. Alias tempora est possimus. Labore quas ab atque facilis quia.', 7, '2015-09-18', '15:31:00', '6', '97998 Johan Views Meganetown, NJ 72373-7134', NULL, 10, 2),
(8, 'Qui est labore rerum labore quisquam aut.', 'Laborum modi quos perspiciatis aut aut est sequi. Laboriosam voluptas ipsum voluptatum magni. Mollitia in exercitationem saepe velit aliquam. Quo impedit eligendi laboriosam rerum. Itaque ut animi earum nihil sint dignissimos aut. Eius nisi est dolor. Sit labore voluptatem dicta ad nisi et maiores. Et veniam ut quia laborum. Maxime est quis quo reprehenderit. Laudantium dolore ab est cum rerum nemo non. Dolorem amet iure quam voluptates.', 4, '2015-09-08', '21:19:00', '6', '79044 Breitenberg Place Lake Korbin, MD 21418', NULL, 1, 3),
(9, 'GASTON PARTICIPE Nulla sit quis sed ab sunt quidem voluptatem esse.', 'GASTON PARTICIPE Ea aut voluptate ut qui aliquam. Id nostrum laboriosam omnis voluptatem est eos et. Optio consequatur enim sint harum dolorum est totam. Quia explicabo saepe dolorem aliquam qui. Voluptatem ut perferendis autem omnis. Id quae non exercitationem dolor aspernatur ipsum non et. Odit beatae aliquid vitae culpa deserunt omnis expedita. Unde dicta repellendus assumenda ex. Dignissimos ea omnis est et aperiam perferendis. Et sunt suscipit blanditiis quasi optio ut recusandae. Et rerum autem rem.', 10, '2015-09-09', '21:25:00', '5', '929 Adele Canyon Leannonstad, PA 79508-0003', NULL, 11, 4),
(10, 'Repudiandae dolor porro sit dolorum.', 'Quod suscipit deleniti aperiam. Aperiam porro aut illum tempora quo qui harum tempore. Consectetur nam autem quis quo. Qui suscipit nisi voluptas officiis. Voluptatem dignissimos incidunt quia dolorem deserunt. Consectetur non enim enim numquam. Laborum earum ad reiciendis quia ut voluptates nemo. Ullam doloremque sunt similique. Error dolorem harum mollitia qui aut. Et enim voluptate deserunt facere magni amet. Ab eum sint facere omnis.', 3, '2015-09-15', '22:35:00', '5', '8009 Tavares Ways Sawaynchester, SD 47044-2591', NULL, 3, 2),
(11, 'Soirée pruneau', 'bla bla bla', 4, '2015-09-25', '23:00:00', '8', NULL, NULL, 45, 1);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `question_text` text,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` enum('user','admin') COLLATE utf8_bin NOT NULL,
  `user_photo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `user_desc` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_tel` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `password`, `role`, `user_photo`, `user_desc`, `create_time`, `user_tel`) VALUES
(1, 'Makenna39', 'Bruen.Arlene@hotmail.com', '$2y$10$Y7G/8x2H0/js2F5YG/OidujY8bRuL5J/ZmdERlPgXCdg0hPPXAMo6', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(2, 'gLeannon', 'bKemmer@yahoo.com', '$2y$10$Qly47Qimbop2Do5h1jaZyOvWFuEcNbH95wXXxfTbDqMR/V9QuYG0C', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(3, 'mWitting', 'Fletcher33@Jones.com', '$2y$10$9l1Mieg/Cx4DwtIPDB.WTuXoHJgMNkzxoddDQbRsxmrLUPCneZl0u', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(4, 'sDonnelly', 'Alfonzo11@hotmail.com', '$2y$10$j.HNFpHAa/k3CUfLDm0pGOwMXn0/7qfCrlFlulhu56gYm5VM8Vno.', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(5, 'Murphy.Alda', 'Nia.Daugherty@yahoo.com', '$2y$10$4BjICo93jngLRXVVzkdTne/vZjnYDE0ECD14yz1x5h0Ajf4ZbW/WG', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(6, 'Alessia.Hudson', 'aPurdy@Wilkinson.biz', '$2y$10$TbngqMft5zKA2r5fCHclouPggfO619I14hd3YkwDDdI8uI5CU07wO', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(7, 'Jalen.Hackett', 'Marjory00@hotmail.com', '$2y$10$HfkxN2kU9ovHjMGH1TR7YeOz7Nfb0b7rrNAYDKjz8xqxS7YHRfg6G', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(8, 'Geovany86', 'Bruen.Diana@hotmail.com', '$2y$10$IfPOj.g08xoklt6AlH/tA.97Wc8V0nYxKZcvhcco90wkz.DukLBu.', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(9, 'mRohan', 'Ismael.Turner@yahoo.com', '$2y$10$/Y3b0PVnl5srVvEPd4Cb7um5d.ynwx/YxPgSRyBcv1CotJI3jO3Fi', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(10, 'Zackery99', 'Prudence.Mueller@gmail.com', '$2y$10$FZD4Nz70I3GPpmHPy4VJsuT.YAYWi98mM3RCe/fn8GzgSFIqYfbmi', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(11, 'gDooley', 'White.Allen@yahoo.com', '$2y$10$rLLdqmIWDmQ0XvoS9c0vy.XINeFuRe9ou0iV3lhSF0e9xwDd36iiq', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(12, 'uMitchell', 'White.Nyasia@Gerhold.com', '$2y$10$LOE4Jw5qpFI5zpO5.Mf6yeb9.efoZmvHh6.fRTIf.0JXB2LtbDdfi', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(13, 'Isaias.Jast', 'Kreiger.Lamont@yahoo.com', '$2y$10$klRRVHZdI/ZC60DPCEL/ue5nsdXz88wj7A9BKLPawkx2iPP5e.Jki', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(14, 'Coralie.Pacocha', 'Terry.Ellsworth@yahoo.com', '$2y$10$JwtCSGKtPVQkG1leO9b1vOcJqSe6XTp7.4ZVYnN0JK3ao9LWEHgxm', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(15, 'Medhurst.Clark', 'Remington.Dicki@Stroman.com', '$2y$10$.vGodUT5V4oqVU8qCcgPSeSJbFiI1BGewQ31apomHHKSLIsiw8wqi', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(16, 'zWunsch', 'Arvel76@yahoo.com', '$2y$10$RercDGbQSpPe3hB2a485CuLtWwt7VB3785AQQllMxrLtOX62sPl0m', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(17, 'Kovacek.Florida', 'Leuschke.Antonietta@Waelchi.com', '$2y$10$Yh8CEIayawf57Tl92g4Aj.0YMLZrww8oLZqY6IMmsdmmaSfDqTUm2', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(18, 'wMorar', 'Kessler.Laurine@Volkman.com', '$2y$10$8R8sO7eNxrAYU4Vj3.ebcOqtHWHZtmjD6scKr3MpFidp30OhiLRGe', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(19, 'kBode', 'sWyman@Terry.com', '$2y$10$1eBppMGWIX7pZR3kcVQJ0OUFfqAk6U715.K8Xj8lqfHDkdLRk6f9i', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(20, 'Kohler.Tristian', 'qBartell@hotmail.com', '$2y$10$VI5/C/RIvN6.tED2D5qckuKVD.Qm4UmVTXsi6LEgeShtQXNK9sEye', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(21, 'Lindgren.Fae', 'qHyatt@hotmail.com', '$2y$10$bso3.NFiq1tlb7DgRO30rOdTlmR4K7z952lGZ/BIrv.KpmWX39aqq', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(22, 'Everette41', 'Flatley.Leonie@yahoo.com', '$2y$10$GCE26fEtoOycymntyRPW3.JfO5MFLmTLkNt6ktx6xnY4utj9xsQha', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(23, 'Robbie.Reichel', 'uOrtiz@Cartwright.biz', '$2y$10$uiYdi7uH8mDutPJ3Sr3lqOufKGta6SWlah8ttRnAUy0BNON0DGGae', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(24, 'Percival41', 'Isaiah.McDermott@yahoo.com', '$2y$10$Q/ZQtlMCtEn7tL9b0yrccu4miReqpALj4tpjet6yPbHovSfP8wkLW', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(25, 'Jason91', 'oPrice@Simonis.com', '$2y$10$YvktUqpazcUiS8RkA5zW4OYKcfGdsoMotd4uHW6PDa0S0UJTivQQy', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(26, 'sBeier', 'Anderson.Verdie@Skiles.com', '$2y$10$esYPxCncFnz5Q1KVqlaX0OoB0dtpzLZhyNKj20WbwuTbuLMGzomAa', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(27, 'Sven21', 'Abernathy.Yessenia@Bartell.com', '$2y$10$0FIuw8Px/vhyRXEuNrqJauZQvxdooP8jwzYODclvz7Mu6ElgnssBi', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(28, 'Yessenia.Thiel', 'Gilda.Olson@Wilkinson.net', '$2y$10$.9bcEgelP5StODaEJQqv9.zk7scALMEmW2IJFpLE829uSKswf6Tcu', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(29, 'uDouglas', 'Marjolaine.Bahringer@Anderson.com', '$2y$10$tcGseNFlTRcmsQYu.qSjYu7flfQOM.bn8/f.5PeSFEaX13zYBWqCm', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(30, 'bHartmann', 'Rowe.Taylor@Sanford.com', '$2y$10$529RV91fLtesp2d8Ddzp3ewW9TaG3jWFEQBQBEwAHl4l9lH3Zlhdu', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(31, 'david', 'mail@mail.com', 'david', 'user', NULL, NULL, '0000-00-00 00:00:00', NULL),
(32, 'bruna', 'mail@mail.com', 'bruna', 'user', NULL, NULL, '0000-00-00 00:00:00', NULL),
(33, 'clement', 'mail@mail.com', 'clement', 'user', NULL, NULL, '0000-00-00 00:00:00', NULL),
(40, 'julien', 'mail@mail.com', 'julien', 'user', NULL, NULL, '0000-00-00 00:00:00', NULL),
(41, 'emilie', 'mail@mail.com', 'emilie', 'user', NULL, NULL, '0000-00-00 00:00:00', NULL),
(42, 'davidc', 'mailc@mail.com', '$2y$10$CG1YeeEL7SpJTjVDjZjdLuWlWmo3tOZ3LS46E5JEKqDICdldHiWXm', 'user', NULL, NULL, '2015-09-22 12:06:54', NULL),
(43, 'louis', 'louis@mail.com', '$2y$10$IhDR1GFPLzlKQmYtSEAKAu18Sx7jNFZModNm2Iwugi2zF5SOMpefu', 'user', NULL, NULL, '2015-09-22 12:46:54', NULL),
(45, 'gaston', 'gaston@mail.com', '$2y$10$ykVe8Ydj7eM6OdBQgWMQaO7UX4f.H/BkMw52KZzZ02qyJEEj7EaUS', 'user', NULL, NULL, '2015-09-23 09:45:26', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users_events_participation`
--

CREATE TABLE IF NOT EXISTS `users_events_participation` (
  `guest_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` enum('tobeconfirmed','confirmed','rejected','cancelled') COLLATE utf8_bin DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `users_events_participation`
--

INSERT INTO `users_events_participation` (`guest_id`, `event_id`, `status`, `message`) VALUES
(8, 5, 'rejected', ''),
(10, 7, 'cancelled', ''),
(15, 8, 'tobeconfirmed', ''),
(16, 5, 'rejected', ''),
(16, 6, 'tobeconfirmed', ''),
(17, 6, 'cancelled', ''),
(18, 4, 'confirmed', ''),
(23, 9, 'confirmed', ''),
(26, 7, 'rejected', ''),
(28, 9, 'tobeconfirmed', ''),
(45, 5, NULL, ''),
(45, 9, NULL, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_questions_event1_idx` (`event_id`), ADD KEY `fk_questions_users1_idx` (`user_id`);

--
-- Index pour la table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `communities_members`
--
ALTER TABLE `communities_members`
  ADD PRIMARY KEY (`user_id`,`community_id`), ADD KEY `fk_users_has_communities_communities2_idx` (`community_id`), ADD KEY `fk_users_has_communities_users1_idx` (`user_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_event_users1_idx` (`user_id`), ADD KEY `fk_event_communities1_idx` (`community_id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_questions_event1_idx` (`event_id`), ADD KEY `fk_questions_users1_idx` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_name_UNIQUE` (`user_name`);

--
-- Index pour la table `users_events_participation`
--
ALTER TABLE `users_events_participation`
  ADD PRIMARY KEY (`guest_id`,`event_id`), ADD KEY `fk_users_has_event_event1_idx` (`event_id`), ADD KEY `fk_users_has_event_users1_idx` (`guest_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `fk_questions_event10` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_questions_users10` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `communities_members`
--
ALTER TABLE `communities_members`
ADD CONSTRAINT `fk_users_has_communities_communities2` FOREIGN KEY (`community_id`) REFERENCES `communities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_has_communities_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
ADD CONSTRAINT `fk_event_communities1` FOREIGN KEY (`community_id`) REFERENCES `communities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_event_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
ADD CONSTRAINT `fk_questions_event1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_questions_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users_events_participation`
--
ALTER TABLE `users_events_participation`
ADD CONSTRAINT `fk_users_has_event_event1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_has_event_users1` FOREIGN KEY (`guest_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
