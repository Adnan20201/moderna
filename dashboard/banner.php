<?php
require_once './inc/header.php';

?>


<div class="container">

  <div class="card col-10 mx-auto mt-5 px-0 shadow-lg rounded">
    <?php
    if (isset($_SESSION['success'])) {
    ?>
      <span class="alert alert-danger">
        <?= $_SESSION['success'] ?>
      </span>
    <?php
    }
    ?>

    <div class="card-header " style="background: #265084;">
      <h2 class="text-white">Add Banner</h2>
    </div>
    <div class="card-body" style="background: #49596d;">
      <form action="./controller_banner/store_banner.php" method="POST">

        <div class="mb-3">
          <input type="text" name="title" class="form-control" my-3 placeholder="Banner Title">
          <span class="text-danger">
            <?= isset($_SESSION['error_title']) ? $_SESSION['error_title'] : '' ?>
          </span>
        </div>
        <div class="mb-3">
          <textarea name="detail" class="form-control" my-3 placeholder="Banner Details"></textarea>
          <span class="text-danger">
            <?= isset($_SESSION['error_detail']) ?  $_SESSION['error_detail '] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="buttom_text" class="form-control" my-3 placeholder="Buttom Text">
          <span class="text-danger">
            <?= isset($_SESSION['error_button_text']) ? $_SESSION['error_button_text'] : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="buttom_link" class="form-control" my-3 placeholder="Buttom URl">
          <span class="text-danger">
            <?= isset($_SESSION['error_button_link']) ? $_SESSION['error_button_link'] : '' ?>
          </span>
        </div>

        <button type="submit" class="btn btn-sm text-white mx-auto" name="submit" style="background:hotpink; padding: 10px 40px; border: 0; font-size: 18px; border-radius: 50px;margin-left: 75px;">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php
unset($_SESSION['error_title']);
unset($_SESSION['error_detail']);
unset($_SESSION['error_button_text']);
unset($_SESSION['error_button_link']);
require_once './inc/footer.php';


?>

<i class="bx bxl-dribbble"></i>
    Lorem Ipsum
    Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident