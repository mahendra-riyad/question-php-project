-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 11:01 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `question`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_category`
--

CREATE TABLE `admin_category` (
  `sn` int(11) NOT NULL,
  `category_code` varchar(200) NOT NULL,
  `category` varchar(300) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_category`
--

INSERT INTO `admin_category` (`sn`, `category_code`, `category`, `status`) VALUES
(30, 'S_30h_30r_30u_30w_30', 'c#', 0),
(29, 'W_29i_29l_29w_295_29', 'php', 0),
(28, 'G_28I_28m_28w_280_28', 'c', 0),
(26, 'J_26Y_26i_26y_263_26', 'science', 0),
(33, 'D_33R_33W_33i_33m_33', 'python', 0),
(32, 'Q_32m_320_321_325_32', 'ruby', 0),
(31, 'M_31c_31p_31u_312_31', 'cpp', 0),
(27, 'E_27G_27b_27h_27v_27', 'technology', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email_id`, `password`, `profile`) VALUES
('mahendrariyad88@gmail.com', 'riyad123', 'Mahendra');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `sn` int(11) NOT NULL,
  `answer_code` varchar(200) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`sn`, `answer_code`, `email_id`, `question`, `answer`, `status`) VALUES
(1, 'N_1e_1g_1s_19_1', 'riyadmahendra2@gmail.com ', 'what is method overloading', 'in same class when method name same but number of argument ,type of argument and return type change called method overloading', 0),
(2, 'R_2a_20_23_27_2', 'abc@gmail.com ', 'define array', 'array is a group of character', 0),
(3, 'K_3M_3a_3m_3z_3', 'abc@gmail.com', 'how to connect database table in microsoft visual studio', 'sfkjshf ruwee flsssss8888ruejjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 1),
(6, 'F_6Q_6V_6h_6s_6', 'riyadmahendra2@gmail.com', 'how to connect database table in microsoft visual studio', 'isash akkkkkkkkkkkkkkkkkkkkkkkkkk kgssssssssssssssssssssssssssss akhhhhhhhhhhhhhhhhhhhhhhhh weeeehhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 0),
(7, 'I_7P_7Y_7a_7i_7', 'abc@gmail.com', 'sckbjjdsadhcas ddachuadhsadus', 'hucdhsu&nbsp;<div>manish garg</div>', 0),
(5, 'C_5X_5c_5u_5v_5', 'riyadmahendra2@gmail.com', 'defination of pure virtual function', 'djdddddddddddddddddddddddddddddddddddddddddddddddddddd', 0),
(8, 'F_8T_8d_8r_84_8', 'a1@gmail.com', 'how to connect database table in microsoft visual studio', 'ksche8so9gto]4o4w 8yr7r5ttw734yfw b4w38', 0),
(9, 'N_9S_9a_9p_9u_9', 'mahendrariyad88@gmail.com', 'define array', 'uyfgeieqf3', 0),
(10, 'C_10X_10g_10l_10n_10', 'riyadmahendra2@gmail.com', 'how to connect database table in microsoft visual studio', 'g rggyyyyyyyyyyyyy ysfsssssssss sydgsyhxz dsfgsosf', 0),
(11, 'F_11P_11j_114_117_11', 'riyadmahendra2@gmail.com', 'define array', 'yescg sygdcuyo syogdddddddddddddddg dy swett rft', 0),
(12, 'H_12M_12O_12Z_126_12', 'mahendrariyad88@gmail.com', 'how to connect database table in microsoft visual studio', 'ewy4gro4iw 8r32y83w4y83hv 74twy893r4u83qh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `sn` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `question` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `visit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`sn`, `code`, `email_id`, `title`, `question`, `status`, `visit`) VALUES
(13, 'F_13Y_13u_13y_13z_13', 'mukesh@gmail.com', 'visual studio', 'how to connect database table in microsoft visual studio', 0, 7),
(10, 'M_10Z_10f_10y_107_10', 'riyadmahendra2@gmail.com', 'java', 'define array', 0, 3),
(7, 'Y_7e_7o_7s_70_7', 'riyadmahendra2@gmail.com', 'method overriding', 'what is method overriding', 0, 0),
(8, 'F_8T_8j_8r_8s_8', 'mahipal@gmail.com', 'friend function', 'defination of friend function', 0, 1),
(9, 'K_9M_9X_9r_93_9', 'riyadmahendra2@gmail.com', 'virtual function', 'defination of pure virtual function', 0, 0),
(15, 'J_15R_15U_15V_15c_15', 'mukesh@gmail.com', 'c', 'what is null pointer', 0, 1),
(16, 'P_16X_16Y_16k_165_16', 'mukesh@gmail.com', 'static variable', 'what are local static variable? what is their use', 0, 0),
(21, 'C_21w_217_218_219_21', 'a@gmail.com', 'aa', 'jwqjsssssssssssssssssssssssssssssssssssssssss ajjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 0, 0),
(24, 'G_24c_24f_24s_241_24', 'riyadmahendra2@gmail.com', 'mmf', '&nbsp;ewhfyweg e qwfygggggggggggggggggggggggggggggggggggggggggggge c6qrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr qywe wwwwwwwwwwwwwwwwwww', 0, 1),
(25, 'E_25N_25e_25g_25r_25', 'riyadmahendra2@gmail.com', 'czsdcsz', 'sckbjjdsadhcas ddachuadhsadus', 0, 1),
(26, 'A_26D_26Q_26Z_26w_26', 'riyadmahendra2@gmail.com', 'dyweu', '&nbsp;feqftw84oq8hdsga udgfdsyl ydgg dhsgda dajgafga sdafkf saga', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question_dislike`
--

CREATE TABLE `question_dislike` (
  `question_code` varchar(400) NOT NULL,
  `email_id` varchar(400) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_dislike`
--

INSERT INTO `question_dislike` (`question_code`, `email_id`, `status`) VALUES
('M_10Z_10f_10y_107_10', 'a@gmail.com', 0),
('E_25N_25e_25g_25r_25', 'riyadmahendra2@gmail.com', 0),
('M_10Z_10f_10y_107_10', 'riyadmahendra2@gmail.com', 0),
('F_13Y_13u_13y_13z_13', 'riyadmahendra2@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question_like`
--

CREATE TABLE `question_like` (
  `question_code` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_like`
--

INSERT INTO `question_like` (`question_code`, `email_id`, `status`) VALUES
('F_8T_8j_8r_8s_8', 'riyadmahendra2@gmail.com', 0),
('like', 'riyadmahendra2@gmail.com', 0),
('K_9M_9X_9r_93_9', 'riyadmahendra2@gmail.com', 0),
('P_16X_16Y_16k_165_16', 'riyadmahendra2@gmail.com', 0),
('Y_7e_7o_7s_70_7', 'abc@gmail.com', 0),
('Y_7e_7o_7s_70_7', 'riyadmahendra2@gmail.com', 0),
('J_15R_15U_15V_15c_15', 'riyadmahendra2@gmail.com', 0),
('Y_7e_7o_7s_70_7', 'mukesh@gmail.com', 0),
('M_10Z_10f_10y_107_10', 'mukesh@gmail.com', 0),
('F_13Y_13u_13y_13z_13', 'abc@gmail.com', 0),
('C_21w_217_218_219_21', 'riyadmahendra2@gmail.com', 0),
('G_24c_24f_24s_241_24', 'riyadmahendra2@gmail.com', 0),
('E_25N_25e_25g_25r_25', 'abc@gmail.com', 0),
('E_25N_25e_25g_25r_25', 'riyadmahendra2@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question_visit`
--

CREATE TABLE `question_visit` (
  `sn` int(11) NOT NULL,
  `question_code` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `visit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_visit`
--

INSERT INTO `question_visit` (`sn`, `question_code`, `email_id`, `visit`) VALUES
(1, 'F_13Y_13u_13y_13z_13', 'riyadmahendra2@gmail.com', 0),
(2, 'F_13Y_13u_13y_13z_13', 'khushal@gmail.com', 0),
(3, 'F_13Y_13u_13y_13z_13', 'lakhendra@gmail.com', 0),
(4, 'E_25N_25e_25g_25r_25', 'abc@gmail.com', 0),
(5, 'F_13Y_13u_13y_13z_13', 'a1@gmail.com', 0),
(6, 'M_10Z_10f_10y_107_10', 'riyadmahendra2@gmail.com', 0),
(7, 'G_24c_24f_24s_241_24', 'riyadmahendra2@gmail.com', 0),
(8, 'F_8T_8j_8r_8s_8', 'riyadmahendra2@gmail.com', 0),
(9, 'J_15R_15U_15V_15c_15', 'riyadmahendra2@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `sn` int(11) NOT NULL,
  `category_code` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `user_category` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`sn`, `category_code`, `email_id`, `user_category`, `status`) VALUES
(48, 'A_48K_48L_48V_48b_48', 'abc@gmail.com', 'technology', 0),
(26, 'g_26i_26o_26s_261_26', 'abc@gmail.com', 'c', 0),
(37, 'A_37C_37I_37Q_37j_37', 'mukesh@gmail.com', 'java', 0),
(36, 'G_36I_36X_36w_36y_36', 'mukesh@gmail.com', 'c#', 0),
(27, 'B_27W_27b_27s_27z_27', 'abc@gmail.com', 'php', 0),
(28, 'W_28b_28f_28n_28x_28', 'abc@gmail.com', 'python', 0),
(38, 'E_38G_38a_38v_383_38', 'mukesh@gmail.com', 'cpp', 0),
(47, 'I_47K_47X_47b_47p_47', 'riyadmahendra2@gmail.com', 'technology', 0),
(31, 'W_31a_31h_31z_315_31', 'mahipal@gmail.com', 'java', 0),
(32, 'M_32d_32n_32v_32x_32', 'mahipal@gmail.com', 'cpp', 0),
(33, 'P_33l_33o_334_339_33', 'mahipal@gmail.com', 'php', 0),
(39, 'J_39f_39g_39v_390_39', 'mukesh@gmail.com', 'c', 0),
(40, 'I_40P_40h_40u_40w_40', 'a@gmail.com', 'c', 0),
(41, 'f_41k_41o_41y_418_41', 'a@gmail.com', 'cpp', 0),
(42, 'D_42P_42T_42Z_420_42', 'a@gmail.com', 'c#', 0),
(43, 'K_43V_43u_433_439_43', 'a@gmail.com', 'php', 0),
(44, 'C_44c_44g_44n_449_44', 'riyadmahendra2@gmail.com', 'c#', 0),
(45, 'F_45c_45e_45l_45n_45', 'abc@gmail.com', 'java', 0),
(46, 'F_46k_46l_46w_466_46', 'riyadmahendra2@gmail.com', 'science', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_id`
--

CREATE TABLE `user_id` (
  `sn` int(11) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `profile_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `block_box` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_question`
--

CREATE TABLE `user_question` (
  `sn` int(11) NOT NULL,
  `question_code` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `question_category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `full_description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_question`
--

INSERT INTO `user_question` (`sn`, `question_code`, `email_id`, `question_category`, `title`, `full_description`) VALUES
(10, 'M_10Z_10f_10y_107_10', 'riyadmahendra2@gmail.com', 'Java', 'java', 'define array'),
(11, 'A_11L_11s_112_114_11', 'riyadmahendra2@gmail.com', 'cpp', 'cpp', 'define array'),
(5, 'A_5C_5I_5J_5s_5', 'abc@gmail.com', 'php', 'array', 'define array'),
(5, 'A_5C_5I_5J_5s_5', 'abc@gmail.com', 'c', 'array', 'define array'),
(4, 'B_4i_4m_4v_4x_4', 'riyadmahendra2@gmail.com', 'Java', 'java', 'what is method overloading'),
(7, 'Y_7e_7o_7s_70_7', 'riyadmahendra2@gmail.com', 'Java', 'method overriding', 'what is method overriding'),
(7, 'Y_7e_7o_7s_70_7', 'riyadmahendra2@gmail.com', 'cpp', 'method overriding', 'what is method overriding'),
(8, 'F_8T_8j_8r_8s_8', 'mahipal@gmail.com', 'cpp', 'friend function', 'defination of friend function'),
(9, 'K_9M_9X_9r_93_9', 'riyadmahendra2@gmail.com', 'Java', 'virtual function', 'defination of pure virtual function'),
(9, 'K_9M_9X_9r_93_9', 'riyadmahendra2@gmail.com', 'cpp', 'virtual function', 'defination of pure virtual function'),
(13, 'F_13Y_13u_13y_13z_13', 'mukesh@gmail.com', 'c#', 'visual studio', 'how to connect database table in microsoft visual studio'),
(17, 'A_17D_17L_17W_170_17', 'a@gmail.com', 'cpp', 'aafa', 'flkhrwiv ewigwg qrbewyegqovb vjc ryggggggggggr qrgqugsjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjs&nbsp;'),
(17, 'A_17D_17L_17W_170_17', 'a@gmail.com', 'c#', 'aafa', 'flkhrwiv ewigwg qrbewyegqovb vjc ryggggggggggr qrgqugsjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjs&nbsp;'),
(15, 'J_15R_15U_15V_15c_15', 'mukesh@gmail.com', 'c', 'c', 'what is null pointer'),
(16, 'P_16X_16Y_16k_165_16', 'mukesh@gmail.com', 'cpp', 'static variable', 'what are local static variable? what is their use'),
(16, 'P_16X_16Y_16k_165_16', 'mukesh@gmail.com', 'c', 'static variable', 'what are local static variable? what is their use'),
(17, 'A_17D_17L_17W_170_17', 'a@gmail.com', 'php', 'aafa', 'flkhrwiv ewigwg qrbewyegqovb vjc ryggggggggggr qrgqugsjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjs&nbsp;'),
(18, 'A_18R_18q_18s_18y_18', 'a@gmail.com', 'c', 'wryg3', 'jafgga jjjjjjjjjjjjjjjjjjjjjjjjjjj aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(18, 'A_18R_18q_18s_18y_18', 'a@gmail.com', 'cpp', 'wryg3', 'jafgga jjjjjjjjjjjjjjjjjjjjjjjjjjj aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(19, 'B_19E_19a_19c_19i_19', 'a@gmail.com', 'c', 'jeadwy', 'sajdvast uaa yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(19, 'B_19E_19a_19c_19i_19', 'a@gmail.com', 'cpp', 'jeadwy', 'sajdvast uaa yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(19, 'B_19E_19a_19c_19i_19', 'a@gmail.com', 'c#', 'jeadwy', 'sajdvast uaa yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(20, 'B_20S_20o_20s_20t_20', 'a@gmail.com', 'cpp', 'qd34tds', 'haaaaaaaaaaaAJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJ'),
(20, 'B_20S_20o_20s_20t_20', 'a@gmail.com', 'c#', 'qd34tds', 'haaaaaaaaaaaAJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJ'),
(20, 'B_20S_20o_20s_20t_20', 'a@gmail.com', 'php', 'qd34tds', 'haaaaaaaaaaaAJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJ'),
(21, 'C_21w_217_218_219_21', 'a@gmail.com', 'cpp', 'aa', 'jwqjsssssssssssssssssssssssssssssssssssssssss ajjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(21, 'C_21w_217_218_219_21', 'a@gmail.com', 'c#', 'aa', 'jwqjsssssssssssssssssssssssssssssssssssssssss ajjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(21, 'C_21w_217_218_219_21', 'a@gmail.com', 'php', 'aa', 'jwqjsssssssssssssssssssssssssssssssssssssssss ajjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(22, 'M_22T_22W_22i_222_22', 'riyadmahendra2@gmail.com', 'c', 'skddddd', 'msdddddddddddddddddddddddddddddddddddddddddddddddddddddd skaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa dakkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(22, 'M_22T_22W_22i_222_22', 'riyadmahendra2@gmail.com', 'php', 'skddddd', 'msdddddddddddddddddddddddddddddddddddddddddddddddddddddd skaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa dakkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(22, 'M_22T_22W_22i_222_22', 'riyadmahendra2@gmail.com', 'c#', 'skddddd', 'msdddddddddddddddddddddddddddddddddddddddddddddddddddddd skaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa dakkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(22, 'M_22T_22W_22i_222_22', 'riyadmahendra2@gmail.com', 'cpp', 'skddddd', 'msdddddddddddddddddddddddddddddddddddddddddddddddddddddd skaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa dakkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(23, 'D_23J_23j_23u_23x_23', 'riyadmahendra2@gmail.com', 'php', 'esh', 'lfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff uy aaaaaaaaaaaaaaaa qt ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff fyjsdffffffffffffffffffffff'),
(23, 'D_23J_23j_23u_23x_23', 'riyadmahendra2@gmail.com', 'pythons', 'esh', 'lfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff uy aaaaaaaaaaaaaaaa qt ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff fyjsdffffffffffffffffffffff'),
(24, 'G_24c_24f_24s_241_24', 'riyadmahendra2@gmail.com', 'c#', 'mmf', '&nbsp;ewhfyweg e qwfygggggggggggggggggggggggggggggggggggggggggggge c6qrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr qywe wwwwwwwwwwwwwwwwwww'),
(24, 'G_24c_24f_24s_241_24', 'riyadmahendra2@gmail.com', 'java', 'mmf', '&nbsp;ewhfyweg e qwfygggggggggggggggggggggggggggggggggggggggggggge c6qrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr qywe wwwwwwwwwwwwwwwwwww'),
(24, 'G_24c_24f_24s_241_24', 'riyadmahendra2@gmail.com', 'cpp', 'mmf', '&nbsp;ewhfyweg e qwfygggggggggggggggggggggggggggggggggggggggggggge c6qrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr qywe wwwwwwwwwwwwwwwwwww'),
(25, 'E_25N_25e_25g_25r_25', 'riyadmahendra2@gmail.com', 'c', 'czsdcsz', 'sckbjjdsadhcas ddachuadhsadus'),
(26, 'A_26D_26Q_26Z_26w_26', 'riyadmahendra2@gmail.com', 'science', 'dyweu', '&nbsp;feqftw84oq8hdsga udgfdsyl ydgg dhsgda dajgafga sdafkf saga');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `sn` int(11) NOT NULL,
  `user_code` varchar(300) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email_id` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`sn`, `user_code`, `user_name`, `email_id`, `password`, `status`) VALUES
(1, 'a_1e_1f_13_19_1', 'mahendra', 'riyadmahendra2@gmail.com', '1234', 0),
(2, 'B_2Y_2o_2u_26_2', 'raju', 'abc@gmail.com', '1234', 0),
(3, 'C_3Q_3U_3m_3n_3', 'mahipal', 'mahipal@gmail.com', '1234', 0),
(7, 'A_7L_7M_7o_7y_7', 'mukesh', 'mukesh@gmail.com', '1234', 1),
(5, 'C_5I_5J_5Z_58_5', 'jani', 'jani@gmail.com', '1234', 1),
(6, 'C_6D_6S_61_66_6', 'sachin', 'sachin@gmail.com', '1234', 0),
(8, 'B_8q_8s_8w_87_8', 'aaaa', 'a@gmail.com', '1234', 0),
(9, 'G_9J_9t_9v_97_9', 'khushal', 'khushal@gmail.com', '1234', 0),
(10, 'c_10f_10i_10n_102_10', 'lakhendra', 'lakhendra@gmail.com', '1234', 0),
(11, 'H_11Q_11a_11d_111_11', 'qq', 'a1@gmail.com', '123', 0),
(12, 'B_12N_12i_12j_12q_12', 'khushal', 'a2@gmail.com', '1234', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
