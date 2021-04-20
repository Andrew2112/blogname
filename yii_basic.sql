-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 20 2021 г., 08:58
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii_basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tempore aut ex quo cum!', NULL, '2021-04-12 22:26:14'),
(2, 'Id ad et ullam magnam et.', NULL, NULL),
(3, 'Et magni quo laboriosam et.', NULL, NULL),
(4, 'Et et et nostrum dolor rerum.', NULL, NULL),
(5, 'Illo quo sint quasi.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `user_id`, `post_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Все просто прекрасно', 8, 12, 0, '2021-04-13 14:24:24', '2021-04-15 22:18:46'),
(6, 'Всем привет!', 8, 14, 1, '2021-04-14 18:37:58', '2021-04-16 08:17:24'),
(17, 'Работает', 2, 12, 0, '2021-04-15 10:29:04', '2021-04-15 22:18:49'),
(50, 'Только зарегистрованные пользователя могут оставлять Комментарии', 8, 13, 0, '2021-04-15 15:10:49', '2021-04-15 22:18:53'),
(58, 'Leave a comment\r\n', 8, 13, 0, '2021-04-15 15:28:34', '2021-04-15 22:18:54'),
(59, 'Worked', 8, 14, 0, '2021-04-15 15:31:36', '2021-04-15 22:18:56'),
(60, 'Test comment', 8, 14, 1, '2021-04-16 08:13:45', '2021-04-16 08:15:26'),
(61, 'My comment', 2, 13, 1, '2021-04-16 13:02:51', '2021-04-16 13:03:56'),
(62, 'Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. ', 2038749, 2, 1, '2021-04-17 12:22:16', '2021-04-17 12:22:38');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1617905918),
('m210408_175129_create_posts_table', 1617905920),
('m210408_175710_create_categories_table', 1617905920),
('m210408_182219_create_posts_table', 1617906311),
('m210409_125113_create_users_table', 1617972836),
('m210413_110843_create_tags_table', 1618313855),
('m210413_110933_create_comments_table', 1618313855),
('m210413_111004_create_posts_tags_table', 1618313855),
('m210413_120245_add_created_at_column_to_comments_table', 1618315540),
('m210416_054321_add_name_column_to_users_table', 1618551949),
('m210416_054433_add_viewed_column_to_posts_table', 1618551949);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `viewed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `excerpt`, `text`, `image`, `created_at`, `updated_at`, `viewed`) VALUES
(2, 1, 'Sunt ab veritatis non!', '<p>Aut nihil nesciunt qui quia eum sit. Earum dolor eos impedit quidem cum expedita laboriosam. Reprehenderit sunt consequatur quas.</p>\r\n', '<p>Et et animi aut eos et quisquam. Tempora culpa eveniet eos id magnam iusto voluptatum consequatur. Excepturi ratione voluptate fuga voluptas qui.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam.&nbsp;</p>\r\n', 'images/post1.jpg', '2021-02-01 21:57:24', '2021-04-17 13:14:12', 4),
(3, 2, 'Autem ut aut maiores.', '<p>Ea consectetur rerum ipsam sit dolorem non corporis. Numquam et voluptas cum. Vel consequatur ab sed pariatur.</p>\r\n', '<p>Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.</p>\r\n', 'images/post2.jpg', '2021-02-09 21:57:34', '2021-04-17 13:13:22', 0),
(4, 3, 'Tempore id eveniet est at.', '<p>Numquam impedit nihil voluptatem adipisci. Est omnis nihil autem dolorem nihil. Sint minus nihil molestiae sunt aut et. Ad vel ipsum odit.</p>\r\n', '<p>Ea excepturi in vel adipisci quibusdam adipisci sed. Velit voluptas possimus amet fuga. Officiis molestiae necessitatibus natus modi voluptate quis autem. Quisquam ut consequatur praesentium consequatur exercitationem repellat beatae.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.</p>\r\n', 'images/post3.jpg', '2021-04-05 21:57:42', '2021-04-18 18:01:24', 3),
(5, 4, 'Consequatur hic officiis ut.', 'Voluptatem ut accusantium voluptates et et voluptates quia nam. Sunt eius ipsa inventore minus deleniti.', 'Iste cumque ut autem natus optio iste odit. Vitae accusamus ad incidunt nemo necessitatibus voluptate. Cum et iure illum qui dolor. Temporibus explicabo fugiat et voluptatibus cupiditate. Ut praesentium officiis sint consequuntur. Hic aut voluptates vel consequatur.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.', 'images/post1.jpg', '2021-01-20 21:57:48', NULL, 3),
(6, 5, 'In autem fuga officia ab.', 'Vel unde maxime et sed. Illum molestias et perspiciatis consequatur tenetur totam. Aut quia inventore molestias alias modi et.', 'Culpa similique non sunt quasi officiis et. Dignissimos consectetur et fugit perspiciatis. Est odit iure optio. Dolor consectetur dicta sapiente ad numquam. Voluptatem repudiandae doloremque consectetur et. Sed temporibus rem sed et velit et aut. Nulla voluptas sint ex qui libero necessitatibus. Qui rerum quia qui temporibus aut voluptatem.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.', 'images/post2.jpg', '2021-01-28 21:57:54', NULL, 1),
(7, 1, 'Sequi non sed et.', 'Pariatur quo natus culpa quia ipsa. Consectetur facilis repellat perspiciatis ratione fuga. Quidem magnam reiciendis error vel perspiciatis et.', 'Temporibus sunt voluptas aut ut illum. Distinctio nihil aperiam temporibus vero et. Qui molestiae excepturi officiis vitae voluptas ipsam quia. Et illum consequuntur vel laborum. Cum odio eum voluptas est quis. Non aut sit aliquid iste rerum voluptates. Assumenda nemo aspernatur iste tempore.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.', 'images/post3.jpg', '2021-02-15 21:58:00', NULL, 1),
(8, 2, 'Vitae harum nulla ut ut.', 'Sint voluptates ut sequi. Debitis aliquid cupiditate nisi. Ea nemo est velit est.', 'Eligendi sed illo ducimus inventore. Ea et sed eum saepe. Consectetur iusto id aperiam et et blanditiis ut. Ipsum vel quaerat minima fugit. Et quo dolor sit fuga delectus veritatis. Consequatur recusandae ad tempore quia totam nam dolorem sed. Enim odit totam voluptate ut. Sapiente sit accusantium et quia fugit.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.', 'images/post1.jpg', '2021-03-08 21:58:05', NULL, 4),
(9, 3, 'Tempore non dolorem qui odio.', 'Eum assumenda ut veniam alias. Quis atque sequi maiores neque aut soluta. Tempora esse voluptas tempora rerum rem.', 'Dolores magni architecto nemo quibusdam. Suscipit porro et sed. Omnis sed porro nesciunt aliquam accusamus odio. Error deserunt libero qui ut quo. Pariatur libero placeat praesentium error. Et modi voluptatem iure exercitationem. Similique rerum porro velit enim repudiandae ut. Quos ipsam quia est in.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.', 'images/post2.jpg', '2021-02-20 21:58:10', NULL, 1),
(10, 4, 'Dolor dolorem velit aut nisi.', 'Et et illo minus molestiae alias iure. Aut nihil illo sequi aut vero quidem rerum. Ullam non quis aliquid distinctio in maiores ipsam.', 'Eius numquam animi aspernatur porro praesentium atque rerum nisi. Sapiente similique maiores adipisci voluptatem totam sit dolor voluptate. Delectus quis voluptatem in ullam. Eius adipisci nesciunt nostrum impedit facilis.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.', 'images/post3.jpg', '2021-02-16 21:58:16', NULL, 1),
(11, 5, 'Earum soluta sequi eum est.', 'Est incidunt est quam dolores. Recusandae rem sit eius soluta laborum rerum. Adipisci et quod quod aut est sunt.', 'Est aspernatur commodi laborum natus. Eius libero rerum minima eaque perspiciatis in. Natus et facere illum sint quia voluptatem. Dolor eos dolores sit ut.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.Voluptas qui alias inventore et magnam. Numquam ipsum inventore iste quia nemo error voluptate iste. Voluptas asperiores suscipit quis labore quia ipsum.', 'images/post1.jpg', '2021-03-01 21:58:21', NULL, 0),
(12, 4, 'Тестовая статья 2', '<p>No problem</p>\r\n', '<p>Тестовая статья 2Тестовая статья 2Тестовая статья 2Тестовая статья 2Тестовая статья 2Тестовая статья 2Тестовая статья 2</p>\r\n', 'images/2021-04-16/6079367aa420c_post5.png', '2021-04-13 19:38:42', '2021-04-16 10:02:18', 6),
(13, 4, 'Тестовая статья 3', '<p>Тестовая статья 3</p>\r\n', '<p>Тестовая статья 3Тестовая статья 3Тестовая статья 3Тестовая статья 3Тестовая статья 3</p>\r\n', 'images/2021-04-16/607937bf73ba1_post6.jpg', '2021-04-13 19:39:04', '2021-04-16 10:07:43', 7),
(14, 4, 'Тестовая статья 4', '<p>Est incidunt est quam dolores. Recusandae rem sit eius soluta laborum rerum. Adipisci et quod quod aut est sunt.</p>\r\n', '<p><span style=\"font-family:oswald,sans-serif; font-size:16px\">Est incidunt est quam dolores. Recusandae rem sit eius soluta laborum rerum. Adipisci et quod quod aut est sunt.&nbsp;Est incidunt est quam dolores. Recusandae rem sit eius soluta laborum rerum. Adipisci et quod quod aut est sunt.&nbsp;Est incidunt est quam dolores. Recusandae rem sit eius soluta laborum rerum. Adipisci et quod quod aut est sunt.</span></p>\r\n', 'images/2021-04-16/607936b449817_post7.jpg', '2021-04-14 09:12:42', '2021-04-16 13:17:13', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts_tags`
--

