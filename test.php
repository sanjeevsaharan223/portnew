<?php
include "connect.php";



  $highboard = basicvalidation($_POST['highboard']);
  echo $highboard;

  $highpassyear = basicvalidation($_POST['highpassyear']);
  $highperc = basicvalidation($_POST['highperc']);
  $highdiv =  basicvalidation($_POST['highdiv']);

  $interboard = basicvalidation($_POST['interboard']);
  $interpassyear = basicvalidation($_POST['interpassyear']);
  $interperc = basicvalidation($_POST['interperc']);
  $interdiv = basicvalidation($_POST['interdiv']);

  $graduni = basicvalidation($_POST['graduni']);
  $gradpassyear = basicvalidation($_POST['gradpassyear']);
  $gradperc = basicvalidation($_POST['gradperc']);
  $graddiv = basicvalidation($_POST['graddiv']);

  $beduni = basicvalidation($_POST['beduni']);
  $bedpassyear = basicvalidation($_POST['bedpassyear']);
  $bedperc = basicvalidation($_POST['bedperc']);
  $beddiv = basicvalidation($_POST['beddiv']);


  $otheruni = basicvalidation($_POST['otheruni']);
  $otherpassyear = basicvalidation($_POST['bedpassyear']);
  $otherperc = basicvalidation($_POST['otherperc']);
  $otherdiv = basicvalidation($_POST['otherdiv']);

  $query = "UPDATE `educationDetails` SET
              `highboard` = '$highboard',
              `highpassyear` = '$highpassyear',
              `highperc` = '$highperc',
              `highdiv` = '$highdiv',

              `interboard` = '$interboard',
              `interpassyear` = '$interpassyear',
              `interperc` = '$interperc',
              `interdiv` = '$interdiv',

              `graduni` = '$graduni',
              `gradpassyear` = '$gradpassyear',
              `gradperc` = '$gradperc',
              `graddiv` = '$graddiv',

              `beduni` = '$beduni',
              `bedpassyear` = '$bedpassyear',
              `bedperc` = '$bedperc',
              `beddiv` = '$beddiv',

              `otheruni` = '$otheruni',
              `otherpassyear` = '$otherpassyear',
              `otherperc` = '$otherperc',
              `otherdiv` = '$otherdiv'
          WHERE
              'applicationNo' ='10000'";

    if ($link->query($query) === TRUE) {

    $stmt="UPDATE `state` SET `state`='3' WHERE `applicationNo`='10000'";
    if ($link->query($stmt) === TRUE) {
          header("location:step4.php");
      }
  else {
      echo "Error updating record: " . $link->error;
      }
    }

  else {
    echo "Error updating record: " . $link->error;
    }

  }





function basicvalidation($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





 ?>
