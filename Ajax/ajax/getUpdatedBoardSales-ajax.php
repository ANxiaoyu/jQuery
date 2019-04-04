<?php
//连接到数据库
$conn=@mysql_connect("mysql.headfirstlabs.com","secret","really-secret");
if(!$conn)
	die("Error connecting to MySQL:" .mysql_error());

if(!mysql_select_db("headfirst",$conn))
	die("Error selecting Head First database:" .mysql_error());

$select='SELECT boardsSold';
$from=' FROM boardsrus';
$queryResult=@mysql_query($select . $from);
if(!$queryResult)
	die('Error retrieving total boards sold from database.');

while($row=mysql_fetch_array($queryResult)){
	$totalSold=$row['boardsSold'];
}

echo $totalSold;

mysql_close($conn);
?>