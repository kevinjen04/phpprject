<?php
	include('session.php');?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>welcome<?php echo $row_session['username'];?></title>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
			<label class="form-control"><h1>Hello</h1><span class="text-primary"><?php if(isset($row_session['username'])) echo $row_session['username'];?></span></label>

		<div class="col-6">
		</div>
	</div>
	</body>
	</html>
	 