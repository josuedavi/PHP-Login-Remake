<?php
//require, same as include, but stops script when error occurs and spits out a fatal error
//require once checks if file has already been input, and if so doesn't do it again
require_once('connection.php');

//var declarations
$email = $password = $pwd = "";

//get typed in text from html input fields
$email = $_POST['email'];
$pwd = $_POST['password'];
//hashes passwords quickly, COME BACK AND MAKE HASHING BETTER
$password = MD5($pwd);

//sql to find email,passwords for users
$sql = "SELECT * FROM tbluser WHERE email = '$email' and password = '$password'";
//runs SQL query on $conn db
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["Email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: welcome.php");
}
else
{
	echo "Invalid email or password";
}
?>