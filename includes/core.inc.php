<?php
ob_start();
session_start();
//shows the path like/my/series/index.html of the page that have required the core.php on its page
$currentfile = $_SERVER['SCRIPT_NAME'];

// Shows the page a user was on before they loggedout back but this time they wont be logged in
@$referer = $_SERVER['HTTP_REFERER'];

function applyAdvert($name,$email,$businessName,$writeUp,$phoneNumber,$whatsappNumber,$igAccount,$link,$otherContactInfo){
	require 'connect.php';
	$query = "INSERT INTO `adverts` (`name`,`email`,`businessName`, `writeUp`,`phoneNumber`, `whatsappNumber`, `igAccount`,`link`,`otherContactInfo`,`done`,`date`) VALUES ('".mysqli_real_escape_string($con,$name)."', '".mysqli_real_escape_string($con,$email)."', '".mysqli_real_escape_string($con,($businessName))."', '".mysqli_real_escape_string($con,$writeUp)."', '".mysqli_real_escape_string($con,$phoneNumber)."', '".mysqli_real_escape_string($con,$whatsappNumber)."','".mysqli_real_escape_string($con,$igAccount)."','".mysqli_real_escape_string($con,$link)."','".mysqli_real_escape_string($con,$otherContactInfo)."', '0', CURDATE())";
	if($query_run = mysqli_query($con,$query)){
		return true;
	}else{
		return false;
	}

}
?>