<?php
require_once '../inc/db.php';
$id = $_GET['id'];

$select = "SELECT status FROM blog WHERE id = '$id'";
$query = mysqli_query($connect , $select);
$fetch = mysqli_fetch_assoc($query);
// print_r($fetch);

if($fetch['status'] == 0){
  $update = "UPDATE blog SET status='1' WHERE id = '$id'";
  $query = mysqli_query($connect ,$update);
}else{
  $update = "UPDATE blog SET status='0' WHERE id = '$id'";
  $query = mysqli_query($connect ,$update);
}
header('location: ../all_blog.php');