<?php
require_once './inc/header.php';

?>


<div class="container">

  <div class="card col-6 mx-auto mt-5 px-0 shadow-lg rounded">
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
      <h2 class="text-white">Add Blog</h2>
    </div>
    <div class="card-body" style="background: #e537ab;">
      <form action="./controller_blog/store_blog.php" method="POST">

        <div class="mb-3">
          <input type="text" name="icons" class="form-control" my-3 placeholder="Blog icons">
          <span class="text-white">

            <?= isset($_SESSION['error_icons']) ? $_SESSION['error_icons'] : '' ?>
          </span>
        </div>
        <div class="mb-3">
          <input name="blog_title" class="form-control" my-3 placeholder="Blog title">
          <span class="text-white">
            <?= isset($_SESSION['error_title'] ) ? $_SESSION['error_title']  : '' ?>
          </span>
        </div>

        <div class="mb-3">
          <input type="text" name="description" class="form-control" my-3 placeholder="Blog description ">
          <span class="text-white">
            <?= isset($_SESSION['error_description']) ? $_SESSION['error_description'] : '' ?>
          </span>
        </div>

        <button type="submit" class="btn btn-sm text-white mx-auto" name="submit" style="background:#21556A; padding: 10px 40px; border: 0; font-size: 18px; border-radius: 50px;margin-left: 75px;">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php

unset($_SESSION['success'] );
unset($_SESSION['error_icons']);
unset($_SESSION['error_description']);
require_once './inc/footer.php';
?>