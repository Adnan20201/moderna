<?php
require_once './inc/header.php';
require_once './inc/db.php';
$select = "SELECT * FROM banner";
$query = mysqli_query($connect, $select);
$fetch = mysqli_fetch_all($query, 1);
// print_r($fetch);

?>



<div class="container">

  <div class="card col-6 mx-auto mt-5 px-0 shadow-lg rounded">

    <div class="card-header " style="background: #265084;">
      <h2 class="text-white">All Banner</h2>
    </div>
    <div class="card-body" style="background: 49596d;">
      <table class="table table-responsive">
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Details</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <?php
        foreach ($fetch as $key => $data) {
        ?>
          <tr>
            <td><?= ++$key ?></td>
            <td><?= $data['title'] ?></td>
            <td><?= $data['detail'] ?></td>
            <td>
              <span class="text-white btn <?= $data['status'] == 0 ? 'bg-info' : 'bg-danger'?>">
                <?= $data['status'] == 0 ? 'Active' : "Deactive"  ?>
              </span>
            </td>
            <td>
              <a href="" class="btn btn-sm btn-success">Edit</a>
              <span class="btn btn-sm <?= $data['status'] == 0 ? 'bg-danger' : 'bg-info'?>">
              <a href="./controller_banner/banner_status.php?id=<?= $data['id']?>" class="btn">
               <?= $data['status'] == 0 ? 'Deactive' : "Active"  ?> </a>
              </span> 
            </td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>
</div>







<?php
require_once './inc/footer.php';
?>