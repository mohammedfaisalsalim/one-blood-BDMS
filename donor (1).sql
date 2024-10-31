-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 09:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE donor (
  id int(11) NOT NULL PRIMARY KEY,
  name varchar(50) NOT NULL,
  gender varchar(10) NOT NULL,
  email varchar(50) NOT NULL,
  city varchar(50) NOT NULL,
  dob varchar(20) NOT NULL,
  contact_no varchar(16) NOT NULL,
  save_life_date varchar(20) NOT NULL,
  password varchar(100) NOT NULL,
  blood_group varchar(10) NOT NULL,
  request enum('0', '1', '2')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO donor (id, name, gender, email, city, dob, contact_no, save_life_date, password, blood_group, request) VALUES
(2, 'Iqbal Ahemed', 'Male', 'iqbalahmed@maarechudi.com', 'Kuala Lumpur', '1996-06-18', '01111111111', '0', '5c2fb951458b57e8e049d48a55cdddad', 'AB+', '0'),
(4, 'Faisal Salim', 'Male', 'faisal69@khankirpola.com', 'Cyberjaya', '2001-04-05', '03000000000', '2022-07-29', 'f4668288fdbf9773dd9779d412942905', 'A+', '1'),
(6, 'Shaun', 'Male', 'shaun1234@gmail.com', 'Rawang', '2002-02-17', '03000001234', '2022-06-26', '38ea4b40af278a58d623fbd1f1850c62', 'B+', '1'),
(7, 'Shaqeel', 'Male', 'shaqeel123@gmail.com', 'Wakaf Bharu', '2002-03-14', '01111111234', '2022-09-02', 'cdd215690038fb98c0cfe085452935ed', 'AB-', '0'),
(14, 'Jason Kim', 'Male', 'jasonkim123@gmail.com', 'Pontian', '1995-06-08', '12345678910', '2022-09-02', 'e10adc3949ba59abbe56e057f20f883e', 'B+', '2');

ALTER TABLE donor
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;


CREATE TABLE admin (
  id int(11) NOT NULL PRIMARY KEY,
  username varchar(50) NOT NULL,
  password varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO admin (id, username, password) VALUES
('1', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('2', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda');

ALTER TABLE admin
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
