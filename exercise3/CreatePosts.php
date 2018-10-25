<?php
/*
CreatePosts.php
Author: Clare Meyer
Lab: 05; Exercise: 03
checks the user name and if valid inserts post into the database
 */

/*getting all the info the user inputted from customerFrontend.html*/
$user = $_POST["username"];
$thePost = $_POST["thePost"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "c111m575", "sqlPasswordClare", "c111m575");

/*checking to make sure user is in the database*/
$check = mysqli_query($mysqli, "SELECT user_id FROM Users WHERE user_id = '$user'");
if(mysqli_num_rows($check) == 0){
  echo "User " . $user . " is not in the database";
  exit(0);
}
/* check connection */
else if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
/*making sure username is not empty*/
else if($user == 'null'){
  echo "Cannot have an empty username";
}
else if($thePost == 'null'){
  echo "Cannot have an empty post";
}
else{
  //inserting post into the database under the correct user
  $query = mysqli_query($mysqli, "INSERT INTO Posts(content, author_id) VALUES ('$thePost', '$user')");
  echo "User " . $user . " added a post to the database";
}
/* close connection */
$mysqli->close($mysqli);
?>
