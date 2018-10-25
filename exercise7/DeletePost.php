<style><?php include './style.css'; ?></style>
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
 echo '<table>';
    echo '<tr>';
      echo "posts selected: " . $numberChecked . '</br>';
    echo '</tr>';

   if($numberChecked != 0){
     echo '<tr>' . "Posts to be deleted: " . '</tr>';
     echo '<tr>';
        echo '<th>' . "Post ID" . '</th>';
        echo '<th>' . "Post Content" . '</th>';
     echo '</tr>';

     for($i=0; $i<$numberChecked; $i++){
       $please = $deletePosts[$i];
       $values = "SELECT * FROM Posts WHERE content='$please'";
       $theQuery = mysqli_query($mysqli, $values);
       while($row = mysqli_fetch_array($theQuery)){
         $choose[] = $row['post_id'];
        }
        echo '<tr>';
          echo '<td>' . $choose[$i] . '</td>';
          echo '<td>' . $deletePosts[$i] . '</td>';
        echo '</tr>';
        $deleteText = "DELETE FROM Posts WHERE post_id = '$choose[$i]'";
        $deleteQuery = mysqli_query($mysqli, $deleteText);
     }
     echo '</table>';
     echo "Selected posts removed from the database" . '</br>';
 }

  $mysqli->close($mysqli);
?>
