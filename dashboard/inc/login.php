<?php

session_start();
require_once "../inc/db.php";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $enc_password = sha1($password);


  //Email Validation  Start__

  if (empty($email)) {
    $_SESSION['error_email'] = "Please Enter Your Email";
    header('location: ./index.php');
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_email'] = "Please Enter Valid Email";
    header('location: ./index.php');
  }

  //Password Validation  Start__
  if (empty($password)) {
    $_SESSION['error_password'] = "Please Enter Your Password";
    header('location: ./index.php');
  }


  // Login Pro

  $select = "SELECT email from moderna_table where email ='$email'";
  $query = mysqli_query($connect, $select);

  // print_r($query);

  if(mysqli_num_rows($query) > 0){

    $select = "SELECT id, password from moderna_table where password = '$enc_password'";
    $query = mysqli_query($connect, $select);
    $fetch = mysqli_fetch_assoc($query);
    // print_r($fetch);
    // exit();

    if(mysqli_num_rows($query) > 0){
      $_SESSION["error_password"] = "Login Successful";
      $_SESSION['login'] = "true";
      $_SESSION['user_id'] = $fetch['id'];
      header('location: ../dashboard/index.php');
     }else{
        $_SESSION["error_password"] = "Your password Wrong";
        header('location: ./index.php');
      }
  
    
  }else{
    $_SESSION["error_email"] = "Unmatch email Address";
     header('location: ./index.php');
     }



  
}
