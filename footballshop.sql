SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

CREATE DATABASE IF NOT EXISTS 'footballshop';


CREATE TABLE IF NOT EXISTS users(
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO users (username, email, password, admin) VALUES ('Keno', 'havickenan@gmail.com', '1234', 1);

COMMIT;