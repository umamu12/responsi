<?php 
	include"inc/config.php";
	if(!empty($_SESSION['iam_user'])){
		redir("logged_in.php");
	}
	 
	
	if(!empty($_POST)){
		extract($_POST);
		$password = md5($password);
		$q = mysqli_query($connect, "SELECT * FROM `user` WHERE username='$username' AND password='$password' AND status='user'");
		if($q){
			$r = mysqli_fetch_object($q);
			$_SESSION['iam_user'] = $r->id;
			redir("logged_in.php");
		}else{
			alert("Maaf email dan password anda salah");
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <script src="jquery.min.js"></script>
	<style>body{background-image:url("bg.jpg");}
	@media screen and (max-width: 600px) {
h4{font-size:85%;}
}
	</style>
	<link rel="icon" 
      type="image/png" 
      href="favicon.png">
  </head>
  <body>
  
  <div align="center">
  
  
  

  <img src="logo.png" width="50%" style="margin-top:5%" \>

	<br \><br \>
			<div class="container">
					<div style="color:white">
					<label>Login information for Demo :</label><br \>
					<label>Username & Password : guest</label><br \>
					</div>
                <form method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn-login">Masuk</button>
                </form>
				<div style="color:white"> 
					Don't have an account ? <a href="register.php">Create now !</a>
				</div>
			<br \>
        </div></div>
       
     
	
	
  </body>
</html>
