<?php
require_once('connection.php');
require_once('link.php');
require_once('header1.php');




$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["firstname"];
		$lname = $row["lastname"];
		$email = $row["email"];
		$gender = $row["gender"];
	}
}

?>
<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $fname." ".$lname; ?></h1>
	</center>
	
</div>