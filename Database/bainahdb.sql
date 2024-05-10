-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2023 at 03:36 PM
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
-- Database: `bainahDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin_id` int(3) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `middle_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `national_id` int(10) NOT NULL,
  `reset_token_hash` varchar(64) NOT NULL,
  `reset_token_expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `password`, `national_id`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'عبدالله', 'خضران', 'الزهراني', 'alhbaje@gmail.com', 561838383, 'Bainah103', 1036527602, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Appointment_id` int(20) NOT NULL,
  `Client` int(10) NOT NULL,
  `Service_id` int(3) NOT NULL,
  `Urgent` int(1) DEFAULT NULL,
  `Brief` varchar(500) NOT NULL,
  `File` varchar(500) DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `Date` date NOT NULL,
  `time` time NOT NULL,
  `place` int(1) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `initial_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Appointment_id`, `Client`, `Service_id`, `Urgent`, `Brief`, `File`, `total_price`, `Date`, `time`, `place`, `status`, `initial_price`) VALUES
(14, 1, 1, 0, 'لدي عقد أرجو مراجعته واضافة بنود الخخ...', '', 1, '2023-08-31', '08:00:00', 0, 'طلب موعد جديد', 0),
(24, 26, 1, 1, 'استشارة عن (.........)', '163419_ADM1445_EXT.pdf', NULL, '2023-08-30', '14:00:00', 1, 'طلب موعد جديد', 0),
(25, 34, 1, 3, 'استشارة عن ......', '', NULL, '2023-08-29', '11:00:00', 3, 'طلب موعد جديد', 0),
(44, 34, 3, 0, 'hello', NULL, NULL, '2023-09-27', '08:00:00', 0, 'طلب موعد جديد', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(10) NOT NULL,
  `First_name` varchar(40) NOT NULL,
  `Middle_name` varchar(40) NOT NULL,
  `Last_name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `NationalID` varchar(10) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `registered` int(1) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `First_name`, `Middle_name`, `Last_name`, `Email`, `Phone`, `NationalID`, `password`, `registered`, `reset_token_expires_at`, `reset_token_hash`, `user_id`) VALUES
(1, 'أحمد', 'خالد', 'الزهراني', 'ِAhmadKH22@gmail.com', '0587345533', '1111111111', NULL, 1, NULL, NULL, 0),
(26, 'سعد', 'محمد', 'الحربي', 'Saad000@gmail.com', '0501212121', '1212121212', NULL, 0, NULL, NULL, 0),
(34, 'ريما', 'فهد', 'الغامدي', 'ralghamdi1073@stu.kau.edu.sa', '0502000000', '1111111112', 'reema09', 1, NULL, NULL, 0),
(140, 'احمد', 'أحمد', 'الحربي', 'na0w2af@gmail.com', '0545773557', '1111111117', '$2y$10$kk4WgOb8SBuU9rrzos1TZOp0k/a405kcgr2B.PMHPvx', 1, '2023-09-12 16:15:05', '786427f2094333383146e78006163a5c330903108cef84b29f2e38d43653501d', NULL),
(141, 'Reema', 'فهد', 'Alghamdi', 'reema.alghamdi1009@gmail.com', '0509999999', '1113031111', NULL, NULL, NULL, NULL, NULL),
(142, 'Reema', 'fahad', 'Alghamdi', 'ralghamdi1073@stu.kau.edu.sa', '0500000000', '1111111111', NULL, NULL, NULL, NULL, NULL),
(143, 'عائشة', 'محمد', 'العجمي', 'Aishahadi2013@gmail.com', '0500000009', '1122332214', 'RRSS33', 1, NULL, NULL, NULL),
(144, 'اميره', 'سامي', 'الشيخ', 'ameerh20023@gmail.com', '0555555359', '0000000001', 'ameerah123', 1, '2023-09-22 21:39:29', '4f2d8dab2e8ec3355d328dfe21e4ee4e73204f9ebb9f8b676a9b156f3af6ae3e', NULL),
(145, 'hh', 'hh', 'hh', 'h3jeer11@hotmail.com', '0555555551', '0000000000', NULL, NULL, NULL, NULL, NULL),
(146, 'hh', 'hh', 'hh', 'h3jeer11@hotmail.com', '0555555551', '0000000000', NULL, NULL, NULL, NULL, NULL),
(147, 'ame', 'aaaa', 'nezaat', 'aaa@gmail.com', '0555555555', '0988989977', NULL, 0, NULL, NULL, NULL),
(148, 'لللل', 'لللل', 'للللل', 'aaa@gmail.com', '0555555555', '0000000000', NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(5) NOT NULL,
  `filed` int(1) DEFAULT NULL,
  `prosecutor` varchar(100) DEFAULT NULL,
  `defendant` varchar(100) DEFAULT NULL,
  `required_work` varchar(300) DEFAULT NULL,
  `brief` varchar(3000) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `requests` varchar(3000) DEFAULT NULL,
  `notes` varchar(1000) DEFAULT NULL,
  `service_id` int(3) NOT NULL,
  `due_date` date DEFAULT NULL,
  `client_id` int(10) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `initial_price` double DEFAULT NULL,
  `details` varchar(3000) DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `filed`, `prosecutor`, `defendant`, `required_work`, `brief`, `file`, `requests`, `notes`, `service_id`, `due_date`, `client_id`, `status`, `total_price`, `initial_price`, `details`, `time`) VALUES
