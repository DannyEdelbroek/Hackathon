-- Step: 01 -- Goal: Create database hackathondb
DROP DATABASE IF EXISTS hackathondb;
CREATE DATABASE IF NOT EXISTS hackathondb;
USE hackathondb;

-- Step: 02 -- Goal: Create table product_type
DROP TABLE IF EXISTS product_type;

CREATE TABLE IF NOT EXISTS product_type (
    Id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    price DECIMAL(6,2) NOT NULL,
    PRIMARY KEY (Id)
) ENGINE=InnoDB;

-- Step: 03 -- Goal: Fill table product_type with data
INSERT INTO product_type (Id, name, price) VALUES
(1, 'skateboard', 24.50),
(2, 'pet', 12.95),
(3, 'schoen', 20.05);

-- Step: 04 -- Goal: Create table Colors
DROP TABLE IF EXISTS Colors;

CREATE TABLE IF NOT EXISTS Colors (
    Coulor_Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    price_add DECIMAL(6,2) NOT NULL DEFAULT 0,
    IsActief BIT(1) NOT NULL DEFAULT b'1',
    Opmerkingen VARCHAR(250) DEFAULT NULL,
    DatumAangemaakt DATETIME(6) NOT NULL DEFAULT (SYSDATE(6)),
    DatumGewijzigd DATETIME(6) NOT NULL DEFAULT (SYSDATE(6)),
    PRIMARY KEY (Coulor_Id)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Step: 05 -- Goal: Fill table Colors with data
INSERT INTO Colors (Coulor_Id, name, price_add, IsActief, Opmerkingen) VALUES
(1, 'Blouw', 0, b'1', NULL),
(2, 'rood', 0, b'1', NULL),
(3, 'goud', 3, b'1', NULL),
(4, 'zilver', 2, b'1', NULL);
