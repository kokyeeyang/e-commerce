CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(50) NOT NULL,
	`email_address` varchar(60) NOT NULL,
	`password` varchar(40) CHARACTER SET latin1 NOT NULL,
	PRIMARY KEY (`id`)
);