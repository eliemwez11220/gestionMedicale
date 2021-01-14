-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 16 nov. 2020 à 21:31
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `consultation_prenatale_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_assets`
--

CREATE TABLE `tb_ca_assets` (
  `asset_id` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_login` varchar(75) DEFAULT NULL,
  `asset_password` varchar(75) NOT NULL,
  `asset_type` varchar(75) NOT NULL,
  `group_sid` int(11) DEFAULT NULL,
  `asset_email` varchar(75) NOT NULL,
  `asset_phone` varchar(75) NOT NULL,
  `asset_theme_default` varchar(75) NOT NULL,
  `asset_theme_session` varchar(75) NOT NULL,
  `asset_statut` enum('online','offline') DEFAULT 'online',
  `asset_date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `asset_last_login` datetime DEFAULT NULL,
  `asset_last_update` datetime DEFAULT NULL,
  `asset_biography` text,
  `asset_avatar` varchar(75) DEFAULT NULL,
  `asset_role` enum('super','admin','simple') DEFAULT 'simple',
  `asset_profession` varchar(200) DEFAULT NULL,
  `asset_genre` varchar(20) DEFAULT NULL,
  `asset_civilite` varchar(75) DEFAULT NULL,
  `session_ouverte` enum('oui','non') NOT NULL DEFAULT 'non',
  `asset_password_saved` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_ca_assets`
--

INSERT INTO `tb_ca_assets` (`asset_id`, `asset_fullname`, `asset_login`, `asset_password`, `asset_type`, `group_sid`, `asset_email`, `asset_phone`, `asset_theme_default`, `asset_theme_session`, `asset_statut`, `asset_date_created`, `asset_last_login`, `asset_last_update`, `asset_biography`, `asset_avatar`, `asset_role`, `asset_profession`, `asset_genre`, `asset_civilite`, `session_ouverte`, `asset_password_saved`) VALUES
(2, 'EMAR RUCHI', 'admin', '$2y$12$1VbvXEEy5f95dfi3rL9OwOO3FI63nWDUvYyPxnk9h9XSFk1X4JkwC', 'administrateur', 1, 'admin@santeza.com', '', '', '', 'online', '2020-06-20 23:32:40', '2020-11-02 06:26:54', NULL, NULL, NULL, 'super', NULL, NULL, NULL, 'non', '$2y$12$I7aHlAo3vf37j4EcCqUw2eV4WvLqkQj.RYbEDFPtBDI7iJ.2LnvXe'),
(3, 'Infirmier', 'infirmier', '$2y$12$YEYi.XoO6xLP5jZEWQk3RexdnEyKwUndiB/y3Xnkyr1z7ZYdwTVgy', 'utilisateur', 3, 'infirmier@santeza.com', '', '', '', 'online', '2020-06-30 21:56:37', '2020-07-31 16:40:19', NULL, NULL, NULL, 'simple', NULL, NULL, NULL, 'non', '$2y$12$XGfc5bJfLMiXsENCL/JYYuy3/Uq92T745rBNiCAfXjY6xT6cnynnW'),
(4, 'Omega Kamwanya', 'kamwanya', '$2y$12$057CRY59dxsn.PUEGRFPGeevh61ouhtyjCg/ObsjHQ9DZlh8CP8Ba', 'utilisateur', 4, 'kamwanya@santeza.com', '', '', '', 'online', '2020-06-30 21:56:37', '2020-10-10 08:45:25', NULL, NULL, NULL, 'simple', NULL, NULL, NULL, 'non', '$2y$12$pswEP7OVwR40mgJPBNGfruBdT3FiyUltB2Zu7HyA0YYtzMKxKJdbG'),
(5, 'Receprion', 'receptionniste', '$2y$12$JJjVwlxzHYlvuxMm/yZ05uP8.UmihbjEA0nzaUz1fyequ5xSbDLou', 'utilisateur', 2, 'receptiona@santeza.com', '', '', '', 'online', '2020-06-30 21:56:37', '2020-11-02 07:55:02', NULL, NULL, NULL, 'simple', NULL, NULL, NULL, 'non', '$2y$12$B3ipU9b4tGZxdJGREQBmw.jc3Z0zfugGJmjk6E2r34Ux0QcqPFLhK'),
(7, 'laborantin specialiste', 'laborantin', '$2y$12$QPfmC78og51/bRdq9s0f/eCsBtJuBmJx/EKzPOIdhuSeteH17fbXC', 'utilisateur', 5, 'laborantin@santeza.com', '', '', '', 'online', '2020-07-31 16:09:03', '2020-07-31 16:06:16', NULL, NULL, NULL, 'simple', NULL, NULL, NULL, 'non', '$2y$12$WbPIqAK5MBH1xcq.LCOf3OpCJZ82UKDAuU0VqXTJ4QDfuFg/NdY7C'),
(8, 'Élie mwez rubuz', 'rubuz', '$2y$12$ODEODs60stOQ4agnEpxv0ONAIpKzQKK7bWdHqG9CHjhXI.uJU0rLC', 'utilisateur', 4, 'eliemwez@congoagile.com', '', '', '', 'online', '2020-08-01 12:49:53', '2020-08-01 12:57:53', NULL, NULL, NULL, 'simple', NULL, NULL, NULL, 'non', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_avis_clients`
--

CREATE TABLE `tb_ca_avis_clients` (
  `avis_id` int(11) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_email` varchar(200) DEFAULT NULL,
  `avis_content` text NOT NULL,
  `avis_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_categories`
--

CREATE TABLE `tb_ca_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(75) NOT NULL,
  `category_image` varchar(75) DEFAULT NULL,
  `category_comments` text,
  `category_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_ca_categories`
--

INSERT INTO `tb_ca_categories` (`category_id`, `category_name`, `category_image`, `category_comments`, `category_date_created`, `category_date_update`) VALUES
(1, 'Sociale', '34bf1-eliemwez.png', '<blockquote>\n	<h3 style=\"text-align: center;\">\n		<strong>Cette categorie contient toutes les emissions en rapport avec les hommes.</strong></h3>\n</blockquote>\n', '2020-06-23 00:23:49', '2020-07-06 13:55:04'),
(2, 'Politique', NULL, '<p>\n	cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc</p>\n', '2020-07-06 10:59:02', NULL),
(3, 'societe', NULL, '<p>\n	Cette categorie contient tous les articles ayant trait a la societe civile</p>\n', '2020-07-12 20:54:08', NULL),
(4, 'sante', NULL, '<p>\n	Tous les articles de sante seront rattaches dans cette categorie</p>\n', '2020-07-12 20:55:26', NULL),
(5, 'sport', NULL, '<p>\n	Les articles de sports seront rattaches ici</p>\n', '2020-07-12 20:56:20', NULL),
(6, 'Sciences', NULL, '<p>\n	Les articles pour la science</p>\n', '2020-07-12 21:09:42', NULL),
(7, 'Technologie', NULL, '<p>\n	Tous les articles de la technologie</p>\n', '2020-07-12 21:10:13', NULL),
(8, 'Culture', NULL, '<p>\n	Tous les articles de la culture</p>\n', '2020-07-12 21:10:52', NULL),
(9, 'Economie', NULL, NULL, '2020-07-12 21:11:26', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_comments`
--

CREATE TABLE `tb_ca_comments` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `post_sid` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `comment_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_communications`
--

CREATE TABLE `tb_ca_communications` (
  `com_id` int(11) NOT NULL,
  `com_title` varchar(200) NOT NULL,
  `com_content` text NOT NULL,
  `com_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `com_date_update` datetime DEFAULT NULL,
  `user_name_posted` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_contacts`
--

CREATE TABLE `tb_ca_contacts` (
  `contact_id` int(11) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_phone` varchar(50) NOT NULL,
  `client_email` varchar(200) NOT NULL,
  `client_address` text NOT NULL,
  `contact_object` varchar(250) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_ca_contacts`
--

INSERT INTO `tb_ca_contacts` (`contact_id`, `client_name`, `client_phone`, `client_email`, `client_address`, `contact_object`, `contact_message`, `contact_created`) VALUES
(1, 'test contact', '0245550022', 'eliem2020@gmail.com', '<p>\n	Lubumbashi</p>\n', 'contact title', '<p>\n	contatc message</p>\n', '2020-06-22 23:04:06');

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_galeries`
--

CREATE TABLE `tb_ca_galeries` (
  `galerie_id` int(11) NOT NULL,
  `galerie_image` varchar(75) NOT NULL,
  `galerie_description` text,
  `galerie_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_ca_galeries`
--

INSERT INTO `tb_ca_galeries` (`galerie_id`, `galerie_image`, `galerie_description`, `galerie_date`) VALUES
(1, 'c360-9.jpg', 'first image', '2020-06-23 10:45:16'),
(2, 'c360-9.jpg', 'second image', '2020-06-23 10:45:16'),
(3, 'ac84-52.jpg', 'third', '2020-06-23 10:53:46'),
(4, 'ac84-52.jpg', 'three', '2020-06-23 10:53:46'),
(5, '8cc03-img-20200715-wa0022.jpg', NULL, '2020-07-15 17:20:06'),
(6, '5f097-img-20200715-wa0023.jpg', NULL, '2020-07-15 17:21:11');

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_groups`
--

CREATE TABLE `tb_ca_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(75) DEFAULT NULL,
  `group_privilege` varchar(75) DEFAULT NULL,
  `group_comments` text,
  `group_date_created` datetime DEFAULT NULL,
  `group_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_ca_groups`
--

INSERT INTO `tb_ca_groups` (`group_id`, `group_name`, `group_privilege`, `group_comments`, `group_date_created`, `group_date_update`) VALUES
(1, 'administrateur', 'All', NULL, NULL, NULL),
(2, 'receptionniste', 'Create, Delete, Update fiches medicales', '<p>\n	Les redacteurs des articles et de commentaires</p>\n', '2020-06-30 21:40:14', NULL),
(3, 'infirmier', 'Management all activities BackOffice', '<p>\n	Gestion de toutes les publications. Articles, Categories, Abonnements, Temoignages et Commentaires</p>\n', '2020-06-30 21:41:59', NULL),
(4, 'medecin', 'Management all activities BackOffice', '<p>\r\n	Gestion de consultation des patients</p>\r\n', '2020-06-30 21:41:59', NULL),
(5, 'laborantin', 'Management all activities BackOffice', '<p>\r\n	Gestion de consultation des patients</p>\r\n', '2020-06-30 21:41:59', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_helps`
--

CREATE TABLE `tb_ca_helps` (
  `help_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `help_subject` varchar(255) DEFAULT NULL,
  `help_issue` text,
  `date_logged` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_logs`
--

CREATE TABLE `tb_ca_logs` (
  `log_id` int(11) NOT NULL,
  `log_content` text,
  `log_status` varchar(75) NOT NULL DEFAULT 'online',
  `log_logged` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_natures_posts`
--

CREATE TABLE `tb_ca_natures_posts` (
  `nature_id` int(11) NOT NULL,
  `nature_name` varchar(75) NOT NULL,
  `nature_description` text NOT NULL,
  `nature_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_ca_natures_posts`
--

INSERT INTO `tb_ca_natures_posts` (`nature_id`, `nature_name`, `nature_description`, `nature_date_created`) VALUES
(1, 'informationelle', 'Cette nature contient des articles a carateres informationnelles seulement.', '2020-07-06 14:13:38'),
(2, 'petites annonces', 'Dans cette nature, vous trouverai des articles qui font des annonces de produits ou de services ou des publicites', '2020-07-06 14:13:38'),
(3, 'magazine', '<p>\n	Cette nature d&#39;articles contient tous les articles et les activites en rapport avec le magazine.&nbsp;</p>\n', '2020-07-12 20:46:05'),
(4, 'dossiers et debats', '<p>\n	Tous les dossiers /&nbsp; focus ainsi que les debats seront notees dans cette categories</p>\n', '2020-07-12 20:47:40'),
(5, 'echo des entreprises', '<p>\n	Vous trouverez les echo des entreprises dans cette nature</p>\n', '2020-07-12 20:48:57'),
(6, 'styles et beaute', '<p>\n	Dans cette nature des articles, on stock des informations sur le style et le mode</p>\n', '2020-07-12 20:50:56'),
(7, 'internet', '<p>\n	Coup d&#39;oeil sur le net. Cette nature contient des informations sur intenet.&nbsp;</p>\n', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_newsletters`
--

CREATE TABLE `tb_ca_newsletters` (
  `newsletter_id` int(11) NOT NULL,
  `user_email` varchar(75) NOT NULL,
  `user_name` varchar(75) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_passswords`
--

CREATE TABLE `tb_ca_passswords` (
  `pass_id` int(11) NOT NULL,
  `pass_email` varchar(255) NOT NULL,
  `pass_token` text NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_posts`
--

CREATE TABLE `tb_ca_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_content` text NOT NULL,
  `post_image` varchar(75) DEFAULT NULL,
  `post_file` varchar(75) DEFAULT NULL,
  `post_video` varchar(75) DEFAULT NULL,
  `post_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_date_update` datetime DEFAULT NULL,
  `category_sid` int(11) NOT NULL,
  `nature_post_sid` int(11) DEFAULT NULL,
  `user_name_posted` varchar(200) DEFAULT NULL,
  `post_source_info` varchar(75) DEFAULT NULL,
  `post_lien_source_info` varchar(75) DEFAULT NULL,
  `post_statut` enum('public','brouillon') DEFAULT NULL,
  `total_views` int(11) DEFAULT NULL,
  `total_likes` int(11) DEFAULT NULL,
  `total_shared` int(11) DEFAULT NULL,
  `post_region` enum('provinciale','afrique','monde') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_ca_posts`
--

INSERT INTO `tb_ca_posts` (`post_id`, `post_title`, `post_content`, `post_image`, `post_file`, `post_video`, `post_date_created`, `post_date_update`, `category_sid`, `nature_post_sid`, `user_name_posted`, `post_source_info`, `post_lien_source_info`, `post_statut`, `total_views`, `total_likes`, `total_shared`, `post_region`) VALUES
(1, 'Premiere emission en rapport avec les activites sociales', '<h5 style=\"text-align: center;\">\n	<span style=\"text-align: justify; font-size: 12px;\">Le&nbsp;</span><strong style=\"text-align: justify; font-size: 12px;\">Lorem Ipsum</strong><span style=\"text-align: justify; font-size: 12px;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles&nbsp;</span></h5>\n<h3 style=\"color: red; text-align: justify;\">\n	<small><q>Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.&nbsp;<span style=\"font-size: 12px;\">Le&nbsp;</span><strong style=\"text-align: justify; font-size: 12px;\">Lorem Ipsum</strong><span style=\"text-align: justify; font-size: 12px;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression.</span></q></small></h3>\n<p style=\"text-align: right;\">\n	<strong><em>Pourquoi l&#39;utiliser?</em></strong></p>\n<p>\n	&nbsp;</p>\n', '1086f-femme_homme.png', NULL, NULL, '2020-07-06 00:29:20', '2020-07-06 13:51:50', 2, 1, 'Elie Mwez', 'Site Actualite', 'www.actualite.cd', 'public', 0, 0, 0, 'provinciale'),
(2, 'Deuxieme activite de developpement economique', '<h5 style=\"text-align: center;\">\n	Deuxieme activite de developpement economique.&nbsp;</h5>\n<p style=\"text-align: justify;\">\n	Le&nbsp;<strong>Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>\n<blockquote>\n	<p style=\"text-align: justify;\">\n		Le&nbsp;<strong>Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression.</p>\n</blockquote>\n<p style=\"text-align: right;\">\n	<strong><em>Pourquoi l&#39;utiliser?</em></strong></p>\n<p>\n	&nbsp;</p>\n', 'eliemwez.jpg', NULL, NULL, '2020-07-06 00:29:20', '2020-06-23 00:29:26', 1, 1, 'Elie Rubuz', 'Site Actualite', 'www.digitsys.com', 'public', 0, 0, 0, 'provinciale'),
(3, 'Troisieme activite de science et l\'environnement', '<h5 style=\"text-align: center;\">\n	<span style=\"text-align: justify; font-size: 12px;\">Le&nbsp;</span><strong style=\"text-align: justify; font-size: 12px;\">Lorem Ipsum</strong><span style=\"text-align: justify; font-size: 12px;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</span></h5>\n<blockquote>\n	<p style=\"text-align: justify;\">\n		Le&nbsp;<strong>Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression.</p>\n</blockquote>\n<p style=\"text-align: right;\">\n	<strong><em>Pourquoi l&#39;utiliser?</em></strong></p>\n<p>\n	&nbsp;</p>\n', '8865b-services_all.png', NULL, NULL, '2020-07-06 00:29:20', '2020-07-06 13:54:13', 1, 1, 'Elie Rubuz', 'Site Source Actualite', 'www.digitsys.com', 'public', 0, 0, 0, 'provinciale'),
(4, 'Test pub post Test pub post Test pub post', '<h3 style=\"text-align: justify;\">\n	<strong>Test pub post</strong></h3>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<h3 style=\"text-align: justify;\">\n	<strong>Test pub post</strong></h3>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	&nbsp;</p>\n<h3 style=\"text-align: right;\">\n	<strong><em>Test pub post</em></strong></h3>\n', '368a8-teams_shooting.png', '3a869-1_-_cv_elie-mwez-rubuz_2020-copy.pdf', NULL, '2020-07-06 11:02:19', NULL, 2, 5, 'Elie Mwez', NULL, NULL, 'public', NULL, NULL, NULL, 'provinciale'),
(5, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '<p>\n	Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>\n<p style=\"text-align: right;\">\n	affffffffffffffffffffffffffffffffffffffffff</p>\n', '539e4-our_team.png', NULL, NULL, '2020-07-07 00:06:56', NULL, 2, 1, 'Elie Mwez', 'Site Actualite', 'www.actualite.cd', 'public', 0, 0, 0, 'provinciale'),
(6, 'Internet des objects', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<blockquote>\n	<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n		<em><strong style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px; margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></em></h2>\n</blockquote>\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<p>\n	&nbsp;</p>\n<ol>\n	<li>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n</ol>\n<p>\n	&nbsp;</p>\n', 'bc31c-pc2.jpg', NULL, NULL, '2020-07-12 21:07:04', NULL, 3, 7, 'Anonyme', 'Congo Agile News', 'congoagile.com', 'public', NULL, NULL, NULL, 'monde'),
(7, 'Techonologie de la telephonie', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<blockquote>\n	<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n		<em><strong style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px; margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></em></h2>\n</blockquote>\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<p>\n	&nbsp;</p>\n<ol>\n	<li>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n</ol>\n<p>\n	&nbsp;</p>\n', '8768f-pc1.jpg', NULL, NULL, '2020-07-12 21:07:04', NULL, 6, 1, 'Anonyme', 'Congo Agile News', 'congoagile.com', 'public', NULL, NULL, NULL, 'monde'),
(8, 'Les appareils connectes', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<blockquote>\n	<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n		<em><strong style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px; margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></em></h2>\n</blockquote>\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<p>\n	&nbsp;</p>\n<ol>\n	<li>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n</ol>\n<p>\n	&nbsp;</p>\n', '8768f-pc1.jpg', NULL, NULL, '2020-07-12 21:07:04', NULL, 7, 5, 'Anonyme', 'Congo Agile News', 'congoagile.com', 'public', NULL, NULL, NULL, 'provinciale'),
(9, 'Les appareils connectes deuxieme article', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<blockquote>\n	<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n		<em><strong style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px; margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></em></h2>\n</blockquote>\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<p>\n	&nbsp;</p>\n<ol>\n	<li>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n</ol>\n<p>\n	&nbsp;</p>\n', '8768f-pc1.jpg', NULL, NULL, '2020-07-12 21:07:04', NULL, 7, 7, 'Anonyme', 'Congo Agile News', 'congoagile.com', 'public', NULL, NULL, NULL, 'monde'),
(10, 'Les appareils connectes troisieme article', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \" text-align:=\"\">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \" text-align:=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<blockquote>\n	<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n		<em><strong style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px; margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span style=\"color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></em></h2>\n</blockquote>\n<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0); text-align: justify;\">\n	<strong font-size:=\"\" margin:=\"\" open=\"\" padding:=\"\" style=\"font-family: \">Lorem Ipsum</strong><span font-size:=\"\" open=\"\" style=\"font-family: \">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></h2>\n<p>\n	&nbsp;</p>\n<ol>\n	<li>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n	<li>\n		<h5>\n			&nbsp;</h5>\n		<h5 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">\n			<strong>What is Lorem Ipsum?</strong></h5>\n	</li>\n</ol>\n<p>\n	&nbsp;</p>\n', '8768f-pc1.jpg', NULL, NULL, '2020-07-12 21:07:04', NULL, 7, 3, 'Anonyme', 'Congo Agile News', 'congoagile.com', 'public', NULL, NULL, NULL, 'monde'),
(11, 'Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor ', '<h3 style=\"text-align: justify;\">\n	<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa orci, mattis non sapien vitae, faucibus ullamcorper erat. Nullam volutpat mattis lectus, at hendrerit massa vehicula id. Integer ultricies nulla ut arcu vehicula, sit amet accumsan tortor mattis. Pellentesque dolor turpis, cursus vel turpis id, varius posuere dui. Cras eget metus a turpis efficitur aliquam vel hendrerit arcu. Quisque aliquet dolor erat, ac vestibulum ligula elementum vel. Cras sagittis faucibus velit id placerat. Donec tincidunt lacus et metus tincidunt, in mattis neque dictum.</span></h3>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<h3 style=\"text-align: justify;\">\n	<strong>Test pub post</strong></h3>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	&nbsp;</p>\n<h3 style=\"text-align: right;\">\n	<strong><em>Test pub post</em></strong></h3>\n', '368a8-teams_shooting.png', '3a869-1_-_cv_elie-mwez-rubuz_2020-copy.pdf', NULL, '2020-07-06 11:02:19', '2020-07-12 22:59:25', 2, 4, 'Elie Mwez', 'Congo Agile News', 'congoagile.com', 'public', NULL, NULL, NULL, 'provinciale'),
(12, 'Deuxieme Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor ', '<h3 style=\"text-align: justify;\">\n	<span font-size:=\"\" open=\"\" style=\"color: rgb(0, 0, 0); font-family: \">Deuxieme Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor . Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa orci, mattis non sapien vitae, faucibus ullamcorper erat. Nullam volutpat mattis lectus, at hendrerit massa vehicula id. Integer ultricies nulla ut arcu vehicula, sit amet accumsan tortor mattis. Pellentesque dolor turpis, cursus vel turpis id, varius posuere dui. Cras eget metus a turpis efficitur aliquam vel hendrerit arcu. Quisque aliquet dolor erat, ac vestibulum ligula elementum vel. Cras sagittis faucibus velit id placerat. Donec tincidunt lacus et metus tincidunt, in mattis neque dictum.</span></h3>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<h3 style=\"text-align: justify;\">\n	<strong>Test pub post</strong></h3>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	Test pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub postTest pub post</p>\n<p style=\"text-align: justify;\">\n	&nbsp;</p>\n<h3 style=\"text-align: right;\">\n	<strong><em>Test pub post</em></strong></h3>\n', '368a8-teams_shooting.png', '3a869-1_-_cv_elie-mwez-rubuz_2020-copy.pdf', NULL, '2020-07-06 11:02:19', '2020-07-12 22:59:25', 2, 4, 'Elie Mwez', 'Congo Agile News', 'congoagile.com', 'public', NULL, NULL, NULL, 'provinciale'),
(13, 'Activite de developpement economique', '<h5 style=\"text-align: justify;\">\n	<span style=\"text-align: justify; font-size: 12px;\">Le&nbsp;</span><strong style=\"text-align: justify; font-size: 12px;\">Lorem Ipsum</strong><span style=\"text-align: justify; font-size: 12px;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</span></h5>\n<blockquote>\n	<p style=\"text-align: justify;\">\n		Le&nbsp;<strong>Lorem Ipsum</strong>&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression.</p>\n</blockquote>\n<p style=\"text-align: right;\">\n	<strong><em>Pourquoi l&#39;utiliser?</em></strong></p>\n<p>\n	&nbsp;</p>\n', 'eliemwez.jpg', NULL, NULL, '2020-07-06 00:29:20', '2020-06-23 00:29:26', 8, 6, 'Elie Rubuz', 'Site Actualite', 'www.digitsys.com', 'public', 0, 0, 0, 'provinciale'),
(14, 'Activite de science et l\'environnement', '<h5 style=\"text-align: justify;\">\n	<span style=\"text-align: justify; font-size: 12px;\">Le&nbsp;</span><strong style=\"text-align: justify; font-size: 12px;\">Lorem Ipsum</strong><span style=\"text-align: justify; font-size: 12px;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</span></h5>\n<h5 style=\"text-align: justify;\">\n	<span style=\"font-size: 12px;\">Le&nbsp;</span><strong style=\"font-size: 12px;\">Lorem Ipsum</strong><span style=\"font-size: 12px;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</span></h5>\n<h5 style=\"text-align: justify;\">\n	<span style=\"font-size: 12px;\">Le&nbsp;</span><strong style=\"font-size: 12px;\">Lorem Ipsum</strong><span style=\"font-size: 12px;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</span></h5>\n<h5 style=\"text-align: justify;\">\n	<span style=\"font-size: 12px;\">Le&nbsp;</span><strong style=\"font-size: 12px;\">Lorem Ipsum</strong><span style=\"font-size: 12px;\">&nbsp;est simplement du faux texte employ&eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&#39;imprimerie depuis les ann&eacute;es 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour r&eacute;aliser un livre sp&eacute;cimen de polices de texte. Il n&#39;a pas fait que survivre cinq si&egrave;cles, mais s&#39;est aussi adapt&eacute; &agrave; la bureautique informatique, sans que son contenu n&#39;en soit modifi&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 gr&acirc;ce &agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</span></h5>\n<p>\n	&nbsp;</p>\n', '8865b-services_all.png', NULL, NULL, '2020-07-06 00:29:20', '2020-07-06 13:54:13', 6, 6, 'Elie Rubuz', 'Site Source Actualite', 'www.digitsys.com', 'public', 0, 0, 0, 'provinciale'),
(20, 'R1ddddddddddddignissim augue consequat commodo. Vestibulum in nibh tellus.', 'Aenean efficitur felis sed nibh ullamcorper varius. In cursus lectus nec condimentum tempus. Proin bibendum libero sapien, in ullamcorper odio scelerisque ut. Nunc porttitor leo molestie dui aliquam rutrum. Suspendisse egestas ante posuere vulputate luctus. Quisque non est lectus. Fusce fermentum efficitur tristique. Etiam commodo tristique suscipit.\r\n\r\nNullam nibh quam, venenatis at leo sed, molestie fermentum lectus. Aliquam sollicitudin porta enim, bibendum pretium ex dictum finibus. Nunc faucibus et felis in malesuada. Phasellus euismod, sem et consequat euismod, dolor nisi sodales libero, ut accumsan nulla urna id tortor. Etiam sem lacus, ornare ut mi vitae, gravida tincidunt leo. Quisque elementum, elit vitae feugiat hendrerit, quam mauris mattis nibh, ac sagittis purus turpis ac purus. Pellentesque massa velit, mattis nec sem id, ullamcorper efficitur augue. Morbi dapibus vestibulum orci, quis dignissim augue consequat commodo. Vestibulum in nibh tellus.\r\n\r\nCurabitur lacinia nunc et elit mollis maximus. Nulla vulputate quam massa. Etiam non diam feugiat, gravida ligula quis, varius odio. Donec ligula tellus, vehicula et feugiat vel, dignissim sit amet orci. Mauris nec nisi a nisi accumsan egestas. Nullam sed metus metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas suscipit augue sed posuere euismod. Donec porttitor, massa in auctor interdum, augue dui tristique felis, vel feugiat purus purus ultrices metus. Vivamus congue nunc et dolor sollicitudin, non dictum metus tincidunt. Vestibulum ligula justo, imperdiet vitae eleifend et, consequat ut ipsum. Ut bibendum maximus ipsum, at commodo metus luctus ut. Morbi porttitor nisl nec ipsum pulvinar sagittis. Nunc quis venenatis mi. Phasellus et suscipit nisi, at suscipit nisi. Pellentesque sed accumsan velit.', 'FlyerMaker_05072020_04254418.png', NULL, NULL, '2020-07-13 18:39:10', NULL, 7, 1, NULL, NULL, NULL, 'public', NULL, NULL, NULL, ''),
(21, 'Quisque non est lectus. Fusce fermentum efficitur tristique. Etiam commodo tristique suscipit.', 'Aenean efficitur felis sed nibh ullamcorper varius. In cursus lectus nec condimentum tempus. Proin bibendum libero sapien, in ullamcorper odio scelerisque ut. Nunc porttitor leo molestie dui aliquam rutrum. Suspendisse egestas ante posuere vulputate luctus. Quisque non est lectus. Fusce fermentum efficitur tristique. Etiam commodo tristique suscipit.\r\n\r\nNullam nibh quam, venenatis at leo sed, molestie fermentum lectus. Aliquam sollicitudin porta enim, bibendum pretium ex dictum finibus. Nunc faucibus et felis in malesuada. Phasellus euismod, sem et consequat euismod, dolor nisi sodales libero, ut accumsan nulla urna id tortor. Etiam sem lacus, ornare ut mi vitae, gravida tincidunt leo. Quisque elementum, elit vitae feugiat hendrerit, quam mauris mattis nibh, ac sagittis purus turpis ac purus. Pellentesque massa velit, mattis nec sem id, ullamcorper efficitur augue. Morbi dapibus vestibulum orci, quis dignissim augue consequat commodo. Vestibulum in nibh tellus.\r\n\r\nCurabitur lacinia nunc et elit mollis maximus. Nulla vulputate quam massa. Etiam non diam feugiat, gravida ligula quis, varius odio. Donec ligula tellus, vehicula et feugiat vel, dignissim sit amet orci. Mauris nec nisi a nisi accumsan egestas. Nullam sed metus metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas suscipit augue sed posuere euismod. Donec porttitor, massa in auctor interdum, augue dui tristique felis, vel feugiat purus purus ultrices metus. Vivamus congue nunc et dolor sollicitudin, non dictum metus tincidunt. Vestibulum ligula justo, imperdiet vitae eleifend et, consequat ut ipsum. Ut bibendum maximus ipsum, at commodo metus luctus ut. Morbi porttitor nisl nec ipsum pulvinar sagittis. Nunc quis venenatis mi. Phasellus et suscipit nisi, at suscipit nisi. Pellentesque sed accumsan velit.', 'noimage.jpg', NULL, NULL, '2020-07-13 18:50:58', NULL, 1, 4, NULL, NULL, NULL, 'public', NULL, NULL, NULL, 'monde');
INSERT INTO `tb_ca_posts` (`post_id`, `post_title`, `post_content`, `post_image`, `post_file`, `post_video`, `post_date_created`, `post_date_update`, `category_sid`, `nature_post_sid`, `user_name_posted`, `post_source_info`, `post_lien_source_info`, `post_statut`, `total_views`, `total_likes`, `total_shared`, `post_region`) VALUES
(22, 'mod ut. Nullam pharetra arcu eu porttitor condimentum. Nulla in nibh nibh. Sed eget mauris erat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices scelerisque lectus ac malesuada. Donec vel egestas urna. Curabitur mollis dolor at nisi hendrerit, in aliquet lectus rhoncus. Integer ac scelerisque orci, eu eleifend ante. Sed dapibus cursus urna, in efficitur ante euismod ut. Nullam pharetra arcu eu porttitor condimentum. Nulla in nibh nibh. Sed eget mauris erat.\r\n\r\nFusce vitae erat nulla. Sed eget leo sem. Duis at faucibus lorem. Cras eleifend, mi ac gravida suscipit, tellus neque feugiat mauris, a volutpat diam massa quis lacus. Mauris magna est, porttitor nec rhoncus sed, varius non nisl. Quisque luctus in libero et pretium. Vestibulum eros ipsum, consequat sit amet ultricies fringilla, placerat a ante. Fusce quis dolor tortor. Proin aliquam tellus in lacus finibus elementum.\r\n\r\nAenean efficitur felis sed nibh ullamcorper varius. In cursus lectus nec condimentum tempus. Proin bibendum libero sapien, in ullamcorper odio scelerisque ut. Nunc porttitor leo molestie dui aliquam rutrum. Suspendisse egestas ante posuere vulputate luctus. Quisque non est lectus. Fusce fermentum efficitur tristique. Etiam commodo tristique suscipit.\r\n\r\nNullam nibh quam, venenatis at leo sed, molestie fermentum lectus. Aliquam sollicitudin porta enim, bibendum pretium ex dictum finibus. Nunc faucibus et felis in malesuada. Phasellus euismod, sem et consequat euismod, dolor nisi sodales libero, ut accumsan nulla urna id tortor. Etiam sem lacus, ornare ut mi vitae, gravida tincidunt leo. Quisque elementum, elit vitae feugiat hendrerit, quam mauris mattis nibh, ac sagittis purus turpis ac purus. Pellentesque massa velit, mattis nec sem id, ullamcorper efficitur augue. Morbi dapibus vestibulum orci, quis dignissim augue consequat commodo. Vestibulum in nibh tellus.\r\n\r\nCurabitur lacinia nunc et elit mollis maximus. Nulla vulputate quam massa. Etiam non diam feugiat, gravida ligula quis, varius odio. Donec ligula tellus, vehicula et feugiat vel, dignissim sit amet orci. Mauris nec nisi a nisi accumsan egestas. Nullam sed metus metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas suscipit augue sed posuere euismod. Donec porttitor, massa in auctor interdum, augue dui tristique felis, vel feugiat purus purus ultrices metus. Vivamus congue nunc et dolor sollicitudin, non dictum metus tincidunt. Vestibulum ligula justo, imperdiet vitae eleifend et, consequat ut ipsum. Ut bibendum maximus ipsum, at commodo metus luctus ut. Morbi porttitor nisl nec ipsum pulvinar sagittis. Nunc quis venenatis mi. Phasellus et suscipit nisi, at suscipit nisi. Pellentesque', 'noimage.jpg', NULL, NULL, '2020-07-13 19:00:20', NULL, 6, 5, NULL, NULL, NULL, 'public', NULL, NULL, NULL, ''),
(23, 'ghgh555555fffffffffffffffffffffffffffffffffffffffff', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'flutter_portfolio_Elie_Mwez.PNG', NULL, NULL, '2020-07-13 19:04:11', NULL, 4, 2, NULL, NULL, NULL, 'public', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `tb_ca_services`
--

CREATE TABLE `tb_ca_services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(75) NOT NULL,
  `service_image` varchar(75) DEFAULT NULL,
  `service_content` text,
  `service_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_date_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_consultations`
--

CREATE TABLE `tb_cons_consultations` (
  `cons_id` int(11) NOT NULL,
  `malade_concerne` int(11) NOT NULL,
  `symptomes` varchar(255) NOT NULL,
  `signes_vitaux` varchar(255) NOT NULL,
  `poids_malade` varchar(25) NOT NULL,
  `taille_malade` varchar(25) NOT NULL,
  `date_consultation` date NOT NULL,
  `decision_prise` varchar(255) NOT NULL,
  `nom_medecin` varchar(255) NOT NULL,
  `specialite_medecin` varchar(255) NOT NULL,
  `observation_consultation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_cons_consultations`
--

INSERT INTO `tb_cons_consultations` (`cons_id`, `malade_concerne`, `symptomes`, `signes_vitaux`, `poids_malade`, `taille_malade`, `date_consultation`, `decision_prise`, `nom_medecin`, `specialite_medecin`, `observation_consultation`) VALUES
(1, 2, 'Malaria, taux', 'fievre, vomissements, maux de tete', '56kg', '1.6cm', '2020-08-01', 'Passer un examen de labo', 'Kamwanya', 'Ophtamologue', 'RAS');

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_examens`
--

CREATE TABLE `tb_cons_examens` (
  `examen_id` int(11) NOT NULL,
  `malade_concerne` int(11) NOT NULL,
  `type_examen` varchar(255) NOT NULL,
  `resultats_labo` text NOT NULL,
  `date_examinee` date NOT NULL,
  `nom_laborantin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_cons_examens`
--

INSERT INTO `tb_cons_examens` (`examen_id`, `malade_concerne`, `type_examen`, `resultats_labo`, `date_examinee`, `nom_laborantin`) VALUES
(1, 2, 'Radio', 'ubuhbhbjbjkjqhjsbsb', '2020-07-31', 'Elie ');

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_horaires`
--

CREATE TABLE `tb_cons_horaires` (
  `horaire_id` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_horaire` date DEFAULT NULL,
  `heure_horaire` time DEFAULT NULL,
  `etat_horaire` varchar(25) DEFAULT NULL,
  `medecin` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_malades`
--

CREATE TABLE `tb_cons_malades` (
  `malade_id` int(11) NOT NULL,
  `malade_noms` varchar(255) NOT NULL,
  `malade_age` int(11) NOT NULL,
  `malade_adresse` varchar(255) NOT NULL,
  `malade_telephone` varchar(25) NOT NULL,
  `fiche_numero` int(10) NOT NULL,
  `fiche_date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fiche_observation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_cons_malades`
--

INSERT INTO `tb_cons_malades` (`malade_id`, `malade_noms`, `malade_age`, `malade_adresse`, `malade_telephone`, `fiche_numero`, `fiche_date_creation`, `fiche_observation`) VALUES
(1, 'Chirene Melanie', 45, '25 des rosiers, lubumbashi', '+243858533285', 72020, '2020-07-31 13:11:51', '<p>\n	fiche de consultation prenatale</p>\n'),
(2, 'Patricia Ntumba', 28, '45, avenue Lotus, Bel-Air, Lushi', '0995585858', 202008, '2020-08-01 12:09:17', '<p>\n	Consultation prenatale pour la premiere fois.</p>\n');

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_medicaments`
--

CREATE TABLE `tb_cons_medicaments` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` varchar(75) NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_cons_medicaments`
--

INSERT INTO `tb_cons_medicaments` (`product_id`, `product_code`, `product_title`, `product_price`, `product_description`) VALUES
(1, 'P002', 'Aspirine 500mg', '300', '<p>\n	Aspirine pour adulte en comprime buvable</p>\n'),
(2, 'P002', 'Qunine 500mg', '200', '<p>\n	Quinine pour adulte</p>\n');

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_ordonances`
--

CREATE TABLE `tb_cons_ordonances` (
  `ordon_id` int(11) NOT NULL,
  `ordonance_numero` int(10) NOT NULL,
  `ordonance_date` date NOT NULL,
  `ordonance_details` text NOT NULL,
  `nom_medecin` varchar(25) NOT NULL,
  `malade_concerne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_cons_ordonances`
--

INSERT INTO `tb_cons_ordonances` (`ordon_id`, `ordonance_numero`, `ordonance_date`, `ordonance_details`, `nom_medecin`, `malade_concerne`) VALUES
(1, 11220, '2020-07-31', '<p>\n	Ordonance de consultation prenatale de femmes enceintes</p>\n', 'Ilunga Kasongo', 1),
(2, 101, '2020-08-01', 'Patient souffrant de la malaria', 'Kamwanya', 2);

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_prescriptions`
--

CREATE TABLE `tb_cons_prescriptions` (
  `prescrip_id` int(11) NOT NULL,
  `numero_ordonance` int(11) NOT NULL,
  `produit_prescrit` int(11) NOT NULL,
  `posologie` varchar(255) NOT NULL,
  `mode_emploi` varchar(75) NOT NULL,
  `quantite_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_cons_prescriptions`
--

INSERT INTO `tb_cons_prescriptions` (`prescrip_id`, `numero_ordonance`, `produit_prescrit`, `posologie`, `mode_emploi`, `quantite_total`) VALUES
(1, 1, 1, 'Adulte', '2x2/jr', 12),
(2, 2, 1, 'Adulte', '2x2/jour', 28),
(3, 2, 2, 'Adulte', '3x1/jour', 14);

-- --------------------------------------------------------

--
-- Structure de la table `tb_cons_rendezvous`
--

CREATE TABLE `tb_cons_rendezvous` (
  `rdv_id` int(11) NOT NULL,
  `nom_malade` varchar(75) DEFAULT NULL,
  `phone_malade` varchar(25) DEFAULT NULL,
  `date_reservee` datetime DEFAULT NULL,
  `date_rdv` date DEFAULT NULL,
  `heure_rdv` time DEFAULT NULL,
  `motif_rdv` text,
  `service_rdv` varchar(75) DEFAULT NULL,
  `etat_rdv` varchar(25) DEFAULT NULL,
  `medecin` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_cons_rendezvous`
--

INSERT INTO `tb_cons_rendezvous` (`rdv_id`, `nom_malade`, `phone_malade`, `date_reservee`, `date_rdv`, `heure_rdv`, `motif_rdv`, `service_rdv`, `etat_rdv`, `medecin`) VALUES
(1, 'Élie-Rubuz', '0977090011', '2020-11-02 06:49:51', '2020-11-05', '12:30:00', 'Premiere consultation prenatale de ma femme', 'CPN', 'encours', NULL);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vue_groupes_users`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vue_groupes_users` (
`asset_id` int(11)
,`asset_fullname` varchar(75)
,`asset_login` varchar(75)
,`asset_password` varchar(75)
,`asset_type` varchar(75)
,`group_sid` int(11)
,`asset_email` varchar(75)
,`asset_phone` varchar(75)
,`asset_theme_default` varchar(75)
,`asset_theme_session` varchar(75)
,`asset_statut` enum('online','offline')
,`asset_date_created` datetime
,`asset_last_login` datetime
,`asset_last_update` datetime
,`asset_biography` text
,`asset_avatar` varchar(75)
,`asset_role` enum('super','admin','simple')
,`asset_profession` varchar(200)
,`asset_genre` varchar(20)
,`asset_civilite` varchar(75)
,`session_ouverte` enum('oui','non')
,`asset_password_saved` varchar(255)
,`group_id` int(11)
,`group_name` varchar(75)
,`group_privilege` varchar(75)
,`group_comments` text
,`group_date_created` datetime
,`group_date_update` datetime
);

-- --------------------------------------------------------

--
-- Structure de la vue `vue_groupes_users`
--
DROP TABLE IF EXISTS `vue_groupes_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue_groupes_users`  AS  select `tb_ca_assets`.`asset_id` AS `asset_id`,`tb_ca_assets`.`asset_fullname` AS `asset_fullname`,`tb_ca_assets`.`asset_login` AS `asset_login`,`tb_ca_assets`.`asset_password` AS `asset_password`,`tb_ca_assets`.`asset_type` AS `asset_type`,`tb_ca_assets`.`group_sid` AS `group_sid`,`tb_ca_assets`.`asset_email` AS `asset_email`,`tb_ca_assets`.`asset_phone` AS `asset_phone`,`tb_ca_assets`.`asset_theme_default` AS `asset_theme_default`,`tb_ca_assets`.`asset_theme_session` AS `asset_theme_session`,`tb_ca_assets`.`asset_statut` AS `asset_statut`,`tb_ca_assets`.`asset_date_created` AS `asset_date_created`,`tb_ca_assets`.`asset_last_login` AS `asset_last_login`,`tb_ca_assets`.`asset_last_update` AS `asset_last_update`,`tb_ca_assets`.`asset_biography` AS `asset_biography`,`tb_ca_assets`.`asset_avatar` AS `asset_avatar`,`tb_ca_assets`.`asset_role` AS `asset_role`,`tb_ca_assets`.`asset_profession` AS `asset_profession`,`tb_ca_assets`.`asset_genre` AS `asset_genre`,`tb_ca_assets`.`asset_civilite` AS `asset_civilite`,`tb_ca_assets`.`session_ouverte` AS `session_ouverte`,`tb_ca_assets`.`asset_password_saved` AS `asset_password_saved`,`tb_ca_groups`.`group_id` AS `group_id`,`tb_ca_groups`.`group_name` AS `group_name`,`tb_ca_groups`.`group_privilege` AS `group_privilege`,`tb_ca_groups`.`group_comments` AS `group_comments`,`tb_ca_groups`.`group_date_created` AS `group_date_created`,`tb_ca_groups`.`group_date_update` AS `group_date_update` from (`tb_ca_assets` join `tb_ca_groups`) where (`tb_ca_groups`.`group_id` = `tb_ca_assets`.`group_sid`) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_ca_assets`
--
ALTER TABLE `tb_ca_assets`
  ADD PRIMARY KEY (`asset_id`),
  ADD UNIQUE KEY `user_email` (`asset_email`,`asset_phone`),
  ADD UNIQUE KEY `user_login` (`asset_login`),
  ADD KEY `group_sid` (`group_sid`);

--
-- Index pour la table `tb_ca_avis_clients`
--
ALTER TABLE `tb_ca_avis_clients`
  ADD PRIMARY KEY (`avis_id`);

--
-- Index pour la table `tb_ca_categories`
--
ALTER TABLE `tb_ca_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `tb_ca_comments`
--
ALTER TABLE `tb_ca_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_sid` (`post_sid`);

--
-- Index pour la table `tb_ca_communications`
--
ALTER TABLE `tb_ca_communications`
  ADD PRIMARY KEY (`com_id`);

--
-- Index pour la table `tb_ca_contacts`
--
ALTER TABLE `tb_ca_contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `tb_ca_galeries`
--
ALTER TABLE `tb_ca_galeries`
  ADD PRIMARY KEY (`galerie_id`);

--
-- Index pour la table `tb_ca_groups`
--
ALTER TABLE `tb_ca_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Index pour la table `tb_ca_helps`
--
ALTER TABLE `tb_ca_helps`
  ADD PRIMARY KEY (`help_id`);

--
-- Index pour la table `tb_ca_logs`
--
ALTER TABLE `tb_ca_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Index pour la table `tb_ca_natures_posts`
--
ALTER TABLE `tb_ca_natures_posts`
  ADD PRIMARY KEY (`nature_id`);

--
-- Index pour la table `tb_ca_newsletters`
--
ALTER TABLE `tb_ca_newsletters`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Index pour la table `tb_ca_passswords`
--
ALTER TABLE `tb_ca_passswords`
  ADD PRIMARY KEY (`pass_id`);

--
-- Index pour la table `tb_ca_posts`
--
ALTER TABLE `tb_ca_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `category_sid` (`category_sid`),
  ADD KEY `nature_post_sid` (`nature_post_sid`),
  ADD KEY `post_region` (`post_region`);

--
-- Index pour la table `tb_ca_services`
--
ALTER TABLE `tb_ca_services`
  ADD PRIMARY KEY (`service_id`);

--
-- Index pour la table `tb_cons_consultations`
--
ALTER TABLE `tb_cons_consultations`
  ADD PRIMARY KEY (`cons_id`),
  ADD KEY `malade_concerne` (`malade_concerne`);

--
-- Index pour la table `tb_cons_examens`
--
ALTER TABLE `tb_cons_examens`
  ADD PRIMARY KEY (`examen_id`),
  ADD KEY `malade_concerne` (`malade_concerne`);

--
-- Index pour la table `tb_cons_horaires`
--
ALTER TABLE `tb_cons_horaires`
  ADD PRIMARY KEY (`horaire_id`);

--
-- Index pour la table `tb_cons_malades`
--
ALTER TABLE `tb_cons_malades`
  ADD PRIMARY KEY (`malade_id`);

--
-- Index pour la table `tb_cons_medicaments`
--
ALTER TABLE `tb_cons_medicaments`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `tb_cons_ordonances`
--
ALTER TABLE `tb_cons_ordonances`
  ADD PRIMARY KEY (`ordon_id`),
  ADD UNIQUE KEY `ordonance_numero` (`ordonance_numero`);

--
-- Index pour la table `tb_cons_prescriptions`
--
ALTER TABLE `tb_cons_prescriptions`
  ADD PRIMARY KEY (`prescrip_id`),
  ADD KEY `numero_ordonance` (`numero_ordonance`),
  ADD KEY `produit_prescrit` (`produit_prescrit`);

--
-- Index pour la table `tb_cons_rendezvous`
--
ALTER TABLE `tb_cons_rendezvous`
  ADD PRIMARY KEY (`rdv_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_ca_assets`
--
ALTER TABLE `tb_ca_assets`
  MODIFY `asset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tb_ca_avis_clients`
--
ALTER TABLE `tb_ca_avis_clients`
  MODIFY `avis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_ca_categories`
--
ALTER TABLE `tb_ca_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `tb_ca_comments`
--
ALTER TABLE `tb_ca_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_ca_communications`
--
ALTER TABLE `tb_ca_communications`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_ca_contacts`
--
ALTER TABLE `tb_ca_contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_ca_galeries`
--
ALTER TABLE `tb_ca_galeries`
  MODIFY `galerie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tb_ca_groups`
--
ALTER TABLE `tb_ca_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tb_ca_helps`
--
ALTER TABLE `tb_ca_helps`
  MODIFY `help_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_ca_logs`
--
ALTER TABLE `tb_ca_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_ca_natures_posts`
--
ALTER TABLE `tb_ca_natures_posts`
  MODIFY `nature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `tb_ca_newsletters`
--
ALTER TABLE `tb_ca_newsletters`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_ca_passswords`
--
ALTER TABLE `tb_ca_passswords`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_ca_posts`
--
ALTER TABLE `tb_ca_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `tb_ca_services`
--
ALTER TABLE `tb_ca_services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_cons_consultations`
--
ALTER TABLE `tb_cons_consultations`
  MODIFY `cons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_cons_examens`
--
ALTER TABLE `tb_cons_examens`
  MODIFY `examen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_cons_horaires`
--
ALTER TABLE `tb_cons_horaires`
  MODIFY `horaire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_cons_malades`
--
ALTER TABLE `tb_cons_malades`
  MODIFY `malade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_cons_medicaments`
--
ALTER TABLE `tb_cons_medicaments`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_cons_ordonances`
--
ALTER TABLE `tb_cons_ordonances`
  MODIFY `ordon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tb_cons_prescriptions`
--
ALTER TABLE `tb_cons_prescriptions`
  MODIFY `prescrip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tb_cons_rendezvous`
--
ALTER TABLE `tb_cons_rendezvous`
  MODIFY `rdv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tb_ca_assets`
--
ALTER TABLE `tb_ca_assets`
  ADD CONSTRAINT `tb_ca_assets_ibfk_1` FOREIGN KEY (`group_sid`) REFERENCES `tb_ca_groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_ca_comments`
--
ALTER TABLE `tb_ca_comments`
  ADD CONSTRAINT `tb_ca_comments_ibfk_1` FOREIGN KEY (`post_sid`) REFERENCES `tb_ca_posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_ca_posts`
--
ALTER TABLE `tb_ca_posts`
  ADD CONSTRAINT `tb_ca_posts_ibfk_1` FOREIGN KEY (`category_sid`) REFERENCES `tb_ca_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ca_posts_ibfk_2` FOREIGN KEY (`nature_post_sid`) REFERENCES `tb_ca_natures_posts` (`nature_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_cons_consultations`
--
ALTER TABLE `tb_cons_consultations`
  ADD CONSTRAINT `tb_cons_consultations_ibfk_1` FOREIGN KEY (`malade_concerne`) REFERENCES `tb_cons_malades` (`malade_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_cons_examens`
--
ALTER TABLE `tb_cons_examens`
  ADD CONSTRAINT `tb_cons_examens_ibfk_1` FOREIGN KEY (`malade_concerne`) REFERENCES `tb_cons_malades` (`malade_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tb_cons_prescriptions`
--
ALTER TABLE `tb_cons_prescriptions`
  ADD CONSTRAINT `tb_cons_prescriptions_ibfk_1` FOREIGN KEY (`numero_ordonance`) REFERENCES `tb_cons_ordonances` (`ordon_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_cons_prescriptions_ibfk_2` FOREIGN KEY (`produit_prescrit`) REFERENCES `tb_cons_medicaments` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
