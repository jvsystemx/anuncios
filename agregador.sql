-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Mar-2021 às 22:34
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agregador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` tinyint(1) UNSIGNED DEFAULT NULL,
  `images_id` varchar(85) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `slugUrl` varchar(255) NOT NULL,
  `visitas` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `fixed` bigint(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` date NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `slugUrl` (`slugUrl`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`id`, `category_id`, `images_id`, `titulo`, `descricao`, `link`, `slugUrl`, `visitas`, `fixed`, `data`, `create_at`, `update_at`) VALUES
(1, 6, NULL, 'Nerd branquinha entrando na vara dura', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://localhost/agregador/post/go/nerd-branquinha-entrando-na-vara-dura', 'nerd-branquinha-entrando-na-vara-dura', 10, 0, '2021-03-02', '2021-03-02 15:33:53', '2021-03-02 15:33:53'),
(2, 2, '9', 'E-mail Marketing Newsletter Em Português + Video Tutorial', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://sort3.tk/email-marketing-sem-segredos', 'e-mail-marketing-newsletter-em-portugues-video-tutorial', 7, 0, '0000-00-00', '2021-03-02 15:41:13', '2021-03-02 15:41:13'),
(3, 1, '5', 'Seja uma revendedora de perfumes importados', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://sort3.tk/segredo-adsesnse', 'seja-uma-revendedora-de-perfumes-importados', 77, 1, '0000-00-00', '2021-03-02 15:41:13', '2021-03-02 15:41:13'),
(4, 6, NULL, 'Rihanna rebolando com sensualidade em seus shows', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://localhost/agregador/post/go/rihanna-rebolando-com-sensualidade-em-seus-shows', 'rihanna-rebolando-com-sensualidade-em-seus-shows', 9, 0, '0000-00-00', '2021-03-02 15:44:29', '2021-03-02 15:44:29'),
(5, 6, NULL, 'Novinha com buceta raspadinha gozando na siririca', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://localhost/agregador/post/go/novinha-com-buceta-raspadinha-gozando-na-siririca', 'novinha-com-buceta-raspadinha-gozando-na-siririca', 4, 0, '0000-00-00', '2021-03-02 15:44:29', '2021-03-02 15:44:29'),
(6, 1, NULL, 'Sobre Joe Biden na presidência dos States', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://localhost/post/go/sobre-joe-biden-na-presidencia', 'sobre-joe-biden-na-presidencia', 0, 0, '0000-00-00', '2021-03-02 15:46:53', '2021-03-02 15:46:53'),
(7, 1, NULL, 'Celebridades que Tiveram Fotos Pessoais Divulgadas na internet', 'É cada vez mais comum, as celebridades terem suas fotos íntimas divulgadas na internet, sejam brasileiras ou de reconhecimento internacional. Confira a lista das estreleas que tiveram fotos pessoais divulgadas na web.', 'http://localhost/agregador/', 'celebridades-que-tiveram-fotos-pessoais-divulgadas-na-internet', 0, 0, '0000-00-00', '2021-03-02 15:51:08', '2021-03-02 15:51:08'),
(8, 4, NULL, 'Realidade Aumentada como Ferramenta', 'Se você assistiu a uma partida de futebol pela televisão nos últimos 10 anos, então provavelmente já conhece um dos usos da realidade aumentada (RA) na publicidade.', 'http://localhost/agregador/', 'realidade-aumentada-como-ferramenta', 3, 1, '0000-00-00', '2021-03-02 15:51:08', '2021-03-02 15:51:08'),
(9, 1, NULL, 'Pressionar Essa Região do Corpo Por 1 Minuto Gera Efeito Impressionante', '', 'http://localhost/agregador/post/go/pressionar-essa-regiao-do-corpo-por-1-minuto-gera-efeito-impressionante', 'pressionar-essa-regiao-do-corpo-por-1-minuto-gera-efeito-impressionante', 0, 0, '0000-00-00', '2021-03-02 15:57:39', '2021-03-02 15:57:39'),
(10, 1, '10', 'teste de agregador de conteúdo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'http://localhost/agregador/post/go/teste-de-agregador-de-conte%C3%BAdo', 'teste-de-agregador-de-conteudo', 31, 0, '0000-00-00', '2021-03-02 15:57:39', '2021-03-02 15:57:39'),
(11, 1, '6', 'Tempos difíceis também criam pessoas fortes ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'http://localhost/agregador/', 'tempos-dificeis-tambem-criam-pessoas-fortes', 7, 0, '0000-00-00', '2021-03-02 16:03:09', '2021-03-02 16:03:09'),
(12, 11, NULL, 'Trailer do Stop-Motion Kubo And The Two Strings', 'Na era do CGI, parece um absurdo um estúdio apostar no Stop-Motion, mas a Laika vem provando que criatividade e bom gosto ainda é combustível suficiente para atrair o público.', 'http://localhost/agregador/', 'trailer-do-stop-motion-kubo-and-the-two-strings.', 50, 0, '0000-00-00', '2021-03-02 16:05:20', '2021-03-02 16:05:20'),
(13, 8, NULL, 'Fabricantes de Cosméticos Choram ao Verem Essas Fotos', 'Todo mundo sabe que maquiagem tem como função embelezar o rosto, mas tem gente que consegue fazer essa ferramenta virar o maior pesadelo de quem vê essas fotos! Veja do que estamos falando.', 'http://localhost/agregador/', 'fabricantes-de-cosmeticos-choram-ao-verem-essas-fotos', 2, 0, '0000-00-00', '2021-03-02 16:05:20', '2021-03-02 16:05:20'),
(14, 4, NULL, 'de-onde-vieram-essas-invencoes.', 'Nós vivemos cercado de invenções, afinal quase tudo que existe a nossa volta é criado pelo homem, desde o piso da sua casa, computador. De onde surgiram algumas das mais incríveis invenções humanas?', 'http://localhost/agregador/', 'de-onde-vieram-essas-invencoes', 0, 0, '0000-00-00', '2021-03-02 16:10:36', '2021-03-02 16:10:36'),
(15, 8, NULL, 'Paródia de Friday com Rebecca Black Brasileira', 'Veja uma divertida e muito engraçada paródia da música Friday, de Rebecca Black, que teve seu vídeo como um dos mais vistos este ano no Youtube. Confira.', 'http://localhost/agregador/', 'parodia-de-friday-com-rebecca-black-brasileira', 1, 0, '0000-00-00', '2021-03-02 16:10:36', '2021-03-02 16:10:36'),
(16, 6, NULL, 'Nerd branquinha entrando na vara dura', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://localhost/agregador/post/go/nerd-branquinha-entrando-na-vara-dura', 'nerd-branquinha-entrando-na-vara-duras', 9, 0, '0000-00-00', '2021-03-02 18:33:53', '2021-03-02 18:33:53'),
(17, 2, '9', 'E-mail Marketing Newsletter Em Português + Video Tutorial', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://sort3.tk/email-marketing-sem-segredos', 'e-mail-marketing-newsletter-em-portugues-video-tutorias', 6, 0, '0000-00-00', '2021-03-02 18:41:13', '2021-03-02 18:41:13'),
(18, 1, '5', 'Seja uma revendedora de perfumes importados', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'http://sort3.tk/segredo-adsesnse', 'seja-uma-revendedora-de-perfumes-importador', 10, 1, '0000-00-00', '2021-03-02 18:41:13', '2021-03-02 18:41:13'),
(19, 1, NULL, 'Boku No pico o melhor anime', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'htt://localhost/post/go/boku-no-pico-o-melhor-anime', 'boku-no-pico-o-melhor-anime', 17, 0, '0000-00-00', '2021-03-02 17:46:07', '2021-03-02 17:46:07'),
(20, 1, NULL, 'Routing php PSR\'s-7 in php ', 'Fast PSR-7 based routing and dispatch component including PSR-15 middleware, built on top of FastRoute. ', 'Fast PSR-7 based routing and dispatch component including PSR-15 middleware, built on top of FastRoute. ', 'route-php-psr-7', 6, 0, '0000-00-00', '2021-03-05 13:02:01', '2021-03-05 13:02:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `slug_category` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `category`, `slug_category`, `create_at`, `update_at`) VALUES
(1, 'Geral', 'geral', '2021-02-23 21:02:08', '2021-02-23 21:02:08'),
(2, 'Promoção', 'promoção', '2021-02-23 21:02:08', '2021-02-23 21:02:08'),
(3, 'Serviços', 'serviços', '2021-02-23 21:02:28', '2021-02-23 21:02:28'),
(4, 'Tecnologia', 'tecnologia', '2021-02-23 21:02:28', '2021-02-23 21:02:28'),
(5, 'Aniversarios', 'aniversarios', '2021-02-23 21:02:53', '2021-02-23 21:02:53'),
(6, 'Adulto', 'adulto', '2021-02-23 21:02:53', '2021-02-23 21:02:53'),
(7, 'Animes', 'animes', '2021-02-23 21:03:44', '2021-02-23 21:03:44'),
(8, 'Humor', 'humor', '2021-02-23 21:03:44', '2021-02-23 21:03:44'),
(9, 'Automóveis', 'automóveis', '2021-02-23 21:04:05', '2021-02-23 21:04:05'),
(10, 'Sites', 'sites', '2021-02-23 21:04:05', '2021-02-23 21:04:05'),
(11, 'Cinema e Tv', 'cinema-e-tv', '2021-03-02 15:19:27', '2021-03-02 15:19:27'),
(12, 'Notícias', 'noticias', '2021-03-02 15:51:55', '2021-03-02 15:51:55'),
(13, 'Política', 'politica', '2021-03-02 16:01:15', '2021-03-02 16:01:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

DROP TABLE IF EXISTS `imagens`;
CREATE TABLE IF NOT EXISTS `imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `image`, `create_at`, `update_at`) VALUES
(1, 'protesto-de-motoristas-de-vans-causa-lentidao-na-zona-sul-de-sp.jpg', '2021-02-23 20:49:48', '2021-02-23 20:49:48'),
(2, 'valve-acaba-com-os-boatos-sobre-half-life-3.jpg', '2021-02-23 20:51:00', '2021-02-23 20:51:00'),
(3, 'site-php-politico-vereador-prefeito-candidato-deputado-2012.jpg', '2021-02-23 20:51:00', '2021-02-23 20:51:00'),
(4, 'promo-o-pintura-digital-desenho-retrato-video-dvd-brinde.jpg', '2021-02-23 20:52:04', '2021-02-23 20:52:04'),
(5, 'seja-uma-revendedora-de-perfumes-importados.jpg', '2021-02-23 20:52:37', '2021-02-23 20:52:37'),
(6, 'tempos-dificeis.jpg', '2021-02-23 20:52:37', '2021-02-23 20:52:37'),
(7, 'script-imobiliaria-em-php-corretores-de-imoveis-portuges-br.jpg', '2021-02-23 20:53:29', '2021-02-23 20:53:29'),
(8, 'mensagens-e-frases-para-o-dia-dos-pais.jpg', '2021-02-23 20:53:29', '2021-02-23 20:53:29'),
(9, 'e-mail-marketing-newsletter-em-portugues-video-tutorial.jpg', '2021-02-23 20:55:02', '2021-02-23 20:55:02'),
(10, 'teste-agregador.png', '2021-02-23 20:55:02', '2021-02-23 20:55:02'),
(11, 'voce-consegue-descobrir-se-e-photoshop.jpg', '2021-02-23 20:55:57', '2021-02-23 20:55:57'),
(12, 'pacote-com-6-lojas-virtuais-em-php-brindes.jpg', '2021-02-23 20:55:57', '2021-02-23 20:55:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `level`, `create_at`, `update_at`) VALUES
(1, 'Fabio', 'teste@teste.com', '0192023a7bbd73250516f069df18b500', 1, '2021-02-24 02:50:28', '2021-02-24 02:50:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
