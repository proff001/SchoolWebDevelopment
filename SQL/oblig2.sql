CREATE DATABASE IF NOT EXISTS `library`;
USE `library`;

CREATE TABLE IF NOT EXISTS `authors` (
    `id` INT NOT NULL,
    `name` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `books` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(60) NOT NULL,
    `author` INT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`author`) REFERENCES `authors`(`id`)
);