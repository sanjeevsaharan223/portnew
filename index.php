<?php
session_start();
include 'connect.php';

$applicationNo = $_SESSION['applicationNo'];
if (isset($_SESSION['login'])) {
  echo "afterlogin";
  echo $applicationNo;
  $query = "SELECT * FROM `state` WHERE applicationNo='$applicationNo'";
  $result = mysqli_query($link, $query);
  $row=mysqli_fetch_array($result);
  echo $row['control'];
  header("Location:step".$row['control'].".php");

}




?>
