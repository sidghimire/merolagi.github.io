<?php
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

  <!-- Bootstrap CSS -->

  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <script src="/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" />
  <link href="/universalFiles/header.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

  <title>Merolagi.com</title>
</head>

<body>
  <script src="/js/jquery.js"></script>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/universalFiles/header.html';
  ?>
  <div class="container-fluid l-md-remove">
    <div class=" d-flex row l-category-tab-div">
      <div class="l-category-item col-md-1 text-center l-text-style-2">Artsy & Prints</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Stationary</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Tech</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Women</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Men</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Kids</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Food</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Go Local</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Fun</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Workshops</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Gifting</div>
      <div class="l-category-item col-md-1 text-center l-text-style-2">Sales</div>
    </div>
  </div>
  <div class="l-breadcrumb" style="padding:20px;padding-bottom:0">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item"><?php echo $generalRow['category'] ?></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $generalRow['name'] ?></li>
      </ol>
    </nav>
  </div>
  <div class="l-product-fixation-1">
    <div class="row">
      <div class="col-md-6 " style="display:flex;flex-direction:column">
        <div class="">
          <?php
          $imageRow = mysqli_fetch_assoc($primaryImageResult);
          
          ?>
          <img src="/essentials/database/images/<?php echo $imageRow['image'] ?>" class="w-100 l-big-image" alt="" srcset="">
        </div>
        <div class="row" style="margin-top: 20px;">
        <?php 
        while($imageRow= mysqli_fetch_assoc($secondaryImageResult)){
        ?>
          <div class="col-3">
            <img src="/essentials/database/images/<?php echo $imageRow['image'] ?>" class="w-100 l-small-image" alt="" srcset="">
          </div>
        <?php
        }
        ?>  
        </div>
      </div>
      <div class="col-md-6" style="padding-inline: 20px;">
        <div class="w-100 product-description-main-div" style="display: flex;flex-direction:column">
          <div class="l-description-title">
            <?php echo $generalRow['name'] ?>
          </div>
          <div class="l-local-delivery">
            <span class="bi-truck"></span> Free Local Delivery
          </div>
          <div class="l-price-and-share-div row" style="margin-top: 35px;">
            <div class="col-md-6">
              <div class="l-product-price">
                Rs. <?php echo $generalRow['price'] ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="l-social-media">
                Share To : &emsp;
                <i class="bi-facebook"></i>
                <i class="bi-twitter"></i>
                <i class="bi-whatsapp"></i>
                <i class="bi-chat-dots"></i>
                <i class="bi-linkedin"></i>
                <i class="bi-envelope"></i>
              </div>
            </div>
          </div>
          <div class="l-quantity-div" style="display: flex;flex-direction:column">
            <span class="l-label-1">Quantity</span>
            <div class="d-flex" style="margin-top: 10px;">
              <span class="bi-dash"></span>
              <span class="quantity-counter">0</span>
              <span class="bi-plus"></span>
            </div>
            <script src="script.js"></script>

            <div class="d-flex" style="margin-top: 10px;">
              <span class="color-choose color-blue"></span>
              <span class="color-choose color-black"></span>
              <span class="color-choose color-white"></span>
              <span class="color-choose color-yellow"></span>
              <span class="color-choose color-orange"></span>


            </div>
            <div class="addtocart-btn">Add To Cart</div>
          </div>
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

          <div class="additional-information " style="display: flex;flex-direction:column">
            <span class="l-label-1">Shipping Information <span class="bi-truck"></span></span>
            <div class="row">
              <div class="row" style="padding-left: 25px;padding-top:10px">
                <div class="col-3">
                  <span class="row l-additional-info-label">Estimated Arrival</span>
                </div>
                <div class="col-8">
                  <span class="l-additional-info-label margin-30-res" style="color: black;">2-3 Days</span>
                </div>
              </div>
              <div class="row" style="padding-left: 25px;padding-top:10px">
                <div class="col-3">
                  <span class="row l-additional-info-label">Availability</span>
                </div>
                <div class="col-8">
                  <span class="l-additional-info-label margin-30-res" style="color: black;">Kathmandu, Nepal</span>
                </div>
              </div>
              <div class="row" style="padding-left: 25px;padding-top:10px">
                <div class="col-3">
                  <span class="row l-additional-info-label">Return Policy</span>
                </div>
                <div class="col-8">
                  <span class="l-additional-info-label margin-30-res" style="color: black;">Returnable</span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>