DROP DATABASE IF EXISTS project1;
CREATE DATABASE project1;

SELECT DATABASE();
USE project1;

CREATE TABLE Account(
id INT NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(50),
PRIMARY KEY(id)
);

CREATE TABLE Persoon(
id INT NOT NULL,
account_id INT NOT NULL,
tussenvoegsel VARCHAR(50),
achternaam VARCHAR(50),
gebruikersnaam VARCHAR(50),
PRIMARY KEY(id),
foreign key(account_id) references account(id)
);
