<?php
/*
CreatePosts.php
Author: Clare Meyer
Lab: 05; Exercise: 03
checks and inserts the users post into database
 */

 /*getting all the info the user inputted from customerFrontend.html*/
 $user = $_POST["username"];
 $post = $_POST["post"];

/*should not be stored if :
The post has no text
The post was not written by an existing user
*/


 /*prints welcome, username and password*/
 echo "Welcome" . "</br>";
 echo "Username: " . $user . "</br>";
 echo "Password: " . $pass . "</br>";
 echo "</br>";
 echo "Reciept for payment: " . "</br>";
 echo "</br>";
 ?>
