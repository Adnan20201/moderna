<?php
session_start();

require_once "inc/db.php";

if(!isset($_SESSION['login'])){
    $_SESSION['login'] ="";
    header('location: ../login/index.php');
}

$user_id = $_SESSION['user_id'];
// echo "$user_id";
$select = "SELECT name, profile_img from moderna_table where id ='$user_id'";
$query = mysqli_query($connect, $select);
// print_r($query);
// exit();
$fetch = mysqli_fetch_assoc($query); 
print_r($fetch );
exit();



// if(!isset($_SESSION['login'])){
//     $_SESSION[''] = "";
//     header('location: ../login/index.php'); 
// }

// $user_id = $_SESSION['user_id']; 

// print_r($user_id);
// exit();
// //$select = "SELECT name, email, profile_img from moderna_table where  id = '$user_id' ";

// //$query =  mysqli_query($connect , $select);
// // var_dump($query);
// // exit();
// //$fetch = mysqli_fetch_assoc($query);
// //print_r($fetch);
// //exit();
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>

    <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    
    <!-- select2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="css/nice-select.css" />
    
    <!-- gijgo css -->
    <link rel="stylesheet" href="css/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/tagsinput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- text editor css -->
    <link rel="stylesheet" href="css/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="css/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="css/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
 <!-- sidebar part here -->
<nav class="sidebar"  style="background: 49596d;">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><mg src="https://creativeitinstitutectg.com/storage/logo/logo_6055bcd524c62.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
          <a  href="#" class=""style=" color:#fff"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <i class="fas fa-columns"></i>
            <span>Dashboard</span>
          </a>
          <ul>
            <li><a class="active" href="index.html" style=" color:#fff">Classic</a></li>
            <li><a href="index_2.html" style=" color:#fff">Minimal</a></li>
          </ul>

        </li>

       

      </ul>
    
</nav>
<!-- sidebar part end -->
 <!--/ sidebar  -->


<section class="main_content dashboard_part" >
        <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center" style="background: #49596d;">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area" >
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here..." >
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="./img/<?= $fetch['profile_img']?>" alt="#">
                            <div class="profile_info_iner">
                                <p>Welcome Admin!</p>
                                <h5><?= $fetch['name']?></h5>
                                <div class="profile_info_details">
                                    <a href="#">My Profile <i class="ti-user"></i></a>
                                    <a href="#">Settings <i class="ti-settings"></i></a>
                                    <a href="../login/logout.php">Log Out <i class="ti-shift-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->

