CREATE TABLE `usuarios` (
    `idUsuario`       int(11) primary key AUTO_INCREMENT,
    `tipoUsuario`     varchar(13),
    `nomeUsuario`     varchar(100),
    `emailUsuario`    varchar(50),
    `senhaUsuario`    varchar(100),
    `telefoneUsuario` char(15)
);

CREATE TABLE `produtos` (
    `idProduto`         int(11) primary key AUTO_INCREMENT,
    `fotoProduto`       varchar(100),
    `nomeProduto`       varchar(50),
    `descricaoProduto`  varchar(300),
    `valorProduto`      decimal(10,2),
    `statusProduto`     varchar(30)
);

CREATE TABLE `compras` (
    `idCompra`    int(11) primary key AUTO_INCREMENT,
    `idUsuario`   int(11),
    `idProduto`   int(11),
    `dataCompra`  date,
    `horaCompra`  time,
    `valorCompra` decimal(10,2)
);