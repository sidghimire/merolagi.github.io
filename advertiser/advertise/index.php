<?php
include $_SERVER['DOCUMENT_ROOT'] . '/advertiser/essentials/redirectOut.php';
$conn = new mysqli("localhost", "root", "", "merolagi_database1");
$transactionToken = mysqli_escape_string($conn, $_GET['transactionToken']);
$getProduct = "SELECT * FROM `db301` WHERE `token`='{$transactionToken}' and `userToken`='{$_COOKIE['advertisertoken']}'";
$runQuery = mysqli_query($conn, $getProduct);
$assocQuery = mysqli_fetch_assoc($runQuery);
$getProductInfo = "SELECT * FROM `db102` WHERE `token`='{$assocQuery['productToken']}'";
$exeGetProduct = mysqli_query($conn, $getProductInfo);
$productInfo = mysqli_fetch_assoc($exeGetProduct);
$percentageChange = (($assocQuery['price'] - $productInfo['price'] * 1.1) * 100) / ($productInfo['price'] * 1.1);
$perProfit = (($assocQuery['price'] - $assocQuery['price'] * .1) - $productInfo['price'] - ($assocQuery['price'] - $productInfo['price'] * 1.1) * .5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>

  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <script src="/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" />
  <link href="/wholesale/dashboardHeader/header.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <title>Advertise Your Product</title>
</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/advertiser/dashboardHeader/header.html';
  ?>
  <div class="w-100 l-tab-bar">
    How do you want to advertise this product?
  </div>
  <div class="l-breadcrumb" style="padding:20px;">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Advertiser Portal</li>
        <li class="breadcrumb-item active" aria-current="page">Advertise Product</li>
      </ol>
    </nav>
  </div>
  <div style="padding-inline: 40px;">
    <div class="row">
      <div class="col-md-5 ">
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Product Name</div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo $productInfo['name'] ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Quantity</div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo $assocQuery['quantity'] ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Wholesale Price</div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo $productInfo['price'] * 1.1 ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Your Price</div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo $assocQuery['price'] ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Price Difference</div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo ($assocQuery['price'] - $productInfo['price'] * 1.1) ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Percentage Change</div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo round($percentageChange, 2) ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Delivery Cost + Service Charge:<br>(per Product)</div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo ($assocQuery['price'] - $productInfo['price'] * 1.1) * .5 ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-success l-table-unit" style="color: white;">Your Profit: <br>(per Product) </div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo $perProfit ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-success l-table-unit" style="color: white;">Total Profit: <br>(for <?php echo $assocQuery['quantity'] ?> unit) </div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo $perProfit * $assocQuery['quantity'] ?></div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Average Price For This Product In The Market</div>
          <div class="col-7  bg-white l-table-unit l-table-right">123</div>
        </div>
        <div class="row l-table-row">
          <div class="col-5 l-table-left bg-grey l-table-unit">Transaction Id</div>
          <div class="col-7  bg-white l-table-unit l-table-right"><?php echo $transactionToken ?></div>
        </div>
      </div>
      <div class="col-md-7" style="display: flex;flex-direction:column">
        <div>Create An Advertising Medium</div>
      </div>
    </div>
  </div>

</body>

</html>