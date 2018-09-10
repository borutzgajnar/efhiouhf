-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Avg 04, 2018 at 12:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `novice`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `igralci`
--

CREATE TABLE IF NOT EXISTS `igralci` (
`ID` int(100) NOT NULL,
  `Stevilka` int(11) NOT NULL,
  `Ime` text NOT NULL,
  `Pozicija` text NOT NULL,
  `Starost` varchar(20) NOT NULL,
  `Vrsta` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igralci`
--

INSERT INTO `igralci` (`ID`, `Stevilka`, `Ime`, `Pozicija`, `Starost`, `Vrsta`) VALUES
(1, 10, 'MATEJ MLAKAR', 'Napadalec', '19 ', 1),
(2, 9, 'MATEVŽ BREGAR', 'Napadalec', '21', 1),
(3, 8, 'ALJAZ HOCEVAR', 'Golman', '28', 1),
(4, 7, 'LUKA MLAKAR', 'Golman', '19', 1),
(5, 3, 'ANDREJ LOPATEC', 'Obramba', '31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ime`
--

CREATE TABLE IF NOT EXISTS `ime` (
`ID` int(20) NOT NULL,
  `Ime` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ime`
--

INSERT INTO `ime` (`ID`, `Ime`) VALUES
(1, 'Maribor'),
(3, 'Domžale'),
(4, 'Celje'),
(5, 'Olimpija'),
(6, 'Zavrc'),
(7, 'Rudar'),
(8, 'Luka Koper'),
(9, 'Gorica'),
(10, 'Krka'),
(11, 'Radomlje');

-- --------------------------------------------------------

--
-- Table structure for table `lestvica`
--

CREATE TABLE IF NOT EXISTS `lestvica` (
`ID` int(11) NOT NULL,
  `Mesto` int(11) NOT NULL,
  `Ime` text NOT NULL,
  `tekme` int(11) NOT NULL,
  `točke` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lestvica`
--

INSERT INTO `lestvica` (`ID`, `Mesto`, `Ime`, `tekme`, `točke`) VALUES
(1, 1, 'Maribor', 43, 102),
(2, 2, 'Krka', 43, 99),
(3, 3, 'Zavrc', 43, 86);

-- --------------------------------------------------------

--
-- Table structure for table `novice`
--

CREATE TABLE IF NOT EXISTS `novice` (
`ID` int(11) NOT NULL,
  `Naslov` text CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `Vsebina` text CHARACTER SET utf16 COLLATE utf16_slovenian_ci NOT NULL,
  `vsebina2` text CHARACTER SET utf16 COLLATE utf16_slovenian_ci NOT NULL,
  `vsebina3` text CHARACTER SET utf16 COLLATE utf16_slovenian_ci NOT NULL,
  `vsebina4` text NOT NULL,
  `vsebina5` text NOT NULL,
  `Avtor` text CHARACTER SET utf16 COLLATE utf16_slovenian_ci NOT NULL,
  `Datum` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `novice`
--

INSERT INTO `novice` (`ID`, `Naslov`, `Vsebina`, `vsebina2`, `vsebina3`, `vsebina4`, `vsebina5`, `Avtor`, `Datum`) VALUES
(1, 'Nogometni zaslužkarji: Ronaldo najbogatejši, Messi pa tik za njim', 'Po podatkih nogometnega portala goal.com je portugalski zvezdnik in član madridskega Reala Cristiano Ronaldo najbogatejši nogometaš na svetu.', '', '', '', '', 'Matej Mlakar', '2015-11-11'),
(2, 'Italijanski pokal: Fiorentina slavila v Torinu', 'Odigrani sta bili prvi polfinalni tekmi italijanskega nogometnega pokala. Aktualni prvak Juventus je v Torinu gostil Fiorentino in nepričakovano izgubil (1:2). Že prej sta se Lazio in Napoli v Rimu razšla brez zmagovalca (1:1).', '', '', '', '', 'Anže Kopitar', '2015-10-10'),
(3, 'Predstavitev', 'Nogometni klub Krka sodi med novomeške klube z najdaljšo tradicijo. Za ustanovni datum štejemo 19. februar 1922, ko sta se na pobudo tovarnarja Josipa Medica združila dva novomeška športna kluba in prvi člani so sklenili, da bodo razvijali organizirano igranje nogometa in popularizirali ta šport na Dolenjskem. Ni naključje, da se je klub že na samem začetku imenoval Krka, saj so bila nogometna igrišča, vedno poleg reke Krke: na Loki, v Kandiji in kasneje na Portovalu. Klub so kasneje na prvi seji preimenovali v NK Elan in pod tem imenom je deloval do devetdesetih let dvajsetega stoletja. Danes je ime Elan izpisano tudi v grbu kluba, ob ustanovni letnici 1922.', 'Od leta 2005 se klub zopet imenuje Krka, tokrat po farmacevtski tovarni, ki je dobila ime po dolenjski zeleni lepotici. Krka, tovarna zdravil, je prevzela generalno sponzorstvo kluba, ko smo v klubu k', 'Naša vizija, da postanemo klub, ki bo zrasel z lokalnim okoljem in bo nogometni center Dolenjske in s?asoma tudi širšega podro?ja jugovzhodne Slovenije, se tako uresni?uje. Sedaj imamo glede ?lanske s', 'Spoštovani trenerji, igralci, ljubitelji nogometa, sponzorji, donatorji, mnogi prostovoljni sodelavci, starši otrok, ki žrtvujete ure svojega prostega ?asa, da vaš otrok sodeluje v del?ku globalne nog', '', 'Jože Berus,\r\n\r\npredsednik upravnega odbora', ''),
(4, '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE IF NOT EXISTS `pma__bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE IF NOT EXISTS `pma__column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(21, 'Novice', 'Novice', 'Datum', '', '', '_', ''),
(20, 'Novice', 'Novice', 'Avtor', '', '', '_', ''),
(19, 'Novice', 'Novice', 'Vsebina', '', '', '_', ''),
(18, 'Novice', 'Novice', 'Naslov', '', '', '_', ''),
(17, 'Novice', 'Novice', 'ID', '', '', '_', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma__designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE IF NOT EXISTS `pma__history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE IF NOT EXISTS `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"Novice","table":"Novice"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE IF NOT EXISTS `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE IF NOT EXISTS `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE IF NOT EXISTS `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE IF NOT EXISTS `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE IF NOT EXISTS `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2015-03-03 14:35:23', '{"lang":"sl","collation_connection":"utf8mb4_general_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `razpored`
--

CREATE TABLE IF NOT EXISTS `razpored` (
`ID` int(11) NOT NULL,
  `razpored` varchar(100) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `razpored`
--

INSERT INTO `razpored` (`ID`, `razpored`) VALUES
(1, 'Liga Telemah  27/04/2015 20:45h'),
(2, '24234e23eqewe');

-- --------------------------------------------------------

--
-- Table structure for table `razpored2`
--

CREATE TABLE IF NOT EXISTS `razpored2` (
`ID` int(11) NOT NULL,
  `Selekcija` varchar(20) NOT NULL,
  `Ponedeljek` varchar(10) NOT NULL,
  `Torek` varchar(10) NOT NULL,
  `Sreda` varchar(10) NOT NULL,
  `Četrtek` varchar(10) NOT NULL,
  `Petek` varchar(10) NOT NULL,
  `Sobota` varchar(10) NOT NULL,
  `Nedelja` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `razpored2`
--

INSERT INTO `razpored2` (`ID`, `Selekcija`, `Ponedeljek`, `Torek`, `Sreda`, `Četrtek`, `Petek`, `Sobota`, `Nedelja`) VALUES
(1, 'U19', '12:30', '', '14:20', '', '11:20', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE IF NOT EXISTS `slike` (
`ID` int(11) NOT NULL,
  `Ime` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`ID`, `Ime`) VALUES
(1, 'logo3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igralci`
--
ALTER TABLE `igralci`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ime`
--
ALTER TABLE `ime`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lestvica`
--
ALTER TABLE `lestvica`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `novice`
--
ALTER TABLE `novice`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_coords`
--
ALTER TABLE `pma__designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `razpored`
--
ALTER TABLE `razpored`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `razpored2`
--
ALTER TABLE `razpored2`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `igralci`
--
ALTER TABLE `igralci`
MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ime`
--
ALTER TABLE `ime`
MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `lestvica`
--
ALTER TABLE `lestvica`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `novice`
--
ALTER TABLE `novice`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `razpored`
--
ALTER TABLE `razpored`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `razpored2`
--
ALTER TABLE `razpored2`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
