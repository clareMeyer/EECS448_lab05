<?php
/*
ViewUserPosts.php
Author: Clare Meyer
Lab: 05; Exercise: 07
delete posts that were checked in DeletePosts.html
 */

 $mysqli = new mysqli("mysql.eecs.ku.edu", "c111m575", "sqlPasswordClare", "c111m575");
 echo "hi";
 $deletePosts = $_POST['check_list'];
 /*$thePosts = mysqli_query($mysqli, "DELETE FROM Posts WHERE post_id='$deletePosts'");*/

 if(isset($_POST['submit'])){
   if(!empty($_POST['check_list'])){
     $numberChecked = count($_POST['check_list']);
   }
 }

 echo "number checked: " . $numberChecked . '</br>';

/* for($i=0; $i<$numberChecked; $i++){
   echo $deletePosts[$i];
 }*/
/* foreach($_POST['check_list'] as $item)){*/

if(is_array($_POST['check_list'])){
  foreach($_POST['check_list'] as $value){
    echo "in here";
    echo $value;
  }
}

if(isset($_POST['check_list'])){
  echo "check1" . '</br>';
  if(is_array($_POST['check_list'])){
    echo "check2" . '</br>';
    foreach($_POST['check_list'] as $value){
      echo "check3" . $value . '</br>';
      print_r($value['name'][0]['value']);
    }
  } else {
    $value = $_POST['check_list'];
    echo $value;
  }
}
  $mysqli->close($mysqli);
?>
