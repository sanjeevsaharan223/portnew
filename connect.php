<?php

$link = mysqli_connect("127.0.0.1", "phpmyadmin", "sanju", "admission");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


echo "conection successful";

?>
