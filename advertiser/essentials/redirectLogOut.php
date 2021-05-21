<?php
setcookie("advertiseremail", $row['email'],  time()-3600, "/");
setcookie("advertisertoken", $row['token'],  time()-3600, "/");
setcookie("advertiserusername", $row['username'], time()-3600, "/");
header("Location: /advertiser/login/");
?>