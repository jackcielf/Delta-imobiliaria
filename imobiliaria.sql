-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/06/2023 às 12:27
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_imovel`
--

CREATE TABLE `tb_imovel` (
  `id_imovel` int(255) NOT NULL,
  `areatotal` int(255) NOT NULL,
  `areacoberta` int(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `valor` int(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `transacao` varchar(255) NOT NULL,
  `classificacao` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `nome_img` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id_usuario` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_imovel`
--

INSERT INTO `tb_imovel` (`id_imovel`, `areatotal`, `areacoberta`, `estado`, `cidade`, `rua`, `valor`, `descricao`, `transacao`, `classificacao`, `referencia`, `nome_img`, `path`, `id_usuario`) VALUES
(25, 100, 500, 'Tocantins', 'Ouro preto', 'Rosario', 10000, '1 quarto com vista para o futuro', 'aluguel', 'apartamento', 'ao lado do shopping', 'apart1.jpg', '../arquivos/644dab1133fe2.jpg', 2),
(35, 300, 500, 'Ceara', 'Paraipaba', 'Beberibe', 3333, 'casa grande', 'compra', 'casa', 'ao lado do shopping', 'casa1.jpg', '../arquivos/6457ec311c2e0.jpg', 2),
(36, 300, 10, 'São Paulo', 'Cracolandia', 'Rosario', 22222, 'casa grande', 'compra', 'casa', 'Proximo a escola da esquina', 'casa1.jpg', '../arquivos/6457ec55c44e1.jpg', 2),
(37, 1000, 10, 'Bahia', 'Paraipaba', 'Sitio Rosario', 40000, '1 quarto com vista para o futuro', 'compra', 'apartamento', 'Proximo ao posto', 'casa1.jpg', '../arquivos/6457ec8942688.jpg', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` int(255) NOT NULL,
  `data_nas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome`, `cpf_cnpj`, `email`, `senha`, `telefone`, `data_nas`) VALUES
(2, 'Alice', '99887766-8', 'alice@admin.com', '1234567', 2147483640, '12/07/2015'),
(3, 'Jack', '12345678-9', 'jack@gmail.com', '12345678', 2147483647, '10/10/2005'),
(4, 'Raissa', '12345678-97', 'raissa@gmail.com', '1234567', 2147483647, '09/08/2006'),
(5, 'Pedro', '4564565656-7', 'pedro@gmail.com', '12345678', 2147483647, '09/08/2005'),
(6, 'Pedro', '456656567-99', 'pedro2@gmail.com', '12345678', 2147483647, '09/09/2090'),
(7, 'Raissa de Oliveira Farias', '33333', 'raissa.farias2@gmail.com', '3333333', 2147483647, '27.08;2005'),
(8, 'Alice', '2226222222', 'alice5@gmail.com', '123456789', 2147483647, '2211111111111'),
(11, 'Lele', '122.222.222-25', 'leticia23@gmail.com', '1234567', 2147483647, '12/12/2000'),
(13, 'alice', '12345678-97', 'ali@gmail.com', '12345678910', 2147483647, '22982000000');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_imovel`
--
ALTER TABLE `tb_imovel`
  ADD PRIMARY KEY (`id_imovel`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_imovel`
--
ALTER TABLE `tb_imovel`
  MODIFY `id_imovel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_imovel`
--
ALTER TABLE `tb_imovel`
  ADD CONSTRAINT `tb_imovel_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
