<?php
session_start();
include ('../../conn.php');
$conn = new conn("SET NAMES UTF8");
$conn->execute_sql();
$rno       = $_POST['sno'];
$rname     = $_POST['sname'];
$password  = sha1($_POST['password']);
$type      = $_POST['type'];
$mail      = $_POST['mail'];
$phone     = $_POST['phone'];
$conn->sql = "SELECT rno FROM reader WHERE rno=".$rno;
$res       = $conn->fetch_res();
if (!empty($res[0]['rno'])) {
	echo "-1";
} else {
	$conn->sql = "INSERT INTO reader(rno,rname,password,rdept,phone,email) VALUES ('".$rno."','".$rname."','".$password."','".$type."','".$phone."','".$mail."')";
	$status    = $conn->execute_sql();
	if ($status == 1) {
		echo "1";
	} else {
		echo "0";
	}
}

?>