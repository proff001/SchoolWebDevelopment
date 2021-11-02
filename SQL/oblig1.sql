CREATE DATABASE IF NOT EXISTS `skole`;
USE `skole`;

CREATE TABLE IF NOT EXISTS `elektro` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `nStudents` int DEFAULT 0,
    `teacher` varchar(50),
    PRIMARY KEY (`id`)
);

INSERT INTO `elektro` (`name`, `nStudents`, `teacher`) VALUES
    ('1ELEA', 15, 'Thomas'),
    ('1ELEB', 13, 'Atle'),
    ('1ELEC', 15, 'Peter'),
    ('1ELED', 11, 'Øystein'),
    ('2ELEA', 15, 'Rino'),
    ('2ELEB', 15, 'Rino'),
    ('2DEA', 15, 'Joey'),
    ('3DAA', 13, 'Jon');

SELECT * FROM `elektro`;
SELECT `name`, `nStudents` FROM `elektro`;
SELECT `name`, `teacher` FROM `elektro`;
SELECT `name`, `teacher` FROM `elektro` WHERE `name` LIKE "%D%";
SELECT `id`, `name` FROM `elektro` WHERE `name` LIKE "%B%";