<?php
require_once "../inc/db.php";
$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id=$id";

$query = mysqli_query($connect, $select);
$fetch = mysqli_fetch_assoc($query);
// print_r($fetch);
?>



<div class="container">
  <div class="col-8 mx-auto mt-5">
    <div class="card-header">
      <h3>Post show</h3>
    </div>
    <div class="card-body">
      <table class="table table-responsive">
        <tr>
          <th>User Name</th>
          <th>Email</th>
          <th>password</th>
          <th>image</th>
        </tr>
        <tr>
          <td><?= $fetch['name'] ?></td>
          <td><?= $fetch['email'] ?></td>
          <td><?= $fetch['password'] ?></td>
          <td><?= $fetch['images']?></td>
        </tr>

      </table>

    </div>
  </div>
</div>


