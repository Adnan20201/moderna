<?php
require_once "./inc/db.php";
require_once "./inc/header.php";

//Banner Query
$select = "SELECT * from banner WHERE status = 0  ORDER BY id DESC";
$query = mysqli_query($connect, $select);
$fetch = mysqli_fetch_all($query, 1);
// print_r($fetch);


?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">


    <?php
    foreach ($fetch as $key => $banner) {
    ?>
      <!-- Slide 1 -->
      <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?= $banner['title'] ?></h2>
          <p class="animate__animated animate__fadeInUp"><?= $banner['detail'] ?></p>

          <?php
          if (($banner['button_text'] != 0)) {
          ?>
            <a href="<?= $banner['buttom_link'] ?>" class="btn-get-started animate__animated animate__fadeInUp"><?= $banner['button_text'] ?></a>
          <?php
          }
          ?>
        </div>
      </div>

    <?php
    }

    ?>




    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->

  <?php

  // Blog Query
  $selects = "SELECT * from blog WHERE status = 0  ORDER BY id DESC";
  $query = mysqli_query($connect, $select);
  $fetch = mysqli_fetch_all($query, 1);
  // print_r($query);
  ?>
  <section class="services">
    <div class="container">

      <div class="row">

        <?php
        foreach ($fetch as $key => $blog) {
        ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><?= $blog['icons'] ?></i></div>
              <h4 class="title"><a href=""><?= $blog['title'] ?></a></h4>
              <p class="description"><?= $blog['description'] ?></p>
            </div>
          </div>

        <?php
        }
        ?>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="img/why-us.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section class="features">
    <div class="container">

      <div class="section-title">
        <h2>Features</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="img/features-1.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-4">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
          </ul>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="img/features-2.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3>Corporis temporibus maiores provident</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5">
          <img src="img/features-3.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5">
          <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
          <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
          <ul>
            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
          </ul>
        </div>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-md-5 order-1 order-md-2">
          <img src="img/features-4.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1">
          <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->

<?php
require_once "./inc/footer.php"
?>