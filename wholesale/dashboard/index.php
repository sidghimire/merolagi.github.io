<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>

    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <script src="/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" />
    <link href="/wholesale/dashboardHeader/header.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.0/chart.min.js"></script>
    <title>Dashboard</title>
  </head>
  <body>
    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/wholesale/dashboardHeader/header.html';
    ?>
    <div class="w-100 l-tab-bar">
      Welcome Back,Sid.
    </div>
    <div class="l-breadcrumb" style="padding:20px;padding-bottom:0">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">WholeSeller Portal</li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
    </div>
    <div class="all-category-div " style="padding:25px;padding-top:5px">
    <div class="row">
        <div class="col-md-3 " style="padding: 20px;">
          <div class="l-grid-border">
            <canvas id="myChart" width="100" height="100">
              <script src="script.js"></script>
            </canvas>
            <div class="l-dashboard-title text-center">
              Categories You Trade
            </div>
          </div>
        </div>
        <div class="col-md-3 " style="padding: 20px;">
          <div class="l-grid-border">
            <canvas id="myChart2" width="100" height="100">
              <script src="script.js"></script>
            </canvas>
            <div class="l-dashboard-title text-center">
            Monthly Revenue
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>
