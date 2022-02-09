<?php
require_once "../inc/db.php";

$select ="SELECT * FROM users";
$query = mysqli_query($connect, $select);
$fetch = mysqli_fetch_all($query, 1);

// echo "<pre>";
// print_r($fetch);
// echo "</pre>";


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log IN</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body style="height:100vh; display:flex; background-color:#CEE3F5;">

  <div class="card col-8 m-auto shadow rounded" style="">
    <div class="card-header" style="background-color: #25485F;color:#fff">
      <h2>All User Address</h2>
    </div>
    <div class="card-body">
      <table class="table table-responsive">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Profile_img</th>
          <th>Action</th>
        </tr>
        <?php
        if(count($fetch) > 0){
          foreach($fetch as $key => $data){
            ?>
          <tr>
            <td> <?= ++$key ?> </td>
            <td> <?= $data['name'] ?> </td>
            <td> <?= $data['email'] ?> </td>
            <td> <?= $data['password'] ?> </td>
            <td> <?= $data['images']?> </td>
            <td> <a href="view_post.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-primary">Show</a></td>
           </tr>
           <?php
          }
        }else{
          ?>
        <h3 class="text-danger text-center mb-5">404 Not Found..!</h3>
        <?php
        }
        ?>
      </table>
    </div>
  </div>

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>