<?php
if(!isset($_COOKIE['email']) && !isset($_COOKIE['token']) && !isset($_COOKIE['username'])){
    if($_COOKIE['email']=="" && $_COOKIE['token']=="" && $_COOKIE['username']=="" ){
        header("Location: /wholesale/login/");
    }
}
?>