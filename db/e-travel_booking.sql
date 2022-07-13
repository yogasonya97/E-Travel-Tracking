-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jun 2020 pada 12.17
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-travel_booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `assign_bus`
--

CREATE TABLE `assign_bus` (
  `assign_bus_no` int(5) NOT NULL COMMENT 'this is primary key',
  `userName` varchar(50) NOT NULL COMMENT 'System User Name',
  `busNo` varchar(20) NOT NULL COMMENT 'Bus Route Number',
  `date` date NOT NULL COMMENT 'Route assing Date',
  `sql` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store who is assing Route for Bus';

--
-- Dumping data untuk tabel `assign_bus`
--

INSERT INTO `assign_bus` (`assign_bus_no`, `userName`, `busNo`, `date`, `sql`) VALUES
(1, 'OP1', 'BE6061ACE', '2020-03-09', 'I'),
(2, 'OP1', 'BG3780ABH', '2020-03-09', 'I'),
(3, 'OP1', 'BG4567ACE', '2020-03-09', 'I'),
(4, 'OP1', 'BG4567ACE', '2020-03-09', 'U'),
(5, 'OP1', 'BG4567ACE', '2020-03-09', 'D'),
(6, 'OP1', 'BG1728UW', '2020-05-05', 'I'),
(7, 'OP1', 'BG1072YB', '2020-05-05', 'I'),
(8, 'OP1', 'BG1348UI', '2020-05-05', 'I'),
(9, 'OP1', 'BE4226DD', '2020-05-05', 'I'),
(10, 'OP1', 'BE1283LQ', '2020-05-05', 'I'),
(11, 'OP1', 'BE2999AB', '2020-05-05', 'I'),
(12, 'OP1', 'BE2840CA', '2020-05-05', 'I'),
(13, 'OP1', 'BG2697JF', '2020-05-05', 'I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `assign_coductor`
--

CREATE TABLE `assign_coductor` (
  `assingConductorNo` int(11) NOT NULL COMMENT 'this is primary key',
  `userName` varchar(10) NOT NULL COMMENT 'System User Name',
  `conductorNo` varchar(10) NOT NULL COMMENT 'Conductor Number',
  `date` date NOT NULL COMMENT 'Conductor assing Date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store who is assing conductor for Bus';

-- --------------------------------------------------------

--
-- Struktur dari tabel `available_seat`
--

CREATE TABLE `available_seat` (
  `seatNo` int(2) NOT NULL COMMENT 'Bus Seat Number',
  `busNo` varchar(10) NOT NULL COMMENT 'SLTB Bus Number',
  `journeyNo` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL COMMENT 'Seat Status',
  `date` date NOT NULL COMMENT 'Status Date',
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is current Stauts a Bus Seat';

--
-- Dumping data untuk tabel `available_seat`
--

INSERT INTO `available_seat` (`seatNo`, `busNo`, `journeyNo`, `status`, `date`, `time`) VALUES
(1, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-13', '00:08:40'),
(1, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-14', '20:46:12'),
(1, 'BE6061ACE', 'PTBBM6061', 'B', '2020-04-20', '16:13:56'),
(1, 'BE6061ACE', 'PTBBM6061', 'B', '2020-04-21', '20:11:11'),
(1, 'BE6061ACE', 'PTBBM6061', 'B', '2020-05-03', '18:49:19'),
(1, 'BE6061ACE', 'PTBBM6061', 'P', '2020-05-04', '22:58:25'),
(1, 'BE6061ACE', 'PTBBM6061', 'B', '2020-06-21', '18:57:24'),
(1, 'BE6061ACE', 'PTSK6061', 'B', '2020-06-22', '21:25:38'),
(1, 'BE6061ACE', 'PTSK6061', 'B', '2020-06-26', '19:27:44'),
(1, 'BG3780ABH', 'PTBBM3780', 'B', '2020-04-17', '15:48:21'),
(1, 'BG3780ABH', 'PTMPP3780', 'B', '2020-04-20', '16:39:13'),
(2, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-13', '00:08:40'),
(2, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-17', '23:35:09'),
(2, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-20', '16:27:11'),
(2, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-21', '20:58:14'),
(2, 'BE6061ACE', 'PTBBM6061', 'B', '2020-05-03', '18:49:19'),
(3, 'BE6061ACE', 'PTBBM6061', 'B', '2020-04-21', '21:09:33'),
(4, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-20', '17:44:21'),
(4, 'BE6061ACE', 'PTMPP6061', 'B', '2020-04-22', '12:45:08'),
(4, 'BE6061ACE', 'PTSK6061', 'B', '2020-05-03', '22:22:55'),
(6, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-17', '15:42:52'),
(6, 'BE6061ACE', 'PTBBM6061', 'B', '2020-04-20', '01:34:01'),
(6, 'BE6061ACE', 'PTMPP6061', 'P', '2020-04-22', '12:33:59'),
(7, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-13', '00:13:37'),
(7, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-17', '15:43:20'),
(7, 'BE6061ACE', 'PTBBM6061', 'P', '2020-04-21', '21:16:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booker`
--

CREATE TABLE `booker` (
  `userName` varchar(25) NOT NULL,
  `bookerNICNo` varchar(50) NOT NULL COMMENT 'Bus Booker NIC Number',
  `bookerName` varchar(20) NOT NULL COMMENT 'Booker Short Name',
  `email` varchar(50) NOT NULL,
  `bookerMNo` varchar(13) NOT NULL COMMENT 'Booker Mobile Number',
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_register` date NOT NULL,
  `foto_ktp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Booker Data';

--
-- Dumping data untuk tabel `booker`
--

INSERT INTO `booker` (`userName`, `bookerNICNo`, `bookerName`, `email`, `bookerMNo`, `alamat`, `jenis_kelamin`, `tgl_register`, `foto_ktp`) VALUES
('', '2020BK-081112344567', 'Rian Palembang', 'Mail@mail.com', '081112344567', 'Lemabang', 'Laki-laki', '2020-04-22', 'IMG_20190408_133702_874.jpg'),
('kania', '2020BK-081377675555', 'Kania Azka Agustine', 'kaniaazka98@gmail.com', '081377675555', 'Jl.Panca Usaha ', 'Perempuan', '2020-04-24', 'Konfirmasi__MG_1774.jpg'),
('selamat', '2020BK-087654321256', 'Selamat Idul Adha', 'selamatida@gmail.com', '087654321256', 'Jl. Sakti Wiratama', 'Laki-laki', '2020-04-16', 'Konfirmasi_KTP_selamat.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `bookingID` varchar(50) NOT NULL COMMENT 'Bus Ticket Number',
  `bookerNICNo` varchar(50) NOT NULL COMMENT 'Bus Booker NIC Number',
  `busNo` varchar(10) NOT NULL COMMENT 'Bus Number',
  `journeyNo` varchar(10) NOT NULL,
  `no_of_seat` int(2) NOT NULL,
  `entryPointNo` int(2) NOT NULL,
  `ammount` float NOT NULL COMMENT 'Total Amount of Bus ticket',
  `date` date NOT NULL COMMENT 'Ticket receive Date',
  `payment_status` varchar(25) NOT NULL DEFAULT 'P',
  `metode_bayar` varchar(20) DEFAULT NULL,
  `rek_id_bank` varchar(20) DEFAULT NULL,
  `s_bookin_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store Receive booking invoice';

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`bookingID`, `bookerNICNo`, `busNo`, `journeyNo`, `no_of_seat`, `entryPointNo`, `ammount`, `date`, `payment_status`, `metode_bayar`, `rek_id_bank`, `s_bookin_time`) VALUES
('BE6061ACEPTBBM606120050300', '2020BK-087654321256 ', 'BE6061ACE', 'PTBBM6061', 2, 2, 440000, '2020-05-03', 'Ok', 'Transfer Bank', '001', '19:00:19'),
('BE6061ACEPTBBM606120062100', '2020BK-087654321256 ', 'BE6061ACE', 'PTBBM6061', 1, 4, 220000, '2020-06-21', 'Telah Sampai Tujuan', 'Transfer Bank', '001', '19:08:24'),
('BE6061ACEPTSK606120050300', '2020BK-087654321256 ', 'BE6061ACE', 'PTSK6061', 1, 4, 270000, '2020-05-03', 'Ok', 'Transfer Bank', '002', '22:33:55'),
('BE6061ACEPTSK606120062200', '2020BK-087654321256 ', 'BE6061ACE', 'PTSK6061', 1, 5, 270000, '2020-06-22', 'Ok', 'Transfer Bank', '001', '21:36:38'),
('BE6061ACEPTSK606120062600', '2020BK-087654321256 ', 'BE6061ACE', 'PTSK6061', 1, 5, 270000, '2020-06-26', 'Telah Sampai Tujuan', 'Transfer Bank', '001', '19:38:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `busNo` varchar(20) NOT NULL COMMENT 'Bus Number',
  `busModel` varchar(50) NOT NULL COMMENT 'Bus Model',
  `numberOfSeat` int(2) NOT NULL COMMENT 'Number Of Seat',
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Data';

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`busNo`, `busModel`, `numberOfSeat`, `lat`, `lng`) VALUES
('BE1283LQ', 'Innova', 7, 0.000000, 0.000000),
('BE2840CA', 'Xenia', 7, 0.000000, 0.000000),
('BE2999AB', 'Xenia', 7, 0.000000, 0.000000),
('BE4226DD', 'Luxio', 7, 0.000000, 0.000000),
('BE6061ACE', 'GrandMax', 7, -7.090911, 107.668884),
('BG1072YB', 'Xenia', 7, 0.000000, 0.000000),
('BG1348UI', 'Innova-Reborn', 7, 0.000000, 0.000000),
('BG1728UW', 'Avanza', 7, 0.000000, 0.000000),
('BG2697JF', 'Ertiga-Suzuki', 7, 0.000000, 0.000000),
('BG3780ABH', 'Luxio', 7, -2.965365, 104.794579);

-- --------------------------------------------------------

--
-- Struktur dari tabel `conductor`
--

CREATE TABLE `conductor` (
  `conductorNo` varchar(10) NOT NULL COMMENT 'Conductor Number',
  `conductorName` varchar(50) NOT NULL COMMENT 'Conductor Name',
  `conductorMNo` varchar(12) NOT NULL COMMENT 'Conductor Mobile Number',
  `busNo` varchar(20) DEFAULT NULL COMMENT 'Assing Bus No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Conductor Data';

-- --------------------------------------------------------

--
-- Struktur dari tabel `entrypoint_for_journey`
--

CREATE TABLE `entrypoint_for_journey` (
  `entryPoint_for_journeyNo` int(3) NOT NULL COMMENT 'this is primary key',
  `journeyNo` varchar(10) NOT NULL COMMENT 'Bus Route Number',
  `entryPointNo` int(2) NOT NULL COMMENT 'Bus Entry Point Number'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is assing Entry Point for Bus Route';

--
-- Dumping data untuk tabel `entrypoint_for_journey`
--

INSERT INTO `entrypoint_for_journey` (`entryPoint_for_journeyNo`, `journeyNo`, `entryPointNo`) VALUES
(1, 'PTMPP3780', 5),
(2, 'PTMPP3780', 4),
(3, 'PTMPP3780', 2),
(4, 'PTMPP3780', 1),
(5, 'PTMPP3780', 3),
(6, 'PTMPP6061', 5),
(7, 'PTMPP6061', 4),
(8, 'PTMPP6061', 2),
(9, 'PTMPP6061', 1),
(10, 'PTMPP6061', 3),
(11, 'PTBBM3780', 5),
(12, 'PTBBM3780', 4),
(13, 'PTBBM3780', 2),
(14, 'PTBBM3780', 1),
(15, 'PTBBM3780', 3),
(16, 'PTBBM6061', 5),
(17, 'PTBBM6061', 4),
(18, 'PTBBM6061', 2),
(19, 'PTBBM6061', 1),
(20, 'PTBBM6061', 3),
(21, 'PTSK3780', 5),
(22, 'PTSK3780', 4),
(23, 'PTSK3780', 2),
(24, 'PTSK3780', 1),
(25, 'PTSK3780', 3),
(26, 'PTSK6061', 5),
(27, 'PTSK6061', 4),
(28, 'PTSK6061', 2),
(29, 'PTSK6061', 1),
(30, 'PTSK6061', 3),
(31, 'PTMPP1348', 5),
(32, 'PTBBM1072', 5),
(33, 'PTBBM1072', 4),
(34, 'PTBBM1072', 2),
(35, 'PTBBM1072', 1),
(36, 'PTBBM1072', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `entry_point`
--

CREATE TABLE `entry_point` (
  `entryPointNo` int(2) NOT NULL COMMENT 'Bus Entry Point No',
  `entryPoint` varchar(15) NOT NULL COMMENT 'Bus Entry Point Name'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Entry Point for bus Route';

--
-- Dumping data untuk tabel `entry_point`
--

INSERT INTO `entry_point` (`entryPointNo`, `entryPoint`) VALUES
(5, 'Kalidoni'),
(4, 'Kenten'),
(2, 'Lemabang'),
(1, 'Plaju'),
(3, 'Sekojo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `jurusan`, `harga`) VALUES
(1, 'Palembang - Metro', '240000'),
(2, 'Palembang - Bandar Lampung', '270000'),
(3, 'Lampung - Kayuagung', '240000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `journey`
--

CREATE TABLE `journey` (
  `journeyNo` varchar(10) NOT NULL,
  `routeNo` varchar(5) NOT NULL COMMENT 'Bus Route Number',
  `journeyFrom` varchar(20) NOT NULL COMMENT 'Bus Route Start Point',
  `journeyTo` varchar(20) NOT NULL COMMENT 'Bus Route End Point',
  `departureTime` time NOT NULL COMMENT 'Bus Departure Time',
  `arrivalTime` time NOT NULL COMMENT 'Bus Arrival Time',
  `price` float NOT NULL COMMENT 'Bus Ticket Price'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Route Data';

--
-- Dumping data untuk tabel `journey`
--

INSERT INTO `journey` (`journeyNo`, `routeNo`, `journeyFrom`, `journeyTo`, `departureTime`, `arrivalTime`, `price`) VALUES
('LTKP1072', '25', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP1283', '9', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP1348', '29', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP1728', '33', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP2697', '37', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP2840', '13', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP2999', '17', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP3780', '8', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP4226', '21', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('LTKP6061', '7', 'Lampung', 'KP', '18:00:00', '05:00:00', 250000),
('PTBBM1072', '26', 'Palembang', 'BBM', '18:00:00', '04:00:00', 220000),
('PTBBM1283', '10', 'Palembang', 'BBM', '18:00:00', '05:00:00', 220000),
('PTBBM1348', '30', 'Palembang', 'BBM', '18:00:00', '05:00:00', 220000),
('PTBBM1728', '34', 'Palembang', 'BBM', '18:00:00', '05:00:00', 220000),
('PTBBM2697', '38', 'Palembang', 'BBM', '18:00:00', '05:00:00', 220000),
('PTBBM2840', '14', 'Palembang', 'BBM', '18:00:00', '05:00:00', 220000),
('PTBBM2999', '18', 'Palembang', 'BBM', '18:00:00', '05:00:00', 220000),
('PTBBM3780', '4', 'Palembang', 'BBM', '18:00:00', '05:00:00', 220000),
('PTBBM4226', '22', 'Palembang', 'BBM', '18:00:00', '05:00:00', 220000),
('PTBBM6061', '3', 'Palembang', 'BBM', '23:55:00', '05:00:00', 220000),
('PTMPP1072', '27', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP1283', '11', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP1348', '31', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP1728', '35', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP2697', '39', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP2840', '15', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP2999', '19', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP3780', '1', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP4226', '23', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTMPP6061', '2', 'Palembang', 'MPP', '18:00:00', '05:00:00', 250000),
('PTSK1072', '28', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK1283', '12', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK1348', '32', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK1728', '36', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK2697', '40', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK2840', '16', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK2999', '20', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK3780', '6', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK4226', '24', 'Palembang', 'SK', '18:00:00', '05:00:00', 270000),
('PTSK6061', '5', 'Palembang', 'SK', '23:55:00', '05:00:00', 270000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `journey_for_bus`
--

CREATE TABLE `journey_for_bus` (
  `journey_for_bus_No` int(3) NOT NULL,
  `busNo` varchar(10) NOT NULL,
  `journeyNo` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_posisi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `journey_for_bus`
--

INSERT INTO `journey_for_bus` (`journey_for_bus_No`, `busNo`, `journeyNo`, `status`, `tgl_posisi`) VALUES
(2, 'BG3780ABH', 'PTMPP3780', 'Ada', '2020-06-26'),
(4, 'BE6061ACE', 'LTKP6061', 'Tidak Ada', '2020-06-26'),
(5, 'BE6061ACE', 'PTBBM6061', 'Ada', '2020-06-26'),
(6, 'BE6061ACE', 'PTSK6061', 'Tidak ada', '2020-06-26'),
(7, 'BG3780ABH', 'LTKP3780', 'Tidak Ada', '2020-06-26'),
(8, 'BG3780ABH', 'PTBBM3780', 'Ada', '2020-06-26'),
(9, 'BG3780ABH', 'PTSK3780', 'Ada', '2020-06-26'),
(10, 'BE6061ACE', 'PTMPP6061', 'Ada', '2020-06-26'),
(11, 'BE1283LQ', 'LTKP1283', '', '0000-00-00'),
(12, 'BE1283LQ', 'PTBBM1283', '', '0000-00-00'),
(15, 'BE2840CA', 'LTKP2840', '', '0000-00-00'),
(16, 'BE2840CA', 'PTBBM2840', '', '0000-00-00'),
(17, 'BE2840CA', 'PTMPP2840', '', '0000-00-00'),
(18, 'BE2840CA', 'PTSK2840', '', '0000-00-00'),
(19, 'BE2999AB', 'LTKP2999', '', '0000-00-00'),
(20, 'BE2999AB', 'PTBBM2999', '', '0000-00-00'),
(21, 'BE2999AB', 'PTMPP2999', '', '0000-00-00'),
(22, 'BE2999AB', 'PTSK2999', '', '0000-00-00'),
(23, 'BE4226DD', 'LTKP4226', '', '0000-00-00'),
(24, 'BE4226DD', 'PTBBM4226', '', '0000-00-00'),
(25, 'BE4226DD', 'PTMPP4226', '', '0000-00-00'),
(26, 'BE4226DD', 'PTSK4226', '', '0000-00-00'),
(27, 'BG1072YB', 'LTKP1072', '', '0000-00-00'),
(28, 'BG1072YB', 'PTBBM1072', '', '0000-00-00'),
(29, 'BG1072YB', 'PTMPP1072', '', '0000-00-00'),
(30, 'BG1072YB', 'PTSK1072', '', '0000-00-00'),
(31, 'BG1348UI', 'LTKP1348', '', '0000-00-00'),
(32, 'BG1348UI', 'PTBBM1348', '', '0000-00-00'),
(33, 'BG1348UI', 'PTMPP1348', '', '0000-00-00'),
(34, 'BG1348UI', 'PTSK1348', '', '0000-00-00'),
(35, 'BG1728UW', 'LTKP1728', '', '0000-00-00'),
(36, 'BG1728UW', 'PTBBM1728', '', '0000-00-00'),
(37, 'BG1728UW', 'PTMPP1728', '', '0000-00-00'),
(38, 'BG1728UW', 'PTSK1728', '', '0000-00-00'),
(39, 'BG2697JF', 'LTKP2697', '', '0000-00-00'),
(40, 'BG2697JF', 'PTBBM2697', '', '0000-00-00'),
(41, 'BG2697JF', 'PTMPP2697', '', '0000-00-00'),
(42, 'BG2697JF', 'PTSK2697', '', '0000-00-00'),
(43, 'BE1283LQ', 'PTMPP1283', '', '0000-00-00'),
(44, 'BE1283LQ', 'PTSK1283', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `konfirmasi_id` int(11) NOT NULL,
  `konfirmasi_invoice` varchar(50) DEFAULT NULL,
  `konfirmasi_nama` varchar(60) DEFAULT NULL,
  `konfirmasi_bank` varchar(50) DEFAULT NULL,
  `konfirmasi_jumlah` double DEFAULT NULL,
  `konfirmasi_bukti` varchar(50) DEFAULT NULL,
  `konfirmasi_status` int(11) DEFAULT '0',
  `konfirmasi_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`konfirmasi_id`, `konfirmasi_invoice`, `konfirmasi_nama`, `konfirmasi_bank`, `konfirmasi_jumlah`, `konfirmasi_bukti`, `konfirmasi_status`, `konfirmasi_tanggal`) VALUES
(1, 'BE6061ACEPTBBM606120041700', 'Selamat Idul Adha', 'BCA', 220000, 'IMG_20200320_171301_424.jpg', 0, '2020-04-24 14:43:19'),
(2, 'BE6061ACEPTBBM606120050300', 'Selamat Idul Adha', 'BCA', 440000, 'Struktur_CVPI.PNG', 1, '2020-05-03 13:21:31'),
(3, 'BE6061ACEPTSK606120050300', 'Selamat Idul Adha', 'BRI', 270000, 'erd_travel.jpg', 1, '2020-05-03 16:53:49'),
(4, 'BE6061ACEPTBBM606120062100', 'Selamat Idul Adha', 'BCA', 220000, 'Bukti_Mahasiswa.PNG', 1, '2020-06-21 13:31:35'),
(5, 'BE6061ACEPTSK606120062200', 'Selamat Idul Adha', 'BCA', 270000, 'Bukti_Mahasiswa.PNG', 0, '2020-06-22 15:56:26'),
(6, 'BE6061ACEPTSK606120062200', 'Selamat Idul Adha', 'BCA', 270000, 'BuktiMahasiswa-2.PNG', 1, '2020-06-22 16:02:37'),
(7, 'BE6061ACEPTSK606120062600', 'Selamat Idul Adha', 'BCA', 270000, 'ERD-E_Travel.JPG', 1, '2020-06-26 14:07:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_booker`
--

CREATE TABLE `konfirmasi_booker` (
  `userName` varchar(25) NOT NULL,
  `bookerNICNo` varchar(50) NOT NULL COMMENT 'Bus Booker NIC Number',
  `bookerName` varchar(20) NOT NULL COMMENT 'Booker Short Name',
  `email` varchar(50) NOT NULL,
  `bookerMNo` varchar(13) NOT NULL COMMENT 'Booker Mobile Number',
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `konfirmasi_status` varchar(25) NOT NULL,
  `konfirmasi_tanggal` date NOT NULL,
  `status_ubahktp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Booker Data';

--
-- Dumping data untuk tabel `konfirmasi_booker`
--

INSERT INTO `konfirmasi_booker` (`userName`, `bookerNICNo`, `bookerName`, `email`, `bookerMNo`, `alamat`, `jenis_kelamin`, `foto_ktp`, `konfirmasi_status`, `konfirmasi_tanggal`, `status_ubahktp`) VALUES
('kania', '2020BK-081377675555', 'Kania AG', 'kania@gmail.com', '081377675555', 'Jl.Panca Usaha ', 'Perempuan', 'Konfirmasi_images (8).jpeg', '0', '2020-06-25', 'Ubah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_paket`
--

CREATE TABLE `konfirmasi_paket` (
  `konfirmasi_id` int(11) NOT NULL,
  `konfirmasi_invoice` varchar(50) DEFAULT NULL,
  `konfirmasi_nama` varchar(60) DEFAULT NULL,
  `konfirmasi_bank` varchar(50) DEFAULT NULL,
  `konfirmasi_jumlah` double DEFAULT NULL,
  `konfirmasi_bukti` varchar(50) DEFAULT NULL,
  `konfirmasi_status` int(11) DEFAULT '0',
  `konfirmasi_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi_paket`
--

INSERT INTO `konfirmasi_paket` (`konfirmasi_id`, `konfirmasi_invoice`, `konfirmasi_nama`, `konfirmasi_bank`, `konfirmasi_jumlah`, `konfirmasi_bukti`, `konfirmasi_status`, `konfirmasi_tanggal`) VALUES
(4, 'B6RM5T21G22020BK-081377675307', 'M.Yoga Sonya Agsar', 'Mandiri', 75000, 'purnamaindah.png', 1, '2020-03-21 07:49:28'),
(5, 'J597IZXNYT2020BK-081377675308', 'Kania Azka Agustine', 'BCA', 100000, 'wx_camera_1585056661753.jpg', 1, '2020-03-25 05:58:16'),
(6, 'M99NXAA4GI2020BK-081377675307', 'M.Yoga Sonya Agsar', 'BCA', 75000, '2.jpg', 1, '2020-04-01 19:04:57'),
(7, '3RAI0USAZ92020BK-087654321256', 'Selamat Idul Adha', 'BCA', 300000, 'Photo_200427062318.jpeg', 1, '2020-04-30 07:28:02'),
(8, 'B9EP2XPH822020BK-087654321256', 'Selamat Idul Adha', 'BCA', 100000, 'MYogasonyaagsar_161410245_bantuanMHS_13.jpg', 0, '2020-06-25 16:35:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_sopircadangan`
--

CREATE TABLE `konfirmasi_sopircadangan` (
  `tgl_konfirmasi_sopircd` date NOT NULL,
  `userName_cadangan` varchar(25) NOT NULL,
  `id_sopir_utama` varchar(25) NOT NULL,
  `id_sopir_cadangan` varchar(25) NOT NULL,
  `nama_sopircadangan` varchar(50) NOT NULL,
  `phone_cadangan` varchar(20) NOT NULL,
  `no_mobil_cadangan` varchar(20) NOT NULL,
  `model_mobil_cadangan` varchar(25) NOT NULL,
  `konfirmasi_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi_sopircadangan`
--

INSERT INTO `konfirmasi_sopircadangan` (`tgl_konfirmasi_sopircd`, `userName_cadangan`, `id_sopir_utama`, `id_sopir_cadangan`, `nama_sopircadangan`, `phone_cadangan`, `no_mobil_cadangan`, `model_mobil_cadangan`, `konfirmasi_status`) VALUES
('2020-06-25', 'ridho', '2020DV-081377675399', '2020DVCD-081277675309', 'Ridho Febri', '081277675309', 'BE6061ACE', 'GrandMax', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `manual_booking`
--

CREATE TABLE `manual_booking` (
  `manualBookingNo` int(11) NOT NULL COMMENT 'this is primary key',
  `userName` varchar(10) NOT NULL COMMENT 'System User Name',
  `bookingID` varchar(20) NOT NULL,
  `date` date NOT NULL COMMENT 'ManualBooking Date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store who is manual booking Booker';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbarang`
--

CREATE TABLE `pbarang` (
  `no_resi` varchar(50) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `bookerNICNo` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `jumlah_barang` varchar(25) NOT NULL,
  `titik_jemput` varchar(50) NOT NULL,
  `alamat_jemput` text NOT NULL,
  `nama_penerima` varchar(75) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `telepon_penerima` varchar(25) NOT NULL,
  `foto_barang` text NOT NULL,
  `biaya_pengiriman` varchar(20) NOT NULL,
  `metode_bayar` varchar(20) NOT NULL,
  `rek_id_bank` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pbarang`
--

INSERT INTO `pbarang` (`no_resi`, `tgl_pengiriman`, `bookerNICNo`, `jurusan`, `jenis_barang`, `ukuran`, `jumlah_barang`, `titik_jemput`, `alamat_jemput`, `nama_penerima`, `alamat_penerima`, `telepon_penerima`, `foto_barang`, `biaya_pengiriman`, `metode_bayar`, `rek_id_bank`, `status`) VALUES
('3RAI0USAZ92020BK-087654321256', '2020-04-30', '2020BK-087654321256', 'Palembang Ke KOTA GAJAH-SUKADANA', 'Elektronik', 'Sedang', '2', 'Sekojo', 'Jl sakti', 'Vanny', 'Jl.talang jawa', '08137765308', 'Screenshot_2020-04-30-10-46-22-388_com.android.chrome.jpg', '300000', 'Transfer Bank', '001', 'Ok'),
('B9EP2XPH822020BK-087654321256', '2020-06-25', '2020BK-087654321256', 'Palembang Ke KOTA GAJAH-SUKADANA', 'Dokumen', 'Kecil', '1', 'Lemabang', 'Jl.Martadinata', 'Alvin', 'Jl.hargo mulyo', '081277675578', '15931027256446334602406696402192.jpg', '100000', 'Transfer Bank', '001', 'P'),
('BPE31FVPFI2020BK-087654321256', '2020-04-26', '2020BK-087654321256', 'Palembang Ke MENGGALA-BANDAR JAYA-BANDAR LAMPUNG', 'Dokumen', 'Kecil', '1', 'Lemabang', 'Jl.Martadinata', 'Alvin', 'Jl.Sakti Wiratama', '089736363636', 'Acer-A314-41.png', '100000', 'COD', '005', 'P'),
('H3SEQOIG2E2020BK-087654321256', '2020-06-26', '2020BK-087654321256', 'Palembang Ke KOTA GAJAH-SUKADANA', 'Elektronik', 'Sedang', '1', 'Lemabang', 'Jl.Martadinata', 'Edi', 'Jl.Hargomulyo Lampung Timur SUkadana', '082177675509', 'Acer-A314-41.png', '150000', 'Transfer Bank', '001', 'P'),
('JWGA7AS6F22020BK-087654321256', '2020-04-26', '2020BK-087654321256', 'Palembang Ke MENGGALA-BANDAR JAYA-BANDAR LAMPUNG', 'Dokumen', 'Kecil', '2', 'Lemabang', 'Jl. Martadinata', 'Alvin', 'Jl.Sakti Wiratama no 21', '081377654553', 'Acer-A314-41.png', '200000', 'COD', '005', 'P'),
('QCNY7FGMAZ2020BK-087654321256', '2020-06-22', '2020BK-087654321256', 'Palembang Ke KOTA GAJAH-SUKADANA', 'Dokumen', 'Kecil', '1', 'Lemabang', 'JL.talang jawa', 'alvin', 'JL.Sakti Wiratam', '0813776753333', 'Bukti_Mahasiswa.PNG', '100000', 'Transfer Bank', '001', 'P'),
('STJONFU73D2020BK-087654321256', '2020-04-27', '2020BK-087654321256', 'Palembang Ke MENGGALA-BANDAR JAYA-BANDAR LAMPUNG', 'Elektronik', 'Sedang', '2', 'Lemabang', 'Jl.Talang Jawa', 'Alvin', 'Jl.Hargo mulyo', '081377675309', 'Acer-A314-41.png', '300000', 'COD', '005', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_mobil`
--

CREATE TABLE `rating_mobil` (
  `id` int(11) NOT NULL,
  `booker_id` varchar(50) NOT NULL,
  `no_mobil` varchar(20) NOT NULL,
  `rate` float NOT NULL,
  `tgl_rating` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating_mobil`
--

INSERT INTO `rating_mobil` (`id`, `booker_id`, `no_mobil`, `rate`, `tgl_rating`) VALUES
(5, '2020BK-087654321276', 'BG3780ABH', 3, '0000-00-00'),
(6, '2020BK-081377675308', 'BE6061ACE', 5, '2020-04-20'),
(7, '2020BK-081377675308', 'BG3780ABH', 4, '2020-04-20'),
(8, '2020BK-081112344567', 'BE6061ACE', 3, '2020-04-22'),
(9, '', 'BE6061ACE', 0, '2020-06-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `receive_ticke`
--

CREATE TABLE `receive_ticke` (
  `ticketNo` varchar(50) NOT NULL,
  `passengerName` varchar(25) NOT NULL COMMENT 'Passenger Name',
  `seatNo` int(2) NOT NULL COMMENT 'Bus Seat Number',
  `gender` varchar(1) NOT NULL COMMENT 'Passenger Gender',
  `bookingID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store booking data';

--
-- Dumping data untuk tabel `receive_ticke`
--

INSERT INTO `receive_ticke` (`ticketNo`, `passengerName`, `seatNo`, `gender`, `bookingID`) VALUES
('BE6061ACELTP012003092', 'vanny', 2, 'F', 'BE6061ACELTP0120030900'),
('BE6061ACELTP012003094', 'alvin', 4, 'M', 'BE6061ACELTP0120030900'),
('BE6061ACELTP012003223', 'Alvin', 3, 'M', 'BE6061ACELTP0120032201'),
('BE6061ACELTP012003227', 'hh', 7, 'M', 'BE6061ACELTP0120032200'),
('BE6061ACELTP012003252', 'Dedeqq', 2, 'M', 'BE6061ACELTP0120032500'),
('BE6061ACEPTBBM60612004201', 'yoga', 1, 'M', 'BE6061ACEPTBBM606120042002'),
('BE6061ACEPTBBM60612004206', 'mama', 6, 'F', 'BE6061ACEPTBBM606120042001'),
('BE6061ACEPTBBM60612004211', 'vanny', 1, 'M', 'BE6061ACEPTBBM606120042100'),
('BE6061ACEPTBBM60612004213', 'Alvin', 3, 'M', 'BE6061ACEPTBBM606120042101'),
('BE6061ACEPTBBM60612005031', 'yoga', 1, 'M', 'BE6061ACEPTBBM606120050300'),
('BE6061ACEPTBBM60612005032', 'kania', 2, 'M', 'BE6061ACEPTBBM606120050300'),
('BE6061ACEPTBBM60612006211', 'vanny', 1, 'F', 'BE6061ACEPTBBM606120062100'),
('BE6061ACEPTBDL012004022', 'vanny', 2, 'F', 'BE6061ACEPTBDL0120040200'),
('BE6061ACEPTBDL012004024', 'andre', 4, 'M', 'BE6061ACEPTBDL0120040201'),
('BE6061ACEPTL012003251', 'Andre', 1, 'M', 'BE6061ACEPTL0120032500'),
('BE6061ACEPTMPP60612004224', 'Edho', 4, 'M', 'BE6061ACEPTMPP606120042202'),
('BE6061ACEPTMTR012003301', 'Alvin', 1, 'M', 'BE6061ACEPTMTR0120033000'),
('BE6061ACEPTMTR012003304', 'loki', 4, 'M', 'BE6061ACEPTMTR0120033001'),
('BE6061ACEPTMTR012003315', 'Vanny', 5, 'F', 'BE6061ACEPTMTR0120033100'),
('BE6061ACEPTMTR012004021', 'yoga', 1, 'M', 'BE6061ACEPTMTR0120040200'),
('BE6061ACEPTSK60612005034', 'andre', 4, 'M', 'BE6061ACEPTSK606120050300'),
('BE6061ACEPTSK60612006221', 'alvin', 1, 'M', 'BE6061ACEPTSK606120062200'),
('BE6061ACEPTSK60612006261', 'Edi', 1, 'M', 'BE6061ACEPTSK606120062600'),
('BG3780ABHLTP022003184', 'Pantek', 4, 'M', 'BG3780ABHLTP0220031800'),
('BG3780ABHLTP022003251', 'Argi', 1, 'M', 'BG3780ABHLTP0220032500'),
('BG3780ABHPTBBM37802004171', 'Alvin', 1, 'M', 'BG3780ABHPTBBM378020041700'),
('BG3780ABHPTBDL022003284', 'tesa', 4, 'F', 'BG3780ABHPTBDL0220032800'),
('BG3780ABHPTL022003101', 'yoga', 1, 'M', 'BG3780ABHPTL0220031000'),
('BG3780ABHPTL022003102', 'kania', 2, 'F', 'BG3780ABHPTL0220031000'),
('BG3780ABHPTL022003251', 'Andre', 1, 'M', 'BG3780ABHPTL0220032500'),
('BG3780ABHPTL022003252', 'Vanny', 2, 'F', 'BG3780ABHPTL0220032500'),
('BG3780ABHPTMPP37802004201', 'Vanny', 1, 'F', 'BG3780ABHPTMPP378020042000'),
('BG3780ABHPTMTR022003281', 'yoga', 1, 'M', 'BG3780ABHPTMTR0220032800'),
('BG3780ABHPTMTR022003282', 'alvin', 2, 'M', 'BG3780ABHPTMTR0220032800');

-- --------------------------------------------------------

--
-- Struktur dari tabel `receive_ticke_p`
--

CREATE TABLE `receive_ticke_p` (
  `ticketNo` varchar(50) NOT NULL,
  `passengerName` varchar(25) NOT NULL COMMENT 'Passenger Name',
  `seatNo` int(2) NOT NULL COMMENT 'Bus Seat Number',
  `gender` varchar(1) NOT NULL COMMENT 'Passenger Gender',
  `bookingID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Transaction Table is store booking data';

--
-- Dumping data untuk tabel `receive_ticke_p`
--

INSERT INTO `receive_ticke_p` (`ticketNo`, `passengerName`, `seatNo`, `gender`, `bookingID`) VALUES
('BE6061ACELTP012003092', 'vanny', 2, 'F', 'BE6061ACELTP0120030900'),
('BE6061ACELTP012003094', 'alvin', 4, 'M', 'BE6061ACELTP0120030900'),
('BE6061ACELTP012003223', 'Alvin', 3, 'M', 'BE6061ACELTP0120032201'),
('BE6061ACELTP012003227', 'hh', 7, 'M', 'BE6061ACELTP0120032200'),
('BE6061ACELTP012003241', 'Andre', 1, 'M', 'BE6061ACELTP0120032400'),
('BE6061ACELTP012003252', 'Dedeqq', 2, 'M', 'BE6061ACELTP0120032500'),
('BE6061ACEPTBBM60612004136', 'Andre', 6, 'M', 'BE6061ACEPTBBM606120041300'),
('BE6061ACEPTBBM60612004172', 'Yoga', 2, 'M', 'BE6061ACEPTBBM606120041700'),
('BE6061ACEPTBBM60612004177', 'Vanny', 7, 'F', 'BE6061ACEPTBBM606120041701'),
('BE6061ACEPTBBM60612004201', 'kania', 1, 'F', 'BE6061ACEPTBBM606120042000'),
('BE6061ACEPTBBM60612004202', 'Vanny', 2, 'F', 'BE6061ACEPTBBM606120042003'),
('BE6061ACEPTBBM60612004204', 'Vanny', 4, 'F', 'BE6061ACEPTBBM606120042004'),
('BE6061ACEPTBBM60612004206', 'mama', 6, 'F', 'BE6061ACEPTBBM606120042001'),
('BE6061ACEPTBBM60612004211', 'vanny', 1, 'M', 'BE6061ACEPTBBM606120042100'),
('BE6061ACEPTBBM60612004213', 'Alvin', 3, 'M', 'BE6061ACEPTBBM606120042101'),
('BE6061ACEPTBBM60612005031', 'yoga', 1, 'M', 'BE6061ACEPTBBM606120050300'),
('BE6061ACEPTBBM60612005032', 'kania', 2, 'M', 'BE6061ACEPTBBM606120050300'),
('BE6061ACEPTBBM60612006211', 'vanny', 1, 'F', 'BE6061ACEPTBBM606120062100'),
('BE6061ACEPTBDL012004022', 'vanny', 2, 'F', 'BE6061ACEPTBDL0120040200'),
('BE6061ACEPTBDL012004024', 'andre', 4, 'M', 'BE6061ACEPTBDL0120040201'),
('BE6061ACEPTL012003251', 'Andre', 1, 'M', 'BE6061ACEPTL0120032500'),
('BE6061ACEPTMPP60612004224', 'Edho', 4, 'M', 'BE6061ACEPTMPP606120042202'),
('BE6061ACEPTMPP60612004226', '', 6, 'M', 'BE6061ACEPTMPP606120042200'),
('BE6061ACEPTMTR012003301', 'Alvin', 1, 'M', 'BE6061ACEPTMTR0120033000'),
('BE6061ACEPTMTR012003304', 'loki', 4, 'M', 'BE6061ACEPTMTR0120033001'),
('BE6061ACEPTMTR012003307', 'yoga', 7, 'M', 'BE6061ACEPTMTR0120033002'),
('BE6061ACEPTMTR012003315', 'Vanny', 5, 'F', 'BE6061ACEPTMTR0120033100'),
('BE6061ACEPTMTR012004021', 'yoga', 1, 'M', 'BE6061ACEPTMTR0120040200'),
('BE6061ACEPTSK60612005034', 'andre', 4, 'M', 'BE6061ACEPTSK606120050300'),
('BE6061ACEPTSK60612006221', 'alvin', 1, 'M', 'BE6061ACEPTSK606120062200'),
('BE6061ACEPTSK60612006261', 'Edi', 1, 'M', 'BE6061ACEPTSK606120062600'),
('BG3780ABHLTP022003131', 'Alvin', 1, 'M', 'BG3780ABHLTP0220031300'),
('BG3780ABHLTP022003184', 'Pantek', 4, 'M', 'BG3780ABHLTP0220031800'),
('BG3780ABHLTP022003221', 'Vanny', 1, 'M', 'BG3780ABHLTP0220032200'),
('BG3780ABHLTP022003251', 'Argi', 1, 'M', 'BG3780ABHLTP0220032500'),
('BG3780ABHPTBBM37802004171', 'Alvin', 1, 'M', 'BG3780ABHPTBBM378020041700'),
('BG3780ABHPTBDL022003284', 'tesa', 4, 'F', 'BG3780ABHPTBDL0220032800'),
('BG3780ABHPTL022003101', 'yoga', 1, 'M', 'BG3780ABHPTL0220031000'),
('BG3780ABHPTL022003102', 'kania', 2, 'F', 'BG3780ABHPTL0220031000'),
('BG3780ABHPTL022003251', 'Andre', 1, 'M', 'BG3780ABHPTL0220032500'),
('BG3780ABHPTL022003252', 'Vanny', 2, 'F', 'BG3780ABHPTL0220032500'),
('BG3780ABHPTMPP37802004201', 'Vanny', 1, 'F', 'BG3780ABHPTMPP378020042000'),
('BG3780ABHPTMTR022003281', 'yoga', 1, 'M', 'BG3780ABHPTMTR0220032800'),
('BG3780ABHPTMTR022003282', 'alvin', 2, 'M', 'BG3780ABHPTMTR0220032800'),
('BG3780ABHPTMTR022004031', 'mama', 1, 'F', 'BG3780ABHPTMTR0220040300');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `rek_id` varchar(10) NOT NULL,
  `rek_no` varchar(60) DEFAULT NULL,
  `rek_nama` varchar(50) DEFAULT NULL,
  `rek_bank` varchar(30) DEFAULT NULL,
  `rek_cabang` varchar(50) DEFAULT NULL,
  `rek_logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`rek_id`, `rek_no`, `rek_nama`, `rek_bank`, `rek_cabang`, `rek_logo`) VALUES
('001', '149738579837', 'CV.Purnama Indah', 'BCA', 'Palembang', 'file_1482154688.png'),
('002', '548501007458536', 'CV.Purnama Indah', 'BRI', 'Palembang', 'file_1482156414.png'),
('003', '1497385798375', 'CV.Purnama Indah', 'Mandiri', 'Palembang', 'file_1482154772.png'),
('004', '1497385798375', 'CV.Purnama Indah', 'Syariah Mandiri', 'Palembang', 'file_1482154795.png'),
('005', '219423123123', 'CV.Purnama Indah', 'COD', 'palembang', 'purnamaindah.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seat`
--

CREATE TABLE `seat` (
  `seatNo` int(2) NOT NULL COMMENT 'Bus Seat Number'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store Bus Seat Number';

--
-- Dumping data untuk tabel `seat`
--

INSERT INTO `seat` (`seatNo`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sopir_cadangan`
--

CREATE TABLE `sopir_cadangan` (
  `userName_cadangan` varchar(25) NOT NULL,
  `id_sopir_utama` varchar(25) NOT NULL,
  `id_sopir_cadangan` varchar(25) NOT NULL,
  `nama_sopircadangan` varchar(50) NOT NULL,
  `phone_cadangan` varchar(20) NOT NULL,
  `no_mobil_cadangan` varchar(20) NOT NULL,
  `model_mobil_cadangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sopir_cadangan`
--

INSERT INTO `sopir_cadangan` (`userName_cadangan`, `id_sopir_utama`, `id_sopir_cadangan`, `nama_sopircadangan`, `phone_cadangan`, `no_mobil_cadangan`, `model_mobil_cadangan`) VALUES
('ridho', '2020DV-081377675399', '2020DVCD-081277675309', 'Ridho Febri', '081277675309', 'BG3333ACE', 'Avanza'),
('irul', '2020DV-81377675408', '2020DVCD-081377674307', 'Hairul Bakri', '081377674307', 'BG6601ACG', 'Avanza');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sopir_dtl`
--

CREATE TABLE `sopir_dtl` (
  `id_sopir` varchar(25) NOT NULL,
  `nm_sopir` varchar(50) NOT NULL,
  `no_mobil` varchar(20) NOT NULL,
  `no_phone` varchar(20) NOT NULL,
  `foto_mobil` varchar(50) NOT NULL,
  `id_sopir_cadangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sopir_dtl`
--

INSERT INTO `sopir_dtl` (`id_sopir`, `nm_sopir`, `no_mobil`, `no_phone`, `foto_mobil`, `id_sopir_cadangan`) VALUES
('2020DV-081254768988', 'Een Nugroho', 'BG2697JF', '081254768988', 'BG2697JF.png', ''),
('2020DV-081277675508', 'Iwan Komeng', 'BE1283LQ', '081277675508', 'BE1283LQ.jpg', ''),
('2020DV-081299899709', 'Bambang', 'BE2999AB', '081299899709', 'BE2999AB.jpg', ''),
('2020DV-081377675399', 'Andre Alfath', 'BE6061ACE', '081377675399', 'daihatsu-grandmax.jpg', '2020DVCD-081277675309'),
('2020DV-081387865433', 'Mulyadi', 'BG1348UI', '081387865433', 'BG1348UI.jpg', ''),
('2020DV-081532877654', 'Edi Siswanto', 'BE2840CA', '081532877654', 'BE2840CA.jpg', ''),
('2020DV-081537809870', 'Eyik Purnomo', 'BG1728UW', '081537809870', 'BG1728UW.jpg', ''),
('2020DV-082198979609', 'Helmi Koplak', 'BG1072YB', '082198979609', 'BG1072YB.jpg', ''),
('2020DV-085737786543', 'Suparno', 'BE4226DD', '085737786543', 'BE4226DD.jpg', ''),
('2020DV-81377675408', 'Bagas Joko', 'BG3780ABH', '81377675408', 'Grand-max_Luxio.jpg', '2020DVCD-081377674307');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_nama` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_id`, `status_nama`) VALUES
(1, 'Menunggu Konfirmasi'),
(4, 'Dalam Penjemputan'),
(6, 'Transaksi Selesai'),
(7, 'Sedang Diperjalanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_user`
--

CREATE TABLE `system_user` (
  `userName` varchar(10) NOT NULL COMMENT 'User Name for login to System',
  `empolyeeNo` varchar(25) NOT NULL COMMENT 'Empoyee Number of System User',
  `empolyeeName` varchar(50) NOT NULL COMMENT 'oyee Name of System User',
  `empolyeeMNo` varchar(15) NOT NULL COMMENT 'oyee Mobile Number of System User',
  `bookerNICNo` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL COMMENT 'Password for login to system',
  `id_sopir` varchar(20) DEFAULT NULL,
  `status_akun_sopir` varchar(25) DEFAULT NULL,
  `privilege` varchar(25) NOT NULL DEFAULT 'Not User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Master Table is store System User Data and Login Data';

--
-- Dumping data untuk tabel `system_user`
--

INSERT INTO `system_user` (`userName`, `empolyeeNo`, `empolyeeName`, `empolyeeMNo`, `bookerNICNo`, `password`, `id_sopir`, `status_akun_sopir`, `privilege`) VALUES
('alvin', 'AL1', 'M Alvin', '8137767', NULL, 'c10d01c36d81c02525093af07296cfc8', NULL, '', 'AdminLok'),
('alvin1', 'BKOn', 'M.Alvin Septriyandi', '081377675399', '2020BK-081377675399', 'ca65e26e4f57470ae0bdf3f0347fdfcd', NULL, '', 'BKOnline'),
('andre', 'SPDrv', 'Andre Alfath', '081377675399', NULL, '19912032aa7a1df9218eccab0d0331f8', '2020DV-081377675399', 'Utama', 'Sopir'),
('bambang', 'SPDrv', 'Bambang', '081299899709', NULL, '9c130c52bfa4a6babacceb1e9712458d', '2020DV-081299899709', 'Utama', 'Sopir'),
('bobby', 'SPDrv', 'Bagas Joko', '81377675408', NULL, '524af93cd9b10a5a555558347a0bc6bb', '2020DV-81377675408', 'Utama', 'Sopir'),
('edi', 'SPDrv', 'Edi Siswanto', '081532877654', NULL, '0ca3932f83119377830d5bb1703510ff', '2020DV-081532877654', 'Utama', 'Sopir'),
('een', 'SPDrv', 'Een Nugroho', '081254768988', NULL, '057afaecb53368d8298aa3004b0fbdc1', '2020DV-081254768988', 'Utama', 'Sopir'),
('eyik', 'SPDrv', 'Eyik Purnomo', '081537809870', NULL, '70e4c2b3bef3b8321abc34bef1143b92', '2020DV-081537809870', 'Utama', 'Sopir'),
('helmi', 'SPDrv', 'Helmi Koplak', '082198979609', NULL, 'bcd5fa03af2cd6b2670a34ee5f8744b8', '2020DV-082198979609', 'Utama', 'Sopir'),
('irul', 'SPDrvCd', 'Khairul', '081377674307', NULL, '7de758816067f8676e0343c3effbf7e9', '2020DV-81377675408', 'Tidak Aktif', 'SopirCD'),
('iwan', 'SPDrv', 'Iwan Komeng', '081277675508', NULL, '22a93c1c7f1a611844ac7cb2b144d2e9', '2020DV-081277675508', 'Utama', 'Sopir'),
('kania', 'BKOn', 'Kania Azka Agustine', '081377675555', '2020BK-081377675555', 'ca65e26e4f57470ae0bdf3f0347fdfcd', NULL, '', 'BKOnline'),
('Kasun', '003', 'Kasun ', '0717226079', NULL, '1e6bdb9d266d9c4073b34cdfa174b635', NULL, '', 'Booker'),
('mulyadi', 'SPDrv', 'Mulyadi', '081387865433', NULL, 'd5433fa31f997178128236a02962b377', '2020DV-081387865433', 'Utama', 'Sopir'),
('Nelson', 'OW1', 'Nelson Mus Effendi', '082175579644', NULL, 'ca65e26e4f57470ae0bdf3f0347fdfcd', NULL, '', 'Owner'),
('OP1', 'OP', 'M.Yoga', '081377675307', NULL, 'ca65e26e4f57470ae0bdf3f0347fdfcd', NULL, '', 'Operator'),
('OP2', 'OP', 'Riki', '081277675507', NULL, '12bc2ca12254eec4b822b2bea62ac470', NULL, NULL, 'Operator'),
('Rian ', 'BKOn', 'Rian Palembang', '081112344567', '2020BK-081112344567', '1e6bdb9d266d9c4073b34cdfa174b635', NULL, '', 'BKOnline'),
('ridho', 'SPDrvCd', 'Ridho Febri', '081277675309', NULL, 'c8d21bf8454f3c4a8b206414759e8e42', '2020DV-081377675399', 'Tidak Aktif', 'SopirCD'),
('selamat', 'BKOn', 'Selamat Idul Adha', '087654321256', '2020BK-087654321256', '928ee697fbc39822006b73554155e857', NULL, '', 'BKOnline'),
('suparno', 'SPDrv', 'Suparno', '085737786543', NULL, 'c9d232d3b935520b241db639c2ba1343', '2020DV-085737786543', 'Utama', 'Sopir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_bus`
--
ALTER TABLE `assign_bus`
  ADD PRIMARY KEY (`assign_bus_no`),
  ADD KEY `userName` (`userName`,`busNo`),
  ADD KEY `routeNo` (`busNo`);

--
-- Indexes for table `assign_coductor`
--
ALTER TABLE `assign_coductor`
  ADD PRIMARY KEY (`assingConductorNo`),
  ADD KEY `userName` (`userName`,`conductorNo`),
  ADD KEY `userName_2` (`userName`),
  ADD KEY `conductorNo` (`conductorNo`);

--
-- Indexes for table `available_seat`
--
ALTER TABLE `available_seat`
  ADD PRIMARY KEY (`seatNo`,`busNo`,`journeyNo`,`date`),
  ADD KEY `seatNo` (`seatNo`,`busNo`),
  ADD KEY `busNo` (`busNo`);

--
-- Indexes for table `booker`
--
ALTER TABLE `booker`
  ADD PRIMARY KEY (`bookerNICNo`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `bookerNICNo` (`bookerNICNo`,`busNo`),
  ADD KEY `bookerNICNo_2` (`bookerNICNo`),
  ADD KEY `busNo` (`busNo`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busNo`);

--
-- Indexes for table `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`conductorNo`),
  ADD KEY `busNo` (`busNo`);

--
-- Indexes for table `entrypoint_for_journey`
--
ALTER TABLE `entrypoint_for_journey`
  ADD PRIMARY KEY (`entryPoint_for_journeyNo`),
  ADD KEY `entryPointNo` (`entryPointNo`),
  ADD KEY `journeyNo` (`journeyNo`);

--
-- Indexes for table `entry_point`
--
ALTER TABLE `entry_point`
  ADD PRIMARY KEY (`entryPointNo`),
  ADD KEY `entryPoint` (`entryPoint`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `journey`
--
ALTER TABLE `journey`
  ADD PRIMARY KEY (`journeyNo`);

--
-- Indexes for table `journey_for_bus`
--
ALTER TABLE `journey_for_bus`
  ADD PRIMARY KEY (`journey_for_bus_No`),
  ADD KEY `busNo` (`busNo`),
  ADD KEY `journeyNo` (`journeyNo`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`konfirmasi_id`);

--
-- Indexes for table `konfirmasi_booker`
--
ALTER TABLE `konfirmasi_booker`
  ADD PRIMARY KEY (`bookerNICNo`);

--
-- Indexes for table `konfirmasi_paket`
--
ALTER TABLE `konfirmasi_paket`
  ADD PRIMARY KEY (`konfirmasi_id`);

--
-- Indexes for table `konfirmasi_sopircadangan`
--
ALTER TABLE `konfirmasi_sopircadangan`
  ADD PRIMARY KEY (`id_sopir_cadangan`);

--
-- Indexes for table `manual_booking`
--
ALTER TABLE `manual_booking`
  ADD PRIMARY KEY (`manualBookingNo`),
  ADD KEY `userName` (`userName`,`bookingID`),
  ADD KEY `bookerNICNo` (`bookingID`);

--
-- Indexes for table `pbarang`
--
ALTER TABLE `pbarang`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indexes for table `rating_mobil`
--
ALTER TABLE `rating_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive_ticke`
--
ALTER TABLE `receive_ticke`
  ADD PRIMARY KEY (`ticketNo`),
  ADD KEY `bookerNICNo` (`passengerName`),
  ADD KEY `seatNo` (`seatNo`),
  ADD KEY `ticketNo` (`ticketNo`);

--
-- Indexes for table `receive_ticke_p`
--
ALTER TABLE `receive_ticke_p`
  ADD PRIMARY KEY (`ticketNo`),
  ADD KEY `bookerNICNo` (`passengerName`),
  ADD KEY `seatNo` (`seatNo`),
  ADD KEY `ticketNo` (`ticketNo`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`rek_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seatNo`);

--
-- Indexes for table `sopir_cadangan`
--
ALTER TABLE `sopir_cadangan`
  ADD PRIMARY KEY (`id_sopir_cadangan`);

--
-- Indexes for table `sopir_dtl`
--
ALTER TABLE `sopir_dtl`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `system_user`
--
ALTER TABLE `system_user`
  ADD PRIMARY KEY (`userName`),
  ADD KEY `empoyeeName` (`empolyeeName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_bus`
--
ALTER TABLE `assign_bus`
  MODIFY `assign_bus_no` int(5) NOT NULL AUTO_INCREMENT COMMENT 'this is primary key', AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `assign_coductor`
--
ALTER TABLE `assign_coductor`
  MODIFY `assingConductorNo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'this is primary key';
--
-- AUTO_INCREMENT for table `entrypoint_for_journey`
--
ALTER TABLE `entrypoint_for_journey`
  MODIFY `entryPoint_for_journeyNo` int(3) NOT NULL AUTO_INCREMENT COMMENT 'this is primary key', AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `entry_point`
--
ALTER TABLE `entry_point`
  MODIFY `entryPointNo` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Bus Entry Point No', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `journey_for_bus`
--
ALTER TABLE `journey_for_bus`
  MODIFY `journey_for_bus_No` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `konfirmasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `konfirmasi_paket`
--
ALTER TABLE `konfirmasi_paket`
  MODIFY `konfirmasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `manual_booking`
--
ALTER TABLE `manual_booking`
  MODIFY `manualBookingNo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'this is primary key';
--
-- AUTO_INCREMENT for table `rating_mobil`
--
ALTER TABLE `rating_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seatNo` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Bus Seat Number', AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `assign_bus`
--
ALTER TABLE `assign_bus`
  ADD CONSTRAINT `assign_bus_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `system_user` (`userName`);

--
-- Ketidakleluasaan untuk tabel `assign_coductor`
--
ALTER TABLE `assign_coductor`
  ADD CONSTRAINT `assign_coductor_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `system_user` (`userName`),
  ADD CONSTRAINT `assign_coductor_ibfk_2` FOREIGN KEY (`conductorNo`) REFERENCES `conductor` (`conductorNo`);

--
-- Ketidakleluasaan untuk tabel `available_seat`
--
ALTER TABLE `available_seat`
  ADD CONSTRAINT `available_seat_ibfk_1` FOREIGN KEY (`seatNo`) REFERENCES `seat` (`seatNo`),
  ADD CONSTRAINT `available_seat_ibfk_2` FOREIGN KEY (`busNo`) REFERENCES `bus` (`busNo`);

--
-- Ketidakleluasaan untuk tabel `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`busNo`) REFERENCES `bus` (`busNo`);

--
-- Ketidakleluasaan untuk tabel `entrypoint_for_journey`
--
ALTER TABLE `entrypoint_for_journey`
  ADD CONSTRAINT `entrypoint_for_journey_ibfk_2` FOREIGN KEY (`entryPointNo`) REFERENCES `entry_point` (`entryPointNo`),
  ADD CONSTRAINT `entrypoint_for_journey_ibfk_3` FOREIGN KEY (`journeyNo`) REFERENCES `journey` (`journeyNo`);

--
-- Ketidakleluasaan untuk tabel `journey_for_bus`
--
ALTER TABLE `journey_for_bus`
  ADD CONSTRAINT `journey_for_bus_ibfk_1` FOREIGN KEY (`busNo`) REFERENCES `bus` (`busNo`),
  ADD CONSTRAINT `journey_for_bus_ibfk_2` FOREIGN KEY (`journeyNo`) REFERENCES `journey` (`journeyNo`);

--
-- Ketidakleluasaan untuk tabel `manual_booking`
--
ALTER TABLE `manual_booking`
  ADD CONSTRAINT `manual_booking_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `system_user` (`userName`);

--
-- Ketidakleluasaan untuk tabel `receive_ticke`
--
ALTER TABLE `receive_ticke`
  ADD CONSTRAINT `receive_ticke_ibfk_2` FOREIGN KEY (`seatNo`) REFERENCES `seat` (`seatNo`);

DELIMITER $$
--
-- Event
--
CREATE DEFINER=`root`@`localhost` EVENT `expires_booking_seat_delete` ON SCHEDULE EVERY 60 SECOND STARTS '2014-04-22 17:20:29' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM available_seat WHERE (NOW()>addtime(time,'00:11:00') AND status="P")$$

CREATE DEFINER=`root`@`localhost` EVENT `expires_booking_ticke_delete` ON SCHEDULE EVERY 60 SECOND STARTS '2014-04-22 17:20:46' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM booking WHERE (NOW()>s_bookin_time AND payment_status="P")$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
