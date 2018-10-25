<?php
/*
ViewUserPosts.php
Author: Clare Meyer
Lab: 05; Exercise: 07
delete posts that were checked in DeletePosts.html
 */

 $mysqli = new mysqli("mysql.eecs.ku.edu", "c111m575", "sqlPasswordClare", "c111m575");
 $deletePosts = $_POST['check_list'];
 $numberChecked = 0;

 if(isset($_POST['submit'])){
   if(!empty($_POST['check_list'])){
     $numberChecked = count($_POST['check_list']);
   }
 }

 echo "posts selected: " . $numberChecked . '</br>';

 if($numberChecked != 0){
   echo "Posts to be deleted: " . '</br>';
   for($i=0; $i<$numberChecked; $i++){
     $please = $deletePosts[$i];
     $values = "SELECT * FROM Posts WHERE content='$please'";
     $theQuery = mysqli_query($mysqli, $values);
     while($row = mysqli_fetch_array($theQuery)){
       $choose[] = $row['post_id'];
      }
      echo "Post ID: " . $choose[$i] . " Post content: " . $deletePosts[$i] . '</br>';
      $deleteText = "DELETE FROM Posts WHERE post_id = '$choose[$i]'";
      $deleteQuery = mysqli_query($mysqli, $deleteText);
      echo "Selected posts removed from the database" . '</br>';
   }
 }

  $mysqli->close($mysqli);
?>
