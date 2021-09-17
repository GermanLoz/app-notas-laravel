CREATE TABLE frutas(
    id int(255) not null auto_increment, 
    nombre varchar(255) not null,
    descripcion TEXT, 
    precio int(255),
    fecha date,
    CONSTRAINT pk_frutas PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE usuarios(
    id int(255) not null auto_increment, 
    nombre varchar(255) not null,
    email varchar(255),
    password varchar(255) NOT NULL,
    fecha date,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDb;

