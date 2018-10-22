<?php
$mysqli = new mysqli("mysql.eecs.ku", "c111m575", "password", "c111m575");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

//this is the query that you would type into the sql database
$query = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 50,5";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>



<?php
/*
CreateUser.php
Author: Clare Meyer
Lab: 05; Exercise: 02
checks and inserts the user into database from CreateUser.html
 */

 /*getting all the info the user inputted from customerFrontend.html*/
 $user = $_POST["username"];

/*should not be stored if :
The user left the text field empty
The user already exists
*/


 /*prints welcome, username and password*/
 echo "Welcome" . "</br>";
 echo "Username: " . $user . "</br>";
 echo "Password: " . $pass . "</br>";
 echo "</br>";
 echo "Reciept for payment: " . "</br>";
 echo "</br>";
 ?>
