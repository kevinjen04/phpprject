<?php
	include('dbcon.php');
	session_start();
	$sid = $_SESSION['uemail'];
	$sal_session = "SELECT * FROM users where usermail ='$sid'";
	$result_session = $conn -> query($sal_session);
	$row_session = $result_session -> fetch_assoc();
?>
