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
    <script src="/js/jquery.js"></script>

    <?php
      include $_SERVER['DOCUMENT_ROOT'].'/wholesale/dashboardHeader/header.html';
    ?>
    <div class="w-100 l-tab-bar">
      Please Add Your Desired Product Here.
    </div>
    <div class="l-breadcrumb" style="padding:20px;padding-bottom:0">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">WholeSeller Portal</li>
          <li class="breadcrumb-item active" aria-current="page">Add Products</li>
        </ol>
      </nav>
    </div>
    <div class="l-product-fixation-1">
      <div class="row">
        <div class="col-md-6 " style="display:flex;flex-direction:column">
          <div class="">
            
            <img src="/images/mainImage.jpg" class="w-100 l-big-image" alt="" srcset="">
            <div class="w-100 l-input-main-photo-div">
              <input type="file" class="l-input-main-photo" title="Upload Image Here" >
            </div>
          </div>
          <div class="row" style="margin-top: 20px;">
            <div class="col-3" >
              <img src="/images/secondaryImage.jpg" class="w-100 l-small-image" alt="" srcset="">
            </div>
            <div class="col-3" >
              <div class="w-100 l-input-main-photo-div" style="padding-top:45px">
                <input type="file" class="l-input-main-photo l-small-image " style="" title="Upload Image Here" >
              </div>            
            </div>
          </div>
        </div>
        <div class="col-md-6" style="padding-inline: 20px;">
          <div class="w-100 product-description-main-div" style="display: flex;flex-direction:column">
            <div class="l-description-title d-flex">
              <textarea type="text" placeholder="Product Name" maxlength="64" rows="2" minlength="10" class="l-text-field" ></textarea>
              <span class="bi-pencil-fill" style="color: grey;font-size:12px;vertical-align:center"></span>
            </div>
            <div class="l-local-delivery">
            <span class="bi-truck"></span> Delivery Cost: Rs.50
            </div>
            <div class="l-price-and-share-div row" style="margin-top: 35px;">
              <div class="col-md-6">
                <div class="l-product-price-label">
                  Rs. <span style="margin-right: 5px;"></span><input type="text" class="l-product-price" maxlength="8" placeholder="Price">
                  <span class="bi-pencil-fill" style="color: grey;font-size:12px;vertical-align:center"></span>

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
              <div class="addtocart-btn">Add To Cart</div>
            </div>
            <span class="l-label-1" style="margin-top: 10px;">Product Description <span class="bi-pencil-fill"></span></span>

            <textarea type="text" class="l-product-description" placeholder="Enter Product Description Here..." maxlength="2024" rows="10" minlength="10"></textarea>
            <div class="additional-information " style="display: flex;flex-direction:column">
              <span class="l-label-1">Additonal Information <span class="bi-question-square"></span></span>
              <div class="row">
                <div class="col-3" id="l-product-feature-title" style="padding-left: 25px;padding-top:10px">
                  <select id="feature-title-1" name="featureTitle[]" class="row l-additional-info-label property-value-div " style="padding: 6px;">
                    <option value="Material">Material</option>
                    <option value="Size">Size</option>
                  </select>
                  

                </div>
                <div class="col-8" id="l-product-feature-value" style="padding-top:10px">
                  <span class="row d-flex property-value-div" >
                    <input type="text" id="feature-value-1" name="featureValue[]" placeholder="Value" class="l-additional-info-label margin-30-res" style="color: black; width:40%">
                    <span class="btn btn-secondary feature-btn-remove "  style="font-size:10px; width:30%;margin-inline:10px">Remove</span>
                  </span>
                </div>
                <div class="w-25 btn btn-success addmore" style="margin: 15px;font-size:12px">Add More</div>
              </div>
            </div>

            <div class="additional-information " style="display: flex;flex-direction:column">
              <span class="l-label-1">Shipping Information <span class="bi-truck"></span></span>
              <div class="row">
                <div class="row" style="padding-left: 25px;padding-top:10px">
                  <div class="col-3" >
                    <span class="row l-additional-info-label">Estimated Arrival</span>
                  </div>
                  <div class="col-8">
                    <span class="l-additional-info-label margin-30-res" style="color: black;">2-3 Days</span>
                  </div>
                </div>
                <div class="row" style="padding-left: 25px;padding-top:10px">
                  <div class="col-3" >
                    <span class="row l-additional-info-label">Availability</span>
                  </div>
                  <div class="col-8">
                    <span class="l-additional-info-label margin-30-res" style="color: black;">Kathmandu, Nepal</span>
                  </div>
                </div>
                <div class="row" style="padding-left: 25px;padding-top:10px">
                  <div class="col-3" >
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
  </div>
  <script src="script.js"></script>

  </body>
</html>
