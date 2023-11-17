
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>REGISTRATION</title>

    <style>

    body{

        background-color: black;

    }

    form{

        width: 25%;

        height: 650px;

        background-color: black;

        padding: 50px;

        border-radius: 20px;

        margin-top: 50px;

        border: 50%;

    }

    .btn-primary{

        color: white;

        width: 100%;

        border: 50%;

        border-radius: 50px;

        background: black;

        border-color: orange;

        transition-duration: 0,4s;

    }

    .btn-primary:hover{

    background-color: orange;

    border-color: orange;

    color: black;

    }

    #exampleInputEmail1{

        border-color: orange;

        border: 50%;

        width: 100%;

    }

    #exampleInputPassword1{

        border-color: orange;

        border: 50%;

        width: 100%;

    }

    #firstName{

        border-color: orange;

        border: 50%;

        width: 100%;

    }

    #lastName{

        border-color: orange;

        border: 50%;

        width: 100%;

    }

    #gender{

        color: white;

    }


 

    </style>

</head>

<body>

   

  <div">

    <form class="mx-auto" method="POST" action="signup_process.php">

  <h4 class="text-center" style="color: white;">REGISTER<span style="background-color: black; color: orange;">REGISTRATION</span></h4>

 

  <div class="mb-3 mt-5">

    <label for="exampleInputEmail1" class="form-label;" style="color: orange; text-align: center;">Firstname</label>

    <input type="text" name="uname" required class="form-control" id="firstName">

   </div> 

  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label" style="color: orange;">Email</label>

    <input type="email" name="uemail" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


  </div>

 
 <div class="mb-3">

    <label for="example InputEmail1" class="form-label" style="color: orange;">UserType</label>

 <select class="form-control" name="utype">

	<option value="admin">Admin</option>

	<option value="dummy">Dummy</option>
	
</select>


  </div>

 
  <div class="mb-3">

    <label for="exampleInputPassword1" class="form-label" style="color: orange;">Password</label>

    <input type="password" name="upass" required class="form-control" id="exampleInputPassword1">

     <div id="passHelp" class="form-text" style="color: white;">Forget Password?</div>

  </div>

   

  <button type="submit" class="btn btn-primary">Register</button>

</form>

   

 

  </div>

 

<script src="js/bootstrap.min.js"></script>
</body>

</html>