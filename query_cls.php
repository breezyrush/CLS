<?php
session_start();

include_once 'database.php';
$db = new Database();

$uid = $_SESSION['uid_new'];
$date = $_POST['datepicker'];
$comment = $_POST['comment'];
$idnum = $_POST['idno'];
$option = $_POST['string'];
$subsec = $_POST['subsec'];
$location = $_POST['location'];

if($option=="update"){
	$query = "INSERT INTO consultation (faculty_uid,stud_id,date,description,subsec) VALUES ('$uid','$idnum','$date','$comment','$subsec')";
}else{
	$query = "UPDATE faculty SET location='$location' where faculty_uid='$uid'";
}
mysql_query($query);			
echo "string";

?>