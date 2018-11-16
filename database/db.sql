-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16 Nov 2018 pada 18.26
-- Versi Server: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.1.23-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `educourse`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorites`
--

CREATE TABLE `favorites` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_20_141237_create_table_projects', 2),
(4, '2018_10_20_141635_create_table_videos', 2),
(5, '2018_10_20_142448_edit_table_users', 3),
(6, '2018_11_13_161703_create_table_orders', 4),
(7, '2018_11_13_162141_create_table_favorites', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `status_pembayaran` enum('selesai','belum selesai','kadaluwarsa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `url_poster`, `user_id`, `price`, `tag`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Laravel + Vue.Js', 'Memberikan full tutorial dari Laravel + Vue.Js dengan hasil akhir adalah aplikasi toko online', '/viedu/public/img/poster/poster5.jpg', 1, 800000, 'laravel,vuejs,toko online', 'Website', '2018-11-10 14:39:00', '2018-11-10 14:39:00'),
(2, 'Matematika', 'Matematika dasar kelas 12', '/viedu/public/img/poster/poster5.jpg', 1, 0, 'matematika', 'Pelajaran', '2018-11-10 14:39:00', '2018-11-10 14:39:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('administrator','teacher','member') COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` int(11) NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`, `role`, `balance`, `bio`, `url_foto`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Dhiemas Ganisha', 'dhimasganisha@gmail.com', '087898292270', '$2y$10$H1KKocR/N.YX5gOU2NZpk.IQcGDy1Q9TcpQxI/Ne.RPS4ZFtU8ZVO', 'member', 10000, 'Dhiemas Ganteng', '/viedu/public/img/user/user.png', '4lZqRGSZcq3YyteISnNhwftWFMceN95wvRzDCV5spRIkmQAw1SQaqhwLiEFE', NULL, '2018-10-14 07:14:53', '2018-10-14 07:14:53'),
(2, 'Angga Kahaerul', 'anggkahaerul20@gmail.com', '082822112', '$2y$10$0YeLaELgyh850q9RKpNshO4i.Uyh7E65clFl8aOjqpdmFZAZelXau', 'member', 0, NULL, '/viedu/public/img/user/user.png', 'vOPAcQYjGkxpNEel6otsUsqUIKqcFu7cYoNlyrlgniB6ogjeHF6zTQkHhlp4', NULL, '2018-11-13 06:07:57', '2018-11-13 06:07:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `title_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `project_id`, `title_video`, `description_video`, `source_video`, `source_poster`, `created_at`, `updated_at`) VALUES
(2, 1, 'Laravel + Vue.Js | Part 1', 'Instalasi Laravel dan Vue.Js dalam 1 project', '/viedu/public/video/4.mp4', '/viedu/public/img/poster/poster6.jpg', '2018-11-10 15:31:00', '2018-11-10 15:31:00'),
(3, 1, 'Laravel + Vue.Js | Part 2', 'Membuat sistem di Laravel ', '/viedu/public/video/4.mp4', '/viedu/public/img/poster/poster6.jpg', '2018-11-10 16:59:00', '2018-11-10 16:59:00'),
(4, 1, 'Laravel + Vue.Js | Part 3', 'Membuat sistem di Laravel ', '/viedu/public/video/4.mp4', '/viedu/public/img/poster/poster6.jpg', '2018-11-10 16:59:00', '2018-11-10 16:59:00'),
(5, 1, 'Laravel + Vue.Js | Part 4', 'Membuat tampilan menggunakan Vue.Js', '/viedu/public/video/4.mp4', '/viedu/public/img/poster/poster6.jpg', '2018-11-11 16:59:00', '2018-11-11 16:59:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`),
  ADD KEY `favorites_project_id_foreign` (`project_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_project_id_foreign` (`project_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_project_id_foreign` (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);
