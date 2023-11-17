	<?php
		include('dbcon.php');

		$uname=$_POST['uname'];
		$uemail=$_POST['uemail'];
		$upass= md5($_POST['upass']);
		$utype=$_POST['utype']; 

		$sql="INSERT INTO users(`username`,`usermail`,`userpass`,`usertype`) values('$uname','$uemail','$upass','$utype')";

		$result=$conn -> query($sql);

		echo $uname."<br>";

		echo $uemail."<br>";

		echo $upass."<br>";

		echo $utype."<br>";


	?>
