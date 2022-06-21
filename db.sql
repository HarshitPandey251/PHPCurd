create database `api`;
use `api`;

create table `users`(
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255),
    `email` VARCHAR(255),
    `phone` VARCHAR(13)
);

INSERT INTO `users`(name, email, phone)VALUES('Sudhanshu','sudhanshu@gmail.com','9826419934');
INSERT INTO `users`(name, email, phone)VALUES('Harshit','harshit@gmail.com','6303574240');
INSERT INTO `users`(name, email, phone)VALUES('Test User','test@gmail.com','9876543210');
