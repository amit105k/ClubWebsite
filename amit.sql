-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 05:58 AM
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
  `book_tkt` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `promocode` varchar(25) NOT NULL,
  `promodis` int(6) NOT NULL,
  `extraperson` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_overviews`
--

INSERT INTO `club_overviews` (`id`, `image_url`, `image_url1`, `image_url2`, `image_url3`, `about`, `club_name`, `show_time`, `address`, `city`, `postal_code`, `book_tkt`, `price`, `promocode`, `promodis`, `extraperson`) VALUES
(1, 'https://i0.wp.com/discotech.me/wp-content/uploads/2016/09/time1-1.jpg?resize=1500%2C630&ssl=1', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTEhMWFRUXGBcXGBYYFxcVFhcWFRgXGBUaGBUYHSggGBolHRUYITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGy0lICUtLS0tLS8tLS0tLS0vLS0tLS0tLy0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBEQACEQEDEQH/', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXGB0aFxgYGR0YHxogHSAbHx4fHyEaICghHR8lHR0fIjEhJSkrLjEuHiAzODctNygtLisBCgoKDg0OGxAQGy8mICYvKy0yLS0vLS0wLisvLS0tLS0tLS0tLTItLy8tKy0tLy8rLy0tLS8tLS0tLSsvLS0tLf/AABEIALcBEwMBEQACEQEDEQH/', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExIWFRUXGBUWFxgXGBgXFxcVFRcXFhUVFxYYHykgHRolGxYVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0mICUtLS0tLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBEQACEQEDEQH/', 'When it comes to nightlife, Noida is home to several world-class pubs and nightclubs which add the perfect amount of glitz to your evening. From offering a fine dining experience and foot tapping music to a panoramic view of the city from their rooftop setting, these pubs are the best place to enjoy while sipping on your cocktail. Head to these groovy nightclubs and best pubs in Noida that offer an impressive selection of food and drinks, topped with enticing ambiance.', 'Night Club Noida', '09:30 To 11:30', 'Sardha Nand Road', 'New Delhi', '202202', 'http://localhost/amitclub/Html/buyticket.html', 500, 'NIGHT', 10, 499),
(2, 'https://images.unsplash.com/photo-1555086156-e6c7353d283f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2x1YnxlbnwwfHwwfHx8MA%3D%3D', 'https://t3.ftcdn.net/jpg/01/20/28/24/360_F_120282465_htIcYKYiSb98hIrhL6X6ilI0z8vn19LY.webp', 'https://t4.ftcdn.net/jpg/10/16/72/33/240_F_1016723375_pxJQ5D7lOKtNSpInmyag9rYZhNZeOjJE.jpg', 'https://t3.ftcdn.net/jpg/01/71/59/82/240_F_171598298_oDdPq07LiXkRRKcYMOheKAvozA0nznyd.jpg', 'This club is giving a swanky makeover to clubbing in delhi. Walk into the lounge and drench your soul in sassy cocktails like white moon and back. I loved the vibe and also the finger food, i ordered sushi and prawns it was yummy , it was spacious and i grooved in the dance floor, there was more crowd but i enjoyed alot.\\r\\nVery good service and music ....above the all very cooperative bouncers and manager....went there last night with a friend and entered as stag ....\\r\\n', 'White Club', '09:30 AM To 12:30AM', 'Sardha Nand Road', 'New Delhi', '202202', 'http://localhost/amitclub/html/update_club.php', 999, 'DELHI', 15, 0),
(3, 'https://miro.medium.com/v2/resize:fit:560/0*39lYV66jL0TBYW6q.jpg', 'https://t3.ftcdn.net/jpg/05/64/84/58/240_F_564845868_boJfdzOFfMhAq9e8p81bgRt5tB3uQA2C.jpg', 'https://t3.ftcdn.net/jpg/01/16/89/38/240_F_116893829_UmvQiyaTREE0P1ijV6bkLLLxwD3rI0jd.jpg', 'https://t3.ftcdn.net/jpg/01/16/89/38/240_F_116893829_UmvQiyaTREE0P1ijV6bkLLLxwD3rI0jd.jpg', 'These clubs contribute significantly to the social and recreational landscape of Ghaziabad, providing residents with opportunities to engage in various activities and community service Part of the international Lions Clubs organization, focusing on community service and various social initiatives.', 'The Rock Club Ghaziabad', 'full night', 'Ghazibad', 'vishali nagar', '202202', 'http://localhost/amitclub/Html/selectclub.php', 799, 'GZB', 7, 0),
(4, 'https://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/restaurant%2F674070%2Frestaurant220210909103651.jpeg', 'https://t4.ftcdn.net/jpg/06/29/57/61/240_F_629576172_uLKJIWMlDFUQLQd9uk7u2Ot0IW2RzDKw.jpg', 'https://t3.ftcdn.net/jpg/02/87/35/70/240_F_287357045_Ib0oYOxhotdjOEHi0vkggpZTQCsz0r19.jpg', 'https://t3.ftcdn.net/jpg/03/10/64/98/240_F_310649884_dGXw5heDwDZb5jSpnQ16P9k32PXLtqmM.jpg', 'https://next-images.123rf.com/index/_next/image/?url=https://assets-cdn.123rf.com/index/static/assets/top-section-bg.jpeg&w=3840&q=75                ', 'White Club', '24 hours open', 'Delhi', 'New delhi', '22222', 'https://next-images.123rf.com/index/_next/image/?url=https://assets-cdn.123rf.com/index/static/assets/top-section-bg.jpeg&w=3840&q=75', 1200, 'WHITE', 12, 0),
(5, 'https://d26dp53kz39178.cloudfront.net/media/uploads/products/Pasha_Nightclub_result-1699078135102.webp', 'https://t4.ftcdn.net/jpg/01/27/82/05/240_F_127820544_6lkdQUUPRZ7ikF3rOzmYiMUd3qZ6PRqL.jpg', 'https://t3.ftcdn.net/jpg/02/53/01/36/240_F_253013633_TDcGVWptIzybwZABAEUE2aUQaIAsolt7.jpg', 'https://t4.ftcdn.net/jpg/01/61/59/73/240_F_161597387_1J5BqmdPp8fOtlk7dSk0iMBRAzAxZMiR.jpg', 'hauz khass is situated near in new delhi the distance of captial is near anout 5 km and nearest metro station is \"HauzKhass\" in mezanda line and yellow line in toward melinium city gurgoan', 'Hauz Khass', '11:30 AM to 01:30 AM', 'Gurgoan', 'Delhi', '202021', 'https:www.hauzkkhass.com', 499, 'HAUZ', 14, 0),
(6, 'https://i.cdn.newsbytesapp.com/images/l37520210324131352.jpeg', 'https://t3.ftcdn.net/jpg/01/23/22/64/240_F_123226414_fdzRAzNJNKCHkqoEJXPkIlFBBSduLfLq.jpg', 'https://t4.ftcdn.net/jpg/02/78/70/01/240_F_278700194_dyVW7DLEsZuKVeWnPf8mAzAuB3Ocf139.jpg', 'https://t4.ftcdn.net/jpg/06/29/60/35/240_F_629603580_nwAAW6XnRjv31u2dfJ4C2i0gvaN0mPL9.jpg', 'Delhi Club House is inspired by the clubs of colonial India. These institutions were the exclusive domain of their members to catch up with friends & colleagues over a drink or a meal. The food was neither fancy nor gastronomic - It was good, fresh, comfort food, borrowed from each other\\\'s cuisines and satisfied the paletes of the \\\'babus\\\' as well as as the Britishers over a drink. Delhi Club House is a take on the vibe of these old clubs. It reminisces an era gone by, a culture gone by. At DC', 'Delhi Club', '24 hours available for customer', 'delhi', 'Delhi', '20209', '', 1200, 'DELHI', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customerreg`
--

