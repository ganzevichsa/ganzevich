-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 27 2020 г., 15:18
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `album_photos`
--

CREATE TABLE `album_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `album_photos`
--

INSERT INTO `album_photos` (`id`, `people_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Море2', NULL, '2020-06-23 11:22:34'),
(2, 1, '1993-2003', NULL, '2020-06-22 09:32:07');

-- --------------------------------------------------------

--
-- Структура таблицы `album_videos`
--

CREATE TABLE `album_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `album_videos`
--

INSERT INTO `album_videos` (`id`, `people_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 1, 'Мор 2019', NULL, '2020-07-27 05:53:25');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `people_id`, `title`, `foto`, `url`, `created_at`, `updated_at`) VALUES
(2, 1, 'asgasga', NULL, '215215', '2020-07-27 08:24:09', '2020-07-27 08:24:09');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_08_144044_create_people_table', 2),
(4, '2020_06_15_110737_create_photos_table', 3),
(5, '2020_06_15_111328_create_album_photos_table', 4),
(6, '2020_06_15_112235_create_videos_table', 5),
(7, '2020_06_15_112328_create_album_videos_table', 6),
(10, '2020_07_27_094618_create_articles_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_death` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a.png',
  `biography` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wikipedia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `dad` int(11) DEFAULT NULL,
  `mum` int(11) DEFAULT NULL,
  `husband` int(11) DEFAULT NULL,
  `wife` int(11) DEFAULT NULL,
  `temp_child` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `title`, `groupTitle`, `date_of_birth`, `date_of_death`, `logo`, `biography`, `facebook`, `twitter`, `instagram`, `wikipedia`, `gender`, `dad`, `mum`, `husband`, `wife`, `temp_child`, `created_at`, `updated_at`) VALUES
