SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `companys`;
CREATE TABLE IF NOT EXISTS `companys` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `shortname` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `legal_address` varchar(255) DEFAULT NULL,
  `fact_address` varchar(255) DEFAULT NULL,
  `ogrn` varchar(255) DEFAULT NULL,
  `inn` varchar(255) DEFAULT NULL,
  `kpp` varchar(255) DEFAULT NULL,
  `okpo` varchar(255) DEFAULT NULL,
  `director_full_name` varchar(255) DEFAULT NULL,
  `director_position` varchar(255) DEFAULT NULL,
  `checking_account` varchar(255) DEFAULT NULL,
  `correspondent _account` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `bik` varchar(255) DEFAULT NULL,
  `corporate_email` varchar(255) DEFAULT NULL,
  `corporate_phone` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `companys` (`id`, `fullname`, `shortname`, `type`, `legal_address`, `fact_address`, `ogrn`, `inn`, `kpp`, `okpo`, `director_full_name`, `director_position`, `checking_account`, `correspondent _account`, `bank`, `bik`, `corporate_email`, `corporate_phone`, `created_at`, `updated_at`) VALUES
(2, 'Сумма Технологий', 'Сумтех', 'ООО', '620078, Россия, г. Екатеринбург, ул. Комсомольская, д. 76, лит. А, этаж 1', '620078, Россия, г. Екатеринбург, ул. Комсомольская, д. 76, лит. А, этаж 1', '1036604391790', '6672139614', '667001001', '33908499', 'Рублевский Роман Владимирович', 'Директор', '4.070281011654E+19', '3.01018105E+19', 'Уральский Банк ОАО Сбербанк России', '10158012', 'manager@sumteh.ru', '8 (343) 253-73-45', NULL, NULL);

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1524740318),
('m180426_105521_create_user_table', 1524740408),
('m180426_112834_create_company_table', 1524807660),
('m180426_120057_create_projects_table', 1524807660),
('m180426_120308_create_project_users', 1524807660),
('m180426_120418_create_project_team', 1524807660),
('m180427_050329_create_tasks_table', 1524807660),
('m180427_051509_fill_company_table', 1524807660),
('m180427_051519_fill_projects_table', 1524807660),
('m180427_052210_fill_project_data', 1524807661),
('m180427_052539_create_workers_table', 1524807661),
('m180427_053755_fill_users_workers', 1524807661),
('m180427_095830_add_update_column_to_tables', 1524823423);

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `projects` (`id`, `name`, `direction`, `company_id`, `created_at`, `updated_at`) VALUES
(2, 'Личный кабинет клиента', 'Разработка', 2, NULL, NULL),
(4, 'Интуи', 'Сопровождение', 2, NULL, NULL);

DROP TABLE IF EXISTS `project_team`;
CREATE TABLE IF NOT EXISTS `project_team` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `project_team` (`id`, `project_id`, `worker_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, NULL, NULL),
(4, 2, 4, NULL, NULL),
(6, 4, 2, NULL, NULL);

DROP TABLE IF EXISTS `project_users`;
CREATE TABLE IF NOT EXISTS `project_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `project_users` (`id`, `user_id`, `project_id`, `created_at`, `updated_at`) VALUES
(2, 4, 2, NULL, NULL),
(4, 4, 4, NULL, NULL);

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_title` varchar(255) NOT NULL,
  `task_description` varchar(255) NOT NULL,
  `creator_user_id` int(11) NOT NULL,
  `manager_teamuser_id` int(11) NOT NULL,
  `worker_teamuser_id` int(11) DEFAULT NULL,
  `creating_time` datetime DEFAULT NULL,
  `updating_time` datetime DEFAULT NULL,
  `closed_time` datetime DEFAULT NULL,
  `deadline_time` datetime DEFAULT NULL,
  `task_mark_speed` int(11) NOT NULL,
  `task_mark_completeness_answer` int(11) NOT NULL,
  `files` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tasks` (`id`, `project_id`, `task_title`, `task_description`, `creator_user_id`, `manager_teamuser_id`, `worker_teamuser_id`, `creating_time`, `updating_time`, `closed_time`, `deadline_time`, `task_mark_speed`, `task_mark_completeness_answer`, `files`, `created_at`, `updated_at`) VALUES
(2, 2, 'Разработать модуль "Документы"', 'Создать модуль документы для обмена документами с клиентами (счета, акты и т.п.)', 4, 2, NULL, '2018-05-04 05:22:29', '2018-05-04 05:22:29', NULL, '2018-05-31 00:00:00', 0, 0, NULL, NULL, NULL),
(4, 2, 'Разработать модуль "Задачи"', 'Создать модуль задачи для постановки и отработки задача внутри компании и с клиентами', 4, 2, 2, '2018-05-04 05:22:29', '2018-05-04 05:22:29', NULL, '2018-05-31 00:00:00', 0, 0, NULL, NULL, NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `main_phone` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `surname`, `middlename`, `name`, `birthdate`, `main_phone`, `mobile_phone`, `company_id`) VALUES
(4, 'testuser', 'xsgnGCuBrTS0vs5PsVaRozOfg6hR6c94', '$2y$13$UahwKU19JzQfaig.Wimuk.QNSsxoj1DWhV31LLGbNPkSaq/GNKR/i', NULL, 'tp@sumteh.ru', 10, 1524741838, 1524741838, 'Ломов', 'Максимович', 'Дмитрий', '1988-12-30', '+7 (963) 039-06-66', '+7 (963) 039-06-66', 2),
(6, 'test', 'test', '123', NULL, 'BigBadProg@yandex.ru', 10, 0, 0, 'xcvxcv', 'xcvv', 'vcv', '2018-07-04', '343343', '323232', 1);

DROP TABLE IF EXISTS `workers`;
CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `icq` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `workers` (`id`, `fullname`, `position`, `email`, `phone`, `skype`, `icq`, `created_at`, `updated_at`) VALUES
(2, 'Ломов Дмитрий Максимович', 'Руководитель проекта', 'tp@sumteh.ru', '8 (343) 253-73-45 (доб. 121)', 'support.sumteh1', '', NULL, NULL),
(4, 'Андреев Александр Валерьевич', 'Программист', '', '', '', '', NULL, NULL);


ALTER TABLE `companys`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `project_team`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `project_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `companys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `project_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `project_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
