<?php
session_start();
require_once "../inc/db.php";

if(isset($_POST['submit'])){
 $icons = $_POST['icons'];
 $title = $_POST['blog_title'];
 $description = $_POST['description'];

 if (empty($icons)) {
  $_SESSION['error_icons'] = "Please Insert a icons";
  header('location: ../add_blog.php');
}

 if (empty($_title)){
  $_SESSION['error_title'] = "Please Insert a title";
  header('location: ../add_blog.php');
}

if (empty($_description)) {
  $_SESSION['error_description'] = "Please Insert description";
  header('location: ../add_blog.php');
}

else{
  
$insert ="INSERT INTO blog (icons, title, description) VALUES ('$icons','$title','$description');";
$query = mysqli_query($connect, $insert);
print_r($query);

if ($_query) {
  $_SESSION['success'] = "Please Insert successful";
  header('location: ../add_blog.php');
}

}

} 
