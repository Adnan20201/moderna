<?php
session_start();
require_once "../inc/db.php";

// echo "ok";
// exit();

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $detail = $_POST['detail'];
  $button_text = $_POST['buttom_text'];
  $button_link = $_POST['buttom_link'];

  //Validation  Start____________________________

  if (empty($title)) {
    $_SESSION['error_title'] = "Please Insert a title";
    header('location: ../banner.php');
  }

  if (empty($detail)) {
    $_SESSION['error_detail '] = "Please Insert a detail";
    header('location: ../banner.php');
  }

  if (empty($button_text)) {
    $_SESSION['error_button_text'] = "Please Insert a button_text";
    header('location: ../banner.php');
  }
  if (empty($button_link)) {
    $_SESSION['error_button_link'] = "Please Insert a button_link";
    header('location: ./banner.php');
  }
  //Validation  End____________________________


  // Insert Start____________

  else {
    $_insert = "INSERT INTO banner(title, detail, button_text, buttom_link) VALUES
    ('$title','$detail','$button_text', '$button_link')";
    $_query = mysqli_query($connect, $_insert);

    if ($_query) {
      $_SESSION['success'] = "Please Insert successful";
      header('location: ../banner.php');
    }
  }


  //  var_dump($_query);
  // Insert Ends ____________

}
