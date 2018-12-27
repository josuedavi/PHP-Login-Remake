
<?php
//includes once 'connection.php'
require_once('connection.php');

//variables to store in database
$fname = $lname = $gender = $email = $password = $pwd = '';

//takes all the typed in inputs from registration PHP
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd); //encrypts passwords input 

//sql ~ insert into table named "tbluser" which has properties 
//Firstname,Lastname,Gender,Email,Password with values accordingly
$sql = "INSERT INTO tbluser (Firstname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
//Perform query on "$conn" db with "$sql" statement
$result = mysqli_query($conn, $sql);

//if mysqli_query() works then redirects to "login.php" if not returns "Error"
if($result)
{
    //returns HTTP response and redirects to "login.php"
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}


