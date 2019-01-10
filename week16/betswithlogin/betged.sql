DROP DATABASE IF EXISTS ged;
CREATE DATABASE ged;
USE ged;

CREATE TABLE  customers (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	username VARCHAR(100) NOT NULL ,
	password VARCHAR(100) NOT NULL ,
	email VARCHAR(100) NOT NULL ,
	mobile VARCHAR(100) NOT NULL
);

CREATE TABLE bets (
	bet_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	customer_id INT NOT NULL,
	description VARCHAR(100),
	odds INT,
	amount INT,
	FOREIGN KEY (customer_id) REFERENCES customers(id)
);

INSERT INTO customers (username,password,email,mobile) VALUES ("admin","password","ged@ged.com","7777");
INSERT INTO customers (username,password,email,mobile) VALUES ("ged","password","ged@ged.com","7777");

SHOW TABLES;
DESCRIBE customers;
DESCRIBE bets;
SELECT * FROM customers LIMIT 10;
