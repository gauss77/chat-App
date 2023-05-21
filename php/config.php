<?php
    $conn = mysqli_connect('localhost','root','','chat') or die("Try again you little piece of shit!");

  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
