<?php
//start session
session_start();
//end session
session_destroy();
//relocate to 'login' page
header("Location: login.php");
?>