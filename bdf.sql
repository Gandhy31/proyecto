CREATE TABLE admininstrador(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombres varchar(15),
    apellidos varchar(15),
    usuario varchar(15) UNIQUE,
    contrasena varchar(15),
    celular varchar(15),
    correo varchar(30),
    fecReg date DEFAULT NOW(),
    fecAct date DEFAULT NOW());


CREATE TABLE mensaje(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombres varchar(30),
    email varchar(30),
    asunto varchar(30),
    mensaje text);

CREATE TABLE usuario(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombres varchar(15),
    apellidos varchar(15),
    usuario varchar(15) UNIQUE,
    contrasena varchar(15),
    celular varchar(15),
    correo varchar(30),
    fecNac date,
    fecReg date DEFAULT NOW(),
    fecAct date DEFAULT NOW());
    
CREATE TABLE curso(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(50),
    descripcion text,
    precio float);
    
CREATE TABLE factura(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idUsuario INT NOT NULL,
    idCurso INT NOT NULL,
    fecha datetime DEFAULT NOW(),
    total float,
    iva bool,
    activo bool DEFAULT FALSE,
    CONSTRAINT FOREIGN KEY fk_usuario_factura (idUsuario) REFERENCES usuario (id),
    CONSTRAINT FOREIGN KEY fk_curso_factura (idCurso) REFERENCES curso (id));