(1, 'Ганзевич Сергей Александрович', 'Family 1', '06.11.1986', NULL, '1592914897_13266031_245313185831025_3390400887833923692_n.jpg', 'Я Ганзевич Сергей, системный администратор из Украины, Киев. У меня богатый опыт в IT как системного администратора, так и в создании веб-сайтов, интернет-магазинов и т.д.. В данный момент заинтересован в работе на фрилансе.', 'https://www.facebook.com/profile.php?id=100010570357727', NULL, NULL, NULL, 1, 40, 41, NULL, 16, NULL, NULL, '2020-06-23 09:21:37'),
(16, 'Ганзевич Светлана Игоревна', 'Family 2', '19.09.1993', NULL, '1592915640_70305992_730632204047825_3789223961909264384_n.jpg', NULL, 'https://www.facebook.com/profile.php?id=100013031558981', NULL, NULL, NULL, 2, 43, 44, 1, NULL, NULL, '2020-06-23 05:54:25', '2020-06-23 09:35:09'),
(17, 'Ганзевич Ангелина Сергеевна', 'Family 1', '29.09.2018', NULL, 'p.png', NULL, NULL, NULL, NULL, NULL, 2, 1, 16, NULL, NULL, NULL, '2020-06-23 05:54:51', '2020-06-23 05:54:51'),
(40, 'Ганзевич Александр Владимирович', 'Family 1', '12.07.1962', NULL, 'a.png', NULL, NULL, NULL, NULL, NULL, 1, 58, 59, NULL, 41, 1, '2020-06-23 07:53:50', '2020-07-27 07:23:50'),
(41, 'Ганзевич Светлана Ивановна', 'Family 3', '05.12.1966', NULL, 'p.png', NULL, NULL, NULL, NULL, NULL, 2, 56, 57, 40, NULL, 1, '2020-06-23 07:53:50', '2020-07-27 07:22:49'),
(42, 'Ганзевич Вячеслав Александрович', 'Family 1', '29.01.1991', NULL, 'a.png', NULL, NULL, NULL, NULL, NULL, 1, 40, 41, NULL, 45, NULL, '2020-06-23 07:59:58', '2020-06-23 08:01:33'),
(43, 'Бишеев Игорь', 'Family 2', '-', NULL, 'a.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 44, 16, '2020-06-23 08:00:54', '2020-06-23 08:00:54'),
(44, 'Бишеева', 'Family 2', '-', NULL, 'p.png', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 43, NULL, 16, '2020-06-23 08:00:54', '2020-06-23 08:00:54'),
(45, 'Ганзевич Екатерина', 'Family 4', '-', NULL, 'p.png', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 42, NULL, NULL, '2020-06-23 08:01:33', '2020-06-23 09:57:33'),
(46, 'Ганзевич Стефания Вячеславовна', 'Family 1', '-', NULL, 'p.png', NULL, NULL, NULL, NULL, NULL, 2, 42, 45, NULL, NULL, NULL, '2020-06-23 08:02:15', '2020-06-23 08:02:15'),
(47, 'Бишеев Игорь Игоревич', 'Family 2', '-', NULL, 'a.png', NULL, NULL, NULL, NULL, NULL, 1, 43, 44, NULL, 49, NULL, '2020-06-23 08:03:53', '2020-06-23 08:06:18'),
(48, 'Бишеев Святослав Игоревич', 'Family 2', '-', NULL, 'a.png', NULL, NULL, NULL, NULL, NULL, 1, 43, 44, NULL, NULL, NULL, '2020-06-23 08:04:26', '2020-06-23 08:04:26'),
(49, 'Бишеева Ольга', NULL, '-', NULL, 'p.png', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 47, NULL, NULL, '2020-06-23 08:06:18', '2020-06-23 08:06:18'),
(50, 'Бишеев Марк Игоревич', 'Family 2', '-', NULL, 'a.png', NULL, NULL, NULL, NULL, NULL, 1, 47, 49, NULL, NULL, NULL, '2020-06-23 08:06:52', '2020-06-23 08:06:52'),
(56, 'Штыка Иван', 'Family 3', '01.01.01', NULL, 'a.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 57, 41, '2020-07-27 07:22:49', '2020-07-27 07:22:49'),
(57, 'Штыка Ольга', 'Family 3', '01.01.01', NULL, 'p.png', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 56, NULL, 41, '2020-07-27 07:22:49', '2020-07-27 07:22:49'),
(58, 'Ганзевич Владимир', 'Family 1', '--', NULL, 'a.png', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 59, 40, '2020-07-27 07:23:50', '2020-07-27 08:24:47'),
(59, 'Ганзевич Нинна', 'Family 1', '--', NULL, 'p.png', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 58, NULL, 40, '2020-07-27 07:23:50', '2020-07-27 07:23:50');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `people_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `album_id`, `people_id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '212222', '1592922101_13266031_245313185831025_3390400887833923692_n.jpg', '2020-06-23 11:21:41', '2020-07-27 04:04:21'),
(7, 2, 1, NULL, '1592922165_13266031_245313185831025_3390400887833923692_n.jpg', '2020-06-23 11:22:45', '2020-06-23 11:22:45'),
(14, 0, 1, NULL, '1595495963_1595413912_photo1.jpg', '2020-07-23 06:19:24', '2020-07-23 06:19:24'),
(15, 0, 1, NULL, '1595496218_1595413912_photo1.jpg', '2020-07-23 06:23:38', '2020-07-23 06:23:38'),
(18, 1, 1, NULL, '1595834141_1595413912_photo1.jpg', '2020-07-27 04:15:41', '2020-07-27 04:15:41'),
(19, 1, 1, NULL, '1595834141_1595493951_photo1.jpg', '2020-07-27 04:15:41', '2020-07-27 04:15:41'),
(20, 1, 1, NULL, '1595834141_1595493977_photo1.jpg', '2020-07-27 04:15:41', '2020-07-27 04:15:41'),
(21, 1, 1, NULL, '1595834141_1595495937_1595413912_photo1.jpg', '2020-07-27 04:15:41', '2020-07-27 04:15:41');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Serhio', 'sa.ganzevich@gmail.com', NULL, '$2y$10$oPl93.5ocwf1hYaSgHBU8ecGfkpzwFQh.N7TdLrUeckvsQA4V2Bnm', NULL, '2020-06-10 09:20:08', '2020-06-10 09:20:08'),
(2, 'Сергей', 'ganzevich.sa@icloud.com', NULL, '$2y$10$wNwMDi03kYqxuOReed2doOkTsITiT9mvhlcc3RlpvQUgs8PjFoHPu', NULL, '2020-07-07 06:58:43', '2020-07-07 06:58:43');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `people_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `album_id`, `people_id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'p;', '1595838882_IMG_8540.MOV', '2020-07-27 05:34:42', '2020-07-27 05:51:50'),
(2, 2, 1, NULL, '1595840256_IMG_8540.MOV', '2020-07-27 05:57:36', '2020-07-27 05:57:36');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `album_photos`
--
ALTER TABLE `album_photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `album_videos`
--
ALTER TABLE `album_videos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `album_photos`
--
ALTER TABLE `album_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `album_videos`
--
ALTER TABLE `album_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
