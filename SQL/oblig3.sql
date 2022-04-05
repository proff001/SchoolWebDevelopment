SELECT * FROM `cia`;

SELECT `name`, `region`, `gdp` FROM `cia`;

SELECT `name`, `region`, `area`, `population` FROM `cia`;

SELECT `name`, `population` / `area` AS 'Population per kvm2' FROM `cia`;

SELECT `name`, `population` / 1000000 AS 'Population in Millions' FROM `cia`;



SELECT * FROM `cia` WHERE `region` = 'Europe';

SELECT * FROM `cia` WHERE `population` = 0;

SELECT * FROM `cia` WHERE `population` > 15000000;

SELECT * FROM `cia` WHERE `region` = 'Europe' AND `population` > 15000000;

SELECT * FROM `cia` WHERE `region` = 'Europe' OR `region` = 'Asia';



SELECT * FROM `cia` WHERE `name` LIKE 'B%';

SELECT * FROM `cia` WHERE `name` LIKE '__d%';

SELECT * FROM `cia` WHERE `name` LIKE '____';

SELECT * FROM `cia` WHERE `name` LIKE '%United%';

SELECT * FROM `cia` WHERE `name` LIKE '%ia';



SELECT * FROM `cia` ORDER BY `name`;

SELECT * FROM `cia` ORDER BY `region`, `name`;

SELECT * FROM `cia` WHERE `population` > 100000000 ORDER BY `population` DESC;

SELECT * FROM `cia` ORDER BY `region`, `area` DESC;



SELECT COUNT(`name`) FROM `cia`;

SELECT COUNT(`name`) FROM `cia` WHERE `region` = 'Europe';

SELECT SUM(`population`) FROM `cia` WHERE `region` = 'Europe';

SELECT AVG(`population`) FROM `cia` WHERE `region` = 'Europe';

SELECT COUNT(`name`) FROM `cia` WHERE `region` = 'Asia';

SELECT SUM(`area`) FROM `cia` WHERE `population` = 0;

SELECT MAX(`population`) FROM `cia`;



SELECT `region`, SUM(`area`) FROM `cia` GROUP BY `region`;

SELECT `region`, AVG(`area`) FROM `cia` GROUP BY `region`;

SELECT `region`, MAX(`population`) FROM `cia` GROUP BY `region`;

SELECT `region`, COUNT(`name`) FROM `cia` GROUP BY `region`;



SELECT `region`, SUM(`population`) FROM `cia` GROUP BY `region`;

SELECT `region` FROM `cia` WHERE `region` LIKE '%e%' GROUP BY `region`;

SELECT `name`, SUM(`population`) FROM `cia` WHERE `name` LIKE 'N%' GROUP BY `name`;

SELECT SUM(`area`) FROM `cia` WHERE `population` > 10000000;

SELECT `name` FROM `cia` WHERE `population` > 1000000 AND `area` > 10000;

SELECT `name` FROM `cia` WHERE `name` LIKE '_______';

SELECT `name` FROM `cia` WHERE `population` > `area`;