<?php
include $_SERVER['DOCUMENT_ROOT'] . '/advertiser/essentials/redirectOut.php';

$conn = new mysqli("localhost", "root", "", "merolagi_database1");
$sql1 = "SELECT * FROM `db1020` ORDER BY `id` DESC";
$result = mysqli_query($conn, $sql1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.js"></script>
  <link href="style.css" rel="stylesheet" />
  <link href="/wholesale/dashboardHeader/header.css" rel="stylesheet">
  <title>Add Products</title>
</head>

<body>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/advertiser/dashboardHeader/header.html';
  ?>
  <div class="w-100 l-tab-bar">
    Please Select The Product You Want To Sell.
  </div>
  <div class="l-breadcrumb" style="padding:20px;padding-bottom:0">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Advertise Portal</li>
        <li class="breadcrumb-item active" aria-current="page">New Products</li>
      </ol>
    </nav>
  </div>
  <div class="l-product-fixation-1 ">
    <div class="row">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $token = $row['productToken'];
        $generalInfo = "SELECT * FROM `db102` WHERE `token`='{$token}'";
        $generalResult = mysqli_query($conn, $generalInfo);
        $generalRow = mysqli_fetch_assoc($generalResult);
        $primaryImage = "SELECT `image` FROM `db1022` WHERE `token`='{$token}'";
        $primaryImageResult = mysqli_query($conn, $primaryImage);
        $primaryImageRow = mysqli_fetch_assoc($primaryImageResult);

      ?>
        <div class="col-md-2">
          <div class="">
            <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
              <img src="/essentials/database/images/<?php echo $primaryImageRow['image']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $generalRow['name']; ?></h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Price:<span style="color: grey;"> Rs. <?php echo $generalRow['price']; ?></span></li>
                <li class="list-group-item">Stock:<span style="color: grey;"> <?php echo $generalRow['quantity']; ?></span></li>
              </ul>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6" style="padding: 10px;">
                    <a href="" class="btn btn-outline-primary l-sell-btn w-100" style="margin:auto">Save</a>
                  </div>
                  <div class="col-md-6" style="padding: 10px;">
                    <a href="/advertiser/getProduct/index.php?alias=<?php echo $row['alias'] ?>" class="btn btn-success l-sell-btn w-100" style="margin:auto">SELL</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>

    </div>

  </div>

  <script src="script.js"></script>

</body>

</html>