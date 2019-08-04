-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Agu 2019 pada 16.48
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_servicedesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `idcustomer` int(11) NOT NULL AUTO_INCREMENT,
  `namacustomer` varchar(50) DEFAULT NULL,
  `alamat` text,
  `Telp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `PIC` varchar(50) DEFAULT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `alamat_pasang` text,
  `status_hunian` enum('hak_milik','sewa_lahan') DEFAULT NULL,
  `loket_pembayaran` enum('pondok_ungu','teluk_buyung','medan_satria') DEFAULT NULL,
  `jenis_tarif` enum('Rumah Tangga','Niaga','Industri','Sosial','Khusus') DEFAULT NULL,
  `tgl_berlangganan` int(11) DEFAULT NULL,
  `no_register` int(8) DEFAULT NULL,
  PRIMARY KEY (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`idcustomer`, `namacustomer`, `alamat`, `Telp`, `email`, `PIC`, `time`, `ip`, `alamat_pasang`, `status_hunian`, `loket_pembayaran`, `jenis_tarif`, `tgl_berlangganan`, `no_register`) VALUES
(1, 'Indra Hardianto', 'Jl. Kh. Muchtar thbarani Rt.04/05 no. 20 marga mulya', '085711245680', 'indra@gmail.com', 'septian cahya', 1519612065, '::1', 'Jl. Kh. Muchtar thbarani Rt.04/05 no. 20 marga mulya', 'hak_milik', 'teluk_buyung', 'Niaga', 20180225, 9456),
(2, 'Agung Gunawan', 'Jl. Agus salim rt. 02/004 no. 12 .', '085711245680', 'Agung.gunawan123@gmail.com', 'Amirull', 1519612035, '::1', 'Jl. Agus salim rt. 02/004 no. 12 .', 'hak_milik', 'teluk_buyung', 'Niaga', 20180225, 3084),
(3, 'Susi meliani', 'Kp. sawah indah rt.03/005 no.25 marga mulya', '02188989478', 'susi.melani@ymail.com', 'danang', 1518855286, '::1', 'Kp. sawah indah rt.03/005 no.25 marga mulya', 'hak_milik', 'medan_satria', 'Niaga', 20180225, 6145),
(4, 'Anwar Sanusi Ilyas', 'Jl. lingkar utara , no.21 kp.bulak perwira kec. bekasi utara', '085711245680', 'anwar.ilyas@gmail.com', 'dadang', 1518855400, '::1', 'Jl. lingkar utara , no.21 kp.bulak perwira kec. bekasi uta', 'sewa_lahan', 'teluk_buyung', 'Niaga', 20180217, 5402),
(5, 'Jauhari Malik', 'Jl. Agus Salim rt.04/003 no.23,', '0214356732455', 'jauhari.malik@gmail.com', 'septian cahya', 1518939690, '::1', 'Jl. Agus Salim rt.04/003 no.23,', 'hak_milik', 'pondok_ungu', 'Rumah Tangga', 20180214, 1631),
(6, 'Ida Nurhayati', 'Jl. Lingkar Utara rt. 03/002, Kp. bulak perwira', '021 345346324', 'ida22@ymail.com', '-', 1518939819, '::1', 'Jl. Lingkar Utara rt. 03/002, Kp. bulak perwira', 'sewa_lahan', 'pondok_ungu', 'Industri', 20180213, 1964),
(7, 'Fatimah Subur', 'Jl. Serma Marzuki rt.03/002, no. 14', '0857753617393', 'fatimah.subur@gmail.com', 'hasan', 1519111828, '::1', 'Jl. Serma Marzuki rt.03/002, no. 14', 'hak_milik', 'pondok_ungu', 'Rumah Tangga', 20180220, 3331),
(8, 'Indah Nuriyana', 'Jl. Agus Salim rt.02/01 no.13', '021 889894528', 'Indah.nuriya@gmail.com', 'hasan', 1520267487, '::1', 'Jl. Agus Salim rt.02/01 no.13', 'hak_milik', 'teluk_buyung', 'Niaga', 20180225, 3376),
(9, 'Anjar Anugrah', 'Jl. Lingkar utara rt. 03/02 no.15 bulak perwira', '021 88934786', '', 'reyhan', 1520267140, '::1', 'Jl. Lingkar utara rt. 03/02 no.15 bulak perwira', 'hak_milik', 'pondok_ungu', '', 20180225, 3974),
(10, 'Ade Rizkha Maulina', 'Jl. Perwira Sari . rt 03/01 no. 12 , kelurahan perwira', '085711245680', '', 'diana', 1520267436, '::1', 'Jl. Perwira Sari . rt 03/01 no. 12 , kelurahan perwira', 'hak_milik', 'teluk_buyung', 'Niaga', 20180225, 4986),
(11, 'Junaedi nur', 'Jl. KH. Muchtar Thabrani rt.04/05 no. 24. kaliabang nangka', '085711245680', 'Junaedi.noor@gmail.com', 'Septi', 1520411571, '::1', 'Jl. KH. Muchtar Thabrani rt.04/05 no. 24. kaliabang nangka', 'hak_milik', 'medan_satria', '', 20180225, 4775),
(12, 'Supriyatna', 'Jl. Serma Marzuki Rt.01/04 no. 12 bekasi barat', '089776383645', 'reza.ali@gmail.com', 'Ferry', 1563373370, '127.0.0.1', 'Jl. Serma Marzuki Rt.01/04 no. 12 bekasi barat', 'hak_milik', 'teluk_buyung', 'Niaga', 20180217, 3325);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_emails`
--

