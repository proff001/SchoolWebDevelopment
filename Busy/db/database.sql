CREATE DATABASE IF NOT EXISTS `busy`;
USE `busy`;

CREATE TABLE IF NOT EXISTS `firmaer` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`navn` VARCHAR(255) NOT NULL,
	`adresse` VARCHAR(255) NOT NULL,
	`leveringsadresse` VARCHAR(255),
	`postnr` VARCHAR(5) NOT NULL,
	`poststed` VARCHAR(255) NOT NULL,
	`leverandor` INT(1) NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `personer` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`fornavn` VARCHAR(120) NOT NULL,
	`etternavn` VARCHAR(120) NOT NULL,
	`tittel` VARCHAR(120) NOT NULL,
	`epost` VARCHAR(120) NOT NULL,
	`telefon` VARCHAR(11) NOT NULL,
	`firma` INT(11),
	PRIMARY KEY (`id`),
	FOREIGN KEY (`firma`) REFERENCES `firmaer`(`id`)
);

CREATE TABLE IF NOT EXISTS `produkter` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`navn` VARCHAR(255) NOT NULL,
	`beskrivelse` VARCHAR(255) NOT NULL,
	`pris` INT(11) NOT NULL,
	`firma` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`firma`) REFERENCES `firmaer`(`id`)
);

CREATE TABLE IF NOT EXISTS `ordre` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`dato` DATETIME NOT NULL,
	`utløpsdato` DATETIME NOT NULL,
	`kunde` INT(11) NOT NULL,
	`firma` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`kunde`) REFERENCES `personer`(`id`),
	FOREIGN KEY (`firma`) REFERENCES `firmaer`(`id`)
);

CREATE TABLE IF NOT EXISTS `ordreprodukter` (
	`ordre` INT(11) NOT NULL,
	`produkt` INT(11) NOT NULL,
	`antall` INT(11) NOT NULL,
	FOREIGN KEY (`ordre`) REFERENCES `ordre`(`id`),
	FOREIGN KEY (`produkt`) REFERENCES `produkter`(`id`)
);

CREATE TABLE IF NOT EXISTS `faktura` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`ordre` INT(11) NOT NULL,
	`beløp` INT(11) NOT NULL,
	`dato` DATETIME NOT NULL,
	`utløpsdato` DATETIME NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`ordre`) REFERENCES `ordre`(`id`)
);