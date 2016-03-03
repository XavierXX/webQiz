<?php
$con = mysql_connect ( "localhost", "root", "root" );
if (! $con) {
	die ( 'Could not connect: ' . mysql_error () );
}
//createDataBase ( $con );
createTables ( $con );

mysql_close ( $con );

// 创建数据库
function createDataBase($con) {
	if (mysql_query ( "CREATE DATABASE webqiz", $con )) {
		echo "Database created";
	} else {
		echo "Error creating database: " . mysql_error ();
	}
}

// 创建数据库中的表
function createTables($con) {
	mysql_query ( "USE webqiz;", $con );
	if (mysql_query ( "CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;", $con )) {
		echo "TABLE USER created";
	} else {
		echo "Error creating table user:" . mysql_error ();
	}
	if (mysql_query ( "CREATE TABLE `questionnaire` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `questionnaire_id` varchar(20) DEFAULT NULL,
  `questionnaire_title` varchar(50) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;", $con )) {
		echo "TABLE questionnaire created";
	} else {
		echo "Error creating table questionnaire:" . mysql_error ();
	}
	if (mysql_query ( "CREATE TABLE `problem` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `problem_id` varchar(20) DEFAULT NULL,
  `problem_content` varchar(20) DEFAULT NULL,
  `questionnaire_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;", $con )) {
		echo "TABLE problem created";
	} else {
		echo "Error creating table problem:" . mysql_error ();
	}
	if (mysql_query ( "CREATE TABLE `choice` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `choice_id` varchar(20) DEFAULT NULL,
  `choice_content` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;", $con )) {
		echo "TABLE choice created";
	} else {
		echo "Error creating table choice:" . mysql_error ();
	}
	
if (mysql_query ( "CREATE TABLE `system_index` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `questionnaire_index` int(10) DEFAULT NULL,
  `problem_index` int(10) DEFAULT NULL,
  `choice_index` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;", $con )) {
		mysql_query("INSERT INTO `system_index` VALUES ('1','1','1','1');",$con);
		echo "TABLE system_index created";
	} else {
		echo "Error creating table system_index:" . mysql_error ();
	}

}
?>