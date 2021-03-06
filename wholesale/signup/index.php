<?php
    include $_SERVER['DOCUMENT_ROOT'].'/wholesale/essentials/redirectIn.php';
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
    <script src="/js/jquery.js"></script>

    <link href="style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <title>| Sign Up | Merolagi.com</title>
</head>

<body>
    <a href="/" class="container-fluid">
        <img src="/logo.png" style="width: 50px;margin:10px" alt="">
    </a>
    <div class="container-fluid l-main-container">
        <div class="row">
            <div class="col-md-6 l-md-remove">
                <img src="/wholesale/signup/mainImage.png" class="w-100" alt="">
            </div>
            <div class="col-md-6">
                <form class="container-fluid" id="submitForm" method="POST" style="padding:20px;display:flex;flex-direction:column">
                    <span class="l-font-1">
                        Have A Great Time
                    </span>
                    <span class="l-font-2">
                        To Keep Connected With Us Please Login With Your Personal Information
                    </span>
                    <div class="" style="display: flex;flex-direction:column;margin-top: 5px;">
                        <label for="email">Enter Your Email</label>
                        <input type="text" class="l-text-field-1" id="email" placeholder="Email" required>
                    </div>
                    <div class="" style="display: flex;flex-direction:column;margin-top: 5px;">
                        <label for="email">Enter Your Name</label>
                        <input type="text" class="l-text-field-1" id="username" minlength="8" placeholder="Name" required>
                    </div>
                    <div class="" style="display: flex;flex-direction:column;margin-top: 5px;">
                        <label for="email">Enter Your Password</label>
                        <input type="password" class="l-text-field-1" id="password" minlength="8" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success l-login-btn">Sign Up</button>
                    <span class="l-font-3">Already Have An Account? <a class="l-font-4" href="/wholesale/login/">Login Here</a></span>
                </form>
            </div>
        </div>
    </div>
    <script src="./control/control.js"></script>
</body>

</html>