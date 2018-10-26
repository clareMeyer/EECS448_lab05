<style><?php include './style.css'; ?></style>
<?php
/*
ViewUserPosts.php
Author: Clare Meyer
Lab: 05; Exercise: 07
delete posts that were checked in DeletePosts.html
 */

 $mysqli = new mysqli("mysql.eecs.ku.edu", "c111m575", "sqlPasswordClare", "c111m575");
 /*gets the list of the posts that were checkmarked from DeletePost.html*/
 $deletePosts = $_POST['check_list'];
 $numberChecked = 0;

 /*once the list has been submitted this gets the number of posts to be deleted*/
 if(isset($_POST['submit'])){
   if(!empty($_POST['check_list'])){
     $numberChecked = count($_POST['check_list']);
   }
 }
 /*populates a table with the number checked, the posts to be deleted by their id number and their content*/
 echo '<table>';
    echo '<tr>';
      echo "posts selected: " . $numberChecked . '</br>';
    echo '</tr>';

    /*loops for the number of times that there are posts check marked*/
   if($numberChecked != 0){
     echo '<tr>' . "Posts to be deleted: " . '</tr>';
     echo '<tr>';
        echo '<th>' . "Post ID" . '</th>';
        echo '<th>' . "Post Content" . '</th>';
     echo '</tr>';

     for($i=0; $i<$numberChecked; $i++){
       /* accessing the post content*/
       $please = $deletePosts[$i];
       /*selecting the post that has been checked by its content*/
       $values = "SELECT * FROM Posts WHERE content='$please'";
       $theQuery = mysqli_query($mysqli, $values);
       /*getting the post ids*/
       while($row = mysqli_fetch_array($theQuery)){
         $choose[] = $row['post_id'];
        }
        /*populate the table with the information grabbed*/
        echo '<tr>';
          echo '<td>' . $choose[$i] . '</td>';
          echo '<td>' . $deletePosts[$i] . '</td>';
        echo '</tr>';
        /*delete the posts*/
        $deleteText = "DELETE FROM Posts WHERE post_id = '$choose[$i]'";
        $deleteQuery = mysqli_query($mysqli, $deleteText);
     }
     /*if posts were sucessfully deleted, tells the user*/
     echo '</table>';
     echo "Selected posts removed from the database" . '</br>';
 }

  $mysqli->close($mysqli);
?>
