<?php 
	$connect = mysqli_connect("localhost", "root", "");
	$database = "responsi";
	mysqli_select_db($connect,$database);
	
	// settings
	$url = "http://localhost/catering/";
	$title = "Responsi 123170092";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>