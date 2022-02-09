<?php
session_start();
require_once "../inc/db.php";


if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $profile_img = $_FILES['profile_img'];
  $enc_password = sha1($password);

  // print_r($profile_img);
  // exit();





  // Validation Start Here___________________

  //Name Validation  Start__
  if (empty($name)) {
    $_SESSION['error_name'] = "Please Enter Your Name";
    header('location: ./singup.php');
  }
  //Name Validation  Ends___

  //Email Validation  Start__

  if (empty($email)) {
    $_SESSION['error_email'] = "Please Enter Your Email";
    header('location: ./singup.php');
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_email'] = "Please Enter Valid Email";
    header('location: ./singup.php');
  }


  //Password Validation  Start__
  if (empty($password)) {
    $_SESSION['error_password'] = "Please Enter Your Password";
    header('location: ./singup.php');
  } else if (strlen($password) < 8) {
    $_SESSION['error_password'] = "Your Password Must be 8-20 characters long";
    header('location: ./singup.php');
  }
  //Password Validation  Start__


  //Confirm Password Validation  Start__
  if (empty($confirm_password)) {
    $_SESSION['error_confirm_password'] = "Please Enter Your Confirm  Password";
    header('location: ./singup.php');
  } else if ($password != $confirm_password) {
    $_SESSION['error_confirm_password'] = " Your Password Didn't Match";
    header('location: ./singup.php');
  }

  //Confirm Password Validation  Ends__


  //profile_img Validation  Start__
  if (empty($profile_img['name'])) {
    $_SESSION['error_profile_img'] = "Please Upload your Profile Image";
    header("Location: ./signup.php");
  } else if ($profile_img['size'] > 5242880) {
    $_SESSION['error_profile_img'] = "Please Upload a profile picture under 5mb";
    header("Location: ./signup.php");
  }
  //profile_img Validation  Ends__


  //Img Validation  Start_________________________

  else {
    $image_Name = $profile_img['name'];
    $image_Array = explode('.', $image_Name);
    $extension = end($image_Array);
    $newImageName ='User-' . uniqid() . '.' . $extension;
    $fileUpload = move_uploaded_file($profile_img['tmp_name'],'../dashboard/img/'.$newImageName);

  
    $insert = "INSERT into moderna_table (name, email, password, images) VALUES('$name','$email','$enc_password ','$newImageName')";
    $query = mysqli_query($connect, $insert);
    //  print_r($query);

    if ($query) {
      $_SESSION['success'] = "Registration Successful";
      header('location: ./index.php');
    }else{
      echo 'Error';
    }
  

  }
  //Img Validation  Ends_________________

  // Validation Ends Here____________________



    // $img_name = $profile_img['name'];
    // $imgArray = explode('.', $img_name);
    // $extension = end($imgArray);
    // $newImageName = 'User-' . uniqid() . '.' . $extension;
  
    // //move uploaded flies
    // $fileUpload =  move_uploaded_file($profile_img['tmp_name'], '../dashboard/img/' . $newImageName);
  
  
    // $insert = "INSERT INTO moderna_table(name, email, password, images) VALUES ('$name','$email', '$enc_password ','$newImageName')";
    // $query = mysqli_query($connect, $insert);
  
    // var_dump($query);
  
    // if ($fileUpload) {
    //   $_SESSION['success'] = "Registration Successful";
    //   header('location: ./index.php');
    // } else {
    //   echo 'Error';
    // }

}
