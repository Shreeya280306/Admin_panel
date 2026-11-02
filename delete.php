<?php
include 'include/connect.php';

session_start();
if(!$_SESSION['admin_id']){
    header("location:index.php");
}
$del_id = $_GET['delid'];

$query = $obj->query("delete from user where user_id='$del_id'");

if($query){
    echo "<script>alert('Record Delete...');window.location.href= 'manage_user.php';</script>";
}else{
        echo "<script>alert('Error....');window.location.href= 'manage_user.php';</script>";


}

?>