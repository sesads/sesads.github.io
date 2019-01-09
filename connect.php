<?php
// the name of the host of the database
$host='sql107.byethost.com';
// username of the host subscriber nt users to be logged in
$user_db ='b18_23235163';
//password of d mysql host username
$password = 'Sesadseing#33';
// the name of the database
$db = 'b18_23235163_sesads';
$connect_error = 'couldn\'t connect';
$con=mysqli_connect($host,$user_db,$password,$db);


if (mysqli_connect_errno()) {
	die($connect_error);
}else{

}
?> 