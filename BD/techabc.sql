-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2023 às 23:51
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techabc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorios`
--

CREATE TABLE `acessorios` (
  `tipo` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `precoAntigo` varchar(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `acessorios`
--

INSERT INTO `acessorios` (`tipo`, `nome`, `descricao`, `preco`, `precoAntigo`, `foto`, `quantidade`, `id`) VALUES
('fone', 'Fone TWS EDIFIER X3 Type-C Bluetooth 5.0 Qualcomm aptX', '       Especificações:  A duração da bateria dos fones é de 6 horas e caixa de carregamento pode ser utilizada 3 vezes sem precisar de uma nova recarga, o Tempo de carregamento é de cerca de 1,5 horas. \n       Proteção contra suor e jatos d’àgua de baixa pressão. Dimensões, Fone: 17,2 x 25mm (L x A x C), Case: 53 x 40 x 24mm (L x A x C),  Embalagem: 75 x 120 x 35mm (L x A x C). Conector de entrada: Type-C. \n       Ambiente, Trabalho / Escritório, Casa, Dia a Dia, Esporte Qualcomm cVc 8.0 - Redução de ruído do microfone. Versão do Bluetooth: Qualcomm aptX 5.0, Perfil do Bluetooth: A2DP, AVRCP, HFP, HSP, Sensibilidade de entrada (NPS): 95dB, Audio decoding: AptX, SBC, Resposta de frequência: 20Hz-20KHz, Frequência de áudio: 16bti/ 44.1KHz.', '215', '260', 'fone1.png', 33, 1),
('fone', 'Fone de Ouvido Philips Branco Série 2000 bluetooth - TAU H202 WT/00', '       Listas de reprodução épicas ou os podcasts mais recentes? Você pode escutar isso e muito mais com o headphone branco TAUH202WT/00, Série 2000 da Philips. Esse modelo supra-auricular possui conectividade Bluetooth que facilita a sua vida pois elimina os cabos inconvenientes, deixando as suas mãos livres para que você possa executar as tarefas cotidianas. Além disso, proporciona som nítido e graves potentes com drivers acústicos de 32mm em neodímio. Sua alça é tão leve que você mal a sentirá, enquanto os fones se dobram, facilitando o seu transporte em bolsas e mochilas sem danificar o produto. \r\n       Além disso ele vem com microfone embutido com cancelamento de eco para um áudio nítido durante as suas chamadas e controle de volume com várias funções, que permite que você tenha total acesso às suas músicas e ligações com facilidade. E sabe o que é melhor de tudo isso? Com ele você conta com aproximadamente 15 horas de reprodução para aproveitar todas as suas seleções preferidas enquanto o tempo de recarga é rápido! Uma carga completa leva aproximadamente 3 horas, tornando-o perfeito para o seu dia a dia!', '200', '299', 'fone2.png', 30, 2),
('fone', 'Headset Gamer EDIFIER G33 BT Hecate Bluetooth Preto - G33BT-BK', '       Com o headset G33BT você tem até 48 horas com os LEDs RGB desligados sem precisar recarregar! Com os LEDs ligados a autonomia é de até 24 horas. Pressione o botão uma vez para atender e desligar chamadas, ou dar play/pause. Pressione duas vezes para alterar o modo, ou pressione e mantenha para ligar/desligar ou parear/rejeitar.\r\n       Esse fone possui drivers de NdFeB com 40 mm e um diafragma PET, calibrados com precisão para um excelente campo sonoro e graves estrondosos. Alem de poder pode atingir um nível de baixa latência de 60 ms. O chip também se integra com Bluetooth V5.0 para sistemas iOS e Android. Também é válido lembrar que o headset G33BT tem oito modos de luz RBG diferentes estão disponíveis para você selecionar.', '330', '370', 'fone3.png', 40, 3),
('fone', 'Headset Gamer EDIFIER G1 SE Hecate Over-Ear P3 Preto - G1se-BK', '       O conforto ao usar o G1 permite que você se concentre mais no jogo seu design da haste com recorte no meio permite que o ar circule com mais facilidade diminuindo o calor e o suor. A Tecnologia de decodificação digital do Fone Gamer G1 EDIFIER permite um direcionamento sonoro mais preciso e detalhado. Assim você consegue estar em vantagem sonora do seu oponente em algumas modalidades de jogos.\r\n       Especificações: Resposta de frequência: 20Hz-20kHz, 1,3 M, Comprimento adaptador: P3-P2 0,70 M, Compatível com PC, Mac, PS4, Xbox (Usando saída de fone p2 / p3),  Dimensões: 160 (L) x 190 (A) x 70 (L) mm,  Peso aprox: 183G.', '99', '149', 'fone4.png', 28, 4),
('fone', 'Fone de Ouvido Sem Fio JBL Tune 660NC - Preto, Bluetooth', '       Suporte para seu assistente de voz?Precisa de ajuda para passar o dia? Obtenha ajuda de seu assistente de voz preferido usando sua voz ou com um toque no fone. E se você configurar o Ok Google, ative os recursos do seu JBL Live 660 NC apenas usando a sua voz. Mágica! \r\nDesign Leve e Cancelamento de Ruído\r\n       Com um design leve e confortável, você vai desfrutar de uma haste macia para a cabeça, e apreciará até 50 horas de streaming com cancelamento de ruído adaptativo (ANC) desativado, chamadas estéreo perfeitas e um cabo de áudio destacável que lhe permite ouvir música mesmo quando acabar a carga da bateria.', '399', '455', 'fone5.png', 40, 5),
('fone', 'Fone de ouvido, JBL Harman, Bluetooth, Wave Buds TWS, Preto - JBLWBUDSBLK', '       Graves profundos, muita diversão, e profundidade no seu som. Leve seu som para todos os lugares. Com graves que você pode sentir, até 32 horas de bateria e um design de fone seguro e confortável, os jbl wave buds resistentes a respingos e poeira são projetados para o seu entretenimento diário. Quer você esteja andando pelas ruas da cidade ou relaxando na praia, suas chamadas estéreo sem usar as mãos serão sempre nítidas, enquanto a tecnologia smart ambient mantém você ciente dos arredores. E quando precisar de um impulso extra, você pode acelerar a carga, com duas horas adicionais de energia em apenas 10 minutos\r\n       Especificações Técnicas: bateria de íon de lítio, sensibilidade de 38 dbv/pa a 1 khz, à prova d´água, alto falantes de 8mm e indicador do nível de bateria.', '268', '299', 'fone6.png', 17, 6),
('fone', 'Headphone Philco Bluetooth Wave, Bivolt- PFO01BTG', '       Mais conforto com o Headphone Bluetooth Philco PFO01BTG Wave. Prático e estofado, as alças são leves e auto ajustáveis, desenvolvidas especialmente para longos períodos de uso, proporcionando o encaixe perfeito com muito mais conforto. Função Bluetooth 5.0 e microfone integrado. Som de qualidade e 150 mW de potência e frequência de resposta de 20 até 20000 Hz. Perfeito e completo, você precisa de um Headphone Bluetooth Philco PFO01BTG Wave.', '150', '177', 'fone7.png', 67, 7),
('fone', 'Fones de Ouvido Sem Fio para ReproduçãO Esportiva com Display de Led', '       Os fones de ouvido bluetooth sem fio com microfone apresentam um design de gancho de encaixe macio, flexível e seguro, gancho ajustável e design ergonômico garantem que seus fones de ouvido sejam perfeitos para corrida, caminhada, jogging e Fique confortável e estável durante outras atividades. Proteção à prova d\'água IPX7 contra respingos comuns e chuva. Desfrute de esportes e atividades ao ar livre sem se preocupar em se molhar ou suar.\r\n       A tela de LED mostra a energia restante no estojo de carregamento, que vem com uma carga extra de 650mAh para até 36 horas de tempo de audição. Carregamento sem fio e carregamento USB tipo C: Controle de um toque e conexão/ligação automática: Pule músicas, inicie músicas e atenda chamadas com apenas um toque no fone de ouvido sem fio bluetooth, coloque os fones de ouvido no estojo e os fones de ouvido sem fio desligam e carregam.', '125', '175', 'fone8.png', 30, 8),
('mouse', 'MOUSE GAMER T-DAGGER DARK ANGEL, RGB, 4000DPI, 8 BOTÕES, PRETO, T-TGM209', '       Mouse Gamer com iluminação RGB trazendo mais brilho pro seu setup, contem 8 botões programáveis para deixar atalhos e funcionalidades na ponta dos dedos.\r\n       Pegada ergonômica confortável, laterais em borracha texturizada para auxílio de pegada. Compatível com software para ajuste de iluminação, parâmetros de performance e funcionalidade de botões.', '80', '100', 'mouse2.png', 20, 9),
('mouse', 'MOUSE GAMER ULTRA TRUST VERTO ERGONOMIC 1600DPI, T22885', '       Quem disse que ergonomia é chata? Basta conectar o mouse e você terá acesso a um sensor óptico de 1000/1600 dpi para controle preciso. Alterne o dpi com o botão dedicado ou navegue rapidamente por diferentes páginas da web com os dois botões de polegar. Com o mouse ergonômico Trust Verto, você pode trabalhar ergonomicamente por horas.\r\n       Este mouse é feito para reduzir a tensão do braço e do pulso para o máximo conforto durante aqueles longos dias de trabalho.\r\n       O layout vertical coloca sua axila e punho em uma posição natural que relaxa os músculos de sua mão, punho e braço. O revestimento de borracha deste mouse garante que sua pegada permaneça firme durante o trabalho por longos períodos de tempo', '90', '110', 'mouse1.png', 33, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `idClientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`nome`, `cpf`, `email`, `telefone`, `senha`, `idClientes`) VALUES
('Bárbara Barbato', '16353267899', 'babi@gmail.com', '(11) 962436388', 'babi', 1),
('Camila Freo', '98798364301', 'camila@gmail.com', '(11) 955448792', 'camila', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `desktops`
--

CREATE TABLE `desktops` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `rua` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `movel` varchar(10) NOT NULL,
  `numero` int(4) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `pais` varchar(15) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `fkEndereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notebooks`
--

CREATE TABLE `notebooks` (
  `tipo` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `precoAntigo` varchar(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `notebooks`
--

INSERT INTO `notebooks` (`tipo`, `nome`, `descricao`, `preco`, `precoAntigo`, `foto`, `quantidade`, `id`) VALUES
('notebooks', 'Notebook Gamer Acer Nitro 5 Intel Core i5 8GB - 512GB SSD 15,6” Full HD IPS NVidia GTX 1650 4GB', '       O notebook gamer Acer AN515-57-52LC Nitro 5 é a nova geração, com uma configuração que não treme para jogos de uma configuração mais pesada. A placa de vídeo NVIDIA GeForce GTX 1650 com 4GB de memória dedicada GDDR¨traz a performance que você precisa para surpreender seus adversários e jogar com alto nível de realismo. \n       Um processador que promete um incrível desempenho nas partidas, processador Intel Core i5 - 11400H Six Core de 11ª geração, além dos 8GB de memória RAM tipo DDR4, expansível até 64GB. O produto vem equipado com capacidade de 512GB, que possui velocidade de leitura e gravação mais rápida que um HD tradicional. Com um sistema operacional de jogos instalados nele, tudo abrirá rapidamente. \n       Para completar, ainda conta com sistema operacional Windows 11 Home 64-bits, tela de 15,6 “Full HD de 144HZ com painel IPS e imagem incrível, tecnologia DTS X Ultra Áudio, teclado retro iluminado na cor vermelha e tecla NitroSense, que é a última palavra em ferrame', '4.555', '6.100', 'notebook1.png', 12, 1),
('notebooks', 'Notebook Samsung Flash F30 Intel Dual Core - 4GB 64GB SSD 13,3” Full HD LED Windows 10 ', '      O Samsung Flash F30 é um nootebook de estilo único que dá um up no seu look, esteja em suas mãos ou na sua mesa. Ele tem tela LED de 13,3“ com resolução Full HD 1920x1080, processador Intel Celeron N4000 4GB de memória Ram, armazenamento SSD de 64GB e sistema operacional Windows 10 Home. \r\n      Construído para encaixar em sua rotina e projetado com atenção aos detalhes, o Samsung Flash F30 é o nootebook com um senso único de estilo\r\n', '2.399', '2.800', 'notebook2.png', 20, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE `pecas` (
  `tipo` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessorios`
--
ALTER TABLE `acessorios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- Índices para tabela `desktops`
--
ALTER TABLE `desktops`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD KEY `FOREIGN KEY` (`fkEndereco`);

--
-- Índices para tabela `notebooks`
--
ALTER TABLE `notebooks`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessorios`
--
ALTER TABLE `acessorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `desktops`
--
ALTER TABLE `desktops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `notebooks`
--
ALTER TABLE `notebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pecas`
--
ALTER TABLE `pecas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`fkEndereco`) REFERENCES `clientes` (`idClientes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
