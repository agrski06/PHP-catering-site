# Baza danych

Do uruchomienia aplikacji nie potrzebne są żadne dane w tabelach. W phpMyAdmin należy utworzyć bazę danych o nazwie catering (dane do logowanie domyślne - login: "localhost", hasło puste) i utworzyć tabele za pomocą kodu poniżej.
----------------------------------------------------------------------------------------------------------------------

CREATE TABLE `Product` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`apiId` INT NOT NULL UNIQUE,
	`name` VARCHAR(255) NOT NULL,
	`price` FLOAT NOT NULL,
	`imageLink` VARCHAR(255),
	PRIMARY KEY (`id`)
);

CREATE TABLE `cart` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`userId` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `user` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`firstName` VARCHAR(255) NOT NULL,
	`lastName` VARCHAR(255) NOT NULL,
	`userName` VARCHAR(255) NOT NULL UNIQUE,
	`password` VARCHAR(255) NOT NULL,
	`cartId` INT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `productCart` (
	`productId` INT NOT NULL,
	`cartId` INT NOT NULL,
	`quantity` INT NOT NULL
);

CREATE TABLE `order` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`userId` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `productOrder` (
	`productId` INT NOT NULL,
	`orderId` INT NOT NULL,
	`quantity` INT NOT NULL
);

ALTER TABLE `cart` ADD CONSTRAINT `cart_fk0` FOREIGN KEY (`userId`) REFERENCES `user`(`id`);

ALTER TABLE `user` ADD CONSTRAINT `user_fk0` FOREIGN KEY (`cartId`) REFERENCES `cart`(`id`);

ALTER TABLE `productCart` ADD CONSTRAINT `productCart_fk0` FOREIGN KEY (`productId`) REFERENCES `Product`(`id`);

ALTER TABLE `productCart` ADD CONSTRAINT `productCart_fk1` FOREIGN KEY (`cartId`) REFERENCES `cart`(`id`);

ALTER TABLE `order` ADD CONSTRAINT `order_fk0` FOREIGN KEY (`userId`) REFERENCES `user`(`id`);

ALTER TABLE `productOrder` ADD CONSTRAINT `productOrder_fk0` FOREIGN KEY (`productId`) REFERENCES `Product`(`id`);

ALTER TABLE `productOrder` ADD CONSTRAINT `productOrder_fk1` FOREIGN KEY (`orderId`) REFERENCES `order`(`id`);

----------------------------------------------------------------------------------------------------------------------
# Uruchomienie
Folder 'catering' należy przenieść do folderu htdocs, uruchomić serwer Apache, a następnie w przeglądarce wpisać adres 'localhost/catering/public'. Powinna zostać wyświetlona strona domowa.