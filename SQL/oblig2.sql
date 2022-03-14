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

INSERT INTO `authors` (`id`, `fornavn`, `etternavn`) VALUE
	(1, 'Aravind', 'Adiga'),
	(2, 'David', 'Allen'),
	(3, 'Jeff', 'Abbott'),
	(4, 'Geir', 'Afdal'),
	(5, 'Sharam', 'Alghasi');

INSERT INTO `books` (`tittel`, `utgivelsesår`, `forfatterID`) VALUE
	('Mellom attentatene', 2010, 1),
	('Siste mann i tårnet', 2012, 1),
	('Hvordan få ting gjort!', 2013, 2),
	('Få ting gjort!', 2016, 2),
	('Nettverket', 2021, 3),
	('Undercover', 2021, 3),
	('Danning i barnehagen', 2013, 4),
	('Empirisk etikk i pedagogiske praksiser', 2014, 4),
	('Hvem er "vi" nå', 2020, 5),
	('Den globale drabantbyen', 2012, 5);

SELECT CONCAT(`fornavn`, ' ', `etternavn`) AS 'Name', `epost` FROM `authors`;

SELECT * FROM `books` WHERE `forfatterID` = 1;

SELECT `books`.* FROM `books` INNER JOIN `authors` ON `books`.`forfatterID` = `authors`.`id` WHERE `authors`.`fornavn` = 'Sharam' AND `authors`.`etternavn` = 'Alghasi';

SELECT `tittel` FROM `books`;

SELECT `tittel` FROM `books` ORDER BY `tittel`;

SELECT `books`.ISBN, CONCAT(`authors`.`fornavn`, ' ', `authors`.`etternavn`) AS 'Name' FROM `books` INNER JOIN `authors` ON `books`.`forfatterID` = `authors`.`id` ORDER BY `Name` DESC;