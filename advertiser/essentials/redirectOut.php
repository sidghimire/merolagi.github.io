<?php
if(!isset($_COOKIE['advertiseremail']) && !isset($_COOKIE['advertisertoken']) && !isset($_COOKIE['advertiserusername'])){
    if($_COOKIE['advertiseremail']=="" && $_COOKIE['advertisertoken']=="" && $_COOKIE['advertiserusername']=="" ){
        header("Location: /advertiser/login/");
    }
}
?>