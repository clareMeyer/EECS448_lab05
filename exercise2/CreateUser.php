<?php
/*
CreateUser.php
Author: Clare Meyer
Lab: 05; Exercise: 02
checks and inserts the user into database from CreateUser.html
 */
/*getting all the info the user inputted from customerFrontend.html*/
$user = $_POST["username"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "c111m575", "sqlPasswordClare", "c111m575");

/*checking to make sure user is not already in the database*/
$check = mysqli_query($mysqli, "SELECT user_id FROM Users WHERE user_id = '$user'");
if(mysqli_num_rows($check) != 0){
  echo "User " . $user . " is already in database";
  exit(0);
}
/* check connection */
else if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else if($user == 'null'){
  echo "Cannot have an empty username";
}
else{
  //this is the query that you would type into the sql database
  $query = mysqli_query($mysqli, "INSERT INTO Users (user_id) VALUES ('$user')");
  echo "User " . $user . " added to the database";
}
/* close connection */
$mysqli->close($mysqli);
?>
