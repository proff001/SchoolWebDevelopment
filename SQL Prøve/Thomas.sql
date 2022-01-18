--
-- Oppgave 2
--
CREATE DATABASE IF NOT EXISTS `Thomas`;
USE `Thomas`;

CREATE TABLE IF NOT EXISTS `fagfolk` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`navn` VARCHAR(120) NOT NULL,
	`kompetanse` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `kunder` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`navn` VARCHAR(120) NOT NULL,
	`adresse` VARCHAR(120) NOT NULL,
	`telefon` VARCHAR(32) NOT NULL,
	`epost` VARCHAR(120) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `oppdrag` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`kunde` INT NOT NULL,
	`adresse` VARCHAR(120) NOT NULL,
	`status` VARCHAR(20) NOT NULL DEFAULT "Befaring",
	`befaringDato` VARCHAR(20) NOT NULL DEFAULT "00:00 00.00.0000",
	`typeOppdrag` VARCHAR(20) NOT NULL,
	`fagperson` INT NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`kunde`) REFERENCES `kunder`(`id`),
	FOREIGN KEY (`fagperson`) REFERENCES `fagfolk`(`id`)
);

-- c
INSERT INTO `fagfolk` (`navn`, `kompetanse`) VALUES
	('Hans', 'bygg'),
	('Lars', 'elektro'),
	('Gunnar', 'rør');

-- b
INSERT INTO `kunder` (`navn`, `adresse`, `telefon`, `epost`) VALUES
	('Thomas Meller Hole', 'Øredalen 7', '+47 468 39 956', 'thomashol@viken.no'),
	('Anders', 'En Eller Annen Gate 5', '+1 (124)-1342-344', 'anders@hotmail.com'),
	('Martin', 'En Eller Annen Gate 8', '+47 953 45 234', 'martin@outlook.no'),
	('Anita', 'En Eller Annen Gate 452', '+47 413 53 342', 'anita@gmail.com'),
	('Edward', 'En Eller Annen Gate 12', '+47 696 23 234', 'edward@yahoo.com');

-- d
INSERT INTO `oppdrag` (`kunde`, `adresse`, `befaringDato`, `typeOppdrag`, `fagperson`) VALUES
	(1, 'Øredalen 7', '15:30 21.01.2022', 'bygg', 1),
	(2, 'En Eller Annen Gate 5', '11:15 21.01.2022', 'rør', 3),
	(3, 'En Eller Annen Gate 8', '09:45 14.02.2022', 'elektro', 2),
	(4, 'En Eller Annen Gate 452', '10:40 19.01.2022', 'elektro', 2),
	(5, 'En Eller Annen Gate 12', '14:15 24.02.2022', 'bygg', 1);

-- e
SELECT `oppdrag`.`befaringDato`, `kunder`.`navn`, `fagfolk`.`navn` FROM `oppdrag`
	INNER JOIN `kunder` ON `oppdrag`.`kunde` = `kunder`.`id`
	INNER JOIN `fagfolk` ON `oppdrag`.`fagperson` = `fagfolk`.`id`;

--
-- Oppgave 3
--
SELECT `name`, `region`, `area`, `population` FROM `cia`;

SELECT * FROM `cia` WHERE `region` = "Asia" AND `population` > 2000000;

SELECT * FROM `cia` WHERE `name` LIKE "%a";

SELECT COUNT(`name`) FROM `cia` WHERE `region` LIKE "%europe%" OR `region` = "North America";

-- Er flere land med 0 i population
SELECT `name` FROM `cia` WHERE `area` = (SELECT MIN(`area`) FROM `cia`);

SELECT SUM(`population`) FROM `cia` WHERE `name` LIKE "B%";

SELECT `region`, SUM(`population`) FROM `cia` GROUP BY `region` ORDER BY SUM(`population`);