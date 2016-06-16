CREATE TABLE missdial (
`id` INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
`number` VARCHAR(12) NOT NULL,
`datetime` TIMESTAMP,
`circle` VARCHAR(30),
`operator` VARCHAR(2),
`ndnd` tinyint(1),
`prefix` VARCHAR(4)
);
