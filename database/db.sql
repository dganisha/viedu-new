-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 18 Nov 2018 pada 16.38
-- Versi Server: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.1.24-1+ubuntu16.04.1+deb.sury.org+1

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
  `video_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `video_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2018-11-18 00:54:41', '2018-11-18 00:54:41'),
(2, 1, 2, '2018-11-18 01:39:36', '2018-11-18 01:39:36');

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
(7, '2018_11_13_162141_create_table_favorites', 4),
(8, '2018_11_16_134648_create_table_teacher_confirmation', 5);

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

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `project_id`, `price`, `status_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 0, 'selesai', '2018-11-17 11:01:13', '2018-11-17 11:01:13'),
(2, 1, 1, 800000, 'selesai', '2018-11-17 20:29:06', '2018-11-17 20:29:06'),
(4, 8, 1, 800000, 'selesai', '2018-11-18 02:36:43', '2018-11-18 02:36:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('guru1@gmail.com', '$2y$10$SKMIaVnzgTgRtOA2K4der.g/Vqg.igXcn.foZ5xRaExvSgM4C7q76', '2018-11-17 22:24:00'),
('dhimasganisha@gmail.com', '$2y$10$N.VhbVRdH7sgybDRFG.UNuCO73mnhBunJZPLPodgwcc9pzv0TDQa6', '2018-11-17 22:25:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `price` int(11) DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `url_project`, `url_poster`, `user_id`, `price`, `tag`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Laravel + Vue.Js', 'Memberikan full tutorial dari Laravel + Vue.Js dengan hasil akhir adalah aplikasi toko online', '', '/viedu/public/img/poster/poster5.jpg', 1, 800000, 'laravel,vuejs,toko online', 'Website', '2018-11-10 14:39:00', '2018-11-10 14:39:00'),
(2, 'Matematika', 'Matematika dasar kelas 12', '', '/viedu/public/img/poster/poster5.jpg', 1, 0, 'matematika', 'Pelajaran', '2018-11-10 14:39:00', '2018-11-10 14:39:00'),
(17, 'Tes', 'Tesss', '/viedu/public/video//Tes@1@1542443570', '/viedu/public/img/poster//Tes@1@1542443570/1542443570.jpg', 1, NULL, NULL, NULL, '2018-11-17 01:32:50', '2018-11-17 01:32:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teacherconfirmations`
--

CREATE TABLE `teacherconfirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifikasi` enum('verified','non-verified') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teacherconfirmations`
--

INSERT INTO `teacherconfirmations` (`id`, `user_id`, `bio`, `ktp`, `verifikasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Guru di SMKN 13 Bandung', NULL, 'non-verified', '2018-11-16 12:00:00', '2018-11-17 21:34:19');

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
(1, 'Dhiemas Ganisha', 'dhimasganisha@gmail.com', '087898292270', '$2y$10$H1KKocR/N.YX5gOU2NZpk.IQcGDy1Q9TcpQxI/Ne.RPS4ZFtU8ZVO', 'administrator', 10000, 'Mencari ilmu hingga ke negri China', '/viedu/public/img/user/user.png', 'gCbQWx4jBKdlZmscS0XAsC75oEI0tWx4MH4G4zjiTGSHo9pOhsNRkS6pTABX', NULL, '2018-10-14 07:14:53', '2018-11-17 21:40:22'),
(2, 'Angga Kahaerul', 'anggkahaerul20@gmail.com', '082822112', '$2y$10$0YeLaELgyh850q9RKpNshO4i.Uyh7E65clFl8aOjqpdmFZAZelXau', 'member', 0, NULL, '/viedu/public/img/user/user.png', 'vOPAcQYjGkxpNEel6otsUsqUIKqcFu7cYoNlyrlgniB6ogjeHF6zTQkHhlp4', NULL, '2018-11-13 06:07:57', '2018-11-13 06:07:57'),
(8, 'Murid Tes', 'murid1@gmail.com', '1891389', '$2y$10$FOshJxXR7KKharbBrPCdHeiE2GQsokbLRdfGBhHKXiKoXPBs4/crq', 'member', 0, NULL, '/viedu/public/img/user/user.png', NULL, NULL, '2018-11-18 02:35:37', '2018-11-18 02:35:37');

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
(5, 1, 'Laravel + Vue.Js | Part 4', 'Membuat tampilan menggunakan Vue.Js', '/viedu/public/video/4.mp4', '/viedu/public/img/poster/poster6.jpg', '2018-11-11 16:59:00', '2018-11-11 16:59:00'),
(6, 17, 'Video Tes part 1', 'ini tes video', '/viedu/public/video//Tes@1@1542443570/1542448513.webm', '/viedu/public/video//Tes@1@1542443570/1542448513.jpeg', '2018-11-17 02:55:13', '2018-11-17 02:55:13'),
(16, 17, 'Video Tes part 555', 'ini tes video lagii', '/viedu/public/video//Tes@1@1542443570/1542472420.mp4', '/viedu/public/video//Tes@1@1542443570/1542443570.jpg', '2018-11-17 09:33:40', '2018-11-17 09:33:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_project_id_foreign` (`video_id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

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
  ADD KEY `orders_project_id_foreign` (`project_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

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
-- Indexes for table `teacherconfirmations`
--
ALTER TABLE `teacherconfirmations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacherconfirmations_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `teacherconfirmations`
--
ALTER TABLE `teacherconfirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_project_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `teacherconfirmations`
--
ALTER TABLE `teacherconfirmations`
  ADD CONSTRAINT `teacherconfirmations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
