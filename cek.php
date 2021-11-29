<?php 
	session_start();
	if($_SESSION['status']!="user"){
		header("location:../index.php?pesan=belum_login");
	}
	?>