CREATE TABLE `customerreg` (
  `Sr` int(10) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerreg`
--

INSERT INTO `customerreg` (`Sr`, `Customer_Name`, `email`, `mobile`, `Password`, `Address`) VALUES
(1, 'amit', 'amitpss239@gmail.com', 1234567890, '123456', 'Noida sector 63');

-- --------------------------------------------------------

--
-- Table structure for table `farmhouse`
--

CREATE TABLE `farmhouse` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL,
  `show_time` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `price` int(10) NOT NULL,
  `promocode` varchar(255) NOT NULL,
  `promodis` int(5) NOT NULL,
  `extraperson` int(5) NOT NULL,
  `image_url1` varchar(1000) NOT NULL,
  `image_url2` varchar(1000) NOT NULL,
  `image_url3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmhouse`
--

INSERT INTO `farmhouse` (`id`, `name`, `image_url`, `about`, `show_time`, `address`, `city`, `pincode`, `price`, `promocode`, `promodis`, `extraperson`, `image_url1`, `image_url2`, `image_url3`) VALUES
(1, 'Partyvillas Roseville Farm', 'https://r1imghtlak.mmtcdn.com/0139a021-975d-4797-8a26-c813366d30cf.jpg?&output-quality=75&downsize=520:350&crop=520:350;2,0&output-format=jpg&downsize=480:336&crop=480:336', 'Blessings farms and resort fe...  24 Hours and customer requriement  33 km from WorldMark  Gurgaon  274401                                                                                                                                                                                            ', 'as per coustomer requirement', '3 km from WorldMark', ' Gurgaon', 202020, 49999, 'AMIT', 10, 500, 'https://ik.imagekit.io/pu0hxo64d/uploads/gallery/tr:e-sharpen,w-450,h-250/theme-party-at-farmhouse-199-429.jpeg', 'https://ik.imagekit.io/pu0hxo64d/uploads/gallery/tr:e-sharpen,w-450,h-250/terrace-party-at-farmhouse-808-527.jpeg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBdwfFfK_Ymnj17tMzlBEioel5T0c6KBGI4A&s'),
(2, 'Royal FarmHouse', 'https://d24l7ypac8dw56.cloudfront.net/MenuImages/030_Noida_Farm_1-87838-87978.jpg', 'this is second farmhouse in which they can reach with us we can prove 7BHK room with misky mouse swimming pool in winter we will prove hot water in swimming pook                                                        ', 'morning up to 09:30 per to 11:30 pm', '064 Farm House', 'with pool in Noida', 222222, 20000, 'ROYAL', 10, 500, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/29/00/14/walk-jog-or-bike-the.jpg?w=500&h=500&s=1', 'https://ik.imagekit.io/pu0hxo64d/uploads/gallery/tr:e-sharpen,q-90,w-450,h-250/terrace-party-at-farmhouse-808-527.jpeg', 'https://content.jdmagicbox.com/comp/faridabad/r9/011pxx11.xx11.211121164509.t4r9/catalogue/the-farm-house-party-badshahpur-gurgaon-faridabad-uecx1rnoyc.jpg'),
(3, 'Holiday rentals', 'https://a0.muscache.com/im/pictures/81dca5d6-5a86-49bc-8eca-4a8610a07d27.jpg?im_w=1440', '8 MANDI HILLS BOUTIQUE FARMSTAY | POOL | DELHI\\r\\n\\r\\nNestled away in South West Delhi is 8 Mandi Hills, a place which promises to teleport you to an extremely serene and private get away experience without having to leave the city.                                     ', '24*7 as per customer requirement', 'delhi', 'new delhi', 202020, 25000, 'HOLI', 15, 250, 'https://ik.imagekit.io/pu0hxo64d/uploads/gallery/birthday-party-at-farm-7701-chattarpur-392.jpeg', 'https://pix10.agoda.net/hotelImages/226/2260619/2260619_17062713410054089003.jpg?ca=6&ce=1&s=414x232&ar=16x9', 'https://content.jdmagicbox.com/v2/comp/mumbai/w6/022pxx22.xx22.240413151259.v2w6/catalogue/red-forest-farmhouse-wada-palghar-farm-house-on-rent-ldyarth19z.jpg'),
(4, 'Om sai maharaja farms', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/624119316.jpg?k=66107ecb362499e4e6bd8cb41e4893cbed1606189965714fbd0c898119b13518&o=', 'Om sai maharaja farms is located in Gurgaon, just 5.4 miles from WorldMark Gurgaon and 12 miles from MG Road. This property offers access to a terrace and free private parking. Rashtrapati Bhavan is 26 miles from the farm stay and Gandhi Smriti is 26 miles away.\\\\r\\\\n\\\\r\\\\nTowels and bed linen are available in the farm stay. The accommodation offers an air conditioning, a heating, and a private bathroom.\\\\r\\\\n\\\\r\\\\nQutub Minar is 19 miles from the farm stay, while Tughlaqabad Fort is 24 miles fr', '24 Hours and customer requriement', 'Gurgaon', 'Sohna Road,  Gurgaon, India', 122102, 38000, 'OMSAI', 12, 120, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEj2np3iepWDZ9qcP2FNQBHttya9SGTKrYkg&s', 'https://im.whatshot.in/img/2020/May/header-725x420-delhi-6311-c-1590825927.jpg', 'https://content.jdmagicbox.com/comp/durg/t2/9999px788.x788.200303114554.c9t2/catalogue/koya-farms-party-space-dagania-durg-p4fx5xy9kd.jpg');

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
(106, 'Hauz Khass', 'hauz', 'Male', '2024-12-21T17:04', '7007649202', 'amitpss239@gmail.com', 3, 1350, 'Success', 'pay_PgvHmhLysCXbNM', '3efe041e40', '2025-01-08 10:53:21.990718'),
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
(148, 'The Rock Club Ghaziabad', 'the rock', 'Male', '2025-01-30T11:01', '5555555555', 'asd@gmail.com', 1, 500, 'Success', 'pay_PerqAggRZM9gv2', '1ad53dd295', '2025-01-03 06:13:15.532459'),
(149, 'Hauz Khas', 'hauz', 'Male', '2025-01-23T11:01', '8768768762', 'dfsdkfljadskflj@gmail.com', 4, 1800, 'Success', 'pay_Pgv8oWu1Mb5606', '91faa918da', '2025-01-08 10:44:52.017542'),
(150, 'Night Club Noida', 'sandip', 'Male', '2025-03-06T12:30', '9628575994', 'sk962857@gmail.com', 2, 900, 'Success', 'pay_PhE6hnvaEqpHHD', '2500a68c1a', '2025-01-09 05:18:03.266091'),
(151, 'Royal FarmHouse', 'royal farm', 'Male', '2025-01-11T12:22', '8768768762', 'dfsdkfljadskflj@gmail.com', 14, 20800, 'Success', 'pay_PhIPtJWDLv37TC', 'a2f13603bf', '2025-01-09 09:31:01.101330'),
(152, 'Royal FarmHouse', 'amit kumar maurya', 'Male', '2025-01-09T16:48', '3333333333', 'amitpss239@gmail.com', 12, 18900, 'Success', 'pay_PhKAdMPV4rJtzZ', 'e7cda83851', '2025-01-09 11:13:57.327101'),
(153, 'Delhi Club', 'vijay patel', 'Male', '2025-01-10T09:30', '7703081188', 'vijaypatel770308@gmail.com', 5, 2000, 'Pending', '', '40763d305d', '2025-01-10 10:43:03.000000'),
(154, 'Delhi Club', 'vijay patel', 'Male', '2025-01-10T09:30', '7703081188', 'vijaypatel770308@gmail.com', 5, 2000, 'Pending', '', '916c2f86cf', '2025-01-10 10:43:20.000000'),
(155, 'Delhi Club', 'vijay patel', 'Male', '2025-01-10T09:30', '7703081188', 'vijaypatel770308@gmail.com', 5, 2000, 'Pending', '', '1aa8fb6c89', '2025-01-10 10:43:29.000000'),
(156, 'White Club', 'Amit k', 'Male', '2025-01-17T11:01', '8768768763', 'dfsdkfljadskflj@gmail.com', 5, 2000, 'Success', 'pay_PjhCgWejP5cVCn', '90d9a5b70a', '2025-01-15 11:03:52.113532'),
(157, 'Delhi Club', 'vijay patel', 'Male', '2025-01-10T09:30', '7703081188', 'vijaypatel770308@gmail.com', 5, 2000, 'Success', 'pay_PhiELrk2VTdj8k', '0cf19a0061', '2025-01-10 10:46:08.054719'),
(158, 'Royal FarmHouse', 'Amit', 'Male', '2025-01-24T12:30', '2222222222', 'jhfh@gmail.com', 11, 18450, 'Success', 'pay_PjD65VMIkbClc2', 'd50499a577', '2025-01-14 05:36:48.990113'),
(159, 'Royal FarmHouse', 'royal', 'Male', '2025-01-16T12:22', '1111111111', 'sdafdsafasd@gmail.com', 11, 18450, 'Success', 'pay_PjhAhb9zANN1Zp', '5b37bf2185', '2025-01-15 11:01:57.641655');

-- --------------------------------------------------------

--
-- Table structure for table `vender`
--

CREATE TABLE `vender` (
  `id` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `gst_no` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vender`
--

INSERT INTO `vender` (`id`, `business_name`, `client_name`, `email`, `password`, `contact_no`, `gst_no`, `address`) VALUES
(1, 'amit information', 'amit', 'amitpss239@gmail.com', 'Amit123', 1234567890, '1234567890', 'Noida sector 63');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club_overviews`
--
ALTER TABLE `club_overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerreg`
--
ALTER TABLE `customerreg`
  ADD PRIMARY KEY (`Sr`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `farmhouse`
--
ALTER TABLE `farmhouse`
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
-- Indexes for table `vender`
--
ALTER TABLE `vender`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_overviews`
--
ALTER TABLE `club_overviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customerreg`
--
ALTER TABLE `customerreg`
  MODIFY `Sr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmhouse`
--
ALTER TABLE `farmhouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `Sr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `vender`
--
ALTER TABLE `vender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
