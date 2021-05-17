<?php
setcookie("email", $row['email'],  time()-3600, "/");
setcookie("token", $row['token'],  time()-3600, "/");
setcookie("username", $row['username'], time()-3600, "/");
header("Location: /wholesale/login/");
?>