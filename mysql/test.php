<?php
	include 'db-creds.inc';
	include 'sql-connect.php';
	include 'functions.php';
	
$tab = table_name();
$col = column_name(2);
$data = data($tab,$col);
echo $data;

?>
