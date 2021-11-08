CREATE DATABASE IF NOT EXISTS `authorsAndBooks`;
USE `authorsAndBooks`;

CREATE TABLE IF NOT EXISTS `authors` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `fornavn` VARCHAR(60),
    `etternavn` VARCHAR(60),
    `nasjonalitet` VARCHAR(60),
    `adresse` VARCHAR(90),
    `postnummer` INT,
    `poststed` VARCHAR(60),
    `land` VARCHAR(60),
    `telefon` INT,
    `epost` VARCHAR(60),
    `sivil_status` INT,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `books` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `tittel` VARCHAR(120),
    `utgivelsesår` INT,
    `ISBN` INT,
    `forfatterID` INT,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`forfatterID`) REFERENCES `authors`(`id`)
);

INSERT INTO `authors` (`fornavn`, `etternavn`, ``, ``, ``, ``, ``, ``, ) VALUE
    (''),
    ('');

INSERT INTO `books` (`tittel`, `utgivelsesår`, `forfatterID`) VALUE
    (''),
    ('');