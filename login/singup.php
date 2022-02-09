<?php
session_start();

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

  <div class="card col-5 m-auto shadow rounded">
    <div class="card-header" style="background-color: #25485F;color:#fff">
      <h2>Sing Up</h2>
    </div>
    <div class="card-body">
      
      <form action="./singup_store.php" method="POST" enctype="multipart/form-data">
        

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="" name="name" placeholder="Name">
          <span class="text-danger">
            <?= isset($_SESSION['error_name']) ? $_SESSION['error_name'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <label for="text" class="form-label">Email address</label>
          <input type="email" class="form-control" id="" name="email" placeholder="Email">
          <span class="text-danger">
            <?= isset($_SESSION['error_email']) ? $_SESSION['error_email'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="" name="password" placeholder="Password">
          <span class="text-danger">
            <?= isset($_SESSION['error_password']) ? $_SESSION['error_password']  : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Confirm password</label>
          <input type="password" class="form-control" id="" name="confirm_password" placeholder="Confirm password">
          <span class="text-danger">
            <?= isset($_SESSION['error_confirm_password']) ? $_SESSION['error_confirm_password']  : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="file" class="profile_img" id="" name="profile_img" placeholder="Profile_img">
          <span class="text-danger">
            <?= isset($_SESSION['error_profile_img']) ? $_SESSION['error_profile_img']  : '' ?>
          </span>
        </div>

        <button type="submit" class="btn btn-primary" name="submit" style="background: #49596d; padding: 10px 40px; border: 0; font-size: 18px; border-radius: 50px;">Register</button>
        <a href="./index.php" class="btn bt-sm " style="background:#E9252B; color:#fff;padding: 10px 40px;border: 0;font-size: 18px;border-radius: 50px;">Login</a>
        <a href="" class="btn bt-sm" style="background: #173AE0; color:#fff;padding: 10px 40px;border:0; font-size: 18px;border-radius: 50px;">All User Add</a>

      </form>
    </div>
  </div>

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
session_unset();
