-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jul-2021 às 19:56
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site_briosa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `idEnviou` int(11) NOT NULL,
  `idRecebeu` int(11) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id`, `idEnviou`, `idRecebeu`, `mensagem`, `data`) VALUES
(674, 78, 1, 'dsa', '2021-06-20 13:33:19'),
(675, 1, 78, 'ds', '2021-06-20 13:33:26'),
(676, 78, 1, 'ds', '2021-06-20 13:36:28'),
(677, 78, 1, 'dsa', '2021-06-20 13:37:01'),
(678, 78, 1, 'gdr', '2021-06-20 13:39:30'),
(679, 78, 1, 'ds', '2021-06-20 13:41:54'),
(680, 78, 1, 'fsd', '2021-06-20 13:44:30'),
(681, 78, 1, 'ds', '2021-06-20 13:46:18'),
(682, 78, 1, 'sdfdf', '2021-06-20 13:46:35'),
(683, 78, 1, 'dada', '2021-06-20 13:47:24'),
(684, 78, 1, 'dasda', '2021-06-20 13:48:27'),
(686, 1, 78, 'das', '2021-06-20 13:50:57'),
(694, 78, 1, 'sd', '2021-06-20 14:13:59'),
(696, 1, 78, 'dsa', '2021-06-20 14:20:19'),
(707, 1, 78, 'dasdasd', '2021-06-20 15:30:48'),
(708, 1, 78, 'dasdas', '2021-06-20 15:32:18'),
(714, 31, 1, 'fdfsd', '2021-06-24 10:18:34'),
(715, 32, 1, 'dasdasdad', '2021-06-24 10:18:56'),
(716, 94, 1, 'tamos como', '2021-06-24 10:19:46'),
(717, 1, 94, 'fsdf', '2021-06-24 10:20:21'),
(719, 1, 32, 'ykjhjgjkhjgjghjghjghjvhjg', '2021-06-24 10:27:35'),
(720, 94, 1, 'Obrigado pela ajuda!', '2021-06-24 10:31:00'),
(721, 1, 32, 'não faz mal', '2021-06-24 10:31:11'),
(722, 1, 31, 'Para comprar algo basta ir as nossas lojas', '2021-06-24 10:31:32'),
(724, 94, 1, 'dsadasdasdadasdasdadadasdas', '2021-06-24 10:47:05'),
(731, 105, 1, 'Hello, boa tarde', '2021-06-25 16:12:19'),
(732, 1, 105, 'olá chico zé', '2021-06-25 16:13:11'),
(733, 1, 105, 'com estás?', '2021-06-25 16:13:15'),
(734, 105, 1, 'O meu querido filho Gonçalinho está em linha ', '2021-06-25 16:14:20'),
(735, 1, 105, 'claro que estou', '2021-06-25 16:15:24'),
(736, 106, 1, 'Ola', '2021-06-25 16:17:56'),
(737, 1, 106, 'ola leal', '2021-06-25 16:17:59'),
(738, 1, 106, 'tas boa', '2021-06-25 16:18:03'),
(739, 106, 1, 'sim', '2021-06-25 16:18:09'),
(740, 106, 1, ':)', '2021-06-25 16:18:12'),
(741, 105, 1, 'Vou para a baliza', '2021-06-25 16:18:42'),
(742, 1, 106, 'fsfsdf', '2021-06-25 16:21:29'),
(743, 1, 105, 'golooo', '2021-06-25 16:21:50'),
(744, 105, 1, 'Defendi em cima do risco', '2021-06-25 16:22:48'),
(745, 1, 105, 'toni', '2021-06-25 16:24:02'),
(746, 105, 1, 'Pontapé de baliza', '2021-06-25 16:24:33'),
(747, 1, 105, 'tonho da avó', '2021-06-25 16:26:30'),
(748, 1, 105, 'já puseste um numero na tua camisola?', '2021-06-25 16:26:46'),
(750, 105, 1, 'Está o 1', '2021-06-25 16:37:12'),
(751, 107, 1, 'ol+a', '2021-06-25 17:11:41'),
(752, 107, 1, 'olá', '2021-06-25 17:11:43'),
(753, 1, 107, 'tas bom', '2021-06-25 17:24:33'),
(754, 1, 107, '?', '2021-06-25 17:24:35'),
(755, 1, 107, 'david', '2021-06-25 17:25:57'),
(756, 1, 107, 'manda esse gajo pro crl', '2021-06-25 17:26:03'),
(757, 107, 1, 'oixoklz<x', '2021-06-25 17:26:15'),
(758, 107, 1, 'ol<', '2021-06-25 17:26:15'),
(759, 107, 1, 'zsu xclpa', '2021-06-25 17:26:17'),
(760, 107, 1, 'desculpa', '2021-06-25 17:26:20'),
(761, 107, 1, 'desculpaa', '2021-06-25 17:26:30'),
(762, 107, 1, 'adasd', '2021-06-25 17:26:37'),
(763, 107, 1, 'desculçpaaaaa', '2021-06-25 17:26:43'),
(764, 107, 1, 'administrador', '2021-06-25 17:26:48'),
(765, 107, 1, 'qwdqwdqawqa', '2021-06-25 17:27:18'),
(768, 107, 1, 'gronelandia', '2021-06-25 17:27:34'),
(810, 77, 1, '<h1>dasdadad</h1>', '2021-06-26 14:14:20'),
(811, 77, 1, '<br>', '2021-06-26 14:14:24'),
(812, 77, 1, 'Rui Borges em antevisão do jogo diz sentir a equipa confiante e com vontade de passar por cima desta má fase. E no final deixa a seguinte mensagem \"É um grupo de trabalho que diariamente é excecional”.', '2021-06-26 14:20:01'),
(813, 106, 1, 'ola geraldes', '2021-06-26 20:17:15'),
(814, 77, 1, 'Somos briosa ', '2021-06-27 15:39:03'),
(815, 77, 1, 'Ddghh', '2021-06-27 21:03:37'),
(816, 108, 1, 'Bom dia!', '2021-06-28 09:24:30'),
(817, 108, 1, '', '2021-06-28 09:24:30'),
(818, 108, 1, 'Já se sabe quando vai começar a nova temporada?', '2021-06-28 09:24:50'),
(819, 108, 1, ':)', '2021-06-28 09:25:00'),
(820, 1, 108, 'Ainda não', '2021-06-28 13:27:11'),
(821, 109, 1, 'ola', '2021-06-28 13:36:16'),
(822, 1, 109, 'fode te oh puta', '2021-06-28 13:36:27'),
(823, 109, 1, 'fode tu', '2021-06-28 13:37:04'),
(824, 1, 109, 'es tao lindo', '2021-06-28 13:37:16'),
(825, 1, 110, 'Deves querer apanhar', '2021-06-28 13:38:02'),
(826, 1, 110, 'Deves querer apanhar', '2021-06-28 13:38:02'),
(827, 77, 1, '<h1>dsadas</h1> <br> <span>asdads</span>', '2021-06-28 19:19:49'),
(828, 1, 77, 'Djdhfhdj', '2021-06-29 09:09:30'),
(829, 77, 1, '<h1>dsdas</h1>', '2021-06-29 09:20:39'),
(830, 1, 77, 'dasdasd', '2021-07-01 15:21:09'),
(831, 1, 77, 'dsadsa', '2021-07-01 15:38:38'),
(832, 1, 77, 'fds', '2021-07-01 15:46:02'),
(833, 1, 110, 'df', '2021-07-01 15:46:49'),
(834, 1, 108, 'ds', '2021-07-01 15:59:19'),
(835, 1, 77, 'dasdasdas', '2021-07-01 15:59:37'),
(836, 1, 77, 'uhj0ohjhj0', '2021-07-01 16:02:39'),
(837, 1, 77, 'bvbv', '2021-07-01 16:07:48'),
(838, 77, 1, 'ok', '2021-07-02 10:18:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipaproj`
--

