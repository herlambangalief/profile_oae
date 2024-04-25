-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 06:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `vision` text NOT NULL,
  `vision_image` text NOT NULL,
  `mission` text NOT NULL,
  `mission_image` text NOT NULL,
  `customer` text NOT NULL,
  `ontime` text NOT NULL,
  `rejection_rate` text NOT NULL,
  `accident` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `vision`, `vision_image`, `mission`, `mission_image`, `customer`, `ontime`, `rejection_rate`, `accident`) VALUES
(1, '<h3 style=\"font-family: Roboto, sans-serif; font-weight: 700; color: rgb(23, 34, 77);\">Our vision</h3><p style=\"line-height: 97%; margin-top: 3.38pt; margin-bottom: 0pt; margin-left: 0.25in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt;\r\nfont-family:\" gill=\"\" sans=\"\" mt\";mso-ascii-font-family:\"gill=\"\" mt\";mso-fareast-font-family:=\"\" +mn-ea;mso-bidi-font-family:\"gill=\"\" mt\";mso-fareast-theme-font:minor-fareast;=\"\" color:black;mso-color-index:1;letter-spacing:-.04pt;mso-font-kerning:12.0pt;=\"\" language:en-us;mso-style-textfill-type:solid;mso-style-textfill-fill-themecolor:=\"\" text1;mso-style-textfill-fill-color:black;mso-style-textfill-fill-alpha:100.0%\"=\"\">â€œ\r\nBe a Company producing automotive components</span></p><p style=\"language:en-US;line-height:97%;margin-top:6.12pt;margin-bottom:0pt;\r\nmargin-left:.91in;margin-right:1.18in;text-align:center;direction:ltr;\r\nunicode-bidi:embed;mso-line-break-override:none;word-break:normal;punctuation-wrap:\r\nhanging\"><span style=\"font-size:18.0pt;font-family:\" gill=\"\" sans=\"\" mt\";mso-ascii-font-family:=\"\" \"gill=\"\" mt\";mso-fareast-font-family:+mn-ea;mso-bidi-font-family:\"gill=\"\" mt\";=\"\" mso-fareast-theme-font:minor-fareast;color:black;mso-color-index:1;letter-spacing:=\"\" -.02pt;mso-font-kerning:12.0pt;language:en-us;mso-style-textfill-type:solid;=\"\" mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-color:black;=\"\" mso-style-textfill-fill-alpha:100.0%\"=\"\">And manufacturing realible leader</span></p><p class=\"mb-4\" style=\"color: rgb(108, 113, 118); font-family: Inter, sans-serif; font-size: 16px;\">\r\n\r\n\r\n\r\n</p><p style=\"language:en-US;line-height:97%;margin-top:.7pt;margin-bottom:0pt;\r\nmargin-left:0in;margin-right:.25in;text-align:center;direction:ltr;unicode-bidi:\r\nembed;mso-line-break-override:none;word-break:normal;punctuation-wrap:hanging\"><span style=\"font-size:18.0pt;font-family:\" gill=\"\" sans=\"\" mt\";mso-ascii-font-family:\"gill=\"\" mt\";=\"\" mso-fareast-font-family:+mn-ea;mso-bidi-font-family:\"gill=\"\" mt\";mso-fareast-theme-font:=\"\" minor-fareast;color:black;mso-color-index:1;letter-spacing:0pt;mso-font-kerning:=\"\" 12.0pt;language:en-us;mso-style-textfill-type:solid;mso-style-textfill-fill-themecolor:=\"\" text1;mso-style-textfill-fill-color:black;mso-style-textfill-fill-alpha:100.0%\"=\"\">Among\r\nsmall and medium enterprises in indonesia\"</span></p>', 'Capture.PNG', '<h3 style=\"font-family: Roboto, sans-serif; font-weight: 700; color: rgb(23, 34, 77);\">Our mission</h3><p style=\"line-height: 19.55pt; margin: 0pt 0.04in 0pt 0.03in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt;\r\nfont-family:\" gill=\"\" sans=\"\" mt\";mso-ascii-font-family:\"gill=\"\" mt\";mso-fareast-font-family:=\"\" +mn-ea;mso-bidi-font-family:\"gill=\"\" mt\";mso-fareast-theme-font:minor-fareast;=\"\" color:black;mso-color-index:1;letter-spacing:-.03pt;mso-font-kerning:12.0pt;=\"\" language:en-us;mso-style-textfill-type:solid;mso-style-textfill-fill-themecolor:=\"\" text1;mso-style-textfill-fill-color:black;mso-style-textfill-fill-alpha:100.0%\"=\"\">1.Provide\r\nthe Best sevice to customers</span></p><p style=\"line-height: 97%; margin-top: 0.32pt; margin-bottom: 0pt; margin-left: 0.01in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt;\r\nfont-family:\" gill=\"\" sans=\"\" mt\";mso-ascii-font-family:\"gill=\"\" mt\";mso-fareast-font-family:=\"\" +mn-ea;mso-bidi-font-family:\"gill=\"\" mt\";mso-fareast-theme-font:minor-fareast;=\"\" color:black;mso-color-index:1;letter-spacing:-.02pt;mso-font-kerning:12.0pt;=\"\" language:en-us;mso-style-textfill-type:solid;mso-style-textfill-fill-themecolor:=\"\" text1;mso-style-textfill-fill-color:black;mso-style-textfill-fill-alpha:100.0%\"=\"\">2.Increasing\r\nthe use of technologies</span></p><p style=\"line-height: 97%; margin-top: 0.32pt; margin-bottom: 0pt; margin-left: 0.01in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><br></p><p style=\"line-height: 97%; margin-top: 0.32pt; margin-bottom: 0pt; margin-left: 0.01in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size: 18pt; text-indent: 0in;\">3.Make products at competitive price&nbsp;</span></p><p style=\"line-height: normal; margin: 0.7pt 0.22in 0pt 0.01in; text-indent: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt;font-family:\" gill=\"\" sans=\"\" mt\";=\"\" mso-ascii-font-family:\"gill=\"\" mt\";mso-fareast-font-family:+mn-ea;mso-bidi-font-family:=\"\" \"gill=\"\" mt\";mso-fareast-theme-font:minor-fareast;color:black;mso-color-index:=\"\" 1;letter-spacing:-.04pt;mso-font-kerning:12.0pt;language:en-us;mso-style-textfill-type:=\"\" solid;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-color:=\"\" black;mso-style-textfill-fill-alpha:100.0%\"=\"\">4.Delivery of products to customers on</span></p><p style=\"line-height: normal; margin: 0.7pt 0.22in 0pt 0.01in; text-indent: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size:18.0pt;font-family:\" gill=\"\" sans=\"\" mt\";=\"\" mso-ascii-font-family:\"gill=\"\" mt\";mso-fareast-font-family:+mn-ea;mso-bidi-font-family:=\"\" \"gill=\"\" mt\";mso-fareast-theme-font:minor-fareast;color:black;mso-color-index:=\"\" 1;letter-spacing:-.04pt;mso-font-kerning:12.0pt;language:en-us;mso-style-textfill-type:=\"\" solid;mso-style-textfill-fill-themecolor:text1;mso-style-textfill-fill-color:=\"\" black;mso-style-textfill-fill-alpha:100.0%\"=\"\">&nbsp;time&nbsp;</span></p><p style=\"line-height: normal; margin: 0.7pt 0.22in 0pt 0.01in; text-indent: 0in; direction: ltr; unicode-bidi: embed; word-break: normal;\"><span style=\"font-size: 18pt; text-indent: 0in;\">5.Developing human resource</span></p>', 'Capture2.PNG', '100', '90', '0.3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(30) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `file_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `company_name`, `description`, `file_path`, `date_created`, `date_updated`) VALUES
(6, 'PT. INGRESS MALINDO VENTURES ', 'TOOLING AND STAMPING', 'l1.PNG', '2023-08-01 23:38:48', '0000-00-00 00:00:00'),
(7, 'PT. HANYA KARYA BAHANA ', 'TOOLING AND STAMPING&nbsp;', 'l2.PNG', '2023-08-01 23:39:18', '0000-00-00 00:00:00'),
(8, 'PT.TRIMITRA CHITRAHASTA ', 'TOOLING', 'l3.PNG', '2023-08-01 23:39:37', '0000-00-00 00:00:00'),
(9, 'PT. NUSA TOYOTETSU CORPORATION  ', 'TOOLING', 'l4.PNG', '2023-08-01 23:39:58', '0000-00-00 00:00:00'),
(10, 'PT.ADIYAWINSA STAMPING INDONESIA  ', 'TOOLING', 'l5.PNG', '2023-08-01 23:40:16', '0000-00-00 00:00:00'),
(11, 'PT.ADIYAWINSA SUMMIT INDONESIA  ', 'TOOLING', 'l6.PNG', '2023-08-01 23:40:34', '0000-00-00 00:00:00'),
(12, 'PT. MEKAR ARMADA JAYA  ', 'TOOLING', 'l7.PNG', '2023-08-01 23:41:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `linkin` text NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `mobile`, `email`, `facebook`, `twitter`, `linkin`, `address_1`, `address_2`) VALUES
(1, '021 892 834 48', 'oaemanufactur@gmail.com', 'oaemanufactur', 'oaemanufactur', 'oaemanufactur', 'Jl.Kampung Ceper RT.04 RW.02 Kel.Sukasari Kec.Serang Baru. Cikarang, Bekasi, Jawa Barat. 17330 - Indonesia', 'Jl.Kampung Ceper RT.04 RW.02 Kel.Sukasari Kec.Serang Baru. Cikarang, Bekasi, Jawa Barat. 17330 - Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(2) NOT NULL,
  `website_name` text NOT NULL,
  `banner_1` text NOT NULL,
  `banner_2` text NOT NULL,
  `banner_text_1` text NOT NULL,
  `banner_text_2` text NOT NULL,
  `quality_policy` text NOT NULL,
  `qp_image` text NOT NULL,
  `logo` text NOT NULL,
  `last_edited` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `website_name`, `banner_1`, `banner_2`, `banner_text_1`, `banner_text_2`, `quality_policy`, `qp_image`, `logo`, `last_edited`) VALUES
(1, 'PT. OAE MANUFAKTUR INDONESIA', 'Capture.PNG', 'Capture2.PNG', '<h1><font color=\"#ccff99\">Be a company producing automotive components</font></h1><h2 style=\"font-family: Poppins, Helvetica, sans-serif;\"><font color=\"#ccff99\">manufacturing realible leader among small and medium enterpries in indonesia</font></h2>', '<h1 style=\"font-family: Poppins, Helvetica, sans-serif;\"><font color=\"#ccff99\">Be a company producing automotive components</font></h1><h2 style=\"font-family: Poppins, Helvetica, sans-serif;\"><font color=\"#ccff99\">manufacturing realible leader among small and medium enterpries in indonesia</font></h2>', '<h6 class=\"text-secondary text-uppercase\" style=\"font-family: Roboto, sans-serif; font-weight: 700; color: rgb(255, 73, 23) !important;\">WE ARE BEST OPTION FOR</h6><h1 class=\"mb-4\" style=\"font-family: Roboto, sans-serif; font-weight: 700; color: rgb(23, 34, 77);\">Best service to customer and increasing the use of appropiate technologies</h1><div><br></div><h3><p class=\"mb-4\" style=\"color: rgb(108, 113, 118); font-family: Inter, sans-serif; font-size: 16px;\">OUR QUALITY POLICY</p><p class=\"fw-medium text-primary\" style=\"margin-bottom: 1rem; font-family: Inter, sans-serif; font-size: 16px; color: rgb(30, 96, 170) !important; font-weight: 600 !important;\"><span class=\"fa fa-check text-success me-3\" style=\"font-family: \" font=\"\" awesome=\"\" 5=\"\" free\";=\"\" font-weight:=\"\" 900;=\"\" margin-right:=\"\" 1rem=\"\" !important;=\"\" color:=\"\" rgb(25,=\"\" 135,=\"\" 84)=\"\" !important;\"=\"\"></span>Good Quality Product</p><p class=\"fw-medium text-primary\" style=\"margin-bottom: 1rem; font-family: Inter, sans-serif; font-size: 16px; color: rgb(30, 96, 170) !important; font-weight: 600 !important;\"><span class=\"fa fa-check text-success me-3\" style=\"font-family: \" font=\"\" awesome=\"\" 5=\"\" free\";=\"\" font-weight:=\"\" 900;=\"\" margin-right:=\"\" 1rem=\"\" !important;=\"\" color:=\"\" rgb(25,=\"\" 135,=\"\" 84)=\"\" !important;\"=\"\"></span>On Time Delivery and Good Quantity</p><p class=\"fw-medium text-primary\" style=\"margin-bottom: 1rem; font-family: Inter, sans-serif; font-size: 16px; color: rgb(30, 96, 170) !important; font-weight: 600 !important;\"><span class=\"fa fa-check text-success me-3\" style=\"font-family: \" font=\"\" awesome=\"\" 5=\"\" free\";=\"\" font-weight:=\"\" 900;=\"\" margin-right:=\"\" 1rem=\"\" !important;=\"\" color:=\"\" rgb(25,=\"\" 135,=\"\" 84)=\"\" !important;\"=\"\"></span>Making Product with Competitive Price</p><p class=\"fw-medium text-primary\" style=\"margin-bottom: 1rem; font-family: Inter, sans-serif; font-size: 16px; color: rgb(30, 96, 170) !important; font-weight: 600 !important;\"><span class=\"fa fa-check text-success me-3\" style=\"font-family: \" font=\"\" awesome=\"\" 5=\"\" free\";=\"\" font-weight:=\"\" 900;=\"\" margin-right:=\"\" 1rem=\"\" !important;=\"\" color:=\"\" rgb(25,=\"\" 135,=\"\" 84)=\"\" !important;\"=\"\"></span>Improving the Quality of Human Resources</p><p class=\"fw-medium text-primary\" style=\"margin-bottom: 1rem; font-family: Inter, sans-serif; font-size: 16px; color: rgb(30, 96, 170) !important; font-weight: 600 !important;\"><span class=\"fa fa-check text-success me-3\" style=\"font-family: \" font=\"\" awesome=\"\" 5=\"\" free\";=\"\" font-weight:=\"\" 900;=\"\" margin-right:=\"\" 1rem=\"\" !important;=\"\" color:=\"\" rgb(25,=\"\" 135,=\"\" 84)=\"\" !important;\"=\"\"></span>Continouse Improvement in Quality</p></h3>', 'Capture1.PNG', 'Capture1.PNG', '2023/08/01 06:10:01pm');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(30) NOT NULL,
  `full_name` text NOT NULL,
  `subject` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `full_name`, `subject`, `contact`, `email`, `message`, `status`, `date_created`, `date_updated`) VALUES
(6, 'fikideku', 'kerja sama', '089123456789', 'fikideku@email.com', 'Kepada Yth : Pimpinan Perusahaan\r\nUp. Purchasing dept / Import Dept / Marketing Dept.\r\nPerihal : Penawaran Jasa Customs Clearence Import\r\n\r\nDengan hormat,\r\nPerkenalkan Kami dari PT.Twins Original Porta, mengenalkan diri sebagai perusahaan barang Exspedisi cargo air craft (EMKU) & Exspedisi Cargo Ships (EMKL) Int\'l Freight Forwarding,yang tinggal di Gedung Maribaya ,Lt.3. Jl.Otista Raya No.141 Jakarta Timur Indonesia 13330\r\nkami siap bekerjasama dengan pihak Bapak/Ibu saat ini.\r\nPT.Twins Original Porta.\r\nBerkomitmen untuk menjadi mitra yang baik dan tepat bagi pelanggan yang mengimpor planing. Jika perusahaan Bapak/Ibu tidak memiliki Izin Impor, sedangkan kebutuhan untuk mengimpor sangat mendesak,maka kami menawarkan solusi yang tepat dalam hal impor yaitu dapat menggunakan Undername Perusahaan kami sebagai Consignee.(API-U/NIB atau izin lainnya)\r\n\r\nLayanan di Perusahaan Kami : Izin yang kami miliki antara lain :\r\n> By Air & By Sea Freight Service > API-P dengan XX bagian HS\r\n> Ex-Work, FOB, & CIF > SPI ( Produk Kehutanan )\r\n> Singapore to Indonesia / China to Indonesia > SPI / IT Besi baja ( SPI QUOTA\r\n> Taiwan to Indonesia / Europe to Indonesia > LS ( Laporan Surveyor )\r\n> Malaysia to Indonesia > LS Alas kaki\r\n> Tanjung Priok Port / Surabaya Port > LS Electronic\r\n> Lampung Port / Semarang Port / Medan Port > LS Mainan\r\n> Import Customs Clearence Service > LS Pakaian jadi\r\n> Domestic Services > LS Garment\r\n> Export Services\r\n> Borongan ( All-In )\r\n> Undername Import QUOTA SPI Besi & Baja\r\n> Undername (Penyewaan Consegnee)\r\n\r\nMengenai proses pengeluaran Barang Import ataupun Servis lain yang terpilih, diperkuat dengan MOU bermaterai demi terciptanya suatu kepercayaan dan kekuatan Hukum bersama.Untuk informasi lebih lanjut mengenai tarif atau biaya yang diperlukan untuk pengurusan Import, Expor, Door to Door, trucking dan biaya-biaya service lainnya yang kami sebutkan diatas, silakan menghubungi kami di Hotline Service kami :\r\nDemikian surat perkenalan dan penawaran dari kami, atas perhatian Bapak/ Ibu kami ucapkan terima kasih.\r\nBest Regards\r\n\r\nS A F R I Z A L\r\nManager,Import\r\nMobile : 0812 8036 2246 /WhatsApp\r\nE-mail : safrizalr228@gmail.com\r\n\r\nPT.TWINS ORIGINAL PORTA\r\nGedung Maribaya Lt.3\r\nJl.Otista Raya No.141,Jakarta Timur 13330\r\nTLP : +62 21 2101 1979\r\nFax : +62 21 2138 1962\r\nWebsite : https://jasaimporttop.blogspot.com', 1, '2023-06-29 05:27:47', '2023-07-26 01:02:32'),
(7, 'fikideku', 'kerja sama', '089123456789', 'fikideku@email.com', 'Kepada Yth : Pimpinan Perusahaan\r\nUp. Purchasing dept / Import Dept / Marketing Dept.\r\nPerihal : Penawaran Jasa Customs Clearence Import\r\n\r\nDengan hormat,\r\nPerkenalkan Kami dari PT.Twins Original Porta, mengenalkan diri sebagai perusahaan barang Exspedisi cargo air craft (EMKU) & Exspedisi Cargo Ships (EMKL) Int\'l Freight Forwarding,yang tinggal di Gedung Maribaya ,Lt.3. Jl.Otista Raya No.141 Jakarta Timur Indonesia 13330\r\nkami siap bekerjasama dengan pihak Bapak/Ibu saat ini.\r\nPT.Twins Original Porta.\r\nBerkomitmen untuk menjadi mitra yang baik dan tepat bagi pelanggan yang mengimpor planing. Jika perusahaan Bapak/Ibu tidak memiliki Izin Impor, sedangkan kebutuhan untuk mengimpor sangat mendesak,maka kami menawarkan solusi yang tepat dalam hal impor yaitu dapat menggunakan Undername Perusahaan kami sebagai Consignee.(API-U/NIB atau izin lainnya)\r\n\r\nLayanan di Perusahaan Kami : Izin yang kami miliki antara lain :\r\n> By Air & By Sea Freight Service > API-P dengan XX bagian HS\r\n> Ex-Work, FOB, & CIF > SPI ( Produk Kehutanan )\r\n> Singapore to Indonesia / China to Indonesia > SPI / IT Besi baja ( SPI QUOTA\r\n> Taiwan to Indonesia / Europe to Indonesia > LS ( Laporan Surveyor )\r\n> Malaysia to Indonesia > LS Alas kaki\r\n> Tanjung Priok Port / Surabaya Port > LS Electronic\r\n> Lampung Port / Semarang Port / Medan Port > LS Mainan\r\n> Import Customs Clearence Service > LS Pakaian jadi\r\n> Domestic Services > LS Garment\r\n> Export Services\r\n> Borongan ( All-In )\r\n> Undername Import QUOTA SPI Besi & Baja\r\n> Undername (Penyewaan Consegnee)\r\n\r\nMengenai proses pengeluaran Barang Import ataupun Servis lain yang terpilih, diperkuat dengan MOU bermaterai demi terciptanya suatu kepercayaan dan kekuatan Hukum bersama.Untuk informasi lebih lanjut mengenai tarif atau biaya yang diperlukan untuk pengurusan Import, Expor, Door to Door, trucking dan biaya-biaya service lainnya yang kami sebutkan diatas, silakan menghubungi kami di Hotline Service kami :\r\nDemikian surat perkenalan dan penawaran dari kami, atas perhatian Bapak/ Ibu kami ucapkan terima kasih.\r\nBest Regards\r\n\r\nS A F R I Z A L\r\nManager,Import\r\nMobile : 0812 8036 2246 /WhatsApp\r\nE-mail : safrizalr228@gmail.com\r\n\r\nPT.TWINS ORIGINAL PORTA\r\nGedung Maribaya Lt.3\r\nJl.Otista Raya No.141,Jakarta Timur 13330\r\nTLP : +62 21 2101 1979\r\nFax : +62 21 2138 1962\r\nWebsite : https://jasaimporttop.blogspot.com', 1, '2023-06-29 05:27:47', '2023-07-26 01:02:35'),
(20, 'baru', 'kerja sama', 'baru', 'm.herlambangalif@yahoo.co.id', 'Kepada Yth : Pimpinan Perusahaan\r\nUp. Purchasing dept / Import Dept / Marketing Dept.\r\nPerihal : Penawaran Jasa Customs Clearence Import\r\n\r\nDengan hormat,\r\nPerkenalkan Kami dari PT.Twins Original Porta, mengenalkan diri sebagai perusahaan barang Exspedisi cargo air craft (EMKU) & Exspedisi Cargo Ships (EMKL) Int`l Freight Forwarding,yang tinggal di Gedung Maribaya ,Lt.3. Jl.Otista Raya No.141 Jakarta Timur Indonesia 13330\r\nkami siap bekerjasama dengan pihak Bapak/Ibu saat ini.\r\nPT.Twins Original Porta.\r\nBerkomitmen untuk menjadi mitra yang baik dan tepat bagi pelanggan yang mengimpor planing. Jika perusahaan Bapak/Ibu tidak memiliki Izin Impor, sedangkan kebutuhan untuk mengimpor sangat mendesak,maka kami menawarkan solusi yang tepat dalam hal impor yaitu dapat menggunakan Undername Perusahaan kami sebagai Consignee.(API-U/NIB atau izin lainnya)\r\n\r\nLayanan di Perusahaan Kami : Izin yang kami miliki antara lain :\r\n> By Air & By Sea Freight Service > API-P dengan XX bagian HS\r\n> Ex-Work, FOB, & CIF > SPI ( Produk Kehutanan )\r\n> Singapore to Indonesia / China to Indonesia > SPI / IT Besi baja ( SPI QUOTA\r\n> Taiwan to Indonesia / Europe to Indonesia > LS ( Laporan Surveyor )\r\n> Malaysia to Indonesia > LS Alas kaki\r\n> Tanjung Priok Port / Surabaya Port > LS Electronic\r\n> Lampung Port / Semarang Port / Medan Port > LS Mainan\r\n> Import Customs Clearence Service > LS Pakaian jadi\r\n> Domestic Services > LS Garment\r\n> Export Services\r\n> Borongan ( All-In )\r\n> Undername Import QUOTA SPI Besi & Baja\r\n> Undername (Penyewaan Consegnee)\r\n\r\nMengenai proses pengeluaran Barang Import ataupun Servis lain yang terpilih, diperkuat dengan MOU bermaterai demi terciptanya suatu kepercayaan dan kekuatan Hukum bersama.Untuk informasi lebih lanjut mengenai tarif atau biaya yang diperlukan untuk pengurusan Import, Expor, Door to Door, trucking dan biaya-biaya service lainnya yang kami sebutkan diatas, silakan menghubungi kami di Hotline Service kami :\r\nDemikian surat perkenalan dan penawaran dari kami, atas perhatian Bapak/ Ibu kami ucapkan terima kasih.\r\nBest Regards\r\n\r\nS A F R I Z A L\r\nManager,Import\r\nMobile : 0812 8036 2246 /WhatsApp\r\nE-mail : safrizalr228@gmail.com\r\n\r\nPT.TWINS ORIGINAL PORTA\r\nGedung Maribaya Lt.3\r\nJl.Otista Raya No.141,Jakarta Timur 13330\r\nTLP : +62 21 2101 1979\r\nFax : +62 21 2138 1962\r\nWebsite : https://jasaimporttop.blogspot.com', 1, '2023-07-26 15:09:00', '2023-08-01 14:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_image`) VALUES
(12, 'reinf fr upr frame r/l', 'a1.PNG'),
(13, 'reinf fr dr upr frame r/l', 'a2.PNG'),
(14, 'brkt r/dr wdo sash fr b', 'a3.PNG'),
(15, 'brkt r/dr wdo sash rr lwr fr', 'a4.PNG'),
(16, 'ymr 4', 'a5.PNG'),
(17, '40l452', 'a10.PNG'),
(18, '40l452', 'a12.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text,
  `file_path` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `file_path`, `date_created`, `date_updated`) VALUES
(7, 'frame', 'Reinf Fr Upr Frame R/L', 'a1.PNG', '2023-08-01 23:34:56', '0000-00-00 00:00:00'),
(8, 'High Tensile', 'Experion High Tensile', 'a6.PNG', '2023-08-01 23:35:43', '0000-00-00 00:00:00'),
(9, 'Isolator', 'Experion Isolator', 'a10.PNG', '2023-08-01 23:36:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(30) NOT NULL,
  `message_from` text NOT NULL,
  `message` text NOT NULL,
  `file_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `message_from`, `message`, `file_path`, `date_created`, `date_updated`) VALUES
(5, 'PT. INGRESS MALINDO VENTURES ', 'hasil sangat baik dan tepat waktu', 'l1.PNG', '2023-08-01 23:42:07', '0000-00-00 00:00:00'),
(6, 'PT.TRIMITRA CHITRAHASTA', 'hasil sangat baik dan tepat waktu', 'l2.PNG', '2023-08-01 23:42:41', '0000-00-00 00:00:00'),
(7, 'PT.NANDYA KARYA PERKASA', 'hasil sangat baik dan tepat waktu', 'l3.PNG', '2023-08-01 23:43:09', '0000-00-00 00:00:00'),
(8, 'PT NUSA TOYOSETSU CORPORATION', 'hasil sangat baik dan tepat waktu', 'l4.PNG', '2023-08-01 23:43:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `tools_image` text NOT NULL,
  `tools_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `tools_image`, `tools_name`) VALUES
(9, '1.PNG', 'm.press 150t'),
(10, '2.PNG', 'm.press 110t'),
(11, '3.PNG', 'm.press 25t'),
(12, '4.PNG', 'm.press 110t'),
(13, '6.PNG', 'm.press 60t'),
(14, '7.PNG', 'm cnc 1'),
(15, '8.PNG', 'm cnc 2'),
(16, '9.PNG', 'm bubut'),
(17, '10.PNG', 'm grinding'),
(18, '11.PNG', 'm radial drill'),
(19, '12.PNG', 'm milling manual');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text,
  `last_login` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `date_added`, `date_updated`) VALUES
(7, 'fiki', 'fiki', 'admins', '0192023a7bbd73250516f069df18b500', 'testimonial-2.jpg', NULL, '2023-07-25 13:25:48', NULL),
(8, 'feila', 'feila', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'download (9).jpg', NULL, '2023-07-27 13:30:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `view_total` int(11) NOT NULL,
  `view_date` text NOT NULL,
  `view_md` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `view_total`, `view_date`, `view_md`) VALUES
(1, 47, '27-07-2023', '27-Jul'),
(2, 19, '28-07-2023', '28-Jul'),
(3, 19, '31-07-2023', '31-Jul'),
(4, 19, '01-08-2023', '01-Aug');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
