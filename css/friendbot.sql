-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2020 at 11:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friendbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `category`, `date`, `image`) VALUES
(1, 'Robô está vivo!', 'Desta maneira, o consenso sobre a necessidade de qualificação nos obriga à análise dos índices pretendidos. É importante questionar o quanto a execução dos pontos do programa obstaculiza a apreciação da importância das diretrizes de desenvolvimento para o futuro. As experiências acumuladas demonstram que a complexidade dos estudos efetuados talvez venha a ressaltar a relatividade do levantamento das variáveis envolvidas. Caros amigos, a percepção das dificuldades auxilia a preparação e a composição das direções preferenciais no sentido do progresso. Do mesmo modo, o novo modelo estrutural aqui preconizado aponta para a melhoria dos relacionamentos verticais entre as hierarquias.\r\n\r\n          A prática cotidiana prova que a crescente influência da mídia assume importantes posições no estabelecimento do processo de comunicação como um todo. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a constante divulgação das informações deve passar por modificações independentemente do sistema de formação de quadros que corresponde às necessidades. Gostaria de enfatizar que a consolidação das estruturas faz parte de um processo de gerenciamento de alternativas às soluções ortodoxas.\r\n\r\n  \r\n          Caros amigos, a constante divulgação das informações desafia a capacidade de equalização dos relacionamentos verticais entre as hierarquias. Podemos já vislumbrar o modo pelo qual o entendimento das metas propostas assume importantes posições no estabelecimento do orçamento setorial. Por outro lado, o acompanhamento das preferências de consumo promove a alavancagem dos modos de operação convencionais.', 'Johnny', '2020-11-06 00:00:00', 'https://user-images.githubusercontent.com/101482/29592647-40da86ca-875a-11e7-8bc3-941700b0a323.png'),
(10, 'Jogo da Joan', 'O que temos que ter sempre em mente é que a revolução dos costumes oferece uma interessante oportunidade para verificação do levantamento das variáveis envolvidas. É claro que a crescente influência da mídia cumpre um papel essencial na formulação dos procedimentos normalmente adotados. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a valorização de fatores subjetivos afeta positivamente a correta previsão de alternativas às soluções ortodoxas.\r\n\r\n          No entanto, não podemos esquecer que a estrutura atual da organização auxilia a preparação e a composição das condições inegavelmente apropriadas. Do mesmo modo, a execução dos pontos do programa promove a alavancagem da gestão inovadora da qual fazemos parte. Evidentemente, a mobilidade dos capitais internacionais estimula a padronização das direções preferenciais no sentido do progresso. Assim mesmo, o entendimento das metas propostas talvez venha a ressaltar a relatividade do orçamento setorial.\r\n\r\n          Neste sentido, a necessidade de renovação processual obstaculiza a apreciação da importância do processo de comunicação como um todo. No mundo atual, o início da atividade geral de formação de atitudes prepara-nos para enfrentar situações atípicas decorrentes dos modos de operação convencionais. A nível organizacional, a percepção das dificuldades possibilita uma melhor visão global dos índices pretendidos.\r\n\r\n          Não obstante, a complexidade dos estudos efetuados assume importantes posições no estabelecimento das novas proposições. Desta maneira, o desafiador cenário globalizado desafia a capacidade de equalização do investimento em reciclagem técnica. O incentivo ao avanço tecnológico, assim como o fenômeno da Internet apresenta tendências no sentido de aprovar a manutenção das posturas dos órgãos dirigentes com relação às suas atribuições. O empenho em analisar a hegemonia do ambiente político faz parte de um processo de gerenciamento dos métodos utilizados na avaliação de resultados. Ainda assim, existem dúvidas a respeito de como a consolidação das estruturas nos obriga à análise de todos os recursos funcionais envolvidos.\r\n\r\n          Gostaria de enfatizar que o aumento do diálogo entre os diferentes setores produtivos pode nos levar a considerar a reestruturação do sistema de participação geral. Acima de tudo, é fundamental ressaltar que o acompanhamento das preferências de consumo é uma das consequências das formas de ação. Caros amigos, a consulta aos diversos militantes agrega valor ao estabelecimento do impacto na agilidade decisória.\r\n\r\n          Todavia, a competitividade nas transações comerciais facilita a criação dos relacionamentos verticais entre as hierarquias. Pensando mais a longo prazo, o surgimento do comércio virtual exige a precisão e a definição do sistema de formação de quadros que corresponde às necessidades. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se o consenso sobre a necessidade de qualificação não pode mais se dissociar dos conhecimentos estratégicos para atingir a excelência. É importante questionar o quanto a adoção de políticas descentralizadoras estende o alcance e a importância do fluxo de informações. Percebemos, cada vez mais, que o comprometimento entre as equipes causa impacto indireto na reavaliação das diretrizes de desenvolvimento para o futuro.', 'Johnny', '2020-11-09 22:02:18', 'https://user-images.githubusercontent.com/101482/29592647-40da86ca-875a-11e7-8bc3-941700b0a323.png'),
(11, 'Jimmy, o companheiro de aprendizado', 'Do mesmo modo, a consulta aos diversos militantes aponta para a melhoria das condições inegavelmente apropriadas. Pensando mais a longo prazo, o entendimento das metas propostas deve passar por modificações independentemente das novas proposições. É importante questionar o quanto o início da atividade geral de formação de atitudes auxilia a preparação e a composição dos métodos utilizados na avaliação de resultados. Evidentemente, o comprometimento entre as equipes possibilita uma melhor visão global das posturas dos órgãos dirigentes com relação às suas atribuições.\r\n\r\n          Acima de tudo, é fundamental ressaltar que a execução dos pontos do programa acarreta um processo de reformulação e modernização das regras de conduta normativas. No mundo atual, o desenvolvimento contínuo de distintas formas de atuação representa uma abertura para a melhoria dos paradigmas corporativos. Todavia, a revolução dos costumes estimula a padronização dos índices pretendidos.\r\n\r\n          O empenho em analisar a complexidade dos estudos efetuados assume importantes posições no estabelecimento das condições financeiras e administrativas exigidas. Assim mesmo, a adoção de políticas descentralizadoras exige a precisão e a definição do processo de comunicação como um todo. Caros amigos, a hegemonia do ambiente político promove a alavancagem dos procedimentos normalmente adotados. O incentivo ao avanço tecnológico, assim como a estrutura atual da organização garante a contribuição de um grupo importante na determinação do orçamento setorial.\r\n\r\n          É claro que a percepção das dificuldades ainda não demonstrou convincentemente que vai participar na mudança das formas de ação. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a mobilidade dos capitais internacionais cumpre um papel essencial na formulação do impacto na agilidade decisória. Não obstante, o fenômeno da Internet obstaculiza a apreciação da importância das direções preferenciais no sentido do progresso. Por conseguinte, a consolidação das estruturas pode nos levar a considerar a reestruturação dos relacionamentos verticais entre as hierarquias. A prática cotidiana prova que a valorização de fatores subjetivos causa impacto indireto na reavaliação do levantamento das variáveis envolvidas.\r\n\r\n          O cuidado em identificar pontos críticos na contínua expansão de nossa atividade prepara-nos para enfrentar situações atípicas decorrentes dos modos de operação convencionais. Ainda assim, existem dúvidas a respeito de como o consenso sobre a necessidade de qualificação não pode mais se dissociar do sistema de participação geral. Podemos já vislumbrar o modo pelo qual a constante divulgação das informações maximiza as possibilidades por conta de todos os recursos funcionais envolvidos. Nunca é demais lembrar o peso e o significado destes problemas, uma vez que a necessidade de renovação processual nos obriga à análise do retorno esperado a longo prazo. Por outro lado, o surgimento do comércio virtual talvez venha a ressaltar a relatividade do fluxo de informações.', 'Johnny', '2020-11-09 22:03:19', 'https://user-images.githubusercontent.com/101482/29592647-40da86ca-875a-11e7-8bc3-941700b0a323.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
