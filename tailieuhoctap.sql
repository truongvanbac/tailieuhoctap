-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2015 at 08:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tailieuhoctap`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`ct_id` int(5) NOT NULL,
  `ct_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ct_number_post` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ct_id`, `ct_name`, `ct_number_post`) VALUES
(1, 'Công nghệ thông tin', 7),
(2, 'Khoa học - Kỹ thuật', 0),
(8, 'Quản lý - Kinh tế', 0),
(9, 'Âm nhạc', 2),
(11, 'Nghệ thuật', 0),
(12, 'Toán học', 3),
(13, 'Sinh học', 0),
(16, 'Văn học', 0),
(20, 'Ngoại ngữ', 4),
(26, 'Hàn', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE IF NOT EXISTS `ebooks` (
`ebook_id` int(5) NOT NULL,
  `ebook_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ebook_the_loai` int(3) NOT NULL,
  `ebook_so_trang` int(5) NOT NULL,
  `ebook_mieu_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `ebook_user_up` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ebook_ngay_dang` datetime NOT NULL,
  `ebook_luot_xem` int(5) NOT NULL,
  `ebook_luot_tai` int(5) NOT NULL,
  `ebook_ten_file` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`ebook_id`, `ebook_ten`, `ebook_the_loai`, `ebook_so_trang`, `ebook_mieu_ta`, `ebook_user_up`, `ebook_ngay_dang`, `ebook_luot_xem`, `ebook_luot_tai`, `ebook_ten_file`) VALUES
(1, 'Kỹ năng giao tiếp', 1, 123, 'The American technology company Google recently set up its first campus in Asia. The campus opened last Friday in Seoul, South Korea. Google officials want the training center to support entrepreneurs who are starting up new Internet businesses. They hope this will lead to more Korean high technology programs in the world market. In return, the company wants more ties to the Korean market.', 'admin', '2015-05-16 07:05:26', 45, 5, 'adassasadsa'),
(2, 'Kỹ năng lập báo cáo', 1, 123, 'Google’s new campus can be found in an office building in Seoul’s Gangnam neighborhood. It will have 2,000 square meters of open office space where Korean Internet entrepreneurs can work.Google''s expectations for the campus, however, are much bigger than the relatively small space. The company wants to make it a place for new ideas in Asia.Mary Grove is director of Google for Entrepreneurs. She says that at Campus Seoul, Internet program developers will get support, mentoring, possible contacts, and help finding investors. She says the company is providing this supportive environment without cost. She thinks this will also help Google gain entry to the Korean market.', 'admin', '2015-05-04 15:13:31', 74, 22, ''),
(3, 'Lập trình hướng đối tượng', 1, 123, 'Google benefits when start-ups succeed as well. We understand the more start-ups that are created, companies do come on line, use the Internet, use Google, use Google products. It benefits us as well."South Korea is one of the few countries in the world where Google is not the top Internet search engine. The Korean company Naver has a larger market share.Google operates similar centers in London and Tel Aviv, but this is the company''s first campus in East Asia.', 'admin', '2015-05-12 04:28:10', 14, 3, ''),
(5, 'Thiết kế đặc tả ngoài', 1, 234, 'Google decided on Seoul because it has some of the fastest Internet speeds, and many talented, well-educated engineers. The city also has one of the highest percentages of smart phone users in the world.Jung-min Lim is the director of Campus Seoul. He says the South Korean government has also made it easier to launch new businesses.He says a few years ago the government cancelled many rules for new businesses and provided policies supporting start-ups.', 'admin', '2015-05-17 01:36:42', 25, 10, 'Bai_10_-_Thiet_ke_dac_ta_ngoai.ppt'),
(6, 'Thiết kế kiểm thử', 1, 105, 'South Korean President Park Geun-Hye attended the opening of Campus Seoul. In 2013, her administration provided $3 billion to assist new high-tech companies grow and compete around the world.I’m Mario Ritter.VOA’s Brian Padden reported on this story from Seoul. Mario Ritter adapted it for Learning English. George Grow was the editor.', 'admin', '2015-05-17 01:38:40', 56, 23, 'Bai_11_-_Thiet_ke_truong_hop_kiem_thu1.ppt'),
(7, 'Thiết kế use case ', 1, 213, 'One of the Campus Seoul members is April Kim. She started an Internet-based translation service called Chatting Cat. She says she likes the workspace and conference areas.She adds that people at the campus can share information and concerns with others there, and they can provide motivation for each other.Google decided on Seoul because it has some of the fastest Internet speeds, and many talented, well-educated engineers. The city also has one of the highest percentages of smart phone users in the world.', 'admin', '2015-05-17 01:40:32', 45, 7, 'Bai_07_-_Thiet_ke_use_case.ppt'),
(8, '[Sheet piano]Mình yêu nhau đi - Bích Hằng', 9, 22, 'The U.S. Department of Justice has charged six Chinese citizens with economic spying and stealing trade secrets. Justice officials say the suspects were sharing secret U.S. technologies with Chinese government-owned universities and companies.  U.S. officials say the suspects stole trade secrets from two U.S. technology companies, Skyworks Solutions and Avago Technologies. They produce equipment for mobile devices that process wireless signals.', 'admin', '2015-05-24 01:10:26', 0, 0, 'Minh_Yeu_Nhau_Di_-_Bich_Phuong_(The_Fingers_Vietnam).pdf'),
(9, '[Sheet piano] Tình yêu màu nắng', 9, 20, 'Iraqi security forces and several thousand Shi''ite militia members came together Tuesday outside the Iraqi city of Ramadi. The government is considering a possible offensive to re-capture the city from Islamic State militants.Prime Minister Haider al-Abadi, who is a Shi''ite, decided to send in the militia. Observers say the move could add to sectarian tensions in one of the most violent parts of Iraq.', 'admin', '2015-05-23 10:07:32', 2, 1, 'Sheet-Tinh-yeu-mau-nang.pdf'),
(10, 'Tổng quan về OOAD', 1, 123, 'The American technology company Google recently set up its first campus in Asia. The campus opened last Friday in Seoul, South Korea. Google officials want the training center to support entrepreneurs who are starting up new Internet businesses. They hope this will lead to more Korean high technology programs in the world market. In return, the company wants more ties to the Korean market.', 'Trương Văn Bắc', '2015-05-23 10:36:18', 1, 0, 'Bai_03_-_Tong_quan_ve_OOAD.ppt'),
(11, 'Kanji_Color', 20, 123, 'Google decided on Seoul because it has some of the fastest Internet speeds, and many talented, well-educated engineers. The city also has one of the highest percentages of smart phone users in the world.Jung-min Lim is the director of Campus Seoul. He says the South Korean government has also made it easier to launch new businesses.He says a few years ago the government cancelled many rules for new businesses and provided policies supporting start-ups.', 'Trương Văn Bắc', '2015-05-23 11:40:45', 1, 0, 'Kanji_Color.PDF'),
(12, 'Ma trận và dãy số', 12, 123, 'The next conditional that we''re going to talk about is the present unreal conditional. Use the present unreal conditional to talk about what you would do in an unreal, or imaginary situation. If A happened, B would happen. For example, "If I were you, I would take the job." The key word is would; it makes the conditional unreal. Would can only be used in the result clause of the sentence. Here''s an example from American singer Johnny Cash.', 'Kay B', '2015-05-23 10:39:52', 3, 1, 'Ma_trận_v'),
(13, 'Số học thuật toán', 12, 123, 'Không chỉ thi đấu kém hiệu quả trong mùa giải thứ 2 chơi cho Real, tiền vệ người xứ Wales còn không ít lần trở thành tâm điểm chỉ trích của các madridrista quá khích vì những màn trình diễn nghèo nàn của anh trong những trận cầu quan trọng – một nguyên nhân không nhỏ dẫn đến việc “Kền kền trắng” trắng tay trong mùa giải năm nay ở cả ba đấu trường lớn (Champions League, La Liga và cúp Nhà Vua).\r\n\r\nTrong bối cảnh Bale đang bị “ghẻ lạnh” ở sân Bernabeu, BLĐ MU đang có ý định giải cứu anh khỏi Madrid bằng việc chi ra một mức giá khá hời để thuyết phục Chủ tịch Florentino Perez nhả người.', 'Kay B', '2015-05-23 11:29:15', 0, 0, 'chuong_4b.pdf'),
(15, 'Chinh phục 600 từ Toeic', 20, 32, 'With Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3, we''ve rewritten the project to be mobile friendly from the start. Instead of adding on optional mobile styles, they''re baked right into the core. In fact, Bootstrap is mobile first. Mobile first styles can be found throughout the entire library instead of in separate files.', 'Trương Văn Bắc', '2015-05-23 11:32:58', 0, 0, 'Chinh_phuc_600_words_Toeic.pdf'),
(16, 'Learning at the Laundromat', 12, 312, 'Some students from the university have been helping poor, mostly immigrant children with their schoolwork. But the students did not work with the boys and girls at a traditional school. Every Thursday night, they have been meeting at a laundromat, a place where people go to wash their clothes. The college students are all studying business. They help the children do mathematics homework and increase their understanding of American English.', 'Trương Văn Bắc', '2015-05-23 11:36:50', 0, 0, 'chuong_5a.pdf'),
(17, 'Islamic State Militants Capture Two Major Cities', 20, 323, 'The self-declared Islamic State has captured two major cities in less than a week. Islamic State fighters took control of the ancient city of Palmyra in central Syria on Thursday. The fall of Palmyra reportedly left the group in control of half of Syria. It came just days after the militants seized the Iraqi city of Ramadi.\r\n\r\nPalmyra is famous for its historic ruins. Some date back nearly 2,000 years to the time of the Roman Empire. The United Nations Educational, Scientific and Cultural Organization recognizes Palmyra as a World Heritage Site.', 'Trương Văn Bắc', '2015-05-23 11:37:09', 0, 0, 'chuong_5g.pdf'),
(18, 'Successful Debate for New Learners and Large Class', 26, 321, 'Teachers of English may hesitate to teach debate because they think it is beyond their students’ language ability, or proficiency.\r\n\r\nBut debate can be a powerful tool. It can help students learn to speak naturally and to listen carefully.\r\n\r\nProfessor Charles Lebeau teaches English and debate in Japan. He wrote “Discover Debate” with Michael Lubetsky. The book helps English teachers and learners understand how to carry on a simple debate.\r\n\r\nThe “Discover Debate” approach has three stages: creating a visual aid to communicate an argument, presenting the argument and answering the other team’s argument.', 'Trương Văn Bắc', '2015-05-23 11:42:50', 6, 0, 'chuong_3a_Compatibility_Mode.pdf'),
(19, 'Good topics for debate', 20, 321, 'When teaching debate to English learners, Mr. Lebeau recommends beginning with “controlled practice.” Students work in pairs to practice saying opinions and giving reasons in short conversations. They learn to identify opinions and arguments about everyday topics, such as sports stars, foods, weather and habits. This controlled practice gives students the basic language skills they need to carry on a debate.', 'Trương Văn Bắc', '2015-05-23 11:42:52', 5, 1, 'chuong_3d_Compatibility_Mode.pdf'),
(21, 'Peter Martin is one of the four musicians.', 26, 2133, '“We have bells that come from India, we have gongs that come from Thailand. We have other bells that come from all over the European continent. Literally every continent, I believe, is represented in the instrumentation."\r\n\r\nSome are locally found objects.\r\n\r\n"It is a spring coil from heavy machinery; makes beautiful sound. It is not built to be a musical instrument but makes beautiful sound."', 'Trương Văn Bắc', '2015-05-24 01:15:31', 0, 0, 'chuong_5c.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks_up`
--

CREATE TABLE IF NOT EXISTS `ebooks_up` (
`ebook_up_id` int(5) NOT NULL,
  `ebook_up_the_loai` int(5) NOT NULL,
  `ebook_up_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ebook_up_so_trang` int(5) NOT NULL,
  `ebook_up_mieu_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `ebook_up_user_up` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ebook_up_ngay_dang` datetime NOT NULL,
  `ebook_up_ten_file` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(5) NOT NULL,
  `user_userName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_fullName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_sex` tinyint(4) DEFAULT NULL,
  `user_email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_userName`, `user_pass`, `user_fullName`, `user_sex`, `user_email`, `user_status`) VALUES
(1, 'bactv', 'a32145a237b6fe9e63bfe9216f965e01', 'Trương Văn Bắc', 1, '', 1),
(9, 'kay', 'a32145a237b6fe9e63bfe9216f965e01', 'Kay B', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
 ADD PRIMARY KEY (`ebook_id`,`ebook_the_loai`);

--
-- Indexes for table `ebooks_up`
--
ALTER TABLE `ebooks_up`
 ADD PRIMARY KEY (`ebook_up_id`,`ebook_up_the_loai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `ct_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
MODIFY `ebook_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ebooks_up`
--
ALTER TABLE `ebooks_up`
MODIFY `ebook_up_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
