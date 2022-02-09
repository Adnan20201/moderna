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

  <div class="card col-6 m-auto shadow rounded">

    <?php
    if (isset($_SESSION['success'])) {
    ?>
      <span class="alert alert-success bg-info">
        <?= $_SESSION['success'] ?>
      </span>
    <?php
    }
    ?>
    </span>


    <div class="card-header" style="background-color: #25485F;color:#fff">
      <h2>Login</h2>
    </div>
    <div class="card-body">

      <form action="./login.php" method="POST">
        <div class="row">
          <div class="col-7">

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
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

            <button type="submit" class="btn btn-sm text-white" name="submit" style="background: #49596d; padding: 10px 40px; border: 0; font-size: 18px; border-radius: 50px;"> log in</button>

          </div>

          <div class="col-5">
            <img src="../img/download.png" alt="" class="" style="width: 80px; margin-left: 90px;">
            <h3 style="padding-left:30px;">Welcome To Login</h3>
            <a href="./singup.php" class="btn btn-sm text-white" name="" style="background: #49596d; padding: 10px 40px; border: 0; font-size: 18px; border-radius: 50px;margin-left: 75px;">
              sing up
            </a>
          </div>

        </div>
    </div>

    </form>
  </div>
  </div>

  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php
session_unset();
