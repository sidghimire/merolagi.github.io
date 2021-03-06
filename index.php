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
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <script src="./js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" />
    <link href="/universalFiles/header.css" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />

    <title>Merolagi.com</title>
  </head>
  <body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/universalFiles/header.html';
    ?>
    <div style="width: 100%">
      <div class="l-register-div">
        <i class="bi-stars"></i>
        Join Us And Become Major Market Leaders
        <a href="/wholesale/signup/"
          class="text-style-2 btn-type-2"
          style="margin-inline: 20px; width: 50%; text-align: center;text-decoration:none"
          >Register As WholeSeller</a
        >
      </div>
    </div>
    <div class="container-fluid row ">
      <div class="col-md-6" style="text-align: center">
        <img src="./images/wallpaper.jpg" class="l-wallpaper-image" alt="" />
      </div>
      <div class="col-md-6 d-flex flex-column l-fixation-2">
        <span class="text-style-3">Where Trade Happens</span>
        <span class="text-style-4">
          When You need to sell product but dont know what shopping site to
          trust. We work with you and your partners for free. Customer service
          is prime
        </span>
        <span class="l-email-section">
          <input
            type="text"
            class="email-receive"
            placeholder="Email address"
            style="margin: 10px"
          />
          <span class="text-style-2 btn-type-2 get-started-btn"
            >Get Started</span
          >
        </span>
        <span class="text-style-5"
          >Already using merolagi.com?
          <span
            class="text-style-2"
            style="
              font-weight: 700;
              padding: 10px;
              margin-left: 20px;
              font-size: 15px;
            "
            >Sign In</span
          ></span
        >
      </div>
    </div>
    <div class="l-features-section">
      <div class="row">
        <div class="col-md-6">
          <div
            id="featuredImages"
            class="carousel carousel-dark slide"
            data-bs-ride="carousel"
            style="width: 90%; margin: auto"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#featuredImages"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#featuredImages"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#featuredImages"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">
                <img
                  src="./images/1.jpg"
                  class="d-block"
                  style="max-height: 400px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./images/2.jpg"
                  class="d-block w-100"
                  style="max-height: 400px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./images/3.jpg"
                  class="d-block w-100"
                  style="max-height: 400px"
                  alt="..."
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex flex-column l-fixation-2">
          <span class="text-style-3" style="color: white">
            Product Meets Market
          </span>
          <span class="text-style-4" style="color: white">
            If you are producers be free to share your products here. Your
            projects will definitely meet the market.
          </span>
          <span
            class="text-style-2 btn-type-2 l-fixation-3"
            style="text-align: center"
            >Learn More</span
          >
        </div>
      </div>
    </div>

    <div style="padding: 30px">
      <div class="row">
        <div class="col-md-6 d-flex flex-column l-fixation-2">
          <span class="text-style-3">Zero Investment Get Started</span>
          <span class="text-style-4">
            All you need to do is setup a social media to sell your product.
            Hazzle free. Create Your Own Online Store.
          </span>
          <span
            class="text-style-2 btn-type-2 l-fixation-3"
            style="text-align: center"
            >Learn More</span
          >
        </div>
        <div class="col-md-6">
          <div
            id="featuredImages2"
            class="carousel carousel-dark slide"
            data-bs-ride="carousel"
            style="width: 90%; margin: auto"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#featuredImages2"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#featuredImages2"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#featuredImages2"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">
                <img
                  src="./images/3.jpg"
                  class="d-block"
                  style="max-height: 400px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./images/2.jpg"
                  class="d-block w-100"
                  style="max-height: 400px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./images/1.jpg"
                  class="d-block w-100"
                  style="max-height: 400px"
                  alt="..."
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="l-features-section">
      <div class="row">
        <div class="col-md-6" style="padding: 20px">
          <iframe
            src="https://www.youtube.com/embed/7JJfJgyHYwU"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            style="margin: auto; width: 100%; height: 350px"
          ></iframe>
        </div>
        <div class="col-md-6 d-flex flex-column l-fixation-2">
          <span class="text-style-3" style="color: white">
            Create Most Appealing Videos
          </span>
          <span class="text-style-4" style="color: white">
            Advertise your products through the most eyegasmic videos. Target
            the most possible range of customers. Bring surplus to your growth.
          </span>
          <span
            class="text-style-2 btn-type-2 l-fixation-3"
            style="text-align: center"
            >Learn More</span
          >
        </div>
      </div>
    </div>
  </body>
</html>
