<?php
/*
ViewUserPosts.php
Author: Clare Meyer
Lab: 05; Exercise: 06
populates dropdown table with all the users
 */
 $userName = $_POST[user];

 $mysqli = new mysqli("mysql.eecs.ku.edu", "c111m575", "sqlPasswordClare", "c111m575");
 $userPosts = mysqli_query($mysqli, "SELECT (content) FROM Posts WHERE author_id='$userName'");
 while($row = mysqli_fetch_array($userPosts)){
  echo "<tr>";
    echo "<td>";
      echo $row['content'];
    echo "</td>";
    echo "</br>";
  echo "</tr>";
  }
  $mysqli->close($mysqli);
?>
