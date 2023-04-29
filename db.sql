
CREATE TABLE `city` (
  `idCity` int(11) NOT NULL,
  `nameCity` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `city` (`idCity`, `nameCity`) VALUES
(4, 'Hortolandia'),
(6, 'Campinas'),
(7, 'Idaiatuba'),
(8, 'Sumare');

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `reg` (`name`, `username`, `password`, `city`, `image`, `gender`, `id`) VALUES
('lucas henrique fagundes', 'Lucas', '123', 'lko', 'image/images.png', 'male', 2);

ALTER TABLE `city`
  ADD PRIMARY KEY (`idCity`);

ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `city`
  MODIFY `idCity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


CREATE TABLE Doador(
	IdDoador INT PRIMARY KEY AUTO_INCREMENT,
    Nome varchar(15) not null,
    Sobrenome varchar(15) not null,
    email varchar(15) not null,
    telefone char(11) not null,
    cidade varchar(20) not null,
    bairro varchar(20) not null,
    rua varchar(20) not null 
);
INSERT into Doador (Nome, Sobrenome, email, cidade, bairro, rua) values ("lucas", "henrique", "henriquefagundes@gmail.com","hortolandia","pq do horto", "Crisantemo");

