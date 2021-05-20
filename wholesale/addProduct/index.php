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
  include $_SERVER['DOCUMENT_ROOT'] . '/wholesale/dashboardHeader/header.html';
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
    <form id="submitForm" class="row" style="padding-inline: 10px;">
      <div class="col-md-6">
        <div class="l-input-unit">
          <input type="submit" id="submit" title="Proceed" class="btn btn-warning" style="width: 30%;">
        </div>
        <div class="l-input-unit">
          <label for="productName" class="l-input-label">Enter Product Name</label>
          <input type="text" id="productName" minlength="5" maxlength="100" placeholder="Product Name" class="l-input-field" required>
        </div>
        <div class="l-input-unit">
          <label for="price" class="l-input-label">Enter The Price</label>
          <input type="number" id="price" placeholder="Price" class="l-input-field" required>
        </div>
        <div class="l-input-unit">
          <label for="quantity" class="l-input-label">Enter Quantity</label>
          <input type="number" id="quantity" placeholder="Quantity" class="l-input-field" required>
        </div>
        <div class="l-input-unit">
          <label for="quantity" class="l-input-label">Category</label>
          <select id="category" name="category" required class="l-input-field" style="padding: 6px;">
            <option value="Material">Material</option>
            <option value="Size">Size</option>
          </select>
        </div>
        <div class="l-input-unit">
          <label for="description" class="l-input-label">Product Description</label>
          <textarea type="number" id="description" rows="10" placeholder="Product Description" class="l-input-field" required></textarea>
        </div>
      </div>
      <div class="col-md-6">

        <div class="l-input-unit">
          <label for="description" class="l-input-label">Product Features</label>
          <div class="row">
            <div class="col-4" id="l-product-feature-title" style="padding-left: 25px;padding-top:10px">
              <select id="feature-title-1" name="featureTitle[]" required class="row property-value-div l-dynamic-field1" style="padding: 6px;">
                <option value="Material">Material</option>
                <option value="Size">Size</option>
              </select>
            </div>
            <div class="col-8" id="l-product-feature-value" style="padding-top:10px">
              <span class="row d-flex">
                <input type="text" id="feature-value-1" name="featureValue[]" required placeholder="Value" class="property-value-div l-dynamic-field2" style="color: black; width:40%;padding:6px">
                <span class="btn btn-secondary feature-btn-remove " style="font-size:10px; width:30%;margin-inline:10px">Remove</span>
              </span>
            </div>
            <div class="w-25 btn btn-success addmore" style="margin: 15px;font-size:12px">Add More</div>
          </div>
        </div>

        <div class="l-input-unit l-append-primary-image">
          <label for="description" class="l-input-label">Primary Image</label>
          <input type="file" id="primaryImage" accept="image/gif, image/jpeg, image/jpg, image/png" class="custom-file-input" title="Input Primary Images" required>
          <div class="w-100 l-primary-image-div">
            <img src="" id="primaryOutput" class="w-100" alt="">
          </div>
        </div>
        <div class="l-input-unit">
          <label for="description" class="l-input-label">Primary Secondary Images</label>
          <input type="file" id="secondaryImage" accept="image/gif, image/jpeg, image/jpg, image/png" class="custom-file-input" title="Input Primary Images" multiple required>
          <div class="row l-secondary-image-container">

          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="script.js"></script>

</body>

</html>