INSERT INTO `posts_tags` (`id`, `post_id`, `tag_id`) VALUES
(32, 12, 1),
(33, 12, 2),
(34, 12, 3),
(35, 12, 4),
(41, 13, 2),
(42, 14, 1),
(43, 14, 2),
(44, 14, 3),
(45, 14, 4),
(46, 3, 3),
(47, 3, 4),
(48, 2, 1),
(49, 2, 4),
(50, 4, 2),
(51, 4, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`) VALUES
(1, 'Tag 1'),
(2, 'Tag 2'),
(3, 'Tag 3'),
(4, 'Tag 4'),
(5, 'Tag5');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `name`) VALUES
(2, 'user@user.ru', '$2y$13$EkAoaEDzoo6ihCz2ozonaupCNqB29UijuEKTLd1I0kwWczafgVZpC', 'user', 'Nicol'),
(3, 'user1@user.ru', '$2y$13$GLgPu2XMIlAODFIefzlFR.xz3G.Wnyau0OAmTkisdNH6hCnvYBESS', 'user', 'Polly'),
(5, 'user2@user.ru', '$2y$13$U8lDjeCcjl8TDJ2dHE1Ee.5ZCTqaNjtYmuWkThs7Gwq7M2UZSqslK', 'user', 'Natan'),
(8, 'admin@admin.ru', '$2y$13$UJ1lPU5wS2.xo1cgtKdiAebba4RFIiUTIb2i.rLH71Z57Ee9foNPC', 'admin', 'Admin'),
(9, 'user4@user.ru', '$2y$13$j1fSRj94iUqhbe/uVOXXreO2az3caIPjgn96.9NSFKNHFTUsIm0GK', 'user', 'Andrew'),
(2038749, NULL, NULL, 'user', 'Андрей');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_post_user_id` (`user_id`),
  ADD KEY `idx_post_id` (`post_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `fk-posts-category_id` (`category_id`);

--
-- Индексы таблицы `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_tag_post_post_id` (`post_id`),
  ADD KEY `idx_tag_id` (`tag_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2038750;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_post_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk-posts-category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD CONSTRAINT `fk_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tags_posts_post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
