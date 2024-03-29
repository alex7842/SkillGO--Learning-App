
<?php
session_start();
include 'new.php';

//require 'regphp.php';
if(isset($_POST["submit"])){
	$useremail=$_POST["useremail"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"SELECT *  from base1 WHERE     email='$useremail'");
	$row=mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0){
		if($password==$row["password"]){
			$_SESSION["login"]=true;
			$_SESSION["name"]=$row["name"];
			//header("Location:config.php");
			 echo "<script>window.location.href='config.php?username=" . urlencode($row["name"]) . "';</script>";
		
			/*header("Location:config.php");*/
		}
		else{
			
			echo 
			"<script> alert('wrong password');</script>";


		}
	}
	else{
		echo 
		"<script> alert('USER NOT REGISTERED');</script>";
		
	}
}