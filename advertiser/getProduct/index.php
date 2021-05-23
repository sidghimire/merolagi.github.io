<?php
include $_SERVER['DOCUMENT_ROOT'] . '/advertiser/essentials/redirectOut.php';

$conn = new mysqli("localhost", "root", "", "merolagi_database1");
$alias = mysqli_escape_string($conn, $_GET['alias']);
$sql1 = "SELECT `productToken` FROM `db1020` WHERE `alias`='{$alias}'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  $token = $row['productToken'];
  $generalInfo = "SELECT * FROM `db102` WHERE `token`='{$token}'";
  $result = mysqli_query($conn, $generalInfo);
  $generalRow = mysqli_fetch_assoc($result);
  $titleInfo = "SELECT `title` FROM `db1021` WHERE `token`='{$token}' ORDER BY `id` DESC";
  $titleResult = mysqli_query($conn, $titleInfo);
  $valueInfo = "SELECT `value` FROM `db1021` WHERE `token`='{$token}' ORDER BY `id` DESC";
  $valueResult = mysqli_query($conn, $valueInfo);
  $primaryImage = "SELECT `image` FROM `db1022` WHERE `token`='{$token}'";
  $primaryImageResult = mysqli_query($conn, $primaryImage);
  $secondaryImage = "SELECT `image` FROM `db1023` WHERE `token`='{$token}'";
  $secondaryImageResult = mysqli_query($conn, $secondaryImage);
}
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
  <title>Get Products</title>
</head>

<body>
  <script src="/js/jquery.js"></script>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/advertiser/dashboardHeader/header.html';
  ?>

  <div class="l-breadcrumb" style="padding:20px;padding-bottom:0">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Get Products</li>
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item"><?php echo $generalRow['category'] ?></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $generalRow['name'] ?></li>
      </ol>
    </nav>
  </div>
  <div class="l-product-fixation-1">
    <div class="row">

      <div class="col-md-6" style="padding-inline: 20px;padding-top:10px">
        <div class="w-100 product-description-main-div" style="display: flex;flex-direction:column">
          <div class="l-description-title">
            <?php echo $generalRow['name'] ?>
          </div>

          <div class="l-price-and-share-div row" style="margin-top: 35px;">
            <div class="col-md-6">
              <div class="l-product-price">
                Rs. <?php echo round($generalRow['price'] * 1.1, 0) ?>

              </div>
            </div>

          </div>
          <form class="l-quantity-div" style="display: flex;flex-direction:column">
            <span class="l-label-1">Quantity</span>
            <div style="margin-top: 10px;display:flex;flex-direction:column">
              <span class="l-input-label">Enter The Quantity Of Products You Want To Sell</span>
              <input type="number" placeholder="Quantity" id="quantity" class="l-input-field" min="1" required>
            </div>
            <div style="margin-top: 10px;display:flex;flex-direction:column">
              <span class="l-input-label">How much do you want to sell this product for?</span>
              <input type="number" placeholder="Price" id="price" class="l-input-field" min="0" required>
            </div>
            <script src="script.js"></script>

            <input type="submit" class="addtocart-btn" id="sellProduct" value="Sell Product">
          </form>
          <span class="l-label-1" style="margin-top: 10px;">Product Description <span class="bi-question-square"></span></span>

          <div class="l-product-description">
            <?php echo $generalRow['description'] ?>
          </div>
          <div class="additional-information " style="display: flex;flex-direction:column">
            <span class="l-label-1">Additonal Information <span class="bi-question-square"></span></span>
            <div class="row">
              <div class="col-3" style="padding-left: 25px;padding-top:10px">
                <?php
                while ($titleRow = mysqli_fetch_assoc($titleResult)) {
                ?>
                  <span class="row l-additional-info-label"><?php echo $titleRow['title'] ?></span>
                <?php
                }
                ?>

              </div>
              <div class="col-8" style="padding-top:10px">
                <?php
                while ($valueRow = mysqli_fetch_assoc($valueResult)) {
                ?>
                  <span class="row l-additional-info-label margin-30-res" style="color: black;"><?php echo $valueRow['value'] ?></span>
                <?php
                }
                ?>
              </div>
            </div>
          </div>


        </div>
      </div>

      <div class="col-md-6 " style="display:flex;flex-direction:column;padding-top:10px">
        <div class="">
          <?php
          $imageRow = mysqli_fetch_assoc($primaryImageResult);

          ?>
          <img src="/essentials/database/images/<?php echo $imageRow['image'] ?>" class="w-100 l-big-image" alt="" srcset="">
        </div>
        <div class="row" style="margin-top: 20px;">
          <?php
          while ($imageRow = mysqli_fetch_assoc($secondaryImageResult)) {
          ?>
            <div class="col-3">
              <img src="/essentials/database/images/<?php echo $imageRow['image'] ?>" class="w-100 l-small-image" alt="" srcset="">
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>