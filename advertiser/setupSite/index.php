<?php
include $_SERVER['DOCUMENT_ROOT'] . '/advertiser/essentials/redirectOut.php';
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
  <div class="l-breadcrumb" style="padding:20px;padding-bottom:0">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Advertiser Portal</li>
        <li class="breadcrumb-item active" aria-current="page">Advertise Product</li>
      </ol>
    </nav>
  </div>
 

</body>

</html>