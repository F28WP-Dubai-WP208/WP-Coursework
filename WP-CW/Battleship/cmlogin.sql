CREATE DATABASE IF NOT EXISTS cmlogin;
USE cmlogin;
CREATE TABLE IF NOT EXISTS `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(45) NOT NULL,
    `email` varchar(45) NOT NULL,
    `password` varchar(50) NOT NULL,
    PRIMARY KEY (id)
    );