<?php 
	session_start();
	include('../../conn.php');
	$conn=new conn("SET NAMES UTF8");
	$conn->execute_sql();

    $id=$_POST['id'];
    $bname=$_POST['bname'];
    $author=$_POST['author'];
    $price=$_POST['price'];
    //$total=$_POST['total'];
    $remain=$_POST['remain'];
    $brief=$_POST['brief'];
    $tid=$_POST['tid'];


    $conn->sql="UPDATE book SET bname='".$bname."',bauthor='".$author."',bprice=".$price." ,brief='".$brief."',typeid=".$tid.",bnum=".$remain." WHERE ISBN='".$id."'";
    //$conn->sql="UPDATE book SET bname='西方' where ISBN='978-7-111-40480-4'";
    $status=$conn->execute_sql();
    echo $status;


?>