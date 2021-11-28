<?php
	include"inc/config.php";

	if(!empty($_SESSION['iam_user'])){
		redir("index.php");
	}

	include"layout/header.php";
?>

    <?php
        if(!empty($_POST)){
    extract($_POST);

    $password = md5($password);
    $q = mysqli_query($connect, "insert into staff Values('$username','$password','$f_name','$email','$telephone','user')");
        if($q){
    ?>
    <div class="alert alert-success">Register succes.<br>
    <a href="<?php echo $url."login.php"; ?>">Please login</a>
    </div>
        <?php }else{ ?>
        <div class="alert alert-danger">An error occurred in filling out the form. Please Try Again</div>
        <?php } } ?>   
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
  

	<br \><br \>
			<div class="container">
                <form action="" method="post" enctype="multipart/form-data">
						<label>Nama</label><br>
						<input type="text" class="form-control" name="username" required placeholder="Input username"><br>
						<label>Password</label><br>
						<input type="password" class="form-control" name="password" required placeholder="Input Password"><br>
						<label>Full name</label><br>
						<input type="text" class="form-control" name="alamat" required placeholder="Masukkan Alamat"><br>
						<label>Email</label><br>
						<input type="email" class="form-control" name="email" required placeholder="Masukkan Email"><br>
						<label>Telephone</label><br>
						<input type="text" class="form-control" name="telephone" required placeholder="Masukkan Nomor Telp"><br>

						<input type="submit" name="form-input" value="Register" class="btn btn-success">
					</form>

				<div style="color:white"> 
					Already have an account ? <a href="index.php">Login now !</a>
				</div>
			
			<br \>
        </div>	
  </body>
</html>