(1, 0, 'kkkk', 'kkk', 'تعيين محكما طرف المحتكم', 'kklkl', 'Presentation1.pdf', 'kkllkkl', 'kklkl', 3, '2023-08-29', 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التحكيم:  طلب التوكيل في مباشرة اجراءات تعيين محكم أو أعمال المرافعة$\n الاجراء المطلوب  :  تعيين محكما طرف المحتكم$\n صاحب الطلب   :  محتكم$', NULL),
(2, 0, 'kkkk', 'kkk', 'تعيين محكما طرف المحتكم', 'kklkl', 'Presentation1.pdf', 'kkllkkl', 'kklkl', 3, '0000-00-00', 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التحكيم:  طلب التوكيل في مباشرة اجراءات تعيين محكم أو أعمال المرافعة$\n الاجراء المطلوب  :  تعيين محكما طرف المحتكم$\n صاحب الطلب   :  محتكم$', NULL),
(3, 0, 'kkkk', 'kkk', 'تعيين محكما طرف المحتكم', 'kklkl', 'Presentation1.pdf', 'kkllkkl', 'kklkl', 3, '0000-00-00', 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التحكيم:  طلب التوكيل في مباشرة اجراءات تعيين محكم أو أعمال المرافعة$\n الاجراء المطلوب  :  تعيين محكما طرف المحتكم$\n صاحب الطلب   :  محتكم$', NULL),
(4, 0, 'kkkk', 'kkk', 'تعيين محكما طرف المحتكم', 'kklkl', 'Presentation1.pdf', 'kkllkkl', 'kklkl', 3, '0000-00-00', 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التحكيم:  طلب التوكيل في مباشرة اجراءات تعيين محكم أو أعمال المرافعة$\n الاجراء المطلوب  :  تعيين محكما طرف المحتكم$\n صاحب الطلب   :  محتكم$', NULL),
(5, 0, 'thh', 'tht', 'محكما طرف المحتكم ضده', 'hyty', 'Presentation1.pdf', 'yhhhy', 'yhy', 3, '0000-00-00', 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التحكيم:  طلب التوكيل في مباشرة اجراءات تعيين محكم أو أعمال المرافعة$\n الاجراء المطلوب  :  محكما طرف المحتكم ضده$\n صاحب الطلب   :  محتكم ضده$', NULL),
(6, NULL, NULL, NULL, 'توثيق معاملة', NULL, NULL, NULL, NULL, 4, '2023-09-27', 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التوثيق   :  توثيق معاملة$\n مقر تقديم الخدمة :  dd$', NULL),
(7, NULL, NULL, NULL, 'توثيق معاملة', NULL, NULL, NULL, NULL, 4, '2023-09-27', 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التوثيق   :  توثيق معاملة$\n مقر تقديم الخدمة :  dd$', '21:49:00'),
(8, NULL, 'nmsks', 'ksjks', '', 'skksj', 'Presentation1.pdf', 'skks', '', 3, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التحكيم:  طلب تعيين محكم مختار أو مرجح$\n صفة المحكم :  محكم في طرف المحتكم$\n صاحب الطلب   :  محتكم$', NULL),
(9, NULL, 'nmsks', 'ksjks', 'محكما طرف المحتكم ضده', 'skksj', 'Presentation1.pdf', 'skks', '', 3, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التحكيم:  طلب التوكيل في مباشرة اجراءات تعيين محكم أو أعمال المرافعة$\n صاحب الطلب   :  محتكم$', NULL),
(10, NULL, 'kkkk', 'gg', '', 'kklkl', 'Presentation1.pdf', 'jkkjkh', '', 3, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n نوع طلب التحكيم:  طلب تعيين محكم مختار أو مرجح$\n صفة المحكم :  محكم في طرف المحتكم ضده$\n صاحب الطلب   :  محتكم$', NULL),
(11, NULL, NULL, NULL, 'توثيق معاملة', NULL, NULL, NULL, NULL, 4, '2023-09-28', 144, 'طلب موعد جديد', NULL, NULL, '\n مقر تقديم الخدمة :  dd$', '12:11:00'),
(12, NULL, NULL, NULL, 'انشاء وصياغة عقد', 'rgrg', 'Presentation1.pdf', 'rggrrg', 'grgg', 5, NULL, 144, 'طلب موعد جديد', NULL, NULL, '  الطرف الأول وصفته : rfrg$  الطرف الثاني وصفته : rrgg$', NULL),
(13, NULL, NULL, NULL, 'مراجعة وتدقيق', 'mmnkm', 'Presentation1.pdf', 'kkllkkl', '', 5, NULL, 144, 'طلب موعد جديد', NULL, NULL, '  الطرف الأول وصفته : الطرف الأول وصفته$  الطرف الثاني وصفته : الطرف الثاني وصفته$', NULL),
(14, NULL, NULL, NULL, 'مراجعة وتدقيق', 'mmnkm', 'Presentation1.pdf', 'kkllkkl', '', 5, NULL, 144, 'طلب موعد جديد', NULL, NULL, '  الطرف الأول وصفته : الطرف الأول وصفته$  الطرف الثاني وصفته : الطرف الثاني وصفته$', NULL),
(15, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-08-30$\n الدائرة/المكتب/القسم :  نونون$\n موقف الدعوى :  firstStatus$', NULL),
(16, 1, NULL, NULL, NULL, 'ssss', 'Presentation1.pdf', 'rrr', '', 6, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-27$\n الدائرة/المكتب/القسم :  نونون$\n موقف الدعوى :  secondStatus$', NULL),
(17, 1, 'kkk', 'rrrr', NULL, 'ssss', 'Presentation1.pdf', 'rrr', '', 6, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-27$\n الدائرة/المكتب/القسم :  نونون$\n موقف الدعوى :  secondStatus$', NULL),
(18, NULL, 'لزافغرغف', 'غفرغ', 'تقديم تقرير', 'ssss', 'Presentation1.pdf', 'jkn', '', 7, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  مك،ثي،ثم،ث$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-27$\n الدائرة/المكتب/القسم :  غعتعتع$\n موقف الدعوى :  قيد النظر$', NULL),
(19, NULL, 'لزافغرغف', 'غفرغ', 'تقديم تقرير', 'ssss', 'Presentation1.pdf', 'jkn', '', 7, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  مك،ثي،ثم،ث$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-27$\n الدائرة/المكتب/القسم :  غعتعتع$\n موقف الدعوى :  قيد النظر$', NULL),
(20, NULL, 'لزافغرغف', 'غفرغ', 'تقديم تقرير', 'ssss', 'Presentation1.pdf', 'jkn', '', 7, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  مك،ثي،ثم،ث$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-27$\n الدائرة/المكتب/القسم :  غعتعتع$\n موقف الدعوى :  قيد النظر$', NULL),
(21, NULL, 'مبنقو', 'مقفلن', 'إعداد مذكرة', 'غفاغفا', 'Presentation1.pdf', 'غغغ', '', 7, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-10-03$\n الدائرة/المكتب/القسم :  نننننن$\n موقف الدعوى :  قيد النظر$', NULL),
(22, 1, 'مبنقو', 'مقفلن', 'إعداد مذكرة', 'غفاغفا', 'Presentation1.pdf', 'غغغ', '', 7, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-10-03$\n الدائرة/المكتب/القسم :  نننننن$\n موقف الدعوى :  قيد النظر$', NULL),
(23, 0, 'مبنقو', 'مقفلن', 'تكليف بتولي الأعمال النظامية', 'غفاغفا', 'Presentation1.pdf', 'غغغ', '', 7, NULL, 144, 'طلب موعد جديد', NULL, NULL, '', NULL),
(24, 0, 'مبنقو', 'مقفلن', 'تكليف بتولي الأعمال النظامية', 'غفاغفا', 'Presentation1.pdf', 'غغغ', '', 7, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  llll$\nرقم القضية :  l,l,l,mm$\nتاريخ القضية :  2023-09-19$\n الدائرة/المكتب/القسم :  kkkk$\n موقف الدعوى :  قيد النظر$', NULL),
(25, 0, 'تتتت', 'تتتت', 'أخرى', 'تتت', 'Presentation1.pdf', 'تتت', '', 7, NULL, 144, 'طلب موعد جديد', NULL, NULL, '', NULL),
(26, 1, 'kkkk', 'gg', NULL, 'dccccd', 'Presentation1.pdf', 'غغغ', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n صفة طلب التمثيل كوكيل في جانب :  المدعي$\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-29$\n الدائرة/المكتب/القسم :  غعتعتع$\n موقف الدعوى :  firstStatus$', NULL),
(27, 1, 'kkkk', 'gg', NULL, 'dccccd', 'Presentation1.pdf', 'غغغ', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n صفة طلب التمثيل كوكيل في جانب :  المدعي$\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-29$\n الدائرة/المكتب/القسم :  غعتعتع$', NULL),
(28, 1, 'edef', 'rrrr', NULL, 'dccccd', 'Presentation1.pdf', 'effe', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n صفة طلب التمثيل كوكيل في جانب :  المدعي$\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-06$\n الدائرة/المكتب/القسم :  نننننن$\n موقف الدعوى :  >محكومة ابتدائي$', NULL),
(29, 0, 'edef', 'rrrr', NULL, 'dccccd', 'Presentation1.pdf', 'effe', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n طلب العميل من الممثل بالنيابة-الوكيل :  ننننننننن$', NULL),
(30, 1, 'gg', 'gg', NULL, NULL, NULL, NULL, NULL, 9, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-22$\n الدائرة/المكتب/القسم :  غعتعتع$\n موقف الدعوى :  محكومة نهائي$\n نوع المذكرة :  مذكرة رد/دفاع$\nتاريخ استلام المذكرة :  2023-09-30$', NULL),
(31, 1, 'gg', 'gg', NULL, NULL, NULL, NULL, NULL, 9, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-22$\n الدائرة/المكتب/القسم :  غعتعتع$\n موقف الدعوى :  محكومة نهائي$\n نوع المذكرة :  مذكرة رد/دفاع$\nتاريخ استلام المذكرة :  2023-09-30$', NULL),
(32, 1, 'gg', 'gg', NULL, 'nnn', 'Presentation1.pdf', 'kkllkkl', 'yhy', 9, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-22$\n الدائرة/المكتب/القسم :  غعتعتع$\n موقف الدعوى :  محكومة نهائي$\n نوع المذكرة :  مذكرة رد/دفاع$\nتاريخ استلام المذكرة :  2023-09-30$', NULL),
(33, 0, 'gg', 'gg', NULL, 'nnn', 'Presentation1.pdf', 'kkllkkl', 'yhy', 9, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n نوع الدعوى الغير مقامة :   on$', NULL),
(34, 0, 'kkkk', 'gg', NULL, 'efef', 'Presentation1.pdf', 'kkllkkl', 'grgg', 9, NULL, 148, 'طلب موعد جديد', NULL, NULL, '\n نوع الدعوى الغير مقامة :   صحيفة الدعوى$', NULL),
(35, 1, 'تتتت', 'ررررر', 'مذكرة دفاع', 'رررررررن', 'Presentation1.pdf', 'ننننون', '', 10, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  جدة$\nرقم القضية :  ٩٨٦٧٨٠٧٦$\nتاريخ القضية :  2023-09-23$\n الدائرة/المكتب/القسم :  جدة$\n موقف الدعوى :  قيد النظر$\nتاريخ استلام المذكرة أو التقرير :  2023-09-28$', NULL),
(36, 0, 'تتتت', 'ررررر', 'اصدار تقارير تقصي الكتروني بالنيابة من خلال الخبراء', 'رررررررن', 'Presentation1.pdf', 'ننننون', '', 10, NULL, 144, 'طلب موعد جديد', NULL, NULL, '', NULL),
(37, 1, 'تتتت', 'مقفلن', 'اصدار تقارير موقف القضية', NULL, NULL, NULL, NULL, 11, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  الرياض$\nرقم القضية :  ٠٩٩٨٣٩٣$\nتاريخ القضية :  2023-09-21$\n الدائرة/المكتب/القسم :  الرياض$\n موقف الدعوى :  محكومة نهائي$\nتاريخ استلام المذكرة أو التقرير :  2023-09-29$', NULL),
(38, 0, 'تتتت', 'مقفلن', 'اعداد تقرير قانوني', NULL, NULL, NULL, NULL, 11, NULL, 144, 'طلب موعد جديد', NULL, NULL, '', NULL),
(39, 0, 'تتتت', 'مقفلن', 'اعداد تقرير قانوني', NULL, NULL, NULL, NULL, 11, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\nتاريخ استلام المذكرة أو التقرير أو رفع القضية :   2023-09-29$', NULL),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\nجهة النظر: \n المحكمة/ النيابة العامة/ الشرطة/ أخرى :  الشرطة$\n المدينة :  جدة$\nرقم القضية :  ٣٩٤٣٠$\nتاريخ موعد الجلسة/التحقيق :  2023-09-24$\nموعد الجلسة/التحقيق :  16:53$\n الجلسة :  حضورية$', NULL),
(41, 1, 'kjjkkj', 'kjjjk', 'مذكرة دفاع', 'jnk k', 'Presentation1.pdf', 'jklk. jhbjb jnj', '', 10, '2023-09-27', 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-25$\n الدائرة/المكتب/القسم :  نننننن$\n موقف الدعوى :  قيد النظر$\nتاريخ استلام المذكرة أو التقرير :  2023-09-27$', NULL),
(42, 1, 'kjjkkj', 'kjjjk', 'مذكرة دفاع', 'jnk k', 'Presentation1.pdf', 'jklk. jhbjb jnj', '', 10, '2023-09-27', 144, 'طلب موعد جديد', NULL, NULL, '\n الجهة المباشرة للقضية :  ننننن$\nرقم القضية :  نننن$\nتاريخ القضية :  2023-09-25$\n الدائرة/المكتب/القسم :  نننننن$\n موقف الدعوى :  قيد النظر$', NULL),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n طالب الخدمة :  سيدات أعمال$\nاسم المنتفع من الخدمة :  تتتت$\nموعد الزيارة :  2023-09-28$\nوقت الزيارة :  08:27$\nمقر الزيارة :  اااززاز$\nنطاق العمل :  تتزتاازاز$\nبيانات التواصل :  ٩٠٩٨٠٩٨٠٧$', NULL),
(44, NULL, NULL, NULL, NULL, 'بثلقفافغ', 'Presentation1.pdf', NULL, NULL, 14, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\nموقع العقار :  جدة$\nوصف العقار :  منزل$\nالغرض من التقرير :  يييلاغففق$', NULL),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\nاسم العميل :  اميره$\nالغرض من التقرير :  تقرسر$', NULL),
(46, NULL, NULL, NULL, NULL, 'dccccd', 'Presentation1.pdf', NULL, NULL, 15, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\nاسم العميل :  اميره$\nالغرض من التقرير :  تقرسر$', NULL),
(47, NULL, NULL, NULL, NULL, 'بننبنبنثمن', 'Presentation1.pdf', NULL, NULL, 16, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\nالطلبات :  وبوبننبن$\nوسائل التواصل :  ٠٨٩٠٨٩٧$', NULL),
(48, NULL, NULL, NULL, 'توثيق معاملة', NULL, NULL, NULL, NULL, 4, '2023-09-26', 144, 'طلب موعد جديد', NULL, NULL, '\n مقر تقديم الخدمة :  جدة$', '21:21:00'),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\nجهة النظر: \n المحكمة/ النيابة العامة/ الشرطة/ أخرى :  الشرطة$\n المدينة :  جدة$\nرقم القضية :  ٣٩٤٣٠$\nتاريخ موعد الجلسة/التحقيق :  2023-09-25$\nموعد الجلسة/التحقيق :  21:30$\n الجلسة :  حضورية$', NULL),
(50, 0, 'kkkk', 'gg', NULL, 'dccccd', 'Ameerah_Arc.png', 'kkllkkl', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n طلب العميل من الممثل بالنيابة-الوكيل :  ننننننننن$', NULL),
(51, 0, 'kkkk', 'gg', NULL, 'dccccd', 'Ameerah_Arc.png', 'kkllkkl', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n طلب العميل من الممثل بالنيابة-الوكيل :  ننننننننن$', NULL),
(52, 0, 'kkkk', 'gg', NULL, 'dccccd', 'Ameerah_Arc.png', 'kkllkkl', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n طلب العميل من الممثل بالنيابة-الوكيل :  ننننننننن$', NULL),
(53, 0, 'ccc', 'ccc', NULL, 'ccc', 'Ameerah_Arc.png', 'ccc', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n طلب العميل من الممثل بالنيابة-الوكيل :  ccc$', NULL),
(54, 0, 'ccc', 'ccc', NULL, 'ccc', 'Ameerah_Arc.png', 'ccc', '', 8, NULL, 144, 'طلب موعد جديد', NULL, NULL, '\n طلب العميل من الممثل بالنيابة-الوكيل :  ccc$', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(4) NOT NULL,
  `title` varchar(300) NOT NULL,
  `answer` varchar(900) NOT NULL,
  `preview` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `answer`, `preview`) VALUES
(1, 'ijiujiuj', 'jnjknkmklmkm', 1),
(2, 'متى؟', 'الان', 1),
(3, 'متى؟', 'hhh', 1),
(4, '2023-09-11', '10:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Service_id` int(3) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Service_id`, `title`, `description`) VALUES
(1, 'الإستشارة القانونية', 'طلب إستشارة قانونية لتعيين موقف العميل وتوجيهه في مسألة معينة\r\n'),
(2, 'التقارير', 'طلب تقرير قانوني لدراسة موضوع القضية ومستنداتها واعداد تقرير منفصل بجميع جوانبها ويتضمن جهة الاختصاص والمسار والاجراءات النظامية وتقدير موقف العميل والتوصية\r\n'),
(3, 'التحكيم', '  طلب تحكيم اما بتعين عضو محكم او طلب مباشرة اجراءات التحكيم والتمثيل عن الغير فيه'),
(4, 'التوثيق واصدار الوكالات', 'التعاملات العقارية والمالية والوكالات التي تؤم توثيقها عبر موثقين وموثقات معتمدين من وزارة العدل\r\n'),
(5, 'العقود', 'طلب صياغة او تدقيق ومراجعة العقود سواء العقود المدنية او التجارية او العمارية وكافة أنواع العقود\r\n'),
(6, 'الصلح', 'تفويض او توكيل بالتسوية الودية في نزاع قائم\r\n'),
(7, 'نزاعات الاراضي والعقارات', 'تقديم الاستشارة في نزاعات العقارات والأراضي سوًا نزاعات ملكيه او الاجره او اعمال المقاولات او التدخلات او دمج والازالة ومعالجة إشكالية الصكوك وتعديلها والاضافه والحذف عليها\r\n'),
(8, 'التمثيل', 'طلب التمثيل امام الجهات المختصة والنيابة عن الغير في السير في الاجراءات النظامية امام الجهات المختصة\r\n'),
(9, 'المذكرات', 'طلب كتابة اللوائح والمذكرات لقضية منظورة اما الجهات المختصة مثل: لائحة الدعوى, مذكرة جوابية, مذكرة دفاع, مذكرة استئناف, طلب اعادة النظر, طلب النقض\r\n'),
(10, 'الجرائم المعلوماتيه / وخدمة التقصي الإلكتروني', 'الجرائم المعلوماتيه : هي النيابة في أعمال المرافعة والمدافعة في الإتهام بالجرائم التي تتم باستخدام جهاز الكمبيوتر أو أي جهاز متصل بالشبكة المعلوماتيه.\r\n\r\n\r\nخدمة التقصي الإلكتروني: هي النايبة في استصدار بحث وتقصي الكتروني عن طريق الشركات المختصه بهدف نفي التهمه'),
(11, 'التأمين', '\r\nتقديم الرأي والمشورة أو اصدار التقارير القانونية أو التمثيل في المنازعات القانونية في جميع عقود التأمين بكافة أنواعها'),
(12, 'حضور الجلسات', 'تكليف المحامي بحضور جلسة أو أكثر لتعذر حضور الأصيل سواء الجلسات الافتراضيةعن بعد أو جلسات التحقيق أمام الجهات المختصة'),
(13, 'العقود السنوية', 'خدمة تقدم على مدار عام كامل في جميع الأعمال القانونية بأجر يدفع على فترات دورية بموجبه يخصص للعميل كافة طاقات الشركة في جميع المسائل القاونينة أو خدمات معينة بذاتها'),
(14, 'تقييم عقاري', 'تقديم الرأي القانوني في اجراءات التقدير أو الطعن فيها أو التكليف لنقوم نيابة عن العميل بمباشرة أعمال تقدير قيمة العقار أو الضرر اللاحق به أو حالته أو الحق المتعلق به كأجرة المثل واستصدار التقرير من خلال خبير مختص ومرخص'),
(15, 'أعمال المحاسبة', 'تقديم الرأي القانوني في اجراءات أعمال المحاسبة أو الطعن فيها أو التكليف لنقوم نيابة عن العمال بمباشرة أعمال تعيين محاسب قانوني واستصدار تقرير محاسبي بغرض مباشرة أو انهاء اجراء نظامي من خلال خبير مختص ومرخص'),
(16, 'الافلاس', 'تقديم الرأي القانوني في اجراءات الافلاس أو الطعن فيها أو التكليف لنقوم نيابة عن الشخص ذو الصفة الطبيعية أو الاعتبارية بمباشرة الاجراء النظامي وفق الموقف المالي سواء في العلاقة مع الدائنين أو المدنيين أو أمين الافلاس أو الجهة ذات العلاقة وفق نصوص نظام الافلاس');

-- --------------------------------------------------------

--
-- Table structure for table `unavailable`
--

CREATE TABLE `unavailable` (
  `id` int(5) NOT NULL,
  `Date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `Service_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unavailable`
--

INSERT INTO `unavailable` (`id`, `Date`, `time`, `Service_id`) VALUES
(15, '2023-08-26', '11:00:00', 0),
(36, '2023-09-17', '09:00:00', 0),
(37, '2023-09-19', '10:00:00', 0),
(38, '2023-09-21', '11:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Appointment_id`),
  ADD KEY `Service_id` (`Service_id`),
  ADD KEY `Client` (`Client`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Service_id`);

--
-- Indexes for table `unavailable`
--
ALTER TABLE `unavailable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `Appointment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Service_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `unavailable`
--
ALTER TABLE `unavailable`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`Service_id`) REFERENCES `services` (`Service_id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`Client`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`Service_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
