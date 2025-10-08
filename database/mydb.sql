-- Step: 01
-- Goal: Create database hackathondb
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            8-10-2025      Danny                       New
-- **********************************************************************************/

DROP DATABASE IF EXISTS hackathondb;
CREATE DATABASE IF NOT EXISTS hackathondb;
USE hackathondb;

-- Step: 02
-- Goal: Create table product_type
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            8-10-2025      Danny                       New
-- **********************************************************************************/

DROP TABLE IF EXISTS product_type;

CREATE TABLE IF NOT EXISTS product_type
(
    `Id`                  INT             NOT NULL AUTO_INCREMENT
   ,`name`                VARCHAR(20)     NOT NULL
   ,`price`               DECIMAL(2,3)    NOT NULL
   
   ,CONSTRAINT PK_product_type_Id PRIMARY KEY CLUSTERED (Id)
) ENGINE=InnoDB;

-- Step: 03
-- Goal: Fill table product_type with data
-- **********************************************************************************

INSERT INTO product_type (Id, names, price)
VALUES
 (1, 'skateboard', '24.5')
,(2, 'pet', '12.95')
,(2, 'schoen', '20.05');