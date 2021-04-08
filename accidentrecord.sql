

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_username` varchar(45) NOT NULL,
  `ad_password` varchar(45) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ;

INSERT INTO `admin` VALUES (1,'admin','admin');

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;

CREATE TABLE `record` (
 `r_id` int(9) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `place` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `dt` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `kill` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `wound` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `v_type` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `v_number` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `reason` varchar(200) CHARACTER SET armscii8 NOT NULL,
 
  PRIMARY KEY (`r_id`)
) ;




DROP TABLE IF EXISTS `type`;

CREATE TABLE `type` (
  `t_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`t_id`)
) ;

INSERT INTO `type` VALUES (1,'Major'),(2,'Minor');



DROP TABLE IF EXISTS `v_type`;

CREATE TABLE `v_type` (
  `v_id` int(11) NOT NULL,
  `v_type` varchar(45) NOT NULL,
  PRIMARY KEY (`v_id`)
) ;



INSERT INTO `v_type` VALUES (1,'Truck'),(2,'Bus'),(3,'Pickup'),(4,'Mini Van'),(5,'Car '),(6,'Auto'),(7,'Two Wheeler');