CREATE TABLE `equipaproj` (
  `id` int(11) NOT NULL,
  `alcunha` varchar(500) NOT NULL,
  `primN` varchar(500) NOT NULL,
  `ultiN` varchar(500) NOT NULL,
  `posicao` varchar(500) NOT NULL,
  `nacionalidade` varchar(500) NOT NULL,
  `naturalidade` varchar(500) NOT NULL,
  `clubeAnterior` varchar(500) NOT NULL,
  `dataNasc` date NOT NULL,
  `dataPrim` varchar(500) NOT NULL,
  `numero` int(100) NOT NULL,
  `foto` text NOT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipaproj`
--

INSERT INTO `equipaproj` (`id`, `alcunha`, `primN`, `ultiN`, `posicao`, `nacionalidade`, `naturalidade`, `clubeAnterior`, `dataNasc`, `dataPrim`, `numero`, `foto`, `banner`) VALUES
(1, 'Daniel', 'Daniel', 'Azevedo', 'guarda-redes', 'Portugal', 'Lisboa', 'SL Benfica', '1998-12-12', '', 1, 'jogadores/3166f8cfec714d34ecafe162aefd7df3c0697bf01926b999bea82985984df5621-daniel-azevedo.png', 'bannerJ/d6f50e35aa7eeaf38b713b6c9454a0c367585182_431745797433750_7822510662454235947_n.jpg'),
(2, 'Mika', 'Michael', 'Domingues', 'guarda-redes', 'Portugal', 'Yverdon', 'Belenenses SAD', '1991-03-08', '', 91, 'jogadores/970b709bf4cd7abacc3f207b10a500df650024_med__20200131113526_mika.png', 'bannerJ/1a64ef3603dfb99cb84a1c32c942799f495692_med_treino_belenenses_2018_2019.jpg.jpg'),
(4, 'João', 'João', 'Simões', 'defesa', 'Portugal', '', 'Anadia FC', '1998-03-04', '', 22, 'jogadores/3a35d5da5e8b7b19a7392b08a1c1b1de14pjoao-simoesresultado.jpg', 'bannerJ/51016f8a7332509e6264f3dd9a816fbaf6fae409-a167-4fbd-8ef8-39fe805dff78.jpg'),
(6, 'Dias', 'Ricardo', 'Dias', 'médio', 'Portugal', 'Aveiro', 'Académica OAF', '1991-02-25', '', 6, 'jogadores/7423431dee00d4a8ab11dc93d0e428366-ricardo-dias.png', 'bannerJ/bb265c6d1c259b200f372bc68589e29b1024.jfif'),
(26, 'Galvanito', 'Alexandre', 'Galvanito', 'guarda-redes', 'Portugal', 'Lagos', 'Académica OAF', '2001-06-02', '', 24, 'jogadores/1ac8e9f44a5942e5f6b5f4723e34f7d72000_5ff46521cf74a.png', 'bannerJ/264ba4769d9b93f785977763bb8f83d1112109757_1645803152249137_1781746015299059407_n.jpg'),
(27, 'Stojkovic', 'Vladimir', 'Stojkovic', 'guarda-redes', 'Portugal', 'Leça da Palmeira', 'Leixões SC', '1996-10-04', '', 21, 'jogadores/b87d36b261c4331b0df41b7dc15bae06stojkovic-2.jpg', 'bannerJ/3427630895ed2d3c418b285c6f660571151413548_899888434171878_1437290965294583136_n.jpg'),
(31, 'Mike', 'Micael', 'Moura', 'defesa', 'Portugal', 'Grenoble (França)', 'Académica OAF', '1989-10-01', '', 23, 'jogadores/ee1e40638527507bb15051f455ec27d923-mike.png', 'bannerJ/ae06b62cdeab5f3afed6c0b349bcf8c9Sem Título.png'),
(32, 'ZéCastro', 'José', 'Castro', 'defesa', 'Portugal', 'Coimbra', 'Académica OAF', '1983-01-13', '', 83, 'jogadores/2ca42206d237ca6c3e8a5a634278effc83-ze-ue-castro.png', 'bannerJ/bb3f9458136fb0a6d2f15ce018f0bc49ZÉcastroREC.jpg'),
(33, 'Fabiano', 'Fabiano', 'Silva', 'defesa', 'Brasil', 'Presidente Prudente', 'SC Braga', '2000-03-14', '', 80, 'jogadores/70b059ff7b8f69a15cce133034ba58dbfabiano.png', 'bannerJ/11da2815b927eef3cf8f9f0b0cd241cbimg_1280x720$2021_01_27_19_00_13_1808017.jpg'),
(34, 'Kay', 'Kay', '', 'defesa', 'Cabo Verde', 'Nossa senhora da Luz', 'FCU Cluj', '1988-01-05', '', 31, 'jogadores/8862153b1e8ec5ecffcf24e1e4bfd305kay.png', 'bannerJ/77c162a771072707465f04d4c6d2a6bdSem Título.png'),
(35, 'Silvério', 'Silvério', 'Silva', 'defesa', 'Portugal', 'Caxinas', 'Varzim SC', '1995-12-26', '', 4, 'jogadores/739d899c2666ac2e3328d6a843e596fc4-silve-uerio.png', 'bannerJ/147ab6e8af6165b98e1cba491a3570b0Sem Título.png'),
(37, 'Peixoto', 'Afonso', 'Peixoto', 'defesa', 'Portugal', 'Coimbra', 'Académica OAF', '2003-01-31', '', 3, 'jogadores/80e7e3b985df0a4fb396fe624db224203-afonso-peixoto.png', 'bannerJ/4b0c20b0138e5b9c25af5b715cd6dd36l-6-e1590708746296.jpg'),
(39, 'Rafael', 'Rafael', 'Vieira', 'defesa', 'Portugal', 'Vieira do Minho', 'SC Farense', '1992-07-09', '', 33, 'jogadores/22cedfea841a1c7874322cf79405723933-rafael-vieira.png', 'bannerJ/16ea1186c77dd344c2fd46c0ea1d4b25Sem Título.png'),
(40, 'Teles', 'Bruno', 'Teles', 'defesa', 'Brasil', 'Alvorada', 'FC Paços', '1986-05-01', '', 5, 'jogadores/af0ab024fe1f95343adf858d30c5989c5-bruno-teles.png', 'bannerJ/fc06b3ad3cef619f2e48a66f561f2176WhatsApp-Image-2020-10-11-at-12.22.46-761x492.jpeg'),
(41, 'Fábio', 'Fábio', 'Vianna', 'defesa', 'Portugal', 'Vila Real', 'SC Braga', '1998-10-08', '', 13, 'jogadores/02f80db72f9f19b2d332784686ae2f4513-fa-uebio-vianna.png', 'bannerJ/b09f40636795227c8c80576066c0cba1160378763_122277723199332_9037665556691130286_n.jpg'),
(42, 'Mimito', 'Mimito', 'Biai', 'médio', 'Portugal', 'Bissau', 'Panetolikos', '1997-12-12', '', 88, 'jogadores/ade29cb2c91a282c0f3c5aa9dc98874b88-mimito.png', 'bannerJ/3ab27b3719a8e9168a5a50dc189afc1dSem Título.png'),
(43, 'Diogo', 'Diogo', 'Pereira', 'médio', 'Portugal', 'Matosinhos', 'Anadia FC', '1995-12-18', '', 16, 'jogadores/e9f7c1edff2b2e70b4622be4c927e2db16-diogo-pereira.png', 'bannerJ/65abd47e48ea613dd60a49602b2dd596704977_med_ligapro_cova_da_piedade_x_academica.jpg.jpg'),
(44, 'Xavi', 'Xavier ', 'Venâncio', 'médio', 'Portugal', 'Mafra', 'Académica OAF', '1999-05-29', '', 14, 'jogadores/676c58430ff812e1bc591e389a2b707814-xavi.png', 'bannerJ/003bad1612445bf8cb3cfa42c9a4dc7eSem Título.png'),
(45, 'Chaby', 'Felipe', 'Chaby', 'médio', 'Portugal', 'Setúbal', 'Académica OAF', '1994-01-22', '', 70, 'jogadores/7619b904e931ba4ccb5a25d7054ee498chaby.png', 'bannerJ/ed94bcf7cbea203636ba46b801b601daimage.jpg'),
(46, 'Fabinho', 'Fábio ', 'Carvalho', 'médio', 'Portugal', 'Santa Maria da Feira', 'UD Oliveirense', '1994-12-21', '', 27, 'jogadores/b8dde6721ba330bbf7b135039a5f9ff927-fabinho.png', 'bannerJ/f03d9f79608285ab03433682456f42f3Sem Título.png'),
(48, 'Gabriel', 'Luiz', 'Gabriel', 'médio', 'Brasil', 'Rio de Janeiro', 'Giugliano', '1994-09-01', '', 19, 'jogadores/f7cbc9a19f3a16df7a7f2bc3ef51089bgabriel.png', 'bannerJ/fcc67c9bdabf81403ba354d09d1f50beSem Título.png'),
(49, 'Pedro', 'Pedro', 'Pinto', 'médio', 'Portugal ', 'Santo Estêvão', 'Académica OAF', '2000-01-08', '', 8, 'jogadores/32ffcbeae859531158d87ae897955c598-pedro-pinto.png', 'bannerJ/7127554114681b83fbc1de85ba9e4874Sem Título.png'),
(50, 'Guima', 'Ricardo ', 'Guima', 'médio', 'Portugal', 'Aveiro', 'Lodzki', '1995-11-11', '', 95, 'jogadores/2c2e09ea9b6ba26d8e82c12414b27a1021pguimaresultado.jpg', 'bannerJ/616331906bf2838399221650c3f78b0f156884197_755929101725057_1269491268471663058_n.jpg'),
(51, 'Dani', 'Daniel ', 'Costa', 'atacante', 'Portugal', 'Anadia', 'Académica OAF', '2000-09-01', '', 9, 'jogadores/05746b6b52af729fa6398224626eecd49-dani.png', 'bannerJ/2519938dd51c8fd3b398db0a9778c367Sem Título.png'),
(53, 'Traquina', 'João ', 'Traquina', 'atacante', 'Portugal', 'Coimbra', 'Académica OAF', '1988-08-29', '', 20, 'jogadores/994a6b4371a919556af34b81a6954c4120-traquina.png', 'bannerJ/cd38b98ccb615f5b556f9407fb701e3dnaom_5e404262bf99f.jpg'),
(54, 'João ', 'João ', 'Mário', 'atacante', 'Guiné-Bissau', 'Bissau', 'Académico de Viseu FC', '1993-10-11', '', 7, 'jogadores/a1643e469c3a7bfa2f6d46df09328ab67-joa-ao-ma-uerio.png', 'bannerJ/05aab4a226d4a144071ce57a258e9e27Sem Título.png'),
(55, 'Mayambela', 'Mihlali', 'Mayambela', 'atacante', 'África do Sul', 'Cape town', 'Bnei Yehuda', '1996-08-25', '1996-08-25', 29, 'jogadores/e31afd46c72c3a0f85aeb03ecd7fbc90mayambela.png', 'bannerJ/fc0f1b7e70b303d69fd6fc033a29f6b2Sem Título.png'),
(56, 'Bouldini', 'Mohamed', 'Bouldini', 'atacante', 'Marrocos', 'Casablanca', 'UD Oliveirense', '1995-11-27', '', 10, 'jogadores/bee36c25926c515fd10685cdd46cfe9210-bouldini.png', 'bannerJ/763bebddf8b3d2115c0afbfa6c0c7e5eimg_1280x720$2021_02_03_01_19_10_1810867.jpg'),
(57, 'Furtado', 'Rafael', 'Furtado', 'atacante', 'Brasil', 'Taubaté', 'Concórdia', '1999-12-09', '', 99, 'jogadores/93eebadae5e4591835df7f2a1657ca7b99-rafael-furtado.png', 'bannerJ/37c6d127594eb2cdc261d31e55d9fd15Sem Título.png'),
(58, 'Sanca', 'Leandro', 'Sanca', 'atacante', 'Portugal', 'Lisboa', 'SC Braga', '2000-01-04', '', 11, 'jogadores/72be2a53ee567a4cfe5d1fbcfc6ea72dsanca.png', 'bannerJ/0ba81010630b7f6ee49d2e71029dde34img_920x518$2020_10_24_13_40_25_1770266.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipaprot`
--

CREATE TABLE `equipaprot` (
  `id` int(11) NOT NULL,
  `primN` varchar(500) NOT NULL,
  `ultiN` varchar(500) NOT NULL,
  `idade` int(100) NOT NULL,
  `nacionalidade` varchar(500) NOT NULL,
  `dataNasc` varchar(500) NOT NULL,
  `dataPrim` varchar(500) NOT NULL,
  `foto` text NOT NULL,
  `tipoTreinador` varchar(500) NOT NULL,
  `banner` text NOT NULL,
  `naturalidade` varchar(500) NOT NULL,
  `clubeAnterior` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipaprot`
--

INSERT INTO `equipaprot` (`id`, `primN`, `ultiN`, `idade`, `nacionalidade`, `dataNasc`, `dataPrim`, `foto`, `tipoTreinador`, `banner`, `naturalidade`, `clubeAnterior`) VALUES
(1, 'Rui', 'Borges', 39, 'Portugal ', '1973-12-14', '', 'treinadores/063dbaf47e3e7fca3d10fe43f4ede1eeimg_920x518$2020_11_07_19_45_24_1776231.jpg', 'Treinador P.', 'bannerT/f3854466fd36f14f86fcef58ea8a80b2img_920x518$2020_11_07_19_45_24_1776231.jpg', 'Lisboa', 'A. Viseu FC'),
(2, 'Ricardo', 'Chaves', 43, 'Portugal', '1977-10-27', '', 'treinadores/6129f6b61f12b11797c5828c6a1f9bfb19818_ricardo_chaves.png', 'Treinador A.', '', 'Valpaços', 'A. Viseu FC'),
(6, 'Fernando', 'Morato', 25, 'Portugal', '1995-07-04', '', 'treinadores/e3434835fa3eefce0120548dd913bcfcScreenshot 2019-03-07 09.28.30 (1).png', 'Treinador A.', '', 'Bragança', 'A. Viseu FC'),
(7, 'José', 'Pedro', 28, 'Portugal', '1992-06-01', '', 'treinadores/4d65932e8d2f6fb1953d2062a7f6ecb233347_ze_pedro.jpg', 'Treinador A.', '', 'Mirandela', 'A. Viseu FC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `imagem`, `data`) VALUES
(1, 'afssdadasºldcmnasclkjhasbckjaslhc', 'asx+paskpkmcaspçljc ascoj ascascasc\r\nas', 'imgNoticias/72f2c387f2ded1def6452b8656e9974faacLogo.png', '2021-04-14 23:00:00'),
(3, 'Sub-23 arrasam', '<p>Hoje a nossa equipa de sub-23 goleou frente ao CD Cova da Piedade onde Rafael Furtado teve em destaque com dois golos na partida.</p>\r\n', 'imgNoticias/00c14b868010ac06cac3192d0ae50387triunfo.png', '2021-04-14 23:00:00'),
(4, 'UC está hoje de parabéns', '<p>Universidade de Coimbra chega hoje aos 731 anos de uma bela hist&oacute;ria.</p>\r\n', 'imgNoticias/535368c90d3d5b4cf94ff0ffeadc4e06triunfo.png', '2021-04-14 23:00:00'),
(5, 'Derrota frente ao último classificado ', 'Briosa sofre derrota frente ao ultimo classificado do liga e deixa os dois primeiros classificados fugir, naquele que é um campeonato difícil. ', 'imgNoticias/ed37d0ede12243ce07116eb21a20f885triunfo.png', '2021-04-14 23:00:00'),
(6, 'João Simões é o aniversariante do dia', 'João Simões jogador que está lesionado celebra hoje o seu vigésimo segundo aniversário.\r\nParabéns craque!', 'imgNoticias/36f3cbfe9e28ec26d0e2b927f260f6b4triunfo.png', '2021-04-14 23:00:00'),
(7, 'Rui Borges na antevisão do jogo', '<p>Rui Borges em antevis&atilde;o do jogo diz sentir a equipa confiante e com vontade de passar por cima desta m&aacute; fase. E no final deixa a seguinte mensagem &quot;É um grupo de trabalho que diariamente é excecional&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'imgNoticias/8b8fc8c36698dc52a9f234861e5c4534Sem Título.png', '2021-04-14 23:00:00'),
(8, 'Briosa volta aos triunfos', '<p>Acad&eacute;mica volta aos triunfos e aproxima-se dos l&iacute;deres.</p>\r\n', 'imgNoticias/19053b4156b62735e7ab4e1b65fb631ae7374ad926c919d2d1ee1cea77a0578ftriunfo.png', '2021-01-21 16:50:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`id`, `nome`, `foto`, `link`) VALUES
(9, 'konita minolta', 'parceiros/konicaMinolta.png', 'https://www.konicaminolta.pt/pt-pt'),
(10, 'hospital da luz', 'parceiros/hospital-da-luz.png', 'https://www.hospitaldaluz.pt/pt/'),
(11, 'malo clinic', 'parceiros/maloclinic.png', 'https://maloclinics.com/malo-clinic'),
(16, 'agua penacova', 'parceiros/Penacova.jpg', 'https://www.caldasdepenacova.pt/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrocinadores`
--

CREATE TABLE `patrocinadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `patrocinadores`
--

INSERT INTO `patrocinadores` (`id`, `nome`, `foto`, `link`) VALUES
(22, 'Efapel', 'parceiros/Efapel.png', 'https://www.efapel.pt/pt'),
(23, 'credito agricola', 'parceiros/CAlogo.jpg', 'https://www.creditoagricola.pt/'),
(24, 'automóveis do mondego', 'parceiros/automoveisM.jfif', 'https://automondego.pt/'),
(25, 'playoff', 'parceiros/PL.png', 'https://www.playoff.pt/'),
(26, 'solverde', 'parceiros/solVerde.png', 'https://apostas.solverde.pt/'),
(29, 'grab & go', 'parceiros/grabandgo.png', 'https://www.grabandgo.pt/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `equipaC` text NOT NULL,
  `equipaF` text NOT NULL,
  `equipaCt` varchar(50) NOT NULL,
  `equipaFt` varchar(50) NOT NULL,
  `goloC` int(11) NOT NULL,
  `goloF` int(11) NOT NULL,
  `competicao` text NOT NULL,
  `horario` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `local` varchar(50) NOT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `resultados`
--

INSERT INTO `resultados` (`id`, `equipaC`, `equipaF`, `equipaCt`, `equipaFt`, `goloC`, `goloF`, `competicao`, `horario`, `dia`, `local`, `banner`) VALUES
(1, 'images/equipas/aacLogo.png', 'images/equipas/covilha.png', 'AAC/OAF', 'SCC', 10, 10, 'images/competicoes/liga2.png', '20:00', '2021-03-17', 'Estádio Cidade De Coimbra', 'imgIndex/cce111d0990d80d00cb64e64a0f71f3fe804693e27c18c58297caba00a318133imagem.jpg'),
(2, 'images/equipas/porto.png', 'images/equipas/chaves.png', 'FCP', 'GDC', 2, 1, 'images/competicoes/tacadeportugal.png', '11:00', '2021-04-24', 'Estádio Cidade de Coimbra', 'imgIndex/d8bc515ac4a0fcde70d253cdc0ada863155922360_758826088371696_7346774482356165525_n.jpg'),
(3, 'images/equipas/mafra.png', 'images/equipas/aacLogo.png', 'CDM', 'AAC/OAF', 10, 10, 'images/competicoes/liga2.png', '18:00', '2021-05-08', 'Estádio Municipal De Mafra', 'imgIndex/063691c3f6f5b516f6034e9ee1739a8e44d24afeee7be96818036bbf26ebe5c39784397eba86491c946dc5f85997959f147443653_274378994118391_5412719906133979128_n.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub23j`
--

CREATE TABLE `sub23j` (
  `id` int(11) NOT NULL,
  `primN` varchar(500) NOT NULL,
  `ultiN` varchar(500) NOT NULL,
  `idade` int(50) NOT NULL,
  `nacionalidade` varchar(500) NOT NULL,
  `posicao` varchar(500) NOT NULL,
  `dataNasc` varchar(500) NOT NULL,
  `dataPrim` varchar(500) NOT NULL,
  `numero` int(11) NOT NULL,
  `foto` text NOT NULL,
  `alcunha` varchar(500) NOT NULL,
  `naturalidade` varchar(500) NOT NULL,
  `clubeAnterior` varchar(500) NOT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sub23j`
--

INSERT INTO `sub23j` (`id`, `primN`, `ultiN`, `idade`, `nacionalidade`, `posicao`, `dataNasc`, `dataPrim`, `numero`, `foto`, `alcunha`, `naturalidade`, `clubeAnterior`, `banner`) VALUES
(3, 'João ', 'Branco', 0, '', 'defesa', '', '', 0, 'jogadores/b2eebba5e96ece7c9d2384cf6ded43c8', 'João', '', '', ''),
(4, 'André ', 'Santos', 0, '', 'defesa', '', '', 0, 'jogadores/d0608be2ac26b97c962a870c800358ae', 'André ', '', '', ''),
(5, 'Josué', '', 0, '', 'médio', '', '', 0, 'jogadores/384f0a855b0bbd12b2cac2220150a24c', 'Josué', '', '', ''),
(6, 'João', 'Tiago', 0, '', 'defesa', '', '', 0, 'jogadores/7e9b79edcfb32ba50b1eb7606ae133b2', 'João', '', '', ''),
(7, 'Pedro', 'Pinho', 0, '', 'médio', '', '', 0, 'jogadores/f8bc2f353ec4842d5a3d03c918aafb21', 'Pedro', '', '', ''),
(8, 'Leandro', '', 0, '', 'atacante', '', '', 0, 'jogadores/1706f4d399c2d2577b5ab15dd4076416', 'Leandro', '', '', ''),
(9, 'Tomás', '', 0, '', 'atacante', '', '', 0, 'jogadores/61c5c3847ec335579f9a73a62adb69c1', 'Tomás', '', '', 'bannerJ/ac5a527274b23aea8d3e4b81bcf7dd9cimg_920x518$2020_11_07_19_45_24_1776231.jpg'),
(11, 'Pedro', 'Francisco', 21, '', 'guarda-redes', '2000-06-13', '', 0, 'jogadores/ac19003af42eece31604b24b804ef40faacLogo.png', 'Pedro', '', '', ''),
(14, 'Lucas', '', 0, '', 'guarda-redes', '', '', 0, 'jogadores/116bd3f471a9118b6525b012fa23d6a7aacLogo.png', 'Lucas', '', '', ''),
(16, 'Rudi', '', 0, '', 'defesa', '', '', 0, 'jogadores/700ead208e368360c2b91f80bb1a35c3', 'Rudi', '', '', ''),
(17, 'Rodrigo', 'Luis', 0, '', 'defesa', '', '', 0, 'jogadores/31a4b4f6706c6627c0b1d9163e2fb65e', 'Rodrigo', '', '', ''),
(18, 'Afonso', 'Arcanjo', 0, '', 'defesa', '', '', 0, 'jogadores/abfd6cc6b75c2c60615bf64944301467', 'Arcanjo', '', '', ''),
(19, 'Miguel', 'Ventura', 0, '', 'defesa', '', '', 0, 'jogadores/99c70a72ca2d533fb90e5aa2fe857141', 'Ventura', '', '', ''),
(21, 'Manga', '', 0, '', 'defesa', '', '', 0, 'jogadores/83e54ed3e48f1d715bd637a203bf1404', 'Manga', '', '', ''),
(23, 'Victor', '', 0, '', 'defesa', '', '', 0, 'jogadores/d2a569a737ed010b6918b32dfda7494e', 'Victor', '', '', ''),
(25, 'Pablo', '', 0, '', 'defesa', '', '', 0, 'jogadores/dfc7b7e1a996bc20496aecfca82d6aa5', 'Pablo', '', '', ''),
(26, 'Zé', ' Maria ', 0, '', 'médio', '', '', 0, 'jogadores/5245f7d6d874a5b0cf877d9e71367afb', 'Zé', '', '', ''),
(27, 'Vasco', '', 0, '', 'médio', '', '', 0, 'jogadores/e4f01e97a83da522ac288a092f6ffc9b', 'Vasco', '', '', ''),
(29, 'Ricardo', 'Ferreira', 0, '', 'médio', '', '', 0, 'jogadores/96e510a1cf0e3abb17cb51b794b2b081', 'Ricardo', '', '', ''),
(31, 'Rafinha', '', 0, '', 'médio', '', '', 0, 'jogadores/93f4a84a4db44d736cedf03883ebeff5', 'Rafinha', '', '', ''),
(33, 'Genino', '', 0, '', 'médio', '', '', 0, 'jogadores/6ca2f56d5c99f5720b28e12a37bd0d5d', 'Genino', '', '', ''),
(36, 'Flávio', '', 0, '', 'atacante', '', '', 0, 'jogadores/02c2274d6d2481de27560216a7578439', 'Flávio', '', '', ''),
(37, 'Diogo', '', 0, '', 'atacante', '', '', 0, 'jogadores/ade9002439f0fcf76787f902ec9e79dd', 'Diogo', '', '', ''),
(38, 'Xavi', '', 0, '', 'atacante', '', '', 0, 'jogadores/8ca016e71b9fa66f83d1122014819423', 'Xavi', '', '', ''),
(39, 'Tito', '', 0, '', 'atacante', '', '', 0, 'jogadores/3e2b0f5d9be45744b9764d16178a29c8', 'Tito', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub23t`
--

CREATE TABLE `sub23t` (
  `id` int(11) NOT NULL,
  `primN` varchar(500) NOT NULL,
  `ultiN` varchar(500) NOT NULL,
  `idade` int(11) NOT NULL,
  `nacionalidade` varchar(500) NOT NULL,
  `dataNasc` varchar(500) NOT NULL,
  `dataPrim` varchar(500) NOT NULL,
  `foto` text NOT NULL,
  `tipoTreinador` varchar(500) NOT NULL,
  `naturalidade` varchar(500) NOT NULL,
  `clubeAnterior` varchar(500) NOT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sub23t`
--

INSERT INTO `sub23t` (`id`, `primN`, `ultiN`, `idade`, `nacionalidade`, `dataNasc`, `dataPrim`, `foto`, `tipoTreinador`, `naturalidade`, `clubeAnterior`, `banner`) VALUES
(3, 'Miguel', 'Miguel', 21, ' Carvalho', '1994-06-16', '', 'treinadores/e0499b5c2f8ec7f67ff68df02fe22e90aacLogo.png', 'fsdfsd', 'fsdfsd', 'fsdfsd', ''),
(5, 'Alexandre', 'Alexandre', 0, ' Coelho', '', '', 'jogadoresP/6b9489c731b3414cd688963a8aa335cf', 'Treinador Adjunto', '', '', ''),
(6, 'Matheus', 'Mendes', 0, '', '', '', 'jogadoresP/29d1dcdaa5f2d3c2f9f3a4884fa8fc54', '', '', '', ''),
(7, 'Pedro', ' Miguel', 0, '', '', '', 'jogadoresP/cc231f0d8bdaab8eb323ce40de4868a7', '', '', '', ''),
(8, 'Vítor', 'Alves', 0, '', '', '', 'jogadoresP/8c0ffe9ff36f4041b07ec4e7d9030e27', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id_utilizador` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL DEFAULT 'fotosUtilizadores/default.png',
  `numero` int(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `primeiro_nome` varchar(100) NOT NULL,
  `ultimo_nome` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipoUtilizador` varchar(10) NOT NULL DEFAULT 'normal',
  `estado` varchar(10) NOT NULL DEFAULT 'ativo',
  `vkey` varchar(45) NOT NULL,
  `verificacao` tinyint(4) NOT NULL DEFAULT 0,
  `ultimaMsg` int(11) NOT NULL DEFAULT 0,
  `dataChat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id_utilizador`, `foto`, `numero`, `username`, `primeiro_nome`, `ultimo_nome`, `mail`, `password`, `tipoUtilizador`, `estado`, `vkey`, `verificacao`, `ultimaMsg`, `dataChat`) VALUES
(9, 'fotosUtilizadores/default.png', 0, 'jõao', 'dasdasd', 'asdasd', 'sdasdas@dsadfa', '1a326de34fc0e3309be71a68694d745e', 'editor', 'inativo', '', 1, 0, '2021-06-20 16:13:48'),
(10, 'fotosUtilizadores/default.png', 0, 'dsasdasd', 'dasdasd', 'asdasdsad', 'dasdasd@wdas', '1a326de34fc0e3309be71a68694d745e', 'admin', 'ativo', '', 1, 0, '2021-06-20 16:13:48'),
(11, 'fotosUtilizadores/default.png', 0, 'dasdas', 'dasdasd', 'dasdasd', 'saond@kfpsaj', '1a326de34fc0e3309be71a68694d745e', 'normal', 'ativo', '', 1, 0, '2021-06-20 16:13:48'),
(13, 'fotosUtilizadores/default.png', 0, 'zebino', 'dasd', 'dasdas', 'dasdasd@fdasf', '1a326de34fc0e3309be71a68694d745e', 'editor', 'inativo', '', 1, 0, '2021-06-20 16:13:48'),
(19, 'fotosUtilizadores/default.png', 0, 'dwef', 'fdsfds', 'fsdfsd', 'fdsfsd@asd', '1a326de34fc0e3309be71a68694d745e', 'normal', 'ativo', '', 1, 0, '2021-06-20 16:13:48'),
(20, 'fotosUtilizadores/default.png', 0, 'asdasdsad', 'dasdasdas', 'dasdasd', 'dsadas@fsafdsa', '1a326de34fc0e3309be71a68694d745e', 'normal', 'ativo', '', 1, 0, '2021-06-20 16:13:48'),
(24, 'fotosUtilizadores/default.png', 0, 'dsadasdasd', 'asdasda', 'asdasd', 'dasdadsa@dsadas', '1a326de34fc0e3309be71a68694d745e', 'normal', 'inativo', '', 1, 0, '2021-06-20 16:13:48'),
(28, 'fotosUtilizadores/default.png', 0, '123', 'gfdsg', 'fsd', 'fsd@fsd', '202cb962ac59075b964b07152d234b70', 'admin', 'ativo', '', 1, 0, '2021-06-20 16:13:48'),
(29, 'fotosUtilizadores/default.png', 0, 'abc', 'dsad', 'das', 'dsa@dsa', '1a326de34fc0e3309be71a68694d745e', 'editor', 'ativo', '', 1, 0, '2021-06-20 16:13:48'),
(30, 'fotosUtilizadores/default.png', 0, '234', 'fdsdsf', 'fsdfs', 'fds@fafs', '1a326de34fc0e3309be71a68694d745e', 'normal', 'ativo', '', 1, 0, '2021-06-20 16:13:48'),
(31, 'fotosUtilizadores/934b50385b6aa94d13b5802403ad47388FE5F1CC-52F3-4595-AB66-5C8E879FC11F.jpeg', 12, 'joao', 'dasdas', 'dasdsd', 'dasdsa@saddas', '202cb962ac59075b964b07152d234b70', 'normal', 'ativo', '9d386c42052d34de46a02249ea476153', 1, 2, '2021-06-25 19:44:14'),
(32, 'fotosUtilizadores/default.png', 12, 'carlitos', 'dasdasd', 'dasdasd', 'kjdasbdbojklas@lksajdabcakslb', '202cb962ac59075b964b07152d234b70', 'normal', 'ativo', 'dfa299aa062f4d9af07bda2f620b42a4', 1, 1, '2021-06-24 12:31:11'),
(77, 'fotosUtilizadores/2f8d857c8b8227becc5c02ff84fa739f1A058241-4C81-4055-BFAC-E82C0C94ECA1.jpeg', 27, 'geraldes', 'Goncalo', 'Geraldes', 'glggeraldes@gmail.com', '1a326de34fc0e3309be71a68694d745e', 'normal', 'ativo', 'b15e82825ac1e037a44c81d345b78c5b', 1, 2, '2021-07-02 12:18:14'),
(78, 'fotosUtilizadores/default.png', 7, 'americo', 'asdasd', 'mario', 'simf', '202cb962ac59075b964b07152d234b70', 'normal', 'ativo', '', 1, 1, '2021-06-20 17:32:18'),
(94, 'fotosUtilizadores/default.png', 0, 'eder1', 'das', 'asda', 'dasda', '202cb962ac59075b964b07152d234b70', 'normal', 'ativo', '', 1, 2, '2021-06-24 12:47:05'),
(101, 'fotosUtilizadores/default.png', 0, 'admin', 'dsa', 'das', 'das', '1a326de34fc0e3309be71a68694d745e', 'adminP', 'ativo', '', 1, 2, '2021-06-20 16:13:48'),
(104, 'fotosUtilizadores/default.png', 14, 'AmericoAlm', 'Bino', 'Ze', 'zitoeder488@gmail.com', '540aa268804bac7be2178fb2ce7f9282', 'normal', 'ativo', '71ff34525829a9a30e6e66517fc06fa9', 1, 0, '2021-06-25 10:35:10'),
(105, 'fotosUtilizadores/1bee96485016a232cdfd012003ea8f6400000PORTRAIT_00000_BURST20180408123359181.jpg', 1, 'FGAFG', 'Fran', 'Geral', 'teleleconta@gmail.com', '8d474065e02aa7c8ea558685890f26b6', 'normal', 'ativo', 'a6af8d00c969a85aadc5ed981ef35ee2', 1, 2, '2021-06-25 18:37:12'),
(106, 'fotosUtilizadores/a148c34299d86757eca37b1c3fc12775214141.png', 15, 'DiogoLeal', 'Diogo', 'Leal', 'diogosilvaleal@live.com.pt', 'aaa5dfb293ef66dddf7e1dd60fe99bd9', 'normal', 'ativo', '0dfafe9914baec81f4744437008a36f0', 1, 2, '2021-06-26 22:17:15'),
(107, 'fotosUtilizadores/3babafc9eb165b6996eec13ed8f156eeezgif-3-83090b4646d6.gif', 19, 'david', 'david', 'quaresma', 'davidfmfq12@gmail.com', 'ec7769bf01a6e8ac368891d81da1849f', 'normal', 'ativo', '25f106c79e4f86b393cd903715d0a6bd', 1, 2, '2021-06-25 19:36:02'),
(108, 'fotosUtilizadores/default.png', 2, 'DaSilva13', 'Dias', 'Silva', 'diasdasilva13cvd@gmail.com', '0eeeacb400030a0622a124b4124fa967', 'normal', 'ativo', 'eb51c0bf64bcdc544a0a024e3404508b', 1, 1, '2021-07-01 17:59:19'),
(109, 'fotosUtilizadores/default.png', 8, 'bestamigo', 'snikky', 'miguel', 'alexsnikky@gmail.com', '7b7443dfa91a4e96f7c753471e8b250d', 'normal', 'ativo', 'a3f9bab09e8a62148c44bdacf3edb9a2', 1, 1, '2021-06-28 15:37:16'),
(110, 'fotosUtilizadores/6f419071940e411b6cb0ee12b255ad15WIN_20200321_22_18_59_Pro.jpg', 4, 'Aribu4', 'Luis', 'Marques', 'aribu12@gmail.com', '26e67e2605ec7271359bb5a7ae429da2', 'normal', 'ativo', '9938ce73251b3f6f09b6a6135ec48b1a', 1, 1, '2021-07-01 17:46:49');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipaproj`
--
ALTER TABLE `equipaproj`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipaprot`
--
ALTER TABLE `equipaprot`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `patrocinadores`
--
ALTER TABLE `patrocinadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sub23j`
--
ALTER TABLE `sub23j`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sub23t`
--
ALTER TABLE `sub23t`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id_utilizador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=839;

--
-- AUTO_INCREMENT de tabela `equipaproj`
--
ALTER TABLE `equipaproj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `equipaprot`
--
ALTER TABLE `equipaprot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `patrocinadores`
--
ALTER TABLE `patrocinadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sub23j`
--
ALTER TABLE `sub23j`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `sub23t`
--
ALTER TABLE `sub23t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
