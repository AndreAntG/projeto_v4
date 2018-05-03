-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2018 às 12:22
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_security`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `accounts`
--

CREATE TABLE `accounts` (
  `id` int(155) NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` text NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `zipcode` text NOT NULL,
  `district` text NOT NULL,
  `client_type` int(11) DEFAULT NULL,
  `balance` varchar(45) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `accounts`
--

INSERT INTO `accounts` (`id`, `status`, `type`, `first_name`, `last_name`, `gender`, `address`, `phone`, `country`, `birthday`, `city`, `zipcode`, `district`, `client_type`, `balance`, `date`, `users_id`) VALUES
(221, 0, 0, 'André', 'Gonçalves', 'Masculino', 'Largo Alto Dos Moinhos', '961254828', 'Portugal', '1988-09-29', 'Queluz', '2745-017', 'Lisboa', 0, '55555€', '2018-05-03 10:14:35', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `operations`
--

CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `accounts_id` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(120) CHARACTER SET latin1 NOT NULL,
  `hash` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `previleges` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `hash`, `username`, `previleges`) VALUES
(1, 'admin@security.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Andre6', 1),
(7, 'andregoncalvesescola@gmail.com', '', NULL, NULL),
(8, 'andregoncalvesescola@gmail.com', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Client_ID` (`id`),
  ADD KEY `fk_accounts_users_idx` (`users_id`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operations_accounts1_idx` (`accounts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `fk_accounts_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `fk_operations_accounts1` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
