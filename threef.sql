-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 04:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `threef`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookrooms`
--

CREATE TABLE `bookrooms` (
  `Booked_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Room_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookrooms`
--

INSERT INTO `bookrooms` (`Booked_ID`, `User_ID`, `Room_Number`) VALUES
(1, 2, 5),
(2, 2, 6),
(3, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorID` int(50) NOT NULL,
  `DoctorName` varchar(50) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `Degree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorID`, `DoctorName`, `PhoneNumber`, `Degree`) VALUES
(1, 'Dr. Sabbir Ahmed Salman', '01705350535', 'BVSc'),
(2, 'Dr. Ashraf Shuvo', '01705430765', 'Not Passed');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `RoomNumber` int(10) NOT NULL,
  `RoomFare` int(50) NOT NULL,
  `RoomAvl` varchar(50) NOT NULL,
  `PetType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`RoomNumber`, `RoomFare`, `RoomAvl`, `PetType`) VALUES
(1, 1500, 'Occupied', 'Cat'),
(2, 2000, 'Occupied', 'Dog'),
(3, 500, 'Occupied', 'Cat'),
(5, 700, 'Occupied', 'Dog'),
(6, 800, 'Occupied', 'Cat'),
(8, 500, 'Occupied', 'Dog'),
(9, 2000, 'YES', 'Cat'),
(11, 1466, 'YES', 'Cat'),
(14, 2000, 'Occupied', 'Dog'),
(15, 233, 'Occupied', 'Dog');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `discount`, `product_image`) VALUES
(1, 'James', '14000', '0', 'uploads/James.jpg'),
(2, 'Liana', '15000', '0', 'uploads/Liana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'maraj bhai', 'hi@gmail.com', 'amijanina'),
(2, 'sajid bhai', 'sajidlovenafisa@gmail.com', '123'),
(3, 'ulala', 'RABEYABASHRIBUSHRA@GMAIL.COM', '123'),
(4, 'joso', 'shawonkumar.139@gmail.com', '1234'),
(5, 'Write', 'asjaij@gmail.com', '123456'),
(6, 'Saurav23', 'sauravchakraborty77@gmail.com', '37EitFUc@uJ6vCT'),
(7, 'Saurav23', 'sellkorire@gmail.com', 'C5NAkDAvJ@2KtYf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookrooms`
--
ALTER TABLE `bookrooms`
  ADD PRIMARY KEY (`Booked_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`RoomNumber`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookrooms`
--
ALTER TABLE `bookrooms`
  MODIFY `Booked_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
