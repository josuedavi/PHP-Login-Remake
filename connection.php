<?php

//variable used to connect to database
$conn = mysqli_connect("localhost","root","root","registrationdb");

//check to see if connection work
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
