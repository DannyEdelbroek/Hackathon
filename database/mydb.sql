DROP DATABASE IF EXISTS hackthondb;
CREATE DATABASE hackthondb;
USE hackthondb;


-- --------------------------------------------------------

--
-- Table structure for table `Colors`
--

DROP TABLE IF EXISTS `Colors`;
CREATE TABLE IF NOT EXISTS `Colors` (
   `Coulor_Id`        INT UNSIGNED         NOT NULL AUTO_INCREMENT
  ,`name`             VARCHAR(30)          NOT NULL
  ,`price_add`        VARCHAR(100)         NOT NULL
  ,`IsActief`         BIT(1)               NOT NULL DEFAULT b'1'
  ,`Opmerkingen`      VARCHAR(250) DEFAULT     NULL
  ,`DatumAangemaakt`  DATETIME(6)          NOT NULL DEFAULT (SYSDATE(6))
  ,`DatumGewijzigd`   DATETIME(6)          NOT NULL DEFAULT (SYSDATE(6))
  ,PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Colors`
--

INSERT INTO `Colors` (`Coulor_Id`, `name`, `price_add`, `IsActief`, `Opmerkingen`) VALUES
(1, 'Blouw', '0', b'1', NULL),
(2, 'rood', '0', b'1', NULL),
(3, 'goud', '3', b'1', NULL),
(4, 'zilver', '2', b'1', NULL);


