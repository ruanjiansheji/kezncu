<?php
session_start();
include ('../../conn.php');
$conn = new conn("SET NAMES UTF8");
$conn->execute_sql();

$rno         = $_POST['idss'];
$rname       = $_POST['bname'];
$password    = sha1($_POST['password']);
$passwordnew = sha1($_POST['passwordNew']);
$mail        = $_POST['mail'];
$phone       = $_POST['phone'];
$conn->sql   = "SELECT password FROM ls_login WHERE rno='".$rno."'";
$res         = $conn->fetch_res();
if ($res[0]['password'] != $password) {
	echo "2";
} else {
	$conn->sql = "UPDATE reader SET rname='".$rname."',password='".$passwordnew."',email = '".$mail."',phone = '".$phone."' where rno='".$rno."'";
	$status    = $conn->execute_sql();
	if ($status == 1) {
		echo "1";
	} else {
		echo "0";
	}
}

?>