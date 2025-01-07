-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 07:26 AM
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
(2, 'https://images.unsplash.com/photo-1555086156-e6c7353d283f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2x1YnxlbnwwfHwwfHx8MA%3D%3D', '', '', '', 'This club is giving a swanky makeover to clubbing in delhi. Walk into the lounge and drench your soul in sassy cocktails like white moon and back. I loved the vibe and also the finger food, i ordered sushi and prawns it was yummy , it was spacious and i grooved in the dance floor, there was more crowd but i enjoyed alot.\\r\\nVery good service and music ....above the all very cooperative bouncers and manager....went there last night with a friend and entered as stag ....\\r\\n', 'White Club', '', 'Sardha Nand Road', 'New Delhi', '202202', 'http://localhost/amitclub/html/update_club.php'),
(3, 'https://miro.medium.com/v2/resize:fit:560/0*39lYV66jL0TBYW6q.jpg', '', '', '', '                s', 'The Rock Club Ghaziabad', '', 'Ghazibad', '', '202202', 'http://localhost/amitclub/Html/selectclub.php'),
(4, 'https://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/restaurant%2F674070%2Frestaurant220210909103651.jpeg', '', '', '', 'https://next-images.123rf.com/index/_next/image/?url=https://assets-cdn.123rf.com/index/static/assets/top-section-bg.jpeg&w=3840&q=75                ', 'White Club', '', 'Delhi', '', '22222', 'https://next-images.123rf.com/index/_next/image/?url=https://assets-cdn.123rf.com/index/static/assets/top-section-bg.jpeg&w=3840&q=75'),
(5, 'https://d26dp53kz39178.cloudfront.net/media/uploads/products/Pasha_Nightclub_result-1699078135102.webp', '', '', '', 'hauz khass is situated near in new delhi the distance of captial is near anout 5 km and nearest metro station is \\\"HauzKhass\\\" in mezanda line and yellow line in toward \\\"melinium city gurgoan\\\"', 'Hauz Khass', '', 'New Delhi', 'Delhi', '202021', 'https:www.hauzkkhass.com'),
(6, 'https://i.cdn.newsbytesapp.com/images/l37520210324131352.jpeg', '', '', '', 'Delhi Club House is inspired by the clubs of colonial India. These institutions were the exclusive domain of their members to catch up with friends & colleagues over a drink or a meal. The food was neither fancy nor gastronomic - It was good, fresh, comfort food, borrowed from each other\\\'s cuisines and satisfied the paletes of the \\\'babus\\\' as well as as the Britishers over a drink. Delhi Club House is a take on the vibe of these old clubs. It reminisces an era gone by, a culture gone by. At DC', 'Delhi Club', '', 'delhi', 'Delhi', '20209', '');

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
  `payment_status` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `token_id` varchar(50) NOT NULL,
  `bdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `club`, `name`, `gender`, `date`, `mobile`, `email`, `count`, `amount`, `payment_status`, `payment_id`, `token_id`, `bdate`) VALUES
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
(89, 'Hauz Khas', 'hauz', 'Male', '2024-12-25T12:01', '8768768762', 'sdfadsfafd@gmail.com', 2, 900, 'Pending', '', '1901d54179', '2024-12-24 07:11:00.000000'),
(90, 'Hauz Khas', 'Amit k', 'Male', '2024-12-27T11:02', '2222222111', 'sdafdsafasd@gmail.com', 2, 900, 'Pending', '', '800fe9c832', '2024-12-24 07:17:13.000000'),
(91, 'Night Club Noida', 'hauz', 'Male', '2024-12-28T12:22', '8768768762', 'jhfh@gmail.com', 2, 900, 'Pending', '', 'e707b9e424', '2024-12-27 07:38:36.000000'),
(92, 'Night Club Noida', 'hauz', 'Male', '2024-12-28T12:22', '8768768762', 'jhfh@gmail.com', 2, 900, 'Pending', '', '1ffeec48c6', '2024-12-27 07:42:59.000000'),
(93, 'Night Club Noida', 'white', 'Male', '2024-12-28T22:22', '8768768762', 'sdfadsfafd@gmail.com', 3, 1350, 'Pending', '', '198c4181f9', '2024-12-27 12:26:19.000000'),
(94, 'Night Club Noida', 'amit', 'Male', '2024-12-12T03:28', '3333333333', 'amitpss239@gmail.com', 3, 0, 'Pending', '', '1dbbd40455', '2024-12-30 05:54:44.000000'),
(95, 'The Rock Club Ghaziabad', 'gzb', 'Male', '2024-12-20T03:32', '7007649202', 'amitpss239@gmail.com', 6, 2400, 'Pending', '', '11529dc1c8', '2024-12-30 05:57:25.000000'),
(96, 'Hauz Khas', 'Amit k', 'Male', '2024-12-27T22:22', '8768768762', 'sdfadsfafd@gmail.com', 3, 0, 'Pending', '', 'f1437aaca9', '2024-12-30 06:09:14.000000'),
(97, 'Hauz Khas', 'Amit k', 'Male', '2024-12-27T22:22', '8768768762', 'sdfadsfafd@gmail.com', 3, 0, 'Pending', '', 'c90125bfd2', '2024-12-30 06:12:37.000000'),
(98, 'Hauz Khas', 'Amit k', 'Male', '2024-12-27T22:22', '8768768762', 'sdfadsfafd@gmail.com', 3, 1350, 'Success', 'pay_PdHmDRNSafGBMB', '081988c085', '2024-12-30 06:17:27.072041'),
(99, 'The Rock Club Ghaziabad', 'gzb', 'Male', '2024-12-20T03:32', '7007649202', 'amitpss239@gmail.com', 7, 2800, 'Success', 'pay_PdHnyXavIwKC5N', 'b099239a8a', '2024-12-30 06:19:06.594923'),
(100, 'The Rock Club Ghaziabad', 'gzb', 'Male', '2024-12-20T03:32', '7007649202', 'amitpss239@gmail.com', 4, 1800, 'Pending', '', 'f017ef79cc', '2024-12-30 06:24:18.000000'),
(101, 'The Rock Club Ghaziabad', 'gzb', 'Male', '2024-12-20T03:32', '7007649202', 'amitpss239@gmail.com', 3, 1350, 'Pending', '', '7d2e17b71a', '2024-12-30 06:27:44.000000'),
(102, 'Night Club Noida', 'Amit k', 'Male', '2024-12-26T11:01', '3333333333', 'amitpss239@gmail.com', 1, 500, 'Pending', '', 'c2e3717404', '2024-12-30 06:33:05.000000'),
(103, 'The Rock Club Ghaziabad', 'gzb', 'Male', '2024-12-20T03:32', '7007649202', 'amitpss239@gmail.com', 2, 900, 'Pending', '', '39ce66c274', '2024-12-30 07:25:26.000000'),
(104, 'The Rock Club Ghaziabad', 'gzb', 'Male', '2024-12-20T03:32', '7007649202', 'amitpss239@gmail.com', 1, 500, 'Pending', '', 'a5cabb39a3', '2024-12-30 07:28:12.000000'),
(105, 'The Rock Club Ghaziabad', 'gzb', 'Male', '2024-12-20T03:32', '7007649202', 'amitpss239@gmail.com', 1, 500, 'Pending', '', '57ddcf3d39', '2024-12-30 07:28:52.000000'),
(106, 'Hauz Khass', 'hauz', 'Male', '2024-12-21T17:04', '7007649202', 'amitpss239@gmail.com', 3, 1350, 'Pending', '', '3efe041e40', '2024-12-30 07:30:20.000000'),
(107, 'Hauz Khas', 'white', 'Male', '2024-12-18T11:01', '1111111111', 'sdfadsfafd@gmail.com', 1, 500, 'Success', 'pay_PdJ4pkzhTfeVTe', 'abb4daa605', '2024-12-30 07:33:44.111253'),
(108, 'Hauz Khas', 'white', 'Male', '2024-12-18T11:01', '1111111111', 'sdfadsfafd@gmail.com', 2, 900, 'Success', 'pay_PdJCUbnvqBEdjl', 'a03382cfb3', '2024-12-30 07:40:57.758252'),
(109, 'Hauz Khas', 'white', 'Male', '2024-12-18T11:01', '1111111111', 'sdfadsfafd@gmail.com', 3, 1350, 'Success', 'pay_PdJLRoJVPFJ3YQ', '5cefc486f5', '2024-12-30 07:49:26.915053'),
(110, 'Hauz Khas', 'white', 'Male', '2024-12-18T11:01', '1111111111', 'sdfadsfafd@gmail.com', 4, 1800, 'Success', 'pay_PdJPCx12CRDKur', 'cfefdfb680', '2024-12-30 07:53:00.365110'),
(111, 'Hauz Khas', 'white', 'Male', '2024-12-18T11:01', '1111111111', 'sdfadsfafd@gmail.com', 7, 2800, 'Success', 'pay_PdJRiDeFbujj51', '7ba8cd25cb', '2024-12-30 07:55:22.355861'),
(112, 'Hauz Khas', 'white', 'Male', '2024-12-18T11:01', '1111111111', 'sdfadsfafd@gmail.com', 8, 3200, 'Success', 'pay_PdJT4Ie5E0MyEg', '75f5c220c2', '2024-12-30 07:56:39.560386'),
(113, 'Hauz Khas', 'white', 'Male', '2024-12-18T11:01', '1111111111', 'sdfadsfafd@gmail.com', 8, 3200, 'Pending', '', '3e367e16fa', '2024-12-30 07:59:44.000000'),
(114, 'Hauz Khas', 'white', 'Male', '2024-12-18T11:01', '1111111111', 'sdfadsfafd@gmail.com', 8, 3200, 'Success', 'pay_PdKaKIj3KWoSGJ', '11a5ea77b5', '2024-12-30 09:02:15.403326'),
(115, 'Hauz Khas', 'jhgjhg', 'Male', '2024-12-19T14:39', '3333333333', 'amitpss239@gmail.com', 3, 1350, 'Success', 'pay_PdKdrLiNoNdzgn', '13479679bf', '2024-12-30 09:05:34.819649'),
(116, 'Hauz Khas', 'jhgjhg', 'Male', '2024-12-19T14:39', '3333333333', 'amitpss239@gmail.com', 3, 1350, 'Success', 'pay_PdKvKBOiMarbRN', '39be341191', '2024-12-30 09:22:07.284003'),
(117, 'Hauz Khas', 'jhgjhg', 'Male', '2024-12-20T19:18', '3333333333', 'amitpss239@gmail.com', 3, 1350, 'Success', 'pay_PdLI70q1uAn5tw', 'c08b18a9a8', '2024-12-30 09:43:41.560504'),
(118, 'Hauz Khas', 'white', 'Male', '2024-12-26T12:01', '8768222222', 'sdafdsafasd@gmail.com', 3, 1350, 'Success', 'pay_PdLJWpmCsyxT3y', '8276502723', '2024-12-30 09:45:03.432574'),
(119, 'Hauz Khas', 'white', 'Male', '2024-12-26T12:01', '8768222222', 'sdafdsafasd@gmail.com', 6, 1350, 'Success', 'pay_PdMl13vX4sX6Dr', '45ba887b9a', '2024-12-30 11:09:45.033065'),
(120, 'Night Club Noida', 'amit', 'Male', '2024-12-26T12:01', '2222222222', 'dfsdkfljadskflj@gmail.com', 2, 900, 'Pending', '', 'f673836b4f', '2024-12-31 05:15:20.000000'),
(121, 'Hauz Khass', 'amit hauz', 'Male', '2024-12-25T12:02', '8768768762', 'dfsdkfljadskflj@gmail.com', 1, 0, 'Success', 'pay_PdfMKcrLob2emA', 'e82c8daa02', '2024-12-31 05:21:35.558514'),
(122, 'Hauz Khass', 'amit hauz', 'Male', '2025-01-31T01:38', '1111111111', 'dfsdkfljadskflj@gmail.com', 3, 1350, 'Success', 'pay_PeWK34u2GW6AyH', '38844c37da', '2025-01-02 09:10:11.576211'),
(123, 'Delhi Club', 'delhi', 'Male', '2024-12-01T13:41', '2222222222', 'sdfadsfafd@gmail.com', -14, 0, 'Success', 'pay_PeWMdG9ZoEmxvM', '30b74480c2', '2025-01-02 09:12:38.793476'),
(124, 'Hauz Khas', 'hauz', 'Male', '2025-01-24T12:01', '1111111111', 'jhfh@gmail.com', 4, 1800, 'Success', 'pay_PeWO7OE1MtWWsz', 'c08b449816', '2025-01-02 09:14:03.158247'),
(125, 'The Rock Club Ghaziabad', 'gzb', 'Male', '2024-12-01T01:53', '2222222222', 'jhfh@gmail.com', 3, 1350, 'Pending', '', '5189e48a75', '2025-01-02 09:24:48.000000'),
(126, 'The Rock Club Ghaziabad', 'night', 'Female', '1111-11-11T11:11', '1111111111', 'dfsdkfljadskflj@gmail.com', 4, 1800, 'Success', 'pay_PeWgtLEdxkzptE', '95df7e55a9', '2025-01-02 09:31:49.248215'),
(127, 'Delhi Club', 'Amit k', 'Male', '1111-11-11T11:11', '1111111111', 'dfsdkfljadskflj@gmail.com', 4, 1800, 'Success', 'pay_PeWmrQXsTwoAGh', '92b4b01b71', '2025-01-02 09:37:28.380361'),
(128, 'Hauz Khass', 'hauuu', 'Male', '2222-02-02T22:02', '8768768762', 'sdfadsfafd@gmail.com', 8, 3200, 'Pending', '', '4c70016dfc', '2025-01-02 09:48:50.000000'),
(129, 'Hauz Khass', 'hauuu', 'Male', '2222-02-02T22:02', '8768768762', 'sdfadsfafd@gmail.com', 9, 3600, 'Success', 'pay_PeX1oQE86xZEoF', 'fafe7f55f7', '2025-01-02 09:51:37.647990'),
(130, 'Hauz Khass', 'hauuu', 'Male', '2222-02-02T22:02', '8768768762', 'sdfadsfafd@gmail.com', 6, 2400, 'Success', 'pay_PeXG5fH1Vb9FY0', 'e967bf1d46', '2025-01-02 10:05:08.649184'),
(131, 'Hauz Khass', 'hauuu', 'Male', '2222-02-02T22:02', '8768768762', 'sdfadsfafd@gmail.com', 5, 2000, 'Success', 'pay_PeXLUyUcCbEqWF', '7480d4c977', '2025-01-02 10:10:15.875379'),
(132, 'Hauz Khass', 'hauuu', 'Male', '2222-02-02T22:02', '8768768762', 'sdfadsfafd@gmail.com', 4, 1800, 'Success', 'pay_PeXVwnuqqlh36V', 'bcb5460ddc', '2025-01-02 10:20:09.073064'),
(133, 'Hauz Khass', 'hauuu', 'Male', '2222-02-02T22:02', '8768768762', 'sdfadsfafd@gmail.com', 4, 1800, 'Success', 'pay_PeXtaSigscWFAH', '122ebd929b', '2025-01-02 10:42:31.777629'),
(134, 'Hauz Khass', 'hauuu', 'Male', '2222-02-02T22:02', '8768768762', 'sdfadsfafd@gmail.com', 3, 1800, 'Success', 'pay_PeXyzKudxnqdoF', 'f7083c5578', '2025-01-02 10:47:38.823199'),
(135, 'Hauz Khass', 'hauuu', 'Male', '2222-02-02T22:02', '8768768762', 'sdfadsfafd@gmail.com', 2, 900, 'Success', 'pay_PeY3WYaSmDsN8n', 'b2df3b8730', '2025-01-02 10:51:56.437891'),
(136, 'Hauz Khas', 'Amit k', 'Male', '2025-01-24T11:01', '1111111111', 'sdafdsafasd@gmail.com', 2, 900, 'Pending', '', 'f0494e2657', '2025-01-03 05:27:49.000000'),
(137, 'Hauz Khas', 'Amit k', 'Male', '2025-01-24T11:01', '1111111111', 'sdafdsafasd@gmail.com', 3, 1350, 'Pending', '', 'f75241b947', '2025-01-03 05:34:48.000000'),
(138, 'Hauz Khas', 'Amit k', 'Male', '2025-01-24T11:01', '1111111111', 'sdafdsafasd@gmail.com', 4, 1800, 'Success', 'pay_PerENgd7m63Nn4', '5dbf1bdbf5', '2025-01-03 05:37:22.885129'),
(139, 'Hauz Khas', 'Amit k', 'Male', '2025-01-24T11:01', '1111111111', 'sdafdsafasd@gmail.com', 5, 2000, 'Pending', '', '31609faa67', '2025-01-03 05:43:03.000000'),
(140, 'Hauz Khas', 'Amit k', 'Male', '2025-01-24T11:01', '1111111111', 'sdafdsafasd@gmail.com', 5, 2000, 'Success', 'pay_PerLUf7Xkpzc1V', '547f87ab05', '2025-01-03 05:44:07.383122'),
(141, 'Hauz Khas', 'Amit k', 'Male', '2025-01-24T11:01', '1111111111', 'sdafdsafasd@gmail.com', 4, 1800, 'Pending', '', '6f2e225cdd', '2025-01-03 05:48:12.000000'),
(142, 'Hauz Khas', 'Amit k', 'Male', '2025-01-24T11:01', '1111111111', 'sdafdsafasd@gmail.com', 4, 1800, 'Pending', '', '99c10ef40a', '2025-01-03 05:53:11.000000'),
(143, 'Delhi Club', 'white', 'Male', '2025-01-17T22:25', '1111111111', 'sdfadsfafd@gmail.com', 2, 900, 'Pending', '', 'dffe9121d1', '2025-01-03 05:56:12.000000'),
(144, 'Hauz Khass', 'Amit k', 'Male', '2025-01-23T12:11', '8768768762', 'dfsdkfljadskflj@gmail.com', 3, 1350, 'Success', 'pay_PerZOhgY5XhrEy', '37b6436f78', '2025-01-03 05:57:15.399881'),
(145, 'Hauz Khas', 'Amit k', 'Male', '2025-01-16T10:31', '8768768762', 'dfsdkfljadskflj@gmail.com', 2, 900, 'Success', 'pay_PerfRJSWsCSO15', 'ffd23b25b3', '2025-01-03 06:02:59.498051'),
(146, 'Hauz Khas', 'Amit k', 'Male', '2025-01-16T10:31', '8768768762', 'dfsdkfljadskflj@gmail.com', 3, 1350, 'Success', 'pay_PernYoPDilorzO', '061cc228fb', '2025-01-03 06:10:40.321223'),
(147, 'Hauz Khas', 'Amit k', 'Male', '2025-01-16T10:31', '8768768762', 'dfsdkfljadskflj@gmail.com', 2, 900, 'Success', 'pay_PerooUZ5ycOkPh', '6a759f18bc', '2025-01-03 06:11:51.262095'),
(148, 'The Rock Club Ghaziabad', 'the rock', 'Male', '2025-01-30T11:01', '5555555555', 'asd@gmail.com', 1, 500, 'Success', 'pay_PerqAggRZM9gv2', '1ad53dd295', '2025-01-03 06:13:15.532459');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
