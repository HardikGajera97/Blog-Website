-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 11:57 AM
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
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `srno` int(10) NOT NULL,
  `title` varchar(60) NOT NULL,
  `imglink` text NOT NULL,
  `description` text NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`srno`, `title`, `imglink`, `description`, `tstamp`) VALUES
(10, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Es', 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto perspiciatis itaque debitis officiis. Fugit corrupti, fuga, voluptatum esse numquam eum asperiores illum dolorum voluptatem accusamus minima veniam nisi consequuntur ut magni voluptatibus ea velit quos dignissimos architecto. Nostrum, numquam aliquid minima ab aut, culpa nobis perferendis ex quasi veniam pariatur eveniet eius similique laudantium dolores, quas autem facilis quisquam voluptatem optio itaque. Corrupti blanditiis, ab illum nesciunt vero numquam illo eos maxime ratione. Iusto excepturi minima odio magnam eaque error. Possimus corrupti ab, sed expedita nostrum nulla quidem excepturi dignissimos. Eligendi praesentium cum quo, dolor vel iure enim natus? Quasi eligendi nam eos, esse molestias quo saepe veniam quaerat quisquam consectetur asperiores repudiandae totam natus officiis temporibus ullam ipsam. Asperiores dolore optio, praesentium dignissimos, sunt illum ullam excepturi numquam nam modi eum necessitatibus nemo reiciendis iusto ipsum quia molestiae quae tempore debitis ratione? Delectus eligendi dolores, quasi quas accusantium nostrum!', '2023-05-18 14:00:53'),
(13, ' Lorem ipsum dolor sit amet consectetur adipisicing Dol', 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aHVtYW58ZW58MHx8MHx8fDA%3D&w=1000&q=80', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, dolore? Dolores natus sapiente esse aliquid, quod molestiae corporis soluta nesciunt illo. Odio delectus blanditiis soluta error. Libero, porro! Delectus ipsum, quos officia reiciendis exercitationem asperiores dignissimos consequatur maiores tempora consequuntur possimus molestias, iste rem, commodi velit nam corporis ad quidem libero consectetur fuga! Odit aperiam deserunt, veritatis commodi voluptate numquam sequi ducimus doloribus ipsam! Sapiente non nemo fugiat quam quas ad eveniet, aliquam ipsa cum eum perferendis veritatis officia? A provident magni aspernatur, dolorum porro rem ipsum assumenda suscipit explicabo corporis maxime itaque at tenetur praesentium sunt dolorem id incidunt deleniti accusamus! Voluptatibus ad, odio reprehenderit error culpa quo. Adipisci obcaecati vitae eos quaerat aspernatur exercitationem rerum quam inventore tenetur. Natus cumque enim incidunt, quos adipisci quae nesciunt velit aliquid nemo debitis optio officiis vitae dolor corrupti odit quia. Ad perspiciatis ab ipsam incidunt dolore voluptate voluptatem recusandae placeat autem?', '2023-05-20 15:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `description`) VALUES
(1, 'Hardik Gajera', 'gajerahardik112@gmail.com', ''),
(2, 'Hardik Gajera', 'gajerahardik188@gmail.com', ''),
(5, 'sfafgsdavgs', 'gajerahardik188@gmail.com', 'Sfsdagdshnxdz etfgwe twert t w4t w4t rQWE1R GDSF WERTWR STW TWET SFASRQWETY ED QEWTWT ZDF RQR DFFGWE TW FWET A SGRFHER WT WTY WAE YGHSBVrtf'),
(6, 'nxfgh  trd', 'gajera112@gmail.com', ' dsrheyjtykjtyu uy  tuy uy tyqe 5u artewy eyhe d fg 6u 56yvcfcghrt6 njd 54e ghdsfhdhgjg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'gajerahardik1883@gmail.com', '123456'),
(4, 'gajerahardik112@gmail.com', '789654'),
(5, 'hardik112@gmail.com', '147852'),
(6, 'gajera112@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
