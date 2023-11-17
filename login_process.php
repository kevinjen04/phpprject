<?php
include('dbcon.php');
session_start();
$uemail=$_POST['uemail'];
$upass = md5($_POST['upass']);
$sql="SELECT * FROM users WHERE usermail = '$uemail' AND userpass = '$upass'";
$result = $conn -> query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['uemail'] = $uemail;
        header('location:dashboard.php');
    }
    else{
        header('location:login.php');
    }
?>