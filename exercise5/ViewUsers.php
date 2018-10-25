<?php
/*
ViewUserPosts.php
Author: Clare Meyer
Lab: 05; Exercise: 06
populates dropdown table with all the users
 */
 $mysqli = new mysqli("mysql.eecs.ku.edu", "c111m575", "sqlPasswordClare", "c111m575");
 $result = mysqli_query($mysqli, "SELECT * FROM Users");
 while($row = mysqli_fetch_array($result)){
  echo "<tr>";
    echo "<td>";
      echo $row['user_id'];
    echo "</td>";
    echo "</br>";
  echo "</tr>";
  }
  $mysqli->close($mysqli);
?>