CREATE TABLE IF NOT EXISTS `log_emails` (
  `idemail` int(11) NOT NULL AUTO_INCREMENT,
  `idticket` int(11) DEFAULT NULL,
  `emailto` varchar(255) DEFAULT NULL,
  `emailcc` varchar(255) DEFAULT NULL,
  `emailbcc` varchar(255) DEFAULT NULL,
  `emailsubject` varchar(255) DEFAULT NULL,
  `message` text,
  `emailstatus` varchar(50) DEFAULT NULL,
  `senddate` int(11) DEFAULT NULL,
  PRIMARY KEY (`idemail`),
  KEY `senddate` (`senddate`),
  KEY `idticket` (`idticket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_tickets`
--

CREATE TABLE IF NOT EXISTS `log_tickets` (
  `id` int(11) DEFAULT NULL,
  `sla` varchar(10) DEFAULT NULL,
  `reporteddate` int(11) DEFAULT NULL,
  `reportedby` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `problemsummary` varchar(80) DEFAULT NULL,
  `problemdetail` text,
  `ticketstatus` varchar(20) DEFAULT NULL,
  `assignee` varchar(50) DEFAULT NULL,
  `assigneddate` int(11) DEFAULT NULL,
  `pendingby` varchar(50) DEFAULT NULL,
  `pendingdate` int(11) DEFAULT NULL,
  `resolution` text,
  `resolvedby` varchar(50) DEFAULT NULL,
  `resolveddate` int(11) DEFAULT NULL,
  `closedby` varchar(50) DEFAULT NULL,
  `closeddate` int(11) DEFAULT NULL,
  `changes` varchar(80) DEFAULT NULL,
  `changeby` int(11) DEFAULT NULL,
  `changedate` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `changedate` (`changedate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_tickets`
--

INSERT INTO `log_tickets` (`id`, `sla`, `reporteddate`, `reportedby`, `telp`, `email`, `problemsummary`, `problemdetail`, `ticketstatus`, `assignee`, `assigneddate`, `pendingby`, `pendingdate`, `resolution`, `resolvedby`, `resolveddate`, `closedby`, `closeddate`, `changes`, `changeby`, `changedate`) VALUES
(1, '3', 1562766079, 'Deni', '88989478', NULL, 'distribusi air mati', 'distribusi air mati', 'Pending', '4', NULL, 'Zakaria', 1562766079, 'TEST TICKET PENDING', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 4, 1562766079),
(1, '3', 1562766101, 'Deni', '88989478', NULL, 'distribusi air mati', 'distribusi air mati', 'Resolved', '4', NULL, NULL, NULL, 'TEST TICKET PENDING', 'Zakaria', 1562766101, NULL, NULL, 'Status berubah menjadi Resolved.', 4, 1562766102),
(1, '3', 1563348723, 'Deni', '88989478', NULL, 'distribusi air mati', 'distribusi air mati', 'Pending', '4', NULL, 'Zakaria', 1563348723, 'TEST TICKET PENDING', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 4, 1563348723),
(NULL, '4', 1563369540, NULL, '', '', 'air mati', 'bsdbsds', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(NULL, '6', 1563369540, NULL, '', '', 'air mati', 'air mati', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(4, '6', 1563349340, '', '', NULL, 'air mati', 'air mati', 'Pending', '4', NULL, 'nana', 1563349340, 'Test ticket  pending', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 2, 1563349340),
(3, '4', 1563349638, '', '', NULL, 'air mati', 'bsdbsds', 'Resolved', '4', NULL, NULL, NULL, 'Ticket Closed', 'Zakaria', 1563349638, NULL, NULL, 'Status berubah menjadi Resolved.', 4, 1563349638),
(1, '3', 1563350261, 'Deni', '88989478', NULL, 'distribusi air mati', 'distribusi air mati', 'Resolved', '4', NULL, NULL, NULL, 'TEST TICKET Assign', 'Zakaria', 1563350261, NULL, NULL, 'Status berubah menjadi Resolved.', 4, 1563350261),
(1, '3', 1563351001, 'Deni', '88989478', NULL, 'distribusi air mati', 'distribusi air mati', 'Resolved', '4', NULL, NULL, NULL, 'TEST TICKET Assign', 'Zakaria', 1563351001, NULL, NULL, 'Status berubah menjadi Resolved.', 4, 1563351001),
(NULL, '8', 1563369540, NULL, '', '', 'air mati', 'Air Mati dari kemarin..', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(NULL, '10', 1563369540, NULL, '', '', 'meteran tidak stabil', 'meteran tidak stabil', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(6, '10', 1563354486, '', '', NULL, 'meteran tidak stabil', 'meteran tidak stabil', 'Pending', '4', NULL, 'Zakaria', 1563354486, 'Test ticket Pending', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 4, 1563354486),
(5, '8', 1563354637, '', '', NULL, 'air mati', 'Air Mati dari kemarin..', 'Pending', '4', NULL, 'nana', 1563354637, 'Pending', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 2, 1563354637),
(NULL, '3', 1563366424, 'Deni', '88989478', '', 'distribusi air mati', 'distribusi air mati', 'Resolved', '3', NULL, NULL, NULL, 'TEST TICKET Assign', 'nana', 1563366424, NULL, NULL, 'Status berubah menjadi Resolved.', 2, 1563366424),
(NULL, '8', 1563366622, '', '', '', 'air mati', 'Air Mati dari kemarin..', 'Pending', '3', NULL, 'nana', 1563366622, 'Test Ticket pending', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 2, 1563366622),
(NULL, '3', 1563367468, 'Deni', '88989478', '', 'distribusi air mati', 'distribusi air mati', 'Pending', '3', NULL, 'nana', 1563367468, 'TEST TICKET pending', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 2, 1563367468),
(NULL, '3', 1563369540, NULL, '', '', 'air mati', 'air mati', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(NULL, '4', 1563367617, '', '', NULL, 'air mati', 'bsdbsds', 'Pending', '4', NULL, 'Zakaria', 1563367617, 'Test Ticket pending', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 4, 1563367617),
(NULL, '3', 1563367695, '', '', '', 'air mati', 'air mati', 'Pending', '4', NULL, 'nana', 1563367695, 'air mati', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 2, 1563367695),
(NULL, '4', 1563367832, '', '', NULL, 'air mati', 'bsdbsds', 'Pending', '4', NULL, 'Zakaria', 1563367832, 'Test Ticket pending', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 4, 1563367832),
(NULL, '4', 1563367850, '', '', NULL, 'air mati', 'bsdbsds', 'Resolved', '4', NULL, NULL, NULL, 'Test Ticket resolved', 'Zakaria', 1563367850, NULL, NULL, 'Status berubah menjadi Resolved.', 4, 1563367850),
(5, '8', 1563369476, '', '', '', 'air mati', 'Air Mati dari kemarin..', 'Pending', '4', NULL, 'nana', 1563369476, 'Test Ticket pending', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 2, 1563369477),
(3, '4', 1563369519, '', '', NULL, 'air mati', 'bsdbsds', 'Resolved', '4', NULL, NULL, NULL, 'Test Ticket resolved', 'Zakaria', 1563369519, NULL, NULL, 'Status berubah menjadi Resolved.', 4, 1563369520),
(3, '4', 1563369610, '', '', NULL, 'air mati', 'bsdbsds', 'Pending', '4', NULL, 'Zakaria', 1563369610, 'Test Ticket resolved', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 4, 1563369610),
(3, '4', 1563369624, '', '', NULL, 'air mati', 'bsdbsds', 'Resolved', '4', NULL, NULL, NULL, 'Test Ticket resolved', 'Zakaria', 1563369624, NULL, NULL, 'Status berubah menjadi Resolved.', 4, 1563369624),
(NULL, '9', 1563369540, NULL, '', '', 'meter tidak normal', 'meter tidak normal udah 2 minggu', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(NULL, '7', 1563369540, NULL, '', 'reza.ali@gmail.com', 'meteran air hilang', 'meteran air hilang', 'Assigne', '3', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(9, '7', 1563373634, '', '', NULL, 'meteran air hilang', 'meteran air hilang', 'Resolved', '3', NULL, NULL, NULL, 'sudah ganti model meteran type T46 merek Shino', 'nana', 1563373634, NULL, NULL, 'Status berubah menjadi Resolved.', 2, 1563373634),
(8, '9', 1563374765, '', '', NULL, 'meter tidak normal', 'meter tidak normal udah 2 minggu', 'Pending', '4', NULL, 'nana', 1563374765, 'Test Ticket Assigne', NULL, NULL, NULL, NULL, 'Status berubah menjadi Pending.', 2, 1563374765),
(8, '9', 1563374874, '', '', NULL, 'meter tidak normal', 'meter tidak normal udah 2 minggu', 'Assigned', '4', NULL, NULL, NULL, 'Test Ticket Assigne', NULL, NULL, NULL, NULL, NULL, 4, 1563374874),
(3, '4', 1563374903, '', '', NULL, 'air mati', 'bsdbsds', 'Assigned', '4', NULL, NULL, NULL, 'Test Ticket Assigne', NULL, NULL, NULL, NULL, NULL, 4, 1563374903),
(1, '3', 1563374947, 'Deni', '88989478', NULL, 'distribusi air mati', 'distribusi air mati', 'Assigned', '3', NULL, NULL, NULL, 'TEST TICKET ASSIGNED', NULL, NULL, NULL, NULL, NULL, 2, 1563374947),
(NULL, '5', 1563369540, NULL, '', '', 'angka meter mundur', 'angka meter mundur', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(NULL, '8', 1563455940, NULL, '', '', 'meter mati', 'air mati udah 2 hari', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(NULL, '2', 1563455940, NULL, '', '', 'pipa bocor', 'pipa bocor', 'Assigne', '4', NULL, '', NULL, '', NULL, NULL, '', NULL, 'Create New Ticket', 2, NULL),
(12, '2', 1563421202, '', '', NULL, 'pipa bocor', 'pipa bocor', 'Resolved', '4', NULL, NULL, NULL, 'selesai', 'Zakaria', 1563421202, NULL, NULL, 'Status berubah menjadi Resolved.', 4, 1563421202);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_users`
--

CREATE TABLE IF NOT EXISTS `log_users` (
  `iduser` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `log` text NOT NULL,
  KEY `time` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posisi` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) DEFAULT '0',
  `rules` enum('super_admin','admin','koordinatorp2tl','koordinatorspg','koordinatorstaff','koordinatorail','koordinatoryanbung') NOT NULL DEFAULT 'super_admin',
  `aktif` enum('ya','tidak') NOT NULL DEFAULT 'ya',
  PRIMARY KEY (`id`),
  KEY `menu_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `posisi`, `nama_menu`, `icon`, `link`, `parent`, `rules`, `aktif`) VALUES
(1, 1, 'Beranda', 'fa fa-home', 'protected', 0, 'super_admin', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsdate` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `detail` text NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `createdon` varchar(50) NOT NULL DEFAULT 'CURRENT_TIMESTAMP',
  `expired` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `newsdate`, `title`, `detail`, `createdby`, `createdon`, `expired`) VALUES
(1, 1518873480, 'perubahan jadwal libur', 'pengumuman hari libur diubah menjadi tgl 25 februari', 'nana', '17-Feb-2018 14:15:11', 1519823880),
(2, 1563369540, 'turnamen bulu tangkis', 'jangan lupa turnamen bulutangkis giliran bagian umum vs bagian produksi jam 5 sore', '1563369540', '17-Jul-2019 20:56:52', 1563628740),
(3, 1563369540, 'Perbaikan  wifi di Humas', 'Pengumuman untuk besok ada perbaikan wifi di bagian Humas jadi besok ga bsa pake Wifi dulu selam 1 jam', '1563369540', '17-Jul-2019 21:16:17', 1564060740);

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `projectid` int(11) NOT NULL AUTO_INCREMENT,
  `projectname` varchar(50) DEFAULT NULL,
  `idcustomer` varchar(10) DEFAULT NULL,
  `deliverybegin` int(11) DEFAULT NULL,
  `deliveryend` int(11) DEFAULT NULL,
  `installbegin` int(11) DEFAULT NULL,
  `installend` int(11) DEFAULT NULL,
  `uatbegin` int(11) DEFAULT NULL,
  `uatend` int(11) DEFAULT NULL,
  `billstartdate` int(11) DEFAULT NULL,
  `billduedate` int(11) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `contractstartdate` int(11) DEFAULT NULL,
  `contractperiod` int(11) DEFAULT NULL,
  PRIMARY KEY (`projectid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sla`
--

CREATE TABLE IF NOT EXISTS `sla` (
  `slaid` int(11) NOT NULL AUTO_INCREMENT,
  `namasla` varchar(30) NOT NULL,
  `kategori_sla` enum('high','medium','low','urgency') NOT NULL,
  `responsetime` int(11) NOT NULL,
  `resolutiontime` int(11) NOT NULL,
  `slawarning` int(11) NOT NULL,
  KEY `slaid` (`slaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `sla`
--

INSERT INTO `sla` (`slaid`, `namasla`, `kategori_sla`, `responsetime`, `resolutiontime`, `slawarning`) VALUES
(1, 'water meter rusak', 'medium', 1, 1, 3),
(2, 'pipa bocor', 'high', 1, 3, 3),
(3, 'distribusi air mati', 'urgency', 1, 2, 3),
(4, 'Air keruh', 'low', 1, 1, 1),
(5, 'Angka Meter  mundur', 'low', 4, 3, 4),
(6, 'Meter Buram', 'low', 2, 1, 4),
(7, 'Meter Hilang', 'medium', 2, 3, 4),
(8, 'Meter Mati', 'medium', 2, 2, 4),
(9, 'Meter tidak normal', 'medium', 2, 3, 4),
(10, 'Meter tidak terbaca', 'medium', 2, 3, 4),
(11, 'Pipa dinas bocor', 'medium', 2, 2, 3),
(12, 'Pipa distri bocor', 'medium', 2, 2, 2),
(13, 'Pipa persil bocor', 'medium', 2, 2, 3),
(14, 'Kran Bocor', 'high', 2, 2, 3),
(15, 'Pengaduan Rekening', 'medium', 2, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticketnumber` varchar(20) NOT NULL,
  `sla` varchar(10) NOT NULL,
  `idcustomer` varchar(10) NOT NULL,
  `reporteddate` int(11) NOT NULL,
  `reportedby` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `problemsummary` varchar(80) NOT NULL,
  `problemdetail` text NOT NULL,
  `ticketstatus` varchar(20) NOT NULL,
  `assignee` varchar(50) NOT NULL,
  `assigneddate` int(11) DEFAULT NULL,
  `pendingby` varchar(50) DEFAULT NULL,
  `pendingdate` int(11) DEFAULT NULL,
  `resolution` text,
  `resolvedby` varchar(50) DEFAULT NULL,
  `resolveddate` int(11) DEFAULT NULL,
  `closedby` varchar(50) DEFAULT NULL,
  `closeddate` int(11) DEFAULT NULL,
  `documentedby` int(11) NOT NULL,
  `documenteddate` int(11) NOT NULL,
  `changes` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tickets`
--

INSERT INTO `tickets` (`id`, `ticketnumber`, `sla`, `idcustomer`, `reporteddate`, `reportedby`, `telp`, `email`, `problemsummary`, `problemdetail`, `ticketstatus`, `assignee`, `assigneddate`, `pendingby`, `pendingdate`, `resolution`, `resolvedby`, `resolveddate`, `closedby`, `closeddate`, `documentedby`, `documenteddate`, `changes`) VALUES
(1, '1/SR/Feb/2018', '3', '3', 1563374947, 'Deni', '88989478', NULL, 'distribusi air mati', 'distribusi air mati', 'Assigned', '3', NULL, 'nana', 1563367468, 'TEST TICKET ASSIGNED', 'nana', 1563366424, 'nana', 1519745207, 2, 1519665864, 'Status berubah menjadi Pending.'),
(2, '1/SR/Mar/2018', '5', '5', 1520255880, 'septian', '88989478', '', 'angka meter mundur', 'angka meter mundur dari kemarin', 'Assigne', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1520268385, NULL),
(3, '1/SR/Jul/2019', '4', '6', 1563374903, '', '', NULL, 'air mati', 'bsdbsds', 'Assigned', '4', NULL, 'Zakaria', 1563369610, 'Test Ticket Assigne', 'Zakaria', 1563369624, NULL, NULL, 2, 1563349169, 'Status berubah menjadi Resolved.'),
(4, '1/SR/Jul/2019', '6', '6', 1563349340, '', '', NULL, 'air mati', 'air mati', 'Pending', '4', NULL, 'nana', 1563349340, 'Test ticket  pending', NULL, NULL, NULL, NULL, 2, 1563349291, 'Status berubah menjadi Pending.'),
(5, '1/SR/Jul/2019', '8', '6', 1563369476, '', '', '', 'air mati', 'Air Mati dari kemarin..', 'Pending', '4', NULL, 'nana', 1563369476, 'Test Ticket pending', NULL, NULL, NULL, NULL, 2, 1563352200, 'Status berubah menjadi Pending.'),
(6, '1/SR/Jul/2019', '10', '6', 1563354486, '', '', NULL, 'meteran tidak stabil', 'meteran tidak stabil', 'Pending', '4', NULL, 'Zakaria', 1563354486, 'Test ticket Pending', NULL, NULL, NULL, NULL, 2, 1563354396, 'Status berubah menjadi Pending.'),
(7, '1/SR/Jul/2019', '3', '1', 1563367695, '', '', '', 'air mati', 'air mati', 'Pending', '4', NULL, 'nana', 1563367695, 'air mati', NULL, NULL, NULL, NULL, 2, 1563367580, 'Status berubah menjadi Pending.'),
(8, '1/SR/Jul/2019', '9', '3', 1563374874, '', '', NULL, 'meter tidak normal', 'meter tidak normal udah 2 minggu', 'Assigned', '4', NULL, 'nana', 1563374765, 'Test Ticket Assigne', NULL, NULL, NULL, NULL, 2, 1563370860, 'Status berubah menjadi Pending.'),
(9, '1/SR/Jul/2019', '7', '10', 1563373634, '', '', NULL, 'meteran air hilang', 'meteran air hilang', 'Resolved', '3', NULL, NULL, NULL, 'sudah ganti model meteran type T46 merek Shino', 'nana', 1563373634, NULL, NULL, 2, 1563373537, 'Status berubah menjadi Resolved.'),
(10, '1/SR/Jul/2019', '5', '5', 1563369540, NULL, '', '', 'angka meter mundur', 'angka meter mundur', 'Assigne', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1563378282, NULL),
(11, '1/SR/Jul/2019', '8', '3', 1563455940, NULL, '', '', 'meter mati', 'air mati udah 2 hari', 'Assigne', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1563420419, NULL),
(12, '1/SR/Jul/2019', '2', '3', 1563421202, '', '', NULL, 'pipa bocor', 'pipa bocor', 'Resolved', '4', NULL, NULL, NULL, 'selesai', 'Zakaria', 1563421202, NULL, NULL, 2, 1563421133, 'Status berubah menjadi Resolved.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(25) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `Telp` varchar(15) NOT NULL,
  `email_code` varchar(100) NOT NULL,
  `user_token` varchar(100) DEFAULT NULL,
  `status` enum('aktif','blokir') NOT NULL,
  `user_last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time` int(11) NOT NULL,
  `ip` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`username`),
  UNIQUE KEY `uemail` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `fullname`, `email`, `Telp`, `email_code`, `user_token`, `status`, `user_last_login`, `time`, `ip`) VALUES
(1, 'adnan', 'user', 'user', 'Adnan Syahrizal', 'adnan@gmail.com', '085711245680', 'edd4d90ca73a6025e7f70eebb7537bb2f5e81857', 'af3521f33cb970a7895874a3e2648d7a', 'aktif', '2018-03-03 17:33:01', 1518852363, '::1'),
(2, 'nana', 'user', 'admin', 'Nana suryanan', 'nana.suryanan@gmail.com', '085711245680', '5cb8dbbdd087902c622627a0290bfbc9070e135e', '5c2fdc93faf68c482e945869aa7e4069', 'aktif', '2019-07-18 03:37:49', 1518851348, '::1'),
(3, 'Dadang', 'user', 'user', 'Dadang Rukmana', 'dadang.rukmana@gmail.com', '085711245680', '49919acd9cc28584dcb07654e09c73beec0810e9', '1141e3625bd47777e97878c2620df3a7', 'aktif', '2019-07-17 06:37:07', 1518851812, '::1'),
(4, 'Zakaria', 'user', 'user', 'Zakaria', 'zakaria.98@gmail.com', '081121456783', '091d4205ab61777a40b3a9e98a210573f89caf49', '38a118c8cb701b96983b64ac3ce73675', 'aktif', '2019-07-18 03:27:32', 1518852632, '::1'),
(5, 'Izhar', 'user', 'user', 'Izhar Anas', 'izhar.98@gmail.com', '08932817244', '827bfe60b17340235aa565e3f907048dbc1d1f56', NULL, 'aktif', '2018-02-20 07:25:45', 1519111545, '::1'),
(6, 'Hasyim', 'user', 'user', 'Hasyim Ridwan', 'ridwan.h@gmail.com', '08325432442', '71085ddc6ff205fcd77d1d19917f97a88fbc2c32', NULL, 'aktif', '2018-02-20 07:26:50', 1519111610, '::1'),
(7, 'samsuri', 'user', 'user', 'Samsuri Bahar', 'samsuri.93@ymail.com', '08997324422643', 'be459b2c8a5d99da29917a8e48c49b014b24cf70', 'b6ff4c7a91a76b28bdbf0738be08dec7', 'aktif', '2018-02-20 07:33:06', 1519111671, '::1'),
(8, 'Zindan', 'user', 'user', 'Zindan Nuri', 'zindan.98@gmail.com', '081213784234', 'c313a2d3f227ef564cb844332c63a593294429da', NULL, 'aktif', '2018-03-07 07:21:17', 1520407260, '::1'),
(9, 'Baharudin', 'user', 'user', 'Baharudin Ghofur', 'bahari.one@gmail.com', '089743378918', 'e3ded64e8db65e45108f7fe9c1be43417923a662', NULL, 'aktif', '2018-03-07 07:23:25', 1520407405, '::1'),
(10, 'Jamil', 'user', 'user', 'Jamil Amri', 'jamri.selaw@gmail.com', '08973521567', '549c02f3b712dcdafc0e005fa32ce313474667c2', NULL, 'aktif', '2018-03-07 07:31:49', 1520407909, '::1'),
(11, 'Ilham', 'user', 'user', 'Ilham Suhadana', 'suhadana.ilham@gmail.com', '08567431245', '81154bee9d67b6ef7f8f69528f7032e4183bbede', NULL, 'aktif', '2018-03-07 08:19:26', 1520410766, '::1'),
(12, 'denni', 'user', 'user', 'Denny irawan', 'deni.onel@gmail.com', '08568734213', 'b4433d71e0d733ed4f527a9bb466c6a452466213', NULL, 'aktif', '2018-03-07 08:20:31', 1520410831, '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_token` varchar(100) DEFAULT NULL,
  `user_rules` enum('super_admin','admin','registered_user') NOT NULL DEFAULT 'registered_user',
  `status` enum('aktif','blokir','belum aktif') NOT NULL,
  `level` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `user_fullname`, `user_email`, `user_username`, `user_password`, `user_last_login`, `user_token`, `user_rules`, `status`, `level`) VALUES
(1, 'Ali Reza', 'admin@localhost', 'root', 'root', '2017-08-07 15:15:35', '27a690f392147b08c38a65856e5c29ee', 'super_admin', 'aktif', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
