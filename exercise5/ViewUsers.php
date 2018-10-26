<?php
/*
ViewUsers.php
Author: Clare Meyer
Lab: 05; Exercise: 05
displays all the users in the database
 */
 $mysqli = new mysqli("mysql.eecs.ku.edu", "c111m575", "sqlPasswordClare", "c111m575");
 /*select everything because userID is the only thing in Users*/
 $result = mysqli_query($mysqli, "SELECT * FROM Users");
 /*populate the table*/
 echo "<table>";
 while($row = mysqli_fetch_array($result)){
  echo "<tr>";
    echo "<td>";
      echo $row['user_id'];
    echo "</td>";
    echo "</br>";
  echo "</tr>";
  }
  echo "</table>";
  $mysqli->close($mysqli);
?>
