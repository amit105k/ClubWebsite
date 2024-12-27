-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 07:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amit`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_overviews`
--

CREATE TABLE `club_overviews` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `image_url1` varchar(255) NOT NULL,
  `image_url2` varchar(255) NOT NULL,
  `image_url3` varchar(255) NOT NULL,
  `about` varchar(500) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `show_time` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `book_tkt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_overviews`
--

INSERT INTO `club_overviews` (`id`, `image_url`, `image_url1`, `image_url2`, `image_url3`, `about`, `club_name`, `show_time`, `address`, `city`, `postal_code`, `book_tkt`) VALUES
(1, 'https://i0.wp.com/discotech.me/wp-content/uploads/2016/09/time1-1.jpg?resize=1500%2C630&ssl=1', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTEhMWFRUXGBcXGBYYFxcVFhcWFRgXGBUaGBUYHSggGBolHRUYITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGy0lICUtLS0tLS8tLS0tLS0vLS0tLS0tLy0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBEQACEQEDEQH/', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXGB0aFxgYGR0YHxogHSAbHx4fHyEaICghHR8lHR0fIjEhJSkrLjEuHiAzODctNygtLisBCgoKDg0OGxAQGy8mICYvKy0yLS0vLS0wLisvLS0tLS0tLS0tLTItLy8tKy0tLy8rLy0tLS8tLS0tLSsvLS0tLf/AABEIALcBEwMBEQACEQEDEQH/', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExIWFRUXGBUWFxgXGBgXFxcVFRcXFhUVFxYYHykgHRolGxYVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0mICUtLS0tLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBEQACEQEDEQH/', 'When it comes to nightlife, Noida is home to several world-class pubs and nightclubs which add the perfect amount of glitz to your evening. From offering a fine dining experience and foot tapping music to a panoramic view of the city from their rooftop setting, these pubs are the best place to enjoy while sipping on your cocktail. Head to these groovy nightclubs and best pubs in Noida that offer an impressive selection of food and drinks, topped with enticing ambiance.', 'Night Club Noida', '09:30 To 11:30', 'Sardha Nand Road', 'New Delhi', '202202', 'http://localhost/amitclub/Html/buyticket.html'),
(4, 'https://images.unsplash.com/photo-1555086156-e6c7353d283f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2x1YnxlbnwwfHwwfHx8MA%3D%3D', '', '', '', '', 'White Club', '09:30 To 11:30', 'Sardha Nand Road', 'New Delhi', '202202', 'http://localhost/amitclub/html/update_club.php'),
(5, 'https://miro.medium.com/v2/resize:fit:560/0*39lYV66jL0TBYW6q.jpg', '', '', '', '', 'The Rock Club Ghaziabad', '2024-12-11 To 12:30', 'Ghazibad', '', '202202', 'http://localhost/amitclub/Html/selectclub.php'),
(6, 'https://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/restaurant%2F674070%2Frestaurant220210909103651.jpeg', '', '', '', '', 'White Club', '2024-12-12 To 13:30', 'Delhi', '', '22222', 'https://next-images.123rf.com/index/_next/image/?url=https://assets-cdn.123rf.com/index/static/assets/top-section-bg.jpeg&w=3840&q=75'),
(11, 'https://d26dp53kz39178.cloudfront.net/media/uploads/products/Pasha_Nightclub_result-1699078135102.webp', '', '', '', '', 'Hauz Khass', '09:30 To 11:30', 'New Delhi', 'Delhi', '202021', 'https:www.hauzkkhass.com'),
(12, 'https://i.cdn.newsbytesapp.com/images/l37520210324131352.jpeg', '', '', '', '', 'Delhi Club', '2024-11-27 To 14:30', 'delhi', 'Delhi', '20209', 'https://preview.redd.it/best-clubs-according-to-you-in-delhi-also-how-was-your-v0-f7mqndo8p66d1.jpeg?auto=webp&s=fb2bc5f5637249f197d24791f0bd1c027663339d');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `Sr` int(5) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`Sr`, `Name`, `Email`, `Mobile`, `Query`) VALUES
(1, 'Amit k', 'sdfadsfafd@gmail.com', 2147483647, 'dsafs');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` varchar(25) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `count` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `token_id` varchar(50) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `bdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `club`, `name`, `gender`, `date`, `mobile`, `email`, `count`, `amount`, `token_id`, `payment_status`, `payment_id`, `bdate`) VALUES
(1, '', '', '', '', '', '', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(2, '', '', '', '', '', '', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(3, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(4, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(5, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(6, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(7, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(8, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(9, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(10, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(11, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(12, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(13, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(14, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(15, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(16, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(17, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(18, 'Hauz Khas', 'Amit k', 'Male', '', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(19, 'Hauz Khas', 'Amit k', 'Male', '', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(20, 'Hauz Khas', 'Amit k', 'Male', '', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(21, 'Hauz Khas', 's', 'Male', '', '876876876', 'sdfadsfafd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(22, 'Hauz Khas', 's', 'Male', '', '876876876', 'sdfadsfafd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(23, 'Hauz Khas', 's', 'Male', '', '876876876', 'sdfadsfafd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(24, 'Hauz Khas', 'Amit Kumar', 'Male', '', '983242342423', 'asd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(25, 'Hauz Khas', 'Amit Kumar', 'Male', '', '983242342423', 'asd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(26, 'Hauz Khas', 'Amit Kumar', 'Male', '', '983242342423', 'asd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(27, 'The Rock Club Ghaziabad', 'rock club ghaziabad', 'Male', '', '876876876', 'sdfadsfafd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(28, 'The Rock Club Ghaziabad', 'rock club ghaziabad', 'Male', '', '876876876', 'sdfadsfafd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(29, 'The Rock Club Ghaziabad', 'rock club ghaziabad', 'Male', '', '876876876', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(30, 'Hauz Khas', 'rock club ghaziabad', 'Male', '', '343432141234', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(31, 'Hauz Khas', 'rock club ghaziabad', 'Male', '', '343432141234', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(32, 'Hauz Khas', 'rock club ghaziabad', 'Male', '', '343432141234', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(33, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-21', '343432141234', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(34, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-21', '343432141234', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(35, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-21', '343432141234', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(36, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(37, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(38, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(39, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(40, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(41, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(42, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(43, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(44, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(45, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(46, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(47, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(48, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(49, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(50, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(51, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(52, 'Hauz Khas', 'rock club ghaziabad', 'Male', '2024-11-20', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(53, 'Hauz Khas', 'rock club ghaziabad', 'Male', '', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(54, 'Hauz Khas', 'asdas', 'Male', '2222-02-01T22:12', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(55, 'Hauz Khas', 'asdas', 'Male', '2222-02-01T22:12', '876876876', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(56, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(57, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(58, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(59, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(60, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(61, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(62, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(63, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(64, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(65, 'Night Club Noida', 'night club noida', 'Male', '2024-11-21T12:30', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(66, 'Hauz Khas', 'Aman Kumar Singh', 'Male', '2024-11-21T01:30', '876876876', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(67, 'Hauz Khas', 'Amit 21', 'Male', '2024-11-22T03:21', '2222222', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(68, 'Hauz Khas', 'Amit 21', 'Male', '2024-11-22T03:21', '2222222', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(69, 'Hauz Khas', 'Amit 21', 'Male', '2024-11-22T03:21', '2222222', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(70, 'Hauz Khas', 'Amit 21', 'Male', '2024-11-22T03:21', '2222222', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(71, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(72, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(73, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(74, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(75, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(76, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(77, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(78, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(79, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(80, 'White Club', 'white', 'Male', '2024-11-19T02:02', '786378462783', 'dfsdkfljadskflj@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(81, 'Hauz Khas', 'payment', 'Male', '2222-02-22T22:02', '2222222', 'sdfadsfafd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(82, 'Night Club Noida', 'sdafd', 'Male', '2222-02-22T22:02', '2222222', 'sdafdsafasd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(83, 'Hauz Khas', 'Amit k', 'Male', '2024-11-22T03:03', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(84, 'Night Club Noida', 'aman', 'Male', '2222-02-22T22:02', '876876876', 'sdfadsfafd@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(85, '', '', '', '', '', '', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(86, 'Hauz Khas', 'j', 'Male', '1995-11-07T07:00', '878888889988', 'rup@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(87, 'Night Club Noida', 'dsfas', 'Male', '2024-11-29T12:40', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(88, 'Night Club Noida', 'dsfas', 'Male', '2024-11-29T12:40', '343432141234', 'jhfh@gmail.com', 0, 0, '', '', '', '2024-12-24 06:54:08.494642'),
(89, 'Hauz Khas', 'hauz', 'Male', '2024-12-25T12:01', '8768768762', 'sdfadsfafd@gmail.com', 2, 900, '1901d54179', 'Pending', '', '2024-12-24 07:11:00.000000'),
(90, 'Hauz Khas', 'Amit k', 'Male', '2024-12-27T11:02', '2222222111', 'sdafdsafasd@gmail.com', 2, 900, '800fe9c832', 'Pending', '', '2024-12-24 07:17:13.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club_overviews`
--
ALTER TABLE `club_overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_overviews`
--
ALTER TABLE `club_overviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
