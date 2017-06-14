-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 04:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhatnga`
--

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `data` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `name`, `data`, `created_at`, `updated_at`) VALUES
(1, 'tour-description', '	<h2>Product Description</h2>\r\n										<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus. Aliquam. Massa aptent senectus elementum taciti.Id sodales morbi felis eu mus auctor ullamcorper. Litora. In nostra tempus, habitant. Nam tristique.</p>\r\n										<p>Felis venenatis metus placerat taciti malesuada ultricies bibendum nunc hymenaeos orci erat mollis pretium ligula ligulamus pellentesque urna. Sagittis bibendum justo congue facilisi. Aliquam potenti sagittis etiam facilisis vehicula. Id.</p>\r\n										<table class=\"tours-tabs_table\">\r\n											<tbody>\r\n											<tr>\r\n												<td><strong>DEPARTURE/RETURN LOCATION</strong></td>\r\n												<td>San Francisco International Airport</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>DEPARTURE TIME</strong></td>\r\n												<td>Please arrive at least&nbsp;2 hours before the flight.</td>\r\n											</tr>\r\n											<tr>\r\n												<td><strong>INCLUDED</strong></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Airfare\r\n															</td>\r\n															<td><i class=\"fa fa-check icon-tick icon-tick--on\"></i>Accommodations\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>2 days cruise\r\n															</td>\r\n															<td>\r\n																<i class=\"fa fa-check icon-tick icon-tick--on\"></i>Professional guide\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											<tr>\r\n												<td><b>NOT INCLUDED</b></td>\r\n												<td>\r\n													<table>\r\n														<tbody>\r\n														<tr>\r\n															<td>\r\n																<i class=\"fa fa-times icon-tick icon-tick--off\"></i>Entrance fees\r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td><i class=\"fa fa-times icon-tick icon-tick--off\"></i>Guide&nbsp;gratuity\r\n															</td>\r\n														</tr>\r\n														</tbody>\r\n													</table>\r\n												</td>\r\n											</tr>\r\n											</tbody>\r\n										</table>\r\n										<p>Ridiculus sociis dui eu vivamus tempor justo diam aliquam. Ipsum nunc purus, pede sed placerat sit habitasse potenti eleifend magna mus sociosqu hymenaeos cras metus mi donec tortor nisi leo dignissim turpis sit torquent.</p>\r\n										<p>Potenti mattis ad mollis eleifend Phasellus adipiscing ullamcorper interdum faucibus orci litora ornare aliquam. Ligula feugiat scelerisque. Molestie. Facilisi hac.</p>', NULL, NULL),
(2, 'tour-itinerary', '										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">1</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 1: Departure</strong></h2>\r\n												<p>Ornare proin neque tempus cubilia cubilia blandit netus.<br>\r\n													Maecenas massa. Fermentum.</p>\r\n												<ul>\r\n													<li>Pretium vitae tempus sem enim enim.</li>\r\n													<li>Tempus, leo, taciti augue aliquam hendrerit.</li>\r\n													<li>Accumsan pharetra eros justo augue posuere felis elit cras montes fames.</li>\r\n													<li>Vulputate dictumst egestas etiam dictum varius.</li>\r\n												</ul>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">2</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 2</strong></h2>\r\n												<p>Tortor elementum egestas metus potenti habitasse tempus natoque senectus commodo rutrum quisque fermentum. Nisi velit primis dapibus odio consequat facilisi sollicitudin porta nulla tellus sagittis platea tempor sed parturient convallis consectetuer Vulputate curae; pharetra.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">3</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 3</strong></h2>\r\n												<p>Fusce sagittis viverra lorem proin porttitor conubia risus vivamus. Mollis. Luctus curabitur porta nibh penatibus aliquet nec conubia magnis semper, sem feugiat scelerisque molestie. Nibh proin dapibus phasellus lacus. Facilisi.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">4</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 4</strong></h2>\r\n												<p>Pretium consequat, facilisis sem in malesuada sodales et ipsum proin eleifend tincidunt, urna morbi metus quisque. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">\r\n											<p><span class=\"icon-left\">5</span></p>\r\n											<div class=\"item_content\">\r\n												<h2><strong>Day 5</strong></h2>\r\n												<p>Egestas maecenas hac nullam integer at. Lacinia habitasse ridiculus sapien platea a cursus hendrerit tempor facilisi orci at tempor, senectus.</p>\r\n											</div>\r\n										</div>\r\n										<div class=\"interary-item\">', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
