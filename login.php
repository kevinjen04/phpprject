
	<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Login</title>

  <style>

  body{

       background: black;

  }

  #login{

    font-weight: 950;

    font-size: x-large;

  }

  form{

    width: 24%;

    background-color: ghostwhite;

    padding: 50px;

    border-radius: 20px;

    margin-top: 150px;

  }

  .btn-primary{

    width: 100%;

    border: 30%;

    border-color: black;

    border-radius: 50px;

    background: white;

    transition-duration: 0.4s;

  }

  .btn-primary:hover{

    background-color: gray;

    border-color: gray;

    color: black;

 

  }

  #btn1{

    color: black;

    font-weight: 900;

  }

 

 

 

  </style>

</head>

<body>

  <div class="container-fluid">

    <form class="mx-auto" method="POST" action="login_process.php">

  <h4 class="text-center" id="login">Login</h4>

  <div class="mb-3 mt-5">

    <label for="exampleInputEmail1" class="form-label">Email</label>

    <input type="email" name="uemail" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

   

  </div>

  <div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">Password</label>

    <input type="password" name="upass" required class="form-control" id="exampleInputPassword1">

     <div id="emailHelp" class="form-text">Forget Password?</div>

  </div>

  <button type="submit" class="btn btn-primary" id="btn1">Login</button>

</form>

   

 

  </div>

 

<script src="js/bootstrap.min.css"></script>

</body>

</html>