
<html>
<head>
<title>SETUP DB</title>
</head>

<div style=" margin-top:20px;color:#FFF; font-size:24px; text-align:center"> 
Welcome&nbsp;&nbsp;&nbsp;
<font color="#FF0000"> hackers </font>
<br>
</div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:left">
<font size="3" color="#FFFF00">
SETTING UP THE DATABASE SCHEMA AND POPULATING DATA IN TABLES:
<br><br> 


<?php
//including the Mysql connect parameters.
include("../mysql/db-creds.inc");




$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)
  {
  die('[*]...................Could not connect to DB, check the creds in db-creds.inc: ' . mysql_error());
  }




//@mysql_select_db('mysql',$con)	
	
//purging Old Database	
	$sql="DROP DATABASE IF EXISTS security";
	if (mysql_query($sql))
		{echo "[*]...................Old database 'SECURITY' purged if exists"; echo "<br><br>\n";}
	else 
		{echo "[*]...................Error purging database: " . mysql_error(); echo "<br><br>\n";}


//Creating new database security
	$sql="CREATE database `security` CHARACTER SET `gbk` ";
	if (mysql_query($sql))
		{echo "[*]...................Creating New database 'SECURITY' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating database: " . mysql_error();echo "<br><br>\n";}

//creating table users
$sql="CREATE TABLE security.users (id int(3) NOT NULL AUTO_INCREMENT, username varchar(20) NOT NULL, password varchar(20) NOT NULL, PRIMARY KEY (id))";
	if (mysql_query($sql))
		{echo "[*]...................Creating New Table 'USERS' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysql_error();echo "<br><br>\n";}


//creating table emails
$sql="CREATE TABLE security.emails
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		email_id varchar(30) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "[*]...................Creating New Table 'EMAILS' successfully"; echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysql_error();echo "<br><br>\n";}



//creating table uagents
$sql="CREATE TABLE security.uagents
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		uagent varchar(256) NOT NULL,
		ip_address varchar(35) NOT NULL,
		username varchar(20) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "[*]...................Creating New Table 'UAGENTS' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysql_error();echo "<br><br>\n";}


//creating table referers
$sql="CREATE TABLE security.referers
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		referer varchar(256) NOT NULL,
		ip_address varchar(35) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "[*]...................Creating New Table 'REFERERS' successfully";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error creating Table: " . mysql_error();echo "<br><br>\n";}







//inserting data
$sql="INSERT INTO security.users (id, username, password) VALUES ('1', 'Dumb', 'Dumb'), ('2', 'Angelina', 'I-kill-you'), ('3', 'Dummy', 'p@ssword'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'admin'), ('9', 'admin1', 'admin1'), ('10', 'admin2', 'admin2'), ('11', 'admin3', 'admin3'), ('12', 'hackers', 'dumbo'), ('14', 'admin4', 'admin4')";
	if (mysql_query($sql))
		{echo "[*]...................Inserted data correctly into table 'USERS'";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error inserting data: " . mysql_error();echo "<br><br>\n";}



//inserting data
$sql="INSERT INTO `security`.`emails` (id, email_id) VALUES ('1', 'Dumb@hackers.com'), ('2', 'Angel@hackers.com'), ('3', 'Dummy@hackers.com'), ('4', 'secure@hackers.com'), ('5', 'stupid@hackers.com'), ('6', 'superman@hackers.com'), ('7', 'batman@hackers.com'), ('8', 'admin@hackers.com')";
	if (mysql_query($sql))
		{echo "[*]...................Inserted data correctly  into table 'EMAILS'";echo "<br><br>\n";}
	else 
		{echo "[*]...................Error inserting data: " . mysql_error();echo "<br><br>\n";}




//CREATE TABLE security.search (id int(3) NOT NULL AUTO_INCREMENT, search varchar(20) NOT NULL, PRIMARY KEY (id));
//INSERT INTO `security`.`search` (search) VALUES ( 'Dumb@hackers.com'), ('Angel@hackers.com'), ('Dummy@hackers.com'), ( 'secure@hackers.com'), ( 'stupid@hackers.com'), ( 'superman@hackers.com'), ( 'batman@hackers.com'), ( 'admin@hackers.com')"; 

//including the Challenges DB creation file.
include("../mysql/setup-db-challenge.php");
?>


</font>
</div>
</body>
</html>