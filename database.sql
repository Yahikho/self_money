CREATE DATABASE self_money;

CREATE TABLE users (
    id_user INT(10) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
	email VARCHAR(40) NOT NULL,
    password VARCHAR(40) NOT NULL
);

DROP TABLE users_login;