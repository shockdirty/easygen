-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 10-Jul-2018 às 16:40
-- Versão do servidor: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.2.7-1+0~20180622080745.23+stretch~1.gbpfd8e2e

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easygen_sys`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eg_categorias`
--

CREATE TABLE `eg_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eg_categorias_produto`
--

CREATE TABLE `eg_categorias_produto` (
  `cat_id` int(6) UNSIGNED NOT NULL,
  `cat_nome` varchar(50) NOT NULL,
  `cat_reg_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eg_categorias_produto`
--

INSERT INTO `eg_categorias_produto` (`cat_id`, `cat_nome`, `cat_reg_data`) VALUES
(12, 'Cervejas', '2018-06-19 11:04:21'),
(13, 'Destilados', '2018-06-19 11:04:35'),
(14, 'Sem Álcool', '2018-06-19 11:05:06'),
(15, 'Sucos', '2018-06-26 10:50:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eg_cliente`
--

CREATE TABLE `eg_cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eg_fornecedor`
--

CREATE TABLE `eg_fornecedor` (
  `forn_id` int(10) UNSIGNED NOT NULL,
  `forn_nome` varchar(255) NOT NULL,
  `forn_email` varchar(255) NOT NULL,
  `forn_telefone` varchar(50) NOT NULL,
  `forn_estado` varchar(50) NOT NULL,
  `forn_cidade` varchar(50) NOT NULL,
  `forn_data_reg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eg_fornecedor`
--

INSERT INTO `eg_fornecedor` (`forn_id`, `forn_nome`, `forn_email`, `forn_telefone`, `forn_estado`, `forn_cidade`, `forn_data_reg`) VALUES
(5, 'Marine', 'marine@teste', '65456456', 'AC', 'SP', '2018-06-15 12:35:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eg_produtos`
--

CREATE TABLE `eg_produtos` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `prod_nome` varchar(255) NOT NULL,
  `prod_desc` varchar(255) NOT NULL,
  `prod_valor_bruto` int(11) NOT NULL,
  `prod_valor_liq` int(11) NOT NULL,
  `prod_data_reg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `prod_cat_id` int(6) NOT NULL,
  `prod_estq_min` int(10) NOT NULL,
  `prod_qtd_estq` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eg_produtos`
--

INSERT INTO `eg_produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_valor_bruto`, `prod_valor_liq`, `prod_data_reg`, `prod_cat_id`, `prod_estq_min`, `prod_qtd_estq`) VALUES
(314, 'Skol 350ml', 'xasxas', 10, 0, '2018-07-10 10:29:54', 12, 0, 40),
(318, 'Jurupinga', 'sadsa', 17, 0, '2018-07-10 09:05:29', 13, 20, 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eg_users`
--

CREATE TABLE `eg_users` (
  `user_id` int(6) UNSIGNED NOT NULL,
  `user_nome` varchar(30) NOT NULL,
  `user_login` varchar(30) DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pwd` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eg_users`
--

INSERT INTO `eg_users` (`user_id`, `user_nome`, `user_login`, `user_email`, `user_pwd`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg_log`
--

CREATE TABLE `reg_log` (
  `log_id` int(6) UNSIGNED NOT NULL,
  `prod_nome` varchar(50) NOT NULL,
  `usr_nome` varchar(30) DEFAULT NULL,
  `log_qtd_item` int(6) NOT NULL,
  `log_status` varchar(10) NOT NULL,
  `reg_date_log` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reg_log`
--

INSERT INTO `reg_log` (`log_id`, `prod_nome`, `usr_nome`, `log_qtd_item`, `log_status`, `reg_date_log`) VALUES
(1, 'Jurupinga', NULL, 45, 'entrada', '2018-07-10 08:35:49'),
(2, 'Jurupinga', NULL, 5, 'saida', '2018-07-10 09:05:29'),
(3, 'Skol 350ml', NULL, 2, 'entrada', '2018-07-10 10:02:18'),
(4, 'Vinho 1LT', NULL, 23, 'entrada', '2018-07-10 10:02:30'),
(5, 'Skol 350ml', '5', 3, 'entrada', '2018-07-10 10:29:54'),
(6, 'Vinho 1LT', 'Marine', 3, 'entrada', '2018-07-10 10:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eg_categorias`
--
ALTER TABLE `eg_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eg_categorias_produto`
--
ALTER TABLE `eg_categorias_produto`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `eg_cliente`
--
ALTER TABLE `eg_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eg_fornecedor`
--
ALTER TABLE `eg_fornecedor`
  ADD PRIMARY KEY (`forn_id`);

--
-- Indexes for table `eg_produtos`
--
ALTER TABLE `eg_produtos`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `eg_users`
--
ALTER TABLE `eg_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reg_log`
--
ALTER TABLE `reg_log`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eg_categorias`
--
ALTER TABLE `eg_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eg_categorias_produto`
--
ALTER TABLE `eg_categorias_produto`
  MODIFY `cat_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `eg_cliente`
--
ALTER TABLE `eg_cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eg_fornecedor`
--
ALTER TABLE `eg_fornecedor`
  MODIFY `forn_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `eg_produtos`
--
ALTER TABLE `eg_produtos`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;
--
-- AUTO_INCREMENT for table `eg_users`
--
ALTER TABLE `eg_users`
  MODIFY `user_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reg_log`
--
ALTER TABLE `reg_log`
  MODIFY `log_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
