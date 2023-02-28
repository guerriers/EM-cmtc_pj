CREATE TABLE `member` (
`UserID` int(3) unsigned zerofill NOT NULL auto_increment,
`User_n` varchar(20) NOT NULL,
`pass_w` varchar(20) NOT NULL,
`Name` varchar(100) NOT NULL,
`Status` enum('ADMIN','USER') NOT NULL default 'USER',
PRIMARY KEY  (`UserID`),
UNIQUE KEY `User_n` (`User_n`)
) ENGINE=MyISAM  AUTO_INCREMENT=3 ;
 
--
-- Dumping data for table `member`
--
 
INSERT INTO `member` VALUES (001, 'admin', '1234', 'ADMIN', 'ADMIN');
INSERT INTO `member` VALUES (002, 'faiy', '1005', 'Watchara', 